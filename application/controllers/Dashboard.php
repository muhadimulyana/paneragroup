<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_m', 'auth');

        if(!$this->session->userdata('LOG_IN')){

            $this->session->set_flashdata('error', 'Anda belum melakukan login!');
            redirect('auth');
            
        }
    }

	public function index()
	{
        $data['title'] = 'Dashboard | CMS Pan Era Group';
        $data['page_menu'] = 'Dashboard';
        $data['maps'] = '<li class="breadcrumb-item active">Dashboard</li>';

        $data['contents'] = $this->load->view('dashboard/index', $data, true);
		$this->load->view('layout/admin', $data);
	}
}
