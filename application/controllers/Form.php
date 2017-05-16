<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation', 'email');
        $this->form_validation->set_rules('username', 'Full name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('pass1', 'Password', 'required');
        $this->form_validation->set_rules('pass2', 'Password Confirmation', 'required|matches[pass1]');
        $this->form_validation->set_rules('email1', 'Email', 'trim|required|valid_email|is_unique[customer.Email]');
        $this->form_validation->set_rules('email2', 'Email Confirmation', 'trim|required|valid_email|matches[email1]');

        if ($this->form_validation->run() == TRUE)
        {

            $data = array(
                'FullName' => $this->input->post('username'),
                'Email' => $this->input->post('email2'),
                'Password' => $this->input->post('pass1'),
                'Gender' => $this->input->post('gender'),
                'Address' => $this->input->post('address')
            );
            $this->load->model('model_name');
            $this->model_name->form_insert($data);
            $data['msg']="You have signed up sucessfully. Confirmation email has been sent to you email address.";
            $email= $this->input->post('email1');
            $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => '465',
    'smtp_user' => 'saloncrish@gmail.com',
    'smtp_pass' => 'group13@ucsc',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
);
    $this->load->library('email');
    $this->load->library('parser');
    $this->email->clear();
    $config['mailtype'] = "html";
    $this->email->initialize($config);
    $this->email->set_newline("\r\n");
    $this->email->from('saloncrish@gmail.com', 'Salon Crish');
    $this->email->to($email);
    $this->email->subject('Welcome to our store: Salon Crish');
    $this->email->message("Thanks for signing up! See what's new in our store. - Admin");
    $this->email->send();
    $data['msg']="You have signed up sucessfully. An email"."<br>"." has been sent to the email address you entered."; 
    $this->load->view('StoreHome', $data);
        }
    }
}
?>