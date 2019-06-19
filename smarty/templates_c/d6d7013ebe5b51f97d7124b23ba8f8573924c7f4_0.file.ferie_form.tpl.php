<?php
/* Smarty version 3.1.32, created on 2019-06-10 07:23:58
  from '/home/dapps/public_html/XENIEL/planner/templates/ferie_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfde96ed4f526_47859092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6d7013ebe5b51f97d7124b23ba8f8573924c7f4' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/ferie_form.tpl',
      1 => 1551927584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfde96ed4f526_47859092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dapps/public_html/XENIEL/planner/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?><form method="post" action="" target="_blank" onsubmit="return false;">
	<div class="form-group row col-md-12 align-items-center">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_date');?>
 :</label>
		<div class="col-md-7">
			<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
				<input type="date" class="form-control" id="date_ferie" maxlength="10" value="<?php echo forceISODateFormat($_smarty_tpl->tpl_vars['ferie']->value['date_ferie']);?>
" />		
			<?php } else { ?>
				<input type="text" class="form-control datepicker" id="date_ferie" maxlength="10" value="<?php echo sqldate2userdate($_smarty_tpl->tpl_vars['ferie']->value['date_ferie']);?>
" />		
			<?php }?>
			
		</div>
	</div>
	<div class="form-group row col-md-12 align-items-center">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_libelle');?>
 :</label>
		<div class="col-md-6">
			<input id="libelle" maxlength="50" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ferie']->value['libelle'];?>
" class="form-control" />
		</div>
	</div>
	<div class="form-group row col-md-12 align-items-center">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_couleurfond');?>
 :</label>
		<div class="col-md-6">
			<div class="form-check">
				<input class="form-check-input" type="radio" name="couleur_fond" id="couleur_fond_defaut" value="defaut" onChange="if(this.checked){document.getElementById('divSpecificColor').style.display='none';}" <?php if ($_smarty_tpl->tpl_vars['ferie']->value['couleur'] == '') {?>checked="checked"<?php }?>>
				<label class="form-check-label" for="couleur_fond_defaut"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_couleurtheme');?>
</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="couleur_fond" id="couleur_fond_perso" value="perso" onChange="if(this.checked){document.getElementById('divSpecificColor').style.display='inline-block';}"<?php if ($_smarty_tpl->tpl_vars['ferie']->value['couleur'] != '') {?>checked="checked"<?php }?>>
				<label class="form-check-label" for="couleur_fond_perso"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_couleurperso');?>
</label>
			</div>
			<div id="divSpecificColor" style="display:<?php if ($_smarty_tpl->tpl_vars['ferie']->value['couleur'] == '') {?>none<?php } else { ?>inline-block<?php }?>" class="col-form-label">
					<?php if (@constant('CONFIG_PROJECT_COLORS_POSSIBLE') != '') {?>
						<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
							<input name="couleur_user" id="couleur_ferie" maxlength="6" type="color" list="colors" value="#<?php if ($_smarty_tpl->tpl_vars['ferie']->value['couleur'] == '') {
echo $_smarty_tpl->tpl_vars['couleurExFerie']->value;
} else {
echo $_smarty_tpl->tpl_vars['ferie']->value['couleur'];
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
							<select name="couleur2" id="couleur2" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['ferie']->value['couleur'];?>
;color:<?php echo buttonFontColor(("#").($_smarty_tpl->tpl_vars['ferie']->value['couleur']));?>
" class="form-control" >
							<?php if ($_smarty_tpl->tpl_vars['ferie']->value['couleur'] == '') {?><option value=""><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_couleurchoix');?>
</option><?php }?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",@constant('CONFIG_PROJECT_COLORS_POSSIBLE')), 'couleurTmp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['couleurTmp']->value) {
?>
								<option value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['couleurTmp']->value,'#','');?>
" style="background-color:<?php echo $_smarty_tpl->tpl_vars['couleurTmp']->value;?>
;color:<?php echo buttonFontColor($_smarty_tpl->tpl_vars['couleurTmp']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['couleurTmp']->value == ("#").($_smarty_tpl->tpl_vars['ferie']->value['couleur'])) {?>selected="selected"<?php }?>><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['couleurTmp']->value,'#','');?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<?php }?>
					<?php } else { ?>
						<input id="couleur" name="couleur" maxlength="6" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="color"<?php } else { ?>type="text"<?php }?> value="#<?php echo xss_protect($_smarty_tpl->tpl_vars['ferie']->value['couleur']);?>
"/>
					<?php }?>
			</div>
		</div>
	</div>
	<div class="form-group row col-md-12 align-items-center">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<br />
			<input type="button" class="btn btn-primary" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer'), ENT_QUOTES, 'UTF-8', true);?>
" onclick="xajax_submitFormFerie(document.getElementById('date_ferie').value, document.getElementById('libelle').value, <?php if (@constant('CONFIG_PROJECT_COLORS_POSSIBLE') != '') {?>$('#couleur2 option:selected').val()<?php } else { ?>$('#couleur').val()<?php }?>);"/>
		</div>
</form><?php }
}
