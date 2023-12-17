<?php
// Mulai session
session_start();

// Set nilai session jika belum ada
$logged_in_user = isset($_SESSION['username']) ? $_SESSION['username']:null;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="styleindeks.css" />
    <link rel="stylesheet" type="text/js" href="javascript.js" />
    <link rel="stylesheet" href="font-awesome.min.css" />
    <script
      src="https://kit.fontawesome.com/c8e4d183c2.js"
      crossorigin="anonymous"
    ></script>
    <title>Halaman Utama</title>
  </head>
  <body>
    <nav>
      <img
        class="logo"
        src="https://raw.githubusercontent.com/FathurRA4/Asset-gambar/main/logo.jpg"
        height="75"
        width="75"
      />
      <p>Home</p>
      <?php if (isset($logged_in_user)) { ?>
                <!-- Tampilkan menu setelah login -->
                <div class="navbar">
                <li><a href="indeks.php">Home</a></li>
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
                <li><a href="indeks.php" onclick="showAlert()">Home</a></li>
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
    <header>
      <div class="head">
        <h1>
          Survey Preferensi, <br />
          Player Genshin Impact
        </h1>
      </div>
    </header>

    <div class="konten">
      <h2>Tentang Website</h2>
      <p>
        Website ini merupakan sebuah Website pendataan preferensi player genshin
        impact tehadap character, weapon/senjata, dan juga element.
        <br />
        Website ini terdiri dari 3 bagian yaitu Home, Form dan Tabel. Bagian
        home berisi halaman awal website. <br />
        Bagian Form berisi formulir yang berfungsi sebagai tempat input data
        yang dibutuhkan. <br />Bagian Tabel berisi tabel yang akan menampilkan
        hasil inputan form yang diinputkan oleh user. <br />
        Semoga Website ini bermanfaat.
      </p>
      <h3>Ad Astra Abyssosque :)</h3>
    </div>
    <footer>
    <p>
            <?php
            // Menggunakan nilai session
            if (isset($logged_in_user)) { 
                echo "Selamat datang!, $logged_in_user. Anda telah mengunjungi situs ini.";
            }
            ?>
        </p>
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