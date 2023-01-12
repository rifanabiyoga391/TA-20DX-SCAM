<?php

class model_barang extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_barang');
    }
    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_barang($where,$table){
        return $this->db->get_where($table,$where);
    }
}