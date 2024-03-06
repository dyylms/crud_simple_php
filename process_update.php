<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_siswa");

// Tangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

// Query untuk memperbarui data di database
$query = "UPDATE user SET nama='$nama', email='$email' WHERE id=$id";
mysqli_query($conn, $query);

// Redirect kembali ke halaman index.php setelah data diperbarui
header("Location: index.php");
exit();
?>
