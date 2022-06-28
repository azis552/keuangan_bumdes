<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Bendahara_pegawai extends CI_Controller {
    function __construct()
	{
		
		parent::__construct();
		$ci =& get_instance();
	    $user_jab= $ci->session->userdata('id_jabatan');
	    if($user_jab != 2){
	        check_already_login();
	    } 
		$this->load->model('M_pegawai');
		$this->load->library('form_validation');
		$this->load->library('pdf');
		$this->load->helper('rupiah_helper');
	    check_not_login();
	}
public function index()
{
    	
		
    $periode = $this->M_pegawai->periode_keu()->result();
    foreach ($periode as $i){
        $post['id_periode'] = $i->periode;
    }
   
    
    $data['laporan_keuangan_aset_lancar'] = $this->M_pegawai->laporan_keuangan_aset_lancar($post)->result();
	$data['laporan_keuangan_aset_tetap'] = $this->M_pegawai->laporan_keuangan_aset_tetap($post)->result();
	$data['laporan_keuangan_aset_kewajiban'] = $this->M_pegawai->laporan_keuangan_aset_kewajiban($post)->result();
	$data['laporan_keuangan_aset_ekuitas'] = $this->M_pegawai->laporan_keuangan_aset_ekuitas($post)->result();
	$data['laporan_keuangan_pendapatan'] = $this->M_pegawai->laporan_keuangan_pendapatan($post)->result();
	$data['laporan_keuangan_beban'] = $this->M_pegawai->laporan_keuangan_beban($post)->result();
    $this->template->load('template','dashboard_bendahara',$data);                      
}
public function akun_rekening(){
    $data['akun'] = $this->M_pegawai->data_rekening()->result();
    $this->template->load('template','bendahara_akun_rekening',$data);       
}
public function tambah_rekening(){
	$post = $this->input->post(null, TRUE);
	$cek = $this->M_pegawai->cek_rekening($post);
	if($cek->num_rows()>0){

		$this->session->set_flashdata('dobel_akun', 'Your post has been Posted!');
		redirect('bendahara_pegawai/akun_rekening');
	}else{
		$save = $this->M_pegawai->tambah_rekening($post);
	if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('bendahara_pegawai/akun_rekening');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('bendahara_pegawai/akun_rekening');
	}
	}
    
}
public function edit_akun_rekening(){
	$post = $this->input->post(null, TRUE);
	
	$update = $this->M_pegawai->update_rekening($post);
	if($update== 1){
		$this->session->set_flashdata('edit_berhasil', 'Your post has been Posted!');
		redirect('bendahara_pegawai/akun_rekening');
	}else{
		$this->session->set_flashdata('edit_gagal', 'Your post has been Posted!');
		redirect('bendahara_pegawai/akun_rekening');
	}
	
}
public function hapus_akun_rekening(){
	$post = $this->input->post(null, TRUE);
	
	$hapus = $this->M_pegawai->hapus_rekening($post);
	if($hapus== 1){
		$this->session->set_flashdata('berhasil_hapus', 'Your post has been Posted!');
		redirect('bendahara_pegawai/akun_rekening');
	}else{
		$this->session->set_flashdata('gagal_hapus', 'Your post has been Posted!');
		redirect('bendahara_pegawai/akun_rekening');
	}
	
}
public function periode(){
	$data['periode'] = $this->M_pegawai->periode()->result();
	$data['id_periode'] = $this->M_pegawai->id_periode();
    $this->template->load('template','bendahara_periode',$data);       
}  
public function tambah_periode(){
    $post = $this->input->post(null, TRUE);
    $save = $this->M_pegawai->tambah_periode($post);
	if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('bendahara_pegawai/periode');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('bendahara_pegawai/periode');
	}
} 
public function update_periode(){
    $post = $this->input->post(null, TRUE);
    $save = $this->M_pegawai->update_periode($post);
	if($save== 1){
		$this->session->set_flashdata('edit_berhasil', 'Your post has been Posted!');
		redirect('bendahara_pegawai/periode');
	}else{
		$this->session->set_flashdata('edit_gagal', 'Your post has been Posted!');
		redirect('bendahara_pegawai/periode');
	}
} 
public function delete_periode(){
	$post = $this->input->post(null, TRUE);
	
	$hapus = $this->M_pegawai->delete_periode($post);
	if($hapus== 1){
		$this->session->set_flashdata('berhasil_hapus', 'Your post has been Posted!');
		redirect('bendahara_pegawai/periode');
	}else{
		$this->session->set_flashdata('gagal_hapus', 'Your post has been Posted!');
		redirect('bendahara_pegawai/periode');
	}
	
}
public function hapus_temp_trans(){
	$post = $this->input->post(null, TRUE);
	$hapus = $this->M_pegawai->delete_temp_keu($post);
	if($hapus== 1){
		$this->session->set_flashdata('berhasil_hapus', 'Your post has been Posted!');
		redirect('bendahara_pegawai/transaksi_keu');
	}else{
		$this->session->set_flashdata('gagal_hapus', 'Your post has been Posted!');
		redirect('bendahara_pegawai/transaksi_keu');
	}
	
}
public function transaksi_keu(){
	$data['id_trans'] = $this->M_pegawai->id_transaksi_keu();
	$data['no_akun'] = $this->M_pegawai->data_rekening()->result();
	$data['periode'] = $this->M_pegawai->periode()->result();
	$data['transaksi_belum'] = $this->M_pegawai->transaksi_belum()->result();
	$data['id_det'] = $this->M_pegawai->id_det_transaksi_keu();
	$data['det_trans'] = $this->M_pegawai->det_transaksi()->result();
	$this->template->load('template','bendaharan_transaksi_keu',$data);      
}   
public function jurnal_penyesuaian(){
	$data['id_trans'] = $this->M_pegawai->id_transaksi_keu();
	$data['no_akun'] = $this->M_pegawai->data_rekening()->result();
	$data['periode'] = $this->M_pegawai->periode()->result();
	$data['transaksi_belum'] = $this->M_pegawai->tampil_jurnal_penyesuaian()->result();
	$data['id_det'] = $this->M_pegawai->id_det_transaksi_keu();
	$data['det_trans'] = $this->M_pegawai->det_transaksi()->result();
	$this->template->load('template','bendahara_jurnal_penyesuaian',$data);      
} 
public function tambah_trans(){
	$post = $this->input->post(null, TRUE);
	$post['jml_besaran'] = preg_replace("/[^0-9]/", "", $post['jml_besaran']);
	$save = $this->M_pegawai->tambah_transaksi($post);
	if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('bendahara_pegawai/transaksi_keu');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('bendahara_pegawai/transaksi_keu');
	}
} 
public function input_jurnal_penyesuaian(){
	$post = $this->input->post(null, TRUE);
	$post['jml_besaran'] = preg_replace("/[^0-9]/", "", $post['jml_besaran']);
	$save = $this->M_pegawai->tambah_transaksi_penye($post);
	if($save== 1){
		$this->session->set_flashdata('simpan', 'Your post has been Posted!');
		redirect('bendahara_pegawai/jurnal_penyesuaian');
	}else{
		$this->session->set_flashdata('gagal', 'Your post has been Posted!');
		redirect('bendahara_pegawai/jurnal_penyesuaian');
	}
} 
public function tambah_det_penyesuaian(){
	$post = $this->input->post(null, TRUE);
	$jumlah_temp = $this->M_pegawai->tampil_jurnal_penyesuaian()->num_rows();
	if($jumlah_temp > 0 ){
		$kredit = $this->M_pegawai->cek_kredit_jp()->result();
		foreach($kredit as $i){
			$jml_kredit = $i->jumlah;
		}
		$debit = $this->M_pegawai->cek_debit_jp()->result();
		foreach($debit as $i){
			$jml_debit = $i->jumlah;
		}
		if($jml_debit == $jml_kredit){
			$save = $this->M_pegawai->tambah_det_transaksi_penyesuaian($post);
			if($save== 1){
			$this->session->set_flashdata('simpan', 'Your post has been Posted!');
			redirect('bendahara_pegawai/jurnal_penyesuaian');
			}else{
			$this->session->set_flashdata('gagal', 'Your post has been Posted!');
			redirect('bendahara_pegawai/jurnal_penyesuaian');
		}
		}else{
			$this->session->set_flashdata('tidak_balance', 'Your post has been Posted!');
		redirect('bendahara_pegawai/jurnal_penyesuaian');
		}
		
		
	}else{
		$this->session->set_flashdata('temp_kosong', 'Your post has been Posted!');
		redirect('bendahara_pegawai/jurnal_penyesuaian');
	}
	
} 
public function tambah_det_trans(){
	$post = $this->input->post(null, TRUE);
	$jumlah_temp = $this->M_pegawai->transaksi_belum()->num_rows();
	if($jumlah_temp > 0 ){
		$kredit = $this->M_pegawai->cek_kredit()->result();
		foreach($kredit as $i){
			$jml_kredit = $i->jumlah;
		}
		$debit = $this->M_pegawai->cek_debit()->result();
		foreach($debit as $i){
			$jml_debit = $i->jumlah;
		}
		if($jml_debit == $jml_kredit){
			$save = $this->M_pegawai->tambah_det_transaksi_keu($post);
			if($save== 1){
			$this->session->set_flashdata('simpan', 'Your post has been Posted!');
			redirect('bendahara_pegawai/transaksi_keu');
			}else{
			$this->session->set_flashdata('gagal', 'Your post has been Posted!');
			redirect('bendahara_pegawai/transaksi_keu');
		}
		}else{
			$this->session->set_flashdata('tidak_balance', 'Your post has been Posted!');
		redirect('bendahara_pegawai/transaksi_keu');
		}
		
		
	}else{
		$this->session->set_flashdata('temp_kosong', 'Your post has been Posted!');
		redirect('bendahara_pegawai/transaksi_keu');
	}
	
} 
public function laporan_keuangan(){
	$data['periode'] = $this->M_pegawai->periode()->result();
	$this->template->load('template','bendahara_laporan_keuangan',$data);      
}
public function cetak_laporan_keuangan(){
	$post = $this->input->post(null, TRUE);
	$periode_cek = $this->M_pegawai->tgl_periode($post['id_periode'])->result();
	foreach ($periode_cek as $i){
		$periode=	$i->tanggal_periode;
		
	}
	$sum = 0;
	$sum1 = 0;
	$sum2 =0;
	$sum3 =0;
	$sum4 = 0;
	$sum5 = 0;
	$sum6 =0;
	$sum7 =0;
	$sum8= 0;
	$sum9 = 0;
	$sum10 =0;
	$sum11 =0;
	$sum12 =0;
	if($post['laporan']== "1"){
    $pdf = new FPDF('P','mm','A4');
		$laporan_keuangan_aset_lancar = $this->M_pegawai->laporan_keuangan_aset_lancar($post)->result();
		$laporan_keuangan_aset_tetap = $this->M_pegawai->laporan_keuangan_aset_tetap($post)->result();
		$laporan_keuangan_aset_kewajiban = $this->M_pegawai->laporan_keuangan_aset_kewajiban($post)->result();
		$laporan_keuangan_aset_ekuitas = $this->M_pegawai->laporan_keuangan_aset_ekuitas($post)->result();
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',16);
		// mencetak string
		$pdf->Image('./assets/landing/assets/dist/img/logo.jpeg',45,8,-600);
        $pdf->Cell(190,7,'BUMDES BERSAMA "UDB"',0,1,'C');
        $pdf->SetFont('Times','B',12);
		$pdf->Cell(190,7,'LAPORAN POSISI KEUANGAN',0,1,'C');
		$pdf->Cell(190,7,date('d F Y',strtotime($periode)),0,1,'C');
		$pdf->Cell(190,7,'',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
       
        
		$pdf->SetFont('Times','B',12);
        $pdf->Cell(20,4,'',0,0,'C');
        $pdf->Cell(99,5,'ASET',"T",0,'L');
		$pdf->Cell(43,5, date('d F Y',strtotime($periode)),"T",1,'L');
		$pdf->Cell(20,4,'',0,0,'C');
		$pdf->Cell(99,4,'ASET LANCAR',0,0,'L');
		$pdf->Cell(30,4,'',0,1,'L');
		$pdf->Cell(20,4,'',0,0,'C');
		$pdf->Cell(99,4,'KAS DAN SETARA KAS',0,0,'L');
		$pdf->Cell(30,4,'',0,1,'L');
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->SetFont('Times','',12);
		foreach ($laporan_keuangan_aset_lancar as $i){
		
		$pdf->Cell(25,5,'',0,0,'C');
		$pdf->Cell(99,5,$i->keterangan,0,0,'L');
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
		$pdf->Cell(30,5,rupiah($value),0,1,'L');
		
		$sum+= $value;
		}
		$pdf->SetFont('Times','B',12);
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(20,5,'',0,0,'C');
		$pdf->Cell(99,5,'TOTAL ASET LANCAR',0,0,'L');
		$pdf->Cell(30,5,rupiah($sum),0,1,'L');
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(30,4,'',0,1,'L');
		$pdf->Cell(20,4,'',0,0,'C');
		$pdf->Cell(99,4,'KAS DAN SETARA KAS',0,0,'L');
		$pdf->Cell(30,4,'',0,1,'L');
		$pdf->SetFont('Times','',12);
		foreach ($laporan_keuangan_aset_tetap as $i){
		
		$pdf->Cell(25,5,'',0,0,'C');
		$pdf->Cell(99,5,$i->keterangan,0,0,'L');
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
		$pdf->Cell(30,5,rupiah($value),0,1,'L');
		
		$sum1+= $value;
		}
		$pdf->SetFont('Times','B',12);
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(20,5,'',0,0,'C');
		$pdf->Cell(99,5,'TOTAL ASET TETAP',0,0,'L');
		$pdf->Cell(30,5,rupiah($sum1),0,1,'L');
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(20,5,'',0,0,'C');
		$pdf->Cell(99,6,'TOTAL ASET ',"TB",0,'L');
		$pdf->Cell(43,6,rupiah($sum1 + $sum),"TB",1,'L');
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->SetFont('Times','',12);
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'Diketahui dan Diperiksa oleh',0,0,'C');
		$pdf->Cell(40,5,"Disetujui Oleh",0,0,'C');
		$pdf->Cell(45,5,'Dibuat Oleh',0,1,'C');
		$pdf->Cell(20,20,'',0,1,'C');
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'H. Amir Syarifudin, S.Ag.MM',0,0,'C');
		$pdf->Cell(40,5,"Yatiran, SP",0,0,'C');
		$pdf->Cell(45,5,'M. Khojin N.',0,1,'C');
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'Komisaris',0,0,'C');
		$pdf->Cell(40,5,"Direktur",0,0,'C');
        $pdf->Cell(45,5,'Bendahara',0,1,'C');
		$pdf->AddPage();
        $pdf->Image('./assets/landing/assets/dist/img/logo.jpeg',48,8,-500);
        $pdf->SetFont('Times','B',16);
        $pdf->Cell(190,7,'BUMDES BERSAMA "UDB"',0,1,'C');
        $pdf->SetFont('Times','B',12);
		$pdf->Cell(190,7,'Laporan Posisi Keuangan',0,1,'C');
		$pdf->Cell(190,7,date('d F Y',strtotime($periode)),0,1,'C');
		$pdf->Cell(190,7,'',0,1,'C');
		$pdf->Cell(20,4,'',0,0,'C');
        $pdf->Cell(99,5,'KEWAJIBAN DAN EKUITAS',"T",0,'L');
		$pdf->Cell(43,5, date('d F Y',strtotime($periode)),"T",1,'L');
		$pdf->Cell(20,4,'',0,0,'C');
        $pdf->Cell(99,5,'KEWAJIBAN',0,0,'L');
		$pdf->Cell(43,5,'',0,1,'L');
		$pdf->SetFont('Times','',12);
		foreach ($laporan_keuangan_aset_kewajiban as $i){
		
		$pdf->Cell(25,5,'',0,0,'C');
		$pdf->Cell(99,5,$i->keterangan,0,0,'L');
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
		$pdf->Cell(30,5,rupiah($value),0,1,'L');
		
		$sum2+= $value;
		}
		$pdf->SetFont('Times','B',12);
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(20,5,'',0,0,'C');
		$pdf->Cell(99,5,'TOTAL KEWAJIBAN',0,0,'L');
		$pdf->Cell(30,5,rupiah($sum2),0,1,'L');
		$pdf->Cell(20,4,'',0,0,'C');
        $pdf->Cell(99,5,'EKUITAS',0,0,'L');
		$pdf->Cell(43,5,'',0,1,'L');
		$pdf->SetFont('Times','',12);
		foreach ($laporan_keuangan_aset_ekuitas as $i){
		
		$pdf->Cell(25,5,'',0,0,'C');
		$pdf->Cell(99,5,$i->keterangan,0,0,'L');
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
		$pdf->Cell(30,5,rupiah($value),0,1,'L');
		
		$sum2+= $value;
		}
		$pdf->SetFont('Times','B',12);
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(20,5,'',0,0,'C');
		$pdf->Cell(99,5,'TOTAL EKUITAS',0,0,'L');
		$pdf->Cell(30,5,rupiah($sum3),0,1,'L');

		
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(20,5,'',0,0,'C');
		$pdf->Cell(99,6,'TOTAL KEWAJIBAN DAN EKUITAS ',"TB",0,'L');
		$pdf->Cell(43,6,rupiah($sum2 + $sum3),"TB",1,'L');
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->SetFont('Times','',12);
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'Diketahui dan Diperiksa oleh',0,0,'C');
		$pdf->Cell(40,5,"Disetujui Oleh",0,0,'C');
		$pdf->Cell(45,5,'Dibuat Oleh',0,1,'C');
		$pdf->Cell(20,20,'',0,1,'C');
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'H. Amir Syarifudin, S.Ag.MM',0,0,'C');
		$pdf->Cell(40,5,"Yatiran, SP",0,0,'C');
		$pdf->Cell(45,5,'M. Khojin N.',0,1,'C');
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'Komisaris',0,0,'C');
		$pdf->Cell(40,5,"Direktur",0,0,'C');
        $pdf->Cell(45,5,'Bendahara',0,1,'C');
		$pdf->Output();
	}else if($post['laporan']== "2"){
		$laporan_keuangan_neraca = $this->M_pegawai->laporan_keuangan_neraca($post)->result();
		$laporan_keuangan_aset_lancar = $this->M_pegawai->laporan_keuangan_aset_lancar($post)->result();
		$laporan_keuangan_aset_tetap = $this->M_pegawai->laporan_keuangan_aset_tetap($post)->result();
		$laporan_keuangan_aset_kewajiban = $this->M_pegawai->laporan_keuangan_aset_kewajiban($post)->result();
		$laporan_keuangan_aset_ekuitas = $this->M_pegawai->laporan_keuangan_aset_ekuitas($post)->result();
		$laporan_keuangan_pendapatan = $this->M_pegawai->laporan_keuangan_pendapatan($post)->result();
		$laporan_keuangan_beban = $this->M_pegawai->laporan_keuangan_beban($post)->result();
		$pdf = new FPDF('P','mm','A4');
		$pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',16);
		// mencetak string
		$pdf->Image('./assets/landing/assets/dist/img/logo.jpeg',45,8,-600);
        $pdf->Cell(190,7,'BUMDES BERSAMA "UDB"',0,1,'C');
        $pdf->SetFont('Times','B',12);
		$pdf->Cell(190,7,'LAPORAN NERACA SALDO',0,1,'C');
		$pdf->Cell(190,7,date('d F Y',strtotime($periode)),0,1,'C');
		$pdf->Cell(190,7,'',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
       
        
		$pdf->SetFont('Times','B',12);
        $pdf->Cell(10,4,'',0,0,'C');
        $pdf->Cell(30,5,'No Rekening',"TB",0,'L');
		$pdf->Cell(70,5, 'Nama Rekening',"TB",0,'L');
		$pdf->Cell(38,5,'Debit',"TB",0,'L');
		$pdf->Cell(38,5,'Kredit',"TB",1,'L');
		$pdf->SetFont('Times','',12);
		foreach ($laporan_keuangan_aset_lancar as $i){
		
			$pdf->Cell(10,4,'',0,0,'C');
			$pdf->Cell(30,5,$i->no_akun,0,0,'L');
			$pdf->Cell(70,5,$i->keterangan,0,0,'L');
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
			$pdf->Cell(38,5,rupiah($debit > $kredit ? $value : "0"),0,0,'L');
			$pdf->Cell(38,5,rupiah($kredit > $debit ? $value : "0"),0,1,'L');
		
		$sum1+= $debit;
		$sum2+= $kredit;
		}
		foreach ($laporan_keuangan_aset_tetap as $i){
		
			$pdf->Cell(10,4,'',0,0,'C');
			$pdf->Cell(30,5,$i->no_akun,0,0,'L');
			$pdf->Cell(70,5,$i->keterangan,0,0,'L');
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
			$pdf->Cell(38,5,rupiah($debit > $kredit ? $value : "0"),0,0,'L');
			$pdf->Cell(38,5,rupiah($kredit > $debit ? $value : "0"),0,1,'L');
		
		$sum3+= $debit;
		$sum4+= $kredit;
		}
		foreach ($laporan_keuangan_aset_ekuitas as $i){
		
			$pdf->Cell(10,4,'',0,0,'C');
			$pdf->Cell(30,5,$i->no_akun,0,0,'L');
			$pdf->Cell(70,5,$i->keterangan,0,0,'L');
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
			$pdf->Cell(38,5,rupiah($debit > $kredit ? $value : "0"),0,0,'L');
			$pdf->Cell(38,5,rupiah($kredit > $debit ? $value : "0"),0,1,'L');
		
		$sum5+= $debit;
		$sum6+= $kredit;
		}
		foreach ($laporan_keuangan_pendapatan as $i){
		
			$pdf->Cell(10,4,'',0,0,'C');
			$pdf->Cell(30,5,$i->no_akun,0,0,'L');
			$pdf->Cell(70,5,$i->keterangan,0,0,'L');
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
			$pdf->Cell(38,5,rupiah($debit > $kredit ? $value : "0"),0,0,'L');
			$pdf->Cell(38,5,rupiah($kredit > $debit ? $value : "0"),0,1,'L');
		
		$sum7+= $debit;
		$sum8+= $kredit;
		}
		foreach ($laporan_keuangan_beban as $i){
		
			$pdf->Cell(10,4,'',0,0,'C');
			$pdf->Cell(30,5,$i->no_akun,0,0,'L');
			$pdf->Cell(70,5,$i->keterangan,0,0,'L');
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
			$pdf->Cell(38,5,rupiah($debit > $kredit ? $value : "0"),0,0,'L');
			$pdf->Cell(38,5,rupiah($kredit > $debit ? $value : "0"),0,1,'L');
		
		$sum9+= $debit;
		$sum10+= $kredit;
		}
		foreach ($laporan_keuangan_aset_kewajiban as $i){
		
			$pdf->Cell(10,4,'',0,0,'C');
			$pdf->Cell(30,5,$i->no_akun,0,0,'L');
			$pdf->Cell(70,5,$i->keterangan,0,0,'L');
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
			$pdf->Cell(38,5,rupiah($debit > $kredit ? $value : "0"),0,0,'L');
			$pdf->Cell(38,5,rupiah($kredit > $debit ? $value : "0"),0,1,'L');
		
		$sum11+= $debit;
		$sum12+= $kredit;
		}
		$pdf->SetFont('Times','B',12);
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(10,5,'',0,0,'C');
		$pdf->Cell(100,5,'TOTAL ',"TB",0,'L');
		$pdf->Cell(38,5,rupiah($sum1+$sum3+$sum5+$sum7+$sum9+$sum11),"TB",0,'L');
		$pdf->Cell(38,5,rupiah($sum2+$sum4+$sum6+$sum8+$sum10+$sum12),"TB",0,'L');
		$pdf->Cell(30,7,'',0,1,'L');
		
		$pdf->SetFont('Times','',12);
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'Diketahui dan Diperiksa oleh',0,0,'C');
		$pdf->Cell(40,5,"Disetujui Oleh",0,0,'C');
		$pdf->Cell(45,5,'Dibuat Oleh',0,1,'C');
		$pdf->Cell(20,20,'',0,1,'C');
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'H. Amir Syarifudin, S.Ag.MM',0,0,'C');
		$pdf->Cell(40,5,"Yatiran, SP",0,0,'C');
		$pdf->Cell(45,5,'M. Khojin N.',0,1,'C');
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'Komisaris',0,0,'C');
		$pdf->Cell(40,5,"Direktur",0,0,'C');
		$pdf->Cell(45,5,'Bendahara',0,1,'C');
		$pdf->Output();
	}else if($post['laporan']== "3"){
		$laporan_keuangan_pendapatan = $this->M_pegawai->laporan_keuangan_pendapatan($post)->result();
		$laporan_keuangan_beban = $this->M_pegawai->laporan_keuangan_beban($post)->result();
		$pdf = new FPDF('P','mm','A4');
		$pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',16);
		// mencetak string
		$pdf->Image('./assets/landing/assets/dist/img/logo.jpeg',30,8,-600);
        $pdf->Cell(190,7,'BUMDES BERSAMA "UDB"',0,1,'C');
        $pdf->SetFont('Times','B',12);
		$pdf->Cell(190,7,'LAPORAN LABA/RUGI KEUANGAN',0,1,'C');
		$pdf->Cell(190,7,date('d F Y',strtotime($periode)),0,1,'C');
		$pdf->Cell(190,7,'',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
       
        
		$pdf->SetFont('Times','B',12);
        $pdf->Cell(20,4,'',0,0,'C');
        $pdf->Cell(99,5,'PENDAPATAN',"T",0,'L');
		$pdf->Cell(43,5, date('d F Y',strtotime($periode)),"T",1,'L');
		
		$pdf->SetFont('Times','',12);
		foreach ($laporan_keuangan_pendapatan as $i){
		
		$pdf->Cell(25,5,'',0,0,'C');
		$pdf->Cell(99,5,$i->keterangan,0,0,'L');
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
		$pdf->Cell(30,5,rupiah($value),0,1,'L');
		
		$sum+= $value;
		}
		$pdf->SetFont('Times','B',12);
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(20,5,'',0,0,'C');
		$pdf->Cell(99,5,'TOTAL PENDAPATAN',0,0,'L');
		$pdf->Cell(30,5,rupiah($sum),0,1,'L');
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(30,4,'',0,1,'L');
		$pdf->Cell(20,4,'',0,0,'C');
		$pdf->Cell(99,4,'BEBAN',0,0,'L');
		$pdf->Cell(30,4,'',0,1,'L');
		$pdf->SetFont('Times','',12);
		foreach ($laporan_keuangan_beban as $i){
		
		$pdf->Cell(25,5,'',0,0,'C');
		$pdf->Cell(99,5,$i->keterangan,0,0,'L');
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
		$pdf->Cell(30,5,rupiah($value),0,1,'L');
			
		$sum1+= $value;
		}
		$pdf->SetFont('Times','B',12);
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(20,5,'',0,0,'C');
		$pdf->Cell(99,5,'TOTAL BEBAN',0,0,'L');
		$pdf->Cell(30,5,rupiah($sum1),0,1,'L');
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->Cell(20,5,'',0,0,'C');
		$pdf->Cell(99,6,'LABA (RUGI) ',"TB",0,'L');
		if($sum> $sum1){
		$pdf->Cell(43,6,rupiah($sum-$sum1 ),"TB",1,'L');
		}else{
		$pdf->Cell(43,6,"(".rupiah(abs($sum-$sum1) ).")","TB",1,'L');
		}
		$pdf->Cell(20,4,'',0,1,'C');
		$pdf->SetFont('Times','',12);
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'Diketahui dan Diperiksa oleh',0,0,'C');
		$pdf->Cell(40,5,"Disetujui Oleh",0,0,'C');
		$pdf->Cell(45,5,'Dibuat Oleh',0,1,'C');
		$pdf->Cell(20,20,'',0,1,'C');
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'H. Amir Syarifudin, S.Ag.MM',0,0,'C');
		$pdf->Cell(40,5,"Yatiran, SP",0,0,'C');
		$pdf->Cell(45,5,'M. Khojin N.',0,1,'C');
		$pdf->Cell(15,4,'',0,0,'C');
		$pdf->Cell(60,5,'Komisaris',0,0,'C');
		$pdf->Cell(40,5,"Direktur",0,0,'C');
        $pdf->Cell(45,5,'Bendahara',0,1,'C');
		$pdf->Output();
	}
}
public function buku_besar(){
	$post = $this->input->post(null, TRUE);
	$data['no_akun'] = $this->M_pegawai->data_rekening()->result();
	$data['periode'] = $this->M_pegawai->periode()->result();
	if($post != null){
	$data['buku_besar'] = $this->M_pegawai->buku_besar($post)->result();
	
	}

	$this->template->load('template','bendahara_buku_besar',$data);      
}
public function neraca_lajur(){
	$post = $this->input->post(null, TRUE);
	$data['periode'] = $this->M_pegawai->periode()->result();
	if($post != null){
	$data['buku_besar'] = $this->M_pegawai->neraca_lajur($post)->result();
	
	}

	$this->template->load('template','bendahara_neraca_lajur',$data);      
}
}
        
    /* End of file  bendahara_pegawai.php */
        
                            