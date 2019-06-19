<?php
/* Smarty version 3.1.32, created on 2019-06-10 07:23:57
  from '/home/dapps/public_html/XENIEL/planner/templates/www_feries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfde96d1bc4f9_08454022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcfeb47be17f54d264513cf62ceed8d338452239' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_feries.tpl',
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
function content_5cfde96d1bc4f9_08454022 (Smarty_Internal_Template $_smarty_tpl) {
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
					<a href="javascript:xajax_modifFerie();undefined;" class="btn btn-default" ><i class="fa fa-plane fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuCreerFerie');?>
</a>
					<div class="btn-group" id="dropdownExport">
						<button class="btn dropdown-toggle btn-default" data-toggle="dropdown"><i class="fa fa-upload fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_import');?>
</span>&nbsp;<span class="caret"></span></button>
						<div class="dropdown-menu" style="">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fichiers']->value, 'fichier');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fichier']->value) {
?>
								<a class="dropdown-item" onClick="event.cancelBubble=true;" href="javascript:if(confirm('<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_confirmImport');?>
')){document.location='process/feries.php?fichier=<?php echo basename($_smarty_tpl->tpl_vars['fichier']->value);?>
'}"><?php echo basename($_smarty_tpl->tpl_vars['fichier']->value);?>
</a>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="soplanning-box mt-2">
				<?php if (count($_smarty_tpl->tpl_vars['feries']->value) > 0) {?>
					<table class="table table-striped table-hover">
						<thead>
						<tr>
							<th class="w100">&nbsp;</th>
							<th class="w100">
								<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_date');?>
</b>
							</th>
							<th>
								<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_libelle');?>
</b>
							</th>
							<th class="text-center">
								<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'feries_couleurfond');?>
</b>
							</th>
						</tr>
						</thead>
						<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feries']->value, 'ferie', false, NULL, 'feries', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ferie']->value) {
?>
							<tr>
								<td class="w100">
									<a href="javascript:xajax_modifFerie('<?php echo urlencode($_smarty_tpl->tpl_vars['ferie']->value['date_ferie']);?>
');undefined;"><i class="fa fa-pencil fa-lg fa-fw" aria-hidden="true"></i></a>
									<a href="javascript:xajax_supprimerFerie('<?php echo urlencode($_smarty_tpl->tpl_vars['ferie']->value['date_ferie']);?>
');undefined;" onClick="javascript:return confirm('<?php echo strtr($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'confirm'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"><i class="fa fa-trash-o fa-lg fa-fw" aria-hidden="true"></i></a>
								</td>
								<td class="w100">
									<?php echo sqldate2userdate($_smarty_tpl->tpl_vars['ferie']->value['date_ferie']);?>
&nbsp;
								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['ferie']->value['libelle'];?>

								</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['ferie']->value['couleur'] == '') {?>
									<div class="pastille-statut mr-auto ml-auto feries"></div>
									<?php } else { ?>
									<div class="pastille-statut mr-auto ml-auto" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['ferie']->value['couleur'];?>
"></div>
									<?php }?>
								</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</tbody>
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
