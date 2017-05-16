<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct()
    {
        parent::__construct();  
    }

    public function index()
    {
	$this->load->view('index');
    }
    public function storeHome()
    {
        $this->load->view('storeHome');
    }
    public function admin()
    {
	$this->load->view('admin/index.php');
    }
}

?>
