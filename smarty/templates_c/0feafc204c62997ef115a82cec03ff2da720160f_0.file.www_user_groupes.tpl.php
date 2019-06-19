<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:30:20
  from '/home/dapps/public_html/XENIEL/planner/templates/www_user_groupes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdeaece324f1_92276951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0feafc204c62997ef115a82cec03ff2da720160f' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_user_groupes.tpl',
      1 => 1553060780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:www_header.tpl' => 1,
    'file:www_footer.tpl' => 1,
  ),
),false)) {
function content_5cfdeaece324f1_92276951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:www_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box">
				<div class="btn-group">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php" class="btn btn-default" ><i class="fa fa-address-card-o fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuGestionUsers');?>
</a>
					<a href="javascript:xajax_modifUserGroupe();undefined;" class="btn btn-default"><i class="fa fa-users fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuCreerUserGroupe');?>
</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box mt-2">
				<?php if (count($_smarty_tpl->tpl_vars['groupes']->value) > 0) {?>
					<table class="table table-striped table-hover">
						<tr>
							<th>&nbsp;</th>
							<th>
								<?php if ($_smarty_tpl->tpl_vars['order']->value == "nom") {?>
									<?php if ($_smarty_tpl->tpl_vars['by']->value == "asc") {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_groupes.php?page=1&order=nom&by=desc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_groupe');?>
 (<?php echo count($_smarty_tpl->tpl_vars['groupes']->value);?>
)</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/asc_order.png" alt="" />
									<?php } else { ?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_groupes.php?page=1&order=nom&by=asc"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_groupe');?>
 (<?php echo count($_smarty_tpl->tpl_vars['groupes']->value);?>
)</a>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/pictos/desc_order.png" alt="" />
									<?php }?>
								<?php } else { ?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_groupes.php?page=1&order=nom&by=<?php echo $_smarty_tpl->tpl_vars['by']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_liste_groupe');?>
 (<?php echo count($_smarty_tpl->tpl_vars['groupes']->value);?>
)</a>
								<?php }?>
							</th>
							<?php $_smarty_tpl->_assignInScope('totalUsers', 0);?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupes']->value, 'groupe', false, NULL, 'groupes', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
?>
								<?php $_smarty_tpl->_assignInScope('totalUsers', $_smarty_tpl->tpl_vars['totalUsers']->value+$_smarty_tpl->tpl_vars['groupe']->value['totalUsers']);?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_groupe_nbUsers');?>
 (<?php echo $_smarty_tpl->tpl_vars['totalUsers']->value;?>
)</th>
						</tr>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupes']->value, 'groupe', false, NULL, 'groupes', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
?>
							<tr>
								<td class="w40">
									<a href="javascript:xajax_modifUserGroupe(<?php echo $_smarty_tpl->tpl_vars['groupe']->value['user_groupe_id'];?>
);undefined;"><i class="fa fa-pencil fa-lg fa-fw" aria-hidden="true"></i></a>
									<a href="javascript:if(confirm('<?php echo strtr($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'confirm'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')){javascript:xajax_supprimerUserGroupe(<?php echo $_smarty_tpl->tpl_vars['groupe']->value['user_groupe_id'];?>
);};undefined;"><i class="fa fa-trash-o fa-lg fa-fw" aria-hidden="true"></i></a>
								</td>
								<td><?php echo xss_protect($_smarty_tpl->tpl_vars['groupe']->value['nom']);?>
&nbsp;</td>
								<td><?php echo $_smarty_tpl->tpl_vars['groupe']->value['totalUsers'];?>
&nbsp;</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</table>
				<?php } else { ?>
					<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'info_noRecord');?>

				<?php }?>
			</div>
		</div>
	</div>
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
