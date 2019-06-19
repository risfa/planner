<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:36:40
  from '/home/dapps/public_html/XENIEL/planner/templates/www_projets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdec68c00c03_95404148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a6b559ce04c3114a70671380ee9a762d04d761e' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_projets.tpl',
      1 => 1553826942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:www_header.tpl' => 1,
    'file:www_footer.tpl' => 1,
  ),
),false)) {
function content_5cfdec68c00c03_95404148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dapps/public_html/XENIEL/planner/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_subTemplateRender("file:www_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box">
				<div class="btn-group">
					<?php if (in_array("projectgroups_manage_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
						<a href="groupe_list.php" class="btn btn-default"><i class="fa fa-folder-o fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuListeGroupes');?>
</a>
					<?php }?>
					<a href="javascript:xajax_ajoutProjet('projets');undefined;" class="btn btn-default"><i class="fa fa-bookmark fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuAjouterProjet');?>
</a>
				</div>				
			</div>
		</div>
	</div>
	<form action="projets.php" method="POST" id="filtreprojet">
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box mt-2">
				<div class="form-group row col-md-12">
					<div id="projectListLabel">
					<label class="col-form-label w140"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_afficherProjets');?>
 :</label>
					</div>
					<div id="projectListButton">
					<div class="btn-group" data-toggle="buttons-radio">
						<button type="button" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['filtrageProjet']->value == 'tous') {?> btn-primary active<?php }?>" onclick="top.location='?filtrageProjet=tous';"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_afficherProjetsTous');?>
</button>
						<button type="button" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['filtrageProjet']->value != 'tous') {?> btn-primary active<?php }?>" onclick="top.location='?filtrageProjet=date';"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_afficherProjetsParDate');?>
</button>
					</div>
				
					<div class="btn-group">
					<button type="button" class="btn <?php if (count($_smarty_tpl->tpl_vars['filtreGroupeProjet']->value) > 0) {?>btn-danger<?php } else { ?>btn-default<?php }?> dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'filtreGroupeProjet');?>
&nbsp;<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<?php if (count($_smarty_tpl->tpl_vars['filtreGroupeProjet']->value) > 0) {?>
							<a href="?desactiverfiltreGroupe=1" class="btn btn-sm btn-danger ml-2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetDesactiver');?>
</a>
						<?php }?>
						<li>
							<input type="hidden" name="filtreGroupeProjet" value="1" />
							<table onClick="event.cancelBubble=true;" class="ml-2 mr-2">
								<tr>
									<td>
										<input type="checkbox" id="gp0" name="gp0" value="1" <?php if (in_array("gp0",$_smarty_tpl->tpl_vars['filtreGroupeProjet']->value)) {?>checked="checked"<?php }?> /><label for="gp0" style="display:inline">&nbsp;<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_sansGroupes');?>
</b></label>
										<?php if (count($_smarty_tpl->tpl_vars['groupeProjets']->value) > 0) {?>
											<?php echo smarty_function_math(array('assign'=>'nbColonnes','equation'=>"ceil(nbGroupes / nbGroupesParColonnes)",'nbGroupes'=>count($_smarty_tpl->tpl_vars['groupeProjets']->value),'nbGroupesParColonnes'=>@constant('FILTER_NB_USERS_PER_COLUMN')),$_smarty_tpl);?>

											<?php echo smarty_function_math(array('assign'=>'maxCol','equation'=>"ceil(nbGroupes / nbColonnes)",'nbGroupes'=>count($_smarty_tpl->tpl_vars['groupeProjets']->value),'nbColonnes'=>$_smarty_tpl->tpl_vars['nbColonnes']->value),$_smarty_tpl);?>

											<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupeProjets']->value, 'groupeCourant', false, NULL, 'loopGroupes', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['groupeCourant']->value) {
?>
												<br/>
												<?php if ($_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value >= $_smarty_tpl->tpl_vars['maxCol']->value) {?>
													<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
													</td>
													<td>
												<?php }?>
												<input type="checkbox" id="gp<?php echo $_smarty_tpl->tpl_vars['groupeCourant']->value['groupe_id'];?>
" name="gp[]" value="<?php echo $_smarty_tpl->tpl_vars['groupeCourant']->value['groupe_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['groupeCourant']->value['groupe_id'],$_smarty_tpl->tpl_vars['filtreGroupeProjet']->value)) {?>checked="checked"<?php }?> /> <label for="gp<?php echo $_smarty_tpl->tpl_vars['groupeCourant']->value['groupe_id'];?>
" style="display:inline"><?php echo xss_protect($_smarty_tpl->tpl_vars['groupeCourant']->value['nom']);?>
</label>
												<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', $_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value+1);?>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									</td>
								</tr>
							</table>
						</li>
						<li><input type="submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
" class="btn btn-sm btn-primary ml-2 mt-2" /></li>
					</ul>
					</div>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['filtrageProjet']->value != "tous") {?>
					<div id="projectNbMonth" class="form-group form-inline">					
					<label class="col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formNbMois');?>
 :&nbsp;</label>
						<div class="input-group">
							<input type="text" name="nb_mois" class="form-control" size="1" value="<?php echo $_smarty_tpl->tpl_vars['nbMois']->value;?>
" />
							<span class="input-group-append">
								<button class="btn btn-default" type="submit"><i class="fa fa-arrow-right fa-lg fa-fw" aria-hidden="true"></i></button>
							</span>
						</div>
					</div>
					<div id="projectFromDate" class="form-group form-inline">					
					<label class="col-form-label">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formDebut');?>
 :&nbsp;</label>
						<div class="input-group">
						<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
							<input type="date" name="date_debut_affiche_projet" id="date_debut_affiche_projet" value="<?php echo forceISODateFormat($_smarty_tpl->tpl_vars['dateDebut']->value);?>
" class="form-control" />
						<?php } else { ?>
							<input type="text" name="date_debut_affiche_projet" id="date_debut_affiche_projet" value="<?php echo $_smarty_tpl->tpl_vars['dateDebut']->value;?>
" class="form-control datepicker" />
						<?php }?>
						<span class="input-group-append">
								<button class="btn btn-default" type="button"><i class="fa fa-arrow-right fa-lg fa-fw" aria-hidden="true"></i></button>
							</span>
						</div>
					</div>
					<div id="projectToDate">
					<label class="col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formInfoDateFin');?>
 : <?php echo $_smarty_tpl->tpl_vars['dateFin']->value;?>
</label>
					</div>	
					<?php }?>
			</div>
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box">
					<div id="projectStatusLabel">
					<label class="col-form-label w140 nowrap"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_filtreProjets');?>
 :</label>
					</div>
					<div id="projectStatusCheckbox">
					<div class="form-group">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeStatus']->value, 'status');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
?>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="statut[]" id="<?php echo $_smarty_tpl->tpl_vars['status']->value['status_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['status']->value['status_id'];?>
" onclick="javascript:$('#filtreprojet').submit();" <?php if (in_array($_smarty_tpl->tpl_vars['status']->value['status_id'],$_smarty_tpl->tpl_vars['listeStatuts']->value)) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['status']->value['status_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value['nom'];?>
</label>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<div class="btn-group" id="projectSearchbox">
						<div class="input-group">
							<input type="text" class="form-control" name="rechercheProjet" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['rechercheProjet']->value)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_groupeRecherche');?>
" />
							<span class="input-group-append">
									<button type="submit" class="btn <?php if ($_smarty_tpl->tpl_vars['rechercheProjet']->value != '') {?>btn-danger<?php } else { ?>btn-default<?php }?>"><i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i></button>
							</span>
						</div>
					</div>
				</div>
					</div>
			</div>
		</div>
	</div>
	</form>
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box mt-2">
				<table class="table table-striped table-hover" id="projectTab">
					<tr>
						<td colspan="4">
							<?php if ($_smarty_tpl->tpl_vars['order']->value == "nom") {?>
								<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
									<a href="?order=nom&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_projet');?>
 (<?php echo count($_smarty_tpl->tpl_vars['projets']->value);?>
)</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
								<?php } else { ?>
									<a href="?order=nom&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_projet');?>
 (<?php echo count($_smarty_tpl->tpl_vars['projets']->value);?>
)</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
								<?php }?>
							<?php } else { ?>
								<a href="?order=nom&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_projet');?>
 (<?php echo count($_smarty_tpl->tpl_vars['projets']->value);?>
)</a>
							<?php }?>
						</td>
						<td class="projectTabColCreator">
							<?php if ($_smarty_tpl->tpl_vars['order']->value == "nom_createur") {?>
								<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
									<a href="?order=nom_createur&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_createur');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
								<?php } else { ?>
									<a href="?order=nom_createur&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_createur');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
								<?php }?>
							<?php } else { ?>
								<a href="?order=nom_createur&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_createur');?>
</a>
							<?php }?>
						</td>
						<td class="d-none d-md-table-cell">
							<?php if ($_smarty_tpl->tpl_vars['order']->value == "charge") {?>
								<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
									<a href="?order=charge&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_charge');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
								<?php } else { ?>
									<a href="?order=charge&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_charge');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
								<?php }?>
							<?php } else { ?>
								<a href="?order=charge&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_charge');?>
</a>
							<?php }?>
						</td>
						<td class="d-none d-md-table-cell">
							<?php if ($_smarty_tpl->tpl_vars['order']->value == "livraison") {?>
								<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
									<a href="?order=livraison&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_livraison');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
								<?php } else { ?>
									<a href="?order=livraison&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_livraison');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
								<?php }?>
							<?php } else { ?>
								<a href="?order=livraison&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_livraison');?>
</a>
							<?php }?>
						</td>
						<td class="projectTabColComment">
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_commentaires');?>

						</td>
					</tr>
					<tr>
						<td colspan="8" class="project-group-head"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_sansGroupes');?>
</td>
					</tr>
					<?php $_smarty_tpl->_assignInScope('groupeCourant', '');?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projets']->value, 'projet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['projet']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['projet']->value['groupe_id'] != $_smarty_tpl->tpl_vars['groupeCourant']->value) {?>
							<tr>
							<td colspan="8" class="project-group-head"><?php echo xss_protect($_smarty_tpl->tpl_vars['projet']->value['nom_groupe']);?>
</td>
						<?php }?>
						<tr>
							<td class="w140">
								<?php if (in_array("projects_manage_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || (in_array("projects_manage_own",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) && $_smarty_tpl->tpl_vars['projet']->value['createur_id'] == $_smarty_tpl->tpl_vars['user']->value['user_id'])) {?>
									<a href="javascript:xajax_modifProjet('<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
', 'projets');undefined;"><i class="fa fa-pencil fa-lg fa-fw" aria-hidden="true"></i></a>
									<a href="javascript:xajax_supprimerProjet('<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
');undefined;" 
									onclick="javascript: return confirm('<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_confirmSuppr'));?>
')"><i class="fa fa-trash-o fa-lg fa-fw" aria-hidden="true"></i></a>
								<?php }?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?filtreSurProjet=<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
" title="<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_filtre_sur_projet'));?>
"><i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i></a>
								<?php if ($_smarty_tpl->tpl_vars['projet']->value['lien'] <> '') {?>
								<a href="<?php if (strpos($_smarty_tpl->tpl_vars['projet']->value['lien'],"http") !== 0 && strpos($_smarty_tpl->tpl_vars['projet']->value['lien'],"\\") !== 0) {?>http://<?php }
echo $_smarty_tpl->tpl_vars['projet']->value['lien'];?>
" title="<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_gotoLien'));?>
" target="_blank"><i class="fa fa-globe fa-lg fa-fw" aria-hidden="true"></i></a>
								<?php } else { ?>
								<?php }?>
							</td>
							<td><span class="pastille-projet" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['projet']->value['couleur'];?>
;color:<?php echo buttonFontColor(("#").($_smarty_tpl->tpl_vars['projet']->value['couleur']));?>
"><?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
</span></td>
							<td>
								<?php if (@constant('CONFIG_PLANNING_AFFICHAGE_STATUS') == 'aucun') {?>
									<?php } elseif (@constant('CONFIG_PLANNING_AFFICHAGE_STATUS') == 'nom') {
echo $_smarty_tpl->tpl_vars['projet']->value['statut_nom'];?>

									<?php } elseif (@constant('CONFIG_PLANNING_AFFICHAGE_STATUS') == 'pourcentage') {?>
									<div class="progress tooltipster" title="<?php echo $_smarty_tpl->tpl_vars['projet']->value['statut_nom'];?>
">
											<div class="progress-bar" style="width: <?php echo $_smarty_tpl->tpl_vars['projet']->value['statut_pourcentage'];?>
%;background-color:#<?php echo $_smarty_tpl->tpl_vars['projet']->value['statut_couleur'];?>
;color:<?php echo buttonFontColor(("#").($_smarty_tpl->tpl_vars['projet']->value['couleur']));?>
"><?php echo $_smarty_tpl->tpl_vars['projet']->value['statut_pourcentage'];?>
%</div>
									</div>
									<?php } elseif (@constant('CONFIG_PLANNING_AFFICHAGE_STATUS') == 'pastille') {?><div class="pastille-statut tooltipster" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['projet']->value['statut_couleur'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['projet']->value['statut_nom'];?>
"></div>
								<?php }?>
							</td>
							<td>
								<?php echo xss_protect($_smarty_tpl->tpl_vars['projet']->value['nom']);?>

							</td>
							<td class="projectTabColCreator">
								<?php echo xss_protect($_smarty_tpl->tpl_vars['projet']->value['nom_createur']);?>

							</td>
							<td class="d-none d-md-table-cell"><?php echo $_smarty_tpl->tpl_vars['projet']->value['charge'];?>
</td>
							<td class="d-none d-md-table-cell">
								<?php if ($_smarty_tpl->tpl_vars['projet']->value['livraison'] != '' && $_smarty_tpl->tpl_vars['projet']->value['livraison'] != '0000-00-00') {?>
									<a href="planning.php?livraison=<?php echo sqldate2userdate($_smarty_tpl->tpl_vars['projet']->value['livraison']);?>
"><?php echo sqldate2userdate($_smarty_tpl->tpl_vars['projet']->value['livraison']);?>
</a>
								<?php }?>
							</td>
							<td class="wrap projectTabColComment"><?php echo xss_protect($_smarty_tpl->tpl_vars['projet']->value['iteration']);?>
</td>
						</tr>
						<?php $_smarty_tpl->_assignInScope('groupeCourant', $_smarty_tpl->tpl_vars['projet']->value['groupe_id']);?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</table>
			</div>
		</div>
	</div>
</div>


<?php echo '<script'; ?>
>
	

	var yscroll = getCookie('yposProjets');
	window.onscroll = function() {document.cookie='yposProjets=' + window.pageYOffset;};
	addEvent(window, 'load', chargerYScrollPos);
	$('#rechercheProjet').keypress(function(event) {
		if (event.keyCode == 13 || event.which == 13) {
			$('#filtreProjet').submit();
			event.preventDefault();
		}
	});
	
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/select2-4.0.6/dist/js/select2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/select2-4.0.6/dist/js/i18n/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
