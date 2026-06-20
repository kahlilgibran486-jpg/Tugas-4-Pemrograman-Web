<!DOCTYPE html>
<html>
<head>

<title>Tambah Prestasi</title>

<link rel="stylesheet"
href="tugas3.css">

</head>

<body>

<section>

<div class="card">

<h2>Tambah Prestasi</h2>

<form method="POST">

<input
type="text"
name="nama"
placeholder="Nama Prestasi"
required>

<br><br>

<input
type="number"
name="tahun"
placeholder="Tahun"
required>

<br><br>

<button
class="btn"
name="simpan">
Simpan
</button>

</form>

</div>

</section>

</body>
</html>
<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

$nama = $_POST['nama'];
$tahun = $_POST['tahun'];

mysqli_query(
$conn,
"INSERT INTO prestasi
(nama_prestasi,tahun)
VALUES
('$nama','$tahun')"
);

header("Location:index.php");

}
?>

<form method="POST">

</form>