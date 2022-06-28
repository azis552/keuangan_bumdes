
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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit Profil Kelompok</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
                                        </ol>
                                    </nav>
                                </div>
                            <br/>
                            <form id="edit_kelompok" action="<?= site_url('nasabah/edit_kelompok')?>" method="POST" name="edit_kelompok" >
                            <div class="card">
                                    <h5 class="card-header">Edit Profil Kelompok</h5>
                                    <?php if($this->session->flashdata('simpan')) : ?>
										<div class="alert alert-success" role="alert">
											Berhasil Memperbarui Data Diri
										</div>
                                    <?php endif; ?>
                                    <?php if($this->session->flashdata('gagal')) : ?>
                                        <div class="alert alert-danger" role="alert">
                                                    Tidak Berhasil Memperbarui Data Diri
                                                </div>
                                    <?php endif; ?>
                            <div class="card">
                                    <h5 class="card-header">Data Kelompok</h5>
                                    <div class="card-body">
                                            <div class="form-group">
                                           
                                                <label for="inputText3" class="col-form-label">ID Kelompok</label>
                                                
                                                <input type="text" value="<?=$kode?>" id="id_kelompok" name="id_kelompok" readonly class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama Kelompok</label>
                                                
                                                <input type="text" value="" id="nama_kelompok" name="nama_kelompok" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Tanggal Berdiri</label>
                                               
                                                <input type="date" value="" id="tanggal_berdiri" name="tanggal_berdiri" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Desa</label>
                                                <select class="form-control" id="desa" onfocus="this.oldvalue=this.value;this.blur();" onchange="this.value=this.oldvalue;" name="desa">
                                                <?php foreach($desa as $i){?>
                                                <?php $level = $k->id_desa? $k->id_desa : $i->id_desa?>
                                                    <option value="">-- Pilih Desa --</option>
                                                    <option value="1" <?= $level ==1 ? "selected" : null?>>Puhsarang</option>
                                                    <option value="2" <?= $level ==2 ? "selected" : null?>>Kedak</option>
                                                    <option value="3" <?= $level ==3 ? "selected" : null?>>Titik</option>
                                                    <option value="4" <?= $level ==4 ? "selected" : null?>>Selopanggung</option>
                                                    <option value="5" <?= $level ==5 ? "selected" : null?>>Puhrubuh</option>
                                                    <option value="6" <?= $level ==6 ? "selected" : null?>>Semen</option>
                                                    <option value="7" <?= $level ==7 ? "selected" : null?>>Kanyoran</option>
                                                    <option value="8" <?= $level ==8 ? "selected" : null?>>Pagung</option>
                                                    <option value="9" <?= $level ==9 ? "selected" : null?>>Bobang</option>
                                                    <option value="10" <?= $level ==10 ? "selected" : null?>>Sidomulyo</option>
                                                    <option value="11" <?= $level ==11 ? "selected" : null?>>Joho</option>
                                                    <option value="12" <?= $level ==12 ? "selected" : null?>>Bulu</option>
                                                    <?php }?>
                                                
                                                </select>
                                             </div>
                                             <button type="submit" class="btn btn-space btn-warning"><i class="fas fa-pen-square"></i>Simpan</button> 
                                    </div>
                                   
                                            
                                    
                             </form>
                            
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                
                    <!-- ============================================================== -->
                    <!-- end inventory turnover -->
                    <!-- ============================================================== -->
                </div>
