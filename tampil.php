<?php
// memanggil koneksi
include "koneksi.php";

// query
$query = "SELECT * FROM `karyawan` ORDER BY `nip` ASC";

// jalankan query
$eksekusi = mysqli_query($db, $query);

// menampung semua data
$data_karyawan = [];

// set penomoran
$nomor = 1;

while ($row = mysqli_fetch_assoc($eksekusi)) {
    $data_karyawan[] = $row;
}
?>

<!-- menampilkan tabel -->
<h1>Tabel Data Karyawan</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    <?php if (empty($data_karyawan)) : ?>
    <tr>
        <td colspan="6">Tidak Ada data</td>
    </tr>
    <?php else : ?>

    <?php foreach ($data_karyawan as $karyawan) : ?>
    <tr>
        <td><?php echo $nomor++ ?></td>
        <td><?php echo $karyawan['nip'] ?></td>
        <td><?php echo $karyawan['nama'] ?></td>
        <td><?php echo $karyawan['jabatan'] ?></td>
        <td><?php echo $karyawan['alamat'] ?></td>
        <td>
            <a href="hapus.php?nip=<?php echo $karyawan['nip'] ?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach ?>

    <?php endif ?>
</table>
