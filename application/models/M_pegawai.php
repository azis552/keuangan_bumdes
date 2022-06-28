<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_pegawai extends CI_Model {
                        
public function profil($id){
    $this->db->select('*');
	$this->db->from('v_login_peg');
	$this->db->where('id_user', $id);
	$query = $this->db->get();
	return $query;         
                                
}
public function edit_profil($post){
    $benar = 1;
    $salah = 2;
    $id = $params['id_user'] = $post['id_user'];
    $nik = $params['nik'] = $post['nik'];
    $nama = $params['nama'] = $post['nama'];
    $jk = $params['jenis_kelamin'] = $post['jenis_kelamin'];
    $tmp_lahir = $params['tmp_lahir'] = $post['tmp_lahir'];
    $tgl_lhr = $params['tgl_lhr'] = $post['tgl_lhr'];
    $alamat =$params['alamat']= $post['alamat'];
    $pendidikan = $params['pendidikan'] = $post['pendidikan'];

        $ubah = $this->db->query("Call sp_edit_profil_peg('".$id."','".$nik."','".$nama."','".$jk."','".$tmp_lahir."','".$tgl_lhr."','".$alamat."','".$pendidikan."')");
        
    if($ubah){
        return $benar;
    }else{
        return $salah;
    }   
}
public function grafik_pengajuan(){
    $this->db->select('*');
	$this->db->from('grafik_pengajuan');
	$query = $this->db->get();
	return $query;    
}
public function data_nasabah(){
    $this->db->select('*');
	$this->db->from('data_nasabah');
	$query = $this->db->get();
	return $query;    
}
public function data_pengajuan($id = null){
    $this->db->select('*');
    $this->db->from('v_bukti_pengumpulan');
    if($id != null){
    $this->db->where('nik',$id);
    $query = $this->db->get();
    }else{
        $query = $this->db->get();
    }
	
	return $query;    
}
public function notifikasi($id = null){
    $this->db->select('*');
    $this->db->from('notifikasi_administrasi');
    $query = $this->db->get();
	return $query;    
}
public function notifikasi_dir($id = null){
    $this->db->select('*');
    $this->db->from('notifikasi_direktur');
    $query = $this->db->get();
	return $query;    
}
public function data_kelompok(){
    $this->db->select('*');
	$this->db->from('v_data_kelompok');
	$query = $this->db->get();
	return $query;    
}
public function data_anggota_kelompok($id){
    $this->db->select('*');
    $this->db->from('tb_detail_kelompok');
    $this->db->where('id_kelompok', $id);
	$query = $this->db->get();
	return $query;    
}
public function pengajuan_baru(){
    $this->db->select('*');
	$this->db->from('v_pengajuan_baru');
	$query = $this->db->get();
	return $query;    
}
public function pembahasan(){
    $this->db->select('*');
	$this->db->from('v_pembahasan_awal');
	$query = $this->db->get();
	return $query;    
}
public function pembahasan_akhir(){
    $this->db->select('*');
	$this->db->from('v_pembahasan_akhir');
	$query = $this->db->get();
	return $query;    
}
public function musyawarah_pendanaan(){
    $this->db->select('*');
	$this->db->from('v_musyawarah_pendanaan');
	$query = $this->db->get();
	return $query;    
}
public function pencairan(){
    $this->db->select('*');
    $this->db->from('v_validasi_pencairan');
	$query = $this->db->get();
	return $query;    
}
public function pencairan2(){
    $this->db->select('*');
	$this->db->from('v_pencairan');
	$query = $this->db->get();
	return $query;    
}
public function f_verifikasi($nik){
    $this->db->select('*');
    $this->db->from('v_verifikasi');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;    
}
public function seleksi_berkas($post){
    $benar = 1;
    $salah =2;
    $id_peng = $params['id_pengajuan'] = $post['id_pengajuan'];
    $nik_ang = $params['nik_ang'] = $post['nik_ang'];
    $nama_ang =$params['nama_ang']= $post['nama_ang'];
    $keputusan =$params['keputusan']= $post['keputusan'];
    $pesan =$params['pesan']= $post['pesan'];
    $id_user =$params['id_user']= $post['id_user'];
    $update = $this->db->query("Call sp_update_seleksi_berkas('".$id_peng."','".$nik_ang."','".$pesan."','".$keputusan."','".$id_user."')");
        
    if($update){
        return $benar;
    }else{
        return $salah;
    }   
}
public function tidak_lolos($post){
    $benar = 1;
    $salah =2;
    $id_peng = $params['id_pengajuan'] = $post['id_pengajuan'];
    $nik_ang = $params['nik_ang'] = $post['nik_ang'];
    $update = $this->db->query("Call sp_update_tidak_lolos('".$id_peng."','".$nik_ang."')");
        
    if($update){
        return $benar;
    }else{
        return $salah;
    }   
}
public function musy_pendanaan($post){
    $benar = 1;
    $salah =2;
    $id_peng = $params['id_pengajuan'] = $post['id_pengajuan'];
    $nik_ang = $params['nik_ang'] = $post['nik_ang'];
    $nama_ang =$params['nama_ang']= $post['nama_ang'];
    $keputusan =$params['keputusan']= $post['keputusan'];
    $dn_cair =$params['dn_cair']= preg_replace("/[^0-9]/", "", $post['dn_cair']);  
    $pesan = "Pengajuan Cair";
    $tgl_pen = $params['tgl_pen']= $post['tgl_pen'];
    $id_user =$params['id_user']= $post['id_user'];
    $bagi_hasil = $params['bagi_hasil']= $post['bagi_hasil'];
    $periode = $params['periode']= $post['periode'];
    $update = $this->db->query("Call sp_musy_pendanaan('".$id_peng."','".$nik_ang."','".$tgl_pen."','".$pesan."','".$dn_cair."','".$tgl_pen."','".$keputusan."','".$id_user."','".$periode."','".$bagi_hasil."')");
        
    if($update){
        return $benar;
    }else{
        return $salah;
    }   
}
public function pembahasan_awal($post){
    $benar = 1;
    $salah =2;
    $id_peng = $params['id_pengajuan'] = $post['id_pengajuan'];
    $nik_ang = $params['nik_ang'] = $post['nik_ang'];
    $nama_ang =$params['nama_ang']= $post['nama_ang'];
    $keputusan ="Pembahasan Awal";
    $tgl_survey =$params['tgl_survey']= $post['tgl_survey'];
    $id_user =$params['id_user']= $post['id_user'];
    $id_pemb = "Pem-".$id_peng."-".str_shuffle(date('dm'));
    $update = $this->db->query("Call sp_pem_awal('".$id_pemb."','".$id_peng."','".$nik_ang."','".$tgl_survey."','".$keputusan."','".$id_user."')");
        
    if($update){
        return $benar;
    }else{
        return $salah;
    }   
}
public function update_pembahasan_akhir($post){
    $benar = 1;
    $salah =2;
    $id_peng = $params['id_pengajuan'] = $post['id_pengajuan'];
    $nik_ang = $params['nik_ang'] = $post['nik_ang'];
    $nama_ang =$params['nama_ang']= $post['nama_ang'];
    $tgl_survey =$params['tgl_survey']= $post['tgl_survey'];
    $usaha_lain =$params['usaha_lain']= $post['usaha_lain'];
    $tot_pendapatan =$params['tot_pendapatan']= preg_replace("/[^0-9]/", "", $post['tot_pendapatan']); 
    $biy_keluarga =$params['biy_keluarga']= preg_replace("/[^0-9]/", "", $post['biy_keluarga']);  
    $biy_pengembalian =$params['biy_pengembalian']= preg_replace("/[^0-9]/", "", $post['biy_pengembalian']);  
    $biy_lain =$params['biy_lain']= preg_replace("/[^0-9]/", "", $post['biy_lain']);  
    $sisa_pendapatan =$params['sisa_pendapatan']= preg_replace("/[^0-9]/", "", $post['sisa_pendapatan']);  
    $rekomendasi =$params['rekomendasi']= preg_replace("/[^0-9]/", "",  $post['rekomendasi']); 
    $ft_peta =$params['ft_peta']= $post['ft_peta'];
    $ft_rumah =$params['ft_rumah']= $post['ft_rumah'];
    $ft_usaha =$params['ft_usaha']= $post['ft_usaha'];
    $keputusan ="Pembahasan Akhir";
    $id_user =$params['id_user']= $post['id_user'];
    $update = $this->db->query("Call sp_pem_akhir('".$id_peng."','".$nik_ang."','".$tgl_survey."','".$usaha_lain."','".$tot_pendapatan."','".$biy_keluarga."','".$biy_pengembalian."','".$biy_lain."','".$sisa_pendapatan."','".$rekomendasi."','".$ft_peta."','".$ft_rumah."','".$ft_usaha."','".$id_user."','".$keputusan."')");
        
    if($update){
        return $benar;
    }else{
        return $salah;
    }   
}
public function update_status_val($id){
    $update = $this->db->query("Call sp_update_status_validasi('".$id."')");
}   
public function update_id_pengembalian($id,$id2){
    return $this->db->query("Call sp_update_pengembalian('".$id."','".$id2."')");
}
public function update_angsuran($data){
    $benar = 1;
    $salah =2;
    $update =  $this->db->insert_batch('tb_angsuran', $data);
    if($update){
        return $benar;
    }else{
        return $salah;
    }   
}
public function temp_transaksi($data){
    $benar = 1;
    $salah =2;
    $update =  $this->db->insert_batch('temp_transaksi_keu', $data);
    if($update){
        return $benar;
    }else{
        return $salah;
    }   
}

// model direktur
public function pengecekan_dir(){
    $this->db->select('*');
	$this->db->from('v_pengecekan_dir');
	$query = $this->db->get();
	return $query;    
}
public function seleksi_direktur($post){
    $benar = 1;
    $salah =2;
    $id_peng = $params['id_pengajuan'] = $post['id_pengajuan'];
    $nik_ang = $params['nik_ang'] = $post['nik_ang'];
    $nama_ang =$params['nama_ang']= $post['nama_ang'];
    $keputusan =$params['keputusan']= $post['keputusan'];
    $pesan =$params['pesan']= $post['pesan'];
    $id_user =$params['id_user']= $post['id_user'];
    $update = $this->db->query("Call sp_update_seleksi_berkas('".$id_peng."','".$nik_ang."','".$pesan."','".$keputusan."','".$id_user."')");
        
    if($update){
        return $benar;
    }else{
        return $salah;
    }   
}

// model bendahara

public function data_rekening(){
    $this->db->select('*');
	$this->db->from('tb_akun_rekening');
	$query = $this->db->get();
	return $query;  
}
public function cek_rekening($post){
    $no_akun = $params['no_akun'] = $post['no_akun'];
    $keterangan = $params['keterangan'] = $post['keterangan'];
    $this->db->select('*');
    $this->db->from('tb_akun_rekening');
    $this->db->where('nama_akun', $keterangan);
    $this->db->or_where('id_akun', $no_akun);
	$query = $this->db->get();
	return $query;  
}
public function tambah_rekening($post){
    $benar = 1;
    $salah =2;
    $no_akun = $params['no_akun'] = $post['no_akun'];
    $keterangan = $params['keterangan'] = $post['keterangan'];
    $tipe_akun =$params['tipe_akun']= $post['tipe_akun'];
    $save = $this->db->query("Call sp_tambah_rekening('".$no_akun."','".$keterangan."','".$tipe_akun."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}
public function update_rekening($post){
    $benar = 1;
    $salah =2;
    $no_akun = $params['no_akun'] = $post['no_akun'];
    $keterangan = $params['keterangan'] = $post['keterangan'];
    $tipe_akun =$params['tipe_akun']= $post['tipe_akun'];
    $save = $this->db->query("Call sp_update_rekening('".$no_akun."','".$keterangan."','".$tipe_akun."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}
public function hapus_rekening($post){
    $benar = 1;
    $salah =2;
    $no_akun = $params['no_akun'] = $post['no_akun'];
    $save = $this->db->query("Call sp_del_rek('".$no_akun."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}
public function tambah_periode($post){
    $benar = 1;
    $salah =2;
    $id_per = $params['id_per'] = $post['id_per'];
    $tgl = $params['tgl_per'] = $post['tgl_per'];
    $save = $this->db->query("Call sp_per_keu('".$id_per."','".$tgl."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}
public function update_periode($post){
    $benar = 1;
    $salah =2;
    $id_per = $params['id_per'] = $post['id_per'];
    $tgl = $params['tgl_per'] = $post['tgl_per'];
    $save = $this->db->query("Call sp_edit_periode('".$id_per."','".$tgl."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}
public function delete_periode($post){
    $benar = 1;
    $salah =2;
    $id_per = $params['id_per'] = $post['id_per'];
    $save = $this->db->query("Call sp_del_periode('".$id_per."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}
public function periode(){
    $this->db->select('*');
	$this->db->from('v_periode_keu');
	$query = $this->db->get();
	return $query;  
} 
public function periode_keu(){
    $this->db->select('*');
	$this->db->from('v_periode');
	$query = $this->db->get();
	return $query;  
} 
public function cek_kredit(){
    $this->db->select('*');
	$this->db->from('cek_temp_trans_kredit');
	$query = $this->db->get();
	return $query;  
} 
public function cek_kredit_jp(){
    $this->db->select('*');
	$this->db->from('cek_kredit_jurnal_penyesuaian');
	$query = $this->db->get();
	return $query;  
} 
public function cek_debit_jp(){
    $this->db->select('*');
	$this->db->from('cek_debit_jurnal_penyesuaian');
	$query = $this->db->get();
	return $query;  
} 
public function cek_debit(){
    $this->db->select('*');
	$this->db->from('cek_temp_trans_debit');
	$query = $this->db->get();
	return $query;  
} 
public function transaksi_belum(){
    $this->db->select('*');
	$this->db->from('v_transaksi_keu');
	$query = $this->db->get();
	return $query;  
}  
public function tampil_jurnal_penyesuaian(){
    $this->db->select('*');
	$this->db->from('v_jurnal_penyesuaian');
	$query = $this->db->get();
	return $query;  
}  
public function delete_temp_keu($post){
    $benar = 1;
    $salah =2;
    $id_trans = $params['id_trans'] = $post['id_trans'];
    $save = $this->db->query("Call sp_del_temp_trans('".$id_trans."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}
public function temp_trans(){
    $this->db->select('*');
	$this->db->from('temp_transaksi_keu');
	$query = $this->db->get();
	return $query;  
} 

public function det_transaksi(){
    $this->db->select('*');
    $this->db->from('v_det_transaksi');
    $this->db->order_by('id_det', 'ASC');
	$query = $this->db->get();
	return $query;  
}  
public function no_akun_pendapatan_mudhorobah(){
    $this->db->select('id_akun');
    $this->db->from('tb_akun_rekening');
    $this->db->where('nama_akun', 'Pendapatan Mudhorobah');
	$query = $this->db->get();
	return $query;  
} 
public function no_akun_pendapatan_jasa_spp(){
    $this->db->select('id_akun');
    $this->db->from('tb_akun_rekening');
    $this->db->where('nama_akun', 'Pendapatan Jasa SPP');
	$query = $this->db->get();
	return $query;  
} 
public function no_akun_piutang_mudhorobah(){
    $this->db->select('id_akun');
    $this->db->from('tb_akun_rekening');
    $this->db->where('nama_akun', 'Piutang Mudhorobah');
	$query = $this->db->get();
	return $query;  
} 
public function no_akun_piutang_spp(){
    $this->db->select('id_akun');
    $this->db->from('tb_akun_rekening');
    $this->db->where('nama_akun', 'Piutang SPP');
	$query = $this->db->get();
	return $query;  
} 
public function no_akun_kas_mudhorobah(){
    $this->db->select('id_akun');
    $this->db->from('tb_akun_rekening');
    $this->db->where('nama_akun', 'Kas Mudhorobah');
	$query = $this->db->get();
	return $query;  
}  
public function no_akun_kas_spp(){
    $this->db->select('id_akun');
    $this->db->from('tb_akun_rekening');
    $this->db->where('nama_akun', 'Kas SPP');
	$query = $this->db->get();
	return $query;  
} 
public function id_periode(){
    $title ="Per";
    
    $cd = $this->db->query("SELECT * FROM id_per_keu");     
    $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->id_periode)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
       
        return $title.$kd;
}      
public function id_transaksi_keu(){
    $title ="T";
    $pen = rand(1234567890,0);
    $date = rand(date('d'),date('y'));

    $cd = $this->db->query("SELECT * FROM id_transaksi");     
    $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->id_trans)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
       
        return $title."-".$pen.$date.$kd;
} 
public function id_det_transaksi_keu(){
    $title ="Det-T";
    $pen = rand(567890,0);
    $date = rand(date('d'),date('y'));

    $cd = $this->db->query("SELECT * FROM id_det_trans");     
    $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->id_det_trans)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
       
        return $title."-".$pen.$date.$kd;
}                       
public function tambah_transaksi($post){
    $benar = 1;
    $salah =2;
    $id_trans = $params['id_trans'] = $post['id_trans'];
    $id_akun = $params['id_akun'] = $post['id_akun'];
    $jml_besaran = $params['jml_besaran'] = $post['jml_besaran'];
    $dk = $params['dk'] = $post['dk'];
    $jj = "Jurnal Umum";
    $save = $this->db->query("Call sp_tambah_transaksi('".$id_trans."','".$id_akun."','".$jml_besaran."','".$dk."','".$jj."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}     
public function tambah_transaksi_penye($post){
    $benar = 1;
    $salah =2;
    $id_trans = $params['id_trans'] = $post['id_trans'];
    $id_akun = $params['id_akun'] = $post['id_akun'];
    $jml_besaran = $params['jml_besaran'] = $post['jml_besaran'];
    $dk = $params['dk'] = $post['dk'];
    $jj = "Jurnal Penyesuaian";
    $save = $this->db->query("Call sp_tambah_transaksi('".$id_trans."','".$id_akun."','".$jml_besaran."','".$dk."','".$jj."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}                           
public function tambah_det_transaksi_keu($post){
    $benar = 1;
    $salah =2;
    $this->db->select('*');
	$this->db->from('jurnal_umum');
    $query = $this->db->get()->result();
    foreach ($query as $i){
        $no_akun = $i->id_akun;
        $besaran = $i->jumlah_transaksi;
        $dk = $i->posisi;
        $id_transaksi = $i->id_transaksi;
        $jj = $i->jenis_jurnal;
        $id_det = $post['id_trans'];
        $periode = $post['id_peridoe'];
        $tgl_trans = $post['tgl_trans'];


        $save = $this->db->query("Call sp_det_transaksi_keu('".$id_det."','".$id_transaksi."','".$no_akun."','".$besaran."','".$dk."','".$periode."','".$tgl_trans."','".$jj."')");
        
    }
    if($save){
        return $benar;
    }else{
        return $salah;
    }   

}  
public function tambah_det_transaksi_penyesuaian($post){
    $benar = 1;
    $salah =2;
    $this->db->select('*');
	$this->db->from('jurnal_penyesuaian');
    $query = $this->db->get()->result();
    foreach ($query as $i){
        $no_akun = $i->id_akun;
        $besaran = $i->jumlah_transaksi;
        $dk = $i->posisi;
        $id_transaksi = $i->id_transaksi;
        $jj = $i->jenis_jurnal;
        $id_det = $post['id_trans'];
        $periode = $post['id_peridoe'];
        $tgl_trans = $post['tgl_trans'];


        $save = $this->db->query("Call sp_det_transaksi_keu('".$id_det."','".$id_transaksi."','".$no_akun."','".$besaran."','".$dk."','".$periode."','".$tgl_trans."','".$jj."')");
        
    }
    if($save){
        return $benar;
    }else{
        return $salah;
    }   

}  
public function tambah_det_jurnal_penyesuaian($post){
    $benar = 1;
    $salah =2;
    $this->db->select('*');
	$this->db->from('jurnal_penyesuaian');
    $query = $this->db->get()->result();
    foreach ($query as $i){
        $no_akun = $i->id_akun;
        $besaran = $i->jumlah_transaksi;
        $dk = $i->posisi;
        $id_transaksi = $i->id_transaksi;
        $jj = $i->jenis_jurnal;
        $id_det = $post['id_trans'];
        $periode = $post['id_peridoe'];
        $tgl_trans = $post['tgl_trans'];


        $save = $this->db->query("Call sp_det_transaksi_keu('".$id_det."','".$id_transaksi."','".$no_akun."','".$besaran."','".$dk."','".$periode."','".$tgl_trans."','".$jj."')");
        
    }
    if($save){
        return $benar;
    }else{
        return $salah;
    }   

}                    
public function update_det_transaksi_keu($post){
    $benar = 1;
    $salah =2;
    $coba = $this->temp_trans()->result();
    foreach ($coba as $i){
        $id_det = $post['id_det'];
        $periode = $post['periode'];
        $tgl_trans = $post['tanggal'];
        $jenis_jurnal = "Jurnal Umum";
        $id_transaksi = $i->id_transaksi;
        $no_akun = $i->id_akun;
        $besaran = $i->jumlah_transaksi;
        $dk = $i->posisi;
       
        $save = $this->db->query("Call sp_det_transaksi_keu('".$id_det."','".$id_transaksi."','".$no_akun."','".$besaran."','".$dk."','".$periode."','".$tgl_trans."','".$jenis_jurnal."')");
    }
    if($save){
        return $benar;
    }else{
        return $salah;
    }   

}   
public function update_pencairan($post){
    $benar = 1;
    $salah =2;
    $nik_ang = $params['nik_ang'] = $post['nik_ang'];
    $id_peng = $params['id_pengajuan'] = $post['id_pengajuan'];
    $id_pencairan = $params['id_pencairan'] = $post['id_pencairan'];
    $penerima = $params['penerima'] = $post['penerima'];

    $save = $this->db->query("Call sp_pencairan('".$id_pencairan."','".$id_peng."','".$nik_ang."','".$penerima."')");
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}
public function tanda_terima_dana($nik,$id_peng){
    
        $this->db->select('*');
        $this->db->from('v_bukti_terima_dana');
        $this->db->where('nik', $nik);
        $this->db->where('id_pengajuan', $id_peng);
        $query = $this->db->get();
        return $query;
    
}         
public function tagihan($post){
    $tgl_tagihan = $params['startDate'] = $post['startDate'];
    $nik = $params['nik_ang'] = $post['nik_ang'];
    $tgl = date('m',strtotime($tgl_tagihan));
    $tgl2 = date('Y', strtotime($tgl_tagihan));
    $this->db->select('*');
    $this->db->from('v_pengembalian');
    $this->db->where('month(tanggal_tagihan)',$tgl);
    $this->db->where('year(tanggal_tagihan)',$tgl2);
    $this->db->where('nik',$nik );
    $this->db->where('status',"belum" );
    $query = $this->db->get();
    return $query;

} 
public function pengembalian_pokok($post){
    $tgl_tagihan = $params['startDate'] = $post['startDate'];
    $nik = $params['nik_ang'] = $post['nik_ang'];
    $tgl = date('m',strtotime($tgl_tagihan));
    $tgl2 = date('Y', strtotime($tgl_tagihan));
    
    $this->db->select('*');
    $this->db->from('v_pengembalian_pokok');
    $this->db->where('month(tanggal_tagihan)',$tgl);
    $this->db->where('year(tanggal_tagihan)',$tgl2);
    $this->db->where('nik', $nik);
    $query = $this->db->get();
    return $query;

}         
public function pengembalian_jasa($post){  
    $tgl_tagihan = $params['startDate'] = $post['startDate'];
    $nik = $params['nik_ang'] = $post['nik_ang'];
    $tgl = date('m',strtotime($tgl_tagihan));
    $tgl2 = date('Y', strtotime($tgl_tagihan));

    $this->db->select('*');
    $this->db->from('v_pengembalian_jasa');
$this->db->where('month(tanggal_tagihan)',$tgl);
$this->db->where('year(tanggal_tagihan)',$tgl2);
    $this->db->where('nik', $nik);
    $query = $this->db->get();
    return $query;

}        
public function pengembalian_bh($post){
    $tgl_tagihan = $params['startDate'] = $post['startDate'];
    $nik = $params['nik_ang'] = $post['nik_ang'];
    $tgl = date('m',strtotime($tgl_tagihan));
    $tgl2 = date('Y', strtotime($tgl_tagihan));
    $this->db->select('*');
    $this->db->from('v_pengembalian_bh');
    $this->db->where('MONTH(tanggal_tagihan)',$tgl);
    $this->db->where('year(tanggal_tagihan)',$tgl2);
    $this->db->where('nik', $nik);
    $query = $this->db->get();
    return $query;

}  
public function update_bayar_angsuran($post){
    $benar = 1;
    $salah =2;
    $indexnya = 0;
    $ke_ken=[1];
    foreach($ke_ken as $kenyaa){
        @$keuntungan = $post['keuntungan'][$indexnya];
    }
    $index = 0;
    $jumlah = $post['jml'];
    
    if(count($jumlah) == 1){
        $ke = [1];
    }else{
        $ke = [1,2];
    }
    foreach($ke as $kenya){
        $id_angsuran  = $post['id_angsuran'][$index];
        $jumlah = $post['jml'][$index];
        $bayar = $post['byr'][$index];
        if($bayar < $jumlah){
            $status = "kurang";
        }else{
            $status = "lunas"; 
        }
        $jenis = $post['id_jenis'];
        if($jenis == 2){
            if($bayar < $jumlah){
                $save = $this->db->query("Call sp_bayar_angsuran_per_kurang('".$id_angsuran."','".$status."','".$jumlah."','".$bayar."','".$keuntungan."')");
            }else if($bayar >= $jumlah){
                $save = $this->db->query("Call sp_bayar_angsuran_per_lunas('".$id_angsuran."','".$status."','".$jumlah."','".$bayar."','".$keuntungan."')");
            }

        }else{
            if($bayar < $jumlah){
                $save = $this->db->query("Call sp_bayar_angsuran_pem_kurang('".$id_angsuran."','".$status."','".$jumlah."','".$bayar."')");
            }else if($bayar >= $jumlah){
                $save = $this->db->query("Call sp_bayar_angsuran_pem_lunas('".$id_angsuran."','".$status."','".$jumlah."','".$bayar."')");
            }

        }
        
        
        $index++;
    }
    
} 
public function trans_aset_lancar_kredit($post){
    $per = $params['id_peridoe'] = $post['id_peridoe'];
    $this->db->select('*');
    $this->db->from('v_laporan_keu_kredit');
    $this->db->where('id_per',$per);
    $this->db->where('tipe', "Aset Lancar");
    $query = $this->db->get();
    return $query;
}
public function laporan_keuangan_aset_lancar($post){
    $periode = $post['id_periode'];
    $result = $this->db->query("SELECT
    `v_det_transaksi`.`id_akun`   AS `no_akun`,
    `v_det_transaksi`.`nama_akun` AS `keterangan`,
    `v_det_transaksi`.`tipe`      AS `tipe`,
    `v_det_transaksi`.`id_per`    AS `periode`,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_kredit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_kredit
    
    FROM `v_det_transaksi`
    where id_per = '".$periode."'
    and tipe = 'aset lancar'
    GROUP BY `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per`");
    return $result;
} 
public function laporan_keuangan_aset_tetap($post){
    $periode = $post['id_periode'];
    $result = $this->db->query("SELECT
    `v_det_transaksi`.`id_akun`   AS `no_akun`,
    `v_det_transaksi`.`nama_akun` AS `keterangan`,
    `v_det_transaksi`.`tipe`      AS `tipe`,
    `v_det_transaksi`.`id_per`    AS `periode`,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_kredit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_kredit   
    FROM `v_det_transaksi`
    where id_per = '".$periode."'
    and tipe = 'aset tetap'
    GROUP BY `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per`");
    return $result;
} 
public function laporan_keuangan_aset_kewajiban($post){
    $periode = $post['id_periode'];
    $result = $this->db->query("SELECT
    `v_det_transaksi`.`id_akun`   AS `no_akun`,
    `v_det_transaksi`.`nama_akun` AS `keterangan`,
    `v_det_transaksi`.`tipe`      AS `tipe`,
    `v_det_transaksi`.`id_per`    AS `periode`,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_kredit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_kredit   
    
    FROM `v_det_transaksi`
    where id_per = '".$periode."'
    and tipe = 'kewajiban'
    GROUP BY `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per`");
    return $result;
} 
public function laporan_keuangan_aset_ekuitas($post){
    $periode = $post['id_periode'];
    $result = $this->db->query("SELECT
    `v_det_transaksi`.`id_akun`   AS `no_akun`,
    `v_det_transaksi`.`nama_akun` AS `keterangan`,
    `v_det_transaksi`.`tipe`      AS `tipe`,
    `v_det_transaksi`.`id_per`    AS `periode`,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_kredit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_kredit  
    
    FROM `v_det_transaksi`
    where id_per = '".$periode."'
    and tipe = 'ekuitas'
    GROUP BY `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per`");
    return $result;
} 
public function laporan_keuangan_pendapatan($post){
    $periode = $post['id_periode'];
    $result = $this->db->query("SELECT
    `v_det_transaksi`.`id_akun`   AS `no_akun`,
    `v_det_transaksi`.`nama_akun` AS `keterangan`,
    `v_det_transaksi`.`tipe`      AS `tipe`,
    `v_det_transaksi`.`id_per`    AS `periode`,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_kredit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_kredit 
    
    FROM `v_det_transaksi`
    where id_per = '".$periode."'
    and tipe = 'pendapatan'
    GROUP BY `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per`");
    return $result;
} 
public function laporan_keuangan_beban($post){
    $periode = $post['id_periode'];
    $result = $this->db->query("SELECT
    `v_det_transaksi`.`id_akun`   AS `no_akun`,
    `v_det_transaksi`.`nama_akun` AS `keterangan`,
    `v_det_transaksi`.`tipe`      AS `tipe`,
    `v_det_transaksi`.`id_per`    AS `periode`,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_kredit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_kredit
    
    FROM `v_det_transaksi`
    where id_per = '".$periode."'
    and tipe = 'beban'
    GROUP BY `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per`");
    return $result;
} 
public function laporan_keuangan_neraca($post){
    $periode = $post['id_periode'];
    $result = $this->db->query("SELECT
    `v_det_transaksi`.`id_akun`   AS `no_akun`,
    `v_det_transaksi`.`nama_akun` AS `keterangan`,
    `v_det_transaksi`.`tipe`      AS `tipe`,
    `v_det_transaksi`.`id_per`    AS `periode`,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_kredit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_kredit
    
    
    FROM `v_det_transaksi`
    where id_per = '".$periode."'
    GROUP BY `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per` order by no_akun asc");
    return $result;
} 
public function buku_besar($post){
    $periode = $post['id_periode'];
    $no_akun = $post['id_akun'];
    $result = $this->db->query("SELECT
    `v_det_transaksi`.`id_akun`   AS `no_akun`,
    `v_det_transaksi`.`nama_akun` AS `keterangan`,
    `v_det_transaksi`.`tipe`      AS `tipe`,
    `v_det_transaksi`.`id_per`    AS `periode`,
    `v_det_transaksi`.`jenis_jurnal` AS `jenis_jurnal`,
    `v_det_transaksi`.`jumlah_transaksi` AS `jumlah`,
    `v_det_transaksi`.`posisi` AS posisi
    FROM `v_det_transaksi`
    WHERE id_per = '".$periode."'
    AND v_det_transaksi.id_akun = '".$no_akun."'");
    return $result;
} 
public function neraca_lajur($post){
    $periode = $post['id_periode'];
    $result = $this->db->query("SELECT
    `v_det_transaksi`.`id_akun`   AS `no_akun`,
    `v_det_transaksi`.`nama_akun` AS `keterangan`,
    `v_det_transaksi`.`tipe`      AS `tipe`,
    `v_det_transaksi`.`id_per`    AS `periode`,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal umum') AS jm_kredit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'debit' AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_debit,
    (SELECT SUM(jumlah_transaksi) FROM v_det_transaksi WHERE nama_akun = keterangan AND posisi = 'kredit'  AND id_per = periode AND jenis_jurnal = 'jurnal penyesuaian') AS jp_kredit
    
    
    
    FROM `v_det_transaksi`
    WHERE id_per = '".$periode."'
    GROUP BY `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per`");
    return $result;
} 
public function tgl_periode($per){
    $this->db->select('tanggal_periode');
    $this->db->from('v_periode_keu');
    $this->db->where('id_periode', $per);
	$query = $this->db->get();
	return $query;  
}
public function nasabah($nik){
    $this->db->select('*');
    $this->db->from('v_tagihan');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;  
}
public function cek_id_penangguhan($nik){
    $this->db->select('*');
    $this->db->from('cek_id_penangguhan');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;  
}
public function v_angsuran($nik){
    $this->db->select('*');
    $this->db->from('v_angsuran');
    $this->db->where('id_nik', $nik);
	$query = $this->db->get();
	return $query;  
}
public function v_penangguhan(){
    $this->db->select('*');
    $this->db->from('v_penangguhan');
	$query = $this->db->get();
	return $query;  
}
public function v_angsuran2($nik){
    $this->db->select('*');
    $this->db->from('v_angsuran');
    $this->db->where('id_nik', $nik);
	$query = $this->db->get();
	return $query;  
}
public function v_angsuran3($nik){
    $this->db->select('*');
    $this->db->from('v_angsuran');
    $this->db->where('id_nik', $nik);
    $this->db->where('keterangan', "Pokok");
	$query = $this->db->get();
	return $query;  
}
public function cek_tagihan_sbl($nik,$tgl){
    $this->db->select('*');
    $this->db->from('v_angsuran');
    $this->db->where('id_nik', $nik);
    $this->db->where('tgl_tagihan <', $tgl);
	$query = $this->db->get();
	return $query;  
}
public function penangguhan_id($post){
    $benar = 1;
    $salah =2;
    $id_pengajuan = $params['id_pengajuan'] = $post['id_pengajuan'];
    $nik = $params['nik'] = $post['nik'];
    $id_penangguhan = $params['id_penangguhan2'] = $post['id_penangguhan2'];
    $id_det_penangguhan = $params['id_penangguhan'] = $post['id_penangguhan'];
    $alasan = $params['alasan'] = $post['alasan'];
    $desk_alasan = $params['desk_alasan'] = $post['desk_alasan'];
    $lama_penangguhan = $params['bln'] = $post['bln'];
    $tindakan = $params['tindakan'] = $post['tindakan'];
    $berkas = $params['berkas_penang'] = $post['berkas_penang'];
    $save = $this->db->query("Call sp_penangguhan_id('".$id_penangguhan."','".$id_det_penangguhan."','".$alasan."','".$desk_alasan."','".$lama_penangguhan."','".$tindakan."','".$berkas."','".$id_pengajuan."','".$nik."')");
    if($tindakan == "1"){
    $coba = $this->v_angsuran($nik)->result();
    $x = 1;
    foreach ($coba as $i){
        $id_angsuran = $i->id_angsuran;
        $tanggal = $i->tgl_tagihan;
        $lama_penangguhan = $params['bln'] = $post['bln'];
        $save = $this->db->query("Call sp_tambah_bulan('".$id_angsuran."','".$tanggal."','".$lama_penangguhan."')");
        $x++;
    }
    }else if($tindakan == "2"){
        $coba = $this->v_angsuran2($nik)->result();
        $x = 1;
        foreach ($coba as $i){
        $id_angsuran = $i->id_angsuran;
        $tanggal = $i->tgl_tagihan;
        $lama_penangguhan = $params['bln'] = $post['bln'];
        $tgltagihan = $params['tgl_tagihan'] = $post['tgl_tagihan'];
        $save = $this->db->query("Call sp_tambah_bulan2('".$id_angsuran."','".$tanggal."','".$lama_penangguhan."','".$tgltagihan."')");
        $x++;
    }
    }else if($tindakan == "3"){

    }
    if($save){
        return $benar;
    }else{
        return $salah;
    }   

}   
public function pelunasan($post){
    $benar = 1;
    $salah =2;
    $id_pengajuan = $params['id_pengajuan_inti'] = $post['id_pengajuan_inti'];
    $nik = $params['nik'] = $post['nik'];
    $id_pengembalian = $params['id_pengembaliannya'] = $post['id_pengembaliannya'];
    $save = $this->db->query("Call sp_pelunasan('".$id_pengembalian."','".$nik."','".$id_pengajuan."')");
    if($save){
        return $benar;
    }else{
        return $salah;
    }   
}
public function penangguhan_tanpa_id($post){
    $benar = 1;
    $salah =2;
    $id_pengajuan = $params['id_pengajuan'] = $post['id_pengajuan'];
    $nik = $params['nik'] = $post['nik'];
    $id_penangguhan = $params['id_penangguhan2'] = $post['id_penangguhan2'];
    $id_det_penangguhan = $params['id_penangguhan'] = $post['id_penangguhan'];
    $alasan = $params['alasan'] = $post['alasan'];
    $desk_alasan = $params['desk_alasan'] = $post['desk_alasan'];
    $lama_penangguhan = $params['bln'] = $post['bln'];
    $tindakan = $params['tindakan'] = $post['tindakan'];
    $save = $this->db->query("Call sp_penangguhan_tanpa_id('".$id_det_penangguhan."','".$id_penangguhan."','".$alasan."','".$desk_alasan."','".$lama_penangguhan."','".$tindakan."')");
    if($tindakan == "1"){
    $coba = $this->v_angsuran($nik)->result();
    $x = 1;
    foreach ($coba as $i){
        $id_angsuran = $i->id_angsuran;
        $tanggal = $i->tgl_tagihan;
        $lama_penangguhan = $params['bln'] = $post['bln'];
        $save = $this->db->query("Call sp_tambah_bulan('".$id_angsuran."','".$tanggal."','".$lama_penangguhan."')");
        $x++;
    }
    }else if($tindakan == "2"){
        $coba = $this->v_angsuran2($nik)->result();
        $x = 1;
        foreach ($coba as $i){
        $id_angsuran = $i->id_angsuran;
        $tanggal = $i->tgl_tagihan;
        $lama_penangguhan = $params['bln'] = $post['bln'];
        $tgltagihan = $params['tgl_tagihan'] = $post['tgl_tagihan'];
        $save = $this->db->query("Call sp_tambah_bulan2('".$id_angsuran."','".$tanggal."','".$lama_penangguhan."','".$tgltagihan."')");
        $x++;
    }
    }else if($tindakan == "3"){

    }
    if($save){
        return $benar;
    }else{
        return $salah;
    }   

}   
}
                        
/* End of file M_pegawai.php */
    
                        