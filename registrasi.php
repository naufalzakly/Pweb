<?php

require 'fuction.php';

if( isset($_POST["register"]) ) {
	if( register($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan, silahkan login!');
				document.location.href = 'formlogin.php';
			  </script>";
	} else {
		echo "<script>
				alert('gagal menambahkan user baru!');
				document.location.href = 'formlogin.php';
			  </script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>JOIN NUANSA.Co</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOIN NUANSA.Co</title>
    <link rel="stylesheet" href="formlogin.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

</head>

<body>
    <header id="header">
        <a href="#" class="logo"></i> NUANSA.CO</a>
        <ul>
            <li><a href="index.html"><i class="fa fa-fw fa-home"></i> HOME</a></li>
            <li><a href="desination.html"><i class="fa fa-fw fa-plane"></i> DESTINATION</a></li>
            <li><a href="contact.html"><i class="fa fa-fw fa-envelope"></i> CONTACT</a></li>
            <li><a href="formlogin.php"><i class="fas fa-sign-in-alt"></i> JOIN US</a></li>

        </ul>
        <div class="search">
            <input type="text" placeholder="Search.." name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-fw fa-search"></i></button>
        </div>
    </header>
</body>
<div>
  <img class="background" id="greenrectangle" src="image/greenrectangle.svg">
</div>
<div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>REGISTRASI</h2>
      </div>
      <form action = "registrasi.php" method="post" class="form">
        <label for="user-name" >&nbsp;Username </label>
        <input id="user-name" class="form-content" type="text" name="username" required />
        <div class="form-border"></div>


        <label for="user-email" style="padding-top:4px">
            &nbsp;Email
          </label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>

        <label for="user-password" style="padding-top:4px">&nbsp;Password </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>

        <label for="user-password" style="padding-top:4px">&nbsp;Confirmasi Passowrd </label>
        <input id="user-password" class="form-content" type="password" name="password2" required />
        <div class="form-border"></div>

        <a href="formlogin.php">
          <legend id="forgot-pass">Sudah punya Akun?</legend>
        </a>
        
        <input id="submit-btn" type="submit" name="register" value="REGISTRASI" />
      </form>
    </div>
  </div>

</html>