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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Riwayat Pengajuan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
                                        </ol>
                                    </nav>
                                </div>
                                <br/>
                            <div class="card">
                                    <h5 class="card-header"> Daftar Angsuran</h5>
                                   
                            <?php if($this->session->flashdata('edit_berhasil')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Mengubah Posisi Anggota
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('edit_gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Mengubah Posisi Anggota
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('hapus_gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Menghapus Anggota
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('berhasil_hapus')) : ?>
                                        <div class="alert alert-success" role="alert">
                                                    Berhasil Menghapus Anggota
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal_hapus1')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Menghapus Anggota, Anggota masih memiliki pengajuan
                                                </div>
                                    <?php endif; ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
												<th>No</th>
                                                <th>Id Pengajuan</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Jumlah Pengajuan</th>
                                                <th>Jenis Pengajuan</th>
                                                <th>Progress Terakhir</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
											$x = 1;
											foreach ($pengajuan as $k){?>
                                            <tr>
                                                <td><?=$x?></td>
                                                <td><?=$k->id_pengajuan?></td>
                                                <td><?=date('d F Y',strtotime($k->tanggal_pengajuan))?></td>
                                                <td><?=rupiah($k->besaran_pengajuan)?></td>
                                                <td><?=($k->id_jns_pengajuan == "1" ? "Peminjaman" : "permodalan")?></td>
                                                <td><?=$k->progress?></td>
                                                                                            
                                            </tr>
                                            <?php $x++; }?>
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
