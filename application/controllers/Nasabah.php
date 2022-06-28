<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Nasabah extends CI_Controller {
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('M_nasabah');
		$this->load->library('form_validation');
		$this->load->library('pdf');
		$this->load->helper('string');
		$this->load->model('Auth_m');
		$this->load->helper('rupiah_helper');
			$ci =& get_instance();
	    $user_jab= $ci->session->userdata('id_jabatan');
	    if($user_jab != 6){
	        check_already_login();
	    } 
			
		
	}
public function index()
{
	check_not_login();
	$cek['profil_dt_dr'] = $this->M_nasabah->cek_profil_data_dr($this->fungsi->user_login_n()->nik)->result();
	$this->template->load('template_n','dashboard_nas',$cek);
}
public function register(){
	$post = $this->input->post(null, TRUE);
	$cek = $this->M_nasabah->cek_pengajuan_nik_exist($post['nik']);
	$email = $post['email'];
	
	if($cek->num_rows() > 0 ){
		$this->session->set_flashdata('tanggung', 'Your post has been Posted!');
		redirect('login/daftar');
	}else{
		
		
		$reset_key =  random_string('alnum', 50);
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
		$this->email->subject("Verifikasi Akun");

		$message = "<p>Verifikasi akun anda</p>";
		$message .= "<a href='".site_url('nasabah/aktifasi_akun/'.$reset_key)."'>Klik Verifikasi</a>";
		$this->email->message($message);
		$kirim = $this->email->send();
		$post['key'] = $reset_key;
		$save = $this->M_nasabah->daftar($post);		
			$this->session->set_flashdata('simpan', 'Your post has been Posted!');
			redirect('login');
		if($save){
		}else{
			$this->session->set_flashdata('gagal', 'Your post has been Posted!');
			redirect('login/daftar');
		}
	}
	
}
public function aktifasi_akun(){
	$key = $this->uri->segment(3);
	$status = "aktif";
	 $update = $this->M_nasabah->aktifasi($key,$status);
	 if($update == 1){
		$this->session->set_flashdata('akun_aktif', 'Your post has been Posted!');
		redirect('login');
	 }else{
		$this->session->set_flashdata('gagal_aktif', 'Your post has been Posted!');
		redirect('login');
	 }
}
public function data_profil(){
	check_not_login();
	$profil['data'] = $this->M_nasabah->view_dt_profil($this->fungsi->user_login_n()->nik)->result();
	$this->template->load('template_n','nas_data_profil',$profil);
}
public function profil_nas(){
	check_not_login();
	$profil['data'] = $this->M_nasabah->data_profil($this->fungsi->user_login_n()->nik)->result();
	$this->template->load('template_n','profil_nas',$profil);
}     
public function edit_nasabah(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$save = $this->M_nasabah->update_nas($post);
	if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('nasabah/profil_nas');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('nasabah/profil_nas');
	}
}
public function edit_profil_kelompok(){
	check_not_login();
	$data['kode'] = "Kel-".str_shuffle($this->fungsi->user_login_n()->nik);
	$data['desa'] = $this->M_nasabah->view_dt_profil($this->fungsi->user_login_n()->nik)->result();
	
	$data['kelompok'] = $this->M_nasabah->data_kelompok($this->fungsi->user_login_n()->nik)->result();
	
	$this->template->load('template_n','nas_edit_profil_kel',$data);
}
public function edit_kelompok(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$save = $this->M_nasabah->update_data_kel($post);
	if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('nasabah/kelompok');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('nasabah/kelompok');
	}
}  
public function kelompok(){
	check_not_login();
	$data['kelompok'] = $this->M_nasabah->data_kelompok($this->fungsi->user_login_n()->nik)->result();
	foreach ($data['kelompok'] as $i){
		$id_kel = $i->id_kelompok;
	}
	if(@$id_kel == null){
		$data['cek'] = 1;
	}
	
	@$data['kelompok2'] = $this->M_nasabah->data_kelompok2($id_kel = $i->id_kelompok)->result();
	@$data['posisi'] = $this->M_nasabah->posisi($this->fungsi->user_login_n()->nik)->result();
	$this->template->load('template_n','nas_kelompok',$data);
} 
public function edit_anggota_kel(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$save = $this->M_nasabah->edit_anggota_kel($post);
	if($save== 1){
		$this->session->set_flashdata('edit_berhasil', 'Your post has been Posted!');
		redirect('nasabah/kelompok');
	}else{
		$this->session->set_flashdata('edit_gagal', 'Your post has been Posted!');
		redirect('nasabah/kelompok');
	}
}
public function tambah_anggota_kel(){
	check_not_login();
	$data['id_kel']= $this->fungsi->user_login_n()->id_kelompok;
	$data['nik']=$this->fungsi->user_login_n()->nik;
	$data['status_anggota']=$this->M_nasabah->status_keanggotaan($this->fungsi->user_login_n()->nik)->num_rows();
	$this->template->load('template_n','tambah_anggota_kelompok',$data);
}
public function tambah_anggota_kel_1(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$save = $this->M_nasabah->tambah_anggota_kel1($post);
	if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('nasabah/tambah_anggota_kel');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('nasabah/tambah_anggota_kel');
	}
}
public function tambah_anggota_kel_baru(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$email = $post['email'];
	$reset_key =  random_string('alnum', 50);
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
		$this->email->subject("Verifikasi Akun");

		$message = "<p>Verifikasi akun anda</p>";
		$message .= "<a href='".site_url('nasabah/aktifasi_akun/'.$reset_key)."'>Klik Verifikasi</a>";
		$this->email->message($message);
		$this->email->send();
		$post['key'] = $reset_key;


	$save = $this->M_nasabah->tambah_anggota_kel($post);
	if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('nasabah/tambah_anggota_kel');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('nasabah/tambah_anggota_kel');
	}
}
public function pengajuan(){
	check_not_login();
	$data['pj'] = $this->M_nasabah->data_profil($this->fungsi->user_login_n()->nik)->result();
	$data['dump'] = $this->M_nasabah->data_sem_peng($this->fungsi->user_login_n()->id_kelompok)->result();
	$data['nik'] = $this->M_nasabah->nik_anggota($this->fungsi->user_login_n()->id_kelompok)->result();
	$data['id_peng'] = $this->M_nasabah->id_pengajuan($this->fungsi->user_login_n()->nik);
	$data_nas = $this->M_nasabah->data_nasabah($this->fungsi->user_login_n()->nik)->result();
		foreach ($data_nas as $i){
		 $id_peng =	$i->id_pengajuan;
	}
	$data['progress'] = $this->M_nasabah->data_progress_pengajuan($this->fungsi->user_login_n()->nik,$id_peng)->result();
	
	$this->template->load('template_n','nas_pengajuan',$data);
}
public function data_nas_pengajuan(){
	check_not_login();
		$nik = $this->input->post('nik_anggota',TRUE);
		$data = $this->m_nasabah->cari_nik_ang($nik)->result();
        echo json_encode($data);
}
public function tambah_det_peng(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$post['besaran'] = preg_replace("/[^0-9]/", "", $post['besaran']);
	
	$cek_nik = $this->M_nasabah->cek_sem_peng($post['nik_ang'])->num_rows();
	if($cek_nik > 0 ){
		$this->session->set_flashdata('nik_ganda', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}else{
	$save = $this->M_nasabah->tam_det_penga($post);
	if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}
}
}
public function tambah_pengajuan(){
	check_not_login();
	$data = $this->M_nasabah->data_sem_peng($this->fungsi->user_login_n()->id_kelompok)->num_rows();
	if($data <= 1){
		$this->session->set_flashdata('gagal_kurang', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}else{
	$post = $this->input->post(null, TRUE);
	$config['upload_path'] = './upload/';
    $config['allowed_types'] = 'rar|zip';
    $config['max_size']     = '50048';
    $config['file_name']     = 'B-'.$this->fungsi->user_login_n()->nik."-".date('ymd');
    $config['overwrite'] = TRUE;
    $this->load->library('upload',$config,'berkas');
	$this->berkas->initialize($config);
    $berkas = $this->berkas->do_upload('berkas');
	$post['berkas_peng'] = $this->berkas->data('file_name');
	$post['periode_peng'] = 1;

	$coba = $this->M_nasabah->tambah_pengajuan($post);
	
	if($coba== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}
}
}
public function tambah_peng_per(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$post['besaran'] = preg_replace("/[^0-9]/", "", $post['besaran']);
	$config['upload_path'] = './upload/';
    $config['allowed_types'] = 'rar|zip';
    $config['max_size']     = '50048';
    $config['file_name']     = 'B-'.$this->fungsi->user_login_n()->nik."-".date('ymd');
    $config['overwrite'] = TRUE;
    $this->load->library('upload',$config,'berkas');
	$this->berkas->initialize($config);
    $berkas = $this->berkas->do_upload('berkas');
	$post['berkas'] = $this->berkas->data('file_name');
	$coba = $this->M_nasabah->tambah_pengajuan_per($post);
	
	if($coba== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}
}
public function cetak_bukti_pengumpulan(){
	check_not_login();
	$pdf = new FPDF('P','mm','A5');
        
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',16);
		// mencetak string
		$pdf->Image('./assets/landing/assets/dist/img/logo.jpeg',10,8,-600);
        $pdf->Cell(130,7,'BUKTI PENGUMPULAN BERKAS',0,1,'C');
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(130,7,'BUMDES BERSAMA "UDB"',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetLineWidth(1);
        $pdf->Line(10,29,140,29);
        $pdf->SetLineWidth(0);
		$pdf->Line(10,30,140,30);
		$data_nas = $this->M_nasabah->data_nasabah($this->fungsi->user_login_n()->nik)->result();
		foreach ($data_nas as $i){
		 $id_peng =	$i->id_pengajuan;
		}
		$data = $this->M_nasabah->bukti_pengumpulan_berkas($this->fungsi->user_login_n()->nik,$id_peng)->result();
		foreach($data as $i){
		$pdf->SetFont('Times','',12);
		$pdf->Cell(50,7,'',0,1,'C');
		$pdf->Cell(50,10,'ID Pengajuan',0,0,'L');
		$pdf->Cell(70,10,$i->id_pengajuan,0,1,'L');
		$pdf->Cell(50,10,'Nama',0,0,'L');
		$pdf->Cell(70,10,$i->nama_lengkap,0,1,'L');
		$pdf->Cell(50,10,'ID Berkas',0,0,'L');
		$pdf->Cell(70,10,$i->id_berkas,0,1,'L');
		$pdf->Cell(50,10,'Jenis Pengajuan',0,0,'L');
		$pdf->Cell(70,10,$i->nama_jns_pengajuan,0,1,'L');
		}
        $pdf->Output();
}
public function hapus_ang_kel(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$hapus = $this->M_nasabah->hapus_anggota($post);
	if($hapus== 1){
		$this->session->set_flashdata('berhasil_hapus', 'Your post has been Posted!');
		redirect('nasabah/kelompok');
	}else if($hapus == 2){
		$this->session->set_flashdata('gagal_hapus', 'Your post has been Posted!');
		redirect('nasabah/kelompok');
	}else if($hapus == 3){
		$this->session->set_flashdata('gagal_hapus1', 'Your post has been Posted!');
		redirect('nasabah/kelompok');
	}
}
public function edit_pengajuan(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$save = $this->M_nasabah->edit_anggota_pengajuan($post);
	if($save== 3){
		$this->session->set_flashdata('edit_berhasil', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}else if($save == 4){
		$this->session->set_flashdata('edit_gagal', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}
}
public function hapus_dump_pengajuan(){
	check_not_login();
	$post = $this->input->post(null, TRUE);
	$hapus = $this->M_nasabah->hapus_dump($post);
	if($hapus== 1){
		$this->session->set_flashdata('berhasil_hapus_dump', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}else{
		$this->session->set_flashdata('gagal_hapus_dump', 'Your post has been Posted!');
		redirect('nasabah/pengajuan');
	}
}
public function riwayat_angsuran(){
    $id_pengajuan = $this->M_nasabah->cek_id_pencairan($this->fungsi->user_login_n()->nik)->result();
    foreach($id_pengajuan as $i){
       $id_peng = $i->id_pencairan;
    }
	$data['angsuran'] = $this->M_nasabah->riwayat_angsuran($this->fungsi->user_login_n()->nik)->result();
	$this->template->load('template_n','nas_riwayat_angsuran',$data);
}
public function riwayat_pengajuan(){
	$data['pengajuan'] = $this->M_nasabah->riwayat_pengajuan($this->fungsi->user_login_n()->nik)->result();
	$this->template->load('template_n','nas_riwayat_pengajuan',$data);
}
public function penangguhan(){
	$penangguhan = $this->M_nasabah->penangguhan($this->fungsi->user_login_n()->nik)->result();
	foreach($penangguhan as $i){
		$data['jns_pengajuan'] = $i->jenis;
	}
	$data['penangguhan_pokok'] = $this->M_nasabah->penangguhan_pokok($this->fungsi->user_login_n()->nik)->result();
	$data['cek_penangguhan_pokok'] = $this->M_nasabah->cek_penangguhan_pokok($this->fungsi->user_login_n()->nik)->num_rows();
	$data['data_penangguhan_pokok'] = $this->M_nasabah->cek_penangguhan_pokok($this->fungsi->user_login_n()->nik)->result();
	$data['penangguhan_bh'] = $this->M_nasabah->penangguhan_bh($this->fungsi->user_login_n()->nik)->result();
	$data['cek_penangguhan_bh'] = $this->M_nasabah->cek_penangguhan_bh($this->fungsi->user_login_n()->nik)->num_rows();
	$data['data_penangguhan_bh'] = $this->M_nasabah->cek_penangguhan_bh($this->fungsi->user_login_n()->nik)->result();
	$this->template->load('template_n','nas_penangguhan',$data);
} 
public function penangguhan_pokok(){
	$post = $this->input->post(null, TRUE);
	$config['upload_path'] = './upload/';
    $config['allowed_types'] = 'rar|zip';
    $config['max_size']     = '50048';
    $config['file_name']     = 'BP-'.$this->fungsi->user_login_n()->nik."-".rand(date('ymd'),date('ymds'));
    $config['overwrite'] = TRUE;
    $this->load->library('upload',$config,'berkas');
	$this->berkas->initialize($config);
    $berkas = $this->berkas->do_upload('berkas');
	$post['berkas_penang'] = $this->berkas->data('file_name');
	$post['id_penangguhan'] = 'Pen-'.$this->fungsi->user_login_n()->nik."-".rand(date('ymd'),date('ymds'));
	$simpan = $this->M_nasabah->tam_penangguhan_pokok($post);
	if($simpan== 1){
		$this->session->set_flashdata('berhasil_pokok', 'Your post has been Posted!');
		redirect('nasabah/penangguhan');
	}else{
		$this->session->set_flashdata('gagal_pokok', 'Your post has been Posted!');
		redirect('nasabah/penangguhan');
	}
}   

public function penangguhan_bh(){
	$post = $this->input->post(null, TRUE);
	$config['upload_path'] = './upload/';
    $config['allowed_types'] = 'rar|zip';
    $config['max_size']     = '50048';
    $config['file_name']     = 'BP-'.$this->fungsi->user_login_n()->nik."-".rand(date('ymd'),date('ymds'));
    $config['overwrite'] = TRUE;
    $this->load->library('upload',$config,'berkas');
	$this->berkas->initialize($config);
    $berkas = $this->berkas->do_upload('berkas');
	$post['berkas_penang'] = $this->berkas->data('file_name');
	$post['id_penangguhan'] = 'Pen-'.$this->fungsi->user_login_n()->nik."-".rand(date('ymd'),date('ymds'));
	$simpan = $this->M_nasabah->tam_penangguhan_pokok($post);
	if($simpan== 1){
		$this->session->set_flashdata('berhasil_bh', 'Your post has been Posted!');
		redirect('nasabah/penangguhan');
	}else{
		$this->session->set_flashdata('gagal_bh', 'Your post has been Posted!');
		redirect('nasabah/penangguhan');
	}
}   

}
        
    /* End of file  Nasabah.php */
        
                            