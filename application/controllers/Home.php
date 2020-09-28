<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_m', 'home');
		//$this->load->model('Menu_m');
	}

	public function index()
	{
		//$data['title'] = 'Dashboard | INS E-Form';
        $data['page_menu'] = 'Dashboard';
		$data['map'] = '<li class="breadcrumb-item active">Dashboard</li>';
		$lang = $this->lang->line('text_nation');

		//set cookie if not exist
		if(!isset($_COOKIE['device-browser'])) {
			
		} 

		$data['slider'] = $this->home->getactiveSlider($lang)->result();

        $data['contents'] = $this->load->view('home/index', $data, true);
		$this->load->view('layout/main', $data);
	}
}
