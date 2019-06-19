<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:29:32
  from '/home/dapps/public_html/XENIEL/planner/templates/ressource_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdeabcaeee99_15791189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12cb26762d791e41fc3d22dc03ab4c254e5093f9' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/ressource_form.tpl',
      1 => 1553655352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdeabcaeee99_15791189 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" action="" target="_blank">
	<input type="hidden" name="old_ressource_id" id="old_ressource_id" value="<?php echo $_smarty_tpl->tpl_vars['ressource']->value['ressource_id'];?>
" />
	<div class="form-group row col-md-12">
		<label for="ressource_id" class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ressource_identifiant');?>
 :</label>
		<div class="col-md-4">
			<?php if ($_smarty_tpl->tpl_vars['ressource']->value['ressource_id'] != '') {?>
			<input name="ressource_id" id="ressource_id" type="text" readonly class="form-control-plaintext" value="<?php echo $_smarty_tpl->tpl_vars['ressource']->value['ressource_id'];?>
"> 			
			<?php } else { ?>
			<input name="ressource_id" id="ressource_id" type="text" class="form-control" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['ressource']->value['ressource_id'];?>
" onChange="xajax_checkRessourceId(this.value, '<?php echo $_smarty_tpl->tpl_vars['ressource']->value['ressource_id'];?>
');" />
			</div>
			<span id="divStatutCheckRessourceId"></span>
			<div class="col-md-3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_ressource_identifiantCarMax');?>

			<?php }?>
		</div>
	</div>
	<div class="form-group row col-md-12 align-items-center">
		<label for="ressource_nom" class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ressource_nom');?>
 :</label>
		<div class="col-md-5">
			<input name="ressource_nom" id="ressource_nom" type="text" class="form-control" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['ressource']->value['nom'];?>
" />
		</div>
	</div>
	<div class="form-group row col-md-12 align-items-center">
		<label for="ressource_commentaire" class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ressource_commentaire');?>
 :</label>
		<div class="col-md-7">
			<textarea name="ressource_commentaire" id="ressource_commentaire" class="form-control" maxlength="255" type="text"><?php echo $_smarty_tpl->tpl_vars['ressource']->value['commentaire'];?>
</textarea>
		</div>
	</div>
	<div class="form-group row col-md-12 align-items-center">
		<label class="col-md-4 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'exclusivite');?>
 :</label>
		<div class="col-md-7 form-check form-check-inline">
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="form-check-input" name="ressource_exclusif" id="ressource_exclusif" <?php if ($_smarty_tpl->tpl_vars['ressource']->value['exclusif'] == 1) {?>checked="checked"<?php }?>><label class="form-check-label" for="ressource_exclusif"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ressource_exclusive');?>
</label>
		&nbsp;&nbsp;<span data-tooltip-content="#tooltip-exclusivite" data-toggle="tooltip" data-html="true" data-position="auto" class="cursor-help tooltipster" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_ressource_exclusive');?>
"><i class="fa fa-question-circle" aria-hidden="true" class="small"></i></span>
		<div class="tooltip-html"><span id="tooltip-exclusivite"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'options_aide_ressource_exclusive');?>
</span></div>
		</div>
	</div>
	<div class="form-group row col-md-12 align-items-center">
		<div class="col-md-4"></div>
		<div class="col-md-5">
			<br />
			<input type="button" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer'), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-primary" onClick="xajax_submitFormRessource('<?php echo $_smarty_tpl->tpl_vars['ressource']->value['ressource_id'];?>
', $('#ressource_id').val(), $('#ressource_nom').val(), $('#ressource_commentaire').val(), $('#ressource_exclusif').is(':checked'))" />
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
><?php }
}
