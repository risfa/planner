<?php
/* Smarty version 3.1.32, created on 2019-06-10 07:23:46
  from '/home/dapps/public_html/XENIEL/planner/templates/www_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfde962b819c3_48334442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dec983dcf829b0c47cf7098443aaf6f14ae75b8' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_header.tpl',
      1 => 1553826942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfde962b819c3_48334442 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="reply-to" content="support@soplanning.org" />
	<meta name="email" content="support@soplanning.org" />
	<meta name="Identifier-URL" content="http://www.soplanning.org" />
	<meta name="robots" content="noindex,follow" />
	<title><?php echo xss_protect(@constant('CONFIG_SOPLANNING_TITLE'));?>
</title>
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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/themes/<?php echo @constant('CONFIG_SOPLANNING_THEME');?>
?<?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-multiselect-2.4.1/jquery.multiselect.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/styles.css?<?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/mobile.css?<?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
" media="screen and (max-width: 1165px)" type="text/css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/print.css" media="print">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/select2-4.0.6/dist/css/select2.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/css/select2-bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/spectrum-1.8.0/spectrum.css" />
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/js/fonctions.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/jquery-multiselect-2.4.1/jquery.multiselect.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/tableheadfixer-1.0.1/tableHeadFixer.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/select2-4.0.6/dist/js/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/select2-4.0.6/dist/js/i18n/fr.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/assets/plugins/spectrum-1.8.0/spectrum.js"><?php echo '</script'; ?>
>
	<style>
	<?php if (@constant('CONFIG_SOPLANNING_LOGO') != '') {?>
		
		.week td {min-width:30px;}
		
	<?php }?>
	<?php if (@constant('CONFIG_PLANNING_LINE_HEIGHT') > 0 || @constant('CONFIG_PLANNING_COL_WIDTH') > 0 || @constant('CONFIG_PLANNING_COL_WIDTH_LARGE') > 0) {?>
		td.week, td.weekend, td.sumcell, #tdtotal, #total2 {
		<?php if (@constant('CONFIG_PLANNING_LINE_HEIGHT') > 0) {?>
			height:<?php echo @constant('CONFIG_PLANNING_LINE_HEIGHT');?>
px;
		<?php }?>
		<?php if ($_SESSION['dimensionCase'] == "reduit") {?>
			<?php if (@constant('CONFIG_PLANNING_COL_WIDTH') > 0) {?>
				min-width:<?php echo @constant('CONFIG_PLANNING_COL_WIDTH');?>
px;
			<?php }?>
		<?php } else { ?>
			<?php if (@constant('CONFIG_PLANNING_COL_WIDTH_LARGE') > 0) {?>
				min-width:<?php echo @constant('CONFIG_PLANNING_COL_WIDTH_LARGE');?>
px;
			<?php }?>
		<?php }?>
		}
	<?php }?>
	<?php if (@constant('CONFIG_PLANNING_CELL_FONTSIZE') > 0) {?>.cellHolidays,.cellProject{font-size:<?php echo @constant('CONFIG_PLANNING_CELL_FONTSIZE');?>
px;}
	<?php }?>
	</style>
</head>
<body>
<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
	<nav class="navbar navbar-expand-lg navbar-dark sticky-top flex-lg-nowrap bg-dark mb-2">
		<?php if (@constant('CONFIG_SOPLANNING_LOGO') != '') {?>
			<a class="navbar-brand navbar-brand-logo mr-auto d-inline-block align-items-center" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/upload/logo/<?php echo @constant('CONFIG_SOPLANNING_LOGO');?>
" alt='logo' class="mr-3" />
		<?php } else { ?>
			<a class="navbar-brand mr-auto" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/">
		<?php }?>
			<span id="soplanning_title"><?php echo xss_protect(@constant('CONFIG_SOPLANNING_TITLE'));?>
&nbsp;<small><?php echo $_smarty_tpl->tpl_vars['infoVersion']->value;?>
</small></span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-3 mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/planning.php" id="menuPlanning" role="button">
					<i class="fa fa-calendar fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuPlanning');?>

				</a>
				<div class="dropdown-menu mt-0" aria-labelledby="menuPlanning">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/planning.php" class="dropdown-item">
					<i class="fa fa-calendar fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuAfficherPlanning');?>

				</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/taches.php" class="dropdown-item">
					<i class="fa fa-list fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuAfficherTaches');?>

				</a>
				<div class="dropdown-divider"></div>
				<?php if (!in_array("tasks_readonly",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
				<a href="javascript:Reloader.stopRefresh();xajax_ajoutPeriode();undefined;" class="dropdown-item">
					<i class="fa fa-calendar-plus-o fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuAjouterPeriode');?>

				</a>
				<?php }?>
			</div>
			</li>	
			<?php if (in_array("projects_manage_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || in_array("projects_manage_own",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
				<li class="nav-item dropdown">
					<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/projets.php" id="menuProjet" role="button">
						<i class="fa fa-book fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuProjets');?>

					</a>
					<div class="dropdown-menu mt-0" aria-labelledby="menuProjet">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/projets.php" class="dropdown-item">
							<i class="fa fa-book fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuListeProjets');?>

						</a>
						<?php if (in_array("projectgroups_manage_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/groupe_list.php" class="dropdown-item">
							<i class="fa fa-folder-o fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuListeGroupes');?>

						</a>
						<?php }?>
						<div class="dropdown-divider"></div>
						<a href="javascript:Reloader.stopRefresh();xajax_ajoutProjet();undefined;" class="dropdown-item">
							<i class="fa fa-bookmark fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuAjouterProjet');?>

						</a>
					</div>
				 </li>
			<?php }?>
			<?php if (in_array("users_manage_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
				<li class="divider-vertical"></li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php" id="menuUser" role="button">
						<i class="fa fa-users fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuUsers');?>

					</a>
					<div class="dropdown-menu mt-0" aria-labelledby="menuUser">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_list.php" class="dropdown-item">
							<i class="fa fa-address-card-o fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuGestionUsers');?>

						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/user_groupes.php" class="dropdown-item">
							<i class="fa fa-users fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuGroupesUsers');?>

						</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:xajax_modifUser();undefined;" class="dropdown-item">
							<i class="fa fa-user-plus fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuCreerUser');?>

						</a>
					</div>
				</li>
			<?php }?>
			<?php if (in_array("stats_users",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || in_array("stats_projects",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || in_array("audit_restore_own",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || in_array("audit_restore",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>	
				<li class="divider-vertical"></li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/stats_users.php" id="menuStats" role="button" data-toggle="dropdown" aria-haspopup="true" data-target="#menuStatsToggle" aria-expanded="true">
						<i class="fa fa-bar-chart fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_stats');?>

					</a>
					<div class="dropdown-menu mt-0" id="menuStatsToggle" aria-labelledby="menuStats">
						<?php if (in_array("stats_users",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/stats_users.php" class="dropdown-item">
								<i class="fa fa-bar-chart fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_stats_users');?>

							</a>
						<?php }?>
						<?php if (in_array("stats_projects",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/stats_projects.php" class="dropdown-item">
								<i class="fa fa-bar-chart fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'droits_stats_projects');?>

							</a>
						<?php }?>
						<?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT') == 1 && in_array("audit_restore",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
							<div class="dropdown-divider"></div>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/audit.php"  class="dropdown-item">
								<i class="fa fa-user-secret fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuAudit');?>

							</a>
						<?php }?>
						<?php if (@constant('CONFIG_SOPLANNING_OPTION_AUDIT') == 1 && in_array("audit_restore_own",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
							<div class="dropdown-divider"></div>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/audit.php" class="dropdown-item">
								<i class="fa fa-user-secret fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuAuditCorbeille');?>

							</a>
						<?php }?>	
					</div>
				</li>	
			<?php }?>	
			<?php if (in_array("parameters_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || in_array("lieux_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || in_array("ressources_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
				<li class="divider-vertical"></li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/options.php" data-target="#menuOptionsToggle" id="menuOptions" role="button">
						<i class="fa fa-cogs fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuOptions');?>

					</a>
					<div class="dropdown-menu mt-0" id="menuOptionsToggle" aria-labelledby="menuOptions">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/options.php" class="dropdown-item">
							<i class="fa fa-cogs fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuOptions');?>

						</a>
						<div class="dropdown-divider"></div>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/feries.php" class="dropdown-item">
							<i class="fa fa-plane fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuFeries');?>

						</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/status.php" class="dropdown-item">
							<i class="fa fa-tags fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuStatus');?>

						</a>
						<?php if (@constant('CONFIG_SOPLANNING_OPTION_LIEUX') == 1 && in_array("lieux_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/lieux.php" class="dropdown-item">
								<i class="fa fa-map-marker fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuLieux');?>

							</a>			
						<?php }?>
						<?php if (@constant('CONFIG_SOPLANNING_OPTION_RESSOURCES') == 1 && in_array("ressources_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits'])) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/ressources.php" class="dropdown-item">
								<i class="fa fa-plug fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menuRessources');?>

							</a>				
						<?php }?>
					</div>
				 </li>	
			<?php }?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['lienAide']->value;?>
" data-target="#"><i title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menu_aide');?>
" class="fa fa-question-circle fa-lg fa-fw tooltipster" aria-hidden="true"></i></a>
			</li>
		</ul> 
		<ul class="navbar-nav ml-auto">
			<?php if ($_smarty_tpl->tpl_vars['user']->value['user_id'] == 'publicspl') {?>
				<li class="nav-item">
					<a class="nav-link" href="#" data-target="#" style="color:white">
						<i class="fa fa-user-o fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'accesPublicUsername');?>

					</a>
				</li>
			<?php } else { ?>
				<li class="nav-item">
					<a class="nav-link navbar-right tooltipster" href="javascript:xajax_modifProfil();undefined;" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menu_modifier_profil');?>
" data-target="#">
						<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['nom'];?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
)
					</a>
				</li>
			<?php }?>
			<li class="nav-item">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE']->value;?>
/process/login.php?action=logout&language=<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="nav-link tooltipster navbar-right" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menu_deconnecter');?>
">
					<i class="fa fa-lg fa-sign-out" aria-hidden="true" style="color:red"></i>
				</a>
			</li>
		</ul>
		</div>
	</nav>
<?php }
if (isset($_smarty_tpl->tpl_vars['smartyData']->value['message']) || isset($_smarty_tpl->tpl_vars['smartyData']->value['erreur'])) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['smartyData']->value['message'])) {?>
		<?php $_smarty_tpl->_assignInScope('messageFinal', formatMessage($_smarty_tpl->tpl_vars['smartyData']->value['message']));?>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['smartyData']->value['erreur'])) {?>
		<?php $_smarty_tpl->_assignInScope('messageErreur', formatMessage($_smarty_tpl->tpl_vars['smartyData']->value['erreur']));?>
	<?php }?>
	<div class="container-fluid">
		<div id="divMessage" class="alert <?php if ($_smarty_tpl->tpl_vars['smartyData']->value['message'] == 'changeNotOK' || isset($_smarty_tpl->tpl_vars['messageErreur']->value)) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
			<?php if (isset($_smarty_tpl->tpl_vars['messageErreur']->value)) {?>
				<i class="fa fa-lg fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['messageErreur']->value;?>

			<?php } else { ?>
				<i class="fa fa-lg fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['messageFinal']->value;?>

			<?php }?>
		</div>
	</div>
<?php }
}
}
