<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | Data Pendaftaran</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
</head>
<body>
    <header>
        <h1>Siswa Yang Sudah Mendaftar</h1>
        <p>Daftar siswa yang telah terdaftar di SMK UNDIRA</p>
    </header>
    
    <nav>
        <a href="index.php">Kembali</a>
        <a href="form-daftar.php">Tambah Siswa Baru</a>
    </nav>

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    $sql = "SELECT * FROM calon_siswa";
                    $query = mysqli_query($db, $sql);
                    $nomor = 1;


            $no = 1;
            while ($siswa = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".htmlspecialchars($siswa['nama'] ?? '')."</td>";
                echo "<td>".htmlspecialchars($siswa['alamat'] ?? '')."</td>";
                echo "<td>".htmlspecialchars($siswa['agama'] ?? '')."</td>";
                echo "<td>".htmlspecialchars($siswa['sekolah_asal'] ?? '')."</td>";
                echo "<td><a href='edit.php?id=".$siswa['id']."'>Edit</a> | 
                          <a href='hapus.php?id=".$siswa['id']."' onclick='return confirm(\"Yakin ingin menghapus?\");'>Hapus</a></td>";
                echo "</tr>";
            }

            // Jika tidak ada data
            if (mysqli_num_rows($query) == 0) {
                echo "<tr><td colspan='6'>Belum ada siswa yang terdaftar.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

    <script>
        new DataTable('#example');
    </script>
</body>
</html>
