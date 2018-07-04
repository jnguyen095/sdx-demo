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
			'createddate' => date('Y-m-d H:i:s')
		);
		$this->db->insert('datapack', $newdata);
	}
}
