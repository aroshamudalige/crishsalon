<?php
class updateApplicant_controller extends CI_Controller{

     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          $this->load->helper('form');


          $this->load->database();

     }

     public function update_applicants($id = ' ')
     {
         // $id=$this->input->get("id");

          $this->load->model('updateData');  
          $detailslist = $this->updateData->applicantUpdate($id);           
          $data['detailslist'] = $detailslist;
          //load the department_view
          $this->load->view('admin/updateApplicant' ,$data);
     }
}
	



?>