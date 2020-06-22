<?php

class Admin_model extends CI_Model{

    public function getUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function addUser()
    {
        $data = [
            'nama_user' => $_POST['nama'],
            'username'  => $_POST['username'],
            'password'  => md5($_POST['password']),
            'role' => '1'
        ];
        
        $this->db->insert('user',$data);
    }

    public function deleteUser($id)
    {
        $this->db->where('id_user',$id);
        $this->db->delete('user');
    }

    public function addKategori()
    {
        $data = [
            'nama_kategori' => $_POST['nama'],
            'deskripsi'  => $_POST['deskripsi']
        ];
        
        $this->db->insert('kategori',$data);
    }

    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function deleteKategori($id)
    {
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
    }
}