<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class form_component_model extends CI_Model{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //read the department list from db
     function get_applicants()
     {
          $sql = 'select * from newjoiners';
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
     }
}