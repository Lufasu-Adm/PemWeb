<?php 
session_start(); 
include("connection.php"); 
 
if (!isset($_SESSION["username"])) { 
    header("Location: login.php"); 
    exit(); 
} 
 
if (isset($_GET["nim"])) { 
    $nim = $_GET["nim"]; 
    $query = "SELECT * FROM student WHERE nim = '$nim'"; 
    $result = mysqli_query($connection, $query); 
    $data = mysqli_fetch_assoc($result); 
} else { 
    header("Location: student_view.php"); 
    exit(); 
} 
 
$error_message = ""; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nama = mysqli_real_escape_string($connection, $_POST["nama"]); 
     
    if (empty($error_message)) { 
        $update_query = "UPDATE student SET name='$nama' WHERE nim='$nim'"; 
        $update_result = mysqli_query($connection, $update_query); 
        if ($update_result) { 
            $message = urlencode("Data mahasiswa berhasil diperbarui."); 
            header("Location: student_view.php?message=$message"); 
            exit(); 
        } else { 
            $error_message = "Gagal memperbarui data mahasiswa."; 
        } 
    } 
} 
?> 
 
<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Edit Mahasiswa</title> 
    <link href="assets/style.css" rel="stylesheet"> 
</head> 
<body> 
    <div class="container"> 
        <div id="header"> 
            <h1 id="logo">Edit Mahasiswa</h1> 
        </div> 
        <hr> 
        <?php if (!empty($error_message)) { ?> 
            <div class="error"><?php echo $error_message; ?></div> 
        <?php } ?> 
        <form method="post"> 
            <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>"> 
            <label for="nama">Nama:</label> 
            <input type="text" id="nama" name="nama" value="<?php echo 
$data['name']; ?>"> 
            <button type="submit">Simpan Perubahan</button> 
        </form> 
    </div> 
</body> 
</html> 