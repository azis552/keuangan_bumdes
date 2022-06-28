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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pengajuan Penangguhan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header mb-3">Pengajuan Penangguhan</h5>
					<?php if($this->session->flashdata('berhasil_pokok')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menambahkan Penangguhan Pengembalian Pokok
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal_pokok')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Menambahkan Penangguhan Pengembalian Pokok
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('berhasil_bh')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menambahkan Penangguhan Pengembalian Bagi Hasil
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal_bh')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Menambahkan Penangguhan Pengembalian Bagi Hasil
                                                </div>
                                    <?php endif; ?>
                    
                            <div class="pills-regular">
                                <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                                
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="home" aria-selected="true">Pengembalian Pokok</a>
                                    </li>
                                    <?php if($jns_pengajuan == '1'){?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="profile" aria-selected="false">Pembayaran Jasa</a>
                                    </li>
                                    <?php }else if($jns_pengajuan == '2'){?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="contact" aria-selected="false">Pembayaran Bagi Hasil</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <?php if($cek_penangguhan_pokok < 1){?>
                                    <?php foreach($penangguhan_pokok as $i){?>
                                        <form id="penangguhan_pokok_form" enctype="multipart/form-data" action="<?= site_url('nasabah/penangguhan_pokok')?>" method="POST" name="form_penangguhan_pokok" >
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Nik</label>
                                                    <input type="text" id="nik" readonly name="nik" value="<?= $i->nik?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Nama Anggota</label>
                                                    <input type="text" id="nama" readonly name="nama" value="<?= $i->nama_lengkap?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">ID Angsuran</label>
                                                    <input type="text" id="id_angsuran" readonly name="id_angsuran" value="<?= $i->id_angsuran?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Tanggal Tagihan</label>
                                                    
                                                    <input type="text" id="tgl_tagihan" value="<?=date('Y-m-d',strtotime($i->tgl_tagihan))?>" readonly name="tgl_tagihan" class="form-control">
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Jumlah Tagihan</label>
                                                    <input type="text" id="nama_edit" value="<?=rupiah($i->jumlah)?>" readonly name="jumlah_tagihan" class="form-control">
                                                </div>
                                                <?php }?>
                                                <div class="form-group">
                                                <label for="input-select">Status Keluarga</label>
                                                <select class="form-control" id="alasan" name="alasan">
                                                <?php $level = $this->input->post('alasan')? $this->input->post('alasan') : null?>
                                                    <option value="">-- Pilih Alasan --</option>
                                                    <option value="usaha gagal" <?= $level ==1 ? "selected" : null?>>Usaha Gagal</option>
                                                    <option value="bencana alam" <?= $level ==2 ? "selected" : null?>>Bencana Alam</option>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Deskripsi Alamat</label>
                                                    <input type="text" id="desk_alasan" name="desk_alasan" class="form-control">
                                                </div>
                                                <label for="inputText3" class="col-form-label">Berkas Bukti</label>
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" name="berkas" onchange="ValidateSingleInput(this);" class="custom-file-input" id="inputGroupFile02"/>
                                                        <label class="custom-file-label" name="berkas" for="inputGroupFile02">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Usulan Tanggal Pembayaran</label>
                                                    <div>
                                                    <input name="startDate" id="startDate" placeholder="Masukkan Usulan Tanggal" class="date-picker form-control tgl_usulan" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                        </form>
                                    <?php }else{?>
                                        <div>
                                            <?php foreach($data_penangguhan_pokok as $i){?>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" class="form-control">Status Penangguhan</span>
                                                        </div>
                                                        <input type="text" readonly class="form-control"  id="keterangan1" value="<?=$i->status?>">  
                                                        </div>  
                                                    <?php }?>
                                                  
                                           
                                        </div>
                                    <?php } ?>


                                              
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque. </p>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        
                                    <?php if($cek_penangguhan_bh < 1){?>
                                    <?php foreach($penangguhan_bh as $i){?>
                                        <form id="penangguhan_pokok_form" enctype="multipart/form-data" action="<?= site_url('nasabah/penangguhan_bh')?>" method="POST" name="form_penangguhan_pokok" >
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Nik</label>
                                                    <input type="text" id="nik" readonly name="nik" value="<?= $i->nik?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Nama Anggota</label>
                                                    <input type="text" id="nama" readonly name="nama" value="<?= $i->nama_lengkap?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">ID Angsuran</label>
                                                    <input type="text" id="id_angsuran" readonly name="id_angsuran" value="<?= $i->id_angsuran?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Tanggal Tagihan</label>
                                                    
                                                    <input type="text" id="tgl_tagihan" value="<?=date('Y-m-d',strtotime($i->tgl_tagihan))?>" readonly name="tgl_tagihan" class="form-control">
                                                    
                                                </div>
                                                
                                                
                                                <?php }?>
                                                <div class="form-group">
                                                <label for="input-select">Status Keluarga</label>
                                                <select class="form-control" id="alasan" name="alasan">
                                                <?php $level = $this->input->post('alasan')? $this->input->post('alasan') : null?>
                                                    <option value="">-- Pilih Alasan --</option>
                                                    <option value="usaha gagal" <?= $level ==1 ? "selected" : null?>>Usaha Gagal</option>
                                                    <option value="bencana alam" <?= $level ==2 ? "selected" : null?>>Bencana Alam</option>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Deskripsi Alamat</label>
                                                    <input type="text" id="desk_alasan" name="desk_alasan" class="form-control">
                                                </div>
                                                <label for="inputText3" class="col-form-label">Berkas Bukti</label>
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" name="berkas" onchange="ValidateSingleInput(this);" class="custom-file-input" id="inputGroupFile02"/>
                                                        <label class="custom-file-label" name="berkas" for="inputGroupFile02">Choose file</label>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                        </form>
                                    <?php }else{?>
                                        <div>
                                            <?php foreach($data_penangguhan_bh as $i){?>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" class="form-control">Status Penangguhan</span>
                                                        </div>
                                                        <input type="text" readonly class="form-control"  id="keterangan1" value="<?=$i->status?>">  
                                                        </div>  
                                                    <?php }?>
                                                  
                                           
                                        </div>
                                    <?php } ?>




                                    </div>
                                    </div>
                                </div>
                            </div>
                        
					

                       
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
                    <!-- ============================================================== -->
                    <!-- end inventory turnover -->
                    <!-- ============================================================== -->
                </div>
