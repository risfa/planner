<?php
/* Smarty version 3.1.32, created on 2019-06-10 07:23:35
  from '/home/dapps/public_html/XENIEL/planner/templates/install_ok.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfde957562e31_20571725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '817db0f239ed04ef56a06759e904e41822d67333' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/install_ok.tpl',
      1 => 1551235900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:www_footer.tpl' => 1,
  ),
),false)) {
function content_5cfde957562e31_20571725 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <meta name="reply-to" content="support@soplanning.org" />
		<meta name="email" content="support@soplanning.org" />
		<meta name="Identifier-URL" content="http://www.soplanning.org" />
		<title>SoPlanning Installation</title>
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/apple-touch-icon.png" />
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/favicon-32x32.png" />
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/favicon-16x16.png" />
		<link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/site.webmanifest" />
		<link rel="mask-icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/safari-pinned-tab.svg" color="#5bbad5" />
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="theme-color" content="#ffffff" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/bootstrap-4.3.1/css/bootstrap-theme.min.css" rel="stylesheet" />
		<link type="text/css" href="../assets/css/styles.css" rel="stylesheet" />
		<link type="text/css" href="../assets/css/simplePage.css" rel="stylesheet" />
		<?php echo $_smarty_tpl->tpl_vars['xajax']->value;?>

	</head>
	<body>
		<div class="container">
			<h3 class="text-center">
				<span class="soplanning_install_title">Simple Online Planning</span>
			</h3>
			<div class="small-container">
				<div class="alert alert-success">
					<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_installResultOk');?>

				</div>
				<ul class="list-inline flag text-right">
					<li class="list-inline-item"><a tabindex="1" href="?language=pl" class="tooltipEvent" data-title="Polish"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/pl.png" alt="Polish" title="Polish"/></a></li>
					<li class="list-inline-item"><a tabindex="2" href="?language=pt" class="tooltipEvent" data-title="Portuguese"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/pt.png" alt="Portuguese" title="Portuguese"/></a></li>
					<li class="list-inline-item"><a tabindex="3" href="?language=es" class="tooltipEvent" data-title="Spanish"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/es.png" alt="Spanish" title="Spanish" /></a></li>
					<li class="list-inline-item"><a tabindex="4" href="?language=de" class="tooltipEvent" data-title="German"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/de.png" alt="German" title="German"/></a></li>
					<li class="list-inline-item"><a tabindex="5" href="?language=da" class="tooltipEvent" data-title="Danish"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/da.png" alt="Danish" title="Danish"/></a></li>
					<li class="list-inline-item"><a tabindex="6" href="?language=hu" class="tooltipEvent" data-title="Hungarian"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/hu.png" alt="Hungarian" title="Hungarian"/></a></li>
					<li class="list-inline-item"><a tabindex="7" href="?language=nl" class="tooltipEvent" data-title="Dutch"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/nl.png" alt="Dutch" title="Dutch"/></a></li>
					<li class="list-inline-item"><a tabindex="8" href="?language=it" class="tooltipEvent" data-title="Italian"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/it.png" alt="Italian" title="Italian"/></a></li>
					<li class="list-inline-item"><a tabindex="9" href="?language=fr" class="tooltipEvent" data-title="French"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/fr.png" alt="French" title="French"/></a></li>
					<li class="list-inline-item"><a tabindex="10" href="?language=en" class="tooltipEvent" data-title="English"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/img/flag/en.png" alt="English" title="English"/></a></li>
				</ul>
				<p class="text-right text-info"><small><a href="mailto:support@soplanning.org"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'proposerTrad');?>
</a></small></p>
				<p class="text-right text-info"><small><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'install_intro');?>
</small></p>
			</div>
		</div>
<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
