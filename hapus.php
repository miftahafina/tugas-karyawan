<?php
// memanggil koneksi
include "koneksi.php";

// ambil data dari url
$nip = htmlspecialchars($_GET['nip']);

// query
$query = "DELETE FROM `karyawan` WHERE `karyawan`.`nip` = '$nip';";

// jalankan query
$eksekusi = mysqli_query($db, $query);

// cek insert
if ($eksekusi) {
    exit("<script>window.location = 'tampil.php';</script>");
} else {
    exit("<script>alert('Gagal hapus'); window.location = 'tampil.php'</script>");
}
?>
