<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Pegawai extends CI_Controller {
    function __construct()
	{
		
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->library('form_validation');
		$this->load->library('pdf');
		check_not_login();
	}
public function profil(){
     $data['notif'] = $this->M_pegawai->notifikasi()->result();
        $data['profil'] = $this->M_pegawai->profil($this->fungsi->user_login()->id_user)->result();
        $this->template->load('template','profil_pegawai',$data);    
}
public function edit_profil(){
    $post = $this->input->post(null, TRUE);
    $ubah = $this->M_pegawai->edit_profil($post);
    if($ubah== 1){
		$this->session->set_flashdata('ubah_berhasil', 'Your post has been Posted!');
		redirect('pegawai/profil');
	}else{
		$this->session->set_flashdata('ubah_gagal', 'Your post has been Posted!');
		redirect('pegawai/profil');
	}
}
        
}
        
    /* End of file  Pegawai.php */
        
                            