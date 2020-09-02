<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_m', 'user');
    }

	public function index()
	{
        $data['title'] = 'Manajemen User | CMS Pan Era Group';
        $data['page_menu'] = 'Users';
        $data['maps'] = '<li class="breadcrumb-item"><a href="' . site_url('dashboard') .'">Dashboard</a></li>
        <li class="breadcrumb-item active">Users</li>';

        $data['users'] = $this->user->getallUsers()->result();

        $data['contents'] = $this->load->view('users/index', $data, true);
		$this->load->view('layout/admin', $data);
    }
    
    public function add_user()
    {
        $response = ['success' => false, 'messages' => []];
        $post = $this->input->post();

        $this->form_validation->set_rules('nama', '', 'required', [
            'required' => 'Nama tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('username', '', 'required|is_unique[users.USERNAME]', [
            'required' => 'Username tidak boleh kosong',
            'is_unique' => 'Username yang digunakan sudah ada'
        ]);
        $this->form_validation->set_rules('password', '', 'required', [
            'required' => 'Password tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('password2', '', 'required|matches[password]', [
            'required' => 'Konfirmasi password tidak boleh kosong',
            'matches' => 'Konfirmasi password tidak sesuai'
        ]);
        $this->form_validation->set_rules('level', '', 'required', [
            'required' => 'Akses level tidak boleh kosong'
        ]);

        $this->form_validation->set_error_delimiters('<div class="badge badge-danger">', '</div>');

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

    public function update_user()
    {
        $response = ['success' => false, 'messages' => []];
        $post = $this->input->post();

        $this->form_validation->set_rules('nama', '', 'required', [
            'required' => 'Nama tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('username', '', 'required', [
            'required' => 'Username tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('level', '', 'required', [
            'required' => 'Akses level tidak boleh kosong'
        ]);

        if(isset($post['ubahpass'])){

            $this->form_validation->set_rules('password', '', 'required', [
                'required' => 'Password tidak boleh kosong'
            ]);
            $this->form_validation->set_rules('password2', '', 'required|matches[password]', [
                'required' => 'Konfirmasi password tidak boleh kosong',
                'matches' => 'Konfirmasi password tidak sesuai'
            ]);

        }

        $this->form_validation->set_error_delimiters('<div class="badge badge-danger">', '</div>');

        if($this->form_validation->run()){

            $response['success'] = true;

            $data = [
                'NAMA_LENGKAP' => htmlentities($post['nama']),
                'USERNAME' => htmlentities($post['username']),
                'LEVEL' => htmlentities($post['level']),
                'AKTIF' => $post['aktif'],
                'DIBUAT' => date('Y-m-d H:i:s')
            ];

            if($post['password'] != null || $post['password'] != ''){
                $data['PASSWORD'] = $post['password'];
            }

            $this->user->updateUser($data, $post['id']);
            $this->session->set_flashdata('success', 'Data user berhasil diubah');

        } else {
            foreach($post as $key => $value){
                $response['messages'][$key] = form_error($key);
            }
        }
        
        echo json_encode($response);

    }

    public function det_user()
    {
        $id = $this->input->get('id');
        echo json_encode($this->user->getuserbyId($id)->row());
    }

    public function del_user($id)
    {
        $del = $this->user->delUser($id);

        if($del == 1){
            $this->session->set_flashdata('success', 'Data user berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Data user gagal dihapus');
        }

        redirect('users');
    }
}
