<?php if($this->session->userdata('logged_in')): ?>

<h2><?php echo lang('btn_logout'); ?></h2>

<?php echo form_open('users/logout'); ?>

<p>

<?php if($this->session->userdata('username')): ?>

<?php echo lang('logged_in_as') . $this->session->userdata('username'); ?>

<?php endif; ?>	

</p>


<?php 
   
   $data = array(
   	'class' =>'btn btn-primary',
   	'name' =>'logout',
   	'value' => $this->lang->line('btn_logout')
   	 );

 ?>

 <?php echo form_submit($data); ?>	



<?php echo form_close(); ?>


<?php else: ?>	


<h2><?php echo lang('login_form_name'); ?></h2>

<?php $attributes = array('id' =>'login_form', 'class' =>'form_horizontal'); ?>

<?php if($this->session->flashdata('errors')): ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>	

<?php echo form_open('users/login',$attributes); ?>

<div class="form-group">
	
<?php echo lang('label_username'); ?>
 
<?php

$data = array(

	'class' => 'form-control',
	'name' => 'username',	
	'placeholder' => $this->lang->line('placeholder_username')

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

<?php 

$data = array(

	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Login'

	 );

 ?>


<?php echo form_submit($data); ?>

</div>


<?php echo form_close(); ?>

<?php endif; ?>