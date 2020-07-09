<?php
$fp =fopen("pendaftar.txt","a+");

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tempat = $_POST["tempat"];
$birthday= $_POST["birthday"];
$alamat= $_POST["alamat"];
$telp= $_POST["telp"];
$gender= $_POST["gender"];
$prodi= $_POST["prodi"];
$motv= $_POST["motv"];
$namaayah=$_POST["namaayah"];
$jobayah= $_POST["jobayah"];
$namaibu= $_POST["namaibu"];
$jobibu= $_POST["jobibu"];
$penghasilan= $_POST["penghasilan"];

if(!empty($nim) && !empty($nama) && !empty($tempat) &&  !empty($birthday) &&  !empty($alamat) && !empty($telp) && !empty($gender) && !empty($prodi) &&  !empty($motv) && !empty($namaayah) && !empty($jobayah) && !empty($namaibu) &&  !empty($jobibu) && !empty($penghasilan)){

fputs($fp,"$nim | $nama | $tempat  |  $birthday |  $alamat | $telp | $gender | $prodi |  $motv | $namaayah  | $jobayah | $namaibu |  $jobibu | $penghasilan\n");
fclose($fp);

header("location:lihat.php?update=sukses");
	
}else{
	header("location:index.html?gagal");
}
?>
