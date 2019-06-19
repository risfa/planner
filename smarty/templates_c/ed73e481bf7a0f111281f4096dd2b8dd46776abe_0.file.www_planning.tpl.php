<?php
/* Smarty version 3.1.32, created on 2019-06-10 07:23:46
  from '/home/dapps/public_html/XENIEL/planner/templates/www_planning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfde962af1e02_77819927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed73e481bf7a0f111281f4096dd2b8dd46776abe' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/www_planning.tpl',
      1 => 1553826942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:www_header.tpl' => 1,
    'file:www_planning_filtre.tpl' => 1,
    'file:www_footer.tpl' => 1,
  ),
),false)) {
function content_5cfde962af1e02_77819927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:www_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
<?php $_smarty_tpl->_subTemplateRender("file:www_planning_filtre.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div class="row">
		<div class="col-md-12" id="thirdLayer">
			<div class="soplanning-box" id="divPlanning">
				<div id="top-scroll">
					<div id="top-scroll-inner">
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['fleches']->value == 1) {?>
					<div id="left-scroll">					
						<i class="fa fa-chevron-left fa-2x" id="left-button" aria-hidden="true"></i>
					</div>
				<?php }?>
				<div id="divConteneurPlanning" onscroll="document.cookie='xposMois=' + document.getElementById('divConteneurPlanning').scrollLeft;">
					<?php echo $_smarty_tpl->tpl_vars['htmlTableau']->value;?>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['fleches']->value == 1) {?>
					<div id="right-scroll">						
						<i class="fa fa-chevron-right fa-2x" id="right-button" aria-hidden="true"></i>
					</div>
				<?php }?>
				</div>
		</div>
	</div>
	<?php if (isset($_smarty_tpl->tpl_vars['htmlRecap']->value) && $_smarty_tpl->tpl_vars['htmlRecap']->value != '') {?>
	<div class="row noprint">
		<div class="col-md-12">
			<div class="soplanning-box" id="divPlanningRecap">
				<?php echo $_smarty_tpl->tpl_vars['htmlRecap']->value;?>

			</div>
		</div>
	</div>
	<?php }?>
</div>
<div id="divChoixDragNDrop" onMouseOut="masquerSousMenuDelai('divChoixDragNDrop');" onMouseOver="AnnuleMasquerSousMenu('divChoixDragNDrop');" onfocus="AnnuleMasquerSousMenu('divChoixDragNDrop')">
	<a href="javascript:windowPatienter();xajax_moveCasePeriode(idCaseEnCoursDeplacement, idCaseDestination, false, 'seule');undefined;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_deplacer');?>
</a>
	<br /><br />
	<div id="divLienDeplacementToutesTaches">
		<a href="javascript:windowPatienter();xajax_moveCasePeriode(idCaseEnCoursDeplacement, idCaseDestination, false, 'toutes');undefined;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_deplacer_toutestaches');?>
</a>
		<br /><br />
	</div>
	<a href="javascript:windowPatienter();xajax_moveCasePeriode(idCaseEnCoursDeplacement, idCaseDestination, true);undefined;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_copier');?>
</a>
	<br /><br />
	<a href="javascript:masquerSousMenu('divChoixDragNDrop');"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'planning_annuler');?>
</a>
</div>
<?php echo '<script'; ?>
>

Reloader.init(<?php echo @constant('CONFIG_REFRESH_TIMER');?>
);

<?php if (isset($_smarty_tpl->tpl_vars['direct_periode_id']->value)) {?>
	addEvent(window, 'load', function(){xajax_modifPeriode(<?php echo $_smarty_tpl->tpl_vars['direct_periode_id']->value;?>
)});
<?php }?>
function resizeDivConteneur()
{
	var b = $("#tabContenuPlanning");
	var pos = b.offset();
	var h = pos.top;
	var h2 = window.innerHeight;
	var h3 = h2 - h - 65;
	$('#divConteneurPlanning').css('max-height',h3);
		var largertab=$('#divConteneurPlanning').width();
	var largertab2=document.getElementById('tabContenuPlanning').offsetWidth + 18 + 'px';
	document.getElementById('divConteneurPlanning').scrollLeft = xscroll;
	document.getElementById('divConteneurPlanning').scrollTop = yscroll;
	$("#top-scroll").width(largertab);
	$("#top-scroll-inner").width(largertab2);
}
var js_choisirProjet = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_choisirProjet'));?>
';
var js_choisirUtilisateur = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_choisirUtilisateur'));?>
';
var js_choisirDateDebut = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_choisirDateDebut'));?>
';
var js_saisirFormatDate = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_saisirFormatDate'));?>
';
var js_dateFinInferieure = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_dateFinInferieure'));?>
';
var js_deposerCaseSurDate = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_deposerCaseSurDate'));?>
';
var js_deplacementOk = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_deplacementOk'));?>
';
var js_patienter = '<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'js_patienter'));?>
';
var idDrag;
var dragElementParent;
var oldDragBorder;
var displayMode = <?php echo json_encode($_smarty_tpl->tpl_vars['modeAffichage']->value);?>
;
var dateDebut = <?php echo json_encode($_smarty_tpl->tpl_vars['dateDebut']->value);?>
;
var dateFin = <?php echo json_encode($_smarty_tpl->tpl_vars['dateFin']->value);?>
;

	// Gestion du filtre Projet
		$("#filtreGroupeProjet").multiselect({
			selectAll:false,
			noUpdatePlaceholderText:true,
			nameSuffix: 'projet',
			desactivateUrl: 'process/planning.php?desactiverFiltreGroupeProjet=1',
			placeholder: '<i class="fa fa-book fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'taches_filtreProjets');?>
</span>',
			texts: {
				selectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetCocherTous');?>
',
				unselectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetDecocherTous');?>
',
				disableFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreProjetDesactiver');?>
',
				validateFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
',
				search : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search');?>
'
			},
		});
		$("#filtreGroupeProjet").show();
	// Gestion du filtre User
		$("#filtreUser").multiselect({
			selectAll:false,
			noUpdatePlaceholderText:true,
			nameSuffix: 'user',
			desactivateUrl: 'process/planning.php?desactiverFiltreUser=1',
			placeholder: '<i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i><span class="d-none d-md-inline-block">&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formChoixUser');?>
</span>',
			texts: {
				selectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserCocherTous');?>
',
				unselectAll    : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserDecocherTous');?>
',
				disableFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'formFiltreUserDesactiver');?>
',
				validateFilter : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit');?>
',
				search : '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search');?>
'
			},
		});
		$("#filtreUser").show();
	// Ajout des boutons de scroll de planning
	var e = $("#divConteneurPlanning").get(0);
	if (e.scrollWidth > e.clientWidth)
	{
		
		<?php if ($_smarty_tpl->tpl_vars['fleches']->value == 1) {?>
		
			$('#left-scroll').show();
			$('#right-scroll').show();
			$('#divConteneurPlanning').css({'margin-left':'30px','margin-right':'30px'});
			$('#top-scroll').css({'margin-left':'30px','margin-right':'30px'});
			$('#right-button').click(function() {
				$('#divConteneurPlanning').animate({
				scrollLeft: "+=600px"
				}, 300);
			});
			$('#left-button').click(function() {
				$('#divConteneurPlanning').animate({
				scrollLeft: "-=600px"
				}, 300);
			});
		
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['ascenceur']->value == 1) {?>
		
			$('#top-scroll').show();
			$('#top-scroll').scroll(function(){
				$('#divConteneurPlanning').scrollLeft($('#top-scroll').scrollLeft());
			});
			$('#divConteneurPlanning').scroll(function(){
				$('#top-scroll').scrollLeft($('#divConteneurPlanning').scrollLeft());
			});
		
		<?php }?>
		
	}
		
		<?php if ($_smarty_tpl->tpl_vars['baseligne']->value == "heures") {?>
		
			$('#divConteneurPlanning').attr('style','overflow:visible');
		
		<?php }?>		
		
		// Fixe les premières colonnes
		$("#tabContenuPlanning").tableHeadFixer({
			'left' : 1,
			'z-index' : 10,
		
		<?php if ($_smarty_tpl->tpl_vars['entetesflottantes']->value == 0) {?>
		
			'head' : false
		
		<?php }?>
		
		});
		
		// Entête flottantes
		<?php if ($_smarty_tpl->tpl_vars['entetesflottantes']->value == 1) {?>
		
		$(window).resize(function(){
			resizeDivConteneur();
		});
		
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['droitAjoutPeriode']->value) && $_smarty_tpl->tpl_vars['droitAjoutPeriode']->value == true) {?>
	
	// Affichage du formulaire période si clic sur case vide
	$('#tabContenuPlanning td.week,#tabContenuPlanning td.weekend,#tabContenuPlanning .cellProject').click(function(ev){
	ev.preventDefault();
	if ($(this).hasClass("cellProject"))
		{
		 cellClic(this.id,0);
		}else cellClic(this.id,1);
		return false;
	});
	
<?php }?>
	
	// Gestion du cookie de positionnement
	function writeCookie(displayMode){
		if (displayMode == 'mois'){
			document.cookie='yposMois=' + window.pageYOffset;
			document.cookie='xposMoisWin=' + window.pageXOffset;
		}else if (displayMode == 'jour'){
			document.cookie='yposJours=' + window.pageYOffset;
			document.cookie='xposJoursWin=' + window.pageXOffset;
		}
	}
	
	// Mémorisation scrolling
	<?php if (isset($_COOKIE['dateDebut'])) {?>
		var cookieDateDebut = '<?php echo $_COOKIE['dateDebut'];?>
';
	<?php } else { ?>
		var cookieDateDebut = 0;
	<?php }?>
	<?php if (isset($_COOKIE['dateFin'])) {?>
		var cookieDateFin = '<?php echo $_COOKIE['dateFin'];?>
';
	<?php } else { ?>
		var cookieDateFin = 0;
	<?php }?>
	
	if (dateDebut != cookieDateDebut || dateFin != cookieDateFin)  
	{
		document.cookie='dateDebut=' + dateDebut ;
		document.cookie='dateFin=' + dateFin ;
		document.cookie='xposMoisWin=0';
		document.cookie='xposMois=0';
		document.cookie='xposJoursWin=0';
		document.cookie='xposJours=0';
		document.cookie='yposMoisWin=0';
		document.cookie='yposMois=0';
		document.cookie='yposJoursWin=0';
		document.cookie='yposJours=0';
	}
	// Récuperation
	if (displayMode == 'mois')
	{
		
		<?php if (isset($_COOKIE['xposMois'])) {?>
			var xscroll = <?php echo $_COOKIE['xposMois'];?>
;
		<?php } else { ?>
			var xscroll = 0;
		<?php }?>
		<?php if (isset($_COOKIE['xposMoisWin'])) {?>
			var xscrollWin = <?php echo $_COOKIE['xposMoisWin'];?>
;
		<?php } else { ?>
			var xscrollWin = 0;
		<?php }?>
		<?php if (isset($_COOKIE['yposMois'])) {?>
			var yscroll = <?php echo $_COOKIE['yposMois'];?>
;
		<?php } else { ?>
			var yscroll = 0;
		<?php }?>
		
	}else if (displayMode == 'jour'){
		
		<?php if (isset($_COOKIE['xposJours'])) {?>
			var xscroll = <?php echo $_COOKIE['xposJours'];?>
;
		<?php } else { ?>
			var xscroll = 0;
		<?php }?>
		<?php if (isset($_COOKIE['xposJoursWin'])) {?>
			var xscrollWin = <?php echo $_COOKIE['xposJoursWin'];?>
;
		<?php } else { ?>
			var xscrollWin = 0;
		<?php }?>
		<?php if (isset($_COOKIE['yposJours'])) {?>
			var yscroll = <?php echo $_COOKIE['yposJours'];?>
;
		<?php } else { ?>
			var yscroll = 0;
		<?php }?>
		
	}
	resizeDivConteneur();
	window.onscroll = function() {writeCookie(displayMode)};
	$('#divConteneurPlanning').scroll(function(){
	document.cookie='xposMois=' + document.getElementById('divConteneurPlanning').scrollLeft;
	document.cookie='yposMois=' + document.getElementById('divConteneurPlanning').scrollTop;
	});
	
	// Onload
	jQuery(function() {
	<?php if ($_SESSION['isMobileOrTablet'] == 0) {?>
	
	// hack pour empecher fermeture du layer au click sur les boutons du calendrier1
	$("#ui-datepicker-div").click( function(event) {
		event.stopPropagation();
	});
	jQuery('#dropdownDateSelector .dropdown-menu').on({
	"click":function(e){
			e.stopPropagation();
		}
	});
	
	<?php }?>
	});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:www_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
