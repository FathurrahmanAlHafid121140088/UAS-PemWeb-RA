<?php
session_start();

include("koneksi.php");


// Cek apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect ke halaman dashboard jika sudah login
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan data login dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare(
        "INSERT INTO nama_tabel_pengguna (username, email, password)
        VALUES (?, ?, ?)"
    );

    // Bind parameter ke prepared statement
    $stmt->bind_param("sss", $username, $email, $password);

    // Eksekusi pernyataan persiapan
    $stmt->execute();

    $_SESSION['username'] = $username;

    // Redirect ke halaman login setelah pendaftaran berhasil
    header("Location: login.php");
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="stylebuatakun.css" />
  <title>Form Pendaftaran</title>
</head>
<body>
  <h2>Form Pendaftaran Akun</h2>
  <form action="buatakun.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Daftar">
    <p>Sudah punya akun?
    <center>
			<a class="link" href="login.php">Masuk</a>
			</center>
    </p>
  </form>
</body>
</html>
