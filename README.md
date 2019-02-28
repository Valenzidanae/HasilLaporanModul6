# HasilLaporanModul6
1. Jelaskan menggunakan bahasa sendiri perbedaan antara cookies dan session!
   cookie merupakan informasi dalam bentuk teks yang dipertukarkan oleh client dan server, di mana pembuat cookie adalah pihak server. 
   sedangkan, Session adalah agar bisa memungkinkan client untuk menyimpan informasi pada server.
   
2. Bagaimana cara menghapus session dan cookies pada sebuah browser! 
   Penghapusan cookie dilakukan dengan cara mengirimkan nama cookie sama tetapi nilainya kosong. Sedangkan, Untuk menghapus data session,    kita bisa menggunakan konstruksi bahasa unset() atau fungsi session_destroy(). 
   
3. Berikan contoh kode dari pembuatan dan menghapus cookies dan session!
   * pembuatan cookie                                    
     <html>
 <head>  
  <title>Set Cookie</title> 
  </head>
    <body> 
     <?php  
// Men-set nilai cookie
 setcookie('nama_cookie', 'nilai_cookie'); 
 // Mendapatkan nilai cookie 
 echo $_COOKIE['nama_cookie']; 
 ?>  
<p> Tekan Refresh (F5);
 </body>
  </html> 
  
  * pembuatan session
    <html>
 <head>   
 <title>Set Session</title>
  </head> 
   <body> 
    <?php  
// Inisialisasi data session 
session_start(); // Set session jika belum ada
 if (!isset($_SESSION['test'])) { 
       $_SESSION['test'] = 'value'; 
} else { echo 'Session di-set <br />'; 
    // Mencetak nilai session test
     echo 'Nilai: ' . $_SESSION['test'] . '<br />';  
  // Mencetak semua elemen session 
    print_r($_SESSION); } ?>  <p> Tekan Refresh (F5); </body> </html> 
 
 * menghapus cookie
   <html> 
<head>  
 <title>Hapus Cookie</title> 
 </head> 
 <body> 
 <?php 
 setcookie('nama_cookie', 'nilai_cookie'); 
 if (isset($_COOKIE['nama_cookie'])) {   
     echo 'cookie di-set <br />'; 
// Menghapus cookie, dengan masa berlaku 1 jam yang lalu
 setcookie('nama_cookie', '', time() - 1 * 3600); 
 echo 'cookie dihapus';  
} else {   
    echo 'unset'; } ?>  
<p> 
Tekan Refresh (F5); 
</body> 
</html>

* menghapus session
  <html>  
<head>  
 <title>Hapus Session</title>
</head>  
<body>  
<?php  
// Inisialisasi data session 
session_start(); 
// Set session jika belum ada 
if (isset($_SESSION['test'])) {  
// Hapus session test 

unset($_SESSION['test']); 
  echo 'session dihapus'; 
  } else {
        echo 'unset';  
         // Mencetak semua elemen session  
          print_r($_SESSION); } 
          ?>  
          <p> 
          Tekan Refresh (F5); 
          </body> 
          </html> 

Menciptakan dan mengakses cookie
![alt text]( https://github.com/Valenzidanae/HasilLaporanModul6/blob/master/Screenshot%20(163).png?raw=true)

Memeriksa dukungan cookie
![alt text]( https://github.com/Valenzidanae/HasilLaporanModul6/blob/master/Screenshot%20(164).png?raw=true)

Menghapus cookie
![alt trxt]( https://github.com/Valenzidanae/HasilLaporanModul6/blob/master/Screenshot%20(165).png?raw=true)

Menciptakan dan mengakses session
![alt text]( https://github.com/Valenzidanae/HasilLaporanModul6/blob/master/Screenshot%20(166).png?raw=true)

Menghapus session
![alt text]( https://github.com/Valenzidanae/HasilLaporanModul6/blob/master/Screenshot%20(167).png?raw=true)

Index
![alt text]( https://github.com/Valenzidanae/HasilLaporanModul6/blob/master/Screenshot%20(168).png?raw=true)

Auth 
![alt text]( https://github.com/Valenzidanae/HasilLaporanModul6/blob/master/Screenshot%20(169).png?raw=true)

Tugas praktikum
![alt text]( https://github.com/Valenzidanae/HasilLaporanModul6/blob/master/Screenshot%20(170).png?raw=true)

