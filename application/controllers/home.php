<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['name'];
            $this->load->model('model_name');
            $this->load->library('cart');
            $data['products'] = $this-> model_name -> get_all();
            $this->load->view('storeInside', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('storeHome', 'refresh');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        $this->load->view('storeHome');
    }

}

?>