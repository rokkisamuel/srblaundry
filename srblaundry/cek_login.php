<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM multilevel WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['level']=="admin"){

  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "admin";
  // alihkan ke halaman dashboard admin
  header("location:halaman_admin.php");

 // cek jika user login sebagai pelanggan
 }else if($data['level']=="pelanggan"){
  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "pelanggan";
  // alihkan ke halaman dashboard pelanggan
  header("location:halaman_user.php");

 }else{

  // alihkan ke halaman login kembali
  header("location:indexx.php?pesan=gagal");
 } 
}else{
 header("location:indexx.php?pesan=gagal");
}

?>