<?php
//membaca tipe notifikasi
function writeMsg($tipe){
	if ($tipe=='data.saved') {
		$MsgClass = "alert-success";
		$Msg = "Data has been saved!";	
	} else 
	if ($tipe == 'data.failed') {
		$MsgClass = "alert-danger";
		$Msg = "Failed to save the data.";
	}
	if ($tipe == 'durasi.error') {
		$MsgClass = "alert-danger";
		$Msg = "Banyak durasi salah.";
	}
	if ($tipe == 'hitung') {
		$MsgClass = "alert-info";
		$Msg = "Silahkan lakukan hitung terlebih dahulu.";
	}

//kode untuk menampilkan notifikasi
echo "<div class=\"alert alert-dismissible ".$MsgClass."\">
  	  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
  	  ".$Msg."
	  </div>";		  
}


//GUIDE
//$tipe = untuk membaca jenis tipe.
//tipe ada 4
// 1. data.saved = untuk menyimpan data
// 2. data.failed = jika data tidak tersimpan
// 3. durasi.error = jika durasi menginap salah
// 4. hitung = jika user tidak menghitung terlebih dahulu.

//$MsgClass = untuk tipe class notifikasi. untuk informasi lebih lanjut silahkan pergi kesini https://getbootstrap.com/docs/4.0/components/alerts/

//$msg = untuk pesan yang akan ditampilkan.
?>