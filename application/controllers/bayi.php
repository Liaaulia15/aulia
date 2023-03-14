<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bayi extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('model_bayi');
        if(!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'data bayi';

        $data['bayi'] = $this->model_bayi->getAllbayi();
        if( $this->input->post('keyword') ) {
            $data['bayi'] = $this->model_bayi->Caribayi();
        }
        $this->load->view('templates/header.php', $data);
        $this->load->view('Bayi/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('bayi', 'bayi', 'trim|required');

        if($this->form_validation->run() == false ) {
            $data['title'] = 'Tambah bayi';

            $this->load->view('templates/header.php', $data);
            $this->load->view('bayi/tambah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->model_bayi->Tambahbayi();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('bayi');
        }
        
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('bayi', 'bayi', 'trim|required');
        $data['bayi'] = $this->model_bayi->getbayiById($id);

        if($this->form_validation->run() == false ) {
            $data['title'] = 'Ubah bayi';

            $this->load->view('templates/header.php', $data);
            $this->load->view('bayi/ubah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->model_bayi->Ubahbayi();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('bayi');
        }
        
    }

    public function hapus($id)
    {
        $this->model_bayi->hapusbayi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('bayi');
    }
}
