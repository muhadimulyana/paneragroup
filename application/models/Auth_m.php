<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {

    public function login($username)
    {
        return $this->db->get_where('users', ['USERNAME' => $username]);
    }
    
}