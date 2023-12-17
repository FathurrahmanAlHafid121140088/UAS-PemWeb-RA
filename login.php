<?php
session_start();

include("koneksi.php");

// Cek apakah pengguna sudah login
if (isset($_SESSION['username'])) {
    header("Location: indeks.php"); // Redirect ke halaman dashboard jika sudah login
    exit();
}

// Cek apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan data login dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan query untuk mendapatkan informasi pengguna berdasarkan email
    $stmt = $conn->prepare("SELECT * FROM nama_tabel_pengguna WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi kata sandi menggunakan password_verify
        if (password_verify($password, $user['password'])) {
            // Set data pengguna dalam session
            $_SESSION['username'] = $user['username'];

            // Redirect ke halaman dashboard setelah login berhasil
            header("indeks.php");
            exit();
        } else {
            $error_message = "Username atau password salah";
        }
    } else {
        $error_message = "Username atau password salah";
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
 
	<h1>Form Login</h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
        <form action="" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="buatakun.php">Buat Akun</a>
			</center>
			<center>
				<a class="link" href="indeks.php">Kembali</a>
			</center>
		</form>
		
	</div>

 
</body>
</html>