
<h2><?php echo lang('registration_form_name'); ?></h2>

<?php $attributes = array('id' =>'register_form', 'class' =>'form_horizontal'); ?>
<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('users/register',$attributes); ?>


<div class="form-group">
	
<?php echo lang('label_firstname'); ?>
 
<?php

$data = array(

	'class' => 'form-control',
	'name' => 'first_name',	
	'placeholder' => $this->lang->line('placeholder_firstname'),
	'value' => set_value('first_name')

	 );

 ?>


<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
<?php echo lang('label_lastname'); ?>
 
<?php

$data = array(

	'class' => 'form-control',
	'name' => 'last_name',	
	'placeholder' => $this->lang->line('placeholder_lastname'),
	'value' => set_value('last_name')

	 );

 ?>


<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
<?php echo form_label('label_email'); ?>
 
<?php

$data = array(

	'class' => 'form-control',
	'name' => 'email',	
	'placeholder' => $this->lang->line('placeholder_email'),
	'value' => set_value('email')


	 );

 ?>


<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
<?php echo lang('label_username'); ?>
 
<?php

$data = array(

	'class' => 'form-control',
	'name' => 'username',	
	'placeholder' => $this->lang->line('placeholder_username'),
	'value' => set_value('username')


	 );

 ?>


<?php echo form_input($data); ?>

</div>

<div class="form-group">
	
<?php echo lang('label_password'); ?>

<?php 

$data = array(

	'class' => 'form-control',
	'name' => 'password',
	'placeholder' => $this->lang->line('placeholder_password')

	 );

 ?>


<?php echo form_password($data); ?>

</div>

<div class="form-group">
	
<?php echo lang('label_confirm_password'); ?>

<?php 

$data = array(

	'class' => 'form-control',
	'name' => 'confirm_password',
	'placeholder' => $this->lang->line('label_confirm_password')

	 );

 ?>


<?php echo form_password($data); ?>

</div>


<div class="form-group">

<?php 

$data = array(

	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => $this->lang->line('btn_register')

	 );

 ?>


<?php echo form_submit($data); ?>

</div>


<?php echo form_close(); ?>
