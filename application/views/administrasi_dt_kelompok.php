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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Kelompok</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                            <h5 class="card-header">Daftar Kelompok</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Kelompok</th>
                                                <th>Nama</th>
                                                <th>Tanggal Berdiri</th>
                                                <th>Desa</th>
                                                <th>Detail Anggota</th>
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php $x=1; foreach ($kelompok as $i){?>
                                            <tr>
                                                <td><?=$x?></td>
                                                <td><?=$i->id_kelompok?></td>
                                                <td><?=$i->nama_kelompok?></td>
                                                <td><?=$i->tanggal_berdiri?></td>
                                                <td><?=$i->nama_desa?></td>
                                                <td>
                                                <button id="detail_anggota_kel" name="detail_anggota_kel"  data-id_kel = "<?=$i->id_kelompok?>" type="button" class="btn btn-space btn-warning" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search-plus"></i></button></td>
                                               
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
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    
                                    
                                    <div class="modal-body">
                                    
                                    <div class="card">
                                    <h5 class="card-header">Daftar Anggota Kelompok</h5>
                                    <div class="card-body">
                                        <div class="table-responsive ">
                                            <table class=" table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>NIK</th>
                                                        <th>Nama</th>
                                                        <th>Posisi</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody  id="data_anggota">
                                                    
                                                
                                                </tbody>
                                                </tbody>
                                       
                                    </table>
                                    
                                </div>
                            </div>
                                </div>
                                    
                                    
                                    </div>
                                   
                                </div>
                                </div>