<?php

include 'koneksi.php';

$data = mysqli_query(
$conn,
"SELECT * FROM prestasi"
);

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="tugas3.css"    >
</head>
<body>

<header>
    <div class="hero-text">
        <h1>Kahlil Gibran Bangun</h1>
        <p> Mahasiswa</p>
        <a href="#portfolio" class="btn">Lihat Portofolio</a>
    </div>

    <div class="hero-img">
        <img src="kg.jpg" alt="Foto Profil">
    </div>
</header>

<section>
    <div class="card">
        <h2>Tentang Saya</h2>
        <p>
            Saya adalah seorang mahasiswa yang memiliki minat dalam pengembangan web dan desain grafis. Saya senang belajar hal-hal baru dan selalu berusaha untuk meningkatkan keterampilan saya. Dalam waktu luang, saya suka membaca buku, menonton film, dan menjelajahi dunia teknologi.
        </p>
    </div>
</section>

<section id="portfolio">
    <section id="prestasi">

<div class="card">

<h2>Prestasi Saya</h2>

<a href="tambah.php" class="btn">
Tambah Prestasi
</a>

<br><br>

<table>

<table>

<tr>
    <th>No</th>
    <th>Prestasi</th>
    <th>Tahun</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;

while($row = mysqli_fetch_assoc($data)){
?>

<tr>

    <td><?= $no++; ?></td>

    <td><?= $row['nama_prestasi']; ?></td>

    <td><?= $row['tahun']; ?></td>

    <td>
        <a href="edit.php?id=<?= $row['id']; ?>">
            Edit
        </a>

        |

        <a href="hapus.php?id=<?= $row['id']; ?>"
           onclick="return confirm('Yakin ingin menghapus?')">
            Hapus
        </a>
    </td>

</tr>

<?php } ?>

</table>

</table>

</div>

</section>
    <div class="card">
        <h2>Keahlian Saya</h2>
        <div class="project-grid">
            <div class="project">
                <h3>Keahlian 1</h3>
                <p>Saya memiliki keahlian dalam membaca situasi dan memahami kebutuhan pengguna.</p>
            </div>
            <div class="project">
                <h3>Keahlian 2</h3>
                <p>Saya adalah orang yang senang belajar hal-hal baru dan selalu berusaha untuk meningkatkan keterampilan saya.</p>
            </div>
            <div class="project">
                <h3>Keahlian 3</h3>
                <p>Saya memiliki kemampuan dalam bekerja sama dengan tim dan komunikasi yang efektif.</p>
            </div>
            <div class="project">
                <h3>Keahlian 4</h3>
                <p>Saya sudah mencapai Immortal Season ini😉 </p>
            </div>
        </div>
    </div>
</section>

</body>
</html>
<section id="todo">
    <div class="card">
        <h2>Daftar Tugas</h2>

        <div class="todo-box">
            <input type="text" id="taskInput" placeholder="Masukkan tugas">
            <button id="addBtn">Tambah</button>
        </div>

        <ul id="taskList"></ul>
    </div>
</section>
<script src="tugas3.js"></script>
<footer>
    © 2026 Portfolio • Kahlil Gibran Bangun
</footer>
