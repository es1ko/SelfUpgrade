
<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: register.html');
} 
 include 'Php/db.php';
 $sql = 'SELECT * FROM customer WHERE user_id='.$_SESSION['user_id'];
 $result = $connection->query($sql);
 $row = $result->fetch_assoc();


 ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Self-Upgrade</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="assets/img/logo.png" rel="icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="CSS/buttondesign.css" rel="stylesheet">
  <link href="progress/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <header id="header" class="d-flex flex-column justify-content-center">
    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="profile.php" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Profile</span></a></li>
        <li><a href="challenges.html" class="nav-link scrollto"><i class="bx bx-task"></i> <span>Challenges</span></a></li>
        <li><a href="information.html" class="nav-link scrollto"><i class="bx bxs-videos"></i> <span>About us</span></a></li>
        <li><a href="feedback.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav>

  </header>

  <main id="main">


    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Personal Account</h2>
        </div><br>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/126327.png" width="65%">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <?php
  $today = date("Y-m-d");
  $diff = date_diff(date_create($row["birthday"]), date_create($today));
  $age = $diff->format('%y'); 
echo '<h3>'.$row["username"].'</h3><br>';
echo ' <div class="row">
              <div class="col-lg-6">
              <ul>
                   <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>'.$row["birthday"].'</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>'.$row["email"].'</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>'.$row["phone"].'</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>'.$row["city"].'</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>'.$age.'</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span>'.$row["status"].'</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>University:</strong> <span>'.$row["university"].'</span></li>';
                  function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }

    return false;
}

$art_completed = in_array_r(2, $result) ;
$sport_completed = in_array_r(4, $result);
$program_completed = in_array_r(1, $result);
$social_completed = in_array_r(3, $result);
$history_completed = in_array_r(5, $result);
$dance_completed = in_array_r(6, $result);
$music_completed = in_array_r(7, $result);
$nature_completed = in_array_r(8, $result);
$reading_completed = in_array_r(9, $result);
$tech_completed = in_array_r(10, $result);
            ?>
          
                  <li><i class="bi bi-chevron-right"></i> <strong>Level:</strong> <span>C2</span></li>
                </ul>
              </div>
            </div><br>
            <p>
            </p>
          </div>
        </div>

      </div>
    </section>


    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Progress</h2>
          <p>The completed challenging areas that you have done</p>
        </div>


        <div class="wrapper">
    <div class="inputField">
      <input type="text" placeholder="Add your new activity">
      <button><i class="fas fa-plus"></i></button>
    </div>
    
    <ul class="todoList">
    </ul>
    <div class="footer">
      <span>You have <span class="pendingTasks"></span> pending activities</span>
      <button>Clear All</button>
    </div>
  </div>

  <script src="progress/script.js"></script>

        
    </section>

    <center>
    <button class="btn btn-secondary"   onclick="location.href='Php/test.php'">Log out</button>
    </center>
  
 
  <footer id="footer">
    <div class="container">
      <p style="font-weight: bold;">"Bilim tappai maqtanba, qumarlanyp shattanba!"</p>
      <p style="margin-top:-2%;">(c)Abai</p>
      <div class="social-links" style="margin-top: -2%;">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>
  </main>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <script src="assets/js/main.js"></script>

</body>

</html>