
<?php  


    class Projects extends CI_Controller{

    public function _construct()
    { 

    parent::  _construct();

    if(!$this->session->userdata('username') != "")
    {
        $this->session->set_flashdata('no_access','Sorry you are NOT allowed or not logged in');
        redirect('home/index');
    }
    }


    public function index()
    {
            $data['projects']=$this->project_model->get_projects();

            $data ['main']="projects/index";
            $this->load->view('layouts/main',$data);
    }



public function display($project_id)
{


    $data['completed_tasks']=$this->project_model->get_project_tasks($project_id,true);
    
    $data['not_completed_tasks']=$this->project_model->get_project_tasks($project_id,false);


    $data['project_data']=$this->project_model->get_project($project_id);
    $data ['main']="projects/display";
    $this->load->view('layouts/main',$data);
}

public function create(){
    $this->form_validation->set_rules('project_name','project Name','trim|required');
    $this->form_validation->set_rules('project_body','project Description','trim|required');
if($this->form_validation->run()===FALSE){
    $data['main']='projects/create_project';
    $this->load->view('layouts/main',$data);
}
else
{
    $data=array(

        'project_user_id'=>$this->session->userdata('user_id'),
        'project_name'=>$this->input->post('project_name'),
        'project_body'=>$this->input->post('project_body'),
    );
if($this->project_model->create_project($data))
{
$this->session->set_flashdata('project_created','Your Project has been Created');
redirect("projects/index"); 
}
}
}




public function edit($project_id)
{
    $this->form_validation->set_rules('project_name','project Name','trim|required');
    $this->form_validation->set_rules('project_body','project Description','trim|required');
if($this->form_validation->run()===FALSE)
{
    $data['project_data']=$this->project_model->get_projects_info($project_id);
    $data['main']='projects/edit_project';
    $this->load->view('layouts/main',$data);
}
else
{
    $data=array(

        'project_user_id'=>$this->session->userdata('user_id'),
        'project_name'=>$this->input->post('project_name'),
        'project_body'=>$this->input->post('project_body')
    );
if($this->project_model->edit_project($project_id,$data))
{
$this->session->set_flashdata('project_updated','Your Project has been Update');
redirect("projects/index"); 
}
}
}
public function delete ($project_id)
{
        $this->project_model->delete_project_tasks($project_id);

        $this->project_model->delete_project($project_id);
        $this->session->set_flashdata('project_deleted','Your Project has been deleted');
        redirect("projects/index"); 
}

































}   


?>