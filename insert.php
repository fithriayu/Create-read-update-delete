<?php
include_once "db.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jkl = $_POST['jkl'];
$agama = $_POST['agama'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$create_at = "current_timestamp()";
$updated_at = "current_timestamp()";
$sql = "INSERT INTO mahasiswa
VALUES( '$nim','$nama', '$alamat','$jkl','$agama','$email', '$pwd', $create_at, $updated_at)";
$simpan = mysqli_query($koneksi, $sql) or die("Error, $sql");
if ($simpan) {
    echo "Sukses";
} else {
    echo "Gagal";
}