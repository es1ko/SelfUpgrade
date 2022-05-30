<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Self-Upgrade</title>
    <link href="../CSS/buttondesign.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/img/logo.png" rel="icon">
    <link rel="stylesheet" href="../CSS/login.css">
  </head>

  <body>
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
	<header id="header" class="d-flex flex-column justify-content-center">
	  <nav id="navbar" class="navbar nav-menu">
		<ul>
		  <li><a href="../index.html" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
		  <li><a href="../profile.php" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Profile</span></a></li>
		  <li><a href="../challenges.html" class="nav-link scrollto"><i class="bx bx-task"></i> <span>Challenges</span></a></li>
		  <li><a href="../information.html" class="nav-link scrollto"><i class="bx bxs-videos"></i> <span>About us</span></a></li>
		  <li><a href="../feedback.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
		</ul>
	  </nav>
  </header>

    <div class="center">
      <h1>Login</h1>
      <form method="POST" action="authorization.php" class="form-customer form-login">
        <div class="txt_field">
          <input type="email" name="email" class="form-control form-account" id="exampleInputEmail1">
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" class="form-control form-account" id="exampleInputPassword1">
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="../register.html">Signup</a>
        </div>
      </form>
    </div>

    <script src="../assets/js/main.js"></script>
  </body>
</html>
