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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Buku Besar</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                   
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
                            
                        <div class="card">
                            <h5 class="card-header">Buku Besar</h5>
                            <div class="card-body border-top">
                        
                            <form action="<?= site_url('bendahara_pegawai/buku_besar')?>" id="menu_pengembalian" method="post">
                            <div class="row">
                                <div class="col-sm">
                                <div class="form-group">
                                                <label for="input-select">No Akun</label>
                                                <select class="form-control" id="id_akun"  name="id_akun">
                                                    
                                                    <option value="">-- Pilih Akun --</option>
                                                    <?php foreach ($no_akun as $j){?>
                                                    <option value="<?=$j->id_akun?>"><?=$j->id_akun?> | <?=$j->nama_akun?></option>
                                                    <?php }?>
                                                </select>
                                             </div>
                                </div>
                                <div class="col-sm">
                                 <div class="form-group">
                                                <label for="input-select">Periode</label>
                                                <select class="form-control" id="id_periode"  name="id_periode">
                                                    <option value="">-- Pilih Periode--</option>
                                                    <?php foreach ($periode as $i){?>
                                                    <option value="<?=$i->id_periode?>"><?=$i->id_periode?> | <?=$i->tanggal_periode?></option>
                                                    <?php }?>
                                                </select>
                                </div>
                                </div>
                                
                                <div class="col-sm">
                                <button type="submit" class="btn btn-warning ">tampil</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        </div>
                        <?php if(@$buku_besar != null){?>
                        <div class="card">
                            <div class="row ml-2 mt-2">
                            <div class="col-md-2">
                            <h4>Akun :  <?=$this->input->post('id_akun')?></h4>
                            </div class="col-md-2">
                            <h4>Periode :  <?=$this->input->post('id_periode')?></h4>
                            </div>
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
                                        <?php $x=1; foreach ($buku_besar as $i){?> 
                                            <tr>
                                                <th><?= $x?></th>
                                                <td><?= $i->no_akun?></td>
                                                <td><?= $i->keterangan?></td>
                                                <td><?= rupiah($i->posisi == "Debit"? $i->jumlah: "0" ) ?></td>
                                                <td><?= rupiah($i->posisi == "Kredit" ? $i->jumlah : "0" ) ?></td>
                                               
                                               
                                            </tr>
                                            <?php $x++; }?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        <div>
                        <?php }?>
                    
                    
					
                        
                       
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
