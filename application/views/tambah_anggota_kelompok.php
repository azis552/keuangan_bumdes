<div class="dashboard-finance">
    <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
					<!-- ============================================================== -->
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">Nasabah</h3>
                                <p class="pageheader-text">Nasabah</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tambah Anggota Kelompok</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
                                        </ol>
                                    </nav>
                                </div>
                            <?php if($status_anggota>0){?>    
                            <form id="tambah_anggota" action="<?= site_url('nasabah/tambah_anggota_kel_baru')?>" method="POST" name="edit_nasabah" >
                    
                            <br/>
                            <div class="card">
                                    <h5 class="card-header">Profil Nasabah</h5>
                                    <?php if($this->session->flashdata('simpan')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menambahkan Anggota
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Menambahkan Anggota
                                                </div>
                                    <?php endif; ?>
                            <div class="card">
                                    <h5 class="card-header">Data Diri</h5>
                                    <div class="card-body">
                                        
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nik</label>
                                                <input type="text" value="" id="nik" name="nik" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama</label>
                                                <input type="text" id="nama" value="" name="nama" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Jenis Kelamin</label>
                                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                <?php $level = $this->input->post('jenis_kelamin')? $this->input->post('jenis_kelamin') : $i->jenis_kelamin?>
                                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                                    <option value="1" <?= $level ==1 ? "selected" : null?>>Laki-laki</option>
                                                    <option value="2" <?= $level ==2 ? "selected" : null?>>Perempuan</option>
                                                </select>
                                             </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Tempat Lahir</label>
                                                <input type="text" id="tempat_lahir" value="" name="tempat_lahir" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Tanggal Lahir</label>
                                                <input  type="date" id="tanggal_lahir" name="tanggal_lahir" value="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Status Keluarga</label>
                                                <select class="form-control" id="status_keluarga" name="status_keluarga">
                                                <?php $level = $this->input->post('status_keluarga')? $this->input->post('status_keluarga') : $i->status_keluarga?>
                                                    <option value="">-- Pilih Status Keluarga --</option>
                                                    <option value="1" <?= $level ==1 ? "selected" : null?>>Kawin</option>
                                                    <option value="2" <?= $level ==2 ? "selected" : null?>>Janda/Duda</option>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Jumlah Tanggungan</label>
                                                <input  type="text" id="jumlah_tanggungan" value="" name="jumlah_tanggungan" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Status Tempat Tinggal</label>
                                                <select class="form-control" id="status_tempat_tinggal" name="status_tempat_tinggal">
                                                <?php $level = $this->input->post('status_tempat_tinggal')? $this->input->post('status_tempat_tinggal') : $i->status_tmp_tinggal?>
                                                    <option value="">-- Pilih Status Keluarga --</option>
                                                    <option value="1" <?= $level ==1 ? "selected" : null?>>Rumah Sendiri</option>
                                                    <option value="2" <?= $level ==2 ? "selected" : null?>>Rumah Orang Tua</option>
                                                    <option value="3" <?= $level ==3 ? "selected" : null?>>Kontrak/Kos</option>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Lama Tinggal</label>
                                                <input  type="text" id="lama_tinggal" value="" name="lama_tinggal" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Desa</label>
                                                <select class="form-control" id="desa" name="desa">
                                                <?php $level = $this->input->post('desa')? $this->input->post('desa') : $i->id_desa?>
                                                    <option value="">-- Pilih Desa --</option>
                                                    <option value="1" <?= $level ==1 ? "selected" : null?>>Puhsarang</option>
                                                    <option value="2" <?= $level ==2 ? "selected" : null?>>Kedak</option>
                                                    <option value="3" <?= $level ==3 ? "selected" : null?>>Titik</option>
                                                    <option value="4" <?= $level ==4 ? "selected" : null?>>Selopanggung</option>
                                                    <option value="5" <?= $level ==5 ? "selected" : null?>>Puhrubuh</option>
                                                    <option value="6" <?= $level ==6 ? "selected" : null?>>Semen</option>
                                                    <option value="7" <?= $level ==7 ? "selected" : null?>>Kanyoran</option>
                                                    <option value="8" <?= $level ==8 ? "selected" : null?>>Pagung</option>
                                                    <option value="9" <?= $level ==9 ? "selected" : null?>>Bobang</option>
                                                    <option value="10" <?= $level ==10 ? "selected" : null?>>Sidomulyo</option>
                                                    <option value="11" <?= $level ==11 ? "selected" : null?>>Joho</option>
                                                    <option value="12" <?= $level ==12 ? "selected" : null?>>Bulu</option>
                                                </select>
                                             </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Alamat</label>
                                                <input  type="text" id="alamat" name="alamat" value="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Kode POS</label>
                                                <input  type="text" id="kode_pos" name="kode_pos" value="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Telepon</label>
                                                <input  type="text" id="telepon" name="telepon" value="" class="form-control">
                                            </div>
                                        </div>
                            </div>
                            <div class="card">
                                    <h5 class="card-header">Pekerjaan</h5>
                                    <div class="card-body">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama Pekerjaan</label>
                                                <input  type="text" id="pekerjaan" name="pekerjaan" value="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Jabatan</label>
                                                <input  type="text" id="jabatan" name="jabatan" value="" class="form-control">
                                            </div>
                                        </div>
                                    
                            <div>    
                            <div class="card">
                                    <h5 class="card-header">Kelompok</h5>
                                    <div class="card-body">
                                            <div class="form-group">
                                                
                                                <input  type="text" id="id_kelompok" name="id_kelompok" readonly value="<?=$id_kel?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Posisi</label>
                                                <input  type="text" id="posisi" name="posisi" value="" class="form-control">
                                            </div>
                                        </div>
                                    
                            <div>    
                            <div class="card">
                                    <h5 class="card-header">Data Akun</h5>
                                    <div class="card-body">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Username</label>
                                                <input  type="text" id="username" name="username" value="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Email</label>
                                                <input  type="text" id="email" name="email" value="" class="form-control">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-space btn-warning"><i class="fas fa-pen-square"></i> Simpan</button> 
                                    </div>
                                    
                            <div>          
                                
                             </form>
                                    <?php }else{?>
                                        <form id="tambah_anggota_1" action="<?= site_url('nasabah/tambah_anggota_kel_1')?>" method="POST" name="edit_nasabah" >
                    
                                        <br/>
                                        <div class="card">
                                                <h5 class="card-header">Profil Nasabah</h5>
                                                
                                        <div class="card">
                                                <h5 class="card-header">Data Kelompok</h5>
                                                <div class="card-body">
                                                    
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Nik</label>
                                                            <input type="text" id="nik" name="nik" value="<?=$nik?>" readonly class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Nama Lengkap</label>
                                                            <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?=$this->fungsi->user_login_n()->nama_lengkap?>" readonly class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Id Kelompok</label>
                                                            <input type="text" id="id_kelompok" name="id_kelompok" value="<?=$this->fungsi->user_login_n()->id_kelompok?>" readonly class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Posisi</label>
                                                            <input type="text" id="posisi" name="posisi" class="form-control">
                                                        </div>
                                                        <button type="submit" class="btn btn-space btn-warning"><i class="fas fa-pen-square"></i> Simpan</button> 
                                    </form>          
                                    <?php }?>
                                    

                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                
                    <!-- ============================================================== -->
                    <!-- end inventory turnover -->
                    <!-- ============================================================== -->
                </div>
