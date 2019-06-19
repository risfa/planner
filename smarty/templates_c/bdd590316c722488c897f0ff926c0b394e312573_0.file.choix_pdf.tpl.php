<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:41:46
  from '/home/dapps/public_html/XENIEL/planner/templates/choix_pdf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfded9ab4feb0_91596895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdd590316c722488c897f0ff926c0b394e312573' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/choix_pdf.tpl',
      1 => 1551064720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfded9ab4feb0_91596895 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-horizontal" method="get" action="export_pdf.php" target="_blank">
	<div class="form-group row">
		<label class="col-md-3 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDFExport_orientation');?>
 :</label>
		<div class="col-md-4">
			<select name="pdf_orientation" id="orientation" class="form-control">
				<option value="paysage" <?php if ($_smarty_tpl->tpl_vars['pdf_orientation']->value == "paysage") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDFExport_orientation_paysage');?>
</option>
				<option value="portrait" <?php if ($_smarty_tpl->tpl_vars['pdf_orientation']->value == "portrait") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDFExport_orientation_portrait');?>
</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-3 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDFExport_format');?>
 :</label>
		<div class="col-md-4">
			<select name="pdf_format" id="format" class="form-control">
				<option value="A4" <?php if ($_smarty_tpl->tpl_vars['pdf_format']->value == "A4") {?>selected="selected"<?php }?>>A4</option>
				<option value="A3" <?php if ($_smarty_tpl->tpl_vars['pdf_format']->value == "A3") {?>selected="selected"<?php }?>>A3</option>
				<option value="A2" <?php if ($_smarty_tpl->tpl_vars['pdf_format']->value == "A2") {?>selected="selected"<?php }?>>A2</option>
				<option value="A1" <?php if ($_smarty_tpl->tpl_vars['pdf_format']->value == "A1") {?>selected="selected"<?php }?>>A1</option>
				<option value="A0" <?php if ($_smarty_tpl->tpl_vars['pdf_format']->value == "A0") {?>selected="selected"<?php }?>>A0</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-3"></div>
		<div class="col-md-7">
			<input id="cb_inclure_recap" name="cb_inclure_recap" type="checkbox" value="1" />
			<label for="cb_inclure_recap" style="display:inline;font-weight:normal"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pdf_inclure_recap');?>
</label>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<br>
			<input type="submit" class="btn btn-primary" value="<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_valider'));?>
" />
		</div>
	</div>
</form><?php }
}
