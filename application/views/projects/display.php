

<div class="col-lg-12">
<p class="bg-success">
<?php if($this->session->flashdata('mark_done')):?>
<?php echo $this->session->flashdata('mark_done');?>
<?php endif;?>
<?php if($this->session->flashdata('mark_undone')):?>
<?php echo $this->session->flashdata('mark_undone');?>
<?php endif;?>
</p>






<h1> Project Name:<?php echo $project_data->project_name;?></h1>
<p>Date Created:<?php echo $project_data->date_created; ?></p>
<h3>Description</h3>
<p><?php echo $project_data->project_body; ?></p>
<h3> Active Tasks </h3>

<ul>
<?php if($completed_tasks):?>

 <?php foreach($completed_tasks as $task):?>
<li>
<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id;?>">

  <?php echo $task->task_name;?> 
  </a>
  </li  >
<?php endforeach; ?>
<?php else: ?>
<p>You Have Not Tasks Pending</p>
<?php endif;?>

</ul>

<h3> Completed Tasks</h3>
<ul>
<?php if($not_completed_tasks):?>

 <?php foreach($not_completed_tasks as $task):?>
<li>
<a href="<?php echo base_url();?>tasks/display/<?php echo $task->task_id;?>">

  <?php echo $task->task_name;?> 
  </a>
  </li  >
<?php endforeach; ?>
<?php else: ?>
<p>You Have Not Tasks Pending</p>
<?php endif;?>

</ul>
</div>


<div class="row-lg-12">
<ul class="list-group">

<h5> Project Actions </h5>

<li class=" list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id;?>"> Create Task</a></li>
<li class=" list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id;?>"> Edit Project</a></li>
<li class=" list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id;?>"> Delete Project</a></li>

</ul>
</div>