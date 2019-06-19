<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:29:22
  from '/home/dapps/public_html/XENIEL/planner/templates/www_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdeab25bc872_01234265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec7f35ac928add14186fbd2f791e061845dc6a1' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_status.tpl',
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
function content_5cfdeab25bc872_01234265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:www_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box">
				<div class="btn-group">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/options.php" class="btn btn-default" ><i class="fa fa-cogs fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuOptions');?>
</a>
					<a href="javascript:xajax_modifStatus();undefined;" class="btn btn-default" ><i class="fa fa-tags fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuCreerStatus');?>
</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box mt-2">
				<?php if (count($_smarty_tpl->tpl_vars['status']->value) > 0) {?>
					<table class="table table-striped table-hover" id="locationTab">
						<tr>
							<th class="w100">&nbsp;</th>
							<th>
								<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'status_nom');?>
</b>
							</th>
							<th class="d-none d-md-block d-lg-block">
								<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'status_commentaire');?>
</b>
							</th>
							<th class="text-center d-none d-sm-table-cell d-md-table-cell d-lg-table-cell">
								<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'status_pourcentage');?>
</b>
							</th>
							<th class="text-center">
								<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'status_couleur');?>
</b>
							</th>
						</tr>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['status']->value, 'statusTmp', false, NULL, 'status', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['statusTmp']->value) {
?>
							<tr>
								<td class="w100">
									<a href="javascript:xajax_modifStatus('<?php echo $_smarty_tpl->tpl_vars['statusTmp']->value['status_id'];?>
');undefined;"><i class="fa fa-pencil fa-lg fa-fw" aria-hidden="true"></i></a>
									<?php if ($_smarty_tpl->tpl_vars['statusTmp']->value['status_id'] != 'a_faire' && $_smarty_tpl->tpl_vars['statusTmp']->value['status_id'] != 'en_cours' && $_smarty_tpl->tpl_vars['statusTmp']->value['status_id'] != 'fait' && $_smarty_tpl->tpl_vars['statusTmp']->value['status_id'] != 'abandon') {?>
									<a href="javascript:xajax_supprimerStatus('<?php echo $_smarty_tpl->tpl_vars['statusTmp']->value['status_id'];?>
');undefined;" onClick="javascript:return confirm('<?php echo strtr($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'confirm'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"><i class="fa fa-trash-o fa-lg fa-fw" aria-hidden="true"></i></a>
									<?php }?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/planning.php?filtreSurStatus=<?php echo $_smarty_tpl->tpl_vars['statusTmp']->value['status_id'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_filtre_sur_status'), ENT_QUOTES, 'UTF-8', true);?>
"><i class="fa fa-globe fa-lg fa-fw" aria-hidden="true"></i></a>
								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['statusTmp']->value['nom'];?>
&nbsp;
								</td>
								<td class="d-none d-md-block d-lg-block">
									<?php echo $_smarty_tpl->tpl_vars['statusTmp']->value['commentaire'];?>

								</td>
								<td class="text-center d-none d-sm-table-cell d-md-table-cell d-lg-table-cell">
									<?php echo $_smarty_tpl->tpl_vars['statusTmp']->value['pourcentage'];?>

								</td>
								<td>
									<div class="pastille-statut mr-auto ml-auto" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['statusTmp']->value['couleur'];?>
"></div>
								</td>
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
<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
