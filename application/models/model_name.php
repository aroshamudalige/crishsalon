<?php
class Model_name extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    public function form_insert($details){
        $this->db->insert('customer', $details);

    }
    public function login($username, $password)
    {
        $this -> db -> select('FullName, Email');
        $this -> db -> from('customer');
        $this -> db -> where('Email', $username);
        $this -> db -> where('Password', $password);
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    public function get_all()
	{
		$query = $this->db->get('item');
		return $query->result_array();
	}
    public function get_orders()
	{
		$sql = 'select * from `order` order by OrderDate DESC';
          $query = $this->db->query($sql);
          $result = $query->result();
          return $result;
	}
    public function addCart($details){
        $this->db->insert('order', $details);

    }
    public function getUserId($details)
	{
            $this->db->select('CustomerID');
            $this->db->where('FullName', $details);
            $q = $this->db->get('customer');
            $result = $q->row();
            return $result->CustomerID;
                
	}
}

?>