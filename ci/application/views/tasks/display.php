<div class="col-xs-9">
	
<h1> <?php echo $task->task_name; ?></h1>

<p> <?php echo lang('project_name'); ?>: <?php echo $project_name->project_name; ?></p>

<p> <?php echo lang('created'); ?>: <?php echo $task->date_created; ?> </p>

<p> <?php echo lang('due_on'); ?>: <?php echo $task->due_date; ?> </p>

<h3><?php echo lang('description'); ?></h3>

<p class="task-description">
	
	<?php echo $task->task_body; ?>

</p>

</div>


<div class="col-xs-3 pull-right">
	
<ul class="list-group">

	<h4><?php echo lang('task_action'); ?></h4>
	
	<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>"><?php echo lang('edit_task'); ?></a></li>

	<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>"><?php echo lang('delete_task'); ?></a></li>

	<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->id; ?>"><?php echo lang('mark_complete'); ?></a></li>

	<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/mark_incomplete/<?php echo $task->id; ?>"><?php echo lang('mark_incomplete'); ?></a></li>

</ul>		

</div>