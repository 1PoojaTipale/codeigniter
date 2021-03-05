
<h2>Create Project </h2>

<?php $attributes = array('id'=>'create_form','class'=>'form-horizontal');?>
<?php echo  validation_errors("<p class='bg-danger'>");?>
<?php echo form_open('projects/create',$attributes);?>

<div class="form-group mt-3">
<?php echo form_label('Project Name :');?>
<?php 
$data =array(
    'class'=>'form-control',
    'name'=>'project_name',
    'placeholder'=>'Enter project Name',);?>
<?php echo form_input($data);?>
</div>


<div class="form-group mt-3">
<?php echo form_label('Project Description');?>
<?php 
$data =array(
    'class'=>'form-control',
    'name'=>'project_body'
    );?>
<?php echo form_textarea($data);?>
</div>

<div class="form-group mt-3">
<?php 
$data =array(
    'class'=>'btn btn-primary ',
    'name'=>'submit',
    'value'=>'Create',   
);
?>
<?php echo form_submit($data);?>
</div>
<?php echo form_close();?>
