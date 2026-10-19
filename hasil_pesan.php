<?php
if (
    $_SERVER["REQUEST_METHOD"] != "POST" ||
    !isset($_POST["nama"]) ||
    !isset($_POST["kelas"]) ||
    !isset($_POST["pesan"])
){
    header("Location: form_pesan.php");
    exit;
}

$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$pesan = $_POST["pesan"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Terkirim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <div class="card">
            <h2>Pesan Berhasil Dikirim!</h2>
            <p><strong>Nama:</strong><?=$nama?></p>
            <p><strong>Kelas:</strong><?=$kelas?></p>
            <p><strong>Pesan / Kesan:</strong><?=$pesan?></p>

            <a href="index.php" class="btn">Kembali ke Daftar Mahasiswa</a>
        </div>
    </div>
</body>
</html>