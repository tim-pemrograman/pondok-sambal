<?php
class signup_model extends CI_Model
{
public function __construct()
{
parent::__construct();
}
public function check_user($email)
{
$result= $this->db->select("SELECT * FROM 'signup' WHERE email = '".$email."'");
$count = count($result);
return $count;
}
public function insert_user($data)
{
$this->db->insert('loginpage', $data);
}

}