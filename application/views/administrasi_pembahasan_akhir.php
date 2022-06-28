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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pembahasan Akhir</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                            <h5 class="card-header">Pembahasan Akhir</h5>
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
                                                <th>Tanggal Pengajuan</th>
                                                <th>Berkas</th>
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
                                                <td><?=date('d F Y',strtotime($i->tanggal_pengajuan))?></td>
                                                <td>
                                                
                                                <form action="<?= site_url('administrasi_pegawai/download_berkas')?>" method ="POST" >
                                                    <input type="hidden" name="nik" value="<?=$i->nik_anggota?>">
                                                    <button type="submit" class="btn btn-warning btn-sm" ><i class="fas fa-download"></i></button>
                                                
                                                </form>
                                                
                                                </td>
                                                <td>
                                                <button type="button" id="detail_pengajuan" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal"
                                                        data-nik_ang = "<?=$i->nik_anggota?>"
                                                        data-nama_ang= "<?=$i->nama_ang?>"
                                                        data-nik_pj = "<?=$i->nik_penanggung?>"
                                                        data-nama_pj = "<?=$i->nama_pj?>"
                                                        data-besaran = "<?= rupiah($i->besaran_pengajuan) ?>"
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
                                                <button id="pengecekan_pem2" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"
                                                data-nik_ang = "<?=$i->nik_anggota?>"
                                                        data-nama_ang= "<?=$i->nama_ang?>"
                                                        data-id_peng = "<?=$i->id_pengajuan?>"
                                                        data-id_pem = "<?=$i->id_pembahasan?>"
                                                >
                                                Hasil Verifikasi
                                                </button>
                                                <!-- Modal -->
                                                    <form  enctype="multipart/form-data" action="<?= site_url('administrasi_pegawai/update_pem_akhir') ?>" id="update_pem_akhir"  method="POST">
                                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hasil Verifikasi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="row">
                                                        <div class="col-md">
                                                        <input type="hidden" id="id_peng"  readonly name="id_peng" class="form-control">
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">ID Pembahasan</label>
                                                            <input type="text" id="id_pem"  readonly name="id_pengajuan" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Nik</label>
                                                            <input type="text" id="nik_ang_pem2"  readonly name="nik_ang" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Nama</label>
                                                            <input type="text" id="nama_ang_pem2" readonly name="nama_ang" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Tanggal Survey</label>
                                                            <input type="date" id="tgl_survey" name="tgl_survey" class="form-control">
                                                        </div>
                                                        <label for="inputText3" class="col-form-label">Foto Peta Menuju Rumah Nasabah</label>
                                                        <div class="input-group">
                                                        
                                                            <div class="custom-file">
                                                                <input type="file" name="ft_peta" class="custom-file-input" id="ft_peta" id="exampleInputFile"/>
                                                                <label class="custom-file-label" id="ft_peta" name="ft_peta" for="exampleInputFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                        <label for="inputText3" class="col-form-label">Foto Rumah Nasabah</label>
                                                        <div class="input-group">
                                                        
                                                            <div class="custom-file">
                                                                <input type="file" name="ft_rumah" class="custom-file-input" id="ft_rumah"/>
                                                                <label class="custom-file-label" id="ft_rumah" name="ft_rumah" for="inputGroupFile02">Choose file</label>
                                                            </div>
                                                        </div>
                                                        <label for="inputText3" class="col-form-label">Foto Usaha Nasabah</label>
                                                        <div class="input-group">
                                                        
                                                            <div class="custom-file">
                                                                <input type="file" name="ft_usaha" class="custom-file-input" id="ft_usaha"/>
                                                                <label class="custom-file-label" id="ft_usaha" name="ft_usaha" for="inputGroupFile02">Choose file</label>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-md">
                                                            <div class="form-group">
                                                                <label for="inputText3" class="col-form-label">Usaha Lain</label>
                                                                <input type="text" id="usaha_lain" name="usaha_lain" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputText3" class="col-form-label">Total Pendapatan</label>
                                                                <input type="text" id="tot_pendapatan" name="tot_pendapatan" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputText3" class="col-form-label">Biaya Keluarga</label>
                                                                <input type="text" id="biy_keluarga" name="biy_keluarga" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputText3" class="col-form-label">Biaya Pengembalian</label>
                                                                <input type="text" id="biy_pengembalian" name="biy_pengembalian" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputText3" class="col-form-label">Biaya Lain - Lain</label>
                                                                <input type="text" id="biy_lain" name="biy_lain" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputText3" class="col-form-label">Sisa Pendapatan</label>
                                                                <input type="text" id="sisa_pendapatan"  name="sisa_pendapatan" class="form-control" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputText3" class="col-form-label">Rekomendasi</label>
                                                                <input type="text" id="rekomendasi" name="rekomendasi" class="form-control">
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                       
                                                        </div>
                                                        </form>
                                                        </div>
                                                       
                                                    </div>
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
        
                