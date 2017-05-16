<?php
class delete_controller extends CI_Controller{

     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          //$this->load->helper('form');


          $this->load->database();

     }

     public function delete_applicants($id )
     {

          $this->load->model('delete_model');  
          $deleteStudent= $this->delete_model->deleteApplicant($id); 
          $applicantlist= $this->delete_model->show_all();           
          $data['applicantlist'] = $applicantlist;
          $this->load->view('admin/form_component' ,$data);
     }
}
	



?>