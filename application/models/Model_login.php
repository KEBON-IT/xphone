<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_login extends CI_Model
{
	

	function get_login($username,$password){

		$pss = hash("MD5",$password);
		$sql = "SELECT * FROM tb_pengguna WHERE username= '$username' AND password= '$pss' ";
		$query = $this->db->query($sql);
		$result = $query->row();
		return $result;
	}

	
}
?>