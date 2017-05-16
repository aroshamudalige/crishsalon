<?php
class Form_component extends CI_Controller{

     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          $this->load->database();
     }

     public function index()
     {
          $this->load->model('form_component_model');  
    
          $applicantresult = $this->form_component_model->get_applicants();           
          $data['applicantlist'] = $applicantresult;
        
          $this->load->view('admin/form_component',$data);
     }
}
	



?>