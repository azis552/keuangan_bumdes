
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/landing/assets/dist/img/logo.jpeg"/>
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js" integrity="sha512-sR3EKGp4SG8zs7B0MEUxDeq8rw9wsuGVYNfbbO/GLCJ59LBE4baEfQBVsP2Y/h2n8M19YV1mujFANO1yA3ko7Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script  src="https://cdn.jsdelivr.net/npm/chartjs-node-plugin-colorschemes@1.2.0/src/index.min.js">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="<?php echo base_url() ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/libs/css/style.css">
   <script src="https://kit.fontawesome.com/508c3271bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/vector-map/jqvmap.css">
    <link href="<?php echo base_url() ?>assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/charts/morris-bundle/morris.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url() ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link href="<?php echo base_url() ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    
    <script type="text/javascript">
        $(function() {
            $('.date-picker').datepicker( {
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            onClose: function(dateText, inst) { 
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
            });
        });
    </script>
<style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
    </style>
	<style>
        .error {
            color: red;
            margin-left: 5px;
        }
        .ui-datepicker-calendar {
            display: none;
        }
    </style>

 

	<title>BUMDES</title>
</head>


<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">BUMDES</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Pemberitahuan</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                        <?php if($this->fungsi->user_login()->id_jabatan == 2){?>

                                        <?php }else{?>
                                            <?php foreach(@$notif as $i){?>
                                            <a href="<?=site_url($i->link)?>" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                   
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name"><?= $i->nik_anggota ?></span><?=$i->jenis?>
                                            
                                                    </div>
                                                </div>
                                            </a>
                                            <?php }?>
                                        <?php }?>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </li>
                       
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
								
                                    <h5 class="mb-0 text-white nav-user-name"><?= $this->fungsi->user_login()->username?> </h5>
                                    <span class="status"></span><span class="ml-2"><?= $this->fungsi->user_login()->jabatan?></span>
                                </div>
								<a class="dropdown-item" href="<?=site_url('pegawai/profil')?>"><i class="fas fa-user-circle mr-2"></i>Profil</a>
                                <a class="dropdown-item" href="<?=site_url('auth/logout')?>"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <!--Admin -->
                            <?php if($this->fungsi->user_login()->id_jabatan == 5){?>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('dashboard')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-tachometer-alt"></i>Dashboard </a>
                            </li>    
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('adm_pegawai')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-user-circle"></i>Pegawai </a>
                            </li>  
                            <!-- end admin -->
                            <?php }elseif($this->fungsi->user_login()->id_jabatan == 3){?>
                            <!-- Administrasi -->
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('administrasi_pegawai')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-tachometer-alt"></i>Dashboard </a>
                            </li>  
                            <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1"><i class="fas fa-database"></i>Data Master</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= site_url('administrasi_pegawai/data_nasabah')?>"><i class="fas fa-dot-circle"></i>Data Nasabah</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= site_url('administrasi_pegawai/data_kelompok')?>"><i class="fas fa-dot-circle"></i>Data Kelompok</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= site_url('administrasi_pegawai/data_pengajuan')?>"><i class="fas fa-dot-circle"></i>Data Pengajuan</a>
                                                    </li>
                                                </ul>
                                            </div>
                            </li> 
                         
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('administrasi_pegawai/pengajuan_baru')?>" ><i class="fas fa-hand-holding-usd"> <span class="badge">5</span> </i>Pengajuan Baru</a>
                            </li> 
                            <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-balance-scale"></i>Pembahasan</a>
                                            <div id="submenu-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= site_url('administrasi_pegawai/pembahasan')?>"><i class="fas fa-dot-circle"></i>Pembahasan Awal</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= site_url('administrasi_pegawai/pembahasan_akhir')?>"><i class="fas fa-dot-circle"></i>Pembahasan Akhir</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= site_url('administrasi_pegawai/musyawarah_pendanaan')?>"><i class="fas fa-dot-circle"></i>Musyawarah Pendanaan</a>
                                                    </li>
                                                </ul>
                                            </div>
                            </li>   
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('administrasi_pegawai/daftar_validasi')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="far fa-handshake"></i>Validasi</a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('administrasi_pegawai/daftar_pencairan')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-hand-holding-usd"></i>Pencairan</a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('administrasi_pegawai/pengembalian')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-money-bill-alt"></i>Pengembalian</a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('administrasi_pegawai/penangguhan')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-phone-volume"></i>Penangguhan</a>
							</li>   
                            <!-- end Administrasi -->
                            <?php }elseif($this->fungsi->user_login()->id_jabatan == 4){?>
                            <!-- kasir -->
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('adm_pegawai')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-user-circle"></i>Dashboard </a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('adm_pegawai')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-user-circle"></i>Pencairan </a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('adm_pegawai')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-user-circle"></i>Pembayaran </a>
                            </li>  
                            <!-- end kasir -->
                            <?php }elseif($this->fungsi->user_login()->id_jabatan == 2){?>
                            <!-- Bendahara -->
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('bendahara_pegawai')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-user-circle"></i>Dashboard </a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('bendahara_pegawai/akun_rekening')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-credit-card"></i>Akun Rekening</a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('bendahara_pegawai/periode')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-hourglass-half"></i>Data Periode</a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('bendahara_pegawai/transaksi_keu')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-calculator"></i>Jurnal Umum </a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('bendahara_pegawai/buku_besar')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-calculator"></i>Buku Besar </a>
                            </li> 
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('bendahara_pegawai/jurnal_penyesuaian')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-calculator"></i>Jurnal Penyesuaian </a>
                            </li>   
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('bendahara_pegawai/neraca_lajur')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-calculator"></i>Neraca Lajur </a>
                            </li>   
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('bendahara_pegawai/laporan_keuangan')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-balance-scale"></i>Laporan Keuangan </a>
                            </li>  
                            
                             <!-- end Bendahara -->
                            <?php }elseif($this->fungsi->user_login()->id_jabatan == 1){?>
                            <!-- Direktur -->
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('direktur_pegawai')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-user-circle"></i>Dashboard </a>
                            </li>  
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('direktur_pegawai/pengajuan_baru')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-balance-scale"></i>Pengajuan Baru </a>
                            </li>  
                            <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-file-pdf"></i>Laporan</a>
                                            <div id="submenu-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= site_url('direktur_pegawai/data_nasabah')?>"><i class="fas fa-dot-circle"></i>Laporan Nasabah</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= site_url('direktur_pegawai/data_pengajuan')?>"><i class="fas fa-dot-circle"></i>Laporan Data Pengajuan</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= site_url('direktur_pegawai/laporan_keuangan')?>"><i class="fas fa-dot-circle"></i>Laporan Keuangan</a>
                                                    </li>
                                                </ul>
                                            </div>
                            </li> 
                            
                            <?php }?>
                             <!-- end Direktur -->
                            

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
        <div class="preloader">
        <div class="loading">
            <img src="<?php echo base_url() ?>assets/landing/assets/dist/img/logo.jpeg" width="80">
            <p>Harap Tunggu</p>
        </div>
        </div>
		<?= $contents ?>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer" style=" position:fixed; bottom:0;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>. 
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
     <!-- bootstap bundle js -->
     <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
   
    <script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
    </script>
<script>
$(document).ready(function () {
    // $('#edit_ang_kel').modal({backdrop: 'static', keyboard: false})  
    $("#jml_besaran").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
    $("#tot_pendapatan").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
    $("#biy_keluarga").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
    $("#biy_pengembalian").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
    $("#biy_lain").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
    $("#sisa_pendapatan").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
    $("#rekomendasi").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
    $("#dn_cair").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
    $("#jml_tagihan").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
   
  })
</script>
<script>
$(document).ready(function () {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
        }, "Hanya menerima huruf "); 
        jQuery.validator.addMethod("password", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
        }, "Harus Mengandung huruf besar, huruf kecil dan angka !  "); 
        jQuery.validator.addMethod("jabatan",function (value, element)
            {
                if (element.value === "0") {return false;}
                else return true;
            },"Silihkan pilih jabatan !");
    $("#pendaftaran_pegawai").validate({
        rules: {
            username: {
            required: true,
            lettersonly: true,
            minlength: 4
            },
            password: {
            required: true,
            password: true,
            minlength: 8
            },
            jabatan: {
            jabatan:true
            }
        },
        messages: {
            username: {
            required: "Username masih kosong, Harus di isi !",
            minlength: jQuery.validator.format("Minimal {0} karakter")
            },
            password: {
            required: "Password masih kosong, Harus di isi !",
            minlength: jQuery.validator.format("Minimal {0} karakter")
            }
        }
    });
});
</script>
<script>
$(document).ready(function () {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
        }, "Hanya menerima huruf "); 
        jQuery.validator.addMethod("password", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
        }, "Harus Mengandung huruf besar, huruf kecil dan angka !  "); 
        jQuery.validator.addMethod("jabatan",function (value, element)
            {
                if (element.value === "0") {return false;}
                else return true;
            },"Silihkan pilih jabatan !");
    $("#tambah_rekening").validate({
        rules: {
            no_akun: {
            required: true,
            minlength: 4,
            digits: true
            },
            keterangan: {
            required: true,
            minlength: 3
            },
            tipe_akun: {
            required: true,
            minlength: 4
            
            }
        },
        messages: {
            no_akun: {
            required: "No akun masih kosong, Harus di isi !",
            minlength: jQuery.validator.format("Minimal {0} karakter"),
            digits: "Hanya dapat diisi dengan angka"
            },
            keterangan: {
            required: "Keterangan masih kosong, Harus di isi !",
            minlength: jQuery.validator.format("Minimal {0} karakter")
            },
            tipe_akun: {
            required: "Tipe akun masih kosong, Harus di isi !",
            minlength: jQuery.validator.format("Minimal {0} karakter")
            }
        }
    });
});
</script>
<script>
$(document).ready(function () {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
        }, "Hanya menerima huruf "); 
        jQuery.validator.addMethod("password", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
        }, "Harus Mengandung huruf besar, huruf kecil dan angka !  "); 
        jQuery.validator.addMethod("jabatan",function (value, element)
            {
                if (element.value === "0") {return false;}
                else return true;
            },"Silihkan pilih jabatan !");
    $("#tambah_det_transaksi").validate({
        rules: {
            id_peridoe: {
            required: true,
            },
            tgl_trans: {
            required: true,
            minlength: 4
            
            }
        },
        messages: {
           id_peridoe: {
            required: "Keterangan masih kosong, Harus di isi !",
            },
           tgl_trans: {
            required: "Tipe akun masih kosong, Harus di isi !",
            minlength: jQuery.validator.format("Minimal {0} karakter")
            }
        }
    });
});
</script>
<script>
$(document).ready(function () {
    jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);
        }, "Hanya menerima huruf "); 
        jQuery.validator.addMethod("password", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
        }, "Harus Mengandung huruf besar, huruf kecil dan angka !  "); 
        jQuery.validator.addMethod("jabatan",function (value, element)
            {
                if (element.value === "0") {return false;}
                else return true;
            },"Silihkan pilih  !");
    $("#tambah_transaksi").validate({
        rules: {
            id_akun: {
            required: true,
            jabatan: true
            },
            jml_besaran: {
            required: true
            },
            dk: {
            required: true,
            jabatan: true
            
            }
        },
        messages: {
             id_akun: {
            required: "No akun masih kosong, Harus di isi !",
            
            },
            jml_besaran: {
            required: "Keterangan masih kosong, Harus di isi !",
            digits: "Hanya dapat diisi dengan angka"
            },
            dk: {
            required: "Tipe akun masih kosong, Harus di isi !",
            }
        }
    });
});
</script>
<script>
    $(document).ready(function() {
        $(document).on('click','#detail_anggota_kel', function()
        {
            var id_kelompok = $(this).data('id_kel');
            
            $.ajax({
                url: "<?php echo base_url("administrasi_pegawai/anggota_kelompok");?>",
                type: "POST",
                data:{ id_kelompok:id_kelompok},
                cache: false,
                success: function(data){
                    console.log(id_kelompok);
                    var data_ang =  JSON.parse(data);
                  
                    var baris ='';
                    for(var i=0;i<data_ang.anggota.length;i++){
                        baris += '<tr>'+
                                    '<td>' +data_ang.anggota[i].nik+'</td>'+
                                    '<td>' +data_ang.anggota[i].nama_anggota+'</td>'+
                                    '<td>' +data_ang.anggota[i].posisi_anggota+'</td>'+
                                '</tr>';
                    }
                    $('#data_anggota').html(baris);
                }
            });
            
        });
    });
</script>
<script>
$(document).ready(function(){
    $(document).on('click','#detail_pengajuan', function(){
        





        var nik_ang = $(this).data('nik_ang');
        var nama_ang = $(this).data('nama_ang');
        var nik_pj = $(this).data('nik_pj');
        var nama_pj = $(this).data('nama_pj');
        var besaran = $(this).data('besaran');
        var periode = $(this).data('periode')+" Bulan";
        $('#nik_ang').val(nik_ang);
        $('#nama_ang').val(nama_ang);
        $('#nik_pj').val(nik_pj);
        $('#nama_pj').val(nama_pj);
        $('#periode').val(periode);
        $('#besaran').val(besaran);
       
  
    });
    $(document).on('click','#pencairan', function(){
        var nik_ang = $(this).data('nik_ang');
        var nama_ang = $(this).data('nama_ang');
        var id_peng = $(this).data('id_peng');
        var id_jns_peng = $(this).data('id_jns_pengajuan');
        var id_jns_p = $(this).data('id_jns_peng');
        var dana_cair = $(this).data('dn_cair');
        var dana_cair_tam = $(this).data('dn_cair_tam');
        $('#nik_ang_pen').val(nik_ang);
        $('#nama_ang_pen').val(nama_ang);
        $('#id_peng_pen').val(id_peng);
        $('#jenis_peng').val(id_jns_peng);
        $('#id_jns_peng').val(id_jns_p);
        $('#dna_cair').val(dana_cair);
        $('#dn_cair_tam').val(dana_cair_tam);
    });
    $(document).on('click','#edit_akun_rekening', function(){
        var id_akun = $(this).data('id_akun');
        var nama = $(this).data('nama');
        var tipe = $(this).data('tipe');
        $('#edit_no_akun').val(id_akun);
        $('#edit_keterangan').val(nama);
        $('#edit_tipe_akun').val(tipe);
    });
    $(document).on('click','#edit_periode', function(){
        var id_akun = $(this).data('id_akun');
        var periode = $(this).data('periode');
        $('#edit_id_per').val(id_akun);
        $('#edit_tgl_per').val(periode);
    });
    $(document).on('click','#pengecekan_berkas', function(){
        var nik_ang = $(this).data('nik_ang');
        var nama_ang = $(this).data('nama_ang');
        var id_peng = $(this).data('id_peng');
        $('#id_pengajuan').val(id_peng);
        $('#nik_ang_sel').val(nik_ang);
        $('#nama_ang_sel').val(nama_ang);
  
    });
    $(document).on('click','#pengecekan_pem1', function(){
        var nik_ang = $(this).data('nik_ang');
        var nama_ang = $(this).data('nama_ang');
        var id_peng = $(this).data('id_peng');
        $('#id_pengajuan_pem1').val(id_peng);
        $('#nik_ang_pem1').val(nik_ang);
        $('#nama_ang_pem1').val(nama_ang);
  
    });
    $(document).on('click','#pengecekan_pem2', function(){
        var nik_ang = $(this).data('nik_ang');
        var nama_ang = $(this).data('nama_ang');
        var id_peng = $(this).data('id_peng');
        var id_pem = $(this).data('id_pem');
        $('#id_peng').val(id_peng);
        $('#id_pem').val(id_pem);
        $('#nik_ang_pem2').val(nik_ang);
        $('#nama_ang_pem2').val(nama_ang);
  
    });
    $(document).on('click','#pengecekan_musy', function(){
        var nik_ang = $(this).data('nik_ang');
        var nama_ang = $(this).data('nama_ang');
        var id_peng = $(this).data('id_peng');
        $('#id_peng_musy').val(id_peng);
        $('#nik_ang_musy').val(nik_ang);
        $('#nama_ang_musy').val(nama_ang);
  
    });
    
})


</script> 
<script>
$(document).ready(function() {
var tanggal = $('#tgl_byr').val();
var periode = $('#periode').val();
switch(periode) {
  case "1":
  var date = new Date(tanggal);
  var today = new Date(date.getFullYear(), date.getMonth()+1, date.getDate());
  var today2 = new Date(date.getFullYear(), date.getMonth()+2, date.getDate());
  var today3 = new Date(date.getFullYear(), date.getMonth()+3, date.getDate());
  var today4 = new Date(date.getFullYear(), date.getMonth()+4, date.getDate());
  var today5 = new Date(date.getFullYear(), date.getMonth()+5, date.getDate());
  var today6 = new Date(date.getFullYear(), date.getMonth()+6, date.getDate());
  var today7 = new Date(date.getFullYear(), date.getMonth()+7, date.getDate());
  var today8 = new Date(date.getFullYear(), date.getMonth()+8, date.getDate());
  var today9 = new Date(date.getFullYear(), date.getMonth()+9, date.getDate());
  var today10 = new Date(date.getFullYear(), date.getMonth()+10, date.getDate());
  var today11 = new Date(date.getFullYear(), date.getMonth()+11, date.getDate());
  var today12 = new Date(date.getFullYear(), date.getMonth()+12, date.getDate());


  var result1 = today.toISOString().split`T`[0];
  var result2 = today2.toISOString().split`T`[0];
  var result3 = today3.toISOString().split`T`[0];
  var result4 = today4.toISOString().split`T`[0];
  var result5 = today5.toISOString().split`T`[0];
  var result6 = today6.toISOString().split`T`[0];
  var result7 = today7.toISOString().split`T`[0];
  var result8 = today8.toISOString().split`T`[0];
  var result9 = today9.toISOString().split`T`[0];
  var result10 = today10.toISOString().split`T`[0];
  var result11 = today11.toISOString().split`T`[0];
  var result12 = today12.toISOString().split`T`[0];
  $('#tgl_tagihan1').datepicker({
    dateFormat:"yy-mm-dd",
showOn : "off",
startDate: today,
endDate: end,
autoclose: true
  });
  $('#tgl_tagihan2').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today2,
endDate: end,
autoclose: true
  });    
  $('#tgl_tagihan3').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today3,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan4').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today4,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan5').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today5,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan6').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today6,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan7').datepicker({
    dateFormat:"yy-mm-dd",
showOn : "off",
startDate: today,
endDate: end,
autoclose: true
  });
  $('#tgl_tagihan8').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today2,
endDate: end,
autoclose: true
  });    
  $('#tgl_tagihan9').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today3,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan10').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today4,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan11').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today5,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan12').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today6,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan1').datepicker('setDate', result1);
  $('#tgl_tagihan2').datepicker('setDate', result2);
  $('#tgl_tagihan3').datepicker('setDate', result3);
  $('#tgl_tagihan4').datepicker('setDate', result4);
  $('#tgl_tagihan5').datepicker('setDate', result5);
  $('#tgl_tagihan6').datepicker('setDate', result6);
  $('#tgl_tagihan7').datepicker('setDate', result7);
  $('#tgl_tagihan8').datepicker('setDate', result8);
  $('#tgl_tagihan9').datepicker('setDate', result9);
  $('#tgl_tagihan10').datepicker('setDate', result10);
  $('#tgl_tagihan11').datepicker('setDate', result11);
  $('#tgl_tagihan12').datepicker('setDate', result12);

    break;
    // 1 bulan end

    case "3":
        var date = new Date(tanggal);
  var today = new Date(date.getFullYear(), date.getMonth()+3, date.getDate());
  var today2 = new Date(date.getFullYear(), date.getMonth()+6, date.getDate());
  var today3 = new Date(date.getFullYear(), date.getMonth()+9, date.getDate());
  var today4 = new Date(date.getFullYear(), date.getMonth()+12, date.getDate());
  var result1 = today.toISOString().split`T`[0];
  var result2 = today2.toISOString().split`T`[0];
  var result3 = today3.toISOString().split`T`[0];
  var result4 = today4.toISOString().split`T`[0];
  $('#tgl_tagihan1').datepicker({
    dateFormat:"yy-mm-dd",
showOn : "off",
startDate: today,
endDate: end,
autoclose: true
  });
  $('#tgl_tagihan2').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today2,
endDate: end,
autoclose: true
  });    
  $('#tgl_tagihan3').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today3,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan4').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today4,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan1').datepicker('setDate', result1);
  $('#tgl_tagihan2').datepicker('setDate', result2);
  $('#tgl_tagihan3').datepicker('setDate', result3);
  $('#tgl_tagihan4').datepicker('setDate', result4);

    break;
    case "6":
        var date = new Date(tanggal);
  var today = new Date(date.getFullYear(), date.getMonth()+6, date.getDate());
  var today2 = new Date(date.getFullYear(), date.getMonth()+12, date.getDate());
  var result1 = today.toISOString().split`T`[0];
  var result2 = today2.toISOString().split`T`[0];
  $('#tgl_tagihan1').datepicker({
    dateFormat:"yy-mm-dd",
showOn : "off",
startDate: today,
endDate: end,
autoclose: true
  });
  $('#tgl_tagihan2').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today2,
endDate: end,
autoclose: true
  });    
  $('#tgl_tagihan1').datepicker('setDate', result1);
  $('#tgl_tagihan2').datepicker('setDate', result2);

    break;
    case "7":
// 6 bulan pokok start
  var date = new Date(tanggal);
  var today = new Date(date.getFullYear(), date.getMonth()+2, date.getDate());
  var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());
  var today2 = new Date(date.getFullYear(), date.getMonth()+4, date.getDate());
  var today3 = new Date(date.getFullYear(), date.getMonth()+6, date.getDate());
  var today4 = new Date(date.getFullYear(), date.getMonth()+8, date.getDate());
  var today5 = new Date(date.getFullYear(), date.getMonth()+10, date.getDate());
  var today6 = new Date(date.getFullYear(), date.getMonth()+12, date.getDate());
  var result1 = today.toISOString().split`T`[0];
  var result2 = today2.toISOString().split`T`[0];
  var result3 = today3.toISOString().split`T`[0];
  var result4 = today4.toISOString().split`T`[0];
  var result5 = today5.toISOString().split`T`[0];
  var result6 = today6.toISOString().split`T`[0];
  $('#tgl_tagihan1').datepicker({
    dateFormat:"yy-mm-dd",
showOn : "off",
startDate: today,
endDate: end,
autoclose: true
  });
  $('#tgl_tagihan2').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today2,
endDate: end,
autoclose: true
  });    
  $('#tgl_tagihan3').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today3,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan4').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today4,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan5').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today5,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan6').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today6,
endDate: end,
autoclose: true
  });  
  $('#tgl_tagihan1').datepicker('setDate', result1);
  $('#tgl_tagihan2').datepicker('setDate', result2);
  $('#tgl_tagihan3').datepicker('setDate', result3);
  $('#tgl_tagihan4').datepicker('setDate', result4);
  $('#tgl_tagihan5').datepicker('setDate', result5);
  $('#tgl_tagihan6').datepicker('setDate', result6);
  // 6 bulan end
    break;
    case "12":
        var date = new Date(tanggal);
  var today = new Date(date.getFullYear(), date.getMonth()+12, date.getDate());
  var result1 = today.toISOString().split`T`[0];
  $('#tgl_tagihan1').datepicker({
    dateFormat:"yy-mm-dd",
showOn : "off",
startDate: today,
endDate: end,
autoclose: true
  });
  $('#tgl_tagihan1').datepicker('setDate', result1);
    break;
    default:
    console.log("coba");

}

  // bagi hasil 12 bulan start
  var date = new Date(tanggal);
  var today = new Date(date.getFullYear(), date.getMonth()+1, date.getDate());
  var today2 = new Date(date.getFullYear(), date.getMonth()+2, date.getDate());
  var today3 = new Date(date.getFullYear(), date.getMonth()+3, date.getDate());
  var today4 = new Date(date.getFullYear(), date.getMonth()+4, date.getDate());
  var today5 = new Date(date.getFullYear(), date.getMonth()+5, date.getDate());
  var today6 = new Date(date.getFullYear(), date.getMonth()+6, date.getDate());
  var today7 = new Date(date.getFullYear(), date.getMonth()+7, date.getDate());
  var today8 = new Date(date.getFullYear(), date.getMonth()+8, date.getDate());
  var today9 = new Date(date.getFullYear(), date.getMonth()+9, date.getDate());
  var today10 = new Date(date.getFullYear(), date.getMonth()+10, date.getDate());
  var today11 = new Date(date.getFullYear(), date.getMonth()+11, date.getDate());
  var today12 = new Date(date.getFullYear(), date.getMonth()+12, date.getDate());
  
  var result1 = today.toISOString().split`T`[0];
  var result2 = today2.toISOString().split`T`[0];
  var result3 = today3.toISOString().split`T`[0];
  var result4 = today4.toISOString().split`T`[0];
  var result5 = today5.toISOString().split`T`[0];
  var result6 = today6.toISOString().split`T`[0];
  var result7 = today7.toISOString().split`T`[0];
  var result8 = today8.toISOString().split`T`[0];
  var result9 = today9.toISOString().split`T`[0];
  var result10 = today10.toISOString().split`T`[0];
  var result11 = today11.toISOString().split`T`[0];
  var result12 = today12.toISOString().split`T`[0];
  $('#tgl_bg1').datepicker({
    dateFormat:"yy-mm-dd",
showOn : "off",
startDate: today,
endDate: end,
autoclose: true
  });
  $('#tgl_bg2').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today2,
endDate: end,
autoclose: true
  });    
  $('#tgl_bg3').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today3,
endDate: end,
autoclose: true
  });  
  $('#tgl_bg4').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today4,
endDate: end,
autoclose: true
  });  
  $('#tgl_bg5').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today5,
endDate: end,
autoclose: true
  });  
  $('#tgl_bg6').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today6,
endDate: end,
autoclose: true
  });  
  $('#tgl_bg7').datepicker({
    dateFormat:"yy-mm-dd",
showOn : "off",
startDate: today,
endDate: end,
autoclose: true
  });
  $('#tgl_bg8').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today2,
endDate: end,
autoclose: true
  });    
  $('#tgl_bg9').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today3,
endDate: end,
autoclose: true
  });  
  $('#tgl_bg10').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today4,
endDate: end,
autoclose: true
  });  
  $('#tgl_bg11').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today5,
endDate: end,
autoclose: true
  });  
  $('#tgl_bg12').datepicker({
    dateFormat:"yy-mm-dd",
    showOn : "off",
startDate: today6,
endDate: end,
autoclose: true
  });  
  $('#tgl_bg1').datepicker('setDate', result1);
  $('#tgl_bg2').datepicker('setDate', result2);
  $('#tgl_bg3').datepicker('setDate', result3);
  $('#tgl_bg4').datepicker('setDate', result4);
  $('#tgl_bg5').datepicker('setDate', result5);
  $('#tgl_bg6').datepicker('setDate', result6);
  $('#tgl_bg7').datepicker('setDate', result7);
  $('#tgl_bg8').datepicker('setDate', result8);
  $('#tgl_bg9').datepicker('setDate', result9);
  $('#tgl_bg10').datepicker('setDate', result10);
  $('#tgl_bg11').datepicker('setDate', result11);
  $('#tgl_bg12').datepicker('setDate', result12);
 


  // bagi hasil 12 end

});
</script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url() ?>assets/bs-custom-file-input/bs-custom-file-input.min.js"></script>



<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
<script>
  $(document).on('change','#bayar_pokok',function(){
    var bayar_pokok = $(this).val();
    
    var bayar_jasa = $('#bayar_jasa').val();
    var bayar_bh = $('#bayar_bh').val();
    var tagihan_pokok = $('#jumlah_pokok').val();
    var tagihan_jasa   = $('#jumlah_jasa').val();
    var tagihan_bh = $('#jumlah_bh').val();
    var kembalian_p = $('#kembalian').val();
    var bayar_total = $('#id_bayar_total').val();
    if(tagihan_jasa == undefined){
        var tagihan_jasa = 0;
    }
    if(tagihan_bh == undefined){
        var tagihan_bh = 0;
    }
    if(bayar_bh == undefined){
        var bayar_bh = 0;
    }
    if(bayar_jasa == undefined){
        var bayar_bh = 0;
    }
    if (tagihan_bh == null) {
        var bayar_jasa = 0;
        
    }else if(tagihan_jasa == null  ){
        var tagihan_jasa = 0;
        
    }
    if (bayar_bh == null) {
        var bayar_bh = 0;
        
    }else if(bayar_jasa == null){
        var bayar_jasa = 0;
    }
    if (kembalian_p == null){
        var kembalian_p = 0;
    }
    if (bayar_total== null){
        var bayar_total = 0;
    }
    
    var bayar_total = parseInt(bayar_pokok) + parseInt(bayar_jasa) + parseInt(bayar_bh);
    var total_tagihan = parseInt(tagihan_pokok) + parseInt(tagihan_jasa) + parseInt(tagihan_bh);
    var total_kembalian =  (parseInt(bayar_pokok) + parseInt(bayar_jasa) + parseInt(bayar_bh)) - parseInt(total_tagihan);
    $('#id_tagihan_total').val(total_tagihan);
    $('#id_bayar_total').val(bayar_total);
    $('#kembalian').val(total_kembalian);
    $('#bayar_pokok2').val(bayar_pokok);
});
$(document).on('change','#bayar_jasa',function(){
    var bayar_jasa = $(this).val();
    var bayar_pokok = $('#bayar_pokok').val();
    var total_tagihan = $('#id_tagihan_total').val();
    var tagihan_jasa   = $('#jumlah_jasa').val();
    var total_bayar = $('#id_bayar_total').val();
    var kembalian_p = $('#kembalian').val();
    if (total_tagihan == null) {
        var total_tagihan = 0;
    }
    if (total_bayar == null) {
        var total_tagihan = 0;
    }
    var kembalian = $('#kembalian').val();
    if (kembalian_p == null){
        var kembalian_p = 0;
    }
    if(bayar_pokok == null){
        var bayar_pokok = 0;
    }
    var total_kembalian =(parseInt(bayar_pokok) + parseInt(bayar_jasa)) - parseInt(total_tagihan) ;
    var total_bayar = parseInt(bayar_jasa) + parseInt(total_bayar);
   
    $('#id_bayar_total').val(total_bayar);
    $('#kembalian').val(total_kembalian);
    $('#bayar_jasa2').val(bayar_jasa);
});
$(document).on('change','#keuntungan',function(){
    var keuntungan = $(this).val();
    var persen = $('#persen').val();
    var bh = parseInt(persen)/100;
    var tagihan = parseInt(keuntungan) * bh;
    var tagihan_akhir = parseInt(tagihan);
    $('#jumlah_bh').val(tagihan_akhir);
    $('#jumlah_bh2').val(tagihan_akhir);
    var total_tagihan = $('#id_tagihan_total').val();
    if (total_tagihan == null) {
        var total_tagihan = 0;
    }
    var total_tagihan = parseInt(total_tagihan) + parseInt(tagihan_akhir);
    
    $('#id_tagihan_total').val(total_tagihan);
    
});
$(document).on('change','#bayar_bh',function(){
    var bayar_bh = $(this).val();
    var bayar_pokok = $('#bayar_pokok').val();
    var total_tagihan = $('#id_tagihan_total').val();
    var tagihan_bh   = $('#jumlah_bh').val();
    var total_bayar = $('#id_bayar_total').val();
    var kembalian_p = $('#kembalian').val();
    if (total_tagihan == null) {
        var total_tagihan = 0;
    }
    if (total_bayar == null) {
        var total_bayar = 0;
    }
    var kembalian = $('#kembalian').val();
    if (kembalian_p == null){
        var kembalian_p = 0;
    }
    if(bayar_pokok == null){
        var bayar_pokok = 0;
    }
    var total_kembalian =(parseInt(bayar_pokok) + parseInt(bayar_bh)) - parseInt(total_tagihan) ;
    var total_bayar = parseInt(bayar_bh) + parseInt(total_bayar);
   
    $('#id_bayar_total').val(total_bayar);
    $('#kembalian').val(total_kembalian);
    $('#bayar_bh2').val(bayar_bh);
});

</script>
<script>
$(function() {
    $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM-yy',
        onClose: function(dateText, inst) { 
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });
});
</script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options
});

</script>

<script>
  $(document).on('change','#biy_lain',function(){
    var biy_lain = $(this).val();
    
    var total_pendapatan = $('#tot_pendapatan').val();
    var biy_pengembalian = $('#biy_pengembalian').val();
    var biy_keluarga = $('#biy_keluarga').val();
    var num_biy_lain = Number(biy_lain.replace(/[Rp.]+/g,""));
    var num_total_pendapatan = Number(total_pendapatan.replace(/[Rp.]+/g,""));
    var num_biy_pengembalian = Number(biy_pengembalian.replace(/[Rp.]+/g,""));
    var num_biy_keluarga = Number(biy_keluarga.replace(/[Rp.]+/g,""));
    var total_sisa =  parseInt(num_total_pendapatan) - (parseInt(num_biy_lain) + parseInt(num_biy_pengembalian) + parseInt(num_biy_keluarga));
    $('#sisa_pendapatan').val(total_sisa);
});
</script>
<script>
    $(document).ready(function() {
        $(document).on('change','#nik', function()
        {
            var nik = $(this).val();
            $.ajax({
                url: "<?php echo base_url("administrasi_pegawai/tagihan");?>",
                type: "POST",
                data:{ nik:nik},
                cache: false,
                success: function(data){
                    
                    var data_ang =  JSON.parse(data);
                  
                   
                    for(var i=0;i<data_ang.length;i++){
                        $('#nama').val(data_ang[i].nama_lengkap);
                        $('#tgl_tagihan').val(data_ang[i].tgl_tagihan);
                        $('#jml_tagihan').val(data_ang[i].jml);
                        $('#id_pengajuan').val(data_ang[i].id_pengajuan);
                        $('#id_pengembalian').val(data_ang[i].id_peng);
                        $('#id_angsuran').val(data_ang[i].id_angsuran);
                       
                    }
                   
                }
            });
            
        });
    });
</script>
<script type="text/javascript">
 
            var _validFileExtensions = [".zip", ".rar"];    
                function ValidateSingleInput(oInput) {
                    if (oInput.type == "file") {
                        var sFileName = oInput.value;
                        if (sFileName.length > 0) {
                            var blnValid = false;
                            for (var j = 0; j < _validFileExtensions.length; j++) {
                                var sCurExtension = _validFileExtensions[j];
                                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                                    blnValid = true;
                                    break;
                                }
                            }
                            
                            if (!blnValid) {
                                swal("", "Hanya dapat menerima file zip dan rar", "error");
                                oInput.value = "";
                                return false;
                            }
                        }
                    }
                    return true;
                }
    </script>


</body>
</html>

