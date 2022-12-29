<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Karyawan Baru | PT Pokoknya</title>
</head>

<body>
	<header>
		<h3>Karyawan yang sudah mendaftar</h3>
	</header>
	
	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Pengalaman</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM calon_karyawan";
		$query = mysqli_query($db, $sql);
		
		while($karyawan = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$karyawan['id']."</td>";
			echo "<td>".$karyawan['nama']."</td>";
			echo "<td>".$karyawan['alamat']."</td>";
			echo "<td>".$karyawan['jenis_kelamin']."</td>";
			echo "<td>".$karyawan['agama']."</td>";
			echo "<td>".$karyawan['pengalaman']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$karyawan['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$karyawan['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>