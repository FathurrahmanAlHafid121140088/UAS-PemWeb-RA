<?php
session_start();

include("koneksi.php");

// Cek apakah pengguna belum login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit();
}

$logged_in_user = $_SESSION['username'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan data login dari form
    $nickname = $_POST['nickname'];
    $uid = $_POST['uid'];
    $level = $_POST['level'];
    $device = $_POST['device'];
    $character_name = $_POST['character_name'];
    $weapon = $_POST['weapon'];
    $element = $_POST['element'];


    $stmt = $conn->prepare(
        "INSERT INTO data_player (nickname, uid, level, device, character_name, weapon, element)
        VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    // Bind parameter ke prepared statement
    $stmt->bind_param("sssssss", $nickname, $uid, $level, $device, $character_name, $weapon, $element);

    // Eksekusi pernyataan persiapan
    $stmt->execute();

    // Redirect ke halaman dashboard setelah input barang berhasil
    header("Location: tabel.php");
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="styleform.css" />
    <link rel="stylesheet" type="text/js" href="javascript.js" />
    <link rel="stylesheet" href="font-awesome.min.css" />
    <script
      src="https://kit.fontawesome.com/c8e4d183c2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav>
      <img
        class="logo"
        src="https://raw.githubusercontent.com/FathurRA4/Asset-gambar/main/logo.jpg"
        height="75"
        width="75"
      />
      <p>Form</p>
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
                <li><a href="index.php" onclick="showAlert()">Home</a></li>
                <li><a href="form.php" onclick="showAlert()">Form</a></li>
                <li><a href="tabel.php" onclick="showAlert()">Tabel</a></li>
                <li class="menu_akun">
                    <div class="akun">
                        <a href="buatakun.php">Buat Akun</a>
                        <a href="login.php">Login</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <div class="form">
    <form action="" method="post" onsubmit="return validateForm()">
        <h2>Isilah form dibawah ini dengan benar:</h2>
        <p>
          Nickname<input type="text" name="nickname" id="nickname" required />
        </p>
        <p>UID<input type="text" name="uid" id="uid" required /></p>
        <p>Level<input type="text" name="level" id="level" required /></p>
        <h2>Device</h2>
        <p>PC<input type="radio" name="device" id="device" value="PC" /></p>
        <p>
          Mobile<input
            type="radio"
            name="device"
            id="device"
            value="Mobile"
            required
          />
        </p>
        <p>
          Character<input
            type="text"
            name="character_name"
            id="character_name"
            required
          />
        </p>
        <p>Weapon<input type="text" name="weapon" id="weapon" required /></p>
        <p>Elemen<input type="text" name="element" id="element" required /></p>
        <input type="submit" value="Kirim" class="kirim" />
      </form>
    </div>

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
  </body>
</html>
