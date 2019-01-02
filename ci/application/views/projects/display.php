<div class="col-xs-9 bg-success">

<?php if($this->session->flashdata('mark_done')): ?>

<?php echo $this->session->flashdata('mark_done');  ?>

<?php endif; ?>


<?php if($this->session->flashdata('mark_undone')): ?>

<?php echo $this->session->flashdata('mark_undone');  ?>

<?php endif; ?>

	
	
<h1> <?php echo lang('project_name'); ?>: <?php echo $project_data->project_name; ?> </h1>

<p> <?php echo lang('created'); ?>: <?php echo $project_data->date; ?> </p>

<h3><?php echo lang('description'); ?></h3>

<p> <?php echo $project_data->project_body; ?> </p>

<h3><?php echo lang('active_tasks'); ?></h3>

<ul>

<?php if( $completed_task ): ?>

	<?php foreach ( $completed_task as $task): ?>
		
	<li>

	<a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id ?>">

	<?php echo $task->task_name; ?>

	</li>
</a>

  
<?php endforeach; ?>

<?php else: ?>
	
<p><?php echo lang('no_active_tasks'); ?></p>

<?php endif; ?>

</ul>


<h3><?php echo lang('completed_tasks'); ?></h3>

	
<ul>

<?php if( $not_completed_task ): ?>

	<?php foreach ( $not_completed_task as $task): ?>
		
	<li>

	<a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id ?>">

	<?php echo $task->task_name; ?>

	</li>
</a>

  
<?php endforeach; ?>

<?php else: ?>

<p><?php echo lang('no_completed_tasks'); ?></p>

<?php endif; ?>

</ul>

</div>


<div class="col-xs-3 pull-right">
	
<ul class="list-group">

	<h4><?php echo lang('project_action'); ?></h4>
	
	<li class="list-group-item"><a href=" <?php echo base_url(); ?>tasks/create/<?php echo $project_data->id; ?>"><?php echo lang('create_task'); ?></a></li>
	<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id; ?>"><?php echo lang('edit_project'); ?></a></li>
	<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id; ?>"><?php echo lang('delete_project'); ?></a></li>

</ul>		

</div>