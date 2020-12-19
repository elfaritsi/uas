<?php 

class Mahasiswa_model extends CI_Model{

	public function tambahData(){
		$data = array(
			'nama' => $this->input->post('nama', true), 
			'nirm' => $this->input->post('nirm', true),
			'email' => $this->input->post('email', true),
			'jurusan' => $this->input->post('jurusan', true)
		);

		$this->db->insert('mahasiswa', $data); 
	}

}