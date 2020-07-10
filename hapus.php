<?php

  $file="pendaftar.txt";
  $fl=fopen($file,"r+");

  $fl=fopen($file,"w+");
  $data=null;

  fwrite($fl,$data,strlen($data));
  fclose($fl);

  header("location:tabel.php?update=hapus")
  ?>