<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Adm_pegawai extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('M_admin');
		$this->load->library('form_validation');
	}
public function dashboard(){
	$this->template->load('template','dashboard');
}
public function index()
{	
	$coba['data'] = $this->M_admin->daftar_pegawai();
    $this->template->load('template','adm_pegawai',$coba);            
}
public function tambah(){
	$x['ID_user']=$this->M_admin->get_user_id();
	$this->template->load('template','adm_pegawai_tambah',$x);
} 
public function add(){
	$post = $this->input->post(null, TRUE);
	$save = $this->M_admin->add($post);
	if($save == '1'){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('adm_pegawai');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('adm_pegawai/tambah');
	}
	
}
public function simpan_edit(){
	$post = $this->input->post(null, TRUE);
	$save = $this->M_admin->edit($post);
	if($save == '1'){
		$this->session->set_flashdata('edit', 'Your post has been Posted!');
		redirect('adm_pegawai');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('adm_pegawai/tambah');
	}
	
}
public function edit($id){
	$query = $this->M_admin->get($id);
	if($query->num_rows()>0){
	$data['row']=$query->row();
	$this->template->load('template','adm_pegawai_edit', $data); 
	}else{
		echo "<script>alert('data tidak ada')</script>";
		echo "<script> window.location='".site_url('adm_pegawai')."' </script>";
	}
	
}         
}
        

        
    /* End of file  adm_pegawai.php */
        
                            