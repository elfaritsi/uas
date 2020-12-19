<?php

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}

	public function index(){
		$data['judul'] = 'Tugas UAS';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nirm', 'Nirm', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('home/index');
			$this->load->view('templates/footer');

		}else{
			$this->Mahasiswa_model->tambahData();
			$this->session->set_flashdata('flash', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data berhasil ditambah, silahkan buka database untuk melihat data. 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('home');
		}
	}

}