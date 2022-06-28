<?php 

	function check_already_login(){
		$ci =& get_instance();
		$user_session= $ci->session->userdata('username');
		$user_jab= $ci->session->userdata('id_jabatan');
		if($user_session && $user_jab == 3){
			redirect('administrasi_pegawai');
		}else if($user_session && $user_jab == 1){
			redirect('direktur_pegawai');
		}else if($user_session && $user_jab == 2){
			redirect('bendahara_pegawai');
		}else if($user_session && $user_jab == 6){
			redirect('nasabah');
		}else if($user_session && $user_jab == 5){
			redirect('adm_pegawai');
		}
	}
	function check_not_login(){
		$ci =& get_instance();
		$user_session= $ci->session->userdata('username');
		if(!$user_session){
			redirect('login');
		}
	}

function check_administrasi(){
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->id_jabatan == 3){
       	redirect('administrasi_pegawai');
    }

}
                        
/* End of file fungsi_helper.php */
    
                        