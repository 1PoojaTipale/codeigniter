<h1>Task Display View</h1>

<?php echo $task->task_name;?>

<table class="table table-bordered">
<thead>
<tr>
<th>Task Name</th>
<th>Task Description</th>
<th> Date</th>
</tr>
</thead>
<tbody>


<tr>

<div class="task-name">
<td> <?php echo $task->task_name; ?> 
</div>

<div class="task-actions">
<a href="<?php echo base_url();?>tasks/edit/<?php echo $task->id;?>">Edit</a>
<a href="<?php echo base_url();?>tasks/delete/<?php echo $task->id;?>"> Delete</a>
</div>

</td>
<td> <?php echo $task->task_body ;?> </td>
<td> <?php echo $task->date_created ;?> </td>

<!-- 
<td>  <a  class="btn btn-danger "href="<?php echo base_url();?>projects/delete/<?php echo $project->id;?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x" viewBox="0 0 16 16">
  <path d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
  <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
</svg>
</a></td> -->

</tr>


</tbody>
</table>