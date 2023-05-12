<!DOCTYPE html>
<html>
<head>
	<title>Cari Barang</title>
</head>
<body>
	<h1>Cari Barang</h1>
	<form action="hasil_cari_barang.php" method="get">
		<label for="keyword">Kata kunci:</label>
		<input type="text" name="keyword"><br><br>
		<input type="submit" value="Cari">
	</form>
	<h2>Barang Populer</h2>
	<ul>
		<?php
		// Koneksi ke database
		$conn = mysqli_connect("localhost", "username", "password", "nama_database");

		// Mendapatkan daftar barang yang populer
		$query = "SELECT barang.id_barang, barang.nama_barang, COUNT(*) AS jumlah_pertukaran FROM barang JOIN tawaran ON barang.id_barang=tawaran.id_barang JOIN pertukaran ON tawaran.id_tawaran=pertukaran.id_tawaran GROUP BY barang.id_barang ORDER BY jumlah_pertukaran DESC LIMIT 10";
		$result = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<li><a href=\"barang.php?id_barang=" . $row['id_barang'] . "\">" . $row['nama_barang'] . "</a></li>";
		}
		?>
	</ul>
</body>
</html>
