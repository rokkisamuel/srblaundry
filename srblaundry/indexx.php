<html>
<head>
 <title>LOGIN MULTIUSER</title>
 <link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
  

 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>

 <div class="panel_login">
  <p class="tulisan_atas">Silahkan Masuk</p>
  <section id="banner">
            <img src="image/logo.png" class="logo">
        </section>

  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">

   <input type="submit" class="tombol_login" value="LOGIN">

   <br/>
   <br/>
   
  </form>
    <form action="index.html">
    <input type="submit" class="tombol_home" value="HOME">
  </form>

  <div class="panel_info">
  <p class="tulisan_bwh">info login</p>
  <p1 class="tulisan_bwh">username: admin | password: admin123</p1> <br>
  <p1 class="tulisan_bwh">username: pelanggan | password: pelanggan123</p1>

 </div>


</body>
</html>