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
                            <h5 class="card-header">Daftar Nasabah</h5>
                            <?php if($this->session->flashdata('simpan')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menambahkan Periode
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Menambahkan Periode
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('edit_berhasil')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Mengubah Periode
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('edit_gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Mengubah Periode
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('berhasil_hapus_dump')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menghapus Periode
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal_hapus_dump')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil  Menghapus Periode
                                                </div>
                                    <?php endif; ?>
                            <!-- Button trigger modal -->
                            <div class="ml-2 mt-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah Periode
                            </button>
                            </div>
                               
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Rekening</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= site_url('bendahara_pegawai/tambah_periode')?>" method="POST" id="tambah_periode" name="tambah_periode" >
                                    <div class="modal-body">
                                    
                                        <div class="form-group">
                                            <label for="">ID Periode</label>
                                            <input type="text" id="id_per" readonly value="<?= $id_periode?>" name="id_per" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Periode</label>
                                            <input type="date" required id="tgl_per" name="tgl_per" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                    
                                    </div>
                                    </form>
                                </div>
                                </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Id Periode</th>
                                                <th>Periode</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php $x=1; foreach ($periode as $i){?>
                                            <tr>
                                                <td><?=$x?></td>
                                                <td><?=$i->id_periode?></td>
                                                <td><?=$i->tanggal_periode?></td>
                                                
                                                <td>
                                                    <div class="row">
                                                    <div class="col-1">
                                                
                                                        <button type="submit" id="edit_periode" data-toggle="modal" data-target="#edit_ang_kel" class="btn btn-warning btn-sm"
                                                        data-id_akun = "<?= $i->id_periode ?>"
                                                        data-periode = "<?= $i->tanggal_periode?>"
                                                    
                                                        ><i class="fas fa-edit"></i></button>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="edit_ang_kel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form id="tambah_rekening" action="<?= site_url('bendahara_pegawai/update_periode')?>" method="POST"  >
                                                        <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="">ID Periode</label>
                                                            <input type="text" id="edit_id_per" readonly  name="id_per" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Tanggal Periode</label>
                                                            <input type="date" required id="edit_tgl_per" name="tgl_per" class="form-control">
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-2 ml-4">
                                                    <form id="hapus_akun_rek"  action="<?= site_url('bendahara_pegawai/hapus_akun_rekening')?>" method="POST"  >
                                                        <input type="hidden" value="<?= $i->id_periode ?>" name="id_per">
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                    </div>                                   
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
