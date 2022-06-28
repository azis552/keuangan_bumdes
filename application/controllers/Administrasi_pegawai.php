<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Administrasi_pegawai extends CI_Controller {
    function __construct()
	{
		parent::__construct();
        $this->load->model('M_pegawai');
        $this->load->model('M_nasabah');
		$this->load->library('form_validation');
        $this->load->library('pdf');
        $this->load->helper('download');
        $this->load->helper('rupiah_helper');
		check_not_login();
			$ci =& get_instance();
	    $user_jab= $ci->session->userdata('id_jabatan');
	    if($user_jab != 3){
	        check_already_login();
	    } 
	}
public function index()
{
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['pengajuan'] = $this->M_pegawai->data_pengajuan()->num_rows();
    $data['nasabah'] = $this->M_pegawai->data_nasabah()->num_rows();
    $data['kelompok'] = $this->M_pegawai->data_kelompok()->num_rows();
    $data['grafik'] = $this->M_pegawai->grafik_pengajuan()->result();
    $this->template->load('template','dashboard_administrasi',$data);                      
}
public function data_nasabah(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['nasabah'] = $this->M_pegawai->data_nasabah()->result();
    $this->template->load('template','administrasi_dt_nasabah',$data);  
}
public function data_pengajuan(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['pengajuan'] = $this->M_pegawai->data_pengajuan()->result();
    $this->template->load('template','administrasi_dt_pengajuan',$data);  
}
public function data_kelompok(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['kelompok'] = $this->M_pegawai->data_kelompok()->result();
    $this->template->load('template','administrasi_dt_kelompok',$data);  
}
public function anggota_kelompok(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $post = $this->input->post(null, TRUE);
    $data['anggota'] = $this->M_pegawai->data_anggota_kelompok($post['id_kelompok'])->result();
    echo json_encode($data);

}
public function download_berkas(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $post = $this->input->post(null, TRUE);
    $data = $this->M_pegawai->data_pengajuan($post['nik'])->result();
    foreach ($data as $i){
      $id_berkas = $i->id_berkas;
    }
    $path= ('./upload/'.$id_berkas);
    force_download($path, NULL);
    
}
public function pengajuan_baru(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['pengajuan'] = $this->M_pegawai->pengajuan_baru()->result();
    $this->template->load('template','administrasi_pengajuan_baru',$data);
}
public function seleksi_berkas(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $post = $this->input->post(null, TRUE);
    $post['id_user'] = $this->fungsi->user_login()->id_user;
    if($post['keputusan']=="Tidak Lolos Seleksi Berkas"){
        $save = $this->M_pegawai->tidak_lolos($post);
        if($save== 1){
            $this->session->set_flashdata('simpan', 'Your post has been Posted!');
            redirect('Administrasi_pegawai/pengajuan_baru');
        }else{
            $this->session->set_flashdata('gagal', 'Your post has been Posted!');
            redirect('Administrasi_pegawai/pengajuan_baru');
        }
    }else{
    $save = $this->M_pegawai->seleksi_berkas($post);
    if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('Administrasi_pegawai/pengajuan_baru');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('Administrasi_pegawai/pengajuan_baru');
    }
}
}
public function pembahasan(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['pembahasan'] = $this->M_pegawai->pembahasan()->result();
    $this->template->load('template','administrasi_pembahasan',$data);
}
public function update_pem_awal(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $post = $this->input->post(null, TRUE);
    $post['id_user'] = $this->fungsi->user_login()->id_user;
    $save = $this->M_pegawai->pembahasan_awal($post);
    if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('Administrasi_pegawai/pembahasan');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('Administrasi_pegawai/pembahasan');
	}
}
public function pembahasan_akhir(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['pembahasan'] = $this->M_pegawai->pembahasan_akhir()->result();
    $this->template->load('template','administrasi_pembahasan_akhir',$data);
}
public function update_pem_akhir(){
    
    $post = $this->input->post(null, TRUE);
    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'png|jpg|jpeg';
    $config['max_size']     = '50048';
    $config['file_name']     = 'Peta-'.$post['id_peng'].date('ymd');
    $config['overwrite'] = TRUE;
    $this->load->library('upload',$config,'ft_peta');
	$this->ft_peta->initialize($config);
    $ft_peta = $this->ft_peta->do_upload('ft_peta');
    $post['ft_peta'] = $this->ft_peta->data('file_name');
    
    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'png|jpg|jpeg';
    $config['max_size']     = '50048';
    $config['file_name']     = 'Rumah-'.$post['id_peng'].date('ymd');
    $config['overwrite'] = TRUE;
    $this->load->library('upload',$config,'ft_rumah');
	$this->ft_rumah->initialize($config);
    $ft_rumah = $this->ft_rumah->do_upload('ft_rumah');
    $post['ft_rumah'] = $this->ft_rumah->data('file_name');

    $config['upload_path'] = './upload/';
    $config['allowed_types'] = 'png|jpg|jpeg';
    $config['max_size']     = '50048';
    $config['file_name']     = 'Usaha-'.$post['id_peng'].date('ymd');
    $config['overwrite'] = TRUE;
    $this->load->library('upload',$config,'ft_usaha');
	$this->ft_usaha->initialize($config);
    $ft_usaha = $this->ft_usaha->do_upload('ft_usaha');
    $post['ft_usaha'] = $this->ft_usaha->data('file_name');

    $post['id_user'] = $this->fungsi->user_login()->id_user;
    $save = $this->M_pegawai->update_pembahasan_akhir($post);
    if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('Administrasi_pegawai/pembahasan_akhir');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('Administrasi_pegawai/pembahasan_akhir');
	}
}
public function musyawarah_pendanaan(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['pembahasan'] = $this->M_pegawai->musyawarah_pendanaan()->result();
    $this->template->load('template','administrasi_musyawaran_pendanaan',$data);
}
public function update_musy_penda(){
    $post = $this->input->post(null, TRUE);
    $post['id_user'] = $this->fungsi->user_login()->id_user;
    if($post['keputusan']=="Pengajuan Tidak Lolos"){
        $save = $this->M_pegawai->tidak_lolos($post);
        if($save== 1){
            $this->session->set_flashdata('simpan', 'Your post has been Posted!');
            redirect('Administrasi_pegawai/pengajuan_baru');
        }else{
            $this->session->set_flashdata('gagal', 'Your post has been Posted!');
            redirect('Administrasi_pegawai/pengajuan_baru');
        }
    }else{
    $save = $this->M_pegawai->musy_pendanaan($post);
    if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('Administrasi_pegawai/musyawarah_pendanaan');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('Administrasi_pegawai/musyawarah_pendanaan');
    }
}
}
public function formulir_verifikasi(){
    $post = $this->input->post(null, TRUE);
  
    $pdf = new FPDF('P','mm','A4');
        
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',16);
		// mencetak string
		$pdf->Image('./assets/landing/assets/dist/img/logo.jpeg',45,8,-600);
        $pdf->Cell(190,7,'FORM VERIFIKASI NASABAH',0,1,'C');
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(190,7,'BUMDES BERSAMA "UDB"',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetLineWidth(1);
        $pdf->Line(30,29,170,29);
        $pdf->SetLineWidth(0);
        $pdf->Line(30,30,170,30);
        $data = $this->M_pegawai->f_verifikasi($post['nik'])->result();
        
		foreach($data as $i){
        $ft_petanya = "./upload/".$i->ft_peta;
        $ft_rumahnya = "./upload/".$i->ft_rumah;
        $ft_usahanya = "./upload/".$i->ft_usaha;

    
		$pdf->SetFont('Times','',12);
        $pdf->Cell(100,2,'',0,1,'C');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Desa',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->nama_desa,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Nama Kelompok',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->nama_kelompok,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Nama Lengkap',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->nama_lengkap,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Tempat & Tanggal Lahir',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->tempat_lahir.",".date('d F Y',strtotime($i->tanggal_lahir)),0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Alamat',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->alamat,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Telepon',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->telepon,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Usaha',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->usaha_lain,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Tempat Tinggal',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->status_tmp_tinggal,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Lama Tinggal',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->lama_tinggal,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'No KTP',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->nik,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Jumlah Tanggungan',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->jumlah_tanggungan,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Pekerjaan',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->pekerjaan,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Tanggal Daftar',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,date('d F Y',strtotime($i->tanggal_daftar)),0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Pinjaman Diajukan',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,rupiah($i->besaran_pengajuan),0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(30,7,'Peta Menuju Rumah ',0,1,'L');
        $pdf->Cell(30,2,'',0,0,'C');
        $pdf->Cell(136,40,$pdf->Image($ft_petanya, $pdf->GetX(), $pdf->GetY(), 59.150),0,1,'C');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(80,7,'Foto Rumah ',0,0,'L');
        $pdf->Cell(80,7,'Foto Usaha ',0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(68,40,$pdf->Image($ft_rumahnya, $pdf->GetX(), $pdf->GetY(), 59.88),0,0,'L');
        $pdf->Cell(68,40,$pdf->Image($ft_usahanya, $pdf->GetX(), $pdf->GetY(), 59.88),0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(80,7,'Rekomendasi ',0,0,'L');
        $pdf->Cell(80,7,'Tim Verifikasi ',0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(68,15,rupiah($i->rekomendasi),0,0,'L');
        $pdf->Cell(68,15,"1. Nanik Sri Wilujeng  : ........... ",0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(68,15,"",0,0,'L');
        $pdf->Cell(68,15,"2. Arti                           : .............",0,0,'L');
        $pdf->AddPage();
        $pdf->Image('./assets/landing/assets/dist/img/logo.jpeg',48,8,-500);
        $pdf->SetFont('Times','B',16);
        $pdf->Cell(190,7,'PROFIL USAHA ANGGOTA',0,1,'C');
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(190,7,'BUMDES BERSAMA "UDB"',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetLineWidth(1);
        $pdf->Line(30,33,170,33);
        $pdf->SetLineWidth(0);
        $pdf->Line(30,34,170,34);
        $pdf->SetFont('Times','',12);
        $pdf->Cell(100,5,'',0,1,'C');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'I. IDENTITAS',0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'1. Nama',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->nama_lengkap,0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'2. Alamat Lengkap',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->alamat,0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'3. No. KTP',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->nik,0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'4. Nama Kelompok',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->nama_kelompok,0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'5. Posisi',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->posisi_anggota,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'II. USAHA',0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'1. Pekerjaan',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->pekerjaan,0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'2. Usaha Lain',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,$i->usaha_lain,0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'III. KREDIT',0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'1. Besaran Pengajuan',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,rupiah($i->besaran_pengajuan),0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'IV. PERHITUNGAN',0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(45,8,'Perhitungan dan analisa ekonomi :',0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'1. Pendapatan per bulan ',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,rupiah($i->total_pendapatan),0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'2. Pengeluaran',0,1,'L');
        $pdf->Cell(40,7,'',0,0,'C');
        $pdf->Cell(45,8,'a. Biaya Keluarga ',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,rupiah($i->biaya_keluarga),0,1,'L');
        $pdf->Cell(40,7,'',0,0,'C');
        $pdf->Cell(45,8,'b. Biaya Pengembalian ',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,rupiah($i->biaya_pengembalian),0,1,'L');
        $pdf->Cell(40,7,'',0,0,'C');
        $pdf->Cell(45,8,'c. Biaya lain-lain ',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,rupiah($i->biaya_lain2),0,1,'L');
        $pdf->Cell(35,7,'',0,0,'C');
        $pdf->Cell(45,8,'3. Sisa Pendapatan ',0,0,'L');
        $pdf->Cell(10,8,': ',0,0,'L');
        $pdf->Cell(70,8,rupiah($i->sisa_pendapatan),0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(80,7,'Rekomendasi ',0,0,'L');
        $pdf->Cell(80,7,'Tim Verifikasi ',0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(68,15,rupiah($i->rekomendasi),0,0,'L');
        $pdf->Cell(68,15,"1. Nanik Sri Wilujeng  : ........... ",0,1,'L');
        $pdf->Cell(30,7,'',0,0,'C');
        $pdf->Cell(68,15,"",0,0,'L');
        $pdf->Cell(68,15,"2. Arti                           : .............",0,0,'L');
        
		
		}
        $pdf->Output();
}
public function daftar_validasi(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['pembahasan'] = $this->M_pegawai->pencairan()->result();
    $this->template->load('template','administrasi_daftar_validasi',$data);
}
public function daftar_pencairan(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $data['pembahasan'] = $this->M_pegawai->pencairan2()->result();
    $this->template->load('template','administrasi_daftar_pencairan',$data);

}
public function validasi(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $post = $this->input->post(null, TRUE);
    $data['tanggal_byr'] = $post['tgl_bayar'];
    $data['id_pengajuan'] = $post['id_pengajuan'];
    $data['id_pem'] = $post['id_pem'];
    $data['nama_ang'] = $post['nama_anggota'];
    $data['id_pem'] = $post['id_pem'];
    $data['nik_anggota'] = $post['nik_anggota'];
    $data['dana_cair'] = $post['dana_cair'];
    $data['peng_pokok1'] = $data['dana_cair']/12;
    $data['peng_pokok3'] = $data['dana_cair']/4;
    $data['peng_pokok6'] = $data['dana_cair']/2;
    $data['peng_pokok12'] = $data['dana_cair']/1;
    $data['peng_jasa'] = $data['dana_cair']/12*0.18;
    @$data['jns_peng'] = $post['jns_peng'];
    @$data['bagi_hasil'] = $post['bagi_hasil'];
    $data['periode_peng'] = $post['periode_pengembalian'];
    $this->template->load('template','administrasi_validasi',$data);
}
public function validasi_angsuran(){
    $post = $this->input->post(null, TRUE);
    $id_pengajuan = $post['id_pengajuan'];
    $id_pengembalian =  "Peng-".$post['nik_anggota'].str_shuffle(1234);
    $id_pembahasan = $post['id_pem'];
    $ke = $post['ke'];
    $nik_ang =  $post['nik_anggota'];
    $keterangan = $post['keterangan'];
    $nilai = preg_replace("/[^0-9]/", "",  $post['nilai']); 
    $tanggal = $post['tgl_tagihan'];
    $update = $this->M_pegawai->update_id_pengembalian($id_pengembalian, $id_pengajuan);
    $data = array();
    $index = 0; // Set index array awal dengan 0
        foreach($ke as $kenya){ // Kita buat perulangan berdasarkan nis sampai data terakhir
        array_push($data, array(
            'id_angsuran'=>"A-".$id_pengembalian.$nik_ang.$index,
            'id_pengembalian'=> $id_pengembalian,
            'id_nik' =>$nik_ang,
            'keterangan' =>$keterangan[$index],
            'tgl_tagihan'=>$tanggal[$index],  
            'jumlah'=>$nilai[$index],  
            
        ));
        
        $index++;
        }
        
        $save = $this->M_pegawai->update_angsuran($data);
        $update  = $this->M_pegawai->update_status_val($id_pembahasan);
        if($save== 1){
            $this->session->set_flashdata('simpan', 'Your post has been Posted!');
            redirect('Administrasi_pegawai/daftar_validasi');
        }else{
            $this->session->set_flashdata('gagal', 'Your post has been Posted!');
            redirect('Administrasi_pegawai/daftar_validasi');
        }
}
public function update_pencairan(){
    $post = $this->input->post(null, TRUE);
    
    $no_akun_pm = $this->M_pegawai->no_akun_piutang_mudhorobah()->result();
    foreach ($no_akun_pm as $i){
        $no_akun_piutang_mudhorobah = $i->id_akun;
    }
    $no_akun_km = $this->M_pegawai->no_akun_kas_mudhorobah()->result();
    foreach ($no_akun_km as $i){
        $no_akun_kas_mudhorobah = $i->id_akun;
    }
    $no_akun_ks = $this->M_pegawai->no_akun_kas_spp()->result();
    foreach ($no_akun_ks as $i){
        $no_akun_kas_spp = $i->id_akun;
    }
    $no_akun_ps = $this->M_pegawai->no_akun_piutang_spp()->result();
    foreach ($no_akun_ps as $i){
        $no_akun_piutang_spp = $i->id_akun;
    }
    
    $id_trans1 = $this->M_pegawai->id_transaksi_keu();
    $id_trans2 = $this->M_pegawai->id_transaksi_keu();
    if($post['jns_pengajuan'] == "2"){
    $akun = $post['id_akun'] = [$no_akun_piutang_mudhorobah,$no_akun_kas_mudhorobah];
    
    }else{
        $akun = $post['id_akun'] = [$no_akun_piutang_spp,$no_akun_kas_spp];
       
    }
    $id_trans = $post['id_trans'] = [$id_trans1,$id_trans2];
    $jml_besaran = $post['jml_besaran'] = [$post['besaran'],$post['besaran']];
    $dk = $post['dk'] = ["Debit","Kredit"];
    $ke = [1,2];
    $data = array();
    $index = 0; // Set index array awal dengan 0
        foreach($ke as $kenya){ // Kita buat perulangan berdasarkan nis sampai data terakhir
        array_push($data, array(
            'id_transaksi'=>$id_trans[$index],
            'id_akun' =>$akun[$index],
            'jumlah_transaksi'=>$jml_besaran[$index],  
            'posisi'=>$dk[$index],  
            
        ));
        
        $index++;
        }
    
    $in_temp_trans = $this->M_pegawai->temp_transaksi($data);
    
    $post['tanggal'] = date('Y-m-d');
    $post['id_det'] = $this->M_pegawai->id_det_transaksi_keu();
    $periode = $this->M_pegawai->periode_keu()->result();
    foreach($periode as $p){
        $post['periode'] = $p->periode;
    }
    $cair  = $this->M_pegawai->update_det_transaksi_keu($post);
    $post['id_pencairan'] = "Pen".$post['id_pengajuan'].str_shuffle(date('dm'));
    $pencairan  = $this->M_pegawai->update_pencairan($post);
    $this->tanda_terima_pencairan($post['nik_ang']);
    if($pencairan == 1){
        $this->session->set_flashdata('simpan', 'Your post has been Posted!');
        redirect('Administrasi_pegawai/daftar_pencairan');
    }else{
        $this->session->set_flashdata('gagal', 'Your post has been Posted!');
        redirect('Administrasi_pegawai/daftar_pencairan');
    }
}
public function tanda_terima_pencairan($nik_ang=null){
    $pdf = new FPDF('P','mm','A5');
    $post = $this->input->post(null, TRUE);
    
    if($nik_ang == null){
    $nik = $post['nik_ang'];
    }else{
        $nik = $nik_ang;
    }
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',16);
		// mencetak string
		$pdf->Image('./assets/landing/assets/dist/img/logo.jpeg',10,8,-600);
        $pdf->Cell(130,7,'BUMDES BERSAMA "UDB"',0,1,'C');
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(130,7,'BUKTI TANDA TERIMA DANA CAIR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetLineWidth(1);
        $pdf->Line(10,29,140,29);
        $pdf->SetLineWidth(0);
		$pdf->Line(10,30,140,30);
        $data_nas = $this->M_nasabah->data_nasabah($nik)->result();
       
		foreach ($data_nas as $i){
		 $id_peng =	$i->id_pengajuan;
        }
        
        $data = $this->M_pegawai->tanda_terima_dana($nik,$id_peng)->result();
       
		foreach($data as $i){
		$pdf->SetFont('Times','',12);
		$pdf->Cell(50,7,'',0,1,'C');
		$pdf->Cell(50,10,'ID Pengajuan',0,0,'L');
		$pdf->Cell(70,10,$i->id_pengajuan,0,1,'L');
		$pdf->Cell(50,10,'Nama',0,0,'L');
		$pdf->Cell(70,10,$i->nama_lengkap,0,1,'L');
		$pdf->Cell(50,10,'Dana Diterima',0,0,'L');
		$pdf->Cell(70,10,rupiah($i->dana_cair),0,1,'L');
		$pdf->Cell(50,10,'Tanggal Diterima',0,0,'L');
        $pdf->Cell(70,10,date('d F Y',strtotime($i->tanggal_pencairan)),0,1,'L');
        $pdf->Cell(50,10,'Periode Pengembalian',0,0,'L');
        $pdf->Cell(70,10,"Per ".$i->periode." Bulan",0,1,'L');
      
        $pdf->Cell(50,10,'',0,0,'L');
        $pdf->Cell(30,10,'',0,0,'L');
        $pdf->Cell(20,10,'Kediri, '.date('d F Y'),0,1,'L');
        $pdf->Cell(50,10,'',0,0,'L');
        $pdf->Cell(35,10,'',0,0,'L');
		$pdf->Cell(20,30,'TITIK.S.pd',0,1,'C');
		}
        $pdf->Output();
}
public function pengembalian(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $this->template->load('template','administrasi_pengembalian',$data);
}
public function tampil_tagihan(){
    $data['notif'] = $this->M_pegawai->notifikasi()->result();
    $post = $this->input->post(null, TRUE);
    $data['data_nas'] = $this->M_nasabah->view_dt_profil($post['nik_ang'])->result();
    $data['pencairan'] = $this->M_pegawai->tagihan($post)->result();
    $data['tagihan'] = $this->M_pegawai->tagihan($post)->num_rows();
    $data['pengembalian_pokok'] = $this->M_pegawai->pengembalian_pokok($post)->result();
    $data['pengembalian_jasa'] = $this->M_pegawai->pengembalian_jasa($post)->result();
    $data['pengembalian_bh'] = $this->M_pegawai->pengembalian_bh($post)->result();
    $this->template->load('template','administrasi_pengembalian',$data);
}
public function pengembalian_pinjaman(){
    $post = $this->input->post(null, TRUE);
    $cek_tagihannya = $this->M_pegawai->cek_tagihan_sbl($post['nik'],$post['tanggal_tagihan'][0])->num_rows();
    if($cek_tagihannya < 1){
       
    $no_akun_pm = $this->M_pegawai->no_akun_piutang_mudhorobah()->result();
    foreach ($no_akun_pm as $i){
        $no_akun_piutang_mudhorobah = $i->id_akun;
    }
    $no_akun_km = $this->M_pegawai->no_akun_kas_mudhorobah()->result();
    foreach ($no_akun_km as $i){
        $no_akun_kas_mudhorobah = $i->id_akun;
    }
    $no_akun_ks = $this->M_pegawai->no_akun_kas_spp()->result();
    foreach ($no_akun_ks as $i){
        $no_akun_kas_spp = $i->id_akun;
    }
    $no_akun_ps = $this->M_pegawai->no_akun_piutang_spp()->result();
    foreach ($no_akun_ps as $i){
        $no_akun_piutang_spp = $i->id_akun;
    }
    $no_akun_ps = $this->M_pegawai->no_akun_pendapatan_jasa_spp()->result();
    foreach ($no_akun_ps as $i){
        $no_akun_pendapatan_jasa_spp = $i->id_akun;
    }
    $no_akun_ps = $this->M_pegawai->no_akun_pendapatan_mudhorobah()->result();
    foreach ($no_akun_ps as $i){
        $no_akun_pendapatan_mudhorobah = $i->id_akun;
    }
    

    $id_trans1 = $this->M_pegawai->id_transaksi_keu();
    $id_trans2 = $this->M_pegawai->id_transaksi_keu();
    $id_trans3 = $this->M_pegawai->id_transaksi_keu();
    $id_trans4 = $this->M_pegawai->id_transaksi_keu();
    $ke = $post['ke'];
    
    $ke_trans = [1,2,3,4];
    $id_angsuran = $post['id_angsuran'];
    $id_jenis = $post['id_jenis'];
    $keterangan = $post['keterangan'];
    $tgl_tagihan = $post['tanggal_tagihan'];
    $jumlah = $post['jumlah'] ;
    $bayar = $post['bayar'] ;
    if($id_jenis == "2"){
        $akun = $post['id_akun'] = [$no_akun_kas_mudhorobah,$no_akun_piutang_mudhorobah,$no_akun_pendapatan_mudhorobah,$no_akun_kas_mudhorobah];
        
        }else{
            $akun = $post['id_akun'] = [$no_akun_kas_spp,$no_akun_piutang_spp,$no_akun_pendapatan_jasa_spp,$no_akun_kas_spp];
           
        }

        $id_trans = $post['id_trans'] = [$id_trans1,$id_trans2,$id_trans3,$id_trans4];
        $dk = $post['dk'] = ["Debit","Kredit","Debit","Kredit"];
        @$keuntungan = $post['keuntungan'];
        $data = array();
        $index = 0; // Set index array awal dengan 0
        foreach($jumlah as $kenya){ // Kita buat perulangan berdasarkan nis sampai data terakhir
            if($bayar[$index] <= $jumlah[$index]){
                $jumlah_uang = $bayar[$index];
                $status = "Kurang";
            }else{
                $jumlah_uang = $jumlah[$index];
                $status = "Lunas";
            }
            array_push($data, array(
            'id_transaksi'=>$id_trans[$index],
            'id_akun' =>$akun[$index],
            'jumlah_transaksi'=>$jumlah_uang,  
            'posisi'=>$dk[$index],  
            
        ));
        $index++; 
        }
        if(count($jumlah) == "4"){
        $post['jml'] = [$post['jumlah'][1],$post['jumlah'][3]];
        $post['byr'] = [$post['bayar'][1],$post['bayar'][3]];
        $post['id_peng'] = $post['id_pengajuan_inti'];
        
        $in_temp_trans = $this->M_pegawai->temp_transaksi($data);
        $post['tanggal'] = date('Y-m-d');
        $post['id_det'] = $this->M_pegawai->id_det_transaksi_keu();
        $periode = $this->M_pegawai->periode_keu()->result();
        foreach($periode as $p){
            $post['periode'] = $p->periode;
        }
        $det_trans_keu  = $this->M_pegawai->update_det_transaksi_keu($post);
        $ansuran = $this->M_pegawai->update_bayar_angsuran($post);
        }else{
        $post['jml'] = [$post['jumlah'][1]];
        $post['byr'] = [$post['bayar'][1]];
        $post['id_peng'] = $post['id_pengajuan_inti'];
        
        $in_temp_trans = $this->M_pegawai->temp_transaksi($data);
        $post['tanggal'] = date('Y-m-d');
        $post['id_det'] = $this->M_pegawai->id_det_transaksi_keu();
        $periode = $this->M_pegawai->periode_keu()->result();
        foreach($periode as $p){
            $post['periode'] = $p->periode;
        }
        $det_trans_keu  = $this->M_pegawai->update_det_transaksi_keu($post);
        $ansuran = $this->M_pegawai->update_bayar_angsuran($post);
        }
        $cek_angsurannya = $this->M_pegawai->v_angsuran3($post['nik'])->num_rows();
        if ($cek_angsurannya < "1"){
            $pelunasan = $this->M_pegawai->pelunasan($post);
        }
        $pdf = new FPDF('P','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',13);
        // mencetak string
        $pdf->Image('./assets/images/kembali.png',1,1,-4500,0,'',site_url('administrasi_pegawai/pengembalian'));
		$pdf->Image('./assets/landing/assets/dist/img/logo.jpeg',10,8,-600);
        $pdf->Cell(130,7,'BUKTI PEMBAYARAN PENGEMBALIAN DANA',0,1,'C');
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(130,7,'BUMDES BERSAMA "UDB"',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetLineWidth(1);
        $pdf->Line(10,29,140,29);
        $pdf->SetLineWidth(0);
		$pdf->Line(10,30,140,30);
    
		$pdf->SetFont('Times','',12);
		$pdf->Cell(50,7,'',0,1,'C');
		$pdf->Cell(50,10,'ID Pengajuan',0,0,'L');
        $pdf->Cell(70,10,$post['id_peng'],0,1,'L');
        if(count($jumlah) == "4"){
		$pdf->Cell(50,10,'Tagihan Pokok',0,0,'L');
        $pdf->Cell(70,10,rupiah($post['jml'][0]),0,1,'L');
        $pdf->Cell(50,10,'Tagihan Jasa/Bagi Hasil',0,0,'L');
        $pdf->Cell(70,10,rupiah($post['jml'][1]),0,1,'L');
        $pdf->Cell(50,10,'Bayar Tagihan Pokok',0,0,'L');
        $pdf->Cell(70,10,rupiah($post['byr'][0]),0,1,'L');
        $pdf->Cell(50,10,'Bayar Tagihan Pokok',0,0,'L');
        $pdf->Cell(70,10,rupiah($post['byr'][1]),0,1,'L');
        $pdf->Cell(50,10,'Kembalian',0,0,'L');
        $pdf->Cell(70,10,rupiah($post['kembalian']),0,1,'L');
        if($pelunasan == "1"){
        $pdf->Cell(50,10,'Angsuran',0,0,'L');
        $pdf->Cell(70,10,"LUNAS",0,1,'L');
        }
        $pdf->Cell(50,10,'',0,0,'L');
        $pdf->Cell(30,10,'',0,0,'L');
        $pdf->Cell(20,10,'Kediri, '.date('d F Y'),0,1,'L');
        $pdf->Cell(50,10,'',0,0,'L');
        $pdf->Cell(35,10,'',0,0,'L');
		$pdf->Cell(20,30,'TITIK.S.pd',0,1,'C');
        $pdf->Output();
        }else{
            $pdf->Cell(50,10,'Tagihan Jasa/Bagi Hasil',0,0,'L');
            $pdf->Cell(70,10,rupiah($post['jml'][0]),0,1,'L');
           
            $pdf->Cell(50,10,'Bayar Tagihan Pokok',0,0,'L');
            $pdf->Cell(70,10,rupiah($post['byr'][0]),0,1,'L');
            $pdf->Cell(50,10,'Kembalian',0,0,'L');
            $pdf->Cell(70,10,rupiah($post['kembalian']),0,1,'L');
            $pdf->Cell(50,10,'',0,0,'L');
            $pdf->Cell(30,10,'',0,0,'L');
            $pdf->Cell(20,10,'Kediri, '.date('d F Y'),0,1,'L');
            $pdf->Cell(50,10,'',0,0,'L');
            $pdf->Cell(35,10,'',0,0,'L');
            $pdf->Cell(20,30,'TITIK.S.pd',0,1,'C');
            $pdf->Output();
        }
    }else{
        $this->session->set_flashdata('ada_tagihan', 'Your post has been Posted!');
                redirect('administrasi_pegawai/pengembalian');
    }

        }
    public function penangguhan(){
        $data['notif'] = $this->M_pegawai->notifikasi()->result();
        $data['daf_penangguhan'] = $this->M_pegawai->v_penangguhan()->result();
        $data['id_penangguhan'] = "Det-P-".date('ymds-').rand(date('s'),date('sdmy'));
        $this->template->load('template','administrasi_penangguhan',$data);
    }
    public function tagihan(){
        $nik = $this->input->post('nik');
        $cek =  $this->M_pegawai->nasabah($nik)->result();
        echo json_encode($cek);
    }
    public function tambah_penangguhan(){
        $post = $this->input->post(null, TRUE);
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'rar|zip';
        $config['max_size']     = '50048';
        $config['file_name']     = 'SB-'.$post['id_penangguhan'];
        $config['overwrite'] = TRUE;
        $this->load->library('upload',$config,'berkas');
        $this->berkas->initialize($config);
        $berkas = $this->berkas->do_upload('berkas');
        $post['berkas_penang'] = $this->berkas->data('file_name');
        $cek =  $this->M_pegawai->cek_id_penangguhan($post['nik'])->result();
        foreach ($cek as $i){
            $post['id_penangguhan2'] = $i->id_penangguhan;
            
        }
        if($post['id_penangguhan2'] == null){
            $post['id_penangguhan2'] = "P-".$post['nik'].rand(date('y'),date('s'));
            $simpan = $this->M_pegawai->penangguhan_id($post);
            if($simpan == 1){
                $this->session->set_flashdata('simpan', 'Your post has been Posted!');
                redirect('Administrasi_pegawai/penangguhan');
            }else{
                $this->session->set_flashdata('gagal', 'Your post has been Posted!');
                redirect('Administrasi_pegawai/penangguhan');
            }
        }else{
            $simpan = $this->M_pegawai->penangguhan_tanpa_id($post);
            if($simpan == 1){
                $this->session->set_flashdata('simpan', 'Your post has been Posted!');
                redirect('Administrasi_pegawai/penangguhan');
            }else{
                $this->session->set_flashdata('gagal', 'Your post has been Posted!');
                redirect('Administrasi_pegawai/penangguhan');
            }
        }
    }
     
}
        
    /* End of file  administrasi_pegawai.php */
        
                            