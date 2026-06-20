<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
$conn,
"SELECT * FROM prestasi
WHERE id='$id'"
);

$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

$nama = $_POST['nama'];
$tahun = $_POST['tahun'];

mysqli_query(
$conn,
"UPDATE prestasi
SET
nama_prestasi='$nama',
tahun='$tahun'
WHERE id='$id'"
);

header("Location:index.php");

}
?>
<form method="POST">

<input
type="text"
name="nama"
value="<?= $row['nama_prestasi']; ?>">

<br><br>

<input
type="number"
name="tahun"
value="<?= $row['tahun']; ?>">

<br><br>

<button
name="update">
Update
</button>

</form>