<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_siswa");

// Memeriksa apakah koneksi berhasil atau tidak
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan nilai id dari URL
$id = $_GET['id'];

// Melakukan sanitasi nilai id untuk mencegah serangan SQL Injection
$id = mysqli_real_escape_string($conn, $id);

// Membuat query DELETE menggunakan prepared statement
$query = "DELETE FROM user WHERE id=?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

// Memeriksa apakah query berhasil dijalankan
if (mysqli_affected_rows($conn) > 0) {
    echo "Data telah dihapus.";
} else {
    echo "Gagal menghapus data atau data tidak ditemukan.";
}

// Menutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data</title>
</head>
<body>
    <a href="index.php">Kembali ke Daftar Data</a>
</body>
</html>
