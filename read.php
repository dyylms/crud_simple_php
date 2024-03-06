<?php
$conn = mysqli_connect("localhost", "root", "", "db_siswa");
$id = $_GET['id'];
$query = "SELECT * FROM user WHERE id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Data</title>
</head>
<body>
    <h2>Detail Data</h2>
    <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
    <p><strong>Nama:</strong> <?php echo $row['nama']; ?></p>
    <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
    <a href="index.php">Kembali</a>
</body>
</html>
