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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Laporan Keuangan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="card">
                            <h5 class="card-header">Laporan keuangan</h5>
                            <div class="card-body">
                            <form action="<?= site_url('direktur_pegawai/cetak_laporan_keuangan')?>" method="post">
                            <div class="row">
                                <div class="col-6">
                                <select name="laporan" class="form-control form-control">
                                    <option value="">Silahkan Pilih Laporan</option>
                                    <option value="1">Laporan Arus Kas</option>
                                    <option value="2">Laporan Neraca</option>
                                    <option value="3">Laporan Laba/Rugi</option>
                                </select>
                                </div>
                                <div class="col-3">
                                <div class="form-group">
                                                <select class="form-control" id="id_periode"  name="id_periode">
                                                    <option value="">-- Pilih Periode--</option>
                                                    <?php foreach ($periode as $i){?>
                                                    <option value="<?=$i->id_periode?>"><?=$i->id_periode?> | <?=$i->tanggal_periode?></option>
                                                    <?php }?>
                                                </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary btn">Download</button>
                                </div>
                            </div>
                            </form>
                           
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
