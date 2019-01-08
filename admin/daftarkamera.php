<?php 
include 'proses.php';
$do = new ClassKamera();
 ?>
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">

					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">

							<div class="ace-settings-box clearfix" id="ace-settings-box">
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Daftar Kamera
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="hidden-480">Kamera</th>
													<th>Merek</th>
													<th>Tahun</th>
													<th>Jenis</th>
													<th>Warna</th>
													<th>Harga</th>
													<th>Gambar</th>
												</tr>
											</thead>

											<tbody>
											<?php 
											$no = 1;
											foreach ($do->selectKameraMerkHarga() as $value) {
												//$m = $do->selectOneMobil($value[1]);
												//$n = $do->selectOneKota($value[2]);
												//$o = $do->selectOneMerek('namaMerek');
												echo "<tr>
												<td class='hidden-480'>$value[namaMerek]
														
													</td> 
													<td>
														$value[seri]
													</td>
													
													<td>$value[tahun]</td>
													<td>$value[jenis]</td>
													<td>$value[harga]</td>
													<td>$value[warna]</td>
													<td>
														<img src='../gambar/".$value['gambar']."' width='100px' height='100px'/>
													</td>
													</tr>";
												$no++;
											}
											?>
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								<div class="hr hr-18 dotted hr-double"></div>

								

								<div class="hr hr-18 dotted hr-double"></div>

						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
