<!DOCTYPE html>
<html>
<head>
	<title>Pengaturan Privasi</title>
</head>
<body>
	<h1>Pengaturan Privasi</h1>
	<form action="simpan_pengaturan.php" method="post">
		<label for="lihat_profil">Siapa yang dapat melihat informasi profil saya?</label><br>
		<input type="radio" name="lihat_profil" value="semua"> Semua orang<br>
		<input type="radio" name="lihat_profil" value="teman"> Hanya teman-teman saya<br>
		<input type="radio" name="lihat_profil" value="saya"> Hanya saya<br><br>

		<label for="lihat_riwayat">Siapa yang dapat melihat riwayat tukar-menukar saya?</label><br>
		<input type="radio" name="lihat_riwayat" value="semua"> Semua orang<br>
		<input type="radio" name="lihat_riwayat" value="teman"> Hanya teman-teman saya<br>
		<input type="radio" name="lihat_riwayat" value="saya"> Hanya saya<br><br>

		<input type="submit" value="Simpan">
	</form>
</body>
</html>
