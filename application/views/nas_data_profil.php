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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profil Nasabah</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
                                        </ol>
                                    </nav>
                                </div>
                            <br/>
                            
                            
                            
                            <div class="card">
                            <h5 class="d-inline card-header">Data Profil</h5>
                            <div class="ml-1 mt-1">
                            <a type="button" href="<?= site_url('nasabah/profil_nas')?>" class="d-inline btn btn-space btn-warning"><i class="fas fa-edit"></i> Perbarui Data</a>
                            </div>
                            <table class="table table-hover table-bordered">
                            <?php foreach ($data as $i){?>
                                <tbody>
                                    <tr>
                                    <th>NIK</th>
                                    <td><?=$i->nik?></td>
                                    </tr>
                                    <tr>
                                    <th>Nama Lengkap</th>
                                    <td><?=$i->nama_lengkap?></td>
                                    </tr>
                                    <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><?=$i->jenis_kelaminnya?></td>
                                    </tr>
                                    <tr>
                                    <th>Tempat Lahir</th>
                                    <td><?=$i->tempat_lahir?></td>
                                    </tr>
                                    <tr>
                                    <th>Tanggal Lahir</th>
                                    <td><?=$i->tanggal_lahir?></td>
                                    </tr>
                                    <tr>
                                    <th>Status Keluarga</th>
                                    <td><?=$i->status_keluarganya?></td>
                                    </tr>
                                    <tr>
                                    <th>Jumlah Tanggungan</th>
                                    <td><?=$i->jumlah_tanggungan?></td>
                                    </tr>
                                    <tr>
                                    <th>Status Tempat Tinggal</th>
                                    <td><?=$i->status_tempat_tinggal?></td>
                                    </tr>
                                    <tr>
                                    <th>Lama Tinggal</th>
                                    <td><?=$i->lama_tinggal?></td>
                                    </tr>
                                    <tr>
                                    <tr>
                                    <th>Alamat</th>
                                    <td><?=$i->alamat?></td>
                                    </tr>
                                    <tr>
                                    <th>Desa</th>
                                    <td><?=$i->nama_desa?></td>
                                    </tr>
                                    <th>Kode Pos</th>
                                    <td><?=$i->kode_pos?></td>
                                    </tr>
                                    <tr>
                                    <th>Telepon</th>
                                    <td><?=$i->telepon?></td>
                                    </tr>
                                    <tr>
                                    <th>Email</th>
                                    <td><?=$i->email?></td>
                                    </tr>
                                    <tr>
                                    <th>Pekerjaan</th>
                                    <td><?=$i->pekerjaan?></td>
                                    </tr>
                                    <tr>
                                    <th>Jabatan</th>
                                    <td><?=$i->jabatan?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                                </table>
                            
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
