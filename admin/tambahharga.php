<?php 
include 'proses.php';
$do = new ClassKamera();
 ?>
  <style type="text/css">
	#container{
		padding: 10px;
	}
	h2{
		background-color: #eaeaea;
		padding: 10px;
	}
	.submit{
		margin-top: 10px;
		background-color: #eaeaea;
		padding: 5px;
		margin-bottom: 20px;
	}

</style>
 <div id="container">
		<div id="mobil">
		<form method="post">
		<h2>HARGA SEWA KAMERA</h2>
			 <table>
			 	<tr><td width="100">Kamera</td>
				<td width="20">:</td>
						<td>
							<select name="kamera">
								<?php
								foreach ($do->selectKamera() as $val) {
									echo "<option value='$val[0]'>$val[4]</option>";
								}
								?>
							</select>
						</td></tr>
				<tr><td width="100">Kategori</td>
				<td width="20">:</td>
						<td>
							<select name="kota">
								<?php
								foreach ($do->selectKategori() as $val) {
									echo "<option value='$val[0]'>$val[1]</option>";
								}
								?>
							</select>
						</td></tr>
				<tr><td width="100">Harga</td><td width="20">:</td><td><input type="text" class="input" size="50" name="harga" /> </td></tr>
				<tr><td width="100"></td><td width="20"></td><td><input type="submit" class="submit" value="Tambah Harga" name="tambahHarga" /> 
				<input type="reset" class="submit" value="reset"/></td></tr>
			 </table>
		</form>
		<?php
		if(isset($_POST['tambahHarga'])){
			$kamera = $_POST['kamera'];
			$tipe = $_POST['kategori'];
			$harga = $_POST['harga'];
			$do->insertHarga($kamera,$tipe,$harga);
		}	
		?>
 <div class="main-content">
				<div class="main-content-inner">

					<div class="page-content">						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="hidden-480">No</th>
													<th>Seri Kamera</th>
													<th>Tipe</th>
													<th>Harga</th>
													<th>Pengaturan</th>
												</tr>
											</thead>

											<tbody>
											<?php 
											$no = 1;
											foreach ($do->selectHarga() as $value) {
											$m = $do->selectSatuKamera($value[1]);
											$n = $do->selectTipe($value[2]);
												echo "<tr>
												<td class='hidden-480'>$no
														
													</td> 
													<td>
														$m[seri]
													</td>
													<td>$n[1]</td>
													<td>$value[3]</td>
													<td>
														<div class='hidden-sm hidden-xs btn-group'>
															<a href='prosestambahhapus.php?hapusHarga=$value[0]'>
															<button class='btn btn-xs btn-danger' name='hapus'>
																<i class='ace-icon fa fa-trash-o bigger-120'></i>
															</button>
															</a>
														</div>
														
														<div class='hidden-sm hidden-xs btn-group'>
															<a href='prosestambahhapus.php?editHarga=$value[0]'>
															<button class='btn btn-xs btn-info' name='ubah'>
																<i class='ace-icon fa fa-gear bigger-120'></i>
															</button>
															</a>
														</div>

														<div class='hidden-md hidden-lg'>
															<div class='inline pos-rel'>

																<ul class='dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close'>

																	<li>
																		<a href='#' class='tooltip-error' data-rel='tooltip' title='Delete'>
																			<span class='red'>
																				<i class='ace-icon fa fa-trash-o bigger-120'></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
													</tr>";
													$no++;
											}

											?>
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->