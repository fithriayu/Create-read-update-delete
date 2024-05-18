<?php
include "db.php";
$sql="INSERT INTO 'mahasiswa' ('nim', 'nama', 'alamat', 'jkl', 'agama', 'email', 'pwd', 'create_at', 'updated_at') VALUES ('131105', 'novianti', 'dg', 'Wanita', 'islam', 'fgdhf', '131105', current_timestamp(), '2024-04-22 10:44:40')";
if($q){
    echo "Data berhasil disimpan";
}else{
    echo "Gagal penyimpanan data!";
}
?>