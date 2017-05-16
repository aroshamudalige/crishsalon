<?php
class newupdate_controller extends CI_Controller{




	public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        //load the employee model
        $this->load->model('newupdate_model');
    }

    //index function
    function index()
    {
       

        //set validation rules
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|callback_alpha_only_space');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|callback_alpha_only_space');
        $this->form_validation->set_rules('telephone_no', 'Contact No', 'trim|required|regex_match[/^[0 -9]{10}$/]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            $this->load->view('admin/updateApplicant');
        }
        else
        {    
            //pass validation
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'telephone_no' => $this->input->post('telephone_no'),
                'email' => $this->input->post('email'),
                'age' => $this->input->post('age'),
                'years_experience' => $this->input->post('year'),
                'experience' => $this->input->post('message'),


            );

            //insert the form data into database
            $this->newupdate_model->formInsert($data);
            $this->load->view('admin/updateApplicant');


            //display success message
           /*$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Employee details added to Database!!!</div>');
            redirect('form_validation');*/
        }

    }
    
    
    //custom validation function to accept only alpha and space input
    function alpha_only_space($str)
    {
        if (!preg_match("/^([-a-z ])+$/i", $str))
        {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
	
}


?>