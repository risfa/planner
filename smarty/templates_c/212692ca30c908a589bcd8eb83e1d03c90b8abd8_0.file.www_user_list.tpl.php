<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:29:35
  from '/home/dapps/public_html/XENIEL/planner/templates/www_user_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdeabf572cd1_86528049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '212692ca30c908a589bcd8eb83e1d03c90b8abd8' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_user_list.tpl',
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
function content_5cfdeabf572cd1_86528049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dapps/public_html/XENIEL/planner/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_subTemplateRender("file:www_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box form-inline">
				<div class="btn-group">
					<a href="javascript:xajax_modifUser();undefined;" class="btn btn-default" ><i class="fa fa-user-plus fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuCreerUser');?>
</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_groupes.php" class="btn btn-default"><i class="fa fa-users fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuGroupesUsers');?>
</a>
				</div>

				<div class="btn-group">
					<form method="POST">
					<a href="#" class="btn <?php if (count($_smarty_tpl->tpl_vars['filtreEquipe']->value) > 0) {?>btn-danger<?php } else { ?>btn-default<?php }?> dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'filtreEquipe');?>
&nbsp;<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<?php if (count($_smarty_tpl->tpl_vars['filtreEquipe']->value) > 0) {?>
							<a href="?desactiverfiltreEquipe=1" class="btn btn-danger btn-sm ml-2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserDesactiver');?>
</a>
						<?php }?>
						<li>
							<input type="hidden" name="filtreEquipe" value="1">
							<table onClick="event.cancelBubble=true;" class="ml-2 mr-2">
								<tr>
									<td>
										<input type="checkbox" id="gu0" name="gu0" value="1" <?php if (in_array("gu0",$_smarty_tpl->tpl_vars['filtreEquipe']->value)) {?>checked="checked"<?php }?> /><label for="gu0" style="display:inline">&nbsp;<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cocheUserSansGroupe');?>
</b></label>

										<?php if (count($_smarty_tpl->tpl_vars['equipes']->value) > 0) {?>
											<?php echo smarty_function_math(array('assign'=>'nbColonnes','equation'=>"ceil(nbEquipes / nbEquipesParColonnes)",'nbEquipes'=>count($_smarty_tpl->tpl_vars['equipes']->value),'nbEquipesParColonnes'=>@constant('FILTER_NB_USERS_PER_COLUMN')),$_smarty_tpl);?>

											<?php echo smarty_function_math(array('assign'=>'maxCol','equation'=>"ceil(nbEquipes / nbColonnes)",'nbEquipes'=>count($_smarty_tpl->tpl_vars['equipes']->value),'nbColonnes'=>$_smarty_tpl->tpl_vars['nbColonnes']->value),$_smarty_tpl);?>

											<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['equipes']->value, 'equipeCourante', false, NULL, 'loopEquipes', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['equipeCourante']->value) {
?>
												<br/>
												<?php if ($_smarty_tpl->tpl_vars['tmpNbDansColCourante']->value >= $_smarty_tpl->tpl_vars['maxCol']->value) {?>
													<?php $_smarty_tpl->_assignInScope('tmpNbDansColCourante', "0");?>
													</td>
													<td>
												<?php }?>
												<input type="checkbox" id="gu<?php echo $_smarty_tpl->tpl_vars['equipeCourante']->value['user_groupe_id'];?>
" name="gu[]" value="<?php echo $_smarty_tpl->tpl_vars['equipeCourante']->value['user_groupe_id'];?>
" onClick="filtreCocheUserGroupe('<?php echo $_smarty_tpl->tpl_vars['equipeCourante']->value['user_groupe_id'];?>
')" <?php if (in_array($_smarty_tpl->tpl_vars['equipeCourante']->value['user_groupe_id'],$_smarty_tpl->tpl_vars['filtreEquipe']->value)) {?>checked="checked"<?php }?> /> <label for="gu<?php echo $_smarty_tpl->tpl_vars['equipeCourante']->value['user_groupe_id'];?>
" style="display:inline"><?php echo xss_protect($_smarty_tpl->tpl_vars['equipeCourante']->value['nom']);?>
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
				</form>	
				</div>
				<div class="btn-group">
					<form method="POST">
					<div class="input-group">
						<input type="text" class="form-control" name="rechercheUser" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['rechercheUser']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
						<span class="input-group-append">
							<button type="submit" class="btn <?php if ($_smarty_tpl->tpl_vars['rechercheUser']->value != '') {?>btn-danger<?php } else { ?>btn-default<?php }?>"><i class="fa fa-search" aria-hidden="true"></i></button>
						</span>
					</div>
					</form>
				</div>
				<div class="btn-group ml-md-1">
					<a href="javascript:xajax_usersBulkRightsForm();undefined;" class="btn btn-default" ><i class="fa fa-files-o fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuUsersBulkRights');?>
</a>
				</div>
			</div>
		</div>
	</div>

	<?php if (count($_smarty_tpl->tpl_vars['users']->value) > 0) {?>

		<div class="row">
			<div class="col-md-12">
				<div class="soplanning-box mt-2">
					<table class="table table-striped table-hover" id="userTab">
						<tr>
							<th class="w140">&nbsp;</th>
							<th class="userTabColId">
								<?php if ($_smarty_tpl->tpl_vars['order']->value == "user_id") {?>
									<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=user_id&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_identifiant');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
									<?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=user_id&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_identifiant');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
									<?php }?>
								<?php } else { ?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=user_id&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_identifiant');?>
</a>
								<?php }?>
							</th>
							<th>
								<?php if ($_smarty_tpl->tpl_vars['order']->value == "nom") {?>
									<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=nom&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_nom');?>
 (<?php echo count($_smarty_tpl->tpl_vars['users']->value);?>
)</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
									<?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=nom&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_nom');?>
 (<?php echo count($_smarty_tpl->tpl_vars['users']->value);?>
)</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
									<?php }?>
								<?php } else { ?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=nom&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_nom');?>
 (<?php echo count($_smarty_tpl->tpl_vars['users']->value);?>
)</a>
								<?php }?>
							</th>
							<th class="userTabColEmail">
								<?php if ($_smarty_tpl->tpl_vars['order']->value == "email") {?>
									<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=email&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_email');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
									<?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=email&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_email');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
									<?php }?>
								<?php } else { ?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=email&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_email');?>
</a>
								<?php }?>
							</th>
							<th class="wrap d-none d-sm-table-cell d-lg-table-cell">
								<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_groupe');?>

							</th>
							<th class="wrap d-none d-lg-table-cell">
								<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_droits_court');?>

							</th>
							<th class="wrap d-none d-lg-table-cell">
								<?php if ($_smarty_tpl->tpl_vars['order']->value == "visible_planning") {?>
									<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=visible_planning&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_visiblePlanning');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
									<?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=visible_planning&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_visiblePlanning');?>
</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
									<?php }?>
								<?php } else { ?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=1&order=visible_planning&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_visiblePlanning');?>
</a>
								<?php }?>
							</th>
							<th class="wrap d-none d-lg-table-cell"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_informations');?>
</th>
						</tr>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'userTmp', false, NULL, 'users', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userTmp']->value) {
?>
							<tr>
								<td class="w140 nowrap">
									<a href="javascript:xajax_modifUser('<?php echo urlencode($_smarty_tpl->tpl_vars['userTmp']->value['user_id']);?>
');undefined;"><i class="fa fa-pencil fa-lg fa-fw" aria-hidden="true"></i></a>
									<a href="javascript:xajax_supprimerUser('<?php echo urlencode($_smarty_tpl->tpl_vars['userTmp']->value['user_id']);?>
');undefined;" onClick="javascript:return confirm('<?php echo strtr($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_confirmSuppr'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"><i class="fa fa-trash-o fa-lg fa-fw" aria-hidden="true"></i></a>
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?filtreSurUser=<?php echo $_smarty_tpl->tpl_vars['userTmp']->value['user_id'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_filtre_sur_user'), ENT_QUOTES, 'UTF-8', true);?>
"><i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i></a>
								</td>
								<td class="userTabColId"><span class="pastille-user" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['userTmp']->value['couleur'];?>
;color:<?php echo buttonFontColor(("#").($_smarty_tpl->tpl_vars['userTmp']->value['couleur']));?>
"><?php echo $_smarty_tpl->tpl_vars['userTmp']->value['user_id'];?>
</span></td>
								<td><?php echo xss_protect($_smarty_tpl->tpl_vars['userTmp']->value['nom']);?>
</td>
								<td class="userTabColEmail">
									<?php if ($_smarty_tpl->tpl_vars['userTmp']->value['email'] != '') {?>
										<a href="mailto:<?php echo xss_protect($_smarty_tpl->tpl_vars['userTmp']->value['email']);?>
"><?php echo xss_protect($_smarty_tpl->tpl_vars['userTmp']->value['email']);?>
</a>
									<?php }?>
								</td>
								<td class="wrap d-none d-sm-table-cell d-lg-table-cell"><?php echo xss_protect($_smarty_tpl->tpl_vars['userTmp']->value['nom_groupe']);?>
</td>
								<td class="wrap d-none d-lg-table-cell">
									<?php if ($_smarty_tpl->tpl_vars['userTmp']->value['login_actif'] == "non") {?>
										<span class="badge" style="color:#ff0000"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'compte_desactive');?>
po</font>
									<?php } else { ?>
										<?php if (in_array("users_manage_all",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits'])) {?><span class="badge badge-secondary"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_utilisateurs');?>
</span><?php }?>
										<?php if (in_array("projects_manage_all",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits']) || in_array("projects_manage_own",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits'])) {?><span class="badge badge-secondary"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_projets');?>
</span><?php }?>
										<?php if (in_array("projectgroups_manage_all",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits'])) {?><span class="badge badge-secondary"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_groupesProjets');?>
</span><?php }?>
										<?php if (in_array("planning_modify_all",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits']) || in_array("planning_modify_own_project",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits']) || in_array("planning_modify_own_task",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits'])) {?><span class="badge badge-secondary"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_modifPlanning');?>
</span><?php }?>
										<?php if (in_array("lieux_all",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits'])) {?><span class="badge badge-secondary"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_lieux');?>
</span><?php }?>
										<?php if (in_array("ressources_all",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits'])) {?><span class="badge badge-secondary"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_ressources');?>
</span><?php }?>
										<?php if (in_array("parameters_all",$_smarty_tpl->tpl_vars['userTmp']->value['tabDroits'])) {?><span class="badge badge-info"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_parametres');?>
</span><?php }?>
									<?php }?>
								</td>
								<td class="wrap d-none d-lg-table-cell text-center">
									<?php $_smarty_tpl->_assignInScope('valTmp', $_smarty_tpl->tpl_vars['userTmp']->value['visible_planning']);?>
									<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['valTmp']->value);?>

									&nbsp;
								</td>
								<td class="wrap d-none d-lg-table-cell text-center">
									<?php $_smarty_tpl->_assignInScope('cooltip', ((((($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'user_liste_NBPeriodes')).(" : ")).($_smarty_tpl->tpl_vars['userTmp']->value['totalPeriodes'])).("<br>")).($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'user_date_dernier_login'))).(" : "));?>
									<?php $_smarty_tpl->_assignInScope('dateLogin', sqldatetime2userdatetime($_smarty_tpl->tpl_vars['userTmp']->value['date_dernier_login']));?>
									<?php $_smarty_tpl->_assignInScope('cooltip', ($_smarty_tpl->tpl_vars['cooltip']->value).($_smarty_tpl->tpl_vars['dateLogin']->value));?>
									<span class="fa fa-info-circle fa-lg fa-fw cursor-help tooltipster" aria-hidden="true" title="<?php echo $_smarty_tpl->tpl_vars['cooltip']->value;?>
"></span>
								</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php if ($_smarty_tpl->tpl_vars['nbPages']->value > 1) {?>
							<tr>
								<td colspan="7" class="text-right">
									<?php if ($_smarty_tpl->tpl_vars['currentPage']->value > 1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
">&lt;&lt; <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'action_precedent');?>
</a>&nbsp;&nbsp;<?php }?>
									<?php
$__section_pagination_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nbPages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pagination_0_total = $__section_pagination_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_pagination'] = new Smarty_Variable(array());
if ($__section_pagination_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration'] <= $__section_pagination_0_total; $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']++){
?>
										<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['currentPage']->value) {?><b><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration'] : null);?>
"><?php }?>
										<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration'] : null);?>

										<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['currentPage']->value) {?></b><?php } else { ?></a><?php }?>&nbsp;
									<?php
}
}
?>
									<?php if ($_smarty_tpl->tpl_vars['currentPage']->value < $_smarty_tpl->tpl_vars['nbPages']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php?page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'action_suivant');?>
 &gt;&gt;</a><?php }?>
								</td>
							</tr>
						<?php }?>
					</table>
				</div>
			</div>
		</div>

	<?php } else { ?>
	
		<div class="row">
			<div class="col-md-12">
				<div class="soplanning-box mt-2">
					<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'info_noRecord');?>

				</div>
			</div>
		</div>

	<?php }?>
</div>

<?php echo '<script'; ?>
>
	
	var yscroll = getCookie('yposProjets');
	window.onscroll = function() {document.cookie='yposProjets=' + window.pageYOffset;};
	addEvent(window, 'load', chargerYScrollPos);
	
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
