
<h2><?php echo lang('header_create_project'); ?></h2>

<?php $attributes = array('id' =>'create_form', 'class' =>'form_horizontal'); ?>
<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('projects/create',$attributes); ?>


<div class="form-group">
	
<?php echo lang('project_name'); ?>
 
<?php

$data = array(

	'class' => 'form-control',
	'name' => 'project_name',	
	'placeholder' => $this->lang->line('placeholder_project_name')

	 );

 ?>


<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
<?php echo lang('project_description'); ?>
 
<?php

$data = array(

	'class' => 'form-control',
	'name' => 'project_body'

	 );

 ?>


<?php echo form_textarea($data); ?>

</div>

<div class="form-group">
	
	<?php 

     $data = array(
     	'class' => 'btn btn-primary' ,
     	'name' => 'submit' ,
     	'value' => $this->lang->line('btn_create')

     	 );
	 ?>

	 <?php echo form_submit( $data); ?>

</div>



<?php echo form_close(); ?>
