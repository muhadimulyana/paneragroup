<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

    public function getallUsers()
    {
        $this->db->select('*');
        return $this->db->get('users');
    }

    public function addUser($data)
    {
        $this->db->insert('users', $data);
    }

    public function getuserbyId($id)
    {
        return $this->db->get_where('users', ['ID_USER' => $id]);
    }

    public function updateUser($data, $id)
    {
        $this->db->where('ID_USER', $id);
        $this->db->update('users', $data);
    }

    public function delUser($id)
    {
        $this->db->delete('users', ['ID_USER' => $id]);
        return $this->db->affected_rows();
    }
    
}