#Ujian Akhir Semester Pemrograman Web RA#

Nama: Fathurrahman Al Hafid
NIM: 121140088
Kelas: RA
Link web: http://form-genshin-impact.lovestoblog.com/login.php


Genshin Impact adalah sebuah permainan aksi dan petualangan yang dikembangkan oleh miHoYo. Permainan ini tersedia untuk berbagai platform seperti PC, PlayStation, iOS, dan Android. 
Genshin Impact dikenal karena grafisnya yang indah, dunia terbuka yang luas, dan mekanika permainan yang mengasyikkan.Permainan ini mengikuti kisah seorang petualang yang datang ke dunia 
bernama Teyvat untuk mencari saudarinya yang hilang. Pemain dapat menjelajahi dunia terbuka yang besar, menggunakan karakter berbeda dengan kekuatan elemen yang beragam, dan menghadapi 
berbagai tantangan serta pertempuran yang menarik.

Website ini adalah sebuah website yang berbentuk form. website ini digunakan untuk mendata preferensi dari para player genshin impact, mulai dari nickname player, uid, level akun,
device yang digunakan. character favorit, weapon favorit, dan element favorit. website ini dibuat untuk mengetahui apa saja yang disukai oleh para player
genshin impact. Ad Astra Abyssosque :)

Bagian 1: Client-side Programming (Bobot: 30%)
1.1 (15%) Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.

Panduan:
- Buat form input dengan minimal 4 elemen input (teks, checkbox, radio, dll.)
- Menampilkan data dari server kedalam sebuah halaman menggunakan tag `table`
1.2 (15%) Buatlah beberapa event untuk menghandle interaksi pada halaman web

Panduan:
- Tambahkan minimal 3 event yang berbeda untuk menghandle form pada 1.1
- Implementasikan JavaScript untuk validasi setiap input sebelum diproses oleh PHP

Jawab: pada website ini saya membuat form dengan 7 buah inputan yaitu nickname, uid, level, device yang digunakan, character favorit, weapon favorit, dan element favorit. terdapat
3 tipe inputan yang saya gunakan yaitu text, radio box, dan submit. lalu untuk event javascriptnya saya menggunakan alert untuk memastikan inputan dari user benar dan sesuai dan tidak boleh kosong
pada inputannya untuk mencegah nilai null pada database.



2.1 (20%) Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.

Panduan:
- Gunakan metode POST atau GET pada formulir.
- Parsing data dari variabel global dan lakukan validasi disisi server
- Simpan ke basisdata termasuk jenis browser dan alamat IP pengguna
2.2 (10%) Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.

Panduan:
- Objek yang dibuat harus terkait dengan konteks pengembangan web saat ini.

Jawab: pada web yang saya buat ini, untuk metode post saya gunakan untuk form di bagian buat akun, login, dan menginputkan data form preferensi dari plyaer. hal ini saya pilih karena
jika menggunakan metode post maka isi inputan yang ada di bagian form tidak akan terlihat oleh orang lain sehingga meningkatkan keamanannya. sedangkan metode get saya gunakan untuk bagian
pencarian dan penghapusan data pada tabel. hal ini disebabkan karena moetode get akan menampilkan hasil inputan di web sehingga dapat dilihat ornag lain dan menjadi tidak aman. kemudian untuk bagian
oop saya menggunakannya untuk menampilkan isi data pada tabel,php menggunakan metode private dan juga public.


3.1 (5%) Buatlah sebuah tabel pada database MySQL

Panduan:
- Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata

3.2 (5%) Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses.

Panduan:
- Gunakan konstanta atau variabel untuk menyimpan informasi koneksi (host, username, password, nama database).

3.3 (10%) Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.

Panduan:
- Gunakan query SQL yang sesuai dengan skenario yang diberikan.

jawab: untuk sql saya membuat sebuah database dengan nama uas_pemweb.sql. pada database tersebut terdapat 2 buah tabel yang digunakan untuk menyimpan data inputan dari user yaitu tabel_nama_pengguna
dan tabel data_player. pada data tabel_nama_pengguna memiliki 4 buah atrbut yaitu id, username, email, dan password. tabel ini digunakan untuk menyimpan data login dari pengguna yang membuat akun baru
yang bisa digunakan untuk login nanti. sedangkan tabel data_player digunakan untuk menyimpan data inputan dari form.php dengan 8 buah atribut yaitu id, nickname, uid, level, device, character_name, weapon, dan element
lalu untuk query yang digunakan ada insert into (table) (atribut) yang digunakan untuk menambah data, select * from (tabel) yang digunakan untuk menampilkan data, delete (atribut) from (table) where atribut = atribut untuk
menghapus baris pada tabel, dan seelct * from (table) where atribut = atribut untuk mencari data pada tabel.


Bagian 4: State Management (Bobot: 20%)
4.1 (10%) Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.

Panduan:
- Gunakan `session_start()` untuk memulai session.
- Simpan informasi pengguna ke dalam session.

4.2 (10%) Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.

Panduan:
- Buat fungsi-fungsi untuk menetapkan, mendapatkan, dan menghapus cookie.
- Gunakan browser storage untuk menyimpan informasi secara lokal.
Jawab: session pada web ini digunakan untuk login. ketika user dapat menginputkan username dan password dengan benar maka akan  masuk ke percabangan if sehingga user dapat mengakses form.php dan tabel.php
karena fungsi session nya bernilai true. session start ini digunakan di seluruh bagian web untuk mengidentifikasi user mana yang login di web tersebut. Cookies di web PHP adalah informasi kecil yang disimpan
pada perangkat pengguna ketika mereka mengunjungi sebuah situs. Fungsinya bervariasi, dari melacak sesi pengguna hingga menyimpan preferensi, memungkinkan analisis perilaku, dan mendukung pengalaman yang
disesuaikan serta fungsionalitas situs yang lebih baik dengan menyimpan data sementara seperti keranjang belanja atau informasi formulir.


Bagian bonus ini akan memberikan bobot tambahan 20% jika Anda berhasil meng-host aplikasi web yang Anda buat. Jawablah pertanyaan-pertanyaan berikut:

(5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
Jawab: untuk melakukan hosting langkah yang dilakukan adalah sebagai berikut:
1. Membuat akun hosting. disini saya menggunakan dash.infinityfree.com untuk melakukan hosting pada web saya
2. membuat sub domain dan memilih domain untuk digunakan sebagai alamat web
3. mengupload file php yang berisi codingan pada folder htdocs
4. membuat database baru dan melakukan impor database menggunakan file.sql dari laptop
5. mengedit file koneksi.php dan disesuaikan localhost, username, password, dan nama database nya sesuai dengan yang diberikan oleh penyedia hosting
6. terakhir membuka link yang berisi sub domain dan domain yang sudah dibuat tadi dan website berhasil dihosting.
7. 
(5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
jawab: saya memilih infinity sebagai penyedia hosting karena memberikan hosting gratis yang cukup lama yaitu 3 bulan dan proses hostingnya yang mudah dan tidak rumit.

(5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
jawab: Sebagai pemilik aplikasi web, saya memastikan keamanan sistem dengan pendekatan holistik. Saya rutin melakukan pembaruan perangkat lunak dan menggunakan firewall serta perlindungan DDoS untuk melindungi
jaringan. Data yang ditransmisikan dienkripsi menggunakan protokol HTTPS, sementara validasi input diterapkan untuk mencegah serangan seperti SQL injection dan XSS. 

(5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
jawab: 
Di dalam hosting gratis, saya memilih platform yang cocok dengan teknologi yang saya gunakan dalam aplikasi web saya. Database yang digunakan bisa berasal dari layanan hosting itu sendiri atau dari layanan database
eksternal yang gratis. Fokus utama saya adalah pada pengoptimalan gambar, penggunaan cache, dan pembaruan rutin demi menjaga kecepatan dan keamanan aplikasi. Meskipun ada keterbatasan, saya tetap menjalankan backup
data secara teratur, memanfaatkan layanan CDN gratis, dan mengamati penggunaan sumber daya server. Saya juga tetap memperhatikan praktik keamanan seperti penggunaan HTTPS dan validasi input. Dengan konfigurasi ini, 
saya berupaya memanfaatkan sebaik mungkin sumber daya yang tersedia dalam hosting gratis untuk mendukung aplikasi web saya secara optimal.

