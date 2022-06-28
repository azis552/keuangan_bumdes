<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_nasabah extends CI_Model {
                        
public function login(){
                        
                                
}
public function get($id = null){
    $this->db->from('tb_nasabah');
    if($id != null){
        $this->db->where('id', $id);
    }
    $query=$this->db->get();
    return $query;
}  
public function aktifasi($key,$status){
    $benar = 1;
    $salah =2;
    $update = $this->db->query("call sp_aktifasi('".$key."','".$status."')");
    if($update){
		return $benar;
	}else{
		return $salah;
	}
}
public function daftar($post){
    $benar = 1;
    $salah =2;
    $key = $params['key'] = $post['key'];
    $nik = $params['nik'] = $post['nik'];
    $user = $params['nama'] = $post['nama'];
    $email = $params['email'] = $post['email'];
    $pass =$params['password'] = md5($post['password']);
    $save =$this->db->query("CALL sp_register_nas('".$nik."','".$user."','".$pass."','".$email."','1','".$key."')");
	if($save){
		return $benar;
	}else{
		return $salah;
	}
} 
public function update_nas($post){
    $benar = 1;
    $salah =2;
    $nik = $params['nik'] = $post['nik'];
    $nama = $params['nama'] = $post['nama'];
    $jenis_kelamin = $params['jenis_kelamin'] = $post['jenis_kelamin'];
    $tempat_lahir = $params['tempat_lahir'] = $post['tempat_lahir'];
    $tanggal_lahir = $params['tanggal_lahir'] = $post['tanggal_lahir'];
    $status_keluarga = $params['status_keluarga'] = $post['status_keluarga'];
    $jumlah_tanggungan = $params['jumlah_tanggungan'] = $post['jumlah_tanggungan'];
    $status_tempat_tinggal = $params['status_tempat_tinggal'] = $post['status_tempat_tinggal'];
    $lama_tinggal = $params['lama_tinggal'] = $post['lama_tinggal'];
    $alamat = $params['alamat'] = $post['alamat'];
    $kode_pos = $params['kode_pos'] = $post['kode_pos'];
    $telepon = $params['telepon'] = $post['telepon'];
    $pekerjaan = $params['pekerjaan'] = $post['pekerjaan'];
    $jabatan = $params['jabatan'] = $post['jabatan'];
    $desa = $params['desa'] = $post['desa'];
    $save =$this->db->query("CALL update_profil_nasabah('".$nik."','".$nama."','".$jenis_kelamin."','".$tempat_lahir."'
    ,'".$tanggal_lahir."','".$status_keluarga."','".$jumlah_tanggungan."','".$status_tempat_tinggal."','".$lama_tinggal."'
    ,'".$kode_pos."','".$telepon."','".$pekerjaan."','".$jabatan."','".$alamat."','".$desa."')");
    if($save){
		return $benar;
	}else{
		return $salah;
	}
}
public function tambah_anggota_kel($post){
    $benar = 1;
    $salah =2;
    $nik = $params['nik'] = $post['nik'];
    $nama = $params['nama'] = $post['nama'];
    $jenis_kelamin = $params['jenis_kelamin'] = $post['jenis_kelamin'];
    $tempat_lahir = $params['tempat_lahir'] = $post['tempat_lahir'];
    $tanggal_lahir = $params['tanggal_lahir'] = $post['tanggal_lahir'];
    $status_keluarga = $params['status_keluarga'] = $post['status_keluarga'];
    $jumlah_tanggungan = $params['jumlah_tanggungan'] = $post['jumlah_tanggungan'];
    $status_tempat_tinggal = $params['status_tempat_tinggal'] = $post['status_tempat_tinggal'];
    $lama_tinggal = $params['lama_tinggal'] = $post['lama_tinggal'];
    $alamat = $params['alamat'] = $post['alamat'];
    $kode_pos = $params['kode_pos'] = $post['kode_pos'];
    $telepon = $params['telepon'] = $post['telepon'];
    $pekerjaan = $params['pekerjaan'] = $post['pekerjaan'];
    $jabatan = $params['jabatan'] = $post['jabatan'];
    $desa = $params['desa'] = $post['desa'];
    $id_kelompok = $params['id_kelompok']=$post['id_kelompok'];
    $posisi = $params['posisi'] = $post['posisi'];
    $username = $params['username'] = $post['username'];
    $email = $params['email'] = $post['email'];
    $key = $params['key'] = $post['key'];
    $save =$this->db->query("CALL sp_tambah_anggota_kel('".$nik."','".$nama."','".$jenis_kelamin."','".$tempat_lahir."'
    ,'".$tanggal_lahir."','".$status_keluarga."','".$jumlah_tanggungan."','".$status_tempat_tinggal."','".$lama_tinggal."'
    ,'".$kode_pos."','".$telepon."','".$pekerjaan."','".$jabatan."','".$alamat."','".$desa."','".$email."'
    ,'".md5($nik)."','".$id_kelompok."','".$username."','".$posisi."','".$key."')");
    if($save){
		return $benar;
	}else{
		return $salah;
	}
}
public function update_data_kel($post){
    $benar = 1;
    $salah =2;
    $nik = $params['nik'] = $this->fungsi->user_login_n()->nik;
    $id_kel = $params['id_kelompok'] = $post['id_kelompok'];
    $nama = $params['nama_kelompok'] = $post['nama_kelompok'];
    $tanggal_berdiri = $params['tanggal_berdiri'] = $post['tanggal_berdiri'];
    $desa = $params['desa'] = $post['desa'];
    $save = $this->db->query("Call sp_update_kel('".$id_kel."','".$nama."','".$tanggal_berdiri."','".$desa."','".$nik."')");
    if($save){
		return $benar;
	}else{
		return $salah;
	}
}
public function edit_anggota_kel($post){
    $benar = 1;
    $salah =2;
    $nik = $params['nik_edit'] = $post['nik_edit'];
    $posisi = $params['posisi'] = $post['posisi_edit'];
    $save = $this->db->query("Call sp_edit_ang_kel('".$nik."','".$posisi."')");
    if($save){
		return $benar;
	}else{
		return $salah;
	}

}
public function tambah_anggota_kel1($post){
    $benar = 1;
    $salah =2;
    $nik = $params['nik'] = $this->fungsi->user_login_n()->nik;
    $id_kel = $params['id_kelompok'] = $post['id_kelompok'];
    $nama = $params['nama_lengkap'] = $post['nama_lengkap'];
    $posisi = $params['posisi'] = $post['posisi'];
    $save = $this->db->query("Call sp_tambah_anggota_kel_1('".$nik."','".$id_kel."','".$nama."','".$posisi."')");
    if($save){
		return $benar;
	}else{
		return $salah;
	}
}
public function cek_profil_pekerjaan($nik){
    $this->db->select('*');
	$this->db->from('cek_profil_pekerjaan');
	$this->db->where('nik', $nik);
    $query = $this->db->get();
    return $query;
}
public function cek_profil_data_dr($nik){
    $this->db->select('*');
	$this->db->from('cek_profil_data_diri');
	$this->db->where('nik', $nik);
    $query = $this->db->get();
    return $query;
}
public function view_dt_profil($nik){
    $this->db->select('*');
	$this->db->from('view_data_profil');
	$this->db->where('nik', $nik);
    $query = $this->db->get();
    return $query;
}
public function data_profil($nik){
    $this->db->select('*');
	$this->db->from('tb_nasabah');
	$this->db->where('nik', $nik);
    $query = $this->db->get();
    return $query;
}
public function posisi($nik){
    $this->db->select('posisi_anggota');
	$this->db->from('tb_detail_kelompok');
	$this->db->where('nik', $nik);
    $query = $this->db->get();
    return $query;
}
public function cek_pengajuan_nik_exist($nik){
	$this->db->select('*');
	$this->db->from('cek_pengajuan_nik_exist');
	$this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
}  
public function data_progress_pengajuan($nik,$id_peng){
    $this->db->select('*');
	$this->db->from('tb_pengajuan');
    $this->db->where('nik_anggota', $nik);
    $this->db->where('id_pengajuan', $id_peng);
	$query = $this->db->get();
	return $query;
} 
public function data_kelompok($nik){
    $this->db->select('*');
	$this->db->from('v_kel');
	$this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
} 
public function data_kelompok2($id){
    $this->db->select('*');
    $this->db->from('view_data_kelompok');
    $this->db->where('id_kelompok', $id);
	$query = $this->db->get();
	return $query;
}  
public function status_keanggotaan($nik){
    $this->db->select('*');
	$this->db->from('tb_detail_kelompok');
	$this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
}  
public function nik_anggota($id_kel){
    $this->db->select('*');
	$this->db->from('view_nik_pengajuan');
	$this->db->where('id_kelompok', $id_kel);
	$query = $this->db->get();
	return $query;
}     
public function cari_nik_ang($id){
    $this->db->select('*');
	$this->db->from('tb_nasabah');
	$this->db->where('nik', $id);
	$query = $this->db->get();
	return $query;
} 
public function data_sem_peng($id){
    $this->db->select('*');
	$this->db->from('dt_sem_peng');
	$this->db->where('id_kelompok', $id);
	$query = $this->db->get();
	return $query;
}    
public function cek_sem_peng($id){
    $this->db->select('*');
	$this->db->from('dt_sem_peng');
	$this->db->where('nik', $id);
	$query = $this->db->get();
	return $query;
}                  
public function id_pengajuan($nik){
    $title ="P-";
    $niknya = $nik."-";
    $cd = $this->db->query("SELECT * FROM id_pengajuan");     
    $kd = "";
        if($cd->num_rows()>0){
            foreach($cd->result() as $k){
                $tmp = ((int)$k->id_pengajuan)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
       
        return $title.$niknya.$kd;
}  
public function tam_det_penga($post){
    $benar = 1;
    $salah =2;
    $nik_pj = $params['nik_pj'] = $post['nik_pj'];
    $id_kel = $params['id_kel'] = $post['id_kel'];
    $id_peng = $params['id_pengajuan'] = $post['id_pengajuan'];
    $nik_ang = $params['nik_ang'] = $post['nik_ang'];
    $besaran = $params['besaran'] = $post['besaran'];
    $save = $this->db->query("Call sp_tambah_det_peng('".$nik_pj."','".$id_kel."','".$id_peng."','".$besaran."','".$nik_ang."')");
    if($save){
		return $benar;
	}else{
		return $salah;
	}
}
public function tambah_pengajuan($post){
    $benar = 1;
    $salah =2;
    $this->db->select('*');
	$this->db->from('domp_tb_pengajuan');
	$this->db->where('nik_pj', $post['nik_pj']);
    $query = $this->db->get()->result();
    foreach ($query as $i){
        $nik = $i->nik;
        $besaran = $i->besaran;
        $id_pengajuan = $i->id_pengajuan;
        $nik_pj = $i->nik_pj;
        $berkas = $post['berkas_peng'];
        $periode = $post['periode_peng'];

        $save = $this->db->query("Call sp_tambah_pengajuan('".$nik."','".$id_pengajuan."','".$besaran."','".$nik_pj."','".$berkas."','".$periode."')");
        
    }
    if($save){
        return $benar;
    }else{
        return $salah;
    }   

}   
public function tambah_pengajuan_per($post){
    $benar = 1;
    $salah =2;
    $nik = $params['nik'] = $this->fungsi->user_login_n()->nik;
    $besaran = $params['besaran'] = $post['besaran'];
    $bagi_hasil = $params['bagi_hasil'] = $post['bagi_hasil'];
    $periode = $post['periode'];
    $id_peng = $params['id_pengajuan'] = $post['id_pengajuan'];
    $berkas = $params['berkas'] = $post['berkas'];

        $save = $this->db->query("Call sp_tambah_pengajuan_per('".$id_peng."','".$besaran."','".$bagi_hasil."','".$nik."','".$berkas."','".$periode."')");
        
    if($save){
        return $benar;
    }else{
        return $salah;
    }   

}
public function data_nasabah($nik){
    $this->db->select('*');
	$this->db->from('tb_nasabah');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
} 
public function bukti_pengumpulan_berkas($nik,$id_peng){
    $this->db->select('*');
	$this->db->from('v_bukti_pengumpulan');
    $this->db->where('nik', $nik);
    $this->db->where('id_pengajuan', $id_peng);
    $this->db->limit(1);
	$query = $this->db->get();
	return $query;
} 
public function hapus_anggota($post){
    $benar = 1;
    $salah =2;
    $gagal =3;
    $nik = $params['nik']=$post['nik'];
    $this->db->select('*');
	$this->db->from('tb_nasabah');
	$this->db->where('nik', $nik);
    $query = $this->db->get()->num_rows();
    if($query > 0){
        return $gagal;
        
    }else{
        $hapus = $this->db->query("Call sp_hapus_anggota('".$nik."')");
        if($hapus){
            return $benar;
        }else{
            return $salah;
        }   
    }

}
public function edit_anggota_pengajuan($post){
    $benar = 3;
    $salah = 4;
    $nik = $params['nik_edit']=$post['nik_edit'];
    $besaran = $params['besaran_edit']=$post['besaran_edit'];
    $edit = $this->db->query("call sp_edit_pengajuan_kel('".$besaran."','".$nik."')");
    if($edit){
        return $benar;
    }else{
        return $salah;
    }   
}  
public function hapus_dump($post){
    $benar = 1;
    $salah = 2;
    $nik = $params['nik']=$post['nik'];
    $hapus = $this->db->query("Call sp_hapus_dump_pengajuan('".$nik."')");
    if($hapus){
        return $benar;
    }else{
        return $salah;
    }   
} 
public function riwayat_angsuran($nik){
    $this->db->select('*');
	$this->db->from('v_pengembalian');
    $this->db->where('nik', $nik);
    $this->db->order_by('tanggal_tagihan', 'ASC');

	$query = $this->db->get();
	return $query;
} 
public function riwayat_pengajuan($nik){
    $this->db->select('*');
	$this->db->from('v_riwayat_pengajuan');
    $this->db->where('nik_anggota', $nik);
    $this->db->order_by('tanggal_pengajuan', 'ASC');

	$query = $this->db->get();
	return $query;
} 
public function penangguhan($nik){
    $this->db->select('*');
	$this->db->from('v_penangguhan');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
} 
public function penangguhan_pokok($nik){
    $this->db->select('*');
	$this->db->from('penangguhan_pokok');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
} 
public function cek_penangguhan_pokok($nik){
    $this->db->select('*');
	$this->db->from('v_cek_penangguhan_pokok');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
} 
public function penangguhan_bh($nik){
    $this->db->select('*');
	$this->db->from('penangguhan_bh');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
} 
public function cek_penangguhan_bh($nik){
    $this->db->select('*');
	$this->db->from('v_cek_penangguhan_bh');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
} 
public function cek_id_pencairan($nik){
    $this->db->select('*');
	$this->db->from('cek_id_pencairan');
    $this->db->where('nik', $nik);
	$query = $this->db->get();
	return $query;
} 
public function tam_penangguhan_pokok($post){
    $benar = 1;
    $salah =2;
    $nik = $params['nik'] = $post['nik'];
    $id_angsuran = $params['id_angsuran'] = $post['id_angsuran'];
    $id_penangguhan = $params['id_penangguhan'] = $post['id_penangguhan'];
    $alasan = $params['alasan'] = $post['alasan'];
    $desk_alasan = $params['ndesk_alasan'] = $post['desk_alasan'];
    $berkas = $params['berkas_penang'] = $post['berkas_penang'];
    $tgl_usulan = $params['startDate'] = $post['startDate'];
    $save = $this->db->query("Call sp_penangguhan_pokok('".$id_angsuran."','".$nik."','".$id_penangguhan."','".$alasan."','".$desk_alasan."','".$tgl_usulan."','".$berkas."')");
    if($save){
		return $benar;
	}else{
		return $salah;
	}
}                 
                        
}
                        
/* End of file M_nasabah.php */
    
                        