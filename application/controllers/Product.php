<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Contact_m', 'contact');
	// 	//$this->load->model('Menu_m');
	// }

	public function index()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1 ;
		$lang = $this->lang->line('text_nation');
        $data = [];
        if($id == 1){
            $data['contents'] = $this->load->view('product/bijih', $data, true);
        } else {
            $data['contents'] = $this->load->view('product/plastic', $data, true);
        }
		$this->load->view('layout/main', $data);
	}
}
