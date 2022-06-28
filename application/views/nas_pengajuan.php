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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pengajuan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="card">
                        <h5 class="card-header">Pengajuan</h5>
                        <?php if($this->session->flashdata('simpan')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menambahkan Pengajuan
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Menambahkan Pengajuan
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal_kurang')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Anggota yang dimasukkan minimal 2 orang
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('edit_berhasil')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Mengubah Jumlah Besaran Pengajuan
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('edit_gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Mengubah Jumlah Besaran Pengajuan
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('berhasil_hapus_dump')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menghapus Pengajuan Anggota
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal_hapus_dump')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil  Menghapus Pengajuan Anggota
                                                </div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('nik_ganda')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                   Nik Sudah Masuk Daftar Pengajuan 
                                                </div>
                                    <?php endif; ?>
                        <div class="card-body">
                            
                            <div class="pills-regular">
                                <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="home" aria-selected="true">Peminjaman</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="profile" aria-selected="false">Permodalan</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    
                                    <?php if($this->fungsi->user_login_n()->id_pengajuan == null){?>
                                       
                                    
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                        Tambah Anggota
                                        </button>
                                        <br>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="edit_det_peng" action="<?= site_url('nasabah/edit_pengajuan')?>" method="POST" name="edit_det_peng" >
                                                <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Nik Anggota</label>
                                                    <input type="text" id="nik_edit" readonly name="nik_edit" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Nama Anggota</label>
                                                    <input type="text" id="nama_edit" readonly name="nama_edit" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Besaran Pengajuan</label>
                                                    <input type="text" id="besaran_edit"  name="besaran_edit" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </div>
                                                </form>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Anggota Nasabah</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form id="tam_det_peng" action="<?= site_url('nasabah/tambah_det_peng')?>" method="POST" name="tam_det_peng" >
                                            <div class="modal-body">
                                            <div class="form-group">
                                                <?php foreach($pj as $nik_pj){?>
                                                <input type="hidden" id="nik_pj" value="<?= $nik_pj->nik?>" name="nik_pj" class="form-control">
                                                <input type="hidden" id="id_kel" value="<?= $nik_pj->id_kelompok?>" name="id_kel" class="form-control">
                                                <?php }?>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Kode Pengajuan</label>
                                                <input type="text" id="id_pengajuan" value="<?= $id_peng?>" name="id_pengajuan" class="form-control">
                                            </div>
                                                <div class="form-group">
                                                    <label for="input-select">Pilih Anggota Kelompok</label>
                                                    <select class="form-control" id="nik_ang" name="nik_ang">
                                                    <option value="">-- Pilik Nik Anggota Kelompok --</option>
                                                    <?php foreach($nik as $i){?>
                                                    <?php $level = $this->input->post('nik_ang')? $this->input->post('nik_ang') : $i->nik?>
                                                       
                                                        
                                                        <option value="<?= $i->nik?>" > <?= $i->nik?> || <?= $i->nama_anggota?> </option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Besaran Pengajuan</label>
                                                <input type="text" id="besaran" value="" name="besaran" class="form-control">
                                            </div>
                                           
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </div>
                                            </form>
                                        </div>
                                        </div>
                                   
                                    <br>
                                    <div class="card">
                                        <h5 class="card-header">List Nasabah Yang Melakukan Pengajuan</h5>
                                        <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Besaran Pengajuan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $x = 1;
                                                    foreach ($dump as $k){?>
                                                    <tr>
                                                        <td><?=$x?></td>
                                                        <td><?=$k->nama_lengkap?></td>
                                                        <td><?=rupiah($k->besaran)?></td>
                                                        <td> <div class="row">
                                                    <div class="col-1">
                                                        
                                                        <button type="submit" id="edit_pengajuan_pem" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-sm"
                                                        data-nik = "<?= $k->nik ?>"
                                                        data-nama = "<?= $k->nama_lengkap ?>"
                                                        data-besaran = "<?= $k->besaran ?>"
                                                        ><i class="fas fa-edit"></i></button>
                                                    </div>
                                                    <div class="col-2 ml-4">
                                                    <form id="hapus_det_kel"  action="<?= site_url('nasabah/hapus_dump_pengajuan')?>" method="POST"  >
                                                        <input type="hidden" value="<?= $k->nik ?>" name="nik">
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                    </div></td>
                                                        
                                                    </tr>
                                                    <?php $x++; }?>
                                                    <!-- Modal -->
                                                       
                                            </table>
                                            </div> 
                                            </div>
                                    </div>
                                    <label for="inputText3" class="col-form-label">Berkas</label>
                                    
                                    <form id="tam_pengajuan" enctype="multipart/form-data" action="<?= site_url('nasabah/tambah_pengajuan')?>" method="POST" name="tam_pengajuan" >
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" name="berkas" class="custom-file-input" id="inputGroupFile02"  onchange="ValidateSingleInput(this);" />
                                            <label class="custom-file-label" name="berkas" for="inputGroupFile02">Choose file</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Identias Penanggung Jawab</label>
                                        <?php foreach($pj as $nas_pj){?>
                                            <input type="text" id="nik_pj" readonly value="<?= $nas_pj->nik?>" name="nik_pj"  class="form-control">
                                            <br>
                                            <input type="text" id="nama_pj" readonly value="<?= $nas_pj->nama_lengkap?>" name="nama_pj"  class="form-control">
                                            <?php }?>        
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-sm">Masukkan Pengajuan</button>
                                    </form>
                                   </div>
                                                    <?php }else{?>
                                                 
                                                    <form action="<?=site_url('nasabah/cetak_bukti_pengumpulan')?>" method="POST" >
                                                    <?php foreach($progress as $i){?>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" class="form-control">Progress</span>
                                                        </div>
                                                        <input type="text" readonly class="form-control"  id="keterangan1" value="<?=$i->progress?>">  
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" class="form-control">Pesan</span>
                                                        </div>
                                                        <input type="text" readonly class="form-control" id="keterangan1" value="<?=$i->pesan?>">  
                                                    </div>
                                                    <?php }?>
                                                    <br>
                                                        <button  type="submit" class="btn btn-warning ">
                                                        <i class="fas fa-file-download"> Download Bukti Pengumpulan</i>
                                                        </button>
                                                    </form>
                                                    </div>
                                                    
                                               
                                                    <?php }?>            
                                    
                                

                                   
                                    
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <?php if($this->fungsi->user_login_n()->id_pengajuan == null){?>
                                        <form id="tam_peng_per" enctype="multipart/form-data" action="<?= site_url('nasabah/tambah_peng_per')?>" method="POST" name="tam_peng_per" >
                                        <div class="form-group">  
                                            <label for="inputText3" class="col-form-label">ID Pengajuan</label>
                                            <input type="text" id="id_pengajuan" value="<?= $id_peng?>" name="id_pengajuan" class="form-control">
                                        </div>
                                        <label for="inputText3" class="col-form-label">Berkas</label>
                                        <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="berkas" class="custom-file-input" id="inputGroupFile02"  onchange="ValidateSingleInput(this);"/>
                                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Besaran Pengajuan</label>
                                                <input type="text" id="besaran_per" value="" name="besaran" class="form-control">
                                        </div>
                                        <label for="inputText3" class="col-form-label">Bagi Hasil</label>
                                        <div class="input-group mb-3">
                                        <input type="text"  id="bagi_hasil" value="" name="bagi_hasil"  class="form-control" placeholder="Masukkan kesepakan bagi hasil " aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">%</span>
                                        </div>
                                        
                                        </div>
                                        <label for="inputText3" class="col-form-label">Periode Pengembalian</label>
                                        <div class="wrap-input100" >
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="periode" class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="customRadioInline1"> Per 1 Bulan</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="periode" class="custom-control-input" value="3">
                                                <label class="custom-control-label" for="customRadioInline2"> Per 3 Bulan</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline m-b-25">
                                                <input type="radio" id="customRadioInline3" name="periode" class="custom-control-input" value="6">
                                                <label class="custom-control-label" for="customRadioInline3"> Per 6 Bulan</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline m-b-25">
                                                <input type="radio" id="customRadioInline4" name="periode" class="custom-control-input" value="12">
                                                <label class="custom-control-label" for="customRadioInline4"> Per 12 Bulan</label>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-secondary btn-sm">Masukkan Pengajuan</button>
                                        </form>
                                    </div>
                                        <?php }else{?>
                                        <div>
                                    
                                            <form action="<?=site_url('nasabah/cetak_bukti_pengumpulan')?>" method="POST" >
                                            <?php foreach($progress as $i){?>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" class="form-control">Progress</span>
                                                        </div>
                                                        <input type="text" readonly class="form-control"  id="keterangan1" value="<?=$i->progress?>">  
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" class="form-control">Pesan</span>
                                                        </div>
                                                        <input type="text" readonly class="form-control" id="keterangan1" value="<?=$i->pesan?>">  
                                                    </div>
                                                    <?php }?>
                                                    <br>
                                                <button  type="submit" class="btn btn-warning ">
                                                <i class="fas fa-file-download"> Download Bukti Pengumpulan</i>
                                                </button>
                                            </form>
                                           
                                        </div>
                                        <?php }?>
                                    </div>
                                   </div>
                                </div>
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
