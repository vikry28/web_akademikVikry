<?php 
require_once 'config/koneksi.php';
if (isset($_POST["daftar"])) {

  $username= htmlspecialchars($_POST["username"]);
	$password=htmlspecialchars( $_POST["password"]);


  $sql = "INSERT INTO user (id, username, password)
VALUES ( NULL, '$username', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "<script>
  alert('user berhasil ditambahkan');
  document.location.href='login.php';
  </script>
  
  ";
} else {
  echo "
	<script>
		alert('Username dan Password Salah');
		</script>

		";
}

mysqli_close($conn);


}





?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
  <div class="text-center">
    <h1>Form Pendaftaran</h1>
  </div>

  <div class="container">

     <form method="post">
     <div class="form-group">
    <label for="">Username</label>
    <input type="text" class="form-control"  placeholder="Enter username" name="username">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control"  placeholder="Password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary" name="daftar">Registrasi</button>
</form>

  </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>