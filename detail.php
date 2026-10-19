<?php
if (
 !isset($_GET["nim"]) ||
 !isset($_GET["nama"]) ||
 !isset($_GET["jurusan"]) ||
 !isset($_GET["email"]) ||
 !isset($_GET["nilai"]) ||
 !isset($_GET["grade"]) ||
 !isset($_GET["status"])
) {
 header("Location: index.php");
 exit;
}

$nim = htmlspecialchars($_GET["nim"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Detail Mahasiswa</h2>
        <p>Informasi lengkap mahasiswa</p>

        <table>
            <tr>
                <th>NIM</th>
                <td><?=$_GET["nim"]?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?=$_GET["nama"]?></td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td><?=$_GET["jurusan"]?></td>
            </tr>   
            <tr>
                <th>Email</th>
                <td><?=$_GET["email"]?></td>
            </tr> 
            <tr>
                <th>Nilai</th>
                <td><?=$_GET["nilai"]?></td>
            </tr>  
            <tr>
                <th>Grade</th>
                <td><?=$_GET["grade"]?></td>
            </tr>       
            <tr>
                <th>Status</th>
                <td><?=$_GET["status"]?></td>
            </tr>                          
        </table>

        <br>
        <a href="index.php" class="btn">Kembali</a>
    </div>
</body>
</html>