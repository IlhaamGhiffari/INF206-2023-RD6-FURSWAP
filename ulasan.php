<!DOCTYPE html>
<html>
<head>
	<title>Ulasan</title>
</head>
<body>
	<h1>Beri Ulasan</h1>
	<form action="simpan_ulasan.php" method="post">
		<label for="id_barang">Pilih barang yang ingin diulas:</label>
		<select name="id_barang">
			<?php
			// Koneksi ke database
			$conn = mysqli_connect("localhost", "username", "password", "nama_database");

			// Mendapatkan daftar barang yang pernah ditawarkan atau diterima oleh pengguna yang sedang login
			$id_pengguna = 1; // Contoh saja, Anda harus mengganti nilai ini dengan id pengguna yang sedang login
			$query = "SELECT DISTINCT tawaran.id_barang, tawaran.nama_barang FROM tawaran JOIN pertukaran ON tawaran.id_tawaran=pertukaran.id_tawaran WHERE pertukaran.id_pengguna=$id_pengguna UNION SELECT DISTINCT barang.id_barang, barang.nama_barang FROM barang JOIN tawaran ON barang.id_barang=tawaran.id_barang WHERE tawaran.id_pengguna=$id_pengguna";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<option value=\"" . $row['id_barang'] . "\">" . $row['nama_barang'] . "</option>";
			}
			?>
		</select><br><br>

		<label for="rating">Beri rating:</label>
		<input type="number" name="rating" min="1" max="5"><br><br>

		<label for="ulasan">Beri ulasan:</label><br>
		<textarea name="ulasan" rows="5" cols="50"></textarea><br><br>

		<input type="submit" value="Kirim">
	</form>
</body>
</html>
