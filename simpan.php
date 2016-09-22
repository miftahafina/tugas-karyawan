<?php
// memanggil koneksi
include "koneksi.php";

// ambil data inputan form
$nip     = htmlspecialchars($_POST['nip']);
$nama    = htmlspecialchars($_POST['nama']);
$jabatan = htmlspecialchars($_POST['jabatan']);
$alamat  = htmlspecialchars($_POST['alamat']);

// query
$query = "INSERT INTO `karyawan` (`nip`, `nama`, `jabatan`, `alamat`)
          VALUES ('$nip', '$nama', '$jabatan', '$alamat');";

// jalankan query
$eksekusi = mysqli_query($db, $query);

// cek insert
if ($eksekusi) {
    exit("<script>window.location = 'tambah.php';</script>");
} else {
    exit("<script>alert('Gagal simpan'); window.location = 'tambah.php'</script>");
}
?>
