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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data Nasabah</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?=ucfirst($this->fungsi->user_login()->jabatan)?></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                            <h5 class="card-header">Data Pengajuan</h5>
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
                            <form action="<?=site_url('administrasi_pegawai/validasi_angsuran')?>" id="validasi" method="post">
                            <div class="row">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                        <th>Id Pengajuan</th>
                                        <td> <input type="text" readonly class="form-control" id="id_pengajuan" name="id_pengajuan" value="<?= $id_pengajuan?>" placeholder="Password"></td>
                                        </tr>
                                        <tr>
                                        <th>Nik Anggota</th>
                                        <td> <input type="text" readonly class="form-control" id="nik_anggota" name="nik_anggota" value="<?= $nik_anggota?>" placeholder="Password">
                                        <input type="hidden" value="<?=$id_pem?>" id="id_pem" name ="id_pem" >
                                        </td>
                                        </tr>
                                        <tr>
                                        <th>Nama Anggota</th>
                                        <td> <input type="text" readonly class="form-control" id="nama_anggota" name="nama_anggota" value="<?= $nama_ang?>" placeholder="Password">
                                        </td>
                                        </tr>
                                        <tr>
                                        <th>Dana Cair</th>
                                        <td> <input type="text" readonly class="form-control" id="nama_anggota" name="nama_anggota" value="<?= rupiah($dana_cair)?>" placeholder="Password">
                                        </td>
                                        </tr>
                                        
                                    </tbody>
                                    </table>
                                
                                
                            </div>   
                                
                            </div>
                    </div>
                    <div class="card">
                            <h5 class="card-header">Validasi</h5>
                            <input type="hidden" value="<?=$periode_peng?>" id="periode" name ="periode" >
                            <input type="hidden" value="<?=$tanggal_byr?>" id="tgl_byr" name ="tgl_byr" >
                            <input type="hidden" value="<?=$id_pem?>" id="id_pem" name ="id_pem" >
                            <div class="card-body">
                                <div  class="row">
                                    
                                    <div class="col-md">
                                    <?php if($periode_peng == "1"){?>
                                    <?php for($i = 1;$i<= 12;$i++){?>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Pengembalian Pokok Ke - <?=$i?></span>
                                        </div>
                                        <input type="hidden" name="keterangan[]" id="keterangan2" value="Pokok">
                                        <input type="text" id="tgl_tagihan<?=$i?>" readonly data-date-format='yyyy-mm-dd' name="tgl_tagihan[]" class="form-control" aria-label="With textarea">
                                        <input type="text" id="pokok<?=$i?>" name="nilai[]" readonly value="<?=rupiah(round($peng_pokok1))?>" class="form-control" aria-label="With textarea">

                                        <input type="hidden" id="ke" name="ke[]">
                                    </div>
                                    <br>
                                    <?php }?>
                                    <?php }?>
                                    <?php if($periode_peng == "3"){?>
                                    <?php for($i = 1;$i<= 4;$i++){?>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Pengembalian Pokok Ke - <?=$i?></span>
                                        </div>
                                        <input type="hidden" name="keterangan[]" id="keterangan2" value="Pokok">
                                        <input type="text" id="tgl_tagihan<?=$i?>" readonly data-date-format='yyyy-mm-dd' name="tgl_tagihan[]" class="form-control" aria-label="With textarea">
                                       
                                        <input type="text" id="pokok<?=$i?>" name="nilai[]" readonly value="<?=rupiah(round($peng_pokok3))?>" class="form-control" aria-label="With textarea">
                        
                                        <input type="hidden" id="ke" name="ke[]">
                                    </div>
                                    <br>
                                    <?php }?>
                                    <?php }?>
                                    <?php if($periode_peng == "6"){?>
                                    <?php for($i = 1;$i<= 2;$i++){?>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Pengembalian Pokok Ke - <?=$i?></span>
                                        </div>
                                        <input type="hidden" name="keterangan[]" id="keterangan2" value="Pokok">
                                        <input type="text" id="tgl_tagihan<?=$i?>" readonly data-date-format='yyyy-mm-dd' name="tgl_tagihan[]" class="form-control" aria-label="With textarea">
                                        <input type="text" id="pokok<?=$i?>" name="nilai[]" readonly value="<?=rupiah(round($peng_pokok6))?>" class="form-control" aria-label="With textarea">
                                        <input type="hidden" id="ke" name="ke[]">
                                    </div>
                                    <br>
                                    <?php }?>
                                    <?php }?>
                                    <?php if($periode_peng == "12"){?>
                                    <?php for($i = 1;$i<= 1;$i++){?>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Pengembalian Pokok Ke - <?=$i?></span>
                                        </div>
                                        <input type="hidden" name="keterangan[]" id="keterangan2" value="Pokok">
                                        <input type="text" id="tgl_tagihan<?=$i?>" readonly data-date-format='yyyy-mm-dd' name="tgl_tagihan[]" class="form-control" aria-label="With textarea">
                                        <input type="text" id="pokok<?=$i?>" name="nilai[]" readonly value="<?=rupiah(round($peng_pokok12))?>" class="form-control" aria-label="With textarea">
                                        <input type="hidden" id="ke" name="ke[]">
                                    </div>
                                    <br>
                                    <?php }?>
                                    <?php }?>
                                    </div>
                                    
                                    <div class="col-md">
                                    <?php for($i = 1;$i<= 12;$i++){?>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                             <?php if($jns_peng == "1"){?>
                                            <span class="input-group-text">Jasa</span>
                                            <?php }else{?>
                                                <span class="input-group-text">Bagi Hasil</span>
                                            <?php }?>
                                        </div>
                                        <?php if($jns_peng == "1"){?>
                                            <input type="hidden" name="keterangan[]" id="keterangan1" value="Jasa">
                                        <input type="text" id="tgl_bg<?=$i?>" readonly data-date-format='yyyy-mm-dd' name="tgl_tagihan[]" class="form-control"  aria-label="With textarea">
                                            <input type="text" id="pokok<?=$i?>" name="nilai[]" readonly value="<?=rupiah(round($peng_jasa))?>" class="form-control" aria-label="With textarea">
                                            <input type="hidden" id="ke" name="ke[]">
                                        <?php }else{?>
                                            <input type="hidden" name="keterangan[]" id="keterangan1" value="Bagi Hasil">
                                        <input type="text" id="tgl_bg<?=$i?>" readonly data-date-format='yyyy-mm-dd' name="tgl_tagihan[]" class="form-control"  aria-label="With textarea">
                                        <input type="text" readonly value="<?=round($bagi_hasil)?>" id="nilai_bg" name="nilai[]" class="form-control" aria-label="With textarea">
                                        <input type="hidden" id="ke" name="ke[]">
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <br>
                                    <?php }?>
                                    </div>
                                
                                </div>
                                <button type="submit" class="btn btn-success">Validasi</button>
                                </form>
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
        
                