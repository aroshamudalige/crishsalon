<?php

class Cart extends CI_Controller {

    public function add()
    {
        $un = $this->input->post('username');
        $this->load->model('model_name');
        $userID = $this->model_name->getUserID($un);
        $data = array(
                'customer' => $userID,
                'itemid' => $this->input->post('itemid'),
                'name' => $this->input->post('name'),
                'OrderDate' => date('Y-m-d')
                
            );
        $this->load->model('model_name');
        $this->model_name->addCart($data);
        $data['products'] = $this-> model_name -> get_all();
        $data['username']= $un;
        print "<script type=\"text/javascript\">alert('Added to the cart');</script>";
        $this->load->view('storeInside', $data);
     }
    
}

