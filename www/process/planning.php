<?php

require 'base.inc';
require BASE . '/../config.inc';
require BASE . '/../includes/header.inc';

$_POST = sanitize($_POST);
$_GET = sanitize($_GET);

// Conversion des dates en mode mobile au format french
 $_GET['date_fin_affiche'] = forceUserDateFormat($_GET['date_fin_affiche']);
 $_GET['date_debut_affiche'] = forceUserDateFormat($_GET['date_debut_affiche']);

 if(isset($_GET['date_debut_custom']) && $_GET['date_debut_custom'] != '') {
	$dateDebut = initDateTime($_GET['date_debut_affiche']);
	$dateFin = initDateTime($_GET['date_fin_affiche']);

	if($_GET['date_debut_custom'] == 'aujourdhui') {
		$dateDebut = new Datetime();

		// si date de fin inf�rieure � nouvelle date de d�but, on recupere l'interval de jour initial
		if($dateFin < $dateDebut) {
			$dateFin = new DateTime();
			$dateFin->modify('+ ' . $interval . ' days');
			$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
		}
	} elseif($_GET['date_debut_custom'] == 'semaine_derniere') {
		$dateDebut = new Datetime();
		$dateDebut->modify('- 7 days');

		// si date de fin inf�rieure � nouvelle date de d�but, on recupere l'interval de jour initial
		if($dateFin < $dateDebut) {
			$dateFin = new DateTime();
			$dateFin->modify('+ ' . $interval . ' days');
			$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
		}
	} elseif($_GET['date_debut_custom'] == 'mois_dernier') {
		$dateDebut = new Datetime();
		$dateDebut->modify('- 1 month');

		// si date de fin inf�rieure � nouvelle date de d�but, on recupere l'interval de jour initial
		if($dateFin < $dateDebut) {
			$dateFin = new DateTime();
			$dateFin->modify('+ ' . $interval . ' days');
			$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
		}
	} elseif($_GET['date_debut_custom'] == 'debut_semaine') {
		$dateDebut = new Datetime();
		$dateDebut->modify('-' . ($dateDebut->format('w')-1) . ' days');

		// si date de fin inf�rieure � nouvelle date de d�but, on recupere l'interval de jour initial
		if($dateFin < $dateDebut) {
			$dateFin = new DateTime();
			$dateFin->modify('+ ' . $interval . ' days');
			$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
		}
	} elseif($_GET['date_debut_custom'] == 'debut_mois') {
		$dateDebut = new Datetime();
		$dateDebut->modify('-' . ($dateDebut->format('d')-1) . ' days');
		// si date de fin inf�rieure � nouvelle date de d�but, on recupere l'interval de jour initial
		if($dateFin < $dateDebut) {
			$dateFin = new DateTime();
			$dateFin->modify('+ ' . $interval . ' days');
			$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
		}
	}
	$_GET['date_debut_affiche'] = $dateDebut->format(CONFIG_DATE_LONG);
}

if(isset($_GET['date_fin_custom']) && $_GET['date_fin_custom'] != '') {
	$dateDebut = initDateTime($_GET['date_debut_affiche']);
	$dateFin =initDateTime($_GET['date_fin_affiche']);
	$interval = date_diff2($dateDebut,$dateFin);

	if($_GET['date_fin_custom'] == '1_semaine') {
		$dateFin = clone $dateDebut;
		$dateFin->modify('+ 6 days');
	} elseif($_GET['date_fin_custom'] == '2_semaines') {
		$dateFin = clone $dateDebut;
		$dateFin->modify('+ 13 days');
	} elseif($_GET['date_fin_custom'] == '3_semaines') {
		$dateFin = clone $dateDebut;
		$dateFin->modify('+ 20 days');
	} elseif($_GET['date_fin_custom'] == '1_mois') {
		$dateFin = clone $dateDebut;
		$dateFin->modify('+ 1 month');
		$dateFin->modify('- 1 day');
	} elseif($_GET['date_fin_custom'] == '2_mois') {
		$dateFin = clone $dateDebut;
		$dateFin->modify('+ 2 months');
		$dateFin->modify('- 1 day');
	} elseif($_GET['date_fin_custom'] == '3_mois') {
		$dateFin = clone $dateDebut;
		$dateFin->modify('+ 3 months');
		$dateFin->modify('- 1 day');
	} elseif($_GET['date_fin_custom'] == '4_mois') {
		$dateFin = clone $dateDebut;
		$dateFin->modify('+ 4 months');
		$dateFin->modify('- 1 day');
	} elseif($_GET['date_fin_custom'] == '5_mois') {
		$dateFin = clone $dateDebut;
		$dateFin->modify('+ 5 months');
		$dateFin->modify('- 1 day');
	} elseif($_GET['date_fin_custom'] == '6_mois') {
		$dateFin = clone $dateDebut;
		$dateFin->modify('+ 6 months');
		$dateFin->modify('- 1 day');
		}
	$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
}

// modif avancer ou reculer de l'intervalle existant
if(isset($_GET['raccourci_date'])) {
	$dateDebut = initDateTime($_SESSION['date_debut_affiche']);
	$dateFin =initDateTime($_SESSION['date_fin_affiche']);
	$interval = date_diff2($dateDebut,$dateFin);
	if($_GET['raccourci_date'] == 'aujourdhui') {
		$dateDebut = new Datetime();
		$dateFin = clone $dateDebut;
		// si vue par heures, on ne saisit que la date de d�but
		if($_SESSION['baseColonne'] == 'heures'){
			$dateFin->modify('+ '.CONFIG_DEFAULT_NB_DAYS_DISPLAYED.' days');
		}else $dateFin->modify('+ '.CONFIG_DEFAULT_NB_MONTHS_DISPLAYED.' month');
		$_GET['date_debut_affiche'] = $dateDebut->format(CONFIG_DATE_LONG);
		$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
	}elseif($_GET['raccourci_date'] == 'moisSuivant') {
		$dateDebut->modify('+ 1 month');
		$dateFin->modify('+ 1 month');
		$_GET['date_debut_affiche'] = $dateDebut->format(CONFIG_DATE_LONG);
		$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
	}elseif($_GET['raccourci_date'] == 'moisPrecedent') {
		$dateDebut->modify('- 1 month');
		$dateFin->modify('- 1 month');
		$_GET['date_debut_affiche'] = $dateDebut->format(CONFIG_DATE_LONG);
		$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
	}else{
		$dateDebut->modify($_GET['raccourci_date'] . 'days');
		$dateFin->modify($_GET['raccourci_date'] . 'days');
		$_GET['date_debut_affiche'] = $dateDebut->format(CONFIG_DATE_LONG);
		$_GET['date_fin_affiche'] = $dateFin->format(CONFIG_DATE_LONG);
	}
}

// si vue par heures, on ne saisit que la date de d�but
if($_SESSION['baseLigne'] == 'heures'){
	$_GET['date_fin_affiche'] = $_GET['date_debut_affiche'];
}

// changement date de d�but et fin
if(isset($_GET['date_debut_affiche']) && isset($_GET['date_fin_affiche'])) {
	$dateDebut = initDateTime($_GET['date_debut_affiche']);
	$dateFin = initDateTime($_GET['date_fin_affiche']);
	if((!$dateFin || !$dateDebut) || ($dateFin < $dateDebut)) {
			header('Location: ../planning.php');
			exit;
	}
	$_SESSION['date_debut_affiche'] = $_GET['date_debut_affiche'];
	$_SESSION['date_fin_affiche'] = $_GET['date_fin_affiche'];

	if ($_SESSION['baseColonne']<>"users")
	{	
		setcookie('date_debut_affiche', $_SESSION['date_debut_affiche'], time()+60*60*24*500, '/');
		setcookie('date_fin_affiche', $_SESSION['date_fin_affiche'], time()+60*60*24*500, '/');
	}else
	{
		setcookie('date_debut_affiche_horaire', $_SESSION['date_debut_affiche'], time()+60*60*24*500, '/');
	}
}

// changement nb mois affich�s
if (isset($_GET['nb_mois']) && is_numeric($_GET['nb_mois']) && round($_GET['nb_mois']) > 0) {
	$nbMois = $_GET['nb_mois'];
	$_SESSION['nb_mois'] = $_GET['nb_mois'];
	setcookie('nb_mois', $_SESSION['nb_mois'], time()+60*60*24*500, '/');
}

// changement nb jours affich�s
if (isset($_GET['nb_jours']) && is_numeric($_GET['nb_jours']) && round($_GET['nb_jours']) > 0) {
	$nbMois = $_GET['nb_jours'];
	$_SESSION['nb_jours'] = $_GET['nb_jours'];
	setcookie('nb_jours', $_SESSION['nb_jours'], time()+60*60*24*500, '/');
}

if(isset($_GET['nb_lignes'])  && is_numeric($_GET['nb_lignes']) && round($_GET['nb_lignes']) > 0) {
	$_SESSION['nb_lignes'] = $_GET['nb_lignes'];
	$_SESSION['page_lignes'] = 1;
	setcookie('nb_lignes', $_SESSION['nb_lignes'], time()+60*60*24*500, '/');
}

if(isset($_GET['page_lignes'])  && is_numeric($_GET['page_lignes']) && round($_GET['page_lignes']) > 0) {
	$_SESSION['page_lignes'] = $_GET['page_lignes'];
}

if(isset($_POST['filtreGroupeProjet'])) {
	// si filtre sur les projets, on boucle pour recuperer l'ensemble des projets choisis
	$projetsFiltre = array();
	foreach ($_POST as $keyPost => $valPost) {
		if(strpos($keyPost, 'projet_') === 0) {
			$projetsFiltre[] = $valPost;
		}
	}
	$_SESSION['filtreGroupeProjet'] = $projetsFiltre;
}

if(isset($_POST['filtreGroupeLieu'])) {
	// si filtre sur les lieux, on boucle pour recuperer l'ensemble des lieux choisis
	$filtre = $_POST['lieu'];
	$_SESSION['filtreGroupeLieu'] = $filtre;
}

if(isset($_POST['filtreGroupeRessource'])) {
	// si filtre sur les ressources de tache, on boucle pour recuperer l'ensemble des ressources choisies
	$filtre = $_POST['ressource'];
	$_SESSION['filtreGroupeRessource'] = $filtre;
}

if(isset($_GET['filtreSurRessource'])) {
	$_SESSION['filtreGroupeRessource'] = array($_GET['filtreSurRessource']);
}
if(isset($_GET['filtreSurLieu'])) {
	$_SESSION['filtreGroupeLieu'] = array($_GET['filtreSurLieu']);
}

if(isset($_GET['filtreSurProjet'])) {
	$_SESSION['filtreGroupeProjet'] = array($_GET['filtreSurProjet']);
}

if(isset($_POST['filtreTexte'])) {
	$_SESSION['filtreTexte'] = $_POST['filtreTexte'];
}

if(isset($_GET['desactiverFiltreGroupeProjet'])) {
	$_SESSION['filtreGroupeProjet'] = array();
}

if(isset($_GET['desactiverFiltreAvances'])) {
	$_SESSION['filtreGroupeLieu'] = array();
	$_SESSION['filtreGroupeRessource'] = array();
	$_SESSION['filtreStatutTache'] = array();
	$_SESSION['filtreStatutProjet'] = array();
}

if(isset($_GET['desactiverFiltreTexte'])) {
	$_SESSION['filtreTexte'] = "";
}

if(isset($_POST['filtreUser'])) {
	// si filtre sur les Users, on boucle pour recuperer l'ensemble des Users choisis
	$UsersFiltre = array();
	foreach ($_POST as $keyPost => $valPost) {
		if(strpos($keyPost, 'user_') === 0) {
			$UsersFiltre[] = $valPost;
		}
	}
    setcookie('filtreUser', implode(",", $UsersFiltre), time() + 60*60*24*365, '/');
	$_SESSION['filtreUser'] = $UsersFiltre;
}

if(isset($_GET['filtreSurUser'])) {
    setcookie('filtreUser', implode(",", array($_GET['filtreSurUser'])), time() + 60*60*24*365, '/');
	$_SESSION['filtreUser'] = array($_GET['filtreSurUser']);
}


if(isset($_GET['desactiverFiltreUser'])) {
	$_SESSION['filtreUser'] = array();
	setcookie('filtreUser', implode(",", array()), time() + 60*60*24*365, '/');
}

if(isset($_GET['masquerLigneVide'])) {
	$_SESSION['masquerLigneVide'] = $_GET['masquerLigneVide'];
	setcookie('masquerLigneVide', $_SESSION['masquerLigneVide'], time()+60*60*24*500, '/');
	$pageLignes = 1;
	$_SESSION['page_lignes'] = $pageLignes;
}

if(isset($_GET['afficherLigneTotal'])) {
	$_SESSION['afficherLigneTotal'] = $_GET['afficherLigneTotal'];
	setcookie('afficherLigneTotal', $_SESSION['afficherLigneTotal'], time()+60*60*24*500, '/');
}

if(isset($_GET['afficherTableauRecap'])) {
	$_SESSION['afficherTableauRecap'] = $_GET['afficherTableauRecap'];
	setcookie('afficherTableauRecap', $_SESSION['afficherTableauRecap'], time()+60*60*24*500, '/');
}

if(isset($_POST['filtreStatutTache']) && isset($_POST['statutsTache'])) {
	// si filtre sur les statuts de tache, on boucle pour recuperer l'ensemble des projets choisis
	$filtre = $_POST['statutsTache'];
	// si tous les status sont coch�s, revient � desactiver le filtre
	if(count($filtre) >= 4) {
		$filtre = array();
	}
	$_SESSION['filtreStatutTache'] = $filtre;
}

if(isset($_POST['filtreStatutProjet']) && isset($_POST['statutsProjet'])) {
	// si filtre sur les statuts de projet, on boucle pour recuperer l'ensemble des projets choisis
	$filtre = $_POST['statutsProjet'];
	// si tous les status sont coch�s, revient � desactiver le filtre
	if(count($filtre) >= 4) {
		$filtre = array();
	}
	$_SESSION['filtreStatutProjet'] = $filtre;
}

if(isset($_GET['baseLigne'])) {
		$_SESSION['baseLigne'] = $_GET['baseLigne'];
		$_GET['triPlanning'] = $triPlanningPossibleProjet[0];
	} elseif (!isset($_SESSION['baseLigne'])) {
		$_SESSION['baseLigne'] = 'users';
		$_GET['triPlanning'] = $triPlanningPossibleUser[0];
	}
	setcookie('baseLigne', $_SESSION['baseLigne'], time()+60*60*24*500, '/');

if(isset($_GET['baseColonne'])) {
		$_SESSION['baseColonne'] = $_GET['baseColonne'];
	}elseif (!isset($_SESSION['baseColonne'])) {
		$_SESSION['baseColonne'] = 'jours';
	}elseif ($_SESSION['baseColonne']=='users' && $_SESSION['baseLigne']<>'heures')
	{
		$_SESSION['baseColonne'] = 'jours';
	}; 
setcookie('baseColonne', $_SESSION['baseColonne'], time()+60*60*24*500, '/');

if(isset($_GET['ascenceur'])) {
		$_SESSION['ascenceur'] = $_GET['ascenceur'];
		setcookie('ascenceur', $_SESSION['ascenceur'], time()+60*60*24*500, '/');
}
if(isset($_GET['entetesflottantes'])) {
		$_SESSION['entetesflottantes'] = $_GET['entetesflottantes'];
		setcookie('entetesflottantes', $_SESSION['entetesflottantes'], time()+60*60*24*500, '/');
}
if(isset($_GET['fleches'])) {
		$_SESSION['fleches'] = $_GET['fleches'];
		setcookie('fleches', $_SESSION['fleches'], time()+60*60*24*500, '/');
}

//modif tri planning pour sauvegarde selection
if(isset($_GET['triPlanning'])) {	
	if((in_array($_GET['triPlanning'], $triPlanningPossibleUser) || in_array($_GET['triPlanning'], $triPlanningPossibleProjet))&&($_SESSION['baseLigne'] == "users")) {
		$_SESSION['triPlanningUser'] = $_GET['triPlanning'];
		// on le met �galement en cookie
		setcookie('triPlanningUser', $_SESSION['triPlanningUser'], time()+60*60*24*500, '/');
	}
	if((in_array($_GET['triPlanning'], $triPlanningPossibleUser) || in_array($_GET['triPlanning'], $triPlanningPossibleProjet))&&($_SESSION['baseLigne'] == "projets")) {
		$_SESSION['triPlanningProjet'] = $_GET['triPlanning'];
		// on le met �galement en cookie
		setcookie('triPlanningProjet', $_SESSION['triPlanningProjet'], time()+60*60*24*500, '/');
	}
	if((in_array($_GET['triPlanning'], $triPlanningPossibleAutre))&&($_SESSION['baseLigne'] == "lieux" ||$_SESSION['baseLigne'] == "ressources")) {
		$_SESSION['triPlanningAutre'] = $_GET['triPlanning'];
		// on le met �galement en cookie
		setcookie('triPlanningAutre', $_SESSION['triPlanningAutre'], time()+60*60*24*500, '/');
	}
}

// Modif affichage Zoom
if(isset($_GET["dimensionCase"])){
	$_SESSION['dimensionCase'] = $_GET["dimensionCase"];
}
setcookie('dimensionCase', $_SESSION['dimensionCase'], time()+60*60*24*500, '/');
header('Location: ../planning.php');
exit;

?>
