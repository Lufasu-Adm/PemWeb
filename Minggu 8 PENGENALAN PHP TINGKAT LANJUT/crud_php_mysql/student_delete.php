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
    // Redirect to student_view.php or show an error message 
    header("Location: student_view.php"); 
    exit(); 
} 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Handle form submission for deleting student data 
    $delete_query = "DELETE FROM student WHERE nim = '$nim'"; 
    $delete_result = mysqli_query($connection, $delete_query); 
    if ($delete_result) { 
        // Redirect to student_view.php with a success message 
        $message = urlencode("Data mahasiswa dengan NIM $nim berhasil 
dihapus."); 
        header("Location: student_view.php?message=$message"); 
        exit(); 
    } else { 
        $error_message = "Gagal menghapus data mahasiswa."; 
    } 
} 
 
?> 
 
<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Hapus Mahasiswa</title> 
    <link href="assets/style.css" rel="stylesheet"> 
</head> 
<body> 
    <div class="container"> 
        <div id="header"> 
            <h1 id="logo">Hapus Mahasiswa</h1> 
        </div> 
        <hr> 
        <?php if (isset($error_message)) { ?> 
            <div class="error"><?php echo $error_message; ?></div> 
        <?php } ?> 
        <p>Anda yakin ingin menghapus data mahasiswa dengan NIM <?php echo 
$data['nim']; ?>?</p> 
        <form method="post"> 
            <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>"> 
            <button type="submit">Ya, Hapus</button> 
        </form> 
