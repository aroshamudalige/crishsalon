<?php

class Order extends CI_Controller {

    public function view()
    {
        $this->load->model('model_name');
        $orderdetails = $this->model_name->get_orders();
        $data['orders'] = $orderdetails;
        $this->load->view('admin/vieworders' ,$data);
     }
     public function addItems()
    {
        $this->load->view('admin/form_additems');
        $this->load->model('model_name');
        $orderdetails = $this->model_name->add_items();
        print "<script type=\"text/javascript\">alert('Item added to the Store');</script>";
        $this->load->view('admin/vieworders' ,$data);
     }
    
}

