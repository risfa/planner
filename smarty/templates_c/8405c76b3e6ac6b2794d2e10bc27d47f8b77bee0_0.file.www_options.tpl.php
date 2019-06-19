<?php
/* Smarty version 3.1.32, created on 2019-06-10 07:27:51
  from '/home/dapps/public_html/XENIEL/planner/templates/www_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdea57de41c3_15334019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8405c76b3e6ac6b2794d2e10bc27d47f8b77bee0' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_options.tpl',
      1 => 1553656204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:www_header.tpl' => 1,
    'file:www_footer.tpl' => 1,
  ),
),false)) {
function content_5cfdea57de41c3_15334019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:www_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
	<div class="form-group row col-md-12 align-items-center">
		<div class="col-md-12">
			<div class="soplanning-box">
				<div class="btn-group">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/feries.php" class="btn btn-default" ><i class="fa fa-plane fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuFeries');?>
</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/status.php" class="btn btn-default" ><i class="fa fa-tags fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuStatus');?>
</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/lieux.php" class="btn btn-default" ><i class="fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuLieux');?>
</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/ressources.php" class="btn btn-default" ><i class="fa fa-plug fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuRessources');?>
</a>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group row col-md-12 mt-2" id="optionsRow">
		<div class="col-3">
			<div  class="nav flex-column nav-pills soplanning-box" role="tablist" aria-orientation="vertical" id="myTab">
				<a class="nav-link active" id="param-global-tab" data-toggle="pill" href="#param-global" role="tab" aria-controls="param-global" aria-selected="true"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_configGenerale');?>
</a>
				<a class="nav-link" id="param-modules-tab" data-toggle="pill" href="#param-modules" role="tab" aria-controls="param-modules" aria-selected="false"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_modules');?>
</a>
				<a class="nav-link" id="param-planning-tab" data-toggle="pill" href="#param-planning" role="tab" aria-controls="param-planning" aria-selected="false"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_planning');?>
</a>
				<a class="nav-link" id="param-taches-tab" data-toggle="pill" href="#param-taches" role="tab" aria-controls="param-taches" aria-selected="false"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_taches');?>
</a>
				<a class="nav-link" id="param-divers-tab" data-toggle="pill" href="#param-divers" role="tab" aria-controls="param-divers" aria-selected="false"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_divers');?>
</a>
				<a class="nav-link" id="param-smtp-tab" data-toggle="pill" href="#param-smtp" role="tab" aria-controls="param-smtp" aria-selected="false"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_smtp');?>
</a>
				<a class="nav-link" id="param-testmail-tab" data-toggle="pill" href="#param-testmail" role="tab" aria-controls="param-testmail" aria-selected="false"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_envoyerMailTest');?>
</a>
				<a class="nav-link" id="param-audit-tab" data-toggle="pill" href="#param-audit" role="tab" aria-controls="param-audit" aria-selected="false"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_audit');?>
</a>
			</div >
		</div>
		<div class="col-9">
			<div class="soplanning-box">
				<div class="tab-content">
					<div class="tab-pane fade show active" id="param-global" role="tabpanel" aria-labelledby="param-global-tab">
						<form action="process/options.php" method="POST" class="form-horizontal" enctype="multipart/form-data" id="setupForm">
							<fieldset>
								<legend>
									<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_configGenerale');?>

								</legend>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label" for="SOPLANNING_TITLE"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_titre');?>
 :</label>
									<div class="col-md-4">
										<input type="text" class="form-control" name="SOPLANNING_TITLE" id="SOPLANNING_TITLE" value="<?php echo xss_protect(@constant('CONFIG_SOPLANNING_TITLE'));?>
">
									</div>
									<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_titre');?>
" class="align-self-center cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label" for="SOPLANNING_URL"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_url');?>
 :</label>
									<div class="col-6">
										<input type="text" class="form-control" name="SOPLANNING_URL" id="SOPLANNING_URL" value="<?php echo @constant('CONFIG_SOPLANNING_URL');?>
">
									</div>
									<div title="<?php echo (($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_url')).('<br>')).($_smarty_tpl->tpl_vars['urlSuggeree']->value);?>
" class="align-self-center cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label" for="SOPLANNING_LOGO"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_logo');?>
 :</label>
									<div class="col-md-5">
										<input type="hidden" name="old_logo" value="<?php echo @constant('CONFIG_SOPLANNING_LOGO');?>
"/>
										<input type="file" accept=".jpg, .png, .jpeg, .gif" name="SOPLANNING_LOGO" id="SOPLANNING_LOGO" class="col-form-label" />
									</div>
									<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_logo');?>
" class="align-self-center cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<?php if (@constant('CONFIG_SOPLANNING_LOGO') != '') {?>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label" for="SOPLANNING_LOGO"></label>
									<div class="col-md-8">
										<img src="./upload/logo/<?php echo @constant('CONFIG_SOPLANNING_LOGO');?>
" alt='logo' />
										<label class="checkbox-inline">
										<input type="checkbox" name="SOPLANNING_LOGO_SUPPRESSION" id="SOPLANNING_LOGO_SUPPRESSION">
										&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_logo_supprimer');?>

										</label>
									</div>
								</div>
								<?php }?>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label" for="SOPLANNING_THEME"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_theme');?>
 :</label>
									<div class="col-md-4">
										<input type="hidden" name="old_theme" value="<?php echo @constant('CONFIG_SOPLANNING_THEME');?>
"/>
										<select name='SOPLANNING_THEME' id='SOPLANNING_THEME' class="form-control">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
											<option value='<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
.css' <?php if (($_smarty_tpl->tpl_vars['t']->value).('.css') == @constant('CONFIG_SOPLANNING_THEME')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</select>
									</div>
									<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_theme');?>
" class="align-self-center cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_acces');?>
 :</label>
									<div class="ml-3 col-md-4 form-check col-form-label">
										<input class="form-check-input" type="radio" name="SOPLANNING_OPTION_ACCES" id="SOPLANNING_OPTION_ACCES_PRIVE" onclick="$('#optionscle').hide();" <?php if (@constant('CONFIG_SOPLANNING_OPTION_ACCES') == 0) {?>checked="checked"<?php }?> value="0">
										<label class="form-check-label" for="SOPLANNING_OPTION_ACCES_PRIVE">
										<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_accesprive');?>

										</label>
									</div>
									<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_accesprive');?>
" class="align-self-center cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
								<label class="col-md-4 col-form-label"></label>
								<div class="ml-3 col-md-5 form-check col-form-label">
										<input class="form-check-input" type="radio" name="SOPLANNING_OPTION_ACCES" id="SOPLANNING_OPTION_ACCES_PUBLIC" onclick="$('#optionscle').hide();" <?php if (@constant('CONFIG_SOPLANNING_OPTION_ACCES') == 1) {?>checked="checked"<?php }?> value="1">
										<label class="form-check-label" for="SOPLANNING_OPTION_ACCES_PUBLIC">
										<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_accespublic');?>

										</label>
									</div>
									<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_accespublic');?>
" class="align-self-center cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
								<label class="col-md-4 col-form-label"></label>
								<div class="ml-3 col-md-7 form-check col-form-label">
										<input class="form-check-input" type="radio" name="SOPLANNING_OPTION_ACCES" id="SOPLANNING_OPTION_ACCES_PUBLICCLE" onclick="$('#optionscle').show();" <?php if (@constant('CONFIG_SOPLANNING_OPTION_ACCES') == 2) {?>checked="checked"<?php }?> value="2">
										<label class="form-check-label" for="SOPLANNING_OPTION_ACCES_PUBLICCLE">
										<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_accespubliccle');?>

										</label>
									</div>
									<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_accespubliccle');?>
" class="align-self-center cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div id="optionscle" style="display:<?php if (@constant('CONFIG_SOPLANNING_OPTION_ACCES') == 2) {?>block<?php } else { ?>none<?php }?>;">
											<div class="form-group row col-md-12 align-items-center">
												<label class="col-md-4 col-form-label"></label>
												<label class="col-3 col-form-label" for="CONFIG_SECURE_KEY"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_clesecurite');?>
 :</label>
												<div class="col-3">
													<input type="text" class="form-control" name="CONFIG_SECURE_KEY" id="CONFIG_SECURE_KEY" value="<?php echo @constant('CONFIG_SECURE_KEY');?>
">
												</div>
												<div class="col-1">												
												<a onclick="javascript:token();"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/options.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_genererclesecurite');?>
" class="tooltipster" alt="" /></a>
												</div>
											</div>
											<div class="form-group row col-md-12 align-items-center">
												<label class="col-md-4 col-form-label"></label>
												<label class="col-3 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_urlpubliccle');?>
 :</label>
												<div class="col-md-5">
												<?php if (substr(@constant('CONFIG_SOPLANNING_URL'),-1) == '/') {
$_smarty_tpl->_assignInScope('sep', '');
} else {
$_smarty_tpl->_assignInScope('sep', '/');
}?>
												<a href="<?php if (@constant('CONFIG_SOPLANNING_URL') == '') {
echo $_smarty_tpl->tpl_vars['urlSuggeree']->value;?>
planning.php?public=1&cle=<?php echo @constant('CONFIG_SECURE_KEY');?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['urlSuggeree']->value;
} else {
echo @constant('CONFIG_SOPLANNING_URL');
echo $_smarty_tpl->tpl_vars['sep']->value;?>
planning.php?public=1&cle=<?php echo @constant('CONFIG_SECURE_KEY');?>
" target="_blank"><?php echo @constant('CONFIG_SOPLANNING_URL');
echo $_smarty_tpl->tpl_vars['sep']->value;
}?>planning.php?public=1&cle=<?php echo @constant('CONFIG_SECURE_KEY');?>
</a>
												</div>
											</div>
										</div>

								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_visiteur');?>
 :</label>
									<div class="ml-3 col-6 form-check col-form-label">
										<input type="hidden" id="SOPLANNING_OPTION_VISITEUR" name="SOPLANNING_OPTION_VISITEUR" value="<?php echo @constant('SOPLANNING_OPTION_VISITEUR');?>
">
										<input class="form-check-input" type="checkbox" name="SOPLANNING_OPTION_VISITEUR_checkbox" id="SOPLANNING_OPTION_VISITEUR_checkbox" <?php if (@constant('CONFIG_SOPLANNING_OPTION_VISITEUR') == 1) {?>checked="checked"<?php }?> onChange="document.getElementById('SOPLANNING_OPTION_VISITEUR').value=(document.getElementById('SOPLANNING_OPTION_VISITEUR_checkbox').checked ? '1' : '0');">
										<label class="form-check-label" for="SOPLANNING_OPTION_VISITEUR_checkbox"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_visiteur_modification');?>
</label>
									</div>
									<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_visiteur');?>
" class="align-self-center cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label" for="TIMEZONE"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_fuseau');?>
 :</label>
									<div class="col-7">
										<input type="hidden" name="old_timezone" value="<?php echo @constant('CONFIG_TIMEZONE');?>
"/>
										<select name='TIMEZONE' id='TIMEZONE' class="form-control">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timezones']->value, 'libelle', false, 'valeur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['valeur']->value => $_smarty_tpl->tpl_vars['libelle']->value) {
?>
											<option value='<?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['valeur']->value == @constant('CONFIG_TIMEZONE')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['libelle']->value;?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</select>
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<div class="col-md-4"></div>
									<div class="col-md-8">
										<br />
										<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer');?>
"/>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="tab-pane" id="param-modules">
						<form action="process/options.php" method="POST">
							<fieldset>
								<legend>
									<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'modules');?>

								</legend>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_lieux');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_LIEUX" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_LIEUX') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_LIEUX') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_lieux');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_ressources');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_RESSOURCES" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_RESSOURCES') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_RESSOURCES') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_ressources');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								
								<div class="form-group row col-md-12 align-items-center">
									<div class="col-md-4"></div>
									<div class="col-6">
										<br />
										<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer');?>
"/>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="tab-pane" id="param-planning">
						<form action="process/options.php" method="POST">
							<fieldset>
								<legend>
									<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_planning');?>

								</legend>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php $_smarty_tpl->_assignInScope('jours', explode(",",@constant('CONFIG_DAYS_INCLUDED')));?> <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_joursInclus');?>
 :</label>
									<div class="col-md-8 form-inline">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="DAYS_INCLUDED[]" value="1" id="chklundi" <?php if (in_array('1',$_smarty_tpl->tpl_vars['jours']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="chklundi"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'day_1');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="DAYS_INCLUDED[]" value="2" id="chkmardi" <?php if (in_array('2',$_smarty_tpl->tpl_vars['jours']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="chkmardi"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'day_2');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="DAYS_INCLUDED[]" value="3" id="chkmercredi" <?php if (in_array('3',$_smarty_tpl->tpl_vars['jours']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="chkmercredi"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'day_3');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="DAYS_INCLUDED[]" value="4" id="chkjeudi" <?php if (in_array('4',$_smarty_tpl->tpl_vars['jours']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="chkjeudi"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'day_4');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="DAYS_INCLUDED[]" value="5" id="chkvendredi" <?php if (in_array('5',$_smarty_tpl->tpl_vars['jours']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="chkvendredi"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'day_5');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="DAYS_INCLUDED[]" value="6" id="chksamedi" <?php if (in_array('6',$_smarty_tpl->tpl_vars['jours']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="chksamedi"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'day_6');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="DAYS_INCLUDED[]" value="0" id="chkdimanche" <?php if (in_array('0',$_smarty_tpl->tpl_vars['jours']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="chkdimanche"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'day_0');?>
</label>
										</div>
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php $_smarty_tpl->_assignInScope('heuresAffichees', explode(",",@constant('CONFIG_HOURS_DISPLAYED')));?> <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_heuresIncluses');?>
 :</label>
									<div class="col-md-8 form-inline">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="0" id="hour0" <?php if (in_array('0',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour0">00<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-01<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="1" id="hour1" <?php if (in_array('1',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour1">01<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-02<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>										
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="2" id="hour2" <?php if (in_array('2',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour2">02<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-03<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>										
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="3" id="hour3" <?php if (in_array('3',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour3">03<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-04<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>										
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="4" id="hour4" <?php if (in_array('4',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour4">04<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-05<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>										
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="5" id="hour5" <?php if (in_array('5',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour5">05<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-06<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>										
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="6" id="hour6" <?php if (in_array('6',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour6">06<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-07<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>										
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="7" id="hour7" <?php if (in_array('7',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour7">07<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-08<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>										
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="8" id="hour8" <?php if (in_array('8',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour8">08<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-09<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>										
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="9" id="hour9" <?php if (in_array('9',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour9">09<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-10<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>			
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="10" id="hour10" <?php if (in_array('10',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour10">10<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-11<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>				
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="11" id="hour11" <?php if (in_array('11',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour11">11<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-12<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>								
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="12" id="hour12" <?php if (in_array('12',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour12">12<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-13<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="13" id="hour13" <?php if (in_array('13',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour13">13<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-14<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="14" id="hour14" <?php if (in_array('14',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour14">14<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-15<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="15" id="hour15" <?php if (in_array('15',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour15">15<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-16<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="16" id="hour16" <?php if (in_array('16',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour16">16<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-17<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="17" id="hour17" <?php if (in_array('17',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour17">17<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-18<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="18" id="hour18" <?php if (in_array('18',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour18">18<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-19<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="19" id="hour19" <?php if (in_array('19',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour19">19<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-20<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="20" id="hour20" <?php if (in_array('20',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour20">20<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-21<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="21" id="hour21" <?php if (in_array('21',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour21">21<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-22<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="22" id="hour22" <?php if (in_array('22',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour22">22<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-23<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" name="HOURS_DISPLAYED[]" value="23" id="hour23" <?php if (in_array('23',$_smarty_tpl->tpl_vars['heuresAffichees']->value)) {?>checked="checked"<?php }?>>
											<label class="form-check-label" for="hour23">23<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
-00<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
</label>
										</div>						
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_dureeDefautJour');?>
 :</label>
									<div class="col-md-8 form-inline">
										<input name="DURATION_DAY" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="time" class="form-control"<?php } else { ?>size="2" type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_DURATION_DAY');?>
"/>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_dureeDefaut');?>
" class="cursor-help tooltipster">&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i></div>
										&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_dureeDefautMatin');?>
 :&nbsp;
										<input name="DURATION_AM" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="time" class="form-control"<?php } else { ?>size="2" type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_DURATION_AM');?>
" />
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_dureeDefaut');?>
" class="cursor-help tooltipster">&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i></div>
										&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_dureeDefautApresmidi');?>
 :&nbsp;
										<input name="DURATION_PM" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="time" class="form-control"<?php } else { ?>size="2" type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_DURATION_PM');?>
" />
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_dureeDefaut');?>
" class="cursor-help tooltipster">&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i></div>
									</div>
								</div>
								<input type="hidden" name="PLANNING_DATE_FORMAT" value="1"/>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_nbMoisDefaut');?>
 :</label>
									<div class="col-2">
										<input name="DEFAULT_NB_MONTHS_DISPLAYED" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_DEFAULT_NB_MONTHS_DISPLAYED');?>
" />
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_nbjoursDefaut');?>
 :</label>
									<div class="col-2">
										<input name="DEFAULT_NB_DAYS_DISPLAYED" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_DEFAULT_NB_DAYS_DISPLAYED');?>
" />
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_nbLignes');?>
 :</label>
									<div class="col-2">
										<input name="DEFAULT_NB_ROWS_DISPLAYED" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_DEFAULT_NB_ROWS_DISPLAYED');?>
" />
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_differencier_weekend');?>
 :</label>
									<div class="col-2">
										<select name="PLANNING_DIFFERENCIE_WEEKEND" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_PLANNING_DIFFERENCIE_WEEKEND') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_PLANNING_DIFFERENCIE_WEEKEND') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_differencier_weekend');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_statusAffichage');?>
 :</label>
									<div class="col-md-4">
										<select name="PLANNING_AFFICHAGE_STATUS" class="form-control">
											<option value="aucun" <?php if (@constant('CONFIG_PLANNING_AFFICHAGE_STATUS') == 'aucun') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_statusAffichage_aucun');?>
</option>
											<option value="nom" <?php if (@constant('CONFIG_PLANNING_AFFICHAGE_STATUS') == 'nom') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_statusAffichage_nom');?>
</option>
											<option value="pourcentage" <?php if (@constant('CONFIG_PLANNING_AFFICHAGE_STATUS') == 'pourcentage') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_statusAffichage_pourcentage');?>
</option>
											<option value="pastille" <?php if (@constant('CONFIG_PLANNING_AFFICHAGE_STATUS') == 'pastille') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_statusAffichage_pastille');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_statusAffichage');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_raffraichissement');?>
 :</label>
									<div class="col-2">
										<input name="REFRESH_TIMER" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_REFRESH_TIMER');?>
" />
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_hauteurLigne');?>
 :</label>
									<div class="col-2">
										<input name="PLANNING_LINE_HEIGHT" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_PLANNING_LINE_HEIGHT');?>
" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_hauteurLigne');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>

								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_largeurColonne');?>
 :</label>
									<div class="col-2">
										<input name="PLANNING_COL_WIDTH" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_PLANNING_COL_WIDTH');?>
" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_largeurColonne');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_largeurColonneLarge');?>
 :</label>
									<div class="col-2">
										<input name="PLANNING_COL_WIDTH_LARGE" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_PLANNING_COL_WIDTH_LARGE');?>
" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_largeurColonneLarge');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_repeterHeaderDate');?>
 :</label>
									<div class="col-2">
										<input name="PLANNING_REPEAT_HEADER" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_PLANNING_REPEAT_HEADER');?>
" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_repeterHeaderDate');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<div class="col-md-4"></div>
									<div class="col-md-8">
										<br />
										<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer');?>
"/>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="tab-pane" id="param-taches">
						<form action="process/options.php" method="POST" class="form-horizontal">
							<fieldset>
								<legend>
									<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_taches');?>

								</legend>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_uneTacheParJour');?>
 :</label>
									<div class="col-2">
										<select name="PLANNING_ONE_ASSIGNMENT_MAX_PER_DAY" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_PLANNING_ONE_ASSIGNMENT_MAX_PER_DAY') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_PLANNING_ONE_ASSIGNMENT_MAX_PER_DAY') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_uneTacheParJour');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_masquer_projet_weekend');?>
 :</label>
									<div class="col-2">
										<select name="PLANNING_HIDE_WEEKEND_TASK" class="form-control">
											<option value="1" <?php if (@constant('CONFIG_PLANNING_HIDE_WEEKEND_TASK') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="0" <?php if (@constant('CONFIG_PLANNING_HIDE_WEEKEND_TASK') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_hide_weekend_task');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_differencier_tache_lien');?>
 :</label>
									<div class="col-2">
										<select name="PLANNING_DIFFERENCIE_TACHE_LIEN" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_PLANNING_DIFFERENCIE_TACHE_LIEN') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_PLANNING_DIFFERENCIE_TACHE_LIEN') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_differencier_tache_lien');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_differencier_tache_commentaire');?>
 :</label>
									<div class="col-2">
										<select name="PLANNING_DIFFERENCIE_TACHE_COMMENTAIRE" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_PLANNING_DIFFERENCIE_TACHE_COMMENTAIRE') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_PLANNING_DIFFERENCIE_TACHE_COMMENTAIRE') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_differencier_tache_commentaire');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>

								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_differencier_tache_partielle');?>
 :</label>
									<div class="col-2">
										<select name="PLANNING_DIFFERENCIE_TACHE_PARTIELLE" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_PLANNING_DIFFERENCIE_TACHE_PARTIELLE') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_PLANNING_DIFFERENCIE_TACHE_PARTIELLE') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_differencier_tache_partielle');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_masquer_feries');?>
 :</label>
									<div class="col-2">
										<select name="PLANNING_MASQUER_FERIES" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_PLANNING_MASQUER_FERIES') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_PLANNING_MASQUER_FERIES') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_masquer_feries');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_couleur_taches');?>
 :</label>
									<div class="col-md-6">
										<select name="PLANNING_COULEUR_TACHE" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_PLANNING_COULEUR_TACHE') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_couleur_taches_contextuelles');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_PLANNING_COULEUR_TACHE') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_couleur_taches_status');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_aide_couleur_taches');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_projet');?>
 :</label>
									<div class="col-md-4">
										<select name="PLANNING_TEXTE_TACHES_PROJET" class="form-control">
											<option value="code_projet" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'code_projet') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_projet');?>
</option>
											<option value="code_personne" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'code_personne') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_personne');?>
</option>
											<option value="code_lieu" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'code_lieu') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_lieu');?>
</option>
											<option value="code_ressource" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'code_ressource') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_ressource');?>
</option>
											<option value="nom_projet" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'nom_projet') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_projet');?>
</option>
											<option value="nom_personne" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'nom_personne') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_personne');?>
</option>
											<option value="nom_lieu" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'nom_lieu') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_lieu');?>
</option>
											<option value="nom_ressource" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'nom_ressource') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_ressource');?>
</option>
											<option value="nom_tache" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'nom_tache') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_tache');?>
</option>
											<option value="vide" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PROJET') == 'vide') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_vide');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_aide_contenu_taches_projet');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_personne');?>
 :</label>
									<div class="col-md-4">
										<select name="PLANNING_TEXTE_TACHES_PERSONNE" class="form-control">
											<option value="code_projet" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'code_projet') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_projet');?>
</option>
											<option value="code_personne" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'code_personne') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_personne');?>
</option>
											<option value="code_lieu" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'code_lieu') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_lieu');?>
</option>
											<option value="code_ressource" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'code_ressource') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_ressource');?>
</option>
											<option value="nom_projet" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'nom_projet') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_projet');?>
</option>
											<option value="nom_personne" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'nom_personne') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_personne');?>
</option>
											<option value="nom_lieu" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'nom_lieu') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_lieu');?>
</option>
											<option value="nom_ressource" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'nom_ressource') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_ressource');?>
</option>
											<option value="nom_tache" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'nom_tache') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_tache');?>
</option>
											<option value="vide" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_PERSONNE') == 'vide') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_vide');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_aide_contenu_taches_personne');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<?php if (@constant('CONFIG_SOPLANNING_OPTION_LIEUX') == 1) {?>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_lieu');?>
 :</label>
									<div class="col-md-4">
										<select name="PLANNING_TEXTE_TACHES_LIEU" class="form-control">
											<option value="code_projet" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'code_projet') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_projet');?>
</option>
											<option value="code_personne" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'code_personne') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_personne');?>
</option>
											<option value="code_lieu" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'code_lieu') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_lieu');?>
</option>
											<option value="code_ressource" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'code_ressource') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_ressource');?>
</option>
											<option value="nom_projet" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'nom_projet') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_projet');?>
</option>
											<option value="nom_personne" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'nom_personne') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_personne');?>
</option>
											<option value="nom_lieu" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'nom_lieu') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_lieu');?>
</option>
											<option value="nom_ressource" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'nom_ressource') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_ressource');?>
</option>
											<option value="nom_tache" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'nom_tache') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_tache');?>
</option>
											<option value="vide" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_LIEU') == 'vide') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_vide');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_aide_contenu_taches_lieu');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<?php }?>
								<?php if (@constant('CONFIG_SOPLANNING_OPTION_RESSOURCES') == 1) {?>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_ressource');?>
 :</label>
									<div class="col-md-4">
										<select name="PLANNING_TEXTE_TACHES_RESSOURCE" class="form-control">
											<option value="code_projet" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'code_projet') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_projet');?>
</option>
											<option value="code_personne" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'code_personne') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_personne');?>
</option>
											<option value="code_lieu" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'code_lieu') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_lieu');?>
</option>
											<option value="code_ressource" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'code_ressource') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_code_ressource');?>
</option>
											<option value="nom_projet" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'nom_projet') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_projet');?>
</option>
											<option value="nom_personne" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'nom_personne') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_personne');?>
</option>
											<option value="nom_lieu" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'nom_lieu') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_lieu');?>
</option>
											<option value="nom_ressource" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'nom_ressource') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_ressource');?>
</option>
											<option value="nom_tache" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'nom_tache') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_nom_tache');?>
</option>
											<option value="vide" <?php if (@constant('CONFIG_PLANNING_TEXTE_TACHES_RESSOURCE') == 'vide') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_contenu_taches_vide');?>
</option>
										</select>
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_aide_contenu_taches_ressource');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<?php }?>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_taille_police_cellule');?>
 :</label>
									<div class="col-md-4">
										<select name="PLANNING_CELL_FONTSIZE" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_PLANNING_CELL_FONTSIZE') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_taille_police_cellule_defaut');?>
</option>
											<option value="9" <?php if (@constant('CONFIG_PLANNING_CELL_FONTSIZE') == 9) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_taille_police_cellule_micro');?>
</option>	
											<option value="10" <?php if (@constant('CONFIG_PLANNING_CELL_FONTSIZE') == 10) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_taille_police_cellule_mini');?>
</option>
											<option value="12" <?php if (@constant('CONFIG_PLANNING_CELL_FONTSIZE') == 12) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_taille_police_cellule_medium');?>
</option>
											<option value="14" <?php if (@constant('CONFIG_PLANNING_CELL_FONTSIZE') == 14) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'option_taille_police_cellule_maxi');?>
</option>
										</select>
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_largeurCode');?>
 :</label>
									<div class="col-2">
										<input name="PLANNING_CODE_WIDTH" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_PLANNING_CODE_WIDTH');?>
" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_largeurCode');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-5 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_largeurCodeLarge');?>
 :</label>
									<div class="col-2">
										<input name="PLANNING_CODE_WIDTH_LARGE" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo @constant('CONFIG_PLANNING_CODE_WIDTH_LARGE');?>
" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_largeurCodeLarge');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<div class="col-md-4"></div>
									<div class="col-6">
										<br />
										<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer');?>
"/>
									</div>
								</div>
							</fieldset>
						</form>
					</div>					<div class="tab-pane" id="param-divers">
						<form action="process/options.php" method="POST" class="form-horizontal">
							<fieldset>
								<legend>
									<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_divers');?>

								</legend>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_couleursProjets');?>
 :</label>
									<div class="col-6">
										<input name="PROJECT_COLORS_POSSIBLE" type="text" value="<?php echo xss_protect(@constant('CONFIG_PROJECT_COLORS_POSSIBLE'));?>
" class="form-control" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_couleursPossibles');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_lienDefaut');?>
 :</label>
									<div class="col-6">
										<input name="DEFAULT_PERIOD_LINK" type="text" value="<?php echo @constant('CONFIG_DEFAULT_PERIOD_LINK');?>
" class="form-control" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_LinkPeriod');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_urlRedirection');?>
 :</label>
									<div class="col-6">
										<input name="LOGOUT_REDIRECT" type="text" value="<?php echo @constant('CONFIG_LOGOUT_REDIRECT');?>
" class="form-control" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_redirect');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<div class="col-md-4"></div>
									<div class="col-6">
										<br />
										<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer');?>
"/>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="tab-pane" id="param-smtp">
						<form action="process/options.php" method="POST">
							<fieldset>
								<legend>
									<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_smtp_titre');?>

								</legend>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_smtp_host');?>
 :</label>
									<div class="col-md-4">
										<input name="SMTP_HOST" type="text" value="<?php echo xss_protect(@constant('CONFIG_SMTP_HOST'));?>
" class="form-control" />
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_smtp_port');?>
 :</label>
									<div class="col-2">
										<input name="SMTP_PORT" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="number" class="form-control"<?php } else { ?>type="text" class="form-control"<?php }?> value="<?php echo xss_protect(@constant('CONFIG_SMTP_PORT'));?>
" />
									</div>
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_smtp');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_smtp_secure');?>
</label>
									<div class="col-md-4">
										<select name="SMTP_SECURE" class="form-control">
											<option value="" <?php if (@constant('CONFIG_SMTP_SECURE') == '') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_smtp_nonSecurise');?>
</option>
											<option value="ssl" <?php if (@constant('CONFIG_SMTP_SECURE') == "ssl") {?>selected="selected"<?php }?>>SSL</option>
											<option value="tls" <?php if (@constant('CONFIG_SMTP_SECURE') == "tls") {?>selected="selected"<?php }?>>TLS</option>
										</select>
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_smtp_from');?>
 :</label>
									<div class="col-md-4">
										<input name="SMTP_FROM" type="text" value="<?php echo xss_protect(@constant('CONFIG_SMTP_FROM'));?>
" class="form-control" />
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_smtp_login');?>
 :</label>
									<div class="col-md-4">
										<input name="SMTP_LOGIN" type="text" value="<?php echo xss_protect(@constant('CONFIG_SMTP_LOGIN'));?>
" class="form-control" />
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_smtp_password');?>
 :</label>
									<div class="col-md-4">
										<input name="SMTP_PASSWORD" type="password" size="30" value="<?php if (@constant('CONFIG_SMTP_LOGIN') != '') {?>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<?php }?>" class="form-control"/>
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<div class="col-md-4"></div>
									<div class="col-md-4">
										<br />
										<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer');?>
"/>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="tab-pane" id="param-testmail">
						<form action="process/options.php" method="POST" class="form-horizontal">
							<fieldset>
								<legend>
									<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_envoyerMailTest');?>

								</legend>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_envoyerMailTest_destinataire');?>
 :</label>
									<div class="col-6">
										<input name="mailTestDestinataire" type="text" class="form-control" />
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"></label>
									<div class="col-6">
										<input name="smtp_traces" type="checkbox" /> <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'afficher_logs_smtp');?>

									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<div class="col-md-4"></div>
									<div class="col-6">
										<br />
										<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer');?>
" <?php if (@constant('CONFIG_SMTP_HOST') == '' || @constant('CONFIG_SMTP_PORT') == '' || @constant('CONFIG_SMTP_FROM') == '') {?>disabled="disabled"<?php }?>/>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="tab-pane" id="param-audit">
						<form action="process/options.php" method="POST" class="form-horizontal">
							<fieldset>
								<legend>
									<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_audit');?>

								</legend>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_taches');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT_TACHES" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_TACHES') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_TACHES') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>	
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit_taches');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_projets');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT_PROJETS" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_PROJETS') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_PROJETS') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>	
										<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit_projets');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_groupes');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT_GROUPES" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_GROUPES') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_GROUPES') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>
											<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit_groupes');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_utilisateurs');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT_UTILISATEURS" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_UTILISATEURS') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_UTILISATEURS') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>	
											<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit_utilisateurs');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_equipes');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT_EQUIPES" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_EQUIPES') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_EQUIPES') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>	
											<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit_equipes');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_lieux');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT_LIEUX" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_LIEUX') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_LIEUX') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>	
											<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit_lieux');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_ressources');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT_RESSOURCES" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_RESSOURCES') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_RESSOURCES') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>	
											<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit_ressources');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_statuts');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT_STATUTS" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_STATUTS') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_STATUTS') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>	
											<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit_statuts');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_connexions');?>
  :</label>
									<div class="col-2">
										<select name="SOPLANNING_OPTION_AUDIT_CONNEXIONS" class="form-control">
											<option value="0" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_CONNEXIONS') == 0) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
											<option value="1" <?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT_CONNEXIONS') == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
										</select>
									</div>	
											<div title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_aide_options_audit_connexions');?>
" class="cursor-help tooltipster"><i class="fa fa-question-circle" aria-hidden="true"></i></div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<label class="col-md-4 col-form-label" for="SOPLANNING_OPTION_AUDIT_RETENTION"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_retention');?>
 :</label>
									<div class="col-2">
										<select name='SOPLANNING_OPTION_AUDIT_RETENTION' id='SOPLANNING_OPTION_AUDIT_RETENTION' class="form-control">
											<option value='5' <?php if (5 == @constant('CONFIG_SOPLANNING_OPTION_AUDIT_RETENTION')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_retention_5J');?>
</option>
											<option value='10' <?php if (10 == @constant('CONFIG_SOPLANNING_OPTION_AUDIT_RETENTION')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_retention_10J');?>
</option>
											<option value='30' <?php if (30 == @constant('CONFIG_SOPLANNING_OPTION_AUDIT_RETENTION')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_retention_30J');?>
</option>
											<option value='60' <?php if (60 == @constant('CONFIG_SOPLANNING_OPTION_AUDIT_RETENTION')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_retention_60J');?>
</option>
											<option value='90' <?php if (90 == @constant('CONFIG_SOPLANNING_OPTION_AUDIT_RETENTION')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_retention_90J');?>
</option>
											<option value='180' <?php if (180 == @constant('CONFIG_SOPLANNING_OPTION_AUDIT_RETENTION')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_retention_180J');?>
</option>
											<option value='360' <?php if (360 == @constant('CONFIG_SOPLANNING_OPTION_AUDIT_RETENTION')) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'config_options_audit_retention_360J');?>
</option>
										</select>
									</div>
								</div>
								<div class="form-group row col-md-12 align-items-center">
									<div class="col-md-4"></div>
									<div class="col-6">
										<br />
										<input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer');?>
" />
									</div>
								</div>
							</fieldset>
						</form>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
>

	jQuery(document).ready(function(){
		jQuery("a[data-toggle=popover]")
			.popover()
			.click(function(e) {
			e.preventDefault()
		});
	});
	
	var rand = function() {
	return Math.random().toString(36).substr(2); // remove `0.`
	};
	
	var token = function() {
	var key=rand() + rand() + rand(); // to make it longer
	jQuery('#CONFIG_SECURE_KEY').attr('value', key);	
	};

<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
