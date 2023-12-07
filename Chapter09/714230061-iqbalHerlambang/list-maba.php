<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+]Tambah Data</a>
    </nav>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Aksi</th> <!-- Perbaikan: Typo pada kata "Aksi" -->
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query( $db,$sql); 

            $no = 1; 
            while ($maba = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $maba['nama'] . "</td>";
                echo "<td>" . $maba['alamat'] . "</td>";
                echo "<td>" . $maba['jenis_kelamin'] . "</td>";
                echo "<td>" . $maba['agama'] . "</td>";
                echo "<td>" . $maba['asal_sekolah'] . "</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=" . $maba['id'] . "'>Edit</a> ";
                echo "<a href='hapus.php?id=" . $maba['id'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
