<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_m', 'auth');
    }

	public function index()
	{
		$this->load->view('auth/index');
    }
    
    public function login()
    {
        $response = ['success' => false, 'messages' => [], 'redirect' => site_url('dashboard')];
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));
        
        $user = $this->auth->login($username)->row();

        if($user){

            if($user->PASSWORD == $password){

                if($user->AKTIF == 1){

                    $success = $this->auth->login($user->USERNAME)->row();
                    $data = [
                        'USER_NAME' => $success->USERNAME,
                        'NAMA_LENGKAP' => $success->NAMA_LENGKAP,
                        'LEVEL' => $success->LEVEL,
                        'LOG_IN' => true,
                        'LOGIN_TIME' => date('Y-m-d H:i:s'),
                        'ID_USER' => $success->ID_USER
                    ];
                    $this->session->set_userdata($data);

                    $response['success'] = true;
                    
                } else {
                    $response['messages'] = 'Akun anda di-nonaktifkan. Harap hubungi admin!';
                }
            } else {
                $response['messages'] = 'Password yang anda masukkan salah. Harap periksa kembali';
            }
        } else {
           $response['messages'] = 'Username tidak ditemukan!';
        }

        echo json_encode($response);
    }

    public function logout()
    {
        $data = [
            'ID_USER',
            'USER_NAME',
            'NAMA_LENGKAP',
            'LEVEL',
            'LOG_IN',
            'LOGIN_TIME'
        ];
        $this->session->unset_userdata($data);

        redirect('auth');
    }
}
