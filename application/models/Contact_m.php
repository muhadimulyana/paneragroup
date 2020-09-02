<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Contact_m extends CI_Model {

    public function getinfoKontak($lang = 'english')
    {
        $this->db->select('*');
        $this->db->where('LANG', $lang);
        return $this->db->get('info_kontak');
    }

    public function getdetailKontak()
    {
        $this->db->select('*');
        return $this->db->get('kontak');
    }

}