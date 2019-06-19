<?php
/* Smarty version 3.1.32, created on 2019-06-10 07:23:35
  from '/home/dapps/public_html/XENIEL/planner/templates/www_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfde957576706_00725949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a40a665c8f19d1d99c9a755d1de1b02361ff2cd' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_footer.tpl',
      1 => 1551235902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfde957576706_00725949 (Smarty_Internal_Template $_smarty_tpl) {
?>		 		<div class="navbar fixed-bottom navbar-light bg-white footer justify-content-center" id="footerbar">
			<a target="_blank" href="https://www.soplanning.org">www.soplanning.org</a>
			<span class="noprint">&nbsp;-&nbsp;</span>
			<a href="mailto:support@soplanning.org" class="noprint"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'soplanning_support');?>
</a>
			<span class="noprint">&nbsp;-&nbsp;</span>
			<a href="javascript:xajax_contact();undefined;" class="noprint"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formContact_titre');?>
</a>
		</div>
		<div id="divFormSupport" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formContact_titre');?>
</h3>
					</div>
					<div class="modal-body">
						<input type="text" id="rappel_pwd" placeholder="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rappelPwdVotreEmail');?>
" class="form-control" />
					</div>
					<div class="modal-footer">
						<button class="btn btn-primary" id="changePwd"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal" tabindex="-1" role="dialog" id="myModal">
		<div class="modal-dialog modal-dialog-normal" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">...</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				</div>
			</div>
		</div>
		</div>
		<div class="modal" id="alertModal" >
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
					</div>
				</div>
			</div>
		</div>
		<div class="modal" tabindex="-1" role="dialog" id="myBigModal">
		<div class="modal-dialog modalBig" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">...</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				</div>
			</div>
		</div>
		</div>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/bootstrap3-typeahead/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-ui-1.12.1.custom/i18n/datepicker-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/bootstrap-4.3.1/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->tpl_vars['xajax']->value;?>

		<?php echo '<script'; ?>
>
		
		$(".modal").draggable({
			handle: ".modal-header"
		});
		// Activation des datepicker
		$(".datepicker").datepicker({ 
			showWeek: true, 
			dateFormat: "<?php echo @constant('CONFIG_DATE_DATEPICKER');?>
"
		});		
		// Activation des tooltip
		$('.tooltipster').tooltip({
			html: true,
			placement: 'auto',
			boundary: 'window'
		});
		
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
