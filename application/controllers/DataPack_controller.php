<?php

/**
 * Created by Khang Nguyen.
 * Email: khang.nguyen@banvien.com
 * Date: 04/07/2018
 * Time: 11:30 AM
 */
class DataPack_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('DataPack_Model');
	}

	public function dataPack(){
		$this->load->view('dataPack');
	}
}
