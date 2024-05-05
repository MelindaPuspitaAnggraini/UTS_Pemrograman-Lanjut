<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
?>	
<form method="post" action="update.php">
			<table>
					<tr>			
						<td>Nama</td>
						<td>
							<input type="hidden" name="id" value="<?php echo $d['ID']; ?>">
							<input type="text" name="nama" value="<?php echo $d['Nama']; ?>">
						</td>
					</tr>
					<tr>
						<td>Hobi</td>
						<td><input type="text" name="hobi" value="<?php echo $d['Hobi']; ?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" value="<?php echo $d['Alamat']; ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN"></td>
					</tr>		
				</table>
			</form>	
		<?php } ?>
		
	</body>
</html>