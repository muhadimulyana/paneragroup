<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Contact_m', 'contact');
		//$this->load->model('Menu_m');
	}

	public function index()
	{
        // $data['page_menu'] = 'Dashboard';
		// $data['map'] = '<li class="breadcrumb-item active">Dashboard</li>';
		$lang = $this->lang->line('text_nation');

		//$data['slider'] = $this->conta->getactiveSlider($lang)->result();
        $data['contact'] = $this->contact->getinfoKontak($lang)->row();
        $data['det_contact'] = $this->contact->getdetailKontak()->row();
        
        $data['contents'] = $this->load->view('contact/index', $data, true);
		$this->load->view('layout/main', $data);
	}
}
