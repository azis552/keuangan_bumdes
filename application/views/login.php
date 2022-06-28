<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="<?= base_url()?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/landing/assets/dist/img/logo.jpeg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/login/css/main.css">
<!--===============================================================================================-->
</head>
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
<body>
	<div class="preloader">
        <div class="loading">
            <img src="<?php echo base_url() ?>assets/landing/assets/dist/img/logo.jpeg" width="80">
            <p>Harap Tunggu</p>
        </div>
        </div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url() ?>assets/landing/assets/dist/img/logo.jpeg" alt="IMG">
				</div>
				
				<form action="<?=site_url('auth/login')?>" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Login
					</span>
					<?php if($this->session->flashdata('simpan')) : ?>
										<div class="alert alert-success" role="alert">
											Pendaftaran Berhasil, Cek email aktivasi akun anda
										</div>
									<?php endif; ?>
									<?php if($this->session->flashdata('kirim_email')) : ?>
										<div class="alert alert-success" role="alert">
											Silahkan Cek Email Anda 
										</div>
									<?php endif; ?>
									<?php if($this->session->flashdata('salah_input')) : ?>
										<div class="alert alert-danger" role="alert">
											Username atau Password anda salah !
										</div>
									<?php endif; ?>
									<?php if($this->session->flashdata('input_kosong')) : ?>
										<div class="alert alert-danger" role="alert">
											Tidak Boleh Ada Yang Kosong !
										</div>
									<?php endif; ?>
									<?php if($this->session->flashdata('hak_akses_kosong')) : ?>
										<div class="alert alert-danger" role="alert">
											Hak Akses Harus Dipilih !
										</div>
									<?php endif; ?>
									<?php if($this->session->flashdata('tidak_aktif')) : ?>
										<div class="alert alert-danger" role="alert">
											Akun Belum Aktif
										</div>
									<?php endif; ?>
									<?php if($this->session->flashdata('akun_aktif')) : ?>
										<div class="alert alert-success" role="alert">
											Akun telah aktif, silahkan login
										</div>
									<?php endif; ?>
									<?php if($this->session->flashdata('gagal_aktif')) : ?>
										<div class="alert alert-danger" role="alert">
											Akun Belum Aktif
										</div>
									<?php endif; ?>
									<?php if($this->session->flashdata('captha_salah')) : ?>
										<div class="alert alert-danger" role="alert">
											Captha Salah
										</div>
									<?php endif; ?>
					<div class="wrap-input100 " >
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 " >
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100" style="margin-left:35px;" >
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="customRadioInline1" name="posisi" class="custom-control-input" value="Nas">
							<label class="custom-control-label" for="customRadioInline1">Nasabah</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline ">
							<input type="radio" id="customRadioInline2" name="posisi" class="custom-control-input" value="Peg">
							<label class="custom-control-label" for="customRadioInline2">Pegawai</label>
						</div>
					</div>
					<?php $val1 = rand(1,30); ?>
					<?php $val2 = rand(1,30); ?>
					<hr>
					<div class="row ml-3">
						<p><?=$val1?> ditambah <?=$val2?> berapa hasilnya ?</p>
					</div>
					<input type="hidden" value="<?= $val1+$val2 ?>" name="captha">
					<div class="mt-2 ml-3">
						<input type="text" placeholder="Masukkan Jawaban" name="hasil_captha" class="form-control">
					</div>					
					
					<div class="container-login100-form-btn">
						<button name="login" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="<?=site_url('login/lupa_sandi')?>">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-15">
						<a class="txt2" href="<?=site_url('login/daftar')?>">
							Daftar 
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url()?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets/login/js/main.js"></script>
<script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
    </script>
</body>
</html>
