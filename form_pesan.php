<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <div class="card">
        <h2>Form Pesan Mahasiswa</h2>
        <form action="hasil_pesan.php" method="POST">
            <div class="form-group"><label for="nama">Nama</label>
            <input type="text" id="nama" name="nama"required>
            </div>

            <div class="form-group"><label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas"required>
            </div>

            <div class="form-group"><label for="pesan">Pesan / Kesan</label>
            <textarea id="pesan" name="pesan" rows="4" required></textarea>
            </div>

        <button type="submit" class="btn">Kirim</button>
        <a href="index.php" class="btn btn-back">Kembali</a>
        </form>
        </div>
    </div>
</body>
</html>