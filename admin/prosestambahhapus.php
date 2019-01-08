<?php 
include 'proses.php';
$do = new ClassKamera();
 ?>
<?php 

if (isset($_GET['hapusKategori'])) {
	$id = $_GET['hapusKategori'];
	$do->deleteKota($id);
}else if (isset($_GET['hapusUser'])) {
	$id = $_GET['hapusUser'];
	$do->deleteCustomer($id);
}else if (isset($_GET['hapusHarga'])) {
	$id = $_GET['hapusHarga'];
	$do->deleteHarga($id);
}else if (isset($_GET['hapusMobil'])) {
	$id = $_GET['hapusMobil'];
	$do->deleteMobil($id);
}else if(isset($_GET['hapusPesanan'])){
	$id = $_GET['hapusPesanan'];
	$do->deletePesanan($id);
}
	
 ?>

