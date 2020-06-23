<?php 
class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('login_model');
        if($this->login_model->is_role() != "1"){
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses');
            redirect('login');
        }
    }
    
    public function index()
    {
        $data['countAktiva']=$this->admin_model->getCountAktiva();
        $data['countKategori']=$this->admin_model->getCountKategori();
        $data['countUser']=$this->admin_model->getCountUser();
        $this->load->view('part/header');
        $this->load->view('admin/index',$data);
        $this->load->view('part/footer');
    }

    public function aktiva()
    {
        $data['aktiva']=$this->admin_model->getAktiva();
        $this->load->view('part/header');
        $this->load->view('admin/aktiva',$data);
        $this->load->view('part/footer');
    }

    public function addAktiva()
    {
        $data['kategori']=$this->admin_model->getKategori();
        $this->load->view('part/header');
        $this->load->view('admin/addAktiva',$data);
        $this->load->view('part/footer');
    }

    public function tbhAktiva()
    {
        $this->admin_model->tbhAktiva();
        $this->session->set_flashdata('success', 'Kategori berhasil ditambahkan');
        redirect('admin/aktiva');
    }

    public function deleteAktiva($id)
    {
        $this->admin_model->deleteAktiva($id);
        $this->session->set_flashdata('error', 'Kategori berhasil dihapus');
        redirect('admin/aktiva');
    }

    public function editAktiva($id)
    {
        $data['aktiva']=$this->admin_model->editAktiva($id);
        $data['kategori']=$this->admin_model->getKategori();
        $this->load->view('part/header');
        $this->load->view('admin/editAktiva',$data);
        $this->load->view('part/footer');
    }

    public function do_editAktiva()
    {
        $this->admin_model->do_editAktiva();
        $this->session->set_flashdata('success', 'Aktiva berhasil diubah');
        redirect('admin/aktiva');
    }

    public function hitung()
    {
        $this->load->view('part/header');
        $this->load->view('admin/hitung');
        $this->load->view('part/footer');
    }

    public function kategori()
    {
        $data['kategori']=$this->admin_model->getKategori();
        $this->load->view('part/header');
        $this->load->view('admin/kategori',$data);
        $this->load->view('part/footer');
    }

    public function addKategori()
    {
        $this->admin_model->addKategori();
        $this->session->set_flashdata('success', 'Kategori berhasil ditambahkan');
        redirect('admin/kategori');
    }

    public function editKategori()
    {
        $this->admin_model->editKategori();
        $this->session->set_flashdata('success', 'Kategori berhasil diubah');
        redirect('admin/kategori');
    }

    public function deleteKategori($id)
    {
        $this->admin_model->deleteKategori($id);
        $this->session->set_flashdata('error', 'User berhasil dihapus');
        redirect('admin/kategori');
    }

    public function user()
    {
        $data['user']=$this->admin_model->getUser();
        $this->load->view('part/header');
        $this->load->view('admin/user',$data);
        $this->load->view('part/footer');
    }

    public function addUser()
    {
        $this->admin_model->addUser();
        $this->session->set_flashdata('success', 'User berhasil ditambahkan');
        redirect('admin/user');
    }

    public function deleteUser($id)
    {
        $this->admin_model->deleteUser($id);
        $this->session->set_flashdata('error', 'User berhasil dihapus');
        redirect('admin/user');
    }

    public function editUser()
    {
        $this->admin_model->editUser();
        $this->session->set_flashdata('success', 'User berhasil diubah');
        redirect('admin/user');
    }



}