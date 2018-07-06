<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('DataPack_Model');
	}

	public function index()
	{
		$crudaction = $this->input->post('crudaction');
		$data = [];
		if($crudaction != null && $crudaction == "insert"){
			$data['code'] = $this->input->post('code');
			$data['ipaddress'] = $this->input->post('ipaddress');
			$data['date-active'] = date('Y-m-d H:i:s',strtotime($this->input->post('date-active')));
			$this->DataPack_Model->save($data);
			$this->session->set_flashdata('message','Add plan seccuess!');
		}
		$this->load->view('page-one');
	}


}
