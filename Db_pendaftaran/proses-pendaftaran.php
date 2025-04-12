<?php
include("config.php");

if (isset($_POST['daftar'])) {

    // Ambil dan bersihkan data dari formulir
    $nama = mysqli_real_escape_string($db, trim($_POST['nama']));
    $alamat = mysqli_real_escape_string($db, trim($_POST['alamat']));
    $jk = mysqli_real_escape_string($db, trim($_POST['jenis_kelamin']));
    $agama = mysqli_real_escape_string($db, trim($_POST['agama']));
    $sekolah = mysqli_real_escape_string($db, trim($_POST['sekolah_asal']));

    // Validasi input tidak boleh kosong
    if ($nama && $alamat && $jk && $agama && $sekolah) {
        // Buat query
        $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
                VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
        $query = mysqli_query($db, $sql);

        // Cek apakah query berhasil
        if ($query) {
            header("Location: list-siswa.php?status=sukses");
            exit;
        } else {
            header("Location: list-siswa.php?status=gagal");
            exit;
        }
    } else {
        header("Location: form-daftar.php?status=invalid");
        exit;
    }
} else {
    die("Akses dilarang...");
}
?>
