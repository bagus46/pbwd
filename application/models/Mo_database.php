<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mo_database extends CI_Model {

	function cek($username , $password){
		$this->db->where('username',$username);
		$this->db->where('password', $password);
		return $this->db->get('admin');
	}

	function getDataSepatu($where = "", $dabes){
		$data = $this->db->query('select * from '.$dabes ." ".$where);
		return $data -> result_array();
	}

	public function getData(){
		$data = $this->db->query('select * from sepatu where 1');
		return $data -> result_array();
	}
	
	function coba(){
		$data = $this->getDataSepatu("where produk_baru = 1 ", "sepatu");
		$this->load->view('home', array('data' => $data));

	}

	 function search($keyword)
    {
        $this->db->like('nama_sepatu',$keyword);
    	//$stringa = "SELECT * FROM `sepatu` WHERE nama_sepatu LIKE'%";
 		//$stringb="%' OR harga LIKE '%";
 		//$stringc="%'OR id_sepatu LIKE'%";
 		//$stringd="%'OR jumlah_sepatu LIKE'%";
 		//$this->db->query($stringa.$keyword.$stringb.$keyword.$stringc.$keyword.$stringd.$keyword."';");
        $query  = $this->db->get('sepatu');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }
    

	function getAll($config, $database){  
        $hasilquery=$this->db->get( $database, $config['per_page'], $this->uri->segment(3));
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }

    public function insertData($nama_tabel, $data){
		$res = $this->db->insert($nama_tabel, $data);
		return $res;
	}

	public function deleteData($kode_barang){
		//$res = $this->db->delete($nama_tabel,$where);
		$res = $this->db->query("DELETE FROM sepatu WHERE id_sepatu =".$kode_barang);
		return $res;
	}

	public function updateData($nama_tabel, $data, $where){
		$res = $this->db->update($nama_tabel, $data, $where);
		return $res;
	}

	public function deleteDataAdmin($id_admin){
		//$res = $this->db->delete($nama_tabel,$where);
		$res = $this->db->query("DELETE FROM admin WHERE id_admin =".$id_admin);
		return $res;
	}

	public function deleteDataPesanan($tanggal_pemesanan){
		//$res = $this->db->delete($nama_tabel,$where);
		$string1 = "DELETE FROM pemesanan WHERE tanggal_pemesanan = \"";
		$string2 = "\" ;";
		$res = $this->db->query($string1.$tanggal_pemesanan.$string2);
		return $res;
	}

}
