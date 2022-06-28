<div class="dashboard-finance">
    <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
					<!-- ============================================================== -->
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">Direktur</h3>
                                <p class="pageheader-text">Direktur</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Direktur</li>
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
                           
                        </div>
                    
                            </div>
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
                                    <?php
                                    	$sum = 0;
	$sum1 = 0;
	$sum2 =0;
	$sum3 =0;
	$sum4 = 0;
	$sum5 = 0;
	$sum6 =0;
	$sum7 =0;
	$sum8= 0;
	$sum9 = 0;
	$sum10 =0;
	$sum11 =0;
	$sum12 =0;
		$sum13 =0;
	$sum14 =0;
                                    foreach ($laporan_keuangan_aset_lancar as $i){
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
		
		$sum+= $value;
		} ?>
                                   <?php  foreach ($laporan_keuangan_aset_tetap as $i){
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
		
		$sum1+= $value;
		}
		?>
                                    <div class="col-lg-9 text-right ml-5">
                                        <div class="huge" style="font-size:30px"><?= rupiah($sum1 + $sum) ?></div>
                                        <div style="font-size:30px">Aset Total</div>
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    
                            </div>
                        </div>
                         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card text-white bg-danger">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <?php
                                    foreach ($laporan_keuangan_pendapatan as $i){
		
	
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
		
		
		$sum13+= $value;
		}
			foreach ($laporan_keuangan_beban as $i){
		
	
		$debit = intval($i->jm_debit) + intval($i->jp_debit);
		$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
		$value = intval($debit) - intval($kredit);
	
			
		$sum14+= $value;
		}?>
                                    <div class="col-xs-3 ml-4 mt-2">
                                       <i class="fas fa-comment-dollar fa-5x"></i>
                                       
                                    </div>
                                    <div class="col-lg-9 text-right ml-5">
                                        <div class="huge" style="font-size:30px"><?php 	if($sum13> $sum14){
                                        echo 	rupiah($sum13-$sum14 );
		}else{
	   echo  "(".rupiah(abs($sum13-$sum14) ).")";
		}?></div>
                                        <div style="font-size:30px">Laba/Rugi</div>
                                    </div>
                                </div>
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
                                        <i class="fas fa-coins fa-5x"></i>
                                     
                                    </div>
                                    <?php
                                    foreach ($laporan_keuangan_aset_lancar as $i){
		
		
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
			
		
		$sum1+= $debit;
		$sum2+= $kredit;
		}
		foreach ($laporan_keuangan_aset_tetap as $i){
		
			
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
		
		
		$sum3+= $debit;
		$sum4+= $kredit;
		}
		foreach ($laporan_keuangan_aset_ekuitas as $i){
		
			
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
		
		
		$sum5+= $debit;
		$sum6+= $kredit;
		}
		foreach ($laporan_keuangan_pendapatan as $i){
		
		
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
		
		
		$sum7+= $debit;
		$sum8+= $kredit;
		}
		foreach ($laporan_keuangan_beban as $i){
		
			
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
		
		
		$sum9+= $debit;
		$sum10+= $kredit;
		}
		foreach ($laporan_keuangan_aset_kewajiban as $i){
		
		
			$debit = intval($i->jm_debit) + intval($i->jp_debit);
			$kredit = intval($i->jm_kredit) + intval($i->jp_kredit);
			$value = intval($debit) - intval($kredit);
			$value = abs($value);
			$debit = $debit > $kredit ? $value : "0";
			$kredit = $kredit > $debit ? $value : "0";
		
		
		$sum11+= $debit;
		$sum12+= $kredit;
		}?>
                                    <div class="col-lg-9 text-right ml-5">
                                        <div class="huge" style="font-size:30px"><?= rupiah($sum1+$sum3+$sum5+$sum7+$sum9+$sum11) ?></div>
                                        <div style="font-size:30px">Neraca Saldo</div>
                                    </div>
                                </div>
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
