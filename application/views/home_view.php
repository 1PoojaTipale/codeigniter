


<p class="bg-success">

<?php if($this->session->flashdata('login_success')):?>
<?php echo $this->session->flashdata('login_success');?>
<?php endif;?>

<?php if($this->session->flashdata('user_registered')):?>
<?php echo $this->session->flashdata('user_registered');?>
<?php endif;?>

</p>

<div class="jumbotron ">
<h2 class="text-center"> Welcome To The CI APP</h2>
</div>
<p class="bg-danger">

<?php if($this->session->flashdata('login_failed')):?>
<?php echo $this->session->flashdata('login_failed');?>
<?php endif; ?>

<?php if($this->session->flashdata('no_access')):?>
<?php echo $this->session->flashdata('no_access');?>
<?php endif;?>
</p>


<?php if(isset($projects)):?>
<h1>Projects</h1>

<table class="table table-bordered">
<thead>
<tr>
<th>Project Name</th>
<th>Project Description</th>
</tr>
</thead>
<tbody>

<?php foreach($projects as $project):?>
<tr>
<td> <?php echo $project->project_name; ?> </td>
<td> <?php echo $project->project_body ;?> </td>
<td><a href="<?php echo base_url();?>projects">View</a> </td>
<!-- 
<td>  <a  class="btn btn-danger "href="<?php echo base_url();?>projects/delete/<?php echo $project->id;?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x" viewBox="0 0 16 16">
  <path d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
  <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
</svg>
</a></td> -->

</tr>
<?php endforeach;?>

</tbody>
</table>
<?php endif; ?>