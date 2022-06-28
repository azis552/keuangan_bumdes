<div class="dashboard-finance">
    <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
					<!-- ============================================================== -->
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2"><?=ucfirst($this->fungsi->user_login()->jabatan)?></h3>
                                <p class="pageheader-text"><?=ucfirst($this->fungsi->user_login()->jabatan)?></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data penangguhan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                            <h5 class="card-header">Daftar Penangguhan</h5>
                            <?php if($this->session->flashdata('simpan')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Memasukkan Penangguhan
										</div>
							<?php endif; ?>
							<?php if($this->session->flashdata('gagal')) : ?>
								<div class="alert alert-danger" role="alert">
                                            Tidak Berhasil Memasukkan Penangguhan
										</div>
							<?php endif; ?>
                            <div >
                            <button style="float: right;margin-bottom :4px;margin-right:21px;margin-top:3px;" type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-plus-square"></i> Tambah
                            </button>
							
							<div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Penangguhan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm">
                                    <form id="tam_penangguhan" enctype="multipart/form-data" action="<?= site_url('administrasi_pegawai/tambah_penangguhan') ?>" method="post">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">ID Penangguhan</label>
                                            <input type="text" id="id_penangguhan" value="<?= $id_penangguhan?>"  readonly name="id_penangguhan" class="form-control">
                                        </div>
                                        <label for="inputText3" class="col-form-label">Identitas Nasabah</label>
                                        <hr>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Masukkan Nik</label>
                                            <input type="text" id="nik"  name="nik" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Nama</label>
                                            <input type="text" id="nama" name="nama" class="form-control" onfocus="this.oldvalue=this.value;this.blur();" >
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">ID Pengajuan</label>
                                            <input type="text" id="id_pengajuan"  name="id_pengajuan" class="form-control" onfocus="this.oldvalue=this.value;this.blur();" >
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Tanggal Tagihan Terakhir</label>
                                            <input type="text" id="tgl_tagihan"  name="tgl_tagihan" class="form-control" onfocus="this.oldvalue=this.value;this.blur();" >
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Jumlah Tagihan Terakhir</label>
                                            <input type="text" id="jml_tagihan"  name="jml_tagihan" class="form-control" onfocus="this.oldvalue=this.value;this.blur();" >
                                        </div>
                                
                                    
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-group">
                                                <label for="input-select">Alasan</label>
                                                <select class="form-control" id="alasan" name="alasan">
                                                <?php $level = $this->input->post('alasan')? $this->input->post('alasan') : null?>
                                                    <option value="">-- Pilih Alasan --</option>
                                                    <option value="1" <?= $level ==1 ? "selected" : null?>>Usaha Gagal</option>
                                                    <option value="2" <?= $level ==2 ? "selected" : null?>>Bencana Alam</option>
                                                    <option value="3" <?= $level ==3 ? "selected" : null?>>Kematian</option>
                                                </select>
                                             </div>

                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Deskripsi Alasan</label>
                                            <textarea type="text" id="desk_alasan"  name="desk_alasan" class="form-control" cols="15" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Lama Penangguhan</label>
                                            <input type="number" id="bln" name="bln" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label for="input-select">Tindakan</label>
                                                <select class="form-control" id="tindakan" name="tindakan">
                                                <?php $level = $this->input->post('tindakan')? $this->input->post('tindakan') : null?>
                                                    <option value="">-- Pilih Tindakan --</option>
                                                    <option value="1" <?= $level ==1 ? "selected" : null?>>Penangguhan pengembalian pokok dan penangguhan bagi hasil atau jasa</option>
                                                    <option value="2" <?= $level ==2 ? "selected" : null?>>Penangguhan pengembalian pokok dan pengahapusan bagi hasil atau jasa</option>
                    
                                                </select>
                                             </div>
                                        <label for="inputText3" class="col-form-label">berkas</label>
                                        <div class="input-group ">
                                        
                                        <div class="custom-file">
                                            <input type="file" name="berkas" class="custom-file-input" id="inputGroupFile02"  onchange="ValidateSingleInput(this);" />
                                            <label class="custom-file-label" name="berkas" for="inputGroupFile02">Choose file</label>
                                        </div>
                                        <span>Berkas berisi: Surat berharga scan asli dan surat keterangan penyerahan</span>
                                    </div>
                                    </div>
                                </div>
                            
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" >Simpan</button>                                
                                    </div>
                                </div>
                                </form>
                            </div>
                            </div>
                            </div>
                            <div class="card-body">
                           
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nik</th>
                                                <th>Nama</th>
                                                <th>Id Pengajuan</th>
                                                <th>Jumlah Penangguhan</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php $x=1; foreach ($daf_penangguhan as $i){?>
                                            <tr>
                                                <th><?=$x?></th>
                                                <th><?=$i->niknya?></th>
                                                <th><?=$i->nama_lengkap?></th>
                                                <th><?=$i->id_peng?></th>
                                                <th><?=$i->jumlah_penangguhan?></th>
                                            </tr>
                                        <?php $x++; }?>
                                        </tbody>
                                       
                                    </table>
                                    
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
