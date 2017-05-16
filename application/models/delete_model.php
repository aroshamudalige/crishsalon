<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class delete_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     function deleteApplicant($id)
     {

          $sql = $this->db->query("DELETE FROM newjoiners WHERE id ='$id'");
     }

     function show_all(){
          $sql = $this->db->query("SELECT * FROM newjoiners");
          $result = $sql->result();
          return $result;
     }
}