<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Co_login extends CI_Controller {

	function index(){
		$this->load->view('login');
	}
	function masuk(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$cek = $this->Mo_database->cek($username,$password);

		if($cek ->num_rows() ==1){

			foreach ($cek -> result() as $data) {
				$sess_data['id_admin'] = $data->id_admin;
				$sess_data['username'] = $data->username;
				$this->session->set_userdata($sess_data);
			}

			redirect('Co_database/sepatu');
		}
		else{

			$this->session->set_flashdata('pesan', 'user / pass ilegal !');
			redirect('login');

		}
	}

	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
