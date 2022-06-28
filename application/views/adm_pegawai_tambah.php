<div class="dashboard-finance">
    <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
					<!-- ============================================================== -->
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">Admin</h3>
                                <p class="pageheader-text">Admin</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Tambah Pegawai</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
					<div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
									<h5 class="card-header">Form Pendaftaran Akun Pegawai</h5>
									<?php if($this->session->flashdata('gagal')) : ?>
										<div class="alert alert-danger" role="alert">
											Gagal Menyimpan !
										</div>
									<?php endif; ?>
                                    <div class="card-body">
                                        <form id="pendaftaran_pegawai" action="<?= site_url('adm_pegawai/add')?>" method="POST" name="pendaftaran_pegawai">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">User ID</label>
                                                <input type="text" placeholder="" readonly value="<?= $ID_user?>" name="user_id" id="user_id" class="form-control">
											</div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">Username</label>
                                                <input  type="text" placeholder="Masukkan Username" name="username" value="<?=set_value('username')?>" id="username" class="form-control">
											</div>
											<div class="form-group">
                                                <label for="inputText3" class="col-form-label">Password</label>
                                                <input  type="password" placeholder="Masukkan Password" name="password" value="<?=set_value('password')?>" id="password"class="form-control">
											</div>
											<div class="form-group">
                                                <label for="input-select">Pilih Jabatan</label>
                                                <select class="form-control" id="jabatan" name="jabatan">
													<option value="0">Pilih Jabatan</option>
													<option value="1"<?=set_value('jabatan') == 1 ? "selected" : null?>>Direktur</option>
													<option value="3"<?=set_value('jabatan') == 3 ? "selected" : null?>>Administrasi</option>
													<option value="2"<?=set_value('jabatan') == 2 ? "selected" : null?>>Bendahara</option>
													<option value="4"<?=set_value('jabatan') == 4 ? "selected" : null?>>Kasir</option>
													<option value="5"<?=set_value('jabatan') == 5 ? "selected" : null?>>Admin</option>
                                                </select>
											</div>
											<div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Tambah</button>
                                                    <button type="reset" class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                            
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    <!-- ============================================================== -->
                    <!-- end inventory turnover -->
                    <!-- ============================================================== -->
                </div>
