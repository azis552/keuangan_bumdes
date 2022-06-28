<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_admin extends CI_Model {
                        
public function daftar_pegawai(){
	$this->db->select('*');
	$this->db->from('v_login_peg');
	$query = $this->db->get();
	
	return $query;                  
                                
}
                   
public function get($id = null){
    $this->db->from('v_login_peg');
    if($id != null){
        $this->db->where('id_user', $id);
    }
    $query=$this->db->get();
    return $query;
} 
public function get_user_id(){
    $title ="User";
    
    $cd = $this->db->query("SELECT * FROM id_user");     
    $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->id_user)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
       
        return $title.$kd;
}
public function add($post){
	$benar = 1;
	$salah =2;
    $user = $params['username'] = $post['username'];
    $pass =$params['password'] = md5($post['password']);
    $jab =$params['jabatan'] = $post['jabatan'];
    $user_id =$params['user_ID'] = trim($post['user_id']);
    $save =$this->db->query("CALL sp_tambah_pegawai('".$user_id."','".$user."','".$pass."','".$jab."','".$user_id."')");
	if($save){
		return $benar;
	}else{
		return $salah;
	}
}
public function edit($post){
	$benar = 1;
	$salah =2;
    $user = $params['username'] = $post['username'];
    $pass =$params['password'] = md5($post['password']);
    $jab =$params['jabatan'] = $post['jabatan'];
    $user_id =$params['user_ID'] = trim($post['user_id']);
    $save =$this->db->query("CALL sp_edit_pegawai('".$user_id."','".$user."','".$pass."','".$jab."','".$user_id."')");
	if($save){
		return $benar;
	}else{
		return $salah;
	}
}
public function hapus($id){
	
}        

}                   
                        

                        
/* End of file m_admin.php */
    
                        