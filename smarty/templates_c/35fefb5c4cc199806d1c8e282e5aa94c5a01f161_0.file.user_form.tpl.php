<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:30:18
  from '/home/dapps/public_html/XENIEL/planner/templates/user_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdeaeabfe846_34926942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35fefb5c4cc199806d1c8e282e5aa94c5a01f161' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/user_form.tpl',
      1 => 1553608702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdeaeabfe846_34926942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dapps/public_html/XENIEL/planner/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<form class="form-horizontal" method="post" action="" onsubmit="return false;" name="formUser" autocomplete="off">
<input type="hidden" id="user_id_origine" value="<?php echo $_smarty_tpl->tpl_vars['user_form']->value['user_id'];?>
">
<div class="container-fluid">
	<div class="form-group row col-md-12">
			<label class="col-form-label col-md-2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_identifiant');?>
 :</label>
			<div class="col-md-4">
				<?php if ($_smarty_tpl->tpl_vars['user_form']->value['saved'] == 1) {?>
					<p class="col-form-label"><?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['user_id']);?>
</p>
					<input id="user_id" type="hidden" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['user_id']);?>
" />
				<?php } else { ?>
					<input class="form-control" id="user_id" type="text" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['user_id']);?>
" maxlength="20" />
				<?php }?>
			</div>
			<label class="col-form-label col-md-2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_groupe');?>
 :</label>
			<div class="col-md-4">
				<select id="user_groupe_id" class="form-control<?php if ($_SESSION['isMobileOrTablet'] == 0) {?> select2<?php }?>">
					<option value="">- - - - - - - - - - -</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupes']->value, 'groupe');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['groupe']->value['user_groupe_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['user_form']->value['user_groupe_id'] == $_smarty_tpl->tpl_vars['groupe']->value['user_groupe_id']) {?>selected="selected"<?php }?>><?php echo xss_protect($_smarty_tpl->tpl_vars['groupe']->value['nom']);?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
	</div>
	<div class="form-group row col-md-12">
				<label class="col-form-label col-md-2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_nom');?>
 :</label>
				<div class="col-md-4">
					<input id="nom" class="form-control" type="text" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['nom']);?>
" maxlength="100" />
				</div>
				<label class="col-form-label col-md-2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_email');?>
 :</label>
				<div class="col-md-4">
					<input id="email_user" class="form-control" type="text" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['email']);?>
" maxlength="255" />
				</div>
	</div>
	<div class="form-group row col-md-12">
				<label class="col-form-label col-md-2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_login');?>
 :</label>
				<div class="col-md-4">
					<input id="tmp_lo" class="form-control" type="text" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['login']);?>
" maxlength="30" autocomplete="off" />
				</div>
				<label class="col-form-label col-md-2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_password');?>
 :</label>
				<div class="col-md-4">
					<input id="tmp_pa" class="form-control" type="password" value="" maxlength="20" autocomplete="off" />
				</div>
	</div>
	<div class="form-group row col-md-12">
	 <ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#droits"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_droits_court');?>
</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#perso"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_perso_notif');?>
</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#infos"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_infos_perso');?>
</a>
		</li>
	</ul> 

	</div>
	<div class="form-group">
	<div class="form-group">
	<div class="tab-content">	
		<div class="tab-pane container active" id="droits">
			<div class="row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_utilisateurs');?>
 :</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="users_manage" id="droit1" value="" <?php if (!in_array("users_manage_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="droit1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucundroitUser');?>
</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="users_manage" id="users_manage_all" value="users_manage_all" <?php if (in_array("users_manage_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="users_manage_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_gererTousUsers');?>
</label>
				</div>
			</div>
			<div class="row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_projets');?>
 :</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="projects_manage" id="droit2" value="" <?php if (!in_array("projects_manage_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits']) && !in_array("projects_manage_own",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="droit2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunDroitProjets');?>
</label>
				</div>	
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="projects_manage" id="projects_manage_all" value="projects_manage_all" <?php if (in_array("projects_manage_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="projects_manage_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_gererTousProjets');?>
</label>
				</div>						
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="projects_manage" id="projects_manage_own" value="projects_manage_own" <?php if (in_array("projects_manage_own",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="projects_manage_own"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_uniquementProjProprio');?>
</label>
				</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_groupesProjets');?>
 :</label>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="projectgroups_manage" id="droit3" value="" <?php if (!in_array("projectgroups_manage_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="droit3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_groupesProjetsAucun');?>
</label>
						</div>	
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="projectgroups_manage" id="projectgroups_manage_all" value="projectgroups_manage_all" <?php if (in_array("projectgroups_manage_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="projectgroups_manage_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_gererTousGroupes');?>
</label>
						</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_modifPlanning');?>
 :</label>
					<div class="col-form-label">					
					<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_modif" id="droit3" value="tasks_readonly" <?php if (in_array("tasks_readonly",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits']) || (!in_array("tasks_modify_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits']) && !in_array("tasks_modify_own_project",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits']) && !in_array("tasks_modify_own_task",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits']))) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="tasks_readonly"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_planningLectureSeule');?>
</label>
						</div>						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_modif" id="tasks_modify_all" value="tasks_modify_all" <?php if (in_array("tasks_modify_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="tasks_modify_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_planningTousProjets');?>
</label>
						</div><br />					
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_modif" id="tasks_modify_own_project" value="tasks_modify_own_project" <?php if (in_array("tasks_modify_own_project",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="tasks_modify_own_project"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_planningProjetsProprio');?>
</label>
						</div>						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_modif" id="tasks_modify_own_task" value="tasks_modify_own_task" <?php if (in_array("tasks_modify_own_task",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="tasks_modify_own_task"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_planningTachesAssignees');?>
</label>
						</div>
					</div>	
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_projets_visibles');?>
 :</label>
					<div class="col-form-label">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view" id="tasks_view_all_projects" value="tasks_view_all_projects" <?php if (in_array("tasks_view_all_projects",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits']) || !in_array("tasks_view_own_projects",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="tasks_view_all_projects"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_vueTousProjets');?>
</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view" id="tasks_view_team_projects" value="tasks_view_team_projects" <?php if (in_array("tasks_view_team_projects",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="tasks_view_team_projects"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_vueProjetsEquipe');?>
</label>
						</div><br />
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view" id="tasks_view_own_projects" value="tasks_view_own_projects" <?php if (in_array("tasks_view_own_projects",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="tasks_view_own_projects"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_vueProjetsAssignes');?>
</label>
						</div>						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view" id="tasks_view_only_own" value="tasks_view_only_own" <?php if (in_array("tasks_view_only_own",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
							<label class="form-check-label" for="tasks_view_only_own"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_tasks_view_only_own');?>
</label>
						</div>
					</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_users_visibles');?>
 :</label>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view_users" id="tasks_view_all_users" value="tasks_view_all_users" <?php if (in_array("tasks_view_all_users",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits']) || !in_array("tasks_view_all_users",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?> onChange="if(this.checked){document.getElementById('divSpecificUsers').style.display='none';}">
							<label class="form-check-label" for="tasks_view_all_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_tasks_view_all_users');?>
</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view_users" id="tasks_view_specific_users" value="tasks_view_specific_users" <?php if (in_array("tasks_view_specific_users",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?> onChange="if(this.checked){document.getElementById('divSpecificUsers').style.display='inline-block';}">
							<label class="form-check-label" for="tasks_view_specific_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_tasks_view_specific_users');?>
</label>
						</div>
						<div id="divSpecificUsers" style="display:<?php if (in_array("tasks_view_specific_users",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>inline-block<?php } else { ?>none<?php }?>" class="col-form-label">
							<select name="specific_user_id" multiple="multiple" id="specific_user_id" class="d-none multiselect">
								<?php if (count($_smarty_tpl->tpl_vars['listeUsers']->value) == 0) {?>
									<option>&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserAucunProjet');?>
</option>
								<?php } else { ?>
									<optgroup id="g0" value="1" label="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cocheUserSansGroupe');?>
">
									<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeUsers']->value, 'userCourant', false, NULL, 'loopUsers', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userCourant']->value) {
?>
										<?php if ($_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id'] != $_smarty_tpl->tpl_vars['groupeTemp']->value) {?>
											</optgroup><optgroup id="g<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id'];?>
" value="1" label="<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['groupe_nom'];?>
">
										<?php }?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['user_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['userCourant']->value['user_id'],$_smarty_tpl->tpl_vars['listUsersRights']->value)) {?>selected="selected"<?php }?>><?php echo xss_protect($_smarty_tpl->tpl_vars['userCourant']->value['nom']);?>
 (<?php echo xss_protect($_smarty_tpl->tpl_vars['userCourant']->value['user_id']);?>
)</option> 								
									<?php $_smarty_tpl->_assignInScope('groupeTemp', $_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id']);?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
								</optgroup>
							</select>
							
							<?php echo '<script'; ?>
>
								$("#specific_user_id").multiselect({
									selectAll:false,
									validateCloseOnly:true,
									noUpdatePlaceholderText:true,
									nameSuffix: 'user',
									desactivateUrl: 'process/planning.php?desactiverFiltreUser=1',
									placeholder: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formChoixUser');?>
',
									texts: {
									   selectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserCocherTous');?>
',
									   unselectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserDecocherTous');?>
',
									   disableFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserDesactiver');?>
',
									   validateFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
',
									   search : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search');?>
'
									},
								});
								$("#specific_user_id").show();
								$("#search-user").css("overflow", "visible");
								$("#search-user").css("width", "380");
							<?php echo '</script'; ?>
>
							
						</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_lieux');?>
 :</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="lieux" id="droit6" value="" <?php if (!in_array("lieux_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="droit6"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunLieux');?>
</label>
					</div>	
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="lieux" id="lieux_all" value="lieux_all" <?php if (in_array("lieux_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="lieux_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_lieuxAcces');?>
</label>
					</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_ressources');?>
 :</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="ressources" id="droit7" value="" <?php if (!in_array("ressources_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="droit7"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunRessources');?>
</label>
					</div>	
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="ressources" id="ressources_all" value="ressources_all" <?php if (in_array("ressources_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="ressources_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_ressourcesAcces');?>
</label>
					</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_audit');?>
 :</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="audit" id="audit_none" value="" <?php if ((!in_array("audit_visualisation",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) && (!in_array("audit_restore",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits']))) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="audit_none"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunAudit');?>
</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="audit" id="audit_restore_own" value="audit_restore_own" <?php if (in_array("audit_restore_own",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="audit_restore_own"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_auditRestoreProprietaire');?>
</label>
					</div>					
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="audit" id="audit_restore" value="audit_restore" <?php if (in_array("audit_restore",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="audit_restore"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_auditRestore');?>
</label>
					</div>
			</div>					
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_parametres');?>
 :</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="parameters" id="droit5" value="" <?php if (!in_array("parameters_modify",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="droit5"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunParametres');?>
</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="parameters" id="parameters_modify" value="parameters_all" <?php if (in_array("parameters_all",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="parameters_modify"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_parametresAcces');?>
</label>
					</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_stats');?>
 :</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="stats_users" id="stats_users" value="stats_users" <?php if (in_array("stats_users",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="stats_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_stats_users');?>
</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="stats_projects" id="stats_projects" value="stats_projects" <?php if (in_array("stats_projects",$_smarty_tpl->tpl_vars['user_form']->value['tabDroits'])) {?>checked="checked"<?php }?>>
						<label class="form-check-label" for="stats_projects"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_stats_projects');?>
</label>
					</div>
			</div>	
		</div>
		<div class="tab-pane container fade" id="perso">
			<div class="form-group row">
			<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_login_actif');?>
 :</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="login_actif" id="login_actifOui" value="oui" <?php if ($_smarty_tpl->tpl_vars['user_form']->value['login_actif'] == "oui") {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="login_actifOui"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="login_actif" id="login_actifNon" value="non" <?php if ($_smarty_tpl->tpl_vars['user_form']->value['login_actif'] == "non") {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="login_actifNon"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</label>
				</div>
			
				<label class="col-form-label offset-md-2 col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_visiblePlanning');?>
 :</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="visible_planning" id="visible_planningOui" value="oui" <?php if (($_smarty_tpl->tpl_vars['user_form']->value['saved'] == 0) || ($_smarty_tpl->tpl_vars['user_form']->value['visible_planning'] == "oui")) {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="visible_planningOui"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="visible_planning" id="visible_planningNon" value="non" <?php if (($_smarty_tpl->tpl_vars['user_form']->value['saved'] == 0) || ($_smarty_tpl->tpl_vars['user_form']->value['visible_planning'] == "non")) {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="visible_planningNon"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</label>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_notifications');?>
 :</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="notifications" id="notificationsOui" value="oui" <?php if ($_smarty_tpl->tpl_vars['user_form']->value['notifications'] == "oui") {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="notificationsOui"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="notifications" id="notificationsNon" value="non" <?php if ($_smarty_tpl->tpl_vars['user_form']->value['notifications'] == "non") {?>checked="checked"<?php }?>>
					<label class="form-check-label" for="notificationsNon"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</label>
				</div>
				<label class="col-form-label offset-md-2 col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_couleur');?>
 :</label>
				<div>
					<?php if ($_SESSION['couleurExUser'] != '') {?>
						<?php $_smarty_tpl->_assignInScope('couleurExUser', $_SESSION['couleurExUser']);?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('couleurExUser', "ffffff");?>
					<?php }?>
					<?php if (@constant('CONFIG_PROJECT_COLORS_POSSIBLE') != '') {?>
						<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
							<input name="couleur_user" id="couleur_user" maxlength="6" type="color" list="colors" value="#<?php if ($_smarty_tpl->tpl_vars['projet']->value['couleur'] == '') {
echo $_smarty_tpl->tpl_vars['couleurExProjet']->value;
} else {
echo $_smarty_tpl->tpl_vars['projet']->value['couleur'];
}?>" />
							<datalist id="colors">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",@constant('CONFIG_PROJECT_COLORS_POSSIBLE')), 'couleurTmp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['couleurTmp']->value) {
?>
								<option><?php echo xss_protect($_smarty_tpl->tpl_vars['couleurTmp']->value);?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</datalist>
						<?php } else { ?>
							<select name="couleur2" id="couleur2" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['user_form']->value['couleur'];?>
;color:<?php echo buttonFontColor(("#").($_smarty_tpl->tpl_vars['user_form']->value['couleur']));?>
" class="form-control" >
							<?php if ($_smarty_tpl->tpl_vars['user_form']->value['couleur'] == '') {?><option value=""><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_couleurchoix');?>
</option><?php }?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",@constant('CONFIG_PROJECT_COLORS_POSSIBLE')), 'couleurTmp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['couleurTmp']->value) {
?>
								<option value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['couleurTmp']->value,'#','');?>
" style="background-color:<?php echo $_smarty_tpl->tpl_vars['couleurTmp']->value;?>
;color:<?php echo buttonFontColor($_smarty_tpl->tpl_vars['couleurTmp']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['couleurTmp']->value == ("#").($_smarty_tpl->tpl_vars['user_form']->value['couleur'])) {?>selected="selected"<?php }?>><?php echo smarty_modifier_replace(xss_protect($_smarty_tpl->tpl_vars['couleurTmp']->value),'#','');?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<?php }?>
					<?php } else { ?>
						<input id="couleur_user" name="couleur_user" maxlength="6" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="color"<?php } else { ?>type="text"<?php }?> value="#<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['couleur']);?>
"/>
					<?php }?>
				</div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['user_form']->value['saved'] == 0) {?>
				<div class="form-group">
					<div class="col-md-6">
						<label class="checkbox-inline">
							<input type="checkbox" id="envoiMailPwd" name="envoiMailPwd" value="true" /><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_mailPwd');?>

						</label>
					</div>
				</div>
			<?php } else { ?>
				<input type="hidden" id="envoiMailPwd" name="envoiMailPwd" value="false" />
			<?php }?>
		</div>	
        <div class="tab-pane container fade" id="infos">
			<div class="form-group row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_adress');?>
 :</label>
				<div class="col-md-6">
					<input id="user_adress" class="form-control" type="text" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['adresse']);?>
" maxlength="100" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_phone');?>
 :</label>
				<div class="col-md-2">
					<input id="user_phone" class="form-control" type="text" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['telephone']);?>
" maxlength="20" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_mobile');?>
 :</label>
				<div class="col-md-2">
					<input id="user_mobile" class="form-control" type="text" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['mobile']);?>
" maxlength="20" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_metier');?>
 :</label>
				<div class="col-md-6">
					<input id="user_metier" class="form-control" type="text" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['metier']);?>
" maxlength="100" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_comment');?>
 :</label>
				<div class="col-md-6">
					<textarea id="user_comment" class="form-control"><?php echo xss_protect($_smarty_tpl->tpl_vars['user_form']->value['commentaire']);?>
</textarea>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="form-group col-md-12 text-center">
				<input type="button" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer');?>
" onClick="specific_users_ids=getSelectValue('specific_user_id');xajax_submitFormUser($('#user_id').val(), $('#user_id_origine').val(), $('#user_groupe_id').val(), $('#nom').val(), $('#email_user').val(), $('#tmp_lo').val(), $('#tmp_pa').val(), $('#visible_planningOui').is(':checked'), <?php if (@constant('CONFIG_PROJECT_COLORS_POSSIBLE') != '') {?>$('#couleur2 option:selected').val()<?php } else { ?>$('#couleur_user').val()<?php }?>, $('#notificationsOui').is(':checked'), $('#envoiMailPwd').is(':checked'), new Array(getRadioValue('users_manage'), getRadioValue('projects_manage'), getRadioValue('projectgroups_manage'), getRadioValue('planning_modif'), getRadioValue('planning_view'), getRadioValue('planning_view_users'), getRadioValue('lieux'), getRadioValue('ressources'), getRadioValue('audit'), getRadioValue('parameters'), ($('#stats_users').is(':checked') ? $('#stats_users').val() : ''), ($('#stats_projects').is(':checked') ? $('#stats_projects').val() : '')), $('#user_adress').val(), $('#user_phone').val(),$('#user_mobile').val(), $('#user_metier').val(), $('#user_comment').val(), $('#login_actifOui').is(':checked'), specific_users_ids);" />
		</div>
	</div>
</div><?php }
}
