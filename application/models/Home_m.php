<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home_m extends CI_Model {

    public function getactiveSlider($lang = 'english')
    {
        $this->db->select('*');
        $this->db->where('AKTIF', 1);
        $this->db->where('LANG', $lang);
        $this->db->order_by('URUTAN', 'ASC');
        return $this->db->get('slider');
    }

}