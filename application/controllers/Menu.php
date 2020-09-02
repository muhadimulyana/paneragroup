<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_m', 'menu');

        $this->load->model('Auth_m', 'auth');
        if(!$this->session->userdata('LOG_IN')){

            $this->session->set_flashdata('error', 'Anda belum melakukan login!');
            redirect('auth');
            
        }
    }

    public function index()
    {
        $data['title'] = 'Manajemen Menu | CMS Pan Era Group';
        $data['page_menu'] = 'Manajemen Menu';
        $data['maps'] = '<li class="breadcrumb-item"><a href="' . site_url('dashboard') .'">Dashboard</a></li>
        <li class="breadcrumb-item active">Menu</li>';

        $data['menu'] = $this->menu->getallMenu()->result();

        $data['contents'] = $this->load->view('menu/index', $data, true);
		$this->load->view('layout/admin', $data);
    }

    public function add_menu()
    {
        $response = ['success' => false, 'messages' => []];
        $post = $this->input->post();

        // $this->form_validation->set_rules('nama', '', 'required', [
        //     'required' => 'Nama tidak boleh kosong'
        // ]);

        // $this->form_validation->set_error_delimiters('<div class="badge badge-danger">', '</div>');

        if($this->form_validation->run()){

            $response['success'] = true;

            $data = [
                'NAMA_LENGKAP' => htmlentities($post['nama']),
                'USERNAME' => htmlentities($post['username']),
                'LEVEL' => htmlentities($post['level']),
                'PASSWORD' => htmlentities($post['password']),
                'AKTIF' => 1,
                'DIBUAT' => date('Y-m-d H:i:s')
            ];

            $insert = $this->user->addUser($data);
            $this->session->set_flashdata('success', 'Data user berhasil ditambahkan');
            // if($insert){
            //     $this->session->set_flashdata('success', 'Data user berhasil ditambahkan');
            // } else {
            //     $this->session->set_flashdata('error', 'Data user gagal ditambahkan');
            // }

        } else {
            foreach($post as $key => $value){
                $response['messages'][$key] = form_error($key);
            }
        }
        
        echo json_encode($response);

    }

}
