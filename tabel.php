<?php
// Mulai session
session_start();

// Set nilai session jika belum ada
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$logged_in_user = isset($_SESSION['username']) ? $_SESSION['username']:null;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabel</title>
    <script
      src="https://kit.fontawesome.com/c8e4d183c2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="styletabel.css" />
    <link rel="stylesheet" type="text/js" href="javascript.js" />
  </head>
  <body>
    <nav>
      <img
        class="logo"
        src="https://raw.githubusercontent.com/FathurRA4/Asset-gambar/main/logo.jpg"
        height="75"
        width="75"
      />
      <p>Tabel</p>
      <?php if (isset($logged_in_user)) { ?>
                <!-- Tampilkan menu setelah login -->
                <div class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="form.php">Form</a></li>
                <li><a href="tabel.php">Tabel</a></li>
                <li class="menu_akun">
                    </div>
                    <div class="akun">
                        <p>User: <?php echo $logged_in_user; ?></p>
                        <a href="logout.php">Logout</a>
                    </div>
                </li>
            <?php } else { ?>
                <!-- Tampilkan menu sebelum login -->
                <div class="navbar2">
                <li><a href="index.php" onclick="showAlert()">Home</a></li>
                <li><a href="form.php" onclick="showAlert()">Form</a></li>
                <li><a href="tabel.php" onclick="showAlert()">Tabel</a></li>
                <li class="menu_akun">
                    </div>
                    <div class="akun">
                        <a href="buatakun.php">Buat Akun</a>
                        <a href="login.php">Login</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <div class="table">
      <h2>
        Tabel Preferensi <br />
        Player Genshin Impact
      </h2>
      <?php
include("koneksi.php");
$sql = "SELECT * FROM data_player";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data baris per baris
    echo
    "
    <table border='1'>
    <tr>
    <th>No</th>
    <th>Nickname</th>
    <th>UID</th>
    <th>Level</th>
    <th>Device</th>
    <th>Character</th>
    <th>Weapon</th>
    <th>Element</th>
    </tr>";
    // Tampilkan setiap baris data
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nickname"] . "</td><td>" . $row["uid"] . "</td><td>" . $row["level"] . "</td><td>" . $row["device"] . "</td><td>" . $row["character_name"] . "</td><td>". $row["weapon"] . "</td><td>". $row["element"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p style='font-weight: bold; color: #fff; margin-left: 10px;'>Tidak Ada Data Dalam Tabel </p>";
}
?>
    </div>
    <h2>Pencarian Data</h2>
<form class="cari" method="get" action="">
<input type="text" name="uid" placeholder="Masukkan UID..." required>
    <input type="submit" class="tombol_login" value="Cari">
</form>

<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['uid'])) {
        $uid = $_GET['uid'];

        // Prepared statement untuk menghindari SQL Injection
        $sql = "SELECT * FROM data_player WHERE uid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $uid);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<p style='font-weight: bold; color: #fff; margin-left: 10px;'>Data Ditemukan: </p>";
            echo "<table border='1'>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Uid</th>
                    <th>Level</th>
                    <th>device</th>
                    <th>Character</th>
                    <th>Weapon</th>
                    <th>Element</th>
                </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["nickname"] . "</td>
                    <td>" . $row["uid"] . "</td>
                    <td>" . $row["level"] . "</td>
                    <td>" . $row["device"] . "</td>
                    <td>" . $row["character_name"] . "</td>
                    <td>" . $row["weapon"] . "</td>
                    <td>" . $row["element"] . "</td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "Data dengan UID '$uid' tidak ditemukan.";
        }

        // Tutup statement dan koneksi setelah penggunaan
        $stmt->close();
        $conn->close();
    }
}
?>
<h2>Hapus Data</h2>
<form class="cari" method="get" action="">
    <input type="text" name="id" placeholder="Masukkan No Urut Data..." required>
    <input type="submit" class="tombol_login" value="Hapus">
</form>

<?php 
include("koneksi.php");

if (isset($_GET['id'])) {
    $delete_id = intval($_GET['id']);

    $delete_query = "DELETE FROM data_player WHERE id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param('i', $delete_id);
    
    if ($stmt->execute()) {
        echo "<p style='font-weight: bold; color: #fff; margin-left: 10px;'>Data Berhasil Dihapus </p>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>


  </body>
  <footer>
    <p>Hubungi Saya:</p>

    <!--paragraph-->
    <p>Contact me through the Social Media below:</p>
    <!--social-->
    <div class="social-icons">
      <a href="08877246401"><i class="fa fa-whatsapp"></i></a>
      <a href="https://www.instagram.com/fathurr.ra/"
        ><i class="fa fa-instagram"></i
      ></a>
      <a href="https://www.linkedin.com/in/fathurrahman-al-hafid-a21a7a246/"
        ><i class="fa fa-linkedin"></i
      ></a>
      <a
        href="https://mobile.facebook.com/fathur.rahman.99?eav=AfbnUJluA5KNpgxe8BdZQ-LFK5xBt5Sx2W-FFYvYczT8Lrx7qMxeRL8lmubGwOCPPV0&paipv=0"
        ><i class="fa fa-facebook"></i
      ></a>
    </div>
    <!--copyright-->
    <p class="copyright">Copyright by Fathurrahman Al Hafid 2023</p>
  </footer>
</html>