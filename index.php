<!DOCTYPE html>
<html>

<head>
    <title>CRUD App</title>
</head>

<body>
    <h2>Daftar Data</h2>
    <a href="create.php">Tambah Data Baru</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "db_siswa");

        // Query untuk mendapatkan data dari tabel
        $result = mysqli_query($conn, "SELECT * FROM user");


        // Tampilkan data
        $nomor = 1; // Inisialisasi nomor urutan di luar loop
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $nomor . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>";
            echo "<a href='read.php?id=" . $row['id'] . "'>Baca</a> | ";
            echo "<a href='update.php?id=" . $row['id'] . "'>Edit</a> | ";
            echo "<a href='delete.php?id=" . $row['id'] . "'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
            $nomor++; // Increment nomor urutan setiap kali loop dilakukan
        }
        ?>
    </table>
</body>

</html>