<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panggil extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function profil()
	{
		$this->load->view('profil');
	}
	public function pemesanan()
	{
		$this->load->view('pemesanan');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function produk()
	{
		$this->load->view('produk');
	}

}
