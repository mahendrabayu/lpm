<?php
class M_pegawai extends CI_Model {

function __construct() {
        parent::__construct();
    }

function get_all_pegawai($param,$param2) {
    $this->db->select('*');
    $this->db->from('pegawai');
    $this->db->where('nip',$param);
    //$this->db->order_by('tgl','desc');
    $hasil = $this->db->get();
    return $hasil->result();   
}

}