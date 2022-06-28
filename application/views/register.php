<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/landing/assets/dist/img/logo.jpeg"/>
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url()?>assets/register/fonts/material-icon/css/material-design-iconic-font.min.css">
	<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <!-- Main css -->
	<link rel="stylesheet" href="<?= base_url()?>assets/register/css/style.css">
	<script src="https://kit.fontawesome.com/85c8c50537.js" crossorigin="anonymous"></script>
	<style>
        .error {
            color: red;
			margin-left: 15px;
        }
    </style>
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
</head>
<body>
<div class="preloader">
        <div class="loading">
            <img src="<?php echo base_url() ?>assets/landing/assets/dist/img/logo.jpeg" width="80">
            <p>Harap Tunggu</p>
        </div>
        </div>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <?php if($this->session->flashdata('gagal')) : ?>
										<div class="alert alert-danger" role="alert">
											Gagal Menyimpan !
										</div>
									<?php endif; ?>
                        <?php if($this->session->flashdata('tanggung')) : ?>
										<div class="alert alert-danger" role="alert">
											Masih mempunyai tanggungan !
										</div>
									<?php endif; ?>            
                        <form method="POST" action="<?= site_url("nasabah/register")?>" class="register-form" id="register">
							<div class="form-group">
                                <label for="name"><i class="fas fa-id-card"></i></label>
                                <input type="text" name="nik" id="nik" placeholder="Masukkan NIK"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Masukkan Username"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Masukkan Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Masukkan Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Masukkan Ulang Password"/>
                            </div>
                            <div class="form-group">
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" class="term-service" data-target="#exampleModal"> 
									Persyaratan
								</button></label>
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
								<label for="agree-term" class="label-agree-term"><span><span></span></span>Saya Setuju  
								
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="btn btn-primary btn-sm" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo base_url() ?>assets/landing/assets/dist/img/logo.jpeg" alt="IMG"></figure>
                        <a href="<?= site_url('login')?>" class="signup-image-link">Saya Sudah Punya Akun <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </section>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Persyaratan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>1. Anda sudah memiliki ktp</p>
					<p>2. Anda merupakan warga desa yang dibawah naungan bumdes bersama "UDB" kecamatan semen.</p>
					<p>3. Anda memiliki kelompok(Arisan,Tahlil, dan sebagainya) aktif didesa dan diakui oleh kades.</p>
					<p>4. Anda tidak sedang dalam memiliki tanggungan pinjaman</p>
					
					
					
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
			</div>
      

    </div>

    <!-- JS -->

	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="<?= base_url()?>assets/register/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) --><script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
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
    $("#register").validate({
        rules: {
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
            nama: {
            required: true,
			minlength:2,
            remote: {
                url: "<?php echo base_url('validasi/cek_username'); ?>",
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
			re_pass: {
            required: true,
			minlength:8,
			password:true,
			equalTo:"#password"
            },
           
        },
        messages: {
			nik: {
            required: "Nik tidak boleh kosong! ",
			minlength: jQuery.validator.format("Minimal {0} karakter"),
			number: "Hanya dapat diisi dengan angka",
			remote:"Nik sudah terdaftar",
            },
            nama: {
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
			re_pass: {
            required: "Re-Password tidak boleh kosong! ",
			minlength:jQuery.validator.format("Minimal {0} karakter"),
			password:true,
			equalTo:"Password tidak sama !"
            },
        }
    });
});
</script>
</html>
