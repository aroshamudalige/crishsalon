<?php

class Userlogin extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('custmail', 'Email', 'trim|required');
        $this->form_validation->set_rules('ID', 'Password', 'required|callback_check_database');

        if ($this->form_validation->run() == TRUE)
        {
            //$this->load->view('StoreInside',$data);
            redirect('home', 'refresh');

        }
        else
        {
            $this->load->view('StoreHome');
        }
    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('custmail');

        //query the database
        $this->load->model('model_name');
        $result = $this->model_name->login($username, $password);

        if($result)
        {
            //$sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'name' => $row->FullName,
                    'email' => $row->Email
                );
                $this->session->set_userdata('logged_in', $sess_array);
                //$var = $this->session->userdata['name'];
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

}