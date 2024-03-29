<?php

class User extends GObject
{
	private $listeDroits = array('users_manage_all', 'projects_manage_all', 'projects_manage_own', 'projectgroups_manage_all', 'tasks_readonly', 'tasks_modify_all', 'tasks_modify_own_project', 'tasks_modify_own_task', 'tasks_view_all_projects', 'tasks_view_own_projects', 'tasks_view_team_projects', 'tasks_view_only_own', 'parameters_all', 'stats_users', 'stats_projects', 'tasks_view_all_users', 'tasks_view_specific_users');
	
	private $tabDroits = array();
	private $tabPreferences = array();
	public static $tabScrolls = array('H', 'HV', 'NONE');

	public function __construct()
	{
		$this->table = 'planning_user';

		$this->fields['user_id'] = new GString('planning_user', 'user_id', 20, FALSE, '');
		$this->fields['user_groupe_id'] = new GInteger('planning_user', 'user_groupe_id', 11, TRUE, NULL);
		$this->fields['nom'] = new GString('planning_user', 'nom', 50, FALSE, '');
		$this->fields['login'] = new GString('planning_user', 'login', 30, TRUE, NULL);
		$this->fields['password'] = new GString('planning_user', 'password', 50, TRUE, NULL);
		$this->fields['email'] = new GString('planning_user', 'email', 255, TRUE, NULL);
		$this->fields['visible_planning'] = new GEnum('planning_user', 'visible_planning', array('oui','non'), FALSE, 'oui');
		$this->fields['couleur'] = new GString('planning_user', 'couleur', 6, TRUE, 'FFFFFF');
		$this->fields['droits'] = new GString('planning_user', 'droits', 65000, TRUE, NULL);
		$this->fields['cle'] = new GString('planning_user', 'cle', 40, FALSE, md5(rand(0, 10000000)));
		$this->fields['notifications'] = new GEnum('planning_user', 'notifications', array('oui','non'), FALSE, 'non');
		$this->fields['adresse'] = new GString('planning_user', 'adresse', 255, TRUE, NULL);
		$this->fields['telephone'] = new GString('planning_user', 'telephone', 20, TRUE, NULL);
		$this->fields['mobile'] = new GString('planning_user', 'mobile', 20, TRUE, NULL);
		$this->fields['metier'] = new GString('planning_user', 'metier', 50, TRUE, NULL);
		$this->fields['commentaire'] = new GString('planning_user', 'commentaire', 255, TRUE, NULL);
		$this->fields['date_dernier_login'] = new GDatetime('planning_user', 'date_dernier_login', '19', TRUE, NULL);
        $this->fields['preferences'] = new GString('planning_user', 'preferences', 65000, TRUE, NULL);
		$this->fields['login_actif'] = new GEnum('planning_user', 'login_actif', array('oui','non'), FALSE, 'oui');
		$this->primaryKeys = array('user_id');
		parent::__construct();
	}

	public function db_loadArray($row)
	{
		parent::db_loadArray($row);
		$this->decoderDroits();
		$this->decoderPreferences();
		return true;
	}

	public function chargerUserFromSession() {
		$messageErreur = 'Impossible de charger votre profil. Veuillez vous identifier � nouveau';
		if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] == '') {
			return ($messageErreur);
		}
		if (!$this->db_load(array('user_id', '=', $_SESSION['user_id']))) {
			return ($messageErreur);
		}
		return TRUE;
	}

	public function check() {
		$check = parent::check();
		if((preg_match("/^[a-zA-Z0-9]+$/", $this->user_id) == 0) || strlen($this->user_id) > 20) {
			return 'user_user_idManquant';
		}
		return $check;
	}

	public function mailChangerPwd() {
		if(is_null($this->email) ||is_null($this->login)) {
			return true;
		}
		$smarty = new MySmarty();
		$sujet = CONFIG_SOPLANNING_TITLE . ' - ' . $smarty->getConfigVars('mail_sujet_changerPwd');
		if (CONFIG_SOPLANNING_URL != '')
		{
			$smarty->assign('lien', CONFIG_SOPLANNING_URL . '/change_password.php?user_id=' . $this->user_id . '&date=' . date('Y-m-d') . '&hash=' . md5($this->user_id . '�' . date('Y-m-d') . '�' . CONFIG_SECURE_KEY));
		}else 
		{
			$urlSuggeree = getUrlInfo();
			$smarty->assign('lien', $urlSuggeree['root'] . substr($urlSuggeree['currentDir'], 0, strlen($urlSuggeree['currentDir'])-8) . 'change_password.php?user_id=' . $this->user_id . '&date=' . date('Y-m-d') . '&hash=' . md5($this->user_id . '�' . date('Y-m-d') . '�' . CONFIG_SECURE_KEY));
		}
		$corps = $smarty->getHtml('mail_changer_pwd.tpl');
		$mail = new Mailer($this->email, $sujet, $corps);
		return $mail->send();
	}

	public function checkDroit($droit) {
		return in_array($droit, $this->tabDroits);
	}

	public function setDroits($droits) {
		$this->tabDroits = $droits;
		$this->data['droits'] = json_encode($this->tabDroits);
		return true;
	}

	public function decoderDroits() {
		$this->tabDroits = json_decode(html_entity_decode($this->droits), true);
		if(!is_array($this->tabDroits)) {
			$this->tabDroits = array();
		}
	}

	private function decoderPreferences() {
		$this->tabPreferences = json_decode($this->preferences,true);
	}
	
	public function getSmartyData()
	{
		$data = parent::getSmartyData();
		$data['tabDroits'] = $this->tabDroits;
		$data['tabPreferences'] = $this->tabPreferences;
		return $data;
	}

	public function lienIcal($users = array(), $projets = array()) {
		$urlSuggeree = getUrlInfo();
		$lienIcal = $urlSuggeree['root'] . substr($urlSuggeree['currentDir'], 0, strlen($urlSuggeree['currentDir'])-8) . 'export_ical.php?login=' . $this->login . '&hash=' . md5($this->login . '��' . $this->password . '��' . CONFIG_SECURE_KEY) . "&nocache";
		if(count($users) > 0) {
			$lienIcal .= '&users=' . implode('-', $users);
		}
		if(count($projets) > 0) {
			$lienIcal .= '&projets=' . implode('-', $projets);
		}
		return $lienIcal;
	}

	public function getPreferences() {
		$all = $this->getSmartyData();
		$json = $all['preferences'];
		$data = json_decode($json, true);

		// Pr�f�rence de vue large/r�duit
		if (!isset($data['scrolls'])) {
			$data['scrolls'] = 'H';
		}

		// Pr�f�rence de vue par d�faut
		if (!isset($data['vueDefaut']) || $data['vueDefaut'] == 'vueProjet') {
			$data['inverserUsersProjets'] = true;
		} else {
			$data['inverserUsersProjets'] = false;
		}

		if (!isset($data['vueLargeReduit']) || $data['vueLargeReduit'] == 'vueReduit') {
			$data['dimensionCase'] = 'reduit';
		} else {
			$data['dimensionCase'] = 'large';
		}
		return $data;
	}

	// get lists of users that the current user can view in the planning (if right tasks_view_specific_users activated)
	public function getRightsOnUsers()
	{
		$list = new GCollection('Right_on_user');
		$sql = 'SELECT * 
				FROM planning_right_on_user
				INNER JOIN planning_user ON planning_user.user_id = planning_right_on_user.allowed_id
				WHERE owner_id = ' . val2sql($this->user_id);
		$list->db_loadSQL($sql);
		$final = $list->get('user_id');
		return $final;
	}

	public function updateRightsOnUsers($rights) {
		db_query("DELETE FROM planning_right_on_user WHERE owner_id = " . val2sql($this->user_id));
		foreach($rights as $right) {
			$droit = new Right_on_user();
			$droit->owner_id = $this->user_id;
			$droit->allowed_id = $right;
			$droit->db_save();
		}
	}

}

?>