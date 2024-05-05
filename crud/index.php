<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Belajar CRUD</title>
  </head>
  <body>
    <h1>Halo Belajar</h1>

    <table class="table table-bordered">
    <thead>
    	<tr>
    		<th>No</th>
    		<th>Nama</th>
    		<th>Hobi</th>
    		<th>Alamat</th>
    		<th>Option</th>
    	</tr>
    </thead>
    <?php 
    	include "koneksi.php";
    	$no = 1;
    	$data = mysqli_query($koneksi, "SELECT * FROM siswa");
    	while($d = mysqli_fetch_array($data)){
    ?>
    <tbody>
    	<tr>
    		<td><?php echo $no++; ?></td>
    		<td><?php echo $d['Nama'];?></td>
    		<td><?php echo $d['Hobi'];?></td>
    		<td><?php echo $d['Alamat'];?></td>
    		<td>
    				<a href="edit.php?id=<?php echo $d['ID']; ?>">EDIT</a>
                    <a href ="hapus.php?id=<?php echo $d['ID']; ?>">HAPUS</a>
    		</td>
    	</tr>
		<?php } ?>
    </tbody>
	</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>