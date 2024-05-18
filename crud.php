<?php
function hitungUsia($tanggal_lahir) {
    $tanggal_lahir = new DateTime($tanggal_lahir);
    $sekarang = new DateTime();
    $selisih = $sekarang->diff($tanggal_lahir);
    return $selisih->y;
}
function keteranganUsia($tanggal_lahir) {
    $usia = hitungUsia($tanggal_lahir);
    $tanggal_lahir = date_create($tanggal_lahir);
    $bulan_saat_ini = date('m');
    $bulan_lahir = date_format($tanggal_lahir, 'm');
    if ($usia >= 25) {
        return "Anda sudah dewasa.";
    } elseif ($usia < 25) {
        if ($bulan_saat_ini == $bulan_lahir) {
            return "Selamat ulang tahun! Anda sedang ulang tahun.";
        } else {
            return "Anda belum dewasa.";
        }
    }
}
$tanggal_lahir = "1990-05-15"; 
echo "Usia Anda: " . hitungUsia($tanggal_lahir) . " tahun. ";
echo keteranganUsia($tanggal_lahir);
?>