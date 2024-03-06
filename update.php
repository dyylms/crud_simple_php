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
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form action="process_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
