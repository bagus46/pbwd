<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Co_database_awal extends CI_Controller {

	public function index()
	{
		$this->new_produk();
	}
	
    function all_produk(){

    		$config['base_url']=base_url()."index.php/Co_database_awal/all_produk";
            $config['total_rows']= $this->db->query("SELECT * FROM sepatu;")->num_rows();
            $config['per_page']=12;
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
       		$this->load->view('produk', $data);
    }
 
 	function new_produk(){

    		$config['base_url']=base_url()."index.php/Co_database_awal/new_produk";
            $config['total_rows']= $this->db->query("SELECT * FROM sepatu where produk_baru = 1;")->num_rows();
            $config['per_page']=6;
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
        	$this->Mo_database->coba();
        	//$data['data']=$this->Mo_database->getAll($config , 'sepatu');
       		//$this->load->view('home', $data);
    }
 

}
