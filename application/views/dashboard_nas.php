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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
                                        </ol>
                                    </nav>
                                </div>
                                <?php foreach ($profil_dt_dr as $i){?>
                                
                                <div class="card">
                                    <img class="mx-auto d-block" src="<?php echo base_url() ?>assets/landing/assets/dist/img/logo.jpeg" width="200px">
                                    <div class="card-body">
                                        <h3 class="card-title">Selamat Datang <?= $this->fungsi->user_login_n()->username ?></h3>
                                        <?php if($i->STATUS == 0 ){?>
                                        <p class="card-text">Sebelum melakukan pengajuan harap melengkapi profil <a class="btn btn-warning" href="<?= site_url('nasabah/profil_nas')?>">Klik Disini !</a></p>
                                        <?php }elseif($i->status_kelompok == 0){?>
                                        <p class="card-text">Sebelum melakukan pengajuan lengkapi data kelompok <a class="btn btn-warning" href="<?= site_url('nasabah/edit_profil_kelompok')?>">Klik Disini !</a></p>
                                        <?php }else{?>
                                        <p class="card-text">Semoga selalu dilancarkan rezekinya</p>
                                        <?php }?>
                                        
                                    </div>
                                </div>
                                       
                             <?php }?>
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
