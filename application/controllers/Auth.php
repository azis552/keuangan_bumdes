<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Auth extends CI_Controller {

public function index()
{
                
}
public function login(){
	$post = $this->input->post(null, TRUE);
	if(@$post['posisi']!= null){
		if(@$post['posisi'] == "Peg"){
			if(isset($post['login'])){
				$this->load->model('Auth_m');
				$query = $this->Auth_m->login($post);
				if($query->num_rows()>0){
					$row = $query->row();
					$params = array(
						'id_user' => $row->id_user,
						'username' => $row->username,
						'id_jabatan' => $row->id_jabatan,
						'nik'=>$row->NIK,
						'nama'=>$row->nama
					);
					$this->session->set_userdata($params);
					if($this->fungsi->user_login()->id_jabatan == 5){
						echo "<script>window.location='".site_url('adm_pegawai/dashboard')."'</script>";
					}elseif($this->fungsi->user_login()->id_jabatan == 1){
						echo "<script>window.location='".site_url('direktur_pegawai')."'</script>";
					}elseif($this->fungsi->user_login()->id_jabatan == 2){
						echo "<script>window.location='".site_url('bendahara_pegawai')."'</script>";
					}elseif($this->fungsi->user_login()->id_jabatan == 3){
						echo "<script>window.location='".site_url('administrasi_pegawai')."'</script>";
					}elseif($this->fungsi->user_login()->id_jabatan == 4){
						echo "<script>window.location='".site_url('kasir_pegawai')."'</script>";
					}
				}else{
					$this->session->set_flashdata('salah_input', 'Your post has been Posted!');
						echo "<script>window.location='".site_url('login')."'</script>";
				}
			}else{
				$this->session->set_flashdata('input_kosong', 'Your post has been Posted!');
				echo "<script>window.location='".site_url('login')."'</script>";
			}
		}else{
			if($post['captha'] == $post['hasil_captha']){
			if(isset($post['login'])){
				$this->load->model('Auth_m');
				$query = $this->Auth_m->login_n($post);
				if($query->num_rows()>0){
					$akun = $query->result();
					foreach ($akun as $i){
						$status = $i->akun;
					}
			
					if($status == "aktif"){
					$row = $query->row();
					$params = array(
						'id_nasabah' => $row->id,
						'username' => $row->username,
						'jabatan' => "Nasabah",
						'id_jabatan' => 6,
					);
					}else{
						$this->session->set_flashdata('tidak_aktif', 'Your post has been Posted!');
						echo "<script>window.location='".site_url('login')."'</script>";
					}		
					$this->session->set_userdata($params);
					echo "<script>window.location='".site_url('nasabah')."'</script>";
				
				}else{
					$this->session->set_flashdata('salah_input', 'Your post has been Posted!');
						echo "<script>window.location='".site_url('login')."'</script>";
				}
			}else{
				$this->session->set_flashdata('input_kosong', 'Your post has been Posted!');
				echo "<script>window.location='".site_url('login')."'</script>";
			}
		}else{
			$this->session->set_flashdata('captha_salah', 'Your post has been Posted!');
				echo "<script>window.location='".site_url('login')."'</script>";
		}
		}
	}else{
		$this->session->set_flashdata('hak_akses_kosong', 'Your post has been Posted!');
				echo "<script>window.location='".site_url('login')."'</script>";
	}

} 
public function logout(){
	$params = array('username','password');
    $this->session->unset_userdata($params);
	redirect('login');    
}      
}
        
    /* End of file  auth.php */
        
                            