<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:36:07
  from '/home/dapps/public_html/XENIEL/planner/templates/projet_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdec47313051_97570456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '118e3f3468a63e31a4cf07ee730f98d4de41e69f' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/projet_form.tpl',
      1 => 1552013870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdec47313051_97570456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/dapps/public_html/XENIEL/planner/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?><form method="POST" action="" target="_blank" id="projectForm">
	<input type="hidden" name="saved" id="saved" value="<?php echo $_smarty_tpl->tpl_vars['projet']->value['saved'];?>
" />
	<input type="hidden" name="old_projet_id" id="old_projet_id" value="<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
" />
	<input type="hidden" name="origine" id="origine" value="<?php echo $_smarty_tpl->tpl_vars['origine']->value;?>
" />
	<div class="form-group row col-md-12">
		<label for="projet_id" class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_identifiant');?>
 :</label>
		<div class="col-md-5">
			<input class="form-control" name="projet_id" id="projet_id" type="text" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
" onChange="xajax_checkProjetId(this.value, '<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
');" />
		</div>
		<div class="col-md-3 left-0">
		<span id="divStatutCheckProjetId"></span>
		<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_identifiantCarMax');?>

		</div>
	</div>
	<div class="form-group row col-md-12">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_nomProjet');?>
 :</label>
		<div class="col-md-6">
			<input class="form-control" name="nom" id="nom" type="text" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['projet']->value['nom'];?>
" />
		</div>
	</div>
	<div class="form-group row col-md-12">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_groupe');?>
 :</label>
		<div class="col-md-6">
			<select name="groupe_id" id="groupe_id" class="form-control select2">
				<option value="" <?php if ($_smarty_tpl->tpl_vars['projet']->value['groupe_id'] == '') {?>selected="selected"<?php }?>></option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupes']->value, 'groupe');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['groupe']->value['groupe_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['projet']->value['groupe_id'] == $_smarty_tpl->tpl_vars['groupe']->value['groupe_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['groupe']->value['nom'];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
	</div>
	<div class="form-group row col-md-12">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_statut');?>
 : </label>
		<div class="col-md-6">
			<select class="form-control" name="statut" id="statut">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeStatus']->value, 'status');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['status_id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['projet']->value['statut']) && $_smarty_tpl->tpl_vars['projet']->value['statut'] == $_smarty_tpl->tpl_vars['status']->value['status_id']) || (!isset($_smarty_tpl->tpl_vars['projet']->value['statut']) && $_smarty_tpl->tpl_vars['defaut_status']->value == $_smarty_tpl->tpl_vars['status']->value['status_id'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['nom'];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
	</div>
	<div class="form-group row col-md-12">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_charge');?>
 :</label>
		<div class="col-md-2">
			<input type="number" class="form-control" name="charge" id="charge" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['projet']->value['charge'];?>
" />
		</div>
		<div class="col-md-3 left-0">
		<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_chargeJours');?>

		</div>
	</div>
	<div class="form-group row col-md-12">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_livraison');?>
 :</label>
		<div class="col-md-8">
		<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
			<input type="date" class="form-control" name="livraison" id="livraison" value="<?php echo forceISODateFormat($_smarty_tpl->tpl_vars['projet']->value['livraison']);?>
" />
		<?php } else { ?>
			<input type="text" class="form-control datepicker" name="livraison" id="livraison" value="<?php echo sqldate2userdate($_smarty_tpl->tpl_vars['projet']->value['livraison']);?>
" />		
		<?php }?>
		</div>
	</div>
	<div class="form-group row col-md-12">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_couleur');?>
 :</label>
		<div class="col-md-6">
			<?php if (@constant('CONFIG_PROJECT_COLORS_POSSIBLE') != '') {?>
				<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
					<input class="form-control" name="couleur" id="couleur" maxlength="6" type="color" list="colors" value="#<?php if ($_smarty_tpl->tpl_vars['projet']->value['couleur'] == '') {
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
								<option><?php echo $_smarty_tpl->tpl_vars['couleurTmp']->value;?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</datalist>
				<?php } else { ?>
					<select name="couleur2" id="couleur2" class="form-control" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['projet']->value['couleur'];?>
;color:<?php echo buttonFontColor(('#').($_smarty_tpl->tpl_vars['projet']->value['couleur']));?>
">
						<?php if ($_smarty_tpl->tpl_vars['projet']->value['couleur'] == '') {?><option value=""><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_couleurchoix');?>
</option><?php }?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",@constant('CONFIG_PROJECT_COLORS_POSSIBLE')), 'couleurTmp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['couleurTmp']->value) {
?>
							<option value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['couleurTmp']->value,'#','');?>
" style="background-color:<?php echo $_smarty_tpl->tpl_vars['couleurTmp']->value;?>
;color:<?php echo buttonFontColor($_smarty_tpl->tpl_vars['couleurTmp']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['couleurTmp']->value == ("#").($_smarty_tpl->tpl_vars['projet']->value['couleur'])) {?>selected="selected"<?php }?>><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['couleurTmp']->value,'#','');?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php }?>
			<?php } else { ?>
                <?php if ($_SESSION['couleurExProjet'] != '') {?>
                    <?php $_smarty_tpl->_assignInScope('couleurExProjet', $_SESSION['couleurExProjet']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('couleurExProjet', "ffffff");?>
                <?php }?>
				<input name="couleur" id="couleur" maxlength="6" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="color"<?php } else { ?>type="text"<?php }?> value="#<?php if ($_smarty_tpl->tpl_vars['projet']->value['couleur'] == '') {
echo $_smarty_tpl->tpl_vars['couleurExProjet']->value;
} else {
echo $_smarty_tpl->tpl_vars['projet']->value['couleur'];
}?>" />
			<?php }?>
		</div>
	</div>	
	<div class="form-group row col-md-12">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_lien');?>
 :</label>
		<div class="col-md-6">
			<input class="form-control" name="lien" id="lien" <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="url"<?php } else { ?>type="text"<?php }?> maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['projet']->value['lien'];?>
" />
		</div>
		<?php if ($_smarty_tpl->tpl_vars['projet']->value['lien'] != '') {?>
			<div class="col-md-2">
				<a class="btn btn-default tooltipster" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_gotoLien'), ENT_QUOTES, 'UTF-8', true);?>
" href="<?php if (strpos($_smarty_tpl->tpl_vars['projet']->value['lien'],"http") !== 0 && strpos($_smarty_tpl->tpl_vars['projet']->value['lien'],"\\") !== 0) {?>http://<?php }
echo $_smarty_tpl->tpl_vars['projet']->value['lien'];?>
" target="_blank"><i class="fa fa-share-square-o" aria-hidden="true"></i></a>
			</div>
		<?php }?>
	</div>
	<div class="form-group row col-md-12">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_createur');?>
 :</label>
		<div class="col-md-6">
			<?php if (in_array("projects_manage_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
				<select name="createur_id" id="createur_id" class="form-control<?php if ($_SESSION['isMobileOrTablet'] == 0) {?> select2<?php }?>">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usersOwner']->value, 'owner');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['owner']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['owner']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['createur']->value['user_id'] == $_smarty_tpl->tpl_vars['owner']->value['user_id'] || ($_smarty_tpl->tpl_vars['createur']->value['user_id'] == '' && $_smarty_tpl->tpl_vars['owner']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value['user_id'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['owner']->value['nom'];?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['createur']->value['nom'];?>

				<input type="hidden" name="createur_id" id="createur_id" value="<?php echo $_smarty_tpl->tpl_vars['createur']->value['user_id'];?>
">
			<?php }?>
		</div>
	</div>
	<div class="form-group row col-md-12">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winProjet_commentaires');?>
 :</label>
		<div class="col-md-8">
			<textarea name="iteration" id="iteration" class="form-control" maxlength="255"><?php echo $_smarty_tpl->tpl_vars['projet']->value['iteration'];?>
</textarea>
		</div>
	</div>
	<div class="form-group row col-md-12">
	<div class="col-md-4 col-form-label"></div>
		<div class="col-md-8">
			<br />
			<input type="button" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer'), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-primary" onClick="xajax_submitFormProjet('<?php echo $_smarty_tpl->tpl_vars['projet']->value['projet_id'];?>
', $('#origine').val(), $('#projet_id').val(), $('#nom').val(), $('#groupe_id').val(), $('#statut').val(), $('#charge').val(), $('#livraison').val(), $('#lien').val(), <?php if (@constant('CONFIG_PROJECT_COLORS_POSSIBLE') != '') {?>$('#couleur2 option:selected').val()<?php } else { ?>$('#couleur').val()<?php }?>, $('#createur_id').val(), $('#iteration').val())" />
		</div>
	</div>
</form>
<?php echo '<script'; ?>
>
	
	$('.tooltipster').tooltip({
		html: true,
		placement: 'auto',
		boundary: 'window'
	});
	
<?php echo '</script'; ?>
>
<?php }
}
