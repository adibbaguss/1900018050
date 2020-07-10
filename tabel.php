<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    	<link rel="stylesheet" type="text/css" href="style.css">

    <title> Hasil Isi Formulir Pendaftaran Beasiswa S1</title>
  </head>

  <script type="text/javascript">
  function hapus(){
    var yes = confirm("apakah kamu yakin untuk menghapus semua data ini? ");
    if(yes){
      window.location = "hapus.php";
      alert("SEMUA DATA TELAH DIHAPUS");
      
    }
    else{
      alert("ANDA TIDAK JADI MENGHAPUS DATA");
      window.location = "tabel.php";
    }
  }
</script>

  <body>

    <?php
    $file="pendaftar.txt";
    $fp =fopen($file,"r+");
    echo "<center>";
    echo "<table>";
    while($data =fgets($fp,10000)){
      $pisah =explode("|",$data);

      echo "<tr><th colspan='3'>Data Mahasiswa </th></tr>";
      echo "<tr><td>NIM</td><td>:</td><td>$pisah[0]</td</tr>";
      echo "<tr><td>NAMA</td><td>:</td><td>$pisah[1]</td</tr>";
      echo "<tr><td>Tempat,Tanggal lahir</td><td>:</td><td>$pisah[2] , $pisah[3]</td</tr>";
      echo "<tr><td>Alamat</td><td>:</td><td>$pisah[4]</td</tr>";
      echo "<tr><td>Telpon</td><td>:</td><td>$pisah[5]</td</tr>";
      echo "<tr><td>Kelamin</td><td>:</td><td>$pisah[6]</td</tr>";
      echo "<tr><td>Program Studi</td><td>:</td><td>$pisah[7]</td</tr>";
      echo "<tr><td>Motivasi</td><td>:</td><td>$pisah[8]</td</tr>";
      echo "<tr><td>Nama Ayah</td><td>:</td><td>$pisah[9]</td</tr>";
      echo "<tr><td>Pekerjaan Ayah</td><td>:</td><td>$pisah[10]</td</tr>";
      echo "<tr><td>Nama Ibu</td><td>:</td><td>$pisah[11]</td</tr>";
      echo "<tr><td>Pekerjaan Ibu</td><td>:</td><td>$pisah[12]</td</tr>";
      echo "<tr><td>Jumlah Penghasilan Keduannya</td><td>:</td><td>$pisah[13]</td</tr>";
      echo "<tr><td colspan='2' >&nbsp;</td></tr>";


    }


    echo "</table>";
     
    fclose($fp);
 echo "MAU HAPUS DATA?<div><button class='hapus'  a onclick='hapus()' >HAPUS</button></div><br><br>";
    echo "<div class='tombol'><a href='index.html'> klik disini </a></div>UNTUK MENGISI DATA MAHASISWA ";
      echo "</center>";
    echo "<br><br><br>";



    ?>


  </body>
</html>
