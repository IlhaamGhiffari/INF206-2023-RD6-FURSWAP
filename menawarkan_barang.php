<!DOCTYPE html>
<html>
<head>
	<title>Tawarkan Barang</title>
</head>
<body>
	<h1>Tawarkan Barang</h1>
	<form action="proses_tawarkan_barang.php" method="post">
		<label for="barang">Barang yang Ditawarkan:</label>
		<select name="barang">
			<?php
			// Koneksi ke database
			$conn = mysqli_connect("localhost", "username", "password", "nama_database");

			// Mendapatkan daftar barang dari database
			$query = "SELECT * FROM barang";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<option value=\"" . $row['id_barang'] . "\">" . $row['nama_barang'] . "</option>";
			}
			?>
		</select><br><br>
		<label for="jumlah">Jumlah:</label>
		<input type="number" name="jumlah"><br><br>
		<input type="submit" value="Tawarkan">
	</form>
</body>
</html>
