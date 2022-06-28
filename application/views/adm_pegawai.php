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
                                            <li class="breadcrumb-item active" aria-current="page">Daftar Pegawai</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    
					
                        <div class="card">
						
							<h5 class="card-header">Daftar Pegawai Bumdes</h5>
							<?php if($this->session->flashdata('simpan')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Menyimpan !
										</div>
							<?php endif; ?>
							<?php if($this->session->flashdata('edit')) : ?>
								<div class="alert alert-success" role="alert">
											Berhasil Edit !
										</div>
							<?php endif; ?>
							<div >
							<a style="float: right;margin-bottom :4px;margin-right:21px;margin-top:3px;" href="<?= site_url('adm_pegawai/tambah') ?>" type="button" class="btn btn-primary btn-sm "><i class="fas fa-plus-square"></i> Tambah</a>
							<div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
												<th>No.</th>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Jabatan</th>
                                                <th>Edit</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
											$x = 1;
											foreach ($data->result() as $k){?>
                                            <tr>
												<td><?=$x?></td>
												<td><?=$k->id_user?></td>
												<td><?=$k->username?></td>
												<td><?=$k->jabatan?></td>
												<td>
													<form action="<?=site_url('adm_pegawai/edit')?>" method="POST" >
														<a href="<?=site_url('adm_pegawai/edit/'.$k->id_user)?>" class="badge badge-warning"><i class="fas fa-edit"></i></a>
														</a>
													</form>	
												</td>
												<td>
													<form action="<?=site_url('user/del/')?>" method="POST" >
														<input name="id_user" type="hidden" value="<?=$k->id_user?>">
														<button onclick="return confirm('Apakah yakin dihapus?')" type="submit" class="badge badge-danger"><i class="fas fa-trash"></i>
											</button>
													</form>
													
													</td>
												<?php $x++?>
                                            </tr>
											<?php }?>
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
