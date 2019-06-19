<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:30:23
  from '/home/dapps/public_html/XENIEL/planner/templates/user_group_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdeaef2cfe83_67263233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a7410aa386ca886074cb91dc480367fb8ae49af' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/user_group_form.tpl',
      1 => 1553060920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdeaef2cfe83_67263233 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST" action="" target="_blank" onsubmit="return false;">
	<div class="form-group row col-md-12 align-items-center">
		<label for="nom" class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_groupe');?>
 :</label>
		<div class="col-md-4">
			<input id="nom" class="form-control" type="text" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['groupe']->value['nom']);?>
" maxlength="150" />
		</div>
	</div>
	<div class="form-group row col-md-12 align-items-center">
	<div class="col-md-2 col-form-label"></div>
	<div class="col-md-4">
		<br />
		<input type="button" class="btn btn-primary" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enregistrer'), ENT_QUOTES, 'UTF-8', true);?>
" onclick="xajax_submitFormUserGroupe('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupe']->value['user_groupe_id'], ENT_QUOTES, 'UTF-8', true);?>
', document.getElementById('nom').value);"/>
	</div>
	</div>
</form><?php }
}
