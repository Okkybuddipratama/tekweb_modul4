<html>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body><table style="width:50%">

	<tr>
    <td><b>NIM</b></td>
    <td><?php echo $_POST["NIM"]; ?></td> 
     </tr>
  <tr>
    <td><b>Nama</b></td>
    <td><?php echo $_POST["NAMA"]; ?></td>
    </tr>
  <tr>
    <td><b>Jenis Kelamin<b></td>
    <td><?php echo $_POST["KELAMIN"]; ?></td>
    </tr>
<tr>
    <td><b>Alamat</b></td>
    <td><?php echo $_POST["ALAMAT"]; ?></td>
    </tr>
  <tr>
    <td><b>Program Studi</b></td>
    <td><?php echo $_POST["PRODI"]; ?></td>
     </tr>
<tr>
    <td><b>Bahasa Pemrograman yang dikuasai</b></td>
    <td><?php if (isset($_POST['pilih'])) {

        $pilih=$_POST['pilih'];
		echo "";
        for ($i=0; $i < count($pilih) ; $i++){
            echo $pilih[$i]."<br>";
        }
    }
  ?>
  </td>
</tr>

</table>
</body>
</html>