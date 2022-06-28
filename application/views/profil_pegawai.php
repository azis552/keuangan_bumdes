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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profil</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="card">
                    <h5 class="card-header">PROFIL</h5>
                    <?php if($this->session->flashdata('ubah_berhasil')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Memperbarui Data Diri
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('ubah_gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Memperbarui Data Diri
                                                </div>
                                    <?php endif; ?>
                    <div class="card-body">
                            <div class="simple-card">
                                <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-left-0" id="home-tab-simple" data-toggle="tab" href="#home-simple" role="tab" aria-controls="home" aria-selected="true">Data Diri</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab-simple" data-toggle="tab" href="#profile-simple" role="tab" aria-controls="profile" aria-selected="false">Data Akun</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent5">
                                    <div class="tab-pane fade show active" id="home-simple" role="tabpanel" aria-labelledby="home-tab-simple">
                                    <form id="edit_pegawai" action="<?= site_url('pegawai/edit_profil')?>" method="POST" name="edit_pegawai" >
                                    <?php foreach($profil as $i){?>
                                    <div class="form-group">
                                                <label for="inputText3" class="col-form-label">ID User</label>
                                                <input type="text" value="<?= $i->id_user?>" id="id_user" name="id_user" readonly class="form-control">
                                            </div>
                                   <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nik</label>
                                                <input type="text" value="<?= $i->NIK?>" id="nik" name="nik" class="form-control">
                                            </div>
                                    <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama</label>
                                                <input type="text" value="<?= $i->nama?>" id="nama" name="nama" class="form-control">
                                            </div>
                                    <div class="form-group">
                                                <label for="input-select">Jenis Kelamin</label>
                                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                <?php $level = $this->input->post('jenis_kelamin')? $this->input->post('jenis_kelamin') : $i->jk?>
                                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                                    <option value="1" <?= $level ==1 ? "selected" : null?>>Laki-laki</option>
                                                    <option value="2" <?= $level ==2 ? "selected" : null?>>Perempuan</option>
                                                </select>
                                             </div>
                                    <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Tempat Lahir</label>
                                                <input type="text" value="<?= $i->tmp_lhr?>" id="tmp_lahir" name="tmp_lahir" class="form-control">
                                            </div>
                                    <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Tanggal Lahir</label>
                                                <input type="date" value="<?= $i->tgl_lhr?>" id="tgl_lhr" name="tgl_lhr" class="form-control">
                                            </div>
                                    <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Alamat</label>
                                                <input type="text" value="<?= $i->alamat?>" id="alamat" name="alamat" class="form-control">
                                            </div>
                                    <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Jenjang Pendidikan</label>
                                                <input type="text" value="<?= $i->pendidikan?>" id="pendidikan" name="pendidikan" class="form-control">
                                            </div>
                                    <button type="submit" class="btn btn-space btn-warning"><i class="fas fa-pen-square"></i> Perbarui Data Diri</button> 
         
                                    <?php }?>        
                                        </form>



                                    </div>



                                    <div class="tab-pane fade" id="profile-simple" role="tabpanel" aria-labelledby="profile-tab-simple">
                                        <p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque. </p>
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
