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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Transaksi Keuangan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                          
                            <?php if($this->session->flashdata('simpan')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menambahkan Transaksi
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Menambahkan Transaksi
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('edit_berhasil')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Mengubah Transaksi
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('edit_gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Mengubah Transaksi
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('berhasil_hapus')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menghapus Transaksi
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal_hapus')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil  Menghapus Transaksi
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('tidak_balance')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Transaksi Belum Balance !
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('temp_kosong')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Transaksi Masih Kosong !
                                                </div>
                                    <?php endif; ?>
                            <!-- Button trigger modal -->
                            <div class="ml-2 mt-2">
                           
                            <button id="tambah_trans" type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                Tambah Transaksi
                            </button>
                            </div>
                               
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= site_url('bendahara_pegawai/tambah_trans')?>" method="POST" id="tambah_transaksi" name="tambah_transaksi" >
                                    <div class="modal-body">
                                    
                                        <div class="form-group">
                                            <label for="">ID Transaksi</label>
                                            <input type="text" id="id_trans" readonly value="<?= $id_trans?>" name="id_trans" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                                <label for="input-select">No Akun</label>
                                                <select class="form-control" id="id_akun"  name="id_akun">
                                                    
                                                    <option value="">-- Pilih Akun --</option>
                                                    <?php foreach ($no_akun as $j){?>
                                                    <option value="<?=$j->id_akun?>"><?=$j->id_akun?> | <?=$j->nama_akun?></option>
                                                    <?php }?>
                                                </select>
                                             </div>
                                           
                                            
                                        <div class="form-group">
                                            <label for="">Jumlah Besaran</label>
                                            <input type="text" id="jml_besaran" data-inputmask="'alias': 'currency'" style="text-align: right;" name="jml_besaran" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Debit & Kredit</label>
                                            <select class="form-control" id="dk"  name="dk">
                                                    <option value="">-- Pilih Keterangan --</option>
                                                    <option value="Debit">Debit</option>
                                                    <option value="Kredit">Kredit</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                    </div>
                               </div>
                                    </form>
                                </div>
                        <div class="card">
                            <h5 class="card-header">Detail Transaksi Keuangan</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Id Akun</th>
                                                <th>Keterangan</th>
                                                <th>Debit</th>
                                                <th>Kredit</th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php $x=1; foreach ($transaksi_belum as $i){?> 
                                            <tr>
                                                <th><?= $x?></th>
                                                <td><?= $i->id_akun?></td>
                                                <td><?= $i->nama_akun?></td>
                                                <td><?= rupiah($i->posisi == "Debit" ? $i->jumlah_transaksi : "0" ) ?></td>
                                                <td><?= rupiah($i->posisi == "Kredit" ? $i->jumlah_transaksi : "0" ) ?></td>
                                               
                                               
                                            </tr>
                                            <?php $x++; }?>
                                        </tbody>
                                       
                                    </table>
                        <div class="ml-2 mt-2">
                        <form action="<?= site_url('bendahara_pegawai/tambah_det_trans')?>" method="POST" id="tambah_det_transaksi" name="tambah_det_transaksi" >
                            <div class="form-group">
                                            <label for="">ID Detail Transaksi</label>
                                            <input type="text" id="id_trans" readonly value="<?= $id_det?>" name="id_trans" class="form-control" >
                            </div>
                            <div class="form-group">
                                                <label for="input-select">Periode</label>
                                                <select class="form-control" id="id_periode"  name="id_peridoe">
                                                    <option value="">-- Pilih Periode--</option>
                                                    <?php foreach ($periode as $i){?>
                                                    <option value="<?=$i->id_periode?>"><?=$i->id_periode?> | <?=$i->tanggal_periode?></option>
                                                    <?php }?>
                                                </select>
                            </div>
                            <div class="form-group">
                                            <label for="">Tanggal Transaksi</label>
                                            <input type="date" id="tgl_trans" name="tgl_trans" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success" >
                                Posting Buku Besar
                            </button>

                            </form>
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
