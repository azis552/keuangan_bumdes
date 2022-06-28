
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js" integrity="sha512-sR3EKGp4SG8zs7B0MEUxDeq8rw9wsuGVYNfbbO/GLCJ59LBE4baEfQBVsP2Y/h2n8M19YV1mujFANO1yA3ko7Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js" integrity="sha512-sR3EKGp4SG8zs7B0MEUxDeq8rw9wsuGVYNfbbO/GLCJ59LBE4baEfQBVsP2Y/h2n8M19YV1mujFANO1yA3ko7Q==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="<?php echo base_url() ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/inputmask/css/inputmask.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
	<script type="text/javascript">
        $(function() {
            var tanggal = $('#tgl_tagihan').val();
            $('.date-picker').datepicker( {
            dateFormat:"yy-mm-dd",
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
        .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 446px;
        cursor: pointer;
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
                        
                         <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
								
                                    <h5 class="mb-0 text-white nav-user-name"><?= $this->fungsi->user_login_n()->username?> </h5>
                                    <span class="status"></span><span class="ml-2">Nasabah</span>
                                </div>
								<a class="dropdown-item" href="<?=site_url('nasabah/data_profil')?>"><i class="fas fa-user-circle mr-2"></i>Profil</a>
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
                            
                         
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('nasabah')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-tachometer-alt"></i>Dashboard </a>
                            </li> 
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('nasabah/kelompok')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-users"></i>Kelompok </a>
							</li>      
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('nasabah/pengajuan')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-donate"></i>Pengajuan </a>
							</li>   
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('nasabah/riwayat_pengajuan')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fab fa-fw fa-wpforms"></i>Riwayat Pengajuan </a>
							</li>   
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= site_url('nasabah/riwayat_angsuran')?>" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-clipboard"></i>Riwayat Angsuran </a>
							</li>
                               
                                           
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
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
    </script>
    <script>
$(document).ready(function () {
   
    $("#besaran").inputmask({
        prefix : 'Rp ',
            radixPoint: ',',
            groupSeparator: ".",
            alias: "numeric",
            autoGroup: true,
            digits: 0

    });
    $("#besaran_per").inputmask({
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
    $("#tambah_anggota_1").validate({
        rules:{
            posisi:{
                required:true,
                minlength:3,
            },
        },
        messages:{
            posisi:{
                required:"Posisi Harus Diisi",
                minlength:jQuery.validator.format("Minimal {0} karakter")
            },
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
    $("#edit_kelompok").validate({
        rules:{
            nama_kelompok:{
                required:true,
                minlength:3,
            },
            tanggal_berdiri:{
                required:true,
            },
        },
        messages:{
            nama_kelompok:{
                required:"Nama Kelompok Harus Diisi",
                minlength:jQuery.validator.format("Minimal {0} karakter")
            },
            tanggal_berdiri:{
                required:"Tanggal Berdiri Harus Diisi"
            },
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
    $("#edit_nasabah").validate({
        rules: {
            nama: {
            required: true,
			minlength:2,
			lettersonly:true,
            },
            jenis_kelamin:{
                required:true,
            },
            tempat_lahir:{
                required: true,
                minlength: 3,
            },
            tanggal_lahir:{
                required:true,
            },
            status_keluarga:{
                required:true,
            },
            jumlah_tanggungan:{
                required: true,
                number:true,
            },
            status_tempat_tinggal:{
                required:true,
            },
            desa:{
                required:true,
            },
            lama_tinggal:{
                required:true,
                number:true,
            },
            alamat:{
                required:true,
                minlength:10,
            },
            kode_pos:{
                required:true,
                minlength:4,
            },
            telepon:{
                required:true,
                minlength:11,
                number:true,
            },
            pekerjaan:{
                required:true,
                minlength:3,
            },
            jabatan:{
                required:true,
                minlength:3,
            },
			
           
        },
        messages: {
            nama: {
            required: "Nama tidak boleh kosong! ",
			minlength:jQuery.validator.format("Minimal {0} karakter")
            },
            jenis_kelamin:{
                required:"Silahkan pilih jenis kelamin anda",
            },
            tempat_lahir:{
                required: "Tempat lahir tidak boleh kosong!",
                minlength: jQuery.validator.format("Minimal {0} karakter")
            },
            tanggal_lahir:{
                required:"Masukkan tanggal lahir anda",
            },
            status_keluarga:{
                required:"Silahkan pilih status keluarga",
            },
            jumlah_tanggungan:{
                required: "Jumlah tanggungan tidak boleh kosong!",
                number:"Hanya menerima masukkan angka",
            },
            status_tempat_tinggal:{
                required:"Silahkan pilih status keluarga"
            },
            desa:{
                required:"Silahkan pilih desa anda"
            },
            lama_tinggal:{
                required: "Lama tinggal tidak boleh kosong!",
                number:"Hanya menerima masukkan angka",
            },
            alamat:{
                required:"Alamat tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
            },
            kode_pos:{
                required:"Kode pos tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
            },
            telepon:{
                required:"Telepon tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
                number:"Hanya menerima masukkan angka",
            },
            pekerjaan:{
                required:"Pekerjaan tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
            },
            jabatan:{
                required:"Jabatan tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
            },
			
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
    $("#tambah_anggota").validate({
        rules: {
            nama: {
            required: true,
			minlength:2,
			lettersonly:true,
            },
            jenis_kelamin:{
                required:true,
            },
            tempat_lahir:{
                required: true,
                minlength: 3,
            },
            tanggal_lahir:{
                required:true,
            },
            status_keluarga:{
                required:true,
            },
            jumlah_tanggungan:{
                required: true,
                number:true,
            },
            status_tempat_tinggal:{
                required:true,
            },
            desa:{
                required:true,
            },
            lama_tinggal:{
                required:true,
                number:true,
            },
            alamat:{
                required:true,
                minlength:10,
            },
            kode_pos:{
                required:true,
                minlength:4,
            },
            telepon:{
                required:true,
                minlength:11,
                number:true,
            },
            pekerjaan:{
                required:true,
                minlength:3,
            },
            jabatan:{
                required:true,
                minlength:3,
            },
			nik: {
            required: true,
			minlength:16,
			number:true,
			remote: {
                url: "<?php echo base_url('validasi/cek_nik'); ?>",
                type: "post",
				data: {
                    title: function () {
                     return $("#nik").val();
                        }
                    }
            },
            },
            username: {
            required: true,
			minlength:2,
			lettersonly:true,
            remote: {
                url: "<?php echo base_url('validasi/cek_username2'); ?>",
                type: "post",
				data: {
                    title: function () {
                     return $("#name").val();
                        }
                    }
            }
            },
			email: {
            required: true,
			minlength:4,
			email:true,
			remote: {
                url: "<?php echo base_url('validasi/cek_email'); ?>",
                type: "post",
				data: {
                    title: function () {
                     return $("#email").val();
                        }
                    }
            }
            },
			password: {
            required: true,
			minlength:8,
			password:true,
            },
            posisi: {
            required: true,
			minlength:3,
            },
           
        },
        messages: {
            nama: {
            required: "Nama tidak boleh kosong! ",
			minlength:jQuery.validator.format("Minimal {0} karakter")
            },
            jenis_kelamin:{
                required:"Silahkan pilih jenis kelamin anda",
            },
            tempat_lahir:{
                required: "Tempat lahir tidak boleh kosong!",
                minlength: jQuery.validator.format("Minimal {0} karakter")
            },
            tanggal_lahir:{
                required:"Masukkan tanggal lahir anda",
            },
            status_keluarga:{
                required:"Silahkan pilih status keluarga",
            },
            jumlah_tanggungan:{
                required: "Jumlah tanggungan tidak boleh kosong!",
                number:"Hanya menerima masukkan angka",
            },
            status_tempat_tinggal:{
                required:"Silahkan pilih status keluarga"
            },
            desa:{
                required:"Silahkan pilih desa anda"
            },
            lama_tinggal:{
                required: "Lama tinggal tidak boleh kosong!",
                number:"Hanya menerima masukkan angka",
            },
            alamat:{
                required:"Alamat tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
            },
            kode_pos:{
                required:"Kode pos tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
            },
            telepon:{
                required:"Telepon tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
                number:"Hanya menerima masukkan angka",
            },
            pekerjaan:{
                required:"Pekerjaan tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
            },
            jabatan:{
                required:"Jabatan tidak boleh kosong!",
                minlength:jQuery.validator.format("Minimal {0} karakter"),
            },
            nik: {
            required: "Nik tidak boleh kosong! ",
			minlength: jQuery.validator.format("Minimal {0} karakter"),
			number: "Hanya dapat diisi dengan angka",
			remote:"Nik sudah terdaftar",
            },
            username: {
            required: "Username tidak boleh kosong! ",
			minlength:jQuery.validator.format("Minimal {0} karakter"),
			remote:"Username telah digunakan (gunakan kombinasi angka)"
            },
			email: {
            required: "email tidak boleh kosong! ",
			minlength:jQuery.validator.format("Minimal {0} karakter"),
			email:"Format email haru benar, contoh abx@gmail.com",
			remote:"Email telah terdaftar",
            },
			password: {
            required:"Password tidak boleh kosong! ",
			minlength:jQuery.validator.format("Minimal {0} karakter"),
			password:true,
            },
            posisi: {
            required: "Posisi tidak boleh kosong! ",
			minlength:jQuery.validator.format("Minimal {0} karakter"),
            },
			
        }
    });
});
</script>
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>

<script type="text/javascript">
        $(document).ready(function(){
 
            $('#nik_anggota').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('nasabah/data_nas_pengajuan');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<input value='+data[i].nama_lengkap>';
                        }
                        $('#coba').html(html);
 
                    }
                });
                return false;
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

<script>
$(document).ready(function(){
    $(document).on('click','#edit_anggota_kel', function(){
        var nik = $(this).data('nik');
        var nama = $(this).data('nama');
        var posisi = $(this).data('posisi');
        $('#nik_edit').val(nik);
        $('#nama_edit').val(nama);
        $('#posisi_edit').val(posisi);
        
  
    });
    $(document).on('click','#edit_pengajuan_pem', function(){
        var nik = $(this).data('nik');
        var nama = $(this).data('nama');
        var besaran = $(this).data('besaran');
        $('#nik_edit').val(nik);
        $('#nama_edit').val(nama);
        $('#besaran_edit').val(besaran);
        $(document).off('focusin.modal');
        
  
    });
    
    
})


</script> 

</body>
</html>
