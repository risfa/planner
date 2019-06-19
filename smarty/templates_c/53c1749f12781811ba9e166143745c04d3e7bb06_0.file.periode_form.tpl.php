<?php
/* Smarty version 3.1.32, created on 2019-06-10 12:32:50
  from '/home/dapps/public_html/XENIEL/planner/templates/periode_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cfdeb829bc513_05981817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c1749f12781811ba9e166143745c04d3e7bb06' => 
    array (
      0 => '/home/dapps/public_html/XENIEL/planner/templates/periode_form.tpl',
      1 => 1553826942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdeb829bc513_05981817 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-horizontal" method="POST" target="_blank" id="periodForm">
	<input type="hidden" id="periode_id" name="periode_id" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value['periode_id'];?>
" />
	<input type="hidden" id="saved" name="saved" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value['saved'];?>
" />
	<div class="container-fluid">
	<div class="form-group row col-md-12">
		<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_titre');?>
 :</label>
		<div class="col-md-10">
			<input type="text" class="form-control" name="titre" id="titre" maxlength="2000" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['periode']->value['titre']);?>
" onFocus="xajax_autocompleteTitreTache($('#projet_id').val());"   data-provide="typeahead" tabindex="21" />
		</div>
	</div>
	<div class="form-group row col-md-12">
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_projet');?>
 :</label>
			<div class="col-md-4">
				<select name="projet_id" id="projet_id" class="form-control <?php if (!$_SESSION['isMobileOrTablet']) {?>select2<?php }?>" tabindex="1" style="width:100%">
					<option value="">- - - - - - - - - - -</option>
					<?php $_smarty_tpl->_assignInScope('groupeCourant', "-1");?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProjets']->value, 'projetTmp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['projetTmp']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['groupeCourant']->value != $_smarty_tpl->tpl_vars['projetTmp']->value['groupe_id']) {?>
							<?php $_smarty_tpl->_assignInScope('groupeCourant', $_smarty_tpl->tpl_vars['projetTmp']->value['groupe_id']);?>
							<?php if ($_smarty_tpl->tpl_vars['projetTmp']->value['groupe_id'] == '') {?>
								<?php $_smarty_tpl->_assignInScope('nomgroupe', $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'projet_liste_sansGroupes'));?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('nomgroupe', $_smarty_tpl->tpl_vars['projetTmp']->value['nom_groupe']);?>
							<?php }?>
							<optgroup label="<?php echo $_smarty_tpl->tpl_vars['nomgroupe']->value;?>
"></optgroup>
						<?php }?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['projetTmp']->value['projet_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['periode']->value['projet_id'] == $_smarty_tpl->tpl_vars['projetTmp']->value['projet_id']) {?>selected="selected"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['projet_id_choisi']->value) && $_smarty_tpl->tpl_vars['projet_id_choisi']->value == $_smarty_tpl->tpl_vars['projetTmp']->value['projet_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['projetTmp']->value['nom'];?>
 (<?php echo $_smarty_tpl->tpl_vars['projetTmp']->value['projet_id'];?>
) <?php if ($_smarty_tpl->tpl_vars['projetTmp']->value['livraison'] != '') {?> - S<?php echo $_smarty_tpl->tpl_vars['projetTmp']->value['livraison'];
}?></option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_user');?>
 :</label>
			<div class="col-md-4">
				<select multiple="multiple" name="user_id" id="user_id" class="form-control <?php if ($_SESSION['isMobileOrTablet'] != 1) {?>select2<?php }?>" tabindex="2" style="width:100%">
					<?php $_smarty_tpl->_assignInScope('groupeTemp', '');?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeUsers']->value, 'userCourant', false, NULL, 'loopUsers', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userCourant']->value) {
?>
						<?php if ($_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id'] != $_smarty_tpl->tpl_vars['groupeTemp']->value) {?>
							<optgroup label="<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['groupe_nom'];?>
">
						<?php }?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['userCourant']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['periode']->value['user_id'] == $_smarty_tpl->tpl_vars['userCourant']->value['user_id']) {?>selected="selected"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['user_id_choisi']->value) && $_smarty_tpl->tpl_vars['user_id_choisi']->value == $_smarty_tpl->tpl_vars['userCourant']->value['user_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['userCourant']->value['nom'];?>
 - <?php echo $_smarty_tpl->tpl_vars['userCourant']->value['user_id'];?>
</option>
						<?php if ($_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id'] != $_smarty_tpl->tpl_vars['groupeTemp']->value) {?>
							</optgroup>
						<?php }?>
						<?php $_smarty_tpl->_assignInScope('groupeTemp', $_smarty_tpl->tpl_vars['userCourant']->value['user_groupe_id']);?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['estFilleOuParente']->value)) {?>
		<div class="row col-md-12">
			<div class="col-md-8 offset-md-2">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="appliquerATous" checked="checked" value="1"><label class="form-check-label" for="appliquerATous"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_appliquerATous');?>
</label>
			</div>
			</div>
		</div>
		<?php }?>
		<div class='col-md-12'><hr /></div>
		<div class="form-group row col-md-12">
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_debut');?>
 :</label>
			<div class="col-md-4">
				<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
					<input type="date" class="form-control" name="date_debut" id="date_debut" maxlength="10" value="<?php echo forceISODateFormat($_smarty_tpl->tpl_vars['periode']->value['date_debut']);?>
" tabindex="4" />
				<?php } else { ?>
					<input type="text" class="form-control datepicker" name="date_debut" id="date_debut" maxlength="10" value="<?php echo sqldate2userdate($_smarty_tpl->tpl_vars['periode']->value['date_debut']);?>
" tabindex="4" />
				<?php }?>
			</div>
		</div>
		<div class="form-group row col-md-12">
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_fin');?>
 :</label>
			<div class="col-md-10 col-form-label">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="radioChoixFin" id="radioChoixFinDate" value="" <?php if ($_smarty_tpl->tpl_vars['periode']->value['duree_details'] == '') {?>checked="checked"<?php }?> onChange="$('#divFinChoixDate').removeClass('d-none');$('#divFinChoixDuree').addClass('d-none');" tabindex="5">
				<label class="form-check-label" for="radioChoixFinDate"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_finChoixDate');?>
</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="radioChoixFin" id="radioChoixFinDuree" value="" <?php if ($_smarty_tpl->tpl_vars['periode']->value['duree_details'] != '') {?>checked="checked"<?php }?> onChange="$('#divFinChoixDuree').removeClass('d-none');$('#divFinChoixDate').addClass('d-none');" tabindex="6">
				<label class="form-check-label" for="radioChoixFinDuree"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_finChoixDuree');?>
</label>
			</div>
			</div>
			<div class="offset-md-2 col-md-10 form-inline" id="divFinChoixDate">
				<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
					<input type="date" class="form-control datepicker" name="date_fin" id="date_fin" maxlength="10" value="<?php echo forceISODateFormat($_smarty_tpl->tpl_vars['periode']->value['date_fin']);?>
" onFocus="remplirDateFinPeriode();videChampsFinTache(this.id);" onChange="videChampsFinTache(this.id);" tabindex="7" />
				<?php } else { ?>
					<input type="text" class="form-control datepicker" name="date_fin" id="date_fin" maxlength="10" value="<?php echo sqldate2userdate($_smarty_tpl->tpl_vars['periode']->value['date_fin']);?>
" onFocus="remplirDateFinPeriode();videChampsFinTache(this.id);" onChange="videChampsFinTache(this.id);" tabindex="7" />
				<?php }?>
				&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_ouNBJours');?>
 :&nbsp;
				<input type="number" class="form-control col-md-1" name="nb_jours" id="nb_jours" size="2"  onChange="videChampsFinTache(this.id);" tabindex="10" />
			<?php if ($_smarty_tpl->tpl_vars['periode']->value['periode_id'] != 0 && $_smarty_tpl->tpl_vars['periode']->value['date_fin'] != '') {?>
				<label class="checkbox-inline" ><input type="checkbox" id="conserver_duree" name="conserver_duree" value="1" onClick="videChampsFinTache('');" tabindex="11" /><?php echo sprintf($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_conserverDuree'),$_smarty_tpl->tpl_vars['nbJours']->value);?>
</label>
			<?php } else { ?>
				<input type="hidden" id="conserver_duree" value="" />
			<?php }?>
			</div>
		</div>
			<div class="row col-md-12 form-inline <?php if ($_smarty_tpl->tpl_vars['periode']->value['duree_details'] == '') {?>d-none<?php }?>" id="divFinChoixDuree">
				<div class="offset-md-2 col-md-3">
					<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_ouNBHeures');?>
 <span title="<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_FormatDuree'));?>
" class="cursor-help tooltipster">&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i></span> :
					<input type="time" class="form-control" name="duree" id="duree" size="3" value="<?php if ($_smarty_tpl->tpl_vars['periode']->value['duree_details'] == 'duree') {
echo sqltime2usertime($_smarty_tpl->tpl_vars['periode']->value['duree']);
}?>" onFocus="if(this.value == '')this.value='<?php echo usertime2sqltime(@constant('CONFIG_DURATION_DAY'),"short");?>
';" onChange="videChampsFinTache(this.id);" tabindex="12" />
				</div>
				<div class="col-md-7">
					<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_heureDebut');?>
 <span title="<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_FormatDuree'));?>
" class="cursor-help tooltipster">&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i></span> :
					<input type="time" class="form-control" id="heure_debut" id="heure_debut" size="3"  value="<?php if (isset($_smarty_tpl->tpl_vars['periode']->value['duree_details_heure_debut'])) {
echo sqltime2usertime($_smarty_tpl->tpl_vars['periode']->value['duree_details_heure_debut']);
}?>" onChange="videChampsFinTache(this.id);" tabindex="13" />
					<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_heureFin');?>
 <span title="<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_FormatDuree'));?>
" class="cursor-help tooltipster">&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i></span> :
					<input type="time" class="form-control" id="heure_fin" size="3" value="<?php if (isset($_smarty_tpl->tpl_vars['periode']->value['duree_details_heure_fin'])) {
echo sqltime2usertime($_smarty_tpl->tpl_vars['periode']->value['duree_details_heure_fin']);
}?>" onChange="videChampsFinTache(this.id);" tabindex="14" />
				</div>
				<div class="offset-md-5 col-md-6 form-inline">				
					<div class="form-check form-check-inline">
						&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="checkbox" name="matin" id="matin" onChange="videChampsFinTache(this.id);" <?php if ($_smarty_tpl->tpl_vars['periode']->value['duree_details'] == 'AM') {?>checked="checked"<?php }?> tabindex="15">
						<label class="form-check-label" for="matin"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_matin');?>
 (<?php echo @constant('CONFIG_DURATION_AM');
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
)</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="apresmidi" id="apresmidi" onChange="videChampsFinTache(this.id);" <?php if ($_smarty_tpl->tpl_vars['periode']->value['duree_details'] == 'PM') {?>checked="checked"<?php }?> tabindex="16">
						<label class="form-check-label" for="apresmidi"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_apresmidi');?>
 (<?php echo @constant('CONFIG_DURATION_PM');
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tab_h');?>
)</label>
					</div>
				</div>
			</div>
		<div class='col-md-12'><hr /></div>
		<div class="form-group row col-md-12">
			<?php if (!isset($_smarty_tpl->tpl_vars['estFilleOuParente']->value)) {?>
				<input type="hidden" id="appliquerATous" value="0">
				<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter');?>
 :</label>
				<div class="col-md-4">
					<select name="repetition" id="repetition" onChange="
						if(this.value=='jour')
						{
							$('#divOptionsRepetitionJour').removeClass('d-none');
							$('#divExceptionRepetition').removeClass('d-none');
						}else{
							$('#divOptionsRepetitionJour').addClass('d-none');
							$('#divOptionsjourderepetition').addClass('d-none');
							$('#divOptionsRepetitionJS').addClass('d-none');
						}
						if(this.value=='semaine')
						{
							$('#divOptionsRepetitionJS').removeClass('d-none');
							$('#divOptionsRepetitionSemaine').removeClass('d-none');
							$('#divExceptionRepetition').removeClass('d-none');
						}else{
							$('#divOptionsRepetitionSemaine').addClass('d-none');
							$('#divOptionsjourderepetition').addClass('d-none');
							$('#divOptionsRepetitionJS').addClass('d-none');
						}
						if(this.value=='mois'){
							$('#divOptionsRepetitionMois').removeClass('d-none');
							$('#divOptionsjourderepetition').removeClass('d-none');
							$('#divExceptionRepetition').removeClass('d-none');
						}else{
							$('#divOptionsRepetitionMois').addClass('d-none');
						}
						if(this.value==''){
							$('#divOptionsRepetitionJour').addClass('d-none');
							$('#divOptionsRepetitionSemaine').addClass('d-none');
							$('#divOptionsRepetitionMois').addClass('d-none');
							$('#divExceptionRepetition').addClass('d-none');
							$('#divOptionsjourderepetition').addClass('d-none');
							$('#divOptionsRepetitionJS').addClass('d-none');
						}
						" class="form-control" tabindex="17">
							<option value=""><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_pasderepetition');?>
</option>
							<option value="jour"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_jour');?>
</option>
							<option value="semaine"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_semaine');?>
</option>
							<option value="mois"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_mois');?>
</option>
					</select>
				</div>
				<div class="col-md-6 form-row form-inline">
						<div id="divOptionsRepetitionJour" class="d-none form-group form-inline" tabindex="18"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_tousles');?>
&nbsp;
							<select name='nbRepetitionJour' id='nbRepetitionJour' class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							</select>
							&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_jour');?>
&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_jusque');?>
&nbsp;
							<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
								<input type="date" class="form-control" id="dateFinRepetitionJour" value="" size="11" maxlength="10" onFocus="remplirDateRepetition(this.id);" tabindex="18">
							<?php } else { ?>
								<input type="text" class="form-control datepicker" id="dateFinRepetitionJour" value="" size="11" maxlength="10" onFocus="remplirDateRepetition(this.id);" tabindex="18">
							<?php }?>
						</div>
						<div id="divOptionsRepetitionSemaine" class="d-none form-group form-inline" tabindex="19">
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_tousles');?>
&nbsp;
							<select name='nbRepetitionSemaine' id='nbRepetitionSemaine' class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							</select>
							&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_semaine');?>
&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_jusque');?>
&nbsp;
							<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
								<input type="date" class="form-control" id="dateFinRepetitionSemaine" value="" size="11" maxlength="10" onFocus="remplirDateRepetition(this.id);" tabindex="18">
							<?php } else { ?>
								<input type="text" class="form-control datepicker" id="dateFinRepetitionSemaine" value="" size="11" maxlength="10" onFocus="remplirDateRepetition(this.id);" tabindex="18">
							<?php }?>
						</div>
						<div id="divOptionsRepetitionJS" class="d-none form-group form-inline">
							<label class="col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_jourderepetition');?>
 :&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jourSemaine" id="jourSemaine1" value="1" checked="checked">
								<label class="form-check-label" for="jourSemaine1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'initial_day_1');?>
</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jourSemaine" id="jourSemaine2" value="2">
								<label class="form-check-label" for="jourSemaine2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'initial_day_2');?>
</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jourSemaine" id="jourSemaine3" value="3">
								<label class="form-check-label" for="jourSemaine3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'initial_day_3');?>
</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jourSemaine" id="jourSemaine4" value="4">
								<label class="form-check-label" for="jourSemaine4"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'initial_day_4');?>
</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jourSemaine" id="jourSemaine5" value="5">
								<label class="form-check-label" for="jourSemaine5"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'initial_day_5');?>
</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jourSemaine" id="jourSemaine6" value="6">
								<label class="form-check-label" for="jourSemaine6"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'initial_day_6');?>
</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jourSemaine" id="jourSemaine0" value="0">
								<label class="form-check-label" for="jourSemaine0"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'initial_day_0');?>
</label>
							</div>
						</div>
						<div id="divOptionsRepetitionMois" class="d-none form-group form-inline" tabindex="18">
							<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_tousles');?>
&nbsp;
							<select name='nbRepetitionMois' id='nbRepetitionMois' class="form-control">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							</select>
							&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_mois');?>
&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_jusque');?>
&nbsp;
							<?php if ($_SESSION['isMobileOrTablet'] == 1) {?>
								<input type="date" class="form-control" id="dateFinRepetitionMois" value="" size="11" maxlength="10" onFocus="remplirDateRepetition(this.id);" tabindex="18">
							<?php } else { ?>
								<input type="text" class="form-control datepicker" id="dateFinRepetitionMois" value="" size="11" maxlength="10" onFocus="remplirDateRepetition(this.id);" tabindex="18">
							<?php }?>
							</div>
							<div id="divOptionsjourderepetition" class="d-none form-group form-inline">
							<label class="col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_jourderepetition');?>
 :&nbsp;&nbsp;&nbsp;</label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="radioChoixJourRepetition" id="radioChoixJourRepetition" value="0" checked="checked">
								<label class="form-check-label" for="radioChoixJourRepetition"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_jourderepetition_jourmois');?>
</label>
							</div>
							</div>	
							<div id="divExceptionRepetition" class="form-group form-inline d-none" tabindex="19">
							<label class="col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_exception_siferie');?>
 :&nbsp;&nbsp;&nbsp;</label>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="exceptionRepetition" id="exceptionRepetition1" value="1" checked="checked">
								<label class="form-check-label" for="exceptionRepetition1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_exception_decaler');?>
</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="exceptionRepetition" id="exceptionRepetition2" value="2">
								<label class="form-check-label" for="exceptionRepetition2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_exception_pasajout');?>
</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="exceptionRepetition" id="exceptionRepetition3" value="3">
								<label class="form-check-label" for="exceptionRepetition3"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter_exception_ajout');?>
</label>
							</div>
						</div>
					</div>
			<?php } else { ?>
					<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_repeter');?>
 :</label>
					<div class="col-md-10 col-form-label">
						<b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_recurrente');
echo sqldate2userdate($_smarty_tpl->tpl_vars['prochaineOccurence']->value);?>
</b>
					</div>
					<input type="hidden" name="repetition" id="repetition" value="" />
					<input type="hidden" name="dateFinRepetitionJour" id="dateFinRepetitionJour" value="" />
					<input type="hidden" name="dateFinRepetitionSemaine" id="dateFinRepetitionSemaine" value="" />
					<input type="hidden" name="dateFinRepetitionMois" id="dateFinRepetitionMois" value="" />
					<input type="hidden" name="nbRepetitionJour" id="nbRepetitionJour" value="" />
					<input type="hidden" name="nbRepetitionSemaine" id="nbRepetitionSemaine" value="" />
					<input type="hidden" name="nbRepetitionMois" id="nbRepetitionMois" value="" />
					<input type="hidden" name="jourSemaine" id="jourSemaine" value="" />
			<?php }?>
		</div>
		<div class='col-md-12'><hr /></div>
		<div class="form-group row col-md-12">
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_statut');?>
 <?php echo $_smarty_tpl->tpl_vars['defaut_status']->value;?>
:</label>
			<div class="col-md-4">
				<select name="statut_tache" id="statut_tache" class="form-control" tabindex="19">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeStatus']->value, 'status');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['status']->value['status_id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['periode']->value['statut_tache']) && $_smarty_tpl->tpl_vars['periode']->value['statut_tache'] == $_smarty_tpl->tpl_vars['status']->value['status_id']) || (!isset($_smarty_tpl->tpl_vars['periode']->value['statut_tache']) && $_smarty_tpl->tpl_vars['defaut_status']->value == $_smarty_tpl->tpl_vars['status']->value['status_id'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['nom'];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_livrable');?>
 :</label>
			<div class="col-md-4" >
				<select name="livrable" id="livrable" class="form-control" tabindex="20">
					<option value="oui" <?php if ($_smarty_tpl->tpl_vars['periode']->value['livrable'] == "oui") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'oui');?>
</option>
					<option value="non" <?php if ($_smarty_tpl->tpl_vars['periode']->value['livrable'] == "non") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'non');?>
</option>
				</select>
			</div>
		</div>
		<div class="form-group row col-md-12">
		<?php if (@constant('CONFIG_SOPLANNING_OPTION_LIEUX') == 1) {?>
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_lieu');?>
 :</label>
				<div class="col-md-4">
					<select name="lieu" id="lieu" class="form-control <?php if ($_SESSION['isMobileOrTablet'] != 1) {?>select2<?php }?>" tabindex="19" style="width:100%" >
						<option value=""></option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeLieux']->value, 'lieuTmp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lieuTmp']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['lieuTmp']->value['lieu_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['periode']->value['lieu'] == $_smarty_tpl->tpl_vars['lieuTmp']->value['lieu_id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['lieuTmp']->value['nom'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
		<?php }?>
		<?php if (@constant('CONFIG_SOPLANNING_OPTION_RESSOURCES') == 1) {?>
			<div class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_ressource');?>
 :</div>
				<div class="col-md-4">
					<select name="ressource" id="ressource" class="form-control <?php if ($_SESSION['isMobileOrTablet'] != 1) {?>select2<?php }?>" tabindex="20" style="width:100%" >
						<option value=""></option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeRessources']->value, 'ressourceTmp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ressourceTmp']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['ressourceTmp']->value['ressource_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['periode']->value['ressource'] == $_smarty_tpl->tpl_vars['ressourceTmp']->value['ressource_id']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ressourceTmp']->value['nom'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
		<?php }?>
		<?php if (@constant('CONFIG_SOPLANNING_OPTION_LIEUX') == 0) {?>
		<input type="hidden" name="lieu" id="lieu" value="">
		<?php }?>
		<?php if (@constant('CONFIG_SOPLANNING_OPTION_RESSOURCES') == 0) {?>
		<input type="hidden" name="ressource" id="ressource" value="">
		<?php }?>
		</div>
		<div class='col-md-12'><hr /></div>

		<div class="form-group row col-md-12">
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_lien');?>
 :</label>
			<div class="col-md-10 form-inline">
				<input <?php if ($_SESSION['isMobileOrTablet'] == 1) {?>type="url"<?php } else { ?>type="text"<?php }?> class="form-control col-md-11<?php if ($_smarty_tpl->tpl_vars['periode']->value['lien'] != '') {?> input-withicon<?php }?>" name="lien" id="lien" maxlength="2000" value="<?php echo $_smarty_tpl->tpl_vars['periode']->value['lien'];?>
" tabindex="22" />
				<?php if ($_smarty_tpl->tpl_vars['periode']->value['lien'] != '') {?>
					<span title='<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_gotoLien'));?>
' onclick="window.open('<?php if ((strpos($_smarty_tpl->tpl_vars['periode']->value['lien'],"http") !== FALSE || strpos($_smarty_tpl->tpl_vars['periode']->value['lien'],"ftp") !== FALSE) && strpos($_smarty_tpl->tpl_vars['periode']->value['lien'],"\\") !== FALSE) {?>http://<?php }
echo $_smarty_tpl->tpl_vars['periode']->value['lien'];?>
', '_blank')" target="_blank" class="btn btn-default tooltipster ml-1"><i class="fa fa-share-square-o" aria-hidden="true"></i></span>
				<?php }?>
			</div>
		</div>
		<div class="form-group row col-md-12">
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_commentaires');?>
 :</label>
			<div class="col-md-10">
				<textarea class="form-control" rows="1" id="notes" name="notes" tabindex="23" ><?php echo xss_protect($_smarty_tpl->tpl_vars['periode']->value['notes_xajax']);?>
</textarea>
			</div>
		</div>
		<div class="form-group row col-md-12">
			<label class="col-md-2 col-form-label"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_custom');?>
 :</label>
			<div class="col-md-10">
				<input type="text" class="form-control float-left input-withicon" name="custom" id="custom" maxlength="255" value="<?php echo xss_protect($_smarty_tpl->tpl_vars['periode']->value['custom']);?>
" tabindex="23" />
				<div title='<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_custom_aide'));?>
' class="glyphicon glyphicon-question-sign cursor-help small tooltipster ml-2"></div>
			</div>
		</div>
		<?php if (!isset($_smarty_tpl->tpl_vars['projet']->value) || in_array("projects_manage_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || (in_array("tasks_modify_own_project",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) && isset($_smarty_tpl->tpl_vars['projet']->value) && $_smarty_tpl->tpl_vars['user']->value['user_id'] == $_smarty_tpl->tpl_vars['projet']->value['createur_id']) || in_array("tasks_modify_all",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) || (in_array("tasks_modify_own_task",$_smarty_tpl->tpl_vars['user']->value['tabDroits']) && $_smarty_tpl->tpl_vars['periode']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value['user_id'])) {?>
			<?php $_smarty_tpl->_assignInScope('buttonSubmitTache', 1);?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('buttonSubmitTache', 0);?>
		<?php }?>

		<div id="divSubmitPeriode" class="form-group row col-md-12 justify-content-end <?php if ($_smarty_tpl->tpl_vars['buttonSubmitTache']->value == 0) {?>d-none<?php }?>">
			<?php if (@constant('CONFIG_SMTP_HOST') != '') {?>
				<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="notif_email" checked="checked">
						<label class="form-check-label" for="notif_email" style="font-weight:normal" class="padding-right-25"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_notif_email');?>
</label>
				</div>
			<?php } else { ?>
				<input type="hidden" id="notif_email" value="false">
			<?php }?>
			<div class="btn-group" role="group">
				<?php if ($_smarty_tpl->tpl_vars['audit_id']->value != '') {?>
				<a href="javascript:xajax_modifAudit('<?php echo $_smarty_tpl->tpl_vars['audit_id']->value;?>
');undefined;" class="btn btn-default" ><i class="fa fa-history fa-lg fa-fw" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'audit_restaurer');?>
</a>
				<?php }?>
				<button type="button" id="butSubmitPeriode" class="btn btn-primary" tabindex="24" onClick="$('#divPatienter').removeClass('d-none');this.disabled=true;users_ids=getSelectValue('user_id');xajax_submitFormPeriode('<?php echo $_smarty_tpl->tpl_vars['periode']->value['periode_id'];?>
', $('#projet_id').val(), users_ids, $('#date_debut').val(), $('#conserver_duree').is(':checked'), $('#date_fin').val(), $('#nb_jours').val(), $('#duree').val(), $('#heure_debut').val(), $('#heure_fin').val(), $('#matin').is(':checked'), $('#apresmidi').is(':checked'), $('#repetition option:selected').val(), $('#dateFinRepetitionJour').val(),$('#dateFinRepetitionSemaine').val(),$('#dateFinRepetitionMois').val(), $('#nbRepetitionJour option:selected').val(),$('#nbRepetitionSemaine option:selected').val(),$('#nbRepetitionMois option:selected').val(),getRadioValue('jourSemaine'),getRadioValue('exceptionRepetition'),$('#appliquerATous').is(':checked'), $('#statut_tache').val(),$('#lieu option:selected').val(), $('#ressource option:selected').val(), $('#livrable').val(), $('#titre').val(), $('#notes').val(), $('#lien').val(), $('#custom').val(), $('#notif_email').is(':checked'));"><?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_valider'));?>
</button>

				<?php if ($_smarty_tpl->tpl_vars['periode']->value['periode_id'] != 0) {?>
					<button type="button" class="btn btn-default" onClick="if(confirm('<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_dupliquer'));?>
 ?'))xajax_ajoutPeriode('', '', <?php echo $_smarty_tpl->tpl_vars['periode']->value['periode_id'];?>
);"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_dupliquer');?>
</button>
					<button type="button" class="btn btn-warning" onClick="if(confirm('<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_confirmSuppr'));?>
'))xajax_supprimerPeriode(<?php echo $_smarty_tpl->tpl_vars['periode']->value['periode_id'];?>
, false, $('#notif_email').is(':checked'));"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_supprimer');?>
</button>
					<?php if (isset($_smarty_tpl->tpl_vars['estFilleOuParente']->value)) {?>
						<button type="button" class="btn btn-default" onClick="if(confirm('<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_confirmSupprRepetition'));?>
'))xajax_supprimerPeriode(<?php echo $_smarty_tpl->tpl_vars['periode']->value['periode_id'];?>
, true, $('#notif_email').is(':checked'));"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_supprimer_repetition');?>
</button>
						<button type="button" class="btn btn-default" onClick="if(confirm('<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_confirmSupprRepetition'));?>
'))xajax_supprimerPeriode(<?php echo $_smarty_tpl->tpl_vars['periode']->value['periode_id'];?>
, 'avant', $('#notif_email').is(':checked'));"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_supprimer_repetition_avant');?>
</button>
						<button type="button" class="btn btn-default" onClick="if(confirm('<?php echo xss_protect($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_confirmSupprRepetition'));?>
'))xajax_supprimerPeriode(<?php echo $_smarty_tpl->tpl_vars['periode']->value['periode_id'];?>
, 'apres', $('#notif_email').is(':checked'));"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'winPeriode_supprimer_repetition_apres');?>
</button>
					<?php }?>
				<?php }?>
			</div>
			<div id="divPatienter" class="d-none justify-content-end form-group" style="position:absolute;right:0;"><img src="assets/img/pictos/loading16.gif" alt="" /></div>
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
