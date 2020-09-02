<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_m extends CI_Model {

    public function getallMenu()
    {
        return $this->db->get('menu');
    }

    public function getmenubyLang($lang = 'english')
    {
        $this->db->select('*');
        $this->db->where('AKTIF', 1);
        $this->db->where('LANG', $lang);
        $this->db->order_by('URUTAN', 'ASC');
        return $this->db->get('menu');
    }

    public function getsubbylangIdMenu($lang = 'english', $id)
    {
        $this->db->select('*');
        $this->db->where('AKTIF', 1);
        $this->db->where('LANG', $lang);
        $this->db->where('ID_MENU', $id);
        //$this->db->order_by('URUTAN', 'ASC');
        return $this->db->get('sub_menu');
    }

    public function addbatchMenu($data)
    {
        $this->db->insert_batch($data);
    }

    

}