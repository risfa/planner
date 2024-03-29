<?php
class Version
{
	public function __construct() {
	}

	public function getVersion() {
		return trim(file_get_contents(BASE . '/../version.txt'));
	}

	public function checkInstall($checkWritable = false) {
		$errors = array();

		if($this->checkDBAccess() !== TRUE) {
			$errors['checkDBAccess'] = $this->checkDBAccess();
		} else {
			if($this->checkDatabaseVersion() !== TRUE) {
				$errors['checkDatabaseVersion'] = $this->checkDatabaseVersion();
				if($errors['checkDatabaseVersion'] == 'database_upgrade_required') {
					$errors['databaseUpgradeResult'] = $this->upgradeVersion();
				}
			}
		}

		if($this->checkPhpVersion() !== TRUE) {
			$errors['checkPhpVersion'] = $this->checkPhpVersion();
		}

		if($checkWritable && $this->checkWritable() !== TRUE) {
			$errors['checkWritable'] = $this->checkWritable();
		}

		if($checkWritable && $this->checkWritableDatabaseInc() !== TRUE) {
			$errors['checkWritableDatabaseInc'] = $this->checkWritableDatabaseInc();
		}

		if($this->checkGD() !== TRUE) {
			$errors['checkGD'] = $this->checkGD();
		}

		// if more than one error/probleme in the checks, redirect to install/upgrade page
		if(count($errors) > 0) {
			return $errors;
		}
		return true;
	}

	// check de la version en ligne
	public function checkAvailableVersion() {
		global $lang;
		$infos = array();
		$context = @stream_context_create(array('http' => array('header'=>'Connection: close', 'timeout' => 3, 'user_agent' => 'Mozilla/5.0')));
		$url = 'https://www.soplanning.org/ws/version.php?version_install=' . $this->getVersion() . '&type=' . substr($_SERVER['DOCUMENT_ROOT'], 0, 1) . '&lang=' . $lang;
		$data = @file_get_contents($url, false, $context);
		if(strlen($data) == 0) {
			return false;
		}
		$infos = array(
			'titre' => '',
			'version_install' => $this->getVersion()
		);
		$data = @unserialize(base64_decode($data));
		if(!$data) {
			return false;
		}
		$infos = array_merge($infos, $data);
		return $infos;
	}


	// creation et import initial de la base
	public function importDatabase() {
		global $cfgHostname, $cfgUsername, $cfgPassword, $cfgDatabase, $cfgSqlType, $cfgConnection, $cfgPrefix, $smarty, $cfgDBPort;

		$tempConnect = db_connect($cfgHostname, $cfgUsername, $cfgPassword, $cfgDatabase, $cfgSqlType, $cfgDBPort);
		if($tempConnect === FALSE) {

			try {
				$cfgConnectionTest = @mysqli_connect($cfgHostname, $cfgUsername, $cfgPassword);
				mysqli_set_charset($cfgConnectionTest, "latin1");
			} catch (PDOException $e) {
				return 'database_creation_failed';
			}
			if(!mysqli_query($cfgConnection, 'CREATE DATABASE ' . $cfgDatabase . ' DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;')) {
			return 'database_creation_failed';
			}

			$cfgConnection = null;
			$tempConnect = db_connect($cfgHostname, $cfgUsername, $cfgPassword, $cfgDatabase, $cfgSqlType, $cfgDBPort);
			if($tempConnect === FALSE) {
				return 'database_connection_failed';
			}		}
		$sql = file(BASE . '/../sql/planning_mysql.sql');
		$requetes="";
		foreach($sql as $l){ // on lit le fichier sql
			if (substr(trim($l),0,2)!="--"){ // suppression des commentaires
				$requetes .= $l;
			}
		}

		$reqs = explode(";",$requetes);// on s?pare les requ?tes
		foreach($reqs as $req){	// et on les ?x?cute$smarty->getConfigVars('winPeriode_statut_a_faire');

			$req = str_replace('#winPeriode_statut_a_faire#',$smarty->getConfigVars('winPeriode_statut_a_faire'),$req);
			$req = str_replace('#winPeriode_statut_en_cours#',$smarty->getConfigVars('winPeriode_statut_en_cours'),$req);
			$req = str_replace('#winPeriode_statut_fait#',$smarty->getConfigVars('winPeriode_statut_fait'),$req);
			$req = str_replace('#winPeriode_statut_abandon#',$smarty->getConfigVars('winPeriode_statut_abandon'),$req);
			$req = str_replace('#winPeriode_statut_archive#',$smarty->getConfigVars('winProjet_statutArchive'),$req);
			if (trim($req) != "" && !db_query($req)){
				if(strpos(mysqli_error($cfgConnection), "already exists") !== FALSE) {
					// si base de donn?es d?j? existante, on lance pas d'erreur et on passe ? la mise ? jour du fichier de DB
					break;
				} else {
					return 'database_init_failed';
				}
			}
		}

		// ecriture du fichier database.inc
		$contenuFichier = '<?php' . CRLF . CRLF . '// Database Parameters' . CRLF . '$cfgHostname = \'' . $cfgHostname . '\';' . CRLF . '$cfgDatabase = \'' . $cfgDatabase . '\';' . CRLF . '$cfgUsername = \'' . $cfgUsername . '\';' . CRLF . '$cfgPassword = \'' . $cfgPassword . '\';' . CRLF . '$cfgSqlType = \'mysql\';' . CRLF . '$cfgPrefix = \'' . $cfgPrefix . '\';' . CRLF . '?>';
		if(!file_put_contents(BASE . '/../database.inc', $contenuFichier)) {
			return 'database_config_file_failed';
		}
		return true;
	}


	public function upgradeVersion() {
		global $cfgConnection, $cfgSqlType, $cfgDatabase, $smarty;

		if($cfgSqlType != 'mysql') {
			return false;
		}

		// detection de la version de la base. Si derniere version install?e, on ne met pas ? jour avec tous les upgrades
		$infoVersion = $this->getVersion();
		$config = new Config();
		$result = db_query("show tables from `$cfgDatabase` like 'planning_config'");
		if(db_num_rows($result) == 0) {
			$result = db_query("show tables from `$cfgDatabase` like 'planning_periode'");
			if(db_num_rows($result) == 0) {
				die('<br>Your database seems empty or the user "$cfgUsername" do not have enough rights in mysql. Please import soplanning/sql/planning_mysql.sql in your database');
			}
			$versionDemarrage = 118;
		} elseif ($config->db_load(array('cle', '=', 'CURRENT_VERSION')) && $infoVersion == $config->valeur) {
			return true;
		} elseif(!is_null($config->valeur)) {
			$versionDemarrage = (int)str_replace('.', '', $config->valeur) + 1;
		} else {
			$versionDemarrage = 119;
		}

		$output = '';
		$upgradeSqlTrouve = false;
		for ($tmpVersion = $versionDemarrage; $tmpVersion<=($infoVersion*100); $tmpVersion = $tmpVersion+1) {
			$tmpVersionFinal = $this->versionFormatee($tmpVersion);

			$output .= '<br>Upgrade verification for version ' . $tmpVersionFinal;
			$fichierSQL = BASE . '/../sql/update/update-' . str_replace('.', '-', $tmpVersionFinal) . '.txt';
			if (is_file($fichierSQL)) {
				$upgradeSqlTrouve = true;
				$sql = file($fichierSQL);
				$requetes="";
				foreach($sql as $l){ // on lit le fichier sql
					if (substr(trim($l),0,2)!="--"){ // suppression des commentaires
						$requetes .= $l;
					}
				}
				$reqs = explode(";",$requetes);// on s?pare les requ?tes
				foreach($reqs as $req){	// et on les ?x?cute
					//echo '<br>' . $req . '<br>';

					$req = str_replace('#winPeriode_statut_a_faire#',$smarty->getConfigVars('winPeriode_statut_a_faire'),$req);
					$req = str_replace('#winPeriode_statut_en_cours#',$smarty->getConfigVars('winPeriode_statut_en_cours'),$req);
					$req = str_replace('#winPeriode_statut_fait#',$smarty->getConfigVars('winPeriode_statut_fait'),$req);
					$req = str_replace('#winPeriode_statut_abandon#',$smarty->getConfigVars('winPeriode_statut_abandon'),$req);
					$req = str_replace('#winPeriode_statut_archive#',$smarty->getConfigVars('winProjet_statutArchive'),$req);

					if (trim($req)!= "" && !db_query($req)){
						$output .= "<br>Failed to upgrade database, please contact <a href='mailto:support@soplanning.org'>support@soplanning.org</a> with full details."; // stop si erreur
						$output .= '<br/>upgrade failed :<br/> ' . $tmpVersionFinal;
						$output .= '<br/>request failed :<br/> ' . $req;
						return $output;
					}
				}
				$output .= '<br>Database upgrade ok for version ' . $tmpVersionFinal;

				$config = new Config();
				$config->db_load(array('cle', '=', 'CURRENT_VERSION'));
				$config->cle = 'CURRENT_VERSION';
				$config->valeur = $tmpVersionFinal;
				$config->db_save();
			}
		}
		if (!$upgradeSqlTrouve) {
			// si aucune MAJ trouv?e, on met juste ? jour l'info de la version courante
			$config = new Config();
			$config->db_load(array('cle', '=', 'CURRENT_VERSION'));
			$config->cle = 'CURRENT_VERSION';
			$config->valeur = $infoVersion;
			$config->db_save();
			return 'Database upgrade ok';
		}

		return $output;
	}

	public function checkDatabaseVersion() {
		$infoVersion = $this->getVersion();
		$config = new Config();
		$res = $config->db_load(array('cle', '=', 'CURRENT_VERSION'));
		if(!$res) {
			// base probablement vide
			return 'database_empty';
		}
		if ($infoVersion == $config->valeur) {
			return true;
		} else {
			return 'database_upgrade_required';
		}
	}

	public function checkDBAccess() {
		
		global $cfgHostname, $cfgUsername, $cfgPassword, $cfgDatabase, $cfgSqlType, $cfgDBPort;
		if(@db_connect($cfgHostname, $cfgUsername, $cfgPassword, $cfgDatabase, $cfgSqlType, $cfgDBPort) === FALSE) {
			return 'database_connection_error';
		}
		return true;
	}

	public function checkPhpVersion() {
		$version = phpversion();
		if($version < '5.2') {
			return 'php_too_old';
		}
		return true;
	}


	public function checkWritable() {
		if(!is__writable(COMPIL_DIR)) {
			die('<br/><br/><center><b>Error : please add read/write rights on "' . COMPIL_DIR . '" directory</b></center>');
		}
		return true;
	}

	public function checkWritableDatabaseInc() {
		$test = @file_get_contents(BASE . '/../database.inc');
		if($test === FALSE) {
			return 'rights_database_inc';
		}
		$result = @file_put_contents(BASE . '/../database.inc', $test);
		if($result === FALSE) {
			return 'rights_database_inc';
		}
		return true;
	}

	private function versionFormatee($version) {
		$tmpVersionFinal = $version / 100;
		$tmpVersionFinal = str_replace(',', '.', $tmpVersionFinal);
		$decimal = explode('.', $tmpVersionFinal);
		if (!isset($decimal[1])) {$tmpVersionFinal = $tmpVersionFinal . ".00";}
		if (isset($decimal[1]) && strlen($decimal[1]) == 1) {$tmpVersionFinal = $tmpVersionFinal . "0";}
		return $tmpVersionFinal;
	}

	private function checkGD() {
		if (extension_loaded('gd') && function_exists('gd_info')) {
			return true;
		}
		return 'gd_missing';
	}
}
?>
