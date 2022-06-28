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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Nasabah</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                            <h5 class="card-header">Daftar Pengajuan</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nik</th>
                                                <th>Nama</th>
                                                <th>Jenis Pengajuan</th>
                                                <th>ID Pengajuan</th>
                                                <th>ID Berkas</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Download Berkas</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php $x=1; foreach ($pengajuan as $i){?>
                                            <tr>
                                                <td><?=$x?></td>
                                                <td><?=$i->nik?></td>
                                                <td><?=$i->nama_lengkap?></td>
                                                <td><?=$i->nama_jns_pengajuan?></td>
                                                <td><?=$i->id_pengajuan?></td>
                                                <td><?=$i->id_berkas?></td>
                                                <td><?=date('d F Y',strtotime($i->tanggal_pengajuan))?></td>
                                                <td>
                                                <form action="<?= site_url('administrasi_pegawai/download_berkas')?>" method ="POST" >
                                                    <input type="hidden" name="nik" value="<?=$i->nik?>">
                                                    <button type="submit" class="btn btn-warning btn-sm" ><i class="fas fa-download"></i></button>
                                                
                                                </form>
                                                </td>
                                                
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
