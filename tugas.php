<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $agama = $_POST["agama"];
    $jabatan = $_POST["jabatan"];
    $status = $_POST["status"];
    $jumlah_anak = isset($_POST["jumlah_anak"]) ? $_POST["jumlah_anak"] : 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informasi Pegawai</title>
</head>
<body>
    <div class="container">
        <h2>Informasi Pegawai</h2>
        <p>Nama Pegawai: <?php echo $nama; ?></p>
        <p>Agama: <?php echo $agama; ?></p>
        <p>Jabatan: <?php echo $jabatan; ?></p>
        <p>Status: <?php echo $status; ?></p>
        <p>Jumlah Anak: <?php echo $jumlah_anak; ?></p>
        <a href="index.html">Kembali</a>
    </div>
</body>
</html>