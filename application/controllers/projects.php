
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



public function display()
{

    $data ['main']="projects/display";
    $this->load->view('layouts/main',$data);


}








}   


?>