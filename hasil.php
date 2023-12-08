<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
 </head>

 <body>
 <?php
  $Nama=$_POST['Nama'];
  $Tempat=$_POST['Tempat'];
  $Tgl=$_POST['Tgl'];
  $Bln=$_POST['Bln'];
  $Thn=$_POST['Thn'];
  $JK=$_POST['JK'];
  $alamat=$_POST['alamat'];
  $telp=$_POST['telp'];
  $agama=$_POST['agama'];
  $hobi=$_POST['hobi'];
 ?>
 <table border="1" cellpadding="5" cellspacing="0">
  <tr>
     <td>Nama Lengkap</td>
     <td> <?php echo $Nama ?> </td>
  </tr>
  <tr>
     <td>Tempat, Tanggal Lahir</td>
     <td> <?php echo $Tempat ?>,<?php echo $Tgl ?>/<?php echo $Bln ?>/<?php echo $Thn ?> </td>
  </tr>
  <tr>
     <td>Alamat</td>
     <td> <?php echo $alamat ?> </td>
  </tr>
  <tr>
     <td>No. Telp/HP</td>
     <td> <?php echo $telp ?> </td>
  </tr>
  <tr>
     <td>Jenis Kelamin</td>
     <td> <?php echo $JK ?> </td>
  </tr>
  <tr>
     <td>Agama</td>
     <td> <?php echo $agama ?> </td>
  </tr>
  <tr>
     <td>Hobi</td>
     <td> <?php echo $hobi ?> </td>
  </tr>
 </table>
 </body>
</html>