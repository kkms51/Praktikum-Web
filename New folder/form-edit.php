<?php 

include("config.php");

if( !isset($_GET['id']) ){
	header('Location: list.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_karyawan WHERE id=$id";
$query = mysqli_query($db, $sql);
$karyawan = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit karyawan | PT Pokoknya</title>
</head>

<body>
	<header>
		<h3>Formulir Edit karyawan</h3>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $karyawan['id'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $karyawan['nama'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $karyawan['alamat'] ?></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<?php $jk = $karyawan['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<?php $agama = $karyawan['agama']; ?>
			<select name="agama">
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
				<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
			</select>
		</p>
		<p>
			<label for="pengalaman">Pengalaman: </label>
			<textarea type="text" name="pengalaman" placeholder="pengalaman" value="<?php echo $karyawan['pengalaman'] ?>"></textarea>
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>