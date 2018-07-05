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
		$this->load->helper('form');
		$this->load->model('DataPack_Model');
	}
	public function index(){
		$this->load->view('dataPack');
	}
	public function dataPack(){
		$crudaction = $this->input->post('crudaction');
		$data = [];
		if($crudaction != null && $crudaction == "insert"){
			$data['code'] = $this->input->post('code');
			$data['ipaddress'] = $this->input->post('ipaddress');
			$data['date-active'] = date('Y-m-d H:i:s',strtotime($this->input->post('date-active').date('H:i:s')));
			$this->DataPack_Model->save($data);
			$this->session->set_flashdata('message','Add plan seccuess!');
			}
		redirect('/page-one');
	}
}
