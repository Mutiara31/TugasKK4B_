<?php
    include_once("koneksi.php");
    $query= mysqli_query($koneksi, 'SELECT * FROM sewa');
    $row= mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Sewa</title>
</head>
<body>
    <form action="prosesEditSewa.php" method="post">
    <label>Judul Buku</label>
    <div><input type="text" name="input-judul"></div>

    <label>Nama Penyewa</label>
    <div><input type="text" name="input-penyewa"></div>

    <label>Durasi Sewa</label>
    <div><input type="text" name="input-durasi"></div>

    <div><input type="submit" value="Edit Buku" name="tombol-sewa"></div>
    </form>

</body>
</html>