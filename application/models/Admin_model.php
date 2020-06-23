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

    public function editUser()
    {
        $this->db->set('nama_user',$_POST['nama']);
        $this->db->set('username',$_POST['username']);
        if($_POST['password']!=''){
            $this->db->set('password',md5($_POST['password']));
        }
        $this->db->where('id_user',$_POST['id']);
        $this->db->update('user');
    }

    public function getCountUser()
    {
        return $this->db->query('select COUNT(DISTINCT(id_user)) as user FROM user')->result_array();
    }

    public function getCountKategori()
    {
        return $this->db->query('select COUNT(DISTINCT(id_kategori)) as kat FROM kategori')->result_array();
    }

    public function getCountAktiva()
    {
        return $this->db->query('select COUNT(DISTINCT(id_aset)) as aset FROM aktiva_tetap')->result_array();
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

    public function tbhAktiva()
    {
        $data = [
            'id_kategori'  => $_POST['kategori'],
            'nama_aset'  => $_POST['nama'],
            'harga_perolehan'  => $_POST['harga'],
            'metode_penyusutan'  => $_POST['metode'],
            'residu'  => $_POST['residu'],
            'umur_ekonomis'  => $_POST['umur'],
            'tanggal'  => $_POST['tanggal'],
            'nilai_setelah_penyusutan'  => $_POST['penyusutan'],
            'keterangan'  => $_POST['keterangan']
        ];
        
        $this->db->insert('aktiva_tetap',$data);
    }

    public function getAktiva()
    {
        return $this->db->get('aktiva_tetap')->result_array();
    }

    public function deleteAktiva($id)
    {
        $this->db->where('id_aset',$id);
        $this->db->delete('aktiva_tetap');
    }

    public function editAktiva($id)
    {
        return $this->db->get_where('aktiva_tetap',['id_aset'=>$id])->result_array();
    }

    public function do_editAktiva()
    {
        $this->db->set('id_kategori',$_POST['kategori']);
        $this->db->set('nama_aset',$_POST['nama']);
        $this->db->set('harga_perolehan',$_POST['harga']);
        $this->db->set('metode_penyusutan',$_POST['metode']);
        $this->db->set('residu',$_POST['residu']);
        $this->db->set('umur_ekonomis',$_POST['umur']);
        $this->db->set('tanggal',$_POST['tanggal']);
        $this->db->set('nilai_setelah_penyusutan',$_POST['penyusutan']);
        $this->db->set('keterangan',$_POST['keterangan']);
        $this->db->where('id_aset',$_POST['id']);
        $this->db->update('aktiva_tetap');
    }

    public function editKategori()
    {
        $this->db->set('nama_kategori',$_POST['nama']);
        $this->db->set('deskripsi',$_POST['deskripsi']);
        $this->db->where('id_kategori',$_POST['id']);
        $this->db->update('kategori');
    }
}