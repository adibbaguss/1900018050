<html>

<head>
<title>FORM-TUGAS PWEB 11</title>
<style >
	.warning{
		color: #FF0000;
	}
</style>
</head>
<body>
	<?php

$name = $tempat = $birthday = $alamat = $telp = $gender = $prodi = $day = $joby = $gajiy = $motv = $dad = $jobf = $gajif = $mom = $jobm = "";

	if($_SERVER["REQUEST_METHOD"] == "POST" ){


		$name = test_input($_POST["name"]);
		$tempat = test_input($_POST["tempat"]);
		$birthday= test_input($_POST["birthday"]);
		$alamat= test_input($_POST["alamat"]);
		$telp= test_input($_POST["telp"]);
		$gender= test_input($_POST["gender"]);
		$prodi= test_input($_POST["prodi"]);
		$joby =test_input($_POST["joby"]);
		$gajiy= test_input($_POST["gajiy"]);
		$motv= test_input($_POST["motv"]);
	//untuk data ayah
		$dad= test_input($_POST["dad"]);
		$jobf= test_input($_POST["jobf"]);
		$gajif= test_input($_POST["gajif"]);
	//untuk data ibu
		$mom= test_input($_POST["mom"]);
		$jobm= test_input($_POST["jobm"]);
	}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
<center>
<?php
echo "<table border='0'>";
echo "<tr bgcolor='#ddd'>";
echo "<th colspan='3'><h2>HASIL INPUTAN</h2></th>";
echo "</tr>";

	echo "<tr>";
	if(empty($name)){
		echo "<td>Nama</td><td>:</td>" . "<td> <div class='warning'> Masukan inputan nama</div> </td> ";

}else{
		echo "<td>Nama</td><td>:</td><td>" . $name ."</td>";
	}
echo "</tr>";

echo "<tr bgcolor='#ddd'>";
 if(empty($tempat) && empty($birthday)){
	echo "<td>Tempat, Tanggal Lahir</td><td>:</td><td><div class='warning'> Silahkan isi TTL dulu</div></td>";}
	else{
	echo "<td>Tempat, Tanggal Lahir</td><td>:</td><td>" . $tempat ."," . $birthday ."</td>";
	}
echo "</tr>";
echo "<tr>";
 if(empty($alamat)){
	echo "<td>Alamat</td><td>:</td> <td> <div class='warning'>silahkan isi alamat dulu</div></td>";}
else{
	echo "<td>Alamat</td><td>:</td><td>" .$alamat ."</td>";
	}
echo "</tr>";

echo "<tr bgcolor='#ddd'>";
  if(empty($telp)){
  	echo "<td>Telphone</td><td>:</td><td><div class='warning'>Silahkan isi nomer telphone dulu</div></td>";}
  else{
  	echo "<td>Telphone</td><td>:</td><td> ".$telp ."</td>";
  	}
	echo "</tr>";

echo "<tr>";
 if(empty($gender)){
	echo "<td>Jenis kelamin</td><td>:</td><td><div class='warning'>masukan inputan kelamin</div></td>";}
else{
	echo "<td>Jenis kelamin</td><td>:</td><td>".$gender ."</td>";
	}
echo "</tr>";

echo "<tr bgcolor='#ddd'>";
  if(empty($prodi)){
  	 echo "<td>Program Studi</td><td>:</td><td><div class='warning'>masukan inputan prodi</div></td>"; }
	else{
	echo "<td>Program Studi</td><td>:</td><td>". $prodi ."</td>";
	}
	echo "</tr>";
	echo "<tr>";
	if(empty($joby)){
	echo "<td>Pekerjaan</td><td>:</td><td><div class='warning'>masukan inputan Pekerjaan</div></td>"; }
	else{
		echo "<td>Pekerjaan</td><td>:</td><td>" . $joby ."<td>";
	}
	echo "</tr>";

	echo "<tr bgcolor='#ddd'>";
	if(empty($gajiy)){
	echo  "<td>Penghasilan</td><td>:</td></td><div class='warning'>masukan inputan Penghasilan</div> </td>";}
	else{
	echo "<td>Penghasilan</td><td>:</td><td> ". $gajiy ."</td>";
	}
	echo "</tr>";
	echo "<tr>";
	 if(empty($motv)){
	  echo "<td>Motivasi</td><td>:</td><td><div class='warning'>masukan inputan Motivasi</div></td>";}
	else{
	echo "<td>Motivasi</td><td>:</td><td>". $motv ."</td>";
	}
	echo "</tr>";
	echo "<tr bgcolor='#ddd'>";
	 if(empty($dad)){
		echo "<td>Nama Ayah</td><td>:</td><td><div class='warning'>masukan inputan nama ayah</div></td>";}
			else{
	echo "<td>Nama Ayah</td><td>:</td><td>" . $dad ."</td>";
	}
	echo "</tr>";
	echo "<tr>";

	  if(empty($jobf)){
	echo "<td>Pekerjaan Ayah</td><td>:</td><td><div class='warning'>masukan inputan Pekerjaan Ayah</div></td>"; }
	else{
	echo "<td>Pekerjaan Ayah</td><td>:</td><td>" . $jobf ."</td>";
}
echo "</tr>";
echo "<tr bgcolor='#ddd'>";
  if(empty($gajif)){
	 echo "<td>Penghasilan Ayah</td><td>:</td><td><div class='warning'>masukan inputan Penghasilan Ayah</div></td>";}
	else{
	echo "<td>Penghasilan Ayah</td><td>:</td><td>". $gajif ."</td>";
	}
	echo "</tr>";
	echo "<tr>";
	  if(empty($mom)){
	   echo "<td>Nama Ibu</td><td>:</td><td><div class='warning'>masukan inputan nama Ibu</div></td>";}
	else{
	echo "<td>Nama Ibu</td><td>:</td><td> " . $mom ."</td>";
	}
	echo "</tr>";
	echo "<tr bgcolor='#ddd'>";
	  if(empty($jobm)){
	  echo "<td>Pekerjaan Ibu</td><td>:</td><td><div class='warning'>masukan inputan Pekerjaan Ibu</div></td>";}
	else{
	echo "<td>Pekerjaan Ibu</td><td>:</td><td> " . $jobm ."</td>";

	}

?>
</center>

</body>
</html>
