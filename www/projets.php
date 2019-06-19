<?php

require('./base.inc');
require(BASE . '/../config.inc');

$smarty = new MySmarty();

require BASE . '/../includes/header.inc';

$_POST = sanitize($_POST);
$_GET = sanitize($_GET);
$_REQUEST = sanitize($_REQUEST);
$_SESSION['lastURL'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(!$user->checkDroit('projects_manage_all') && !$user->checkDroit('projects_manage_own')) {
	$_SESSION['erreur'] = 'droitsInsuffisants';
	header('Location: ../index.php');
	exit;
}

// PARAM�TRES
$dateDebut = new DateTime();

if (isset($_REQUEST['nb_mois']) && is_numeric($_REQUEST['nb_mois']) && round($_REQUEST['nb_mois']) > 0) {
	$nbMois = $_REQUEST['nb_mois'];
	$_SESSION['nb_mois'] = $_REQUEST['nb_mois'];
} elseif (isset($_SESSION['nb_mois'])) {
	$nbMois = $_SESSION['nb_mois'];
} else {
	$nbMois = 2;
	$_SESSION['nb_mois'] = $nbMois;
}

// French date forcing
// Conversion des dates en mode mobile au format french
if (isset($_REQUEST['date_debut_affiche_projet']) && $_SESSION['isMobileOrTablet']) 
{
	$_REQUEST['date_debut_affiche_projet']=forceUserDateFormat($_REQUEST['date_debut_affiche_projet']);
}
if (isset($_REQUEST['date_debut_affiche_projet'])) {
	$dateDebut = initDateTime($_REQUEST['date_debut_affiche_projet']);
	$_SESSION['date_debut_affiche_projet'] = $_REQUEST['date_debut_affiche_projet'];
} else {
	//$dateDebut->modify('-' . CONFIG_DEFAULT_NB_PAST_DAYS . ' days');
	$_SESSION['date_debut_affiche_projet'] = $dateDebut->format(CONFIG_DATE_LONG);
}
if(!$dateDebut ) {
	echo "Erreur de date";
	exit;
	header('Location: projets.php');
}
if (isset($_REQUEST['statut']) && is_array($_REQUEST['statut'])) {
	$listeStatuts = $_REQUEST['statut'];
} elseif (isset($_SESSION['statut_projet']) && is_array($_SESSION['statut_projet'])) {
	$listeStatuts = $_SESSION['statut_projet'];
} else {
	$listeStatuts = $_SESSION['status_par_defaut'];
}
$_SESSION['statut_projet'] = $listeStatuts;
setcookie('statut_projet', json_encode($listeStatuts), time()+60*60*24*500, '/');

if (isset($_REQUEST['filtrageProjet'])) {
	$filtrageProjet = $_REQUEST['filtrageProjet'];
} elseif (isset($_SESSION['filtrageProjet'])) {
	$filtrageProjet = $_SESSION['filtrageProjet'];
} else {
	$filtrageProjet = 'tous';
}
$_SESSION['filtrageProjet'] = $filtrageProjet;

if (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('nom_createur', 'nom', 'charge', 'livraison'))) {
	$order = $_REQUEST['order'];
} elseif (isset($_SESSION['projet_order'])) {
	$order = $_SESSION['projet_order'];
} else {
	$order = 'nom';
}

if (isset($_REQUEST['by'])) {
	$by = $_REQUEST['by'];
} elseif (isset($_SESSION['projet_by'])) {
	$by = $_SESSION['projet_by'];
} else {
	$by = 'ASC';
}

// FIN PARAM�TRES

$dateFin = clone $dateDebut;
$dateFin->modify('+' . $nbMois . ' months');
$dateFin->modify('-1 days');
$smarty->assign('dateDebut', $dateDebut->format(CONFIG_DATE_LONG));
$smarty->assign('dateFin', $dateFin->format(CONFIG_DATE_LONG));
$smarty->assign('nbMois', $nbMois);
$smarty->assign('listeStatuts', $listeStatuts);
$smarty->assign('filtrageProjet', $filtrageProjet);
$smarty->assign('order', $order);
$smarty->assign('by', $by);

$projets = new GCollection('Projet');

if(isset($_REQUEST['desactiverfiltreGroupe'])) {
	$filtreGroupeProjet = array();
	$_SESSION['groupe_filtreEquipeProjet'] = $filtreGroupeProjet;
}

if (isset($_REQUEST['filtreGroupeProjet'])) {
	$filtreGroupeProjet = array();
	if(isset($_REQUEST['gp'])) {
		$filtreGroupeProjet = $_REQUEST['gp'];
	}
	if(isset($_REQUEST['gp0'])) {
		$filtreGroupeProjet[] = 'gp0';
	}
} elseif (isset($_SESSION['groupe_filtreGroupeProjet'])) {
	$filtreGroupeProjet = $_SESSION['groupe_filtreGroupeProjet'];
} else {
	$filtreGroupeProjet = array();
}

if(isset($_REQUEST['rechercheProjet']) && $_REQUEST['rechercheProjet'] != ''){
	$search = $_REQUEST['rechercheProjet'];
	$search = explode( ' ', $search );

	$isLike = array('0');

	foreach($search as $word){
		$isLike[] = 'planning_projet.nom LIKE '.val2sql('%' . $word . '%');
		$isLike[] = 'planning_projet.iteration LIKE '.val2sql('%' . $word . '%');
		$isLike[] = 'planning_projet.projet_id LIKE '.val2sql('%' . $word . '%');
		$isLike[] = 'planning_groupe.nom LIKE '.val2sql('%' . $word . '%');
	}

	$isLike = implode(" OR ", $isLike);
	$sql = "SELECT planning_projet.*, planning_groupe.nom AS nom_groupe, planning_user.nom AS nom_createur, ps.nom as statut_nom, ps.pourcentage as statut_pourcentage, ps.couleur as statut_couleur
			FROM planning_projet
			INNER JOIN planning_status ps ON ps.status_id = planning_projet.statut
			LEFT JOIN planning_groupe ON planning_groupe.groupe_id = planning_projet.groupe_id
			LEFT JOIN planning_user ON planning_user.user_id = planning_projet.createur_id
			WHERE (" . $isLike . ") AND planning_projet.statut in ('" . implode("','", $listeStatuts) . "')";
	
	if(count($filtreGroupeProjet) > 0) {
	$sql .= "		AND (planning_projet.groupe_id IN ('" . implode("','", $filtreGroupeProjet) . "')";
	if(in_array('gp0', $filtreGroupeProjet)) {
		$sql .= '	OR planning_projet.groupe_id IS NULL ';
	}
	$sql .= ' )';
	}			
			
	$sql .= "ORDER BY nom_groupe ASC," . $order . ' ' . $by;
	$smarty->assign('rechercheProjet', $_REQUEST['rechercheProjet']);
}  else {
	// recuperation des projets couvrant la p�riode
	$sql = "SELECT distinct planning_projet.*, planning_groupe.nom AS nom_groupe, planning_user.nom AS nom_createur, ps.nom as statut_nom, ps.pourcentage as statut_pourcentage, ps.couleur as statut_couleur
			FROM planning_projet
			INNER JOIN planning_status ps ON ps.status_id = planning_projet.statut 
			LEFT JOIN planning_groupe ON planning_groupe.groupe_id = planning_projet.groupe_id
			LEFT JOIN planning_user ON planning_user.user_id = planning_projet.createur_id ";
	if($filtrageProjet != 'tous') {
		$sql .= "INNER JOIN planning_periode ON planning_periode.projet_id = planning_projet.projet_id AND ((planning_periode.date_debut <= '" . $dateDebut->format('Y-m-d') . "' AND planning_periode.date_fin >= '" . $dateDebut->format('Y-m-d') . "') OR (planning_periode.date_debut <= '" . $dateFin->format('Y-m-d') . "' AND planning_periode.date_debut >= '" . $dateDebut->format('Y-m-d') . "')) ";
	}
	$sql .= " WHERE planning_projet.statut in ('" . implode("','", $listeStatuts) . "')";
	
	if(count($filtreGroupeProjet) > 0) {
	$sql .= "		AND (planning_projet.groupe_id IN ('" . implode("','", $filtreGroupeProjet) . "')";
	if(in_array('gp0', $filtreGroupeProjet)) {
		$sql .= '	OR planning_projet.groupe_id IS NULL ';
	}
	$sql .= ' )';
	}	
	$sql .=" ORDER BY nom_groupe ASC," . $order . ' ' . $by;
	$smarty->assign('rechercheProjet', '');
 }

$projets->db_loadSQL($sql);

// liste des status
$status = new GCollection('Status');
$sql = "SELECT status_id,nom from planning_status where affichage in ('p','tp') and affichage_liste=1 order by priorite asc";
$status->db_loadSQL($sql);
$smarty->assign('listeStatus', $status->getSmartyData());

$groupeProjets = new GCollection('Groupe');
$groupeProjets->db_load(array(), array('nom' => 'ASC'));
$smarty->assign('filtreGroupeProjet', $filtreGroupeProjet);
$smarty->assign('groupeProjets', $groupeProjets->getSmartyData());
$smarty->assign('projets', $projets->getSmartyData());
$smarty->assign('xajax', $xajax->getJavascript("", "assets/js/xajax.js"));
$smarty->display('www_projets.tpl');
?>