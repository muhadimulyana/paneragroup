<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Contact_m', 'contact');
	// 	//$this->load->model('Menu_m');
	// }

	public function index()
	{
		$lang = $this->lang->line('text_nation');
        $data = [];
        $data['contents'] = $this->load->view('news/index', $data, true);
		$this->load->view('layout/main', $data);
	}
}
