<?php

$deskripsi = $_POST['deskripsi'] ?? '';
$lokasi = $_POST['lokasi'] ?? '';

?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Data Laporan FloodSense</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h2>Data Laporan Banjir</h2>

<p><b>Deskripsi:</b> <?php echo $deskripsi; ?></p>

<p><b>Lokasi:</b> <?php echo $lokasi; ?></p>

<br>

<a href="tugas2 laporan.php">Tambah Laporan Lagi</a>

</body>
</html>