<?php

@include 'koneksi.php';

session_start();

if(isset($_POST['submit'])){

  
   $username = mysqli_real_escape_string($koneksi, $_POST['username']);
   $password = ($_POST['password']);
   

   $select = " SELECT * FROM petugas WHERE username = '$username' && password = '$password' ";

   $result = mysqli_query($koneksi, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

         $_SESSION['nama_petugas'] = $row['id_petugas'];
         header('location:tbltanggapi.php');
     
   }else{
      $error[] = 'incorrect username or password!';
   }

};
?>

<! doctype html>
  <html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>PORTAL PENGADUAN MASYARAKAT</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  </head>
  <body class="text-white">
    <h3 class="text-center mt-5" style="color:#000000">LOGIN</h3>
    <p class="text-center mt-5"  style="color:#000099">Silahkan untuk mengisi Username Password Anda terlebih dahulu</p>
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-4">
    <form action="" method="post">
      <?php
      if(isset($error)){
        foreach ($error as $error){
        echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
<br>
  <div class="form-group">
      <label class="text" style="color:#000000" > Username </label>
      <input type="text"  name="username" class="form-control">
  </div>
   <div class="form-group">
      <label style="color:#000000"> Password</label>
      <input type="password"  name="password" class="form-control">
  </div>
  <center><button type="submit" class="btn btn-primary" name="submit">ok</button></center>
</form>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN"></script>

</body>
</html>