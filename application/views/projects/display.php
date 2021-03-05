

<div class="col-lg-12">
<h1> Project Name:<?php echo $project_data->project_name;?></h1>
<p>Date Created:<?php echo $project_data->date_created; ?></p>
<h3>Description</h3>
<p><?php echo $project_data->project_body; ?></p>
</div>


<div class="row-lg-12">
<ul class="list-group">

<h5> Project Actions </h5>

<li class=" list-group-item"><a href=""> Create Task</a></li>
<li class=" list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id;?>"> Edit Project</a></li>
<li class=" list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id;?>"> Delete Project</a></li>

</ul>
</div>