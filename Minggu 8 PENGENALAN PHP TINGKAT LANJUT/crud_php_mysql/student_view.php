<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Periksa dan atur waktu awal sesi jika belum diatur
if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
} else {
    // Periksa apakah waktu sesi telah berlalu 20 menit (1200 detik)
    $session_expiration = 1200; // Waktu sesi kadaluarsa (dalam detik)
    if (time() - $_SESSION['start_time'] > $session_expiration) {
        // Hapus semua data sesi dan arahkan ke halaman login
        session_unset(); // Hapus semua data sesi
        session_destroy(); // Hapus sesi
        header("Location: login.php");
        exit();
    } else {
        // Perbarui waktu mulai sesi
        $_SESSION['start_time'] = time();
    }
}

include("connection.php");

// Ambil pesan jika ada dari parameter GET
$message = isset($_GET["message"]) ? htmlspecialchars($_GET["message"]) : "";

// Membuat query berdasarkan parameter pencarian
if (isset($_GET["search"])) {
    $search = mysqli_real_escape_string($connection, $_GET["search"]);
    $query = "SELECT * FROM student WHERE nim LIKE '%$search%' OR name LIKE '%$search%' ORDER BY nim ASC";
} else {
    $query = "SELECT * FROM student ORDER BY nim ASC";
}

$result = mysqli_query($connection, $query); // Eksekusi query ke database
if (!$result) {
    die("Query Error: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="assets/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div id="header">
            <h1 id="logo">Data Mahasiswa</h1>
        </div>
        <hr>
        <nav>
            <ul>
                <li><a href="student_view.php">Tampil</a></li>
                <li><a href="student_add.php">Tambah</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <?php if (!empty($message)) : ?>
            <div class="pesan"><?= $message ?></div>
        <?php endif; ?>
        <table border="1">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>IPK</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
            <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= htmlspecialchars($data["nim"]) ?></td>
                    <td><?= htmlspecialchars($data["name"]) ?></td>
                    <td><?= htmlspecialchars($data["birth_city"]) ?></td>
                    <td><?= date("d-m-Y", strtotime($data["birth_date"])) ?></td>
                    <td><?= htmlspecialchars($data["faculty"]) ?></td>
                    <td><?= htmlspecialchars($data["department"]) ?></td>
                    <td><?= htmlspecialchars($data["gpa"]) ?></td>
                    <td><a href="student_edit.php?nim=<?= urlencode($data["nim"]) ?>">Edit</a></td>
                    <td><a href="student_delete.php?nim=<?= urlencode($data["nim"]) ?>">Hapus</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>

<?php
mysqli_free_result($result);
mysqli_close($connection);
?>
