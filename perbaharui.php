<?php
// memanggil koneksi
include "koneksi.php";

// ambil data inputan form
$nip     = htmlspecialchars($_POST['nip']);
$nama    = htmlspecialchars($_POST['nama']);
$jabatan = htmlspecialchars($_POST['jabatan']);
$alamat  = htmlspecialchars($_POST['alamat']);

$nip_lama     = htmlspecialchars($_POST['nip_lama']);

// query
$query = "UPDATE `karyawan`
          SET `nip` = '$nip', `nama` = '$nama', `jabatan` = '$jabatan', `alamat` = '$alamat'
          WHERE `karyawan`.`nip` = '$nip_lama';";

// jalankan query
$eksekusi = mysqli_query($db, $query);

// cek pembaharuan
if ($eksekusi) {
    exit("<script>window.location = 'tambah.php';</script>");
} else {
    exit("<script>alert('Gagal memperbaharui'); window.location = 'tambah.php'</script>");
}
?>
