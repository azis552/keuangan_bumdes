<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Fungsi
{
protected $ci;              
public function __construct()
{
   $this->ci=& get_instance();  
   $this->ci->load->model('M_admin');   
   $this->ci->load->model('M_nasabah');                           
}
function user_login(){
    $User_ID  = $this->ci->session->userdata('id_user');
    $user_data = $this->ci->M_admin->get($User_ID)->row();
    return $user_data;
    }
function user_login_n(){
        $User_ID  = $this->ci->session->userdata('id_nasabah');
        $user_data = $this->ci->M_nasabah->get($User_ID)->row();
        return $user_data;
        }
    
}                
                            
                                                
/* End of file fungsi.php */
    
                        