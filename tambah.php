<h1>Form Penambahan Data Karyawan</h1>

<form method="post" action="simpan.php" autocomplete="off">

<table>
    <tr>
        <td>NIP</td>
        <td>:</td>
        <td>
            <input type="text" name="nip" placeholder="..." maxlength="10" required autofocus>
        </td>
    </tr>

    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
            <input type="text" name="nama" placeholder="..." maxlength="100" required>
        </td>
    </tr>

    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>
            <select name="jabatan" required>
                <option value="" selected disabled>- pilih -</option>
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
            <textarea name="alamat" rows="5" cols="30" maxlength="200" required></textarea>
        </td>
    </tr>

    <tr>
        <td colspan="3" align="center">
            <input type="submit" name="tambah" value="Simpan">
        </td>
    </tr>
</table>

</form>

<!-- menampilkan tabel karyawan -->
<?php include 'tampil.php'; ?>
