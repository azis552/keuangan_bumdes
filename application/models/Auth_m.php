<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Auth_m extends CI_Model {
                        
public function login($post){
	  $this->db->select('*');
	  $this->db->from('v_login_peg');                  
	  $this->db->where('username', $post['username']);
	  $this->db->where('password', md5($post['password']));          
	  $query = $this->db->get();  
	  return $query;              
}
public function login_n($post){
	$this->db->select('*');
	$this->db->from('tb_nasabah');                  
	$this->db->where('username', $post['username']);
	$this->db->where('password', md5($post['password']));          
	$query = $this->db->get();  
	return $query;              
}
public function cek_username($username){
	$this->db->select('*');
	$this->db->from('cek_username');
	$this->db->where('username', $username);
	$query = $this->db->get();  
	return $query;
}
public function cek_nik_exist($nik){
	$this->db->select('*');
	$this->db->from('cek_nik_exist');
	$this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
}

public function cek_email($email){
	$this->db->select('*');
	$this->db->from('cek_email');
	$this->db->where('email', $email);
	$query = $this->db->get();
	return $query;
}
public function lupa_password($email){
	$email = $params['email'] = $email;
	$this->db->select('*');
	$this->db->from('email_lupa_password');
	$this->db->where('email', $email);
	$query = $this->db->get();
	return $query;
}
public function ganti_password($key,$email){
	$update = $this->db->query("Call sp_ganti_password('".$email."','".$key."')");
}
public function update_password($key,$pass){
	$update = $this->db->query("Call sp_update_password('".$pass."','".$key."')");
}
public function key_akun($key,$email){
	$update = $this->db->query("Call sp_key_akun('".$key."','".email."')");
}

                        
                            
                        
}
                        
/* End of file auth_m.php */
    
                        