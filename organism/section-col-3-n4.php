<section class="container-fluid">
<?php
	/*=====================================
	=            Get Files            =
	=====================================*/
	$element_file_1 = $vars['element-1'][0]['acf_fc_layout']; //get file
	$element_file_2 = $vars['element-2'][0]['acf_fc_layout']; //get file
	$element_file_3 = $vars['element-3'][0]['acf_fc_layout']; //get file
	$element_file_4 = $vars['element-3'][0]['acf_fc_layout']; //get file


	unset($vars['element-1'][0]['acf_fc_layout']); // remove file from array leveling only vars
	unset($vars['element-2'][0]['acf_fc_layout']); // remove file from array leveling only vars
	unset($vars['element-3'][0]['acf_fc_layout']); // remove file from array leveling only vars
	unset($vars['element-4'][0]['acf_fc_layout']); // remove file from array leveling only vars


	/*=====================================
	=            Setup Classes            =
	=====================================*/
	$vars['element-1'][0]['class'] = 'col-md-3'; //because i know this from the file name
	$vars['element-2'][0]['class'] = 'col-md-3'; //because i know this from the file name
	$vars['element-3'][0]['class'] = 'col-md-3'; //because i know this from the file name
	$vars['element-4'][0]['class'] = 'col-md-3'; //because i know this from the file name



	/*==================================
	=            Setup Vars            =
	==================================*/
	$element_vars_1 = $vars['element-1'][0];
	$element_vars_2 = $vars['element-2'][0];
	$element_vars_3 = $vars['element-3'][0];
	$element_vars_3 = $vars['element-4'][0];


	?>
	<div class="col-md-3">
	<?php
	//Element 1
	get_component([
	 'template' => 'molecule/'.$element_file_1,
	 'vars' => $element_vars_1
			]);
	?>
	</div>
	<div class="col-md-3">

	<?php
	//Element 2
	get_component([
	 'template' => 'molecule/'.$element_file_2,
	 'vars' => $element_vars_2
			]);
		?>
		</div>
	<div class="col-md-3">

	<?php
	//Element 3
	get_component([
	 'template' => 'molecule/'.$element_file_3,
	 'vars' => $element_vars_3
			]);
		?>
		</div>
	<div class="col-md-3">
	<?php
	//Element 4
		get_component([
	 'template' => 'molecule/'.$element_file_4,
	 'vars' => $element_vars_4
			]);
	?>
	</div>
	<?php
	unset($element_file_1);
	unset($element_file_2);
	unset($element_file_3);
	unset($element_file_4);


	unset($element_vars_1);
	unset($element_vars_2);
	unset($element_vars_3);
	unset($element_vars_4);



 ?>
</section>