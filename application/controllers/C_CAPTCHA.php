<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_captcha extends CI_Controller {

	public function __construct()
	 {
	 	parent::__construct();

                //load helper dan library
	        $this->load->library('session');
		$this->load->helper( array('captcha', 'url') );
	 }

	public function index()
	{

		//posisi folder untuk menyimpan gambar captcha
		$path = './assets/captcha/';

		//membuat folder apabila folder captcha tidak ada
		if ( !file_exists($path) )
		{
			$create = mkdir($path, 0777);
			if ( !$create)
			return;
		}

		//Menampilkan huruf acak untuk dijadikan captcha
		$word = array_merge(range('0', '9'), range('A', 'Z'));
		$acak = shuffle($word);
		$str  = substr(implode($word), 0, 5);

		//Menyimpan huruf acak tersebut kedalam session
		$data_ses = array('captcha_str' => $str	);
		$this->session->set_userdata($data_ses);

		//array untuk menampilkan gambar captcha
		$vals = array(
		    'word'	=> $str, //huruf acak yang telah dibuat diatas
		    'img_path'	=> $path, //path untuk menyimpan gambar captcha
		    'img_url'	=> base_url().'assets/captcha/', //url untuk menampilkan gambar captcha
		    'img_width'	=> '150', //lebar gambar captcha
		    'img_height' => 40, //tinggi gambar captcha
		    'expiration' => 7200 //expired time per captcha
		);

		$cap = create_captcha($vals);
		$cap['captcha_image'] = $cap['image']; //variable array untuk menampilkan captcha pada view
		$data = $this->Mo_database->getData();
		$gluguk['data'] = $data;
		$gluguk['captcha_image']= $cap['captcha_image'];
		
		$this->load->view('pemesanan',$gluguk); //load view
		
	}

	//function untuk action form kirim pesan pada view
	public function kirim_pesan(){
		//cek apakah secure code yang diinputkan oleh User sudah benar atau belum.
		if($this->input->post('input_captcha') != $this->session->userdata('captcha_str')){
			echo '
				<script>
					alert("Huruf Captcha yang Anda masukkan tidak sama. Silahkan coba sekali lagi");
					window.location = "'.site_url().'/c_captcha";
				</script>
			';
		}else{
			echo 'Nama : '.$this->input->post('nama').'<br>';
			echo 'Pesan : '.$this->input->post('pesan');
		}
	}

}