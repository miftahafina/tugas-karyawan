<?php
// memanggil koneksi
include "koneksi.php";

$nip = $_GET['nip'];

// query
$query = "SELECT * FROM `karyawan` WHERE `nip` = '$nip'";

// jalankan query
$eksekusi = mysqli_query($db, $query);

// menampung semua data
$data_karyawan = [];

// set penomoran
$nomor = 1;

while ($row = mysqli_fetch_assoc($eksekusi)) {
    $data_karyawan[] = $row;
}

// var_dump($data_karyawan);
?>

<!-- menampilkan form ubah data -->
<h1>Form Ubah Data Karyawan</h1>

<?php if (empty($data_karyawan)) : ?>
<p>
    Data yang diinginkan tidak ada
</p>
<?php else : ?>

<form method="post" action="perbaharui.php" autocomplete="off">

<table>
    <tr>
        <td>NIP</td>
        <td>:</td>
        <td>
            <input type="text" name="nip" placeholder="..." maxlength="10" required autofocus value="<?php echo $data_karyawan[0]['nip'] ?>">
        </td>
    </tr>

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
            <input type="text" name="nama" placeholder="..." maxlength="100" required value="<?php echo $data_karyawan[0]['nama'] ?>">
        </td>
    </tr>

    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>
            <select name="jabatan" required>
                <option value="<?php echo $data_karyawan[0]['jabatan'] ?>" selected><?php echo $data_karyawan[0]['jabatan'] ?></option>
                <optgroup label="-----"></optgroup>
                <option value="CEO">CEO</option>
                <option value="CFO">CFO</option>
                <option value="CTO">CTO</option>
                <option value="COO">COO</option>
                <option value="CPO">CPO</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
            <textarea name="alamat" rows="5" cols="30" maxlength="200" required><?php echo $data_karyawan[0]['alamat'] ?></textarea>
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="tambah" value="Simpan">
        </td>
    </tr>
</table>

</form>
<?php endif ?>
