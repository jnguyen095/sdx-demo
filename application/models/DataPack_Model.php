<?php

/**
 * Created by Khang Nguyen.
 * Email: khang.nguyen@banvien.com
 * Date: 8/17/2017
 * Time: 11:27 AM
 */
class DataPack_Model extends CI_Model
{
	function __construct() {
		parent::__construct();
	}

	function save($data)
	{
		$newdata = array(
			'code' => $data['code'],
			'ipaddress' => $data['ipaddress'],
			'createddate' => date('Y-m-d H:i:s'),
			'activedate' => $data['date-active']
		);
		$this->db->insert('datapack', $newdata);
	}
	function getallbyip($ip){
		$this->db->select('*');
		$this->db->from('datapack');
		$this->db->where('ipaddress', $ip);
		$query = $this->db->get();
		return $query->result();
	}
	function  getall(){
		return $this->db->get('datapack')->result();
	}
	function deleteById($id){
		$this->db->delete('datapack', array('id' => $id));
	}
}
