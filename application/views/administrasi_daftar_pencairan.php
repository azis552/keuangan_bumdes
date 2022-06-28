<div class="dashboard-finance">
    <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
					<!-- ============================================================== -->
                    <!-- Modal -->
                   
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2"><?=ucfirst($this->fungsi->user_login()->jabatan)?></h3>
                                <p class="pageheader-text"><?=ucfirst($this->fungsi->user_login()->jabatan)?></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Pengajuan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                            <h5 class="card-header">Daftar Pencairan</h5>
                            <?php if($this->session->flashdata('simpan')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Melakukan Update
										</div>
							<?php endif; ?>
							<?php if($this->session->flashdata('gagal')) : ?>
								<div class="alert alert-danger" role="alert">
                                            Tidak Berhasil Melakukan Update
										</div>
							<?php endif; ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Pengajuan</th>
                                                <th>Nik</th>
                                                <th>Jenis</th>
                                                <th>Dana Cair</th>
                                                <th>Tanggal Cair</th>
                                                <th>Detail</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $x=1; foreach ($pembahasan as $i){?>
                                            <tr>
                                                <td><?=$x?></td>
                                                <td><?=$i->id_pengajuan?></td>
                                                <td><?=$i->nik_anggota?></td>                                               
                                                <td><?= ($i->id_jns_pengajuan == '1') ? "Peminjaman" : 'Permodalan';?></td>
                                                <td><?=rupiah($i->dana_cair)?>
                                                </td>
                                                <td><?=date('d F Y',strtotime($i->tgl_pencairan))?>
                                                </td>
                                                <td>
                                                
                                                <button type="button" id="detail_pengajuan" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal"
                                                        data-nik_ang = "<?=$i->nik_anggota?>"
                                                        data-nama_ang= "<?=$i->nama_ang?>"
                                                        data-nik_pj = "<?=$i->nik_penanggung?>"
                                                        data-nama_pj = "<?=$i->nama_pj?>"
                                                        data-besaran = "<?= rupiah($i->dana_cair) ?>"
                                                        data-periode = "<?= $i->periode_pengembalian ?>">
                                                       
                                                <i class="fas fa-external-link-alt"></i>
                                               
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Pengajuan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <table>
                                                        <tr>
                                                            <td>Nik </td>
                                                            <td><input type="text" readonly id="nik_ang"class="form-control"></td>
                                                            </tr> 
                                                            <tr>                               
                                                            <td>Nama </td>
                                                            <td><input type="text" readonly  id="nama_ang" class="form-control"></td>
                                                            </tr> 
                                                            <tr>    
                                                            <td>Nik Penanggung Jawab </td>
                                                            <td><input type="text" id="nik_pj" readonly class="form-control"></td>
                                                            </tr> 
                                                            <tr>    
                                                            <td>Nama Penanggung Jawab </td>
                                                            <td><input type="text" id="nama_pj" readonly class="form-control"></td>
                                                            </tr> 
                                                            <tr>    
                                                            <td>Periode Pengembalian </td>
                                                            <td><input type="text" id="periode" readonly class="form-control"></td>
                                                            </tr> 
                                                            <tr>    
                                                            <td>Besaran Pengajuan </td>
                                                            <td><input type="text" id="besaran" readonly class="form-control"></td>
                                                        </tr>
                                                    </table>
                                                    </div>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                                </td>
                                                <td>
                                                <?php if($i->id_pencairan == null){?>
                                                <button id="pencairan" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal2"
                                                        data-nik_ang = "<?=$i->nik_anggota?>"
                                                        data-nama_ang= "<?=$i->nama_ang?>"
                                                        data-id_peng= "<?=$i->id_pengajuan?>"
                                                        data-dn_cair= "<?=$i->dana_cair?>"
                                                        data-dn_cair_tam= "<?=rupiah($i->dana_cair)?>"
                                                        data-id_jns_peng= "<?=$i->id_jns_pengajuan?>"
                                                        data-id_jns_pengajuan = "<?=($i->id_jns_pengajuan == '1') ? "Peminjaman" : 'Permodalan';?>">
                                        
                                                
                                                <i class="far fa-check-square fa-1x"></i>
                                                </button>
                                                   
                                                <!-- Modal -->
                                                    <form  enctype="multipart/form-data" action="<?= site_url('administrasi_pegawai/update_pencairan') ?>" id="update_pem_akhir"  method="POST">
                                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog " role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Pencairan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                       
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">ID Pengajuan</label>
                                                            <input type="text" id="id_peng_pen"  readonly name="id_pengajuan" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Nik</label>
                                                            <input type="text" id="nik_ang_pen" readonly name="nik_ang" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Nama Peminjam</label>
                                                            <input type="text" id="nama_ang_pen"  readonly name="nama_ang" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Jenis Pengajuan</label>
                                                            <input type="text" id="jenis_peng"   readonly name="jenis_peng" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Dana Cair</label>
                                                            <input type="text" id="dn_cair_tam"  readonly name="dn_cair_tam" class="form-control">
                                                        </div>
                                                        
                                                        <input type="hidden" id="id_jns_peng" name="jns_pengajuan"  class="form-control">
                                                        <input type="hidden" id="dna_cair" name="besaran"  class="form-control">
                                                            <input type="hidden" id="penerima" name="penerima" value="<?=$i->nama_ang?>" class="form-control">
                                                        
                                                        
                                                       
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Cairkan</button>
                                                            </form>
                                                        </div>
                                                        </div>
                                                       
                                                    </div>
                                                    </div>
                                                <?php }else{?>
                                                    <form action="<?=site_url('administrasi_pegawai/tanda_terima_pencairan')?>" method="post">
                                                    <input type="hidden" name="nik_ang" value="<?=$i->nik_anggota?>">
                                                    <button type="submit" class="btn btn-secondary">cetak</button>
                                                    </form>

                                                <?php }?>
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
        
                