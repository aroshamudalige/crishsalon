<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class updateData extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function applicantUpdate($id)
     {
         //$id = $_GET['id'];
          
         // $sql = "SELECT * FROM newjoiners WHERE 'id' =$id";
          $sql = $this->db->query("SELECT * FROM newjoiners WHERE id='$id'");
          //$query = $this->db->query($sql);
          $result = $sql->result();
          return $result;
     }
}