<?php
$mahasiswa = [
    [
        "nim" => "26010",
        "nama" => "Doni Aprilian",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "doni@email.com",
        "nilai" => 95
    ],
    [
        "nim" => "26020",
        "nama" => "Qurot Raini",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "qurot@email.com",
        "nilai" => 58
    ],
    [
        "nim" => "26030",
        "nama" => "Aulia Maharani",
        "jurusan" => "PGPAUD",
        "email" => "aulia@email.com",
        "nilai" => 75
    ],
    [
        "nim" => "26040",
        "nama" => "Dwi Pebri",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "dwi@email.com",
        "nilai" => 80
    ],
    [
        "nim" => "26050",
        "nama" => "Muhammad Athar",
        "jurusan" => "PGSD",
        "email" => "muhammad@email.com",
        "nilai" => 60
    ],
];

function getGrade($nilai) {
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 70) {
        return "B";
    } elseif ($nilai >= 60) {
        return "C";
    } else {
        return "D";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <h2>Daftar Mahasiswa</h2>
                <p>Mini Website PHP Dasar</p>
            </div>

            <a href="form_pesan.php" class="btn">Isi Form Pesan</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>

                    <?php foreach ($mahasiswa as $data): ?>
                        <?php
                        $grade = getGrade($data["nilai"]);
                        $status = $data["nilai"] >= 70
                            ? "Lulus"
                            : "Tidak Lulus";
                        ?>

                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data["nim"] ?></td>
                            <td><?= $data["nama"] ?></td>
                            <td><?= $data["jurusan"] ?></td>
                            <td><?= $data["nilai"] ?></td>
                            <td><?= $grade ?></td>
                            <td class="<?= $status == 'Lulus' ? 'lulus' : 'tidak-lulus' ?>">
                                <?= $status ?>
                            </td>
                            <td>
                                <a href="detail.php?nim=<?= $data['nim'] 
                                ?>&nama=<?= $data['nama'] 
                                ?>&jurusan=<?= $data['jurusan'] 
                                ?>&email=<?= $data['email'] 
                                ?>&nilai=<?= $data['nilai'] 
                                ?>&grade=<?=$grade 
                                ?>&status=<?=$status 
                                ?>" class="btn btn-small">Lihat Detail</a>
                            </td>
                        </tr>

                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>