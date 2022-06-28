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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Musyawarah Pendanaan</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                            <h5 class="card-header">Musyawarah Pendanaan</h5>
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
                                                <th>Tanggal</th>
                                                <th>Berkas</th>
                                                <th>Verifikasi</th>
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
                                                
                                                <form action="<?= site_url('administrasi_pegawai/formulir_verifikasi')?>" method ="POST" >
                                                    <input type="hidden" name="nik" value="<?=$i->nik_anggota?>">
                                                    <input type="hidden" name="id_pem" value="<?=$i->id_pengajuan?>">
                                                    <button type="submit" class="btn btn-success btn-sm" ><i class="fas fa-file-archive"></i></button>
                                                
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
                                                <button id="pengecekan_musy" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"
                                                data-nik_ang = "<?=$i->nik_anggota?>"
                                                        data-nama_ang= "<?=$i->nama_ang?>"
                                                        data-id_peng = "<?=$i->id_pembahasan?>"
                                                >
                                                Hasil Musyawarah Pendanaan
                                                </button>
                                                <!-- Modal -->
                                                    <form  enctype="multipart/form-data" action="<?= site_url('administrasi_pegawai/update_musy_penda') ?>" id="update_musy"  method="POST">
                                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog " role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                       
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">ID Pembahasan</label>
                                                            <input type="text" id="id_peng_musy" readonly name="id_pengajuan" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Nik</label>
                                                            <input type="text" id="nik_ang_musy"  readonly name="nik_ang" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Nama</label>
                                                            <input type="text" id="nama_ang_musy"  readonly name="nama_ang" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Tanggal Pencairan</label>
                                                            <input type="date" id="tgl_pen" name="tgl_pen" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="input-select">Keputusan</label>
                                                            <select class="form-control" id="keputusan"  name="keputusan">
                                                                <option value="">-- Pilih Keputusan --</option>
                                                                <option value="Pengajuan Lolos" >Lolos Seleksi </option>
                                                                <option value="Pengajuan Tidak Lolos" >Tidak Lolos Seleksi </option>  
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Dana Cair</label>
                                                            <input type="text" id="dn_cair" name="dn_cair" class="form-control">
                                                        </div>
                                                        <?php if( $i->bagi_hasil != null){?>
                                                        <div class="form-group">
                                                            <label for="inputText3" class="col-form-label">Bagi Hasil</label>
                                                            <input type="text" id="bagi_hasil" name="bagi_hasil"   class="form-control">
                                                            <label for="inputText3" class="col-form-label">Periode Pengembalian</label>
                                                            <div class="wrap-input100" >
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline1" name="periode" class="custom-control-input" value="1">
                                                                    <label class="custom-control-label" for="customRadioInline1">per 1 Bulan</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="customRadioInline2" name="periode" class="custom-control-input" value="3">
                                                                    <label class="custom-control-label" for="customRadioInline2">per 3 Bulan</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline m-b-25">
                                                                    <input type="radio" id="customRadioInline3" name="periode" class="custom-control-input" value="6">
                                                                    <label class="custom-control-label" for="customRadioInline3">per 6 Bulan</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline m-b-25">
                                                                    <input type="radio" id="customRadioInline4" name="periode" class="custom-control-input" value="12">
                                                                    <label class="custom-control-label" for="customRadioInline4">per 12 Bulan</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                        
                                                       
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </form>
                                                        </div>
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
        
                