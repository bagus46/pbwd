<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Co_database extends CI_Controller {

	public function index()
	{
		//$data = $this->Mo_database->getData();
		//$this->load->view('admin_login', array('data' => $data));
	}
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata('username'))
			redirect('co_login');
		

        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->database();
    }

    function search_keyword()
    {	

    	$config['base_url']=base_url()."index.php/Co_database/sepatu";
            $config['total_rows']= $this->db->query("SELECT * FROM sepatu;")->num_rows();
            $config['per_page']=11;
        	$config['num_links'] = 2;
            $config['uri_segment']=3;

             //Tambahan untuk styling
	        $config['full_tag_open'] = "<ul class='pagination'>";
	        $config['full_tag_close'] ="</ul>";
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	        $config['next_tag_open'] = "<li>";
	        $config['next_tagl_close'] = "</li>";
	        $config['prev_tag_open'] = "<li>";
	        $config['prev_tagl_close'] = "</li>";
	        $config['first_tag_open'] = "<li>";
	        $config['first_tagl_close'] = "</li>";
	        $config['last_tag_open'] = "<li>";
	        $config['last_tagl_close'] = "</li>";
 
            $config['first_link']='< Pertama ';
        	$config['last_link']='Terakhir > ';
        	$config['next_link']='> ';
        	$config['prev_link']='< ';
            $this->pagination->initialize($config);

            $keyword    =   $this->input->post('keyword');
          // $stringa = "SELECT * FROM `sepatu` WHERE nama_sepatu LIKE'%";
 		//$stringb="%' OR harga LIKE '%";
 		//$stringc="%'OR id_sepatu LIKE'%";
 		//$stringd="%'OR jumlah_sepatu LIKE'%";
 		$a = $this->db->query("select * FROM sepatu where nama_sepatu like '%".$keyword."%';");
 
        // konfigurasi model dan view untuk menampilkan data
	        
        
        
        if ($a->num_rows() ==0) {
        	
        	// $this->sepatu();
        	$this->session->set_flashdata('message', 'data tidak ditemukan');
        	redirect('Co_database/sepatu');
        }else
        	{
        		$data['data']    =   $this->Mo_database->search($keyword);
        		$this->load->view('login_sepatu',$data);

        	}

    }

    function sepatu(){

    	$config['base_url']=base_url()."index.php/Co_database/sepatu";
            $config['total_rows']= $this->db->query("SELECT * FROM sepatu;")->num_rows();
            $config['per_page']=11;
        	$config['num_links'] = 2;
            $config['uri_segment']=3;

             //Tambahan untuk styling
	        $config['full_tag_open'] = "<ul class='pagination'>";
	        $config['full_tag_close'] ="</ul>";
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	        $config['next_tag_open'] = "<li>";
	        $config['next_tagl_close'] = "</li>";
	        $config['prev_tag_open'] = "<li>";
	        $config['prev_tagl_close'] = "</li>";
	        $config['first_tag_open'] = "<li>";
	        $config['first_tagl_close'] = "</li>";
	        $config['last_tag_open'] = "<li>";
	        $config['last_tagl_close'] = "</li>";
 
            $config['first_link']='< Pertama ';
        	$config['last_link']='Terakhir > ';
        	$config['next_link']='> ';
        	$config['prev_link']='< ';
            $this->pagination->initialize($config);
 
        // konfigurasi model dan view untuk menampilkan data
	        $this->load->model('Mo_database');
        	$data['data']=$this->Mo_database->getAll($config , 'sepatu');
       		$this->load->view('login_sepatu', $data);
    }

    function admin(){

    	$config['base_url']=base_url()."index.php/Co_database/admin";
            $config['total_rows']= $this->db->query("SELECT * FROM admin;")->num_rows();
            $config['per_page']=11;
        	$config['num_links'] = 2;
            $config['uri_segment']=3;

             //Tambahan untuk styling
	        $config['full_tag_open'] = "<ul class='pagination'>";
	        $config['full_tag_close'] ="</ul>";
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	        $config['next_tag_open'] = "<li>";
	        $config['next_tagl_close'] = "</li>";
	        $config['prev_tag_open'] = "<li>";
	        $config['prev_tagl_close'] = "</li>";
	        $config['first_tag_open'] = "<li>";
	        $config['first_tagl_close'] = "</li>";
	        $config['last_tag_open'] = "<li>";
	        $config['last_tagl_close'] = "</li>";
 
            $config['first_link']='< Pertama ';
        	$config['last_link']='Terakhir > ';
        	$config['next_link']='> ';
        	$config['prev_link']='< ';
            $this->pagination->initialize($config);
 
        // konfigurasi model dan view untuk menampilkan data
	        $this->load->model('Mo_database');
        	$data['data']=$this->Mo_database->getAll($config , 'admin');
       		$this->load->view('login_admin', $data);
    }

	function pemesanan(){

    	$config['base_url']=base_url()."index.php/Co_database/pemesanan";
            $config['total_rows']= $this->db->query("SELECT * FROM pemesanan;")->num_rows();
            $config['per_page']=11;
        	$config['num_links'] = 2;
            $config['uri_segment']=3;

             //Tambahan untuk styling
	        $config['full_tag_open'] = "<ul class='pagination'>";
	        $config['full_tag_close'] ="</ul>";
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	        $config['next_tag_open'] = "<li>";
	        $config['next_tagl_close'] = "</li>";
	        $config['prev_tag_open'] = "<li>";
	        $config['prev_tagl_close'] = "</li>";
	        $config['first_tag_open'] = "<li>";
	        $config['first_tagl_close'] = "</li>";
	        $config['last_tag_open'] = "<li>";
	        $config['last_tagl_close'] = "</li>";
 
            $config['first_link']='< Pertama ';
        	$config['last_link']='Terakhir > ';
        	$config['next_link']='> ';
        	$config['prev_link']='< ';
            $this->pagination->initialize($config);
 
        // konfigurasi model dan view untuk menampilkan data
	        $this->load->model('Mo_database');
        	$data['data']=$this->Mo_database->getAll($config , 'pemesanan');
       		$this->load->view('login_pemesanan', $data);
    }
 
 	function formadd(){
 		$this->load->view('formadd');
 	}

 	function formaddadmin(){
 		$this->load->view('formaddadmin');
 	}
 	function do_insert(){
		
		$url = $this->do_upload();
		$id_sepatu = $_POST['id_sepatu'];
		$nama_sepatu = $_POST['nama_sepatu'];
		$jumlah_sepatu = $_POST['jumlah_sepatu'];
		$harga = $_POST['harga'];
		$gambar = $url;
		$data_insert = array('id_sepatu' => $id_sepatu, 
		'nama_sepatu' => $nama_sepatu , 'jumlah_sepatu' => $jumlah_sepatu,'harga' => $harga,'gambar'=>$gambar);

		$res = $this->Mo_database->insertData('sepatu', $data_insert);

		if($res >= 1){
			redirect('Co_database/sepatu');
		}else{
			echo "data gagal masuk";
		}
	}

	function do_upload(){
		$type = explode(".", $_FILES['gambar']['name']);
		$type = $type [count($type)-1];
		$url = 'assets/images/sepatu/'.uniqid(rand()).'.'.$type;
		if(in_array($type, array('jpg','jpeg','gif','png','JPG','PNG','JPEG')))
			if(is_uploaded_file($_FILES['gambar']['tmp_name']))
				if(move_uploaded_file($_FILES['gambar']['tmp_name'], $url))
					return $url;
			return "";
	}

	function do_delete($kode_barang ){
		$res = $this->Mo_database->deleteData($kode_barang );
		if($res >= 1){
			redirect('Co_database/sepatu');
		}
	} 

	function do_edit($id_sepatu){
		$spt = $this->Mo_database->getDataSepatu("where id_sepatu = '$id_sepatu' ", "sepatu");
		$data = array('id_sepatu' => $spt[0]['id_sepatu'], 
			'nama_sepatu' => $spt[0]['nama_sepatu'],
			'jumlah_sepatu' => $spt[0]['jumlah_sepatu'],
			'harga' => $spt[0]['harga'],
			'gambar' => $spt[0]['gambar'],
			'produk_baru' => $spt[0]['produk_baru']);
		$this->load->view('formeditsepatu', $data);
	}


	function do_update($id_sepatu){
		$url = $this->do_upload();
		$id_sepatu = $_POST['id_sepatu'];
		$nama_sepatu = $_POST['nama_sepatu'];
		$jumlah_sepatu = $_POST['jumlah_sepatu'];
		$harga = $_POST['harga'];
		$produk_baru = $_POST['produk_baru'];
		$gambar = $url;
		if(empty($url))
			$gambar = $_POST['gambarlama'];
		
		$data_update = array('id_sepatu' => $id_sepatu, 
		'nama_sepatu' => $nama_sepatu , 'jumlah_sepatu' => $jumlah_sepatu,'harga' => $harga,'gambar'=>$gambar , 'produk_baru'=>$produk_baru );

		$where = array('id_sepatu' => $id_sepatu );
		$res = $this->Mo_database->updateData('sepatu',$data_update,$where);

		if($res >= 1){
			redirect('Co_database/sepatu');
		}

	}


	function do_insert_admin(){

		$id_admin = $_POST['id_admin'];
		$nama_admin = $_POST['nama_admin'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data_insert = array('id_admin' => $id_admin, 
		'nama_admin' => $nama_admin , 'username' => $username,'password' => $password);

		$res = $this->Mo_database->insertData('admin', $data_insert);


		if($res >= 1){
			redirect('Co_database/admin');
		}else{
			echo "data gagal masuk";
		}
	}

	function do_edit_admin($id_admin){
		$spt = $this->Mo_database->getDataSepatu("where id_admin = '$id_admin' ", "admin");
		$data = array('id_admin' => $spt[0]['id_admin'], 
			'nama_admin' => $spt[0]['nama_admin'],
			'username' => $spt[0]['username'],
			'password' => $spt[0]['password']);
		$this->load->view('formeditadmin', $data);
	}

	function do_update_admin($id_admin){
		$id_admin = $_POST['id_admin'];
		$nama_admin = $_POST['nama_admin'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$data_update = array('id_admin' => $id_admin, 
		'nama_admin' => $nama_admin , 'username' => $username,'password' => $password);

		$where = array('id_admin' => $id_admin );
		$res = $this->Mo_database->updateData('admin', $data_update, $where);

		if($res >= 1){
			redirect('Co_database/admin');
		}

	}

	function do_delete_admin($id_admin ){
		$res = $this->Mo_database->deleteDataAdmin($id_admin );
		if($res >= 1){
			redirect('Co_database/admin');
		}
	} 

	function do_delete_pesanan($tanggal_pemesanan ){
		$res = $this->Mo_database->deleteDataPesanan($tanggal_pemesanan);
		if($res >= 1){
			redirect('Co_database/pemesanan');
		}
	} 

}
