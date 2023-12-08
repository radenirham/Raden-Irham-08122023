<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
 </head>
 <body>
    <h3>Form Data Diri</h3>
  <table border=0>
  <form action="Hasil.php" method="POST">
   <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type=text name=Nama></td>
   </tr>

   <tr>
    <td>Tempat, Tanggal Lahir</td>
    <td>:</td>
    <td>
        <input type=text name=Tempat size=15>
        <input type=text name=Tgl size=5>/
        <input type=text name=Bln size=5>/
        <input type=text name=Thn size=5>
    </td>
   </tr>

   <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea rows="5" cols="22" name="alamat"></textarea></td>
   </tr>

   <tr>
    <td>No. Telp/HP</td>
    <td>:</td>
    <td><input type=text name=telp></td>
   </tr>
   
   <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type=radio name=JK value=Laki-laki>Laki-laki<input type=radio name=JK value=Perempuan>Perempuan</td>
   </tr>
   
   <tr>
    <td>Agama</td>
    <td>:</td>
    <td> <select name=agama>
    <option name=islam>Islam
    <option name=kristen>Kristen
    <option name=budha>Budha
    <option name=hindu>Hindu
    </select>
    </td>
   </tr>

   <tr>
   <td>Hobi</td>
   <td>:</td>
    <td>
        <input type=radio name="hobi" value="Baca Buku">Baca Buku
        <input type=radio name="hobi" value="Olahraga">Olah Raga
        <input type=radio name="hobi" value="Main Game">Main Game
        <input type=radio name="hobi" value="Hiking">Hiking
    </td>
   </tr>
   
   <tr>
    <td> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="Tampilkan">
    <input type="reset" name="reset" value="Reset"></td>
   </tr>
  </form>
  </table>
 </body>
</html>