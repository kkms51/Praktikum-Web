<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Karyawan Baru | PT Pokoknya</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Karyawan Baru</h3>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<select name="agama">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Atheis</option>
			</select>
		</p>
		
			<label for="pengalaman">Pengalaman: </label>
			<textarea type="text" name="pengalaman" placeholder="pengalaman">
		
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
