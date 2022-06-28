<div class="dashboard-finance">
    <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
					<!-- ============================================================== -->
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">Administrasi</h3>
                                <p class="pageheader-text">Administrasi</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Administrasi</li>
                                        </ol>
                                    </nav>
                                </div>

                                <div class="row">
                        <div class="offset-xl-10 col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                            <form>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="daterange" value="<?= date('d F Y') ?>"/>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card text-white bg-primary">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3 ml-4 mt-2">
                                        <i class="fas fa-hand-holding-usd fa-5x"> </i>
                                    </div>
                                    <div class="col-lg-9 text-right ml-5">
                                        <div class="huge" style="font-size:60px"><?= $pengajuan ?></div>
                                        <div>Jumlah Pengajuan</div>
                                    </div>
                                </div>
                            </div>
                             <div class="card-footer text-center bg-white">
                                    <a href="<?= site_url('administrasi_pegawai/data_pengajuan')?>" class="card-link">View Details</a>
                            </div>
                        </div>
                    
                            </div>
                        </div>
                         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card text-white bg-danger">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3 ml-4 mt-2">
                                       
                                         <i class="fas fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-lg-9 text-right ml-5">
                                        <div class="huge" style="font-size:60px"><?= $nasabah ?></div>
                                        <div>Jumlah Nasabah</div>
                                    </div>
                                </div>
                            </div>
                             <div class="card-footer text-center bg-white">
                                    <a href="<?= site_url('administrasi_pegawai/data_nasabah')?>" class="card-link">View Details</a>
                            </div>
                        </div>
                    
                            </div>
                        </div>
                         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card text-white bg-warning">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3 ml-4 mt-2">
                                        <i class="fas fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-lg-9 text-right ml-5">
                                        <div class="huge" style="font-size:60px"><?= $kelompok ?></div>
                                        <div>Jumlah Kelompok</div>
                                    </div>
                                </div>
                            </div>
                             <div class="card-footer text-center bg-white">
                                    <a href="<?= site_url('administrasi_pegawai/data_kelompok')?>" class="card-link">View Details</a>
                            </div>
                        </div>
                    
                            </div>
                        </div>
                        
                       
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-xl">
                            <div class="card ">
                         <div class="card-header">Grafik Pengajuan</div>
                              <div class="card-body">
                                <canvas id="myChart"></canvas>
                              </div>
                    
                            </div>
                        </div>
                      
                    
                            </div>
                        </div>
                        
                       
                    </div>



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
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [ <?php foreach ($grafik as $i){
					       echo "'".$i->nama."'".","; 
					    }?>],
				datasets: [{
					label: '',
					data: [
					    <?php foreach ($grafik as $i){
					       echo $i->jumlah.","; 
					    }?>],
					backgroundColor: [
					'rgb(42, 26, 187)',
					'rgb(187, 26, 29)',
					'rgb(26, 187, 29)',
					'rgb(7, 53, 8)',
					'rgb(26, 187, 29)',
					'rgb(7, 53, 8)',
					'rgb(26, 187, 29)',
					'rgb(7, 53, 8)'
					],
					borderColor: [
					'rgb(42, 26, 187)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			
		});
	</script>
