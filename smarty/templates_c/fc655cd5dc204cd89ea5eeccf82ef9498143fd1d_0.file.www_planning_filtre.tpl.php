<?php
/* Smarty version 3.1.32, created on 2019-06-10 07:23:46
  from '/home/dapps/public_html/XENIEL/planner/templates/www_planning_filtre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfde962c9ee40_15726311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc655cd5dc204cd89ea5eeccf82ef9498143fd1d' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_planning_filtre.tpl',
      1 => 1553826942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfde962c9ee40_15726311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dapps/public_html/XENIEL/planner/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),1=>array('file'=>'/home/dapps/public_html/XENIEL/planner/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>	<div class="row noprint">
		<div class="col-md-12 mb-2" id="firstLayer">
			<div class="soplanning-box form-inline pt-0" id="divPlanningDateSelector">
				<div class="btn-group cursor-pointer pt-2" id="btnDateNow">
					<a class="btn btn-default tooltipster" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'aujourdhui');
echo $_smarty_tpl->tpl_vars['dateToday']->value;?>
" onClick="document.location='process/planning.php?raccourci_date=aujourdhui'" id="buttonDateNowSelector"><i class="fa fa-home fa-lg fa-fw" aria-hidden="true"></i></a>
				</div>
								<div class="btn-group ml-md-2 pt-2" id="dropdownDateSelector">
						<form action="process/planning.php" method="GET" class="form-inline" id="formChoixDates">
						<a href="#" id="buttonDateSelector" class="btn dropdown-toggle btn-default" data-toggle="dropdown">
							<b>
							<?php echo $_smarty_tpl->tpl_vars['dateDebutTexte']->value;?>

							<?php if ($_smarty_tpl->tpl_vars['baseLigne']->value != "heures") {?>
								- <?php echo $_smarty_tpl->tpl_vars['dateFinTexte']->value;?>

							<?php }?>
							</b>&nbsp;&nbsp;&nbsp;<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<table class="planning-dateselector">
								<tr>
									<td>
										<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formDebut');?>
 :&nbsp;
									</td>
									<td>
									<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
										<input name="date_debut_affiche" id="date_debut_affiche" type="date" value="<?php echo forceISODateFormat($_smarty_tpl->tpl_vars['dateDebut']->value);?>
" class="form-control" onChange="$('date_debut_custom').value= '----------------';" />
									<?php } else { ?>
										<input name="date_debut_affiche" id="date_debut_affiche" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dateDebut']->value;?>
" class="form-control datepicker" onChange="$('date_debut_custom').value= '----------------';" />
									<?php }?>
									<br>
										<select id="date_debut_custom" class="form-control" name="date_debut_custom" onChange="$('date_debut_affiche').value= '----------------';">
											<option value=""><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci');?>
...</option>
											<option value="aujourdhui"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_aujourdhui');?>
</option>
											<option value="semaine_derniere"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_semaine_derniere');?>
</option>
											<option value="mois_dernier"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_mois_dernier');?>
</option>
											<option value="debut_semaine"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_debut_semaine');?>
</option>
											<option value="debut_mois"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_debut_mois');?>
</option>
										</select>
									</td>
									<?php if ($_smarty_tpl->tpl_vars['baseLigne']->value != "heures") {?>
										<td>
											&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFin');?>
 :&nbsp;
										</td>
										<td>
										<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
											<input name="date_fin_affiche" id="date_fin_affiche" type="date" value="<?php echo forceISODateFormat($_smarty_tpl->tpl_vars['dateFin']->value);?>
" class="form-control"  onChange="$('date_fin_custom').value= '----------------';" />
										<?php } else { ?>
											<input name="date_fin_affiche" id="date_fin_affiche" type="text" value="<?php echo $_smarty_tpl->tpl_vars['dateFin']->value;?>
" class="form-control datepicker"   onChange="$('date_fin_custom').value= '----------------';" />
										<?php }?>

											<br>
											<select id="date_fin_custom" name="date_fin_custom" class="form-control" onChange="$('date_fin_affiche').value= '----------------';">
												<option value=""><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci');?>
...</option>
												<option value="1_semaine"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_1_semaine');?>
</option>
												<option value="2_semaines"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_2_semaines');?>
</option>
												<option value="3_semaines"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_3_semaines');?>
</option>
												<option value="1_mois"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_1_mois');?>
</option>
												<option value="2_mois"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_2_mois');?>
</option>
												<option value="3_mois"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_3_mois');?>
</option>
												<option value="4_mois"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_4_mois');?>
</option>
												<option value="5_mois"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_5_mois');?>
</option>
												<option value="6_mois"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'raccourci_6_mois');?>
</option>
											</select>
										</td>
									<?php }?>
									<td class="pr-3">
										<button id="dateFilterButton" class="btn btn-sm btn-default" onClick="$('formChoixDates').submit();"><i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i></button>
									</td>
								</tr>
								</table>
							</li>
						</ul>
				</form>
				</div>
					<div class="btn-group ml-md-2 pt-2 cursor-pointer" id="btnDateSelector">
						<a class="btn btn-default" onClick="document.location='process/planning.php?raccourci_date=-<?php echo $_smarty_tpl->tpl_vars['nbJours']->value;?>
';" id="buttonDatePrevSelector"><i class="fa fa-chevron-left fa-lg fa-fw" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['dateBoutonInferieur']->value;?>
</a>
						<a class="btn btn-default" onClick="document.location='process/planning.php?raccourci_date=+<?php echo $_smarty_tpl->tpl_vars['nbJours']->value;?>
';" id="buttonDateNextSelector"><?php echo $_smarty_tpl->tpl_vars['dateBoutonSuperieur']->value;?>
 <i class="fa fa-chevron-right fa-lg fa-fw" aria-hidden="true"></i></a>
					</div>
					<?php if (!in_array("tasks_readonly",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
						<div class="btn-group ml-md-4 pt-2" id="btnAddTask">
							<a class="btn btn-info" href="javascript:Reloader.stopRefresh();xajax_ajoutPeriode();undefined;">
								<?php if (!strstr($_SERVER['HTTP_USER_AGENT'],"MSIE 8.0")) {?>
									<i class="fa fa-calendar-plus-o fa-lg fa-fw" aria-hidden="true"></i>
								<?php }?>
								<span class="d-none d-md-inline-block">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuAjouterPeriode');?>
</span>
							</a>
						</div>
					<?php }?>
			</div>
		</div>
	</div>
	<div class="row noprint">
		<div class="col-md-12 mb-2" id="secondLayer">
			<div class="soplanning-box pt-0 form-inline" id="divPlanningMainFilter">
										<div class="btn-group pt-2" id="dropdownTypePlanning">
						<button class="btn dropdown-toggle btn-default" data-toggle="dropdown" onclick="javascript:multiselecthide();"><i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i><span id='label_tierpar'>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_affichage');?>
</span>&nbsp;<span class="caret"></span></button>
						<div class="dropdown-menu">
							<?php if ($_SESSION['baseLigne'] == 'users') {?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=users">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=users">
								<i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningPersonne');?>
</a>
							
							<?php if ($_SESSION['baseLigne'] == 'projets') {?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=projets">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=projets">
								<i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningProjet');?>
</a>
							
							<?php if (@constant('CONFIG_SOPLANNING_OPTION_LIEUX') == 1) {?>
							<?php if ($_SESSION['baseLigne'] == 'lieux') {?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=lieux">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=lieux">
								<i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningLieu');?>
</a>
							<?php }?>
							
							<?php if (@constant('CONFIG_SOPLANNING_OPTION_RESSOURCES') == 1) {?>
							<?php if ($_SESSION['baseLigne'] == 'ressources') {?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=ressources">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=ressources">
								<i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningRessource');?>
</a>
							<?php }?>

							<?php if ($_SESSION['baseLigne'] == 'heures' && $_SESSION['baseColonne'] == 'users') {?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=heures&baseColonne=users">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=heures&baseColonne=users">
								<i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningHorairePersonne');?>
</a>
														
							<div class="dropdown-divider"></div>
							<?php if ($_SESSION['baseColonne'] == 'users' && $_SESSION['baseLigne'] == 'heures') {?>
								<a class="dropdown-item disabled" href="process/planning.php?baseColonne=heures"><i style="margin-left:19px;">&nbsp;</i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningHeures');?>
</a>
								<a class="dropdown-item disabled" href="process/planning.php?baseColonne=jours"><i style="margin-left:19px;">&nbsp;</i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningJours');?>
</a>
							<?php } else { ?>
								<?php if ($_SESSION['baseColonne'] == 'heures') {?>
									<a class="dropdown-item" href="process/planning.php?baseColonne=heures">
									<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
								<?php } else { ?>
									<a class="dropdown-item" href="process/planning.php?baseColonne=heures">
									<i style="margin-left:19px;">&nbsp;</i>
								<?php }?>
								<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningHeures');?>
</a>
								<?php if ($_SESSION['baseColonne'] == 'jours') {?>
									<a class="dropdown-item" href="process/planning.php?baseColonne=jours">
									<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
								<?php } else { ?>
									<a class="dropdown-item" href="process/planning.php?baseColonne=jours">
									<i style="margin-left:19px;">&nbsp;</i>
								<?php }?>
								<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningJours');?>
</a>
							<?php }?>
							<div class="dropdown-divider"></div>

							<?php if ($_SESSION['masquerLigneVide'] == 0) {?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=<?php echo $_SESSION['baseLigne'];?>
&baseColonne=<?php echo $_SESSION['baseColonne'];?>
&masquerLigneVide=1">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=<?php echo $_SESSION['baseLigne'];?>
&baseColonne=<?php echo $_SESSION['baseColonne'];?>
&masquerLigneVide=0">
								<i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningAfficherLignesVides');?>
</a>
							
							<?php if ($_SESSION['afficherLigneTotal'] == 1) {?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=<?php echo $_SESSION['baseLigne'];?>
&baseColonne=<?php echo $_SESSION['baseColonne'];?>
&afficherLigneTotal=0">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=<?php echo $_SESSION['baseLigne'];?>
&baseColonne=<?php echo $_SESSION['baseColonne'];?>
&afficherLigneTotal=1">
								<i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningAfficherTotalJour');?>
</a>

							<?php if ($_SESSION['afficherTableauRecap'] == 1) {?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=<?php echo $_SESSION['baseLigne'];?>
&baseColonne=<?php echo $_SESSION['baseColonne'];?>
&afficherTableauRecap=0">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="process/planning.php?baseLigne=<?php echo $_SESSION['baseLigne'];?>
&baseColonne=<?php echo $_SESSION['baseColonne'];?>
&afficherTableauRecap=1">
								<i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planningAfficherTableauRecap');?>
</a>
						</div>
					</div>
			
										<div class="btn-group pt-2" id="dropdownTaskUserFilter">
						<form action="process/planning.php" method="POST">
						<input type="hidden" name="filtreUser" value="1" />
						<select name="filtreUser" multiple="multiple" id="filtreUser" class="d-none multiselect">
							<?php if (count($_smarty_tpl->tpl_vars['listeUsers']->value) == 0) {?>
								<option>&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserAucunProjet');?>
</option>
							<?php } else { ?>
								<optgroup id="gu0" label="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cocheUserSansGroupe');?>
">
								<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeUsers']->value, 'userCourant', false, NULL, 'loopUsers', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userCourant']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id'] != $_smarty_tpl->tpl_vars['groupeTemp']->value) {?>
										</optgroup><optgroup id="gu<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id'];?>
" label="<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['groupe_nom'];?>
">
									<?php }?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['user_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['userCourant']->value['user_id'],$_smarty_tpl->tpl_vars['filtreUser']->value)) {?>selected="selected"<?php }?>><?php echo xss_protect($_smarty_tpl->tpl_vars['userCourant']->value['nom']);?>
 (<?php echo xss_protect($_smarty_tpl->tpl_vars['userCourant']->value['user_id']);?>
)</option>
								<?php $_smarty_tpl->_assignInScope('groupeTemp', $_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id']);?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
							</optgroup></select>
						</form>
					</div>
										<div class="btn-group pt-2" id="dropdownTaskProjectFilter">
						<form action="process/planning.php" method="POST">
						<input type="hidden" name="filtreGroupeProjet" value="1" />
						<select name="filtreGroupeProjet" multiple="multiple" id="filtreGroupeProjet" class="d-none multiselect">
							<?php if (count($_smarty_tpl->tpl_vars['listeProjets']->value) == 0) {?>
								<option>&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetAucunProjet');?>
</option>
							<?php } else { ?>
								<optgroup id="g0" label="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_sansGroupes');?>
">
								<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProjets']->value, 'projetCourant', false, NULL, 'loopProjets', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['projetCourant']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id'] != $_smarty_tpl->tpl_vars['groupeTemp']->value) {?>
										</optgroup><optgroup id="g<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id'];?>
" label="<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['groupe_nom'];?>
">
									<?php }?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['projetCourant']->value['projet_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['projetCourant']->value['projet_id'],$_smarty_tpl->tpl_vars['filtreGroupeProjet']->value)) {?>selected="selected"<?php }?>><?php echo xss_protect($_smarty_tpl->tpl_vars['projetCourant']->value['nom']);?>
 (<?php echo xss_protect($_smarty_tpl->tpl_vars['projetCourant']->value['projet_id']);?>
)</option>
								<?php $_smarty_tpl->_assignInScope('groupeTemp', $_smarty_tpl->tpl_vars['projetCourant']->value['groupe_id']);?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
							</optgroup></select>
						</form>
					</div>
										<div class="btn-group pt-2" id="dropdownAdvancedFilter">
						<form action="process/planning.php" method="POST">
						<button class="btn <?php if (((count($_smarty_tpl->tpl_vars['filtreStatutTache']->value) > 0) || (count($_smarty_tpl->tpl_vars['filtreGroupeLieu']->value) > 0) || (count($_smarty_tpl->tpl_vars['filtreGroupeRessource']->value) > 0) || (count($_smarty_tpl->tpl_vars['filtreStatutProjet']->value) > 0))) {?>btn-danger<?php } else { ?>btn-default<?php }?> dropdown-toggle" data-toggle="dropdown" onclick="javascript:multiselecthide();"><i class="fa fa-flask fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'filtres_avances');?>
&nbsp;</span><span class="caret"></span></button>
						<ul class="dropdown-menu">
							<?php if (((count($_smarty_tpl->tpl_vars['filtreStatutTache']->value) > 0) || (count($_smarty_tpl->tpl_vars['filtreGroupeLieu']->value) > 0) || (count($_smarty_tpl->tpl_vars['filtreGroupeRessource']->value) > 0) || (count($_smarty_tpl->tpl_vars['filtreStatutProjet']->value) > 0))) {?><a href="process/planning.php?desactiverFiltreAvances=1" class="btn btn-danger btn-sm margin-left-10"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreAvancesDesactiver');?>
</a><?php }?>
							<li class="divider"></li>
							<li>
								<table onClick="event.cancelBubble=true;" class="planning-filter">
									<tr>
										<td class="planningDropdownFilter">
											<input type="hidden" name="filtreStatutTache" value="1">
											<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formChoixStatutTache');?>
</b><br />
											<div class="form-horizontal col-md-12">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeStatusTaches']->value, 'statust');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['statust']->value) {
?>
											<label class="checkbox">
												<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['statust']->value['status_id'];?>
" name="statutsTache[]" value="<?php echo $_smarty_tpl->tpl_vars['statust']->value['status_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['statust']->value['status_id'],$_smarty_tpl->tpl_vars['filtreStatutTache']->value)) {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['statust']->value['nom'];?>

											</label>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</div>
										</td>
										<td class="planningDropdownFilter">
											<input type="hidden" name="filtreStatutProjet" value="1">
											<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formChoixStatutProjet');?>
</b><br />
											<div class="form-horizontal col-md-12">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeStatusProjets']->value, 'statusp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['statusp']->value) {
?>
											<label class="checkbox">
												<input type="checkbox" id="statut_projet_<?php echo $_smarty_tpl->tpl_vars['statusp']->value['status_id'];?>
" name="statutsProjet[]" value="<?php echo $_smarty_tpl->tpl_vars['statusp']->value['status_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['statusp']->value['status_id'],$_smarty_tpl->tpl_vars['filtreStatutProjet']->value)) {?>checked="checked"<?php }?> />&nbsp;<?php echo $_smarty_tpl->tpl_vars['statusp']->value['nom'];?>

											</label>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</div>
										</td>

																				<?php if (@constant('CONFIG_SOPLANNING_OPTION_LIEUX') == 1 && (count($_smarty_tpl->tpl_vars['listeLieux']->value)) > 0) {?>
											<td class="planningDropdownFilter">
											<input type="hidden" name="filtreGroupeLieu" value="1">
											<input type="hidden" name="maxGroupeLieu" value="<?php echo count($_smarty_tpl->tpl_vars['listeLieux']->value);?>
">
												<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuLieux');?>
</b>
												<div class="form-horizontal col-md-12">
												<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
												<?php echo smarty_function_math(array('assign'=>'nbColonnes','equation'=>"ceil(nbLieux / nbLieuxParColonnes)",'nbLieux'=>count($_smarty_tpl->tpl_vars['listeLieux']->value),'nbLieuxParColonnes'=>@constant('FILTER_NB_AERA_PER_COLUMN')),$_smarty_tpl);?>

												<?php echo smarty_function_math(array('assign'=>'maxCol','equation'=>"ceil(nbLieux / nbColonnes)",'nbLieux'=>count($_smarty_tpl->tpl_vars['listeLieux']->value),'nbColonnes'=>$_smarty_tpl->tpl_vars['nbColonnes']->value),$_smarty_tpl);?>

												<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeLieux']->value, 'lieuCourant', false, NULL, 'loopLieux', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lieuCourant']->value) {
?>
													<?php if ($_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value >= $_smarty_tpl->tpl_vars['maxCol']->value) {?>
														<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
														</td>
													<td class="planningDropdownFilter">
													<?php }?>
													<label class="checkbox">
														<input type="checkbox" id="lieu_<?php echo $_smarty_tpl->tpl_vars['lieuCourant']->value['lieu_id'];?>
" name="lieu[]" value="<?php echo $_smarty_tpl->tpl_vars['lieuCourant']->value['lieu_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['lieuCourant']->value['lieu_id'],$_smarty_tpl->tpl_vars['filtreGroupeLieu']->value)) {?>checked="checked"<?php }?> /> <?php echo xss_protect($_smarty_tpl->tpl_vars['lieuCourant']->value['nom']);?>

													</label>
													<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', $_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value+1);?>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
											</td>
										<?php }?>

																				<?php if (@constant('CONFIG_SOPLANNING_OPTION_RESSOURCES') == 1 && (count($_smarty_tpl->tpl_vars['listeRessources']->value)) > 0) {?>
											<td class="planningDropdownFilter">
											<input type="hidden" name="maxGroupeRessource" value="<?php echo count($_smarty_tpl->tpl_vars['listeRessources']->value);?>
">
											<input type="hidden" name="filtreGroupeRessource" value="1">
												<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuRessources');?>
</b>
												<div class="form-horizontal col-md-12">
												<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
												<?php echo smarty_function_math(array('assign'=>'nbColonnes','equation'=>"ceil(nbRessources / nbRessourcesParColonnes)",'nbRessources'=>count($_smarty_tpl->tpl_vars['listeRessources']->value),'nbRessourcesParColonnes'=>@constant('FILTER_NB_RESSOURCES_PER_COLUMN')),$_smarty_tpl);?>

												<?php echo smarty_function_math(array('assign'=>'maxCol','equation'=>"ceil(nbRessources / nbColonnes)",'nbRessources'=>count($_smarty_tpl->tpl_vars['listeRessources']->value),'nbColonnes'=>$_smarty_tpl->tpl_vars['nbColonnes']->value),$_smarty_tpl);?>

												<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeRessources']->value, 'ressourceCourant', false, NULL, 'loopRessources', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ressourceCourant']->value) {
?>
													<?php if ($_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value >= $_smarty_tpl->tpl_vars['maxCol']->value) {?>
														<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
														</td>
														<td class="planningDropdownFilter">
													<?php }?>
													<label class="checkbox">
														<input type="checkbox" id="ressource_<?php echo $_smarty_tpl->tpl_vars['ressourceCourant']->value['ressource_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['ressourceCourant']->value['ressource_id'];?>
" name="ressource[]" <?php if (in_array($_smarty_tpl->tpl_vars['ressourceCourant']->value['ressource_id'],$_smarty_tpl->tpl_vars['filtreGroupeRessource']->value)) {?>checked="checked"<?php }?> /> <?php echo xss_protect($_smarty_tpl->tpl_vars['ressourceCourant']->value['nom']);?>

													</label>
													<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', $_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value+1);?>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
											</td>
										<?php }?>
									</tr>
								</table>
							</li>
							<li><input type="submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
" class="btn btn-default ml-2" /></li>
						</ul>
						</form>
					</div>
										<div class="btn-group pt-2" id="dropdownTri">
						<button class="btn dropdown-toggle btn-default" data-toggle="dropdown" onclick="javascript:multiselecthide();"><i class="fa fa-sort-amount-desc fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formTrierPar');?>
</span>&nbsp;<span class="caret"></span></button>
						<div class="dropdown-menu">
							<?php if ($_smarty_tpl->tpl_vars['baseLigne']->value == "projets") {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['triPlanningPossibleProjet']->value, 'triTemp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['triTemp']->value) {
?>
									<?php $_smarty_tpl->_assignInScope('chaineTmp', smarty_modifier_replace(smarty_modifier_replace(("triProjet_").($_smarty_tpl->tpl_vars['triTemp']->value),' ','_'),',','_'));?>
									<a class="dropdown-item" href="process/planning.php?triPlanning=<?php echo urlencode($_smarty_tpl->tpl_vars['triTemp']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['triTemp']->value == $_smarty_tpl->tpl_vars['triPlanning']->value) {?><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php } else { ?><i style="margin-left:19px;">&nbsp;</i><?php }
echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['chaineTmp']->value);?>
</a>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['baseLigne']->value == "users") {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['triPlanningPossibleUser']->value, 'triTemp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['triTemp']->value) {
?>
									<?php $_smarty_tpl->_assignInScope('chaineTmp', smarty_modifier_replace(smarty_modifier_replace(("triUser_").($_smarty_tpl->tpl_vars['triTemp']->value),' ','_'),',','_'));?>
									<a class="dropdown-item" href="process/planning.php?triPlanning=<?php echo urlencode($_smarty_tpl->tpl_vars['triTemp']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['triTemp']->value == $_smarty_tpl->tpl_vars['triPlanning']->value) {?><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php } else { ?><i style="margin-left:19px;">&nbsp;</i><?php }
echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['chaineTmp']->value);?>
</a>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['baseLigne']->value == "lieux" || $_smarty_tpl->tpl_vars['baseLigne']->value == "ressources" || $_smarty_tpl->tpl_vars['baseLigne']->value == "heures") {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['triPlanningPossibleAutre']->value, 'triTemp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['triTemp']->value) {
?>
									<?php $_smarty_tpl->_assignInScope('chaineTmp', smarty_modifier_replace(smarty_modifier_replace(("triAutre_").($_smarty_tpl->tpl_vars['triTemp']->value),' ','_'),',','_'));?>
									<a class="dropdown-item" href="process/planning.php?triPlanning=<?php echo urlencode($_smarty_tpl->tpl_vars['triTemp']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['triTemp']->value == $_smarty_tpl->tpl_vars['triPlanning']->value) {?><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;<?php } else { ?><i style="margin-left:19px;">&nbsp;</i><?php }
echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['chaineTmp']->value);?>
</a>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						</div>
					</div>
										<div class="btn-group pt-2" id="dropdownExport">
						<button class="btn dropdown-toggle btn-default" data-toggle="dropdown" onclick="javascript:multiselecthide();"><i class="fa fa-cloud-download fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'choix_export');?>
</span>&nbsp;<span class="caret"></span></button>
						<div class="dropdown-menu" style="">
							<a class="dropdown-item" href="javascript:window.print();"><i class="fa fa-fw fa-print" aria-hidden="true"></i> <?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'printAll'));?>
</a>
							<a class="dropdown-item" href="export_csv.php"><i class="fa fa-fw fa-file-text-o" aria-hidden="true"></i> <?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CSVExport'));?>
</a>
							<a class="dropdown-item" href="javascript:xajax_choixPDF();undefined;"><i class="fa fa-fw fa-file-pdf-o" aria-hidden="true"></i> <?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDFExport'));?>
</a>
							<a class="dropdown-item" href="export_xls.php" target="_blank"><i class="fa fa-fw fa-file-excel-o" aria-hidden="true"></i> <?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'xlsExport'));?>
</a>
							<a class="dropdown-item" href="export_gantt.php" target="_blank"><i class="fa fa-fw fa-file-pdf-o" aria-hidden="true"></i> <?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ganttExport'));?>
</a>
							<a class="dropdown-item" href="export_pdf_calendrier.php" target="_blank"><i class="fa fa-fw fa-calendar-o" aria-hidden="true"></i> <?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'calendarExport'));?>
</a>
							<a class="dropdown-item" href="javascript:xajax_choixIcal();undefined;"><i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i> <?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'icalExport'));?>
</a>
						</div>
					</div>
										<div class="btn-group pt-2" id="dropdownLarge">
						<?php if ($_smarty_tpl->tpl_vars['dimensionCase']->value == "reduit") {?>
							<a class="btn btn-default" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuPlanningLarge');?>
" href="process/planning.php?dimensionCase=large"><i class="fa fa-search-plus fa-lg fa-fw" aria-hidden="true"></i></a>
						<?php } else { ?>
							<a class="btn btn-default" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuPlanningReduit');?>
" href="process/planning.php?dimensionCase=reduit"><i class="fa fa-search-minus fa-lg fa-fw" aria-hidden="true"></i></a>
						<?php }?>
						<button class="btn dropdown-toggle btn-default" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-sort fa-lg fa-fw" aria-hidden="true"></i></button>
						<div class="dropdown-menu">
							<?php if ($_smarty_tpl->tpl_vars['ascenceur']->value == '1') {?>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?ascenceur=0">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?ascenceur=1"><i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'scrolls_v');?>
</a>
						
							<?php if ($_smarty_tpl->tpl_vars['fleches']->value == '1') {?>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?fleches=0">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?fleches=1"><i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'scrolls_fleches');?>
</a>

							<?php if ($_smarty_tpl->tpl_vars['entetesflottantes']->value == '1') {?>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?entetesflottantes=0">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;
							<?php } else { ?>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?entetesflottantes=1"><i style="margin-left:19px;">&nbsp;</i>
							<?php }?>
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'entetes_flottantes');?>
</a>
						</div>
					</div>

										<div class="btn-group pt-2" id="searchboxPlanning">
						<form action="process/planning.php" method="POST">
							<div class="input-group">
								<input type="text" class="tooltipster form-control input-sm" name="filtreTexte" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['filtreTexte']->value);?>
" maxlength="50" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreTexte'), ENT_QUOTES, 'UTF-8', true);?>
" id="filtreTexte" />
								<div class="input-group-append">
									<button type="submit" class="btn btn-sm <?php if ($_smarty_tpl->tpl_vars['filtreTexte']->value != '') {?>btn-danger<?php } else { ?>btn-default<?php }?>">
									<i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i></button>
									<?php if ($_smarty_tpl->tpl_vars['filtreTexte']->value != '') {?>
										<div class="btn-group">
											<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">&nbsp;<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a href="process/planning.php?desactiverFiltreTexte=1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserDesactiver');?>
</a></li>
											</ul>
										</div>
									<?php }?>
								</div>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div><?php }
}
