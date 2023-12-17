// Implementasi event dengan javascript
document.addEventListener("DOMContentLoaded", function () {
  // Fungsi untuk menampilkan pesan peringatan jika pengguna belum login
  function showAlert() {
    alert("Anda harus login terlebih dahulu!");
  }

  // Cek apakah pengguna sudah login atau belum
  if (loggedInUser) {
    // Tampilkan menu setelah login
    var navLinks = document.querySelectorAll(".nav_link a");
    navLinks[0].href = "home.php";
    navLinks[1].href = "form.php";
    navLinks[2].href = "tabel.php";
    navLinks[3].querySelector("div p").innerText = loggedInUser;
    navLinks[3].querySelector("div a").href = "logout.php";
  } else {
    // Tampilkan menu sebelum login
    var navLinks = document.querySelectorAll(".nav_link a");
    navLinks[0].addEventListener("click", showAlert);
    navLinks[1].addEventListener("click", showAlert);
    navLinks[2].addEventListener("click", showAlert);
    navLinks[3].querySelector("div a").href = "buatakun.php";
    navLinks[3].querySelector("div a:nth-child(2)").href = "login.php";
  }
});
