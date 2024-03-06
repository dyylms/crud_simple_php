<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_siswa");

// Tangkap data yang dikirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];

// Query untuk menyimpan data ke database
$query = "INSERT INTO user (nama, email) VALUES ('$nama', '$email')";
mysqli_query($conn, $query);

// Redirect kembali ke halaman index.php setelah data tersimpan
header("Location: index.php");
exit();
?>
