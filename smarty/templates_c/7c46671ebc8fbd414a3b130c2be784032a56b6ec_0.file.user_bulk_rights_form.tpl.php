<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:30:02
  from '/home/dapps/public_html/XENIEL/planner/templates/user_bulk_rights_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdeada896e07_18272144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c46671ebc8fbd414a3b130c2be784032a56b6ec' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/user_bulk_rights_form.tpl',
      1 => 1551064720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdeada896e07_18272144 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'usersBulkRights_help');?>

<br><br>

<form class="form-horizontal" method="post" action="" onsubmit="return false;" name="usersBulkRightsForm" autocomplete="off">
<div class="container-fluid">
		<div class="row">
			<label class="col-form-label col-md-3"><b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'usersBulkRights_users');?>
</b> :</label>
			<div>
				<select name="bulk_user_id" multiple="multiple" id="bulk_user_id" class="d-none multiselect">
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
"><?php echo xss_protect($_smarty_tpl->tpl_vars['userCourant']->value['nom']);?>
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
			</div>

	</div>
	<hr width="90%">
	<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'usersBulkRights_rights');?>
</b> :
	<br>
	<div class="form-group col-md-12">
			<div class="row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_utilisateurs');?>
 :</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="users_manage" id="droit1" value="" checked="checked">
					<label class="form-check-label" for="droit1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucundroitUser');?>
</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="users_manage" id="users_manage_all" value="users_manage_all">
					<label class="form-check-label" for="users_manage_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_gererTousUsers');?>
</label>
				</div>
			</div>
			<div class="row">
				<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_projets');?>
 :</label>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="projects_manage" id="droit2" value=""checked="checked">
					<label class="form-check-label" for="droit2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunDroitProjets');?>
</label>
				</div>	
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="projects_manage" id="projects_manage_all" value="projects_manage_all">
					<label class="form-check-label" for="projects_manage_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_gererTousProjets');?>
</label>
				</div>						
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="projects_manage" id="projects_manage_own" value="projects_manage_own">
					<label class="form-check-label" for="projects_manage_own"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_uniquementProjProprio');?>
</label>
				</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_groupesProjets');?>
 :</label>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="projectgroups_manage" id="droit3" value="" checked="checked">
							<label class="form-check-label" for="droit3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_groupesProjetsAucun');?>
</label>
						</div>	
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="projectgroups_manage" id="projectgroups_manage_all" value="projectgroups_manage_all">
							<label class="form-check-label" for="projectgroups_manage_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_gererTousGroupes');?>
</label>
						</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_modifPlanning');?>
 :</label>
					<div class="col-form-label">					
					<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_modif" id="droit3" value="tasks_readonly" checked="checked">
							<label class="form-check-label" for="tasks_readonly"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_planningLectureSeule');?>
</label>
						</div>						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_modif" id="tasks_modify_all" value="tasks_modify_all">
							<label class="form-check-label" for="tasks_modify_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_planningTousProjets');?>
</label>
						</div><br />					
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_modif" id="tasks_modify_own_project" value="tasks_modify_own_project">
							<label class="form-check-label" for="tasks_modify_own_project"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_planningProjetsProprio');?>
</label>
						</div>						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_modif" id="tasks_modify_own_task" value="tasks_modify_own_task">
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
							<input class="form-check-input" type="radio" name="planning_view" id="tasks_view_all_projects" value="tasks_view_all_projects" checked="checked">
							<label class="form-check-label" for="tasks_view_all_projects"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_vueTousProjets');?>
</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view" id="tasks_view_team_projects" value="tasks_view_team_projects">
							<label class="form-check-label" for="tasks_view_team_projects"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_vueProjetsEquipe');?>
</label>
						</div><br />
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view" id="tasks_view_own_projects" value="tasks_view_own_projects">
							<label class="form-check-label" for="tasks_view_own_projects"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_vueProjetsAssignes');?>
</label>
						</div>						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view" id="tasks_view_only_own" value="tasks_view_only_own">
							<label class="form-check-label" for="tasks_view_only_own"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_tasks_view_only_own');?>
</label>
						</div>
					</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_users_visibles');?>
 :</label>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view_users" id="tasks_view_all_users" value="tasks_view_all_users" onChange="if(this.checked){document.getElementById('divSpecificUsers').style.display='none';}" checked="checked">
							<label class="form-check-label" for="tasks_view_all_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_tasks_view_all_users');?>
</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="planning_view_users" id="tasks_view_specific_users" value="tasks_view_specific_users" onChange="if(this.checked){document.getElementById('divSpecificUsers').style.display='inline-block';}">
							<label class="form-check-label" for="tasks_view_specific_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_tasks_view_specific_users');?>
</label>
						</div>
						<div id="divSpecificUsers" style="display:none" class="col-form-label">
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
						<input class="form-check-input" type="radio" name="lieux" id="droit6" value="" checked="checked">
						<label class="form-check-label" for="droit6"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunLieux');?>
</label>
					</div>	
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="lieux" id="lieux_all" value="lieux_all">
						<label class="form-check-label" for="lieux_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_lieuxAcces');?>
</label>
					</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_ressources');?>
 :</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="ressources" id="droit7" value=""  checked="checked">
						<label class="form-check-label" for="droit7"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunRessources');?>
</label>
					</div>	
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="ressources" id="ressources_all" value="ressources_all">
						<label class="form-check-label" for="ressources_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_ressourcesAcces');?>
</label>
					</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_audit');?>
 :</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="audit" id="audit_none" value=""checked="checked">
						<label class="form-check-label" for="audit_none"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunAudit');?>
</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="audit" id="audit_restore_own" value="audit_restore_own">
						<label class="form-check-label" for="audit_restore_own"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_auditRestoreProprietaire');?>
</label>
					</div>					
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="audit" id="audit_restore" value="audit_restore_own">
						<label class="form-check-label" for="audit_restore"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_auditRestore');?>
</label>
					</div>
			</div>					
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_parametres');?>
 :</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="parameters" id="droit5" value="">
						<label class="form-check-label" for="droit5"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_aucunParametres');?>
</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="parameters" id="parameters_modify" value="parameters_all">
						<label class="form-check-label" for="parameters_modify"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_parametresAcces');?>
</label>
					</div>
			</div>
			<div class="row">
					<label class="col-form-label col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_stats');?>
 :</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="stats_users" id="stats_users" value="stats_users">
						<label class="form-check-label" for="stats_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_stats_users');?>
</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="stats_projects" id="stats_projects" value="stats_projects">
						<label class="form-check-label" for="stats_projects"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_stats_projects');?>
</label>
					</div>
			</div>
	</div>
	<div class="form-group col-md-12 text-center">

				<input type="button" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
" onClick="if(confirm('<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'confirm'));?>
'))bulk_users_ids=getSelectValue('bulk_user_id'); specific_users_ids=getSelectValue('specific_user_id'); xajax_usersBulkRightsSubmit(bulk_users_ids, new Array(getRadioValue('users_manage'), getRadioValue('projects_manage'), getRadioValue('projectgroups_manage'), getRadioValue('planning_modif'), getRadioValue('planning_view'), getRadioValue('planning_view_users'), getRadioValue('lieux'), getRadioValue('ressources'), getRadioValue('parameters'), ($('#stats_users').is(':checked') ? $('#stats_users').val() : ''), ($('#stats_projects').is(':checked') ? $('#stats_projects').val() : '')), specific_users_ids);" />
	</div>

<?php echo '<script'; ?>
>
	$("#bulk_user_id").multiselect({
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
	$("#bulk_user_id").show();
	$("#search-user").css("overflow", "visible");
	$("#search-user").css("width", "380");
<?php echo '</script'; ?>
>
<?php }
}
