<?php
/**
 * Created by IntelliJ IDEA.
 * User: son.nguyen-truong
 * Date: 7/4/2018
 * Time: 1:30 PM
 */
class PageOneController extends CI_Controller{
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('page-one');
	}
}
