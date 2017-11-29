<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Co_pesanan extends CI_Controller {

	function pesanan(){
		
        if($this->input->post('input_captcha') != $this->session->userdata('captcha_str')){
            echo '
                <script>
                    alert("Huruf Captcha yang Anda masukkan tidak sama. Silahkan coba sekali lagi");
                    window.location = "'.site_url().'/C_captcha";
                </script>
            ';
        }else{
         

                date_default_timezone_set('Asia/Jakarta');
        $tanggal_pemesanan = date("d-m-Y_h:i:s");

        $id_sepatu = $_POST['id_sepatu'];
        $jumlah_pesanan = $_POST['jumlah_pesanan'];
        $nama_pemesan = $_POST['nama_pemesan'];
        $nomor_pemesan = $_POST['nomor_pemesan'];
        $alamat_pemesan = $_POST['alamat_pemesan'];
        $email_pemesan = $_POST['email_pemesan'];
        $data_insert = array('tanggal_pemesanan' => $tanggal_pemesanan , 'id_sepatu' => $id_sepatu, 
        'jumlah_pesanan' => $jumlah_pesanan , 'nama_pemesan' => $nama_pemesan,'nomor_pemesan' => $nomor_pemesan,'alamat_pemesan'=>$alamat_pemesan,'email_pemesan'=>$email_pemesan);

        $res = $this->Mo_database->insertData('pemesanan', $data_insert);

        if($res >= 1){
        

            
        $ci = get_instance();
        $ci->load->library('email');
        $config['useragent']        = 'PHPMailer';
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "smtp.gmail.com";
       
        $config['smtp_user'] = "finalprojectdmpb@gmail.com";
        $config['smtp_pass'] = "finalprojectdmpb123";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        $config['smtp_port']        = 587;
$config['smtp_timeout']     = 30;                       // (in seconds)
$config['smtp_crypto']      = 'tls';                    // '' or 'tls' or 'ssl'
$config['smtp_debug']       = 0;                        // PHPMailer's SMTP debug info level: 0 = off, 1 = commands, 2 = commands and data, 3 = as 2 plus connection status, 4 = low level data output.
$config['smtp_auto_tls']    = false;                    // Whether to enable TLS encryption automatically if a server supports it, even if `smtp_crypto` is not set to 'tls'.
$config['smtp_conn_options'] = array();                 // SMTP connection options, an array passed to the function stream_context_create() when connecting via SMTP.
$config['wordwrap']         = true;
$config['wrapchars']        = 76;
        
        $ci->email->initialize($config);
 
        $ci->email->from('finalprojectdmpb@gmail.com', 'Putra');
        $list = array('widyasaputra150@gmail.com');
        $ci->email->to($list);
        $ci->email->subject('Pemesanan');
        $ci->email->message('ada pesanan masuk');
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
        

            redirect('welcome');
        }else{  
            echo "data gagal masuk";
            }


        }
	}

}
