<div class="dashboard-finance">
    <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
					<!-- ============================================================== -->
                    <!-- Modal -->
                   
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2"><?=ucfirst($this->fungsi->user_login()->jabatan)?></h3>
                                <p class="pageheader-text"><?=ucfirst($this->fungsi->user_login()->jabatan)?></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Nasabah</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                    <?php if($this->session->flashdata('ada_tagihan')) : ?>
										<div class="alert alert-danger" role="alert">
											Masih ada tagihan dibulan sebelumnya !
										</div>
							<?php endif; ?>
                    <div class="card-body border-top">
                        <h4>Pengembalian Dana</h4>
                        <form action="<?= site_url('administrasi_pegawai/tampil_tagihan')?>" id="menu_pengembalian" method="post">
                        <div class="row">
                            <div class="col-sm">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                    <label for="total">Nik Nasabah: </label>
                            </div>
                            </div>
                            <div class="col-sm">
                            <input name="nik_ang" id="nik_ang" value="<?= $this->input->post('nik_ang') != null ? $this->input->post('nik_ang') : null?>"  placeholder="masukkan nik" type="text" class="form-control" />
                            </div>
                            <label for="startDate">Date : </label>
                            <input name="startDate" id="startDate" value="<?= $this->input->post('startDate') != null ? $this->input->post('startDate') : null?>" class=" date-picker ml-3" />
                            <div class="col-sm">
                            <button type="submit" class="btn btn-warning ">tampil</button>
                            </div>
                           
                        </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    
                    <div class="card-body border-top">
                        <h4>Data Nasabah</h4>
                        <?php if(@$data_nas != null){?>  
                        <?php foreach($data_nas as $i){?>
                            <div class="input-group">
                            <label for="total">Nik Nasabah</label>  
                            </div>
                            <div class="input-group">

                            <input name="nik_ang" id="nik_ang" readonly value="<?=$i->nik?>" placeholder="masukkan nik" type="text" class="form-control" />         
                            </div>
                            <div class="input-group">
                            <label for="startDate">Nama Nasabah </label>
                            </div>
                            <div class="input-group">
                            <input name="startDate" id="startDate" readonly  value="<?=$i->nama_lengkap?>" class="form-control" />
                            </div>
                            
                           
                            <?php }?>
                            <?php }?>
                        </div>
                        <div class="card-body border-top">  
                        <?php if(@$pencairan != null){?>  
                            <form action="<?= site_url('administrasi_pegawai/pengembalian_pinjaman')?>" id="menu_pengembalian" method="post"> 
                        <?php if(@$pengembalian_pokok != null){?>      
                            
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">Pengembalian Pokok</h4>
                                <?php foreach ($pengembalian_pokok as $i){?>
                            <div class="row">
                                <div class="form-inline ml-3">
                                        <input type="hidden" name="nik" value="<?= $i->nik?> "> 
                                        <input type="hidden" name="id_pengembaliannya" value="<?= $i->id_pengembalian?> "> 
                                        <input type="hidden" id="id_angsuran" value="<?= $i->id_angsuran != null ? $i->id_angsuran : null ?>" readonly name="id_angsuran[]" class="form-control"> 
                                        <input type="hidden" id="id_jns" value="<?= $i->jenis_pengajuan != null ? $i->jenis_pengajuan : null ?>" readonly name="id_jenis" class="form-control"> 
                                        <input type="text" id="id_pengajuan" value="<?= $i->id_pengajuan != null ? $i->id_pengajuan : null ?>" readonly name="id_pengajuan_inti" class="form-control"> 
                                        <input type="text" id="keterangan" value="<?= $i->keterangan != null ? $i->keterangan : null ?>"  readonly name="keterangan[]" class="form-control">
                                        <input type="text" id="tanggal_tagihan" value="<?= $i->tanggal_tagihan != null ? $i->tanggal_tagihan : null ?>" readonly name="tanggal_tagihan[]" class="form-control">
                                        <input type="text" id="jumlah_pokok" readonly value="<?= $i->jumlah != null ? $i->jumlah : null?>" name="jumlah[]" class="form-control">
                                        <input type="hidden" id="jumlah_pokok2" readonly value="<?= $i->jumlah != null ? $i->jumlah : null?>" name="jumlah[]" class="form-control">
                                        <input type="number" id="bayar_pokok" value="0" name="bayar[]" class="form-control">
                                        <input type="hidden" id="bayar_pokok2" value="0" name="bayar[]" class="form-control">
                                        <input type="hidden" id="ke" name="ke[]">
                                        
                                     </div>
                            </div>
                                <?php }?>
                                <?php }?>
                            <br>
                            <?php if(@$pengembalian_jasa != null){?>
                            <h4 class="alert-heading">Pengembalian Jasa</h4>
                            <?php foreach ($pengembalian_jasa as $i){?>
                            <div class="row">   
                                <div class="form-inline ml-3">
                                
                                <input type="hidden" id="id_angsuran" value="<?= $i->id_angsuran != null ? $i->id_angsuran : null ?>" readonly name="id_angsuran[]" class="form-control"> 
                                <input type="hidden" id="id_jns" value="<?= $i->jenis_pengajuan != null ? $i->jenis_pengajuan : null ?>" readonly name="id_jenis" class="form-control"> 
                                        <input type="text" id="id_pengajuan" value="<?= $i->id_pengajuan != null ? $i->id_pengajuan : null ?>" readonly name="id_pengajuan_inti" class="form-control"> 
                                        <input type="text" id="keterangan" value="<?= $i->keterangan != null ? $i->keterangan : null ?>"  readonly name="keterangan[]" class="form-control">
                                        <input type="text" id="tanggal_tagihan" value="<?= $i->tanggal_tagihan != null ? $i->tanggal_tagihan : null ?>" readonly name="tanggal_tagihan[]" class="form-control">
                                        <input type="text" id="jumlah_jasa" readonly value="<?= $i->jumlah != null ? $i->jumlah : null?>" name="jumlah[]" class="form-control">
                                        <input type="hidden" id="jumlah_jasa2" readonly value="<?= $i->jumlah != null ? $i->jumlah : null?>" name="jumlah[]" class="form-control">
                                        <input type="number" id="bayar_jasa" value="0" name="bayar[]" class="form-control">
                                        <input type="hidden" id="bayar_jasa2" value="0" name="bayar[]" class="form-control">
                                        <input type="hidden" id="ke" name="ke[]">
                                     </div>
                                
                            </div>
                            <?php }?>
                            <?php }?>
                            <br>
                            <?php if(@$pengembalian_bh != null){?>
                            <h4 class="alert-heading">Pengembalian Bagi Hasil</h4>
                            <?php foreach ($pengembalian_bh as $i){?>
                            <div class="row">   
                                <div class="form-inline ml-3">
                                <input type="hidden" id="id_jns" value="<?= $i->jenis_pengajuan != null ? $i->jenis_pengajuan : null ?>" readonly name="id_jenis" class="form-control"> 
                                <input type="hidden" id="id_angsuran" value="<?= $i->id_angsuran ?>"  readonly name="id_angsuran[]" class="form-control"> 
                                <input type="hidden" id="id_pengajuan" value="<?= $i->id_pengajuan != null ? $i->id_pengajuan : null ?>" readonly name="id_pengajuan_inti" class="form-control"> 
                                        <input type="hidden" id="keterangan" value="<?= $i->keterangan != null ? $i->keterangan : null ?>"  readonly name="keterangan[]" class="form-control">
                                        <input type="text" id="tanggal_tagihan" value="<?= $i->tanggal_tagihan != null ? $i->tanggal_tagihan : null ?>" readonly name="tanggal_tagihan[]" class="form-control">
                                        <input type="text" id="persen" readonly value="<?= $i->jumlah != null ? $i->jumlah : null?>" name="persen[]" class="form-control">
                                        <input type="number" id="keuntungan" value="0"  name="keuntungan[]" class="form-control">
                                        <input type="number" id="jumlah_bh" readonly value="0"  name="jumlah[]" class="form-control">
                                        <input type="hidden" id="jumlah_bh2" readonly value="0"  name="jumlah[]" class="form-control">
                                        <input type="number" id="bayar_bh" value="0"  name="bayar[]" class="form-control">
                                        <input type="hidden" id="bayar_bh2" value="0"  name="bayar[]" class="form-control">
                                        <input type="hidden" id="ke" name="ke[]">
                                       
                                        

                                     </div>
                                
                            </div>
                            <?php }?>
                            <?php }?>
                            <hr>
                            <div class="row">
                                <div class="col-sm"> 
                                
                                </div>
                                <div class="col-sm"> 
                                    <div class="d-flex flex-row-reverse bd-highlight">
                                    <label for="total">Total: </label>
                                    
                                    </div>
                                    <div class="d-flex flex-row-reverse bd-highlight">
                                    <label for="total">Bayar: </label>
                                    
                                    </div>
                                    <div class="d-flex flex-row-reverse bd-highlight">
                                    <label for="total">Kembalian: </label>
                                    
                                    </div>
                                </div>
                                <div class="col-sm"> 
                                
                                     <div class="form-inline">
                                    
                                    <input type="int" id="id_tagihan_total" value="0"   readonly name="total" class="form-control">
                                    </div>
                                    <div class="form-inline">
                                    
                                    <input type="int" id="id_bayar_total" value="0"   name="id_pengajuan" class="form-control">
                                    </div>
                                    <div class="form-inline">
                                    
                                    <input type="int" id="kembalian" value="0"  readonly name="kembalian" class="form-control">
                                    </div>
                                    <div class="form-inline">
                                    
                                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                                    </div>
                                    </form>
                            
                                
                                
                            <?php }if(@$tagihan < 1){?>    
                                <?php if(@$pencairan == null){?>  
                                <h4>Masukkan Nik Nasabah !</h4>  
                                <?php }else {?>
                                  <h4>Tidak ada tagihan di bulan ini <?= $this->input->post('startDate')?>  !</h4> 
                            <?php }?>
                            <?php }?>        
                                    
                                    
                                </div>
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
        
                