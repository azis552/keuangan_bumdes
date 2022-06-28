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
											Berhasil Menambahkan Akun Rekening
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Menambahkan Akun Rekening
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('edit_berhasil')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Mengubah Akun Rekening
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('edit_gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Mengubah Akun Rekening
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('berhasil_hapus')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menghapus Akun Rekening
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal_hapus')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil  Menghapus Akun Rekening
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('dobel_akun')) :?>
                                        <div class="alert alert-danger" role="alert">
                                                    Akun yang ada masukkan sudah ada !
                                                </div>
                                    <?php endif; ?>
                            <!-- Button trigger modal -->
                            <div class="ml-2 mt-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah Akun Rekening
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
                                    <form action="<?= site_url('bendahara_pegawai/tambah_rekening')?>" method="POST" id="tambah_rekening" name="tambah_rekening" >
                                    <div class="modal-body">
                                    
                                        <div class="form-group">
                                            <label for="">No Akun</label>
                                            <input type="text" id="no_akun" name="no_akun" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keterangan</label>
                                            <input type="text" id="keterangan" name="keterangan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tipe</label>
                                            <input type="text" id="tipe_akun" name="tipe_akun" class="form-control">
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
                                                <th>No Akun</th>
                                                <th>Keterangan</th>
                                                <th>Tipe</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php $x=1; foreach ($akun as $i){?>
                                            <tr>
                                                <td><?=$x?></td>
                                                <td><?=$i->id_akun?></td>
                                                <td><?=$i->nama_akun?></td>
                                                <td><?=$i->tipe_akun?></td>
                                                <td>
                                                    <div class="row">
                                                    <div class="col-1">
                                                
                                                        <button type="submit" id="edit_akun_rekening" data-toggle="modal" data-target="#edit_ang_kel" class="btn btn-warning btn-sm"
                                                        data-id_akun = "<?= $i->id_akun ?>"
                                                        data-nama = "<?= $i->nama_akun?>"
                                                        data-tipe = "<?= $i->tipe_akun ?>"
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
                                                        <form id="tambah_rekening" action="<?= site_url('bendahara_pegawai/edit_akun_rekening')?>" method="POST"  >
                                                        <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="">No Akun</label>
                                                            <input type="text" id="edit_no_akun" readonly name="no_akun" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Keterangan</label>
                                                            <input type="text" id="edit_keterangan" name="keterangan" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Tipe</label>
                                                            <input type="text" id="edit_tipe_akun" name="tipe_akun" class="form-control">
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
                                                        <input type="hidden" value="<?= $i->id_akun ?>" name="no_akun">
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
