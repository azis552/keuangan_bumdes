<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login extends CI_Controller {
	function __construct()
	{
		
        parent::__construct();
        check_already_login();
		$this->load->model('M_nasabah');
		$this->load->model('Auth_m');
		$this->load->library('form_validation');
		$this->load->library('pdf');
		$this->load->helper('string');
	}
public function index()
{
    $this->load->view('login');         
}
public function daftar()
{
    $this->load->view('register');         
}
public function lupa_sandi()
{
    $this->load->view('lupa_password');         
}
public function ganti_password()
{
    $this->load->view('ganti_password');         
}
public function simpan_password(){
	$post = $this->input->post(null, TRUE);
	$pass = md5($post['password_baru']);
	$key = $post['key'];
	$update = $this->Auth_m->update_password($key,$pass);
	$this->session->set_flashdata('password_update', 'Your post has been Posted!');
	redirect('login');
}
public function cari_email(){
	$post = $this->input->post(null, TRUE);
	$email  = $post['email'];
	$cari = $this->Auth_m->lupa_password($post['email'])->num_rows();
	$reset_key =  random_string('alnum', 50);
	if($cari >=1){
		
		$this->load->library('email');
		$config = array();
		$config['charset'] = 'utf-8';
		$config['protocol']= "smtp";
		$config['mailtype']= "html";
		$config['smtp_host']= "ssl://mail.udbsemen.com";//pengaturan smtp
		$config['smtp_port']= "465";
		$config['smtp_user']= "bumdesmasemen@udbsemen.com"; // isi dengan email kamu
		$config['smtp_pass']= "123Qaz123#@"; // isi dengan password kamu
		$config['newline']="\r\n"; 
		//memanggil library email dan set konfigurasi untuk pengiriman email
			
		$this->email->initialize($config);
		//konfigurasi pengiriman
		$this->email->from($config['smtp_user']);
		$this->email->to($email);
		$this->email->subject("Reset your password");

		$message = "<p>Anda melakukan permintaan reset password</p>";
		$message .= "<a href='".site_url('login/ganti_password/'.$reset_key)."'>klik reset password</a>";
		$this->email->message($message);
		
		if($this->email->send())
		{
			$update = $this->Auth_m->ganti_password($reset_key,$email);
			$this->session->set_flashdata('kirim_email', 'Your post has been Posted!');
			redirect('login');
		}else
		{
			echo $this->email->print_debugger();
			echo "Berhasil melakukan registrasi, gagal mengirim verifikasi email";
		}

	}else{
		echo "tidak ada";
	}
}
        
}
        
    /* End of file  login.php */
        
                            