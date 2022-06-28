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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kelompok</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
                                        </ol>
                                    </nav>
                                </div>
                                <br/>
                                <?php if(@$cek == null){?>
                                <div class="card">
                                    <h5 class="card-header">Kelompok</h5>
                                    <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                    
                                    <?php foreach ($kelompok as $i){?>
                                        <tbody>
                                        <tr>
                                        <th>ID Kelompok</th>
                                        <td><?= $i->id_kelompok ?></td>
                                        </tr>
                                        <tr>
                                        <th>Nama Kelompok</th>
                                        <td><?= $i->nama_kelompok ?></td>
                                        </tr>
                                        <tr>
                                        <th>Tanggal Berdiri</th>
                                        <td><?= date('d F Y',strtotime($i->tanggal_berdiri)) ?></td>
                                        </tr>
                                        <?php } ?>
                                       
                                    </table>
                                </div>
                            </div>
                            <?php }?>
                            </div>
                            <div class="card">
                                    <h5 class="card-header"> Daftar Anggota Kelompok</h5>
                                    <div >
                                    
							<a style="float: right;margin-bottom :4px;margin-right:21px;margin-top:3px;" href="<?= site_url('nasabah/tambah_anggota_kel') ?>" type="button" class="btn btn-primary btn-sm "><i class="fas fa-plus-square"></i> Tambah</a>
                             
							<div>
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
                                                <th>Nik</th>
                                                <th>Nama</th>
                                                <th>Posisi</th>
                                               
                                                <th>Aksi</th>
                                             
                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
											$x = 1;
											foreach ($kelompok2 as $k){?>
                                            <tr>
                                                <td><?=$x?></td>
                                                <td><?=$k->nik?></td>
                                                <td><?=$k->nama?></td>
                                                <td><?=$k->posisi?></td>
                                              
                                                <td>
                                                    <div class="row">
                                                    <div class="col-1">
                                                
                                                        <button type="submit" id="edit_anggota_kel" data-toggle="modal" data-target="#edit_ang_kel" class="btn btn-warning btn-sm"
                                                        data-nik = "<?= $k->nik ?>"
                                                        data-nama = "<?= $k->nama ?>"
                                                        data-posisi = "<?= $k->posisi ?>"
                                                        ><i class="fas fa-edit"></i></button>
                                                    </div>
                                                    <div class="col-2 ml-4">
                                                    <form id="hapus_det_kel"  action="<?= site_url('nasabah/hapus_ang_kel')?>" method="POST"  >
                                                        <input type="hidden" value="<?= $k->nik ?>" name="nik">
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                    </div>
            
                                                    
                                               
                                                
                                                </td>
                                                
                                              
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
      <form id="edit_ang_kel" action="<?= site_url('nasabah/edit_anggota_kel')?>" method="POST"  >
      <div class="modal-body">
      <div class="form-group">
            <label for="inputText3" class="col-form-label">NIK</label>
            <input type="text" id="nik_edit" readonly name="nik_edit" class="form-control">
        </div>
      <div class="form-group">
            <label for="inputText3" class="col-form-label">Nama Anggota</label>
            <input type="text" id="nama_edit" readonly name="nama_edit" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputText3" class="col-form-label">Posisi Anggota</label>
            <input type="text" id="posisi_edit" name="posisi_edit" class="form-control">
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