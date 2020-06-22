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
        $this->load->view('part/header');
        $this->load->view('admin/index');
        $this->load->view('part/footer');
    }

    public function aktiva()
    {
        $this->load->view('part/header');
        $this->load->view('admin/aktiva');
        $this->load->view('part/footer');
    }

    public function addAktiva()
    {
        $data['kategori']=$this->admin_model->getKategori();
        $this->load->view('part/header');
        $this->load->view('admin/addAktiva',$data);
        $this->load->view('part/footer');
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


}