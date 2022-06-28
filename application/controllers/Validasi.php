<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Validasi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->library('form_validation');
	}
public function cek_username()
{
	$username = $this->input->post('nama');
	$cek = $this->Auth_m->cek_username($username);
	if($cek->num_rows()>0){
		echo "false";
	}else{
		echo "true";
	}
}
public function cek_username2()
{
	$username = $this->input->post('username');
	$cek = $this->Auth_m->cek_username($username);
	if($cek->num_rows()>0){
		echo "false";
	}else{
		echo "true";
	}
}
public function cek_nik()
{
	$nik = $this->input->post('nik');
	$cek = $this->Auth_m->cek_nik_exist($nik);
	if($cek->num_rows()>0){
		echo "false";
	}else{
		echo "true";
	}
}
public function cek_nik1()
{
	$nik = $this->input->post('nik');
	$cek = $this->Auth_m->cek_nik_exist($nik);
	if($cek->num_rows()>0){
		echo "false";
	}else{
		echo "true";
	}
}
public function cek_pengajuan(){
	$nik = $this->input->post('nik');
	$cek = $this->Auth_m->cek_pengajuan_nik_exist($nik);
	if($cek->num_rows()>0){
		echo "false";
	}else{
		echo "true";
	}
}
public function cek_email(){
	$email = $this->input->post('email');
	$cek = $this->Auth_m->cek_email($email);
	if($cek->num_rows()>0){
		echo "false";
	}else{
		echo "true";
	}
}
        
}
        
    /* End of file  validasi.php */
        
                            