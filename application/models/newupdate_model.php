<?php

class newupdate_model extends CI_Model{

    function __construct()
    {
        parent::__construct();


    }

    function formInsert($data){
        $this->db->insert('newjoiners',$data);
    }
}
?>