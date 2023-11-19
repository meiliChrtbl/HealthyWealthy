<!DOCTYPE html>
<!--PHP-->
<?php
  session_start();
  include "includes/config.php";
  $batas   = 5;
  $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
	$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
	$previous = $halaman - 1;
	$next = $halaman + 1;

  $kategori = mysqli_query($connection,"SELECT * FROM kategori_vid, video_workout 
  WHERE kategori_vid.kategori_ID = video_workout.kategori_ID");
  $jumlahvid = mysqli_num_rows($kategori);

  $query = mysqli_query($connection, "SELECT * FROM video_workout WHERE kategori_ID = 'KV05' limit 2");

  $query3 = mysqli_query($connection, "SELECT * FROM video_workout WHERE kategori_ID = 'KV01' limit 2");

  $query4 = mysqli_query($connection, "SELECT * FROM video_workout WHERE kategori_ID = 'KV02' limit 2");

  $query2     = mysqli_query($connection, "select * from video_workout");
  $jmlhalaman = ceil($jumlahvid/$batas);
  $nomor = $halaman_awal+1;

  $k1 = mysqli_query($connection, "SELECT * FROM video_workout WHERE kategori_ID = 'KV01' ");
  $jumlahk1 = mysqli_num_rows($k1);

  $k2 = mysqli_query($connection, "SELECT * FROM video_workout WHERE kategori_ID = 'KV02' ");
  $jumlahk2 = mysqli_num_rows($k2);

  $k3 = mysqli_query($connection, "SELECT * FROM video_workout WHERE kategori_ID = 'KV03' ");
  $jumlahk3 = mysqli_num_rows($k3);

  $k4 = mysqli_query($connection, "SELECT * FROM video_workout WHERE kategori_ID = 'KV04' ");
  $jumlahk4 = mysqli_num_rows($k4);

  $k5 = mysqli_query($connection, "SELECT * FROM video_workout WHERE kategori_ID = 'KV05' ");
  $jumlahk5 = mysqli_num_rows($k5);

  function youtube($url){
    $link=str_replace('https://youtu.be/', '', $url);
    $link=str_replace('https://youtu.be/', '', $link);
    $data='<object width="460" height="265" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
    <param name="src" value="http://www.youtube.com/v/'.$link.'" />
    </object>';
    return $data;
  }
  ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Research - Healthy Wealthy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
<link rel="manifest" href="assets/site.webmanifest">
<link rel="mask-icon" href="assets/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3baf204e46.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

          <!--bootstrap-->
          <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap/bootstrap-icons/bootstrap-icons.css">
        <!--boxicon-->
        <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
        
        <!--animation-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Overpass:wght@300;600&family=Russo+One&family=Ubuntu:wght@700&display=swap" rel="stylesheet">


<style type="text/css">

/* ==== Tab Workout ==== */
.section-img {
    background-image: url(images/backgroundworkout.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100%;
    padding-bottom: 50px;
}

.section-img h2 {
    font-family: 'Ubuntu', sans-serif;
}

.section-img .row {
    padding-top: 10px;
}

.section-img img {
    width: 120px;
    height: 120px;
    border-radius: 20px;
}

.section-img .row-img img {
    width: 150px;
    height: 150px;
    border-radius: 20px;
}

.section-session {
    padding-top: 80px;
    padding-bottom: 50px;
    background-image: url(images/backgroundrecomWO.png);
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

.section-session h3 {
    text-align: center;
}

.nav-tabs a:active{
    color: var(--third-color);
    
}

.tab-content {
    display: inline-block;
}

.video-recom {
    margin-top: 50px;
}

.video-recom h3 {
    font-family: 'Lilita One', cursive;
}

.videos {
    background-image: url();
    background-size: 100% 100%;
    background-attachment: fixed;
}

.videos .container .row {
    padding-top: 80px;
}

.media {
    border-bottom: 1px solid grey;
}

.media .media-body a {
    font-family: 'Ubuntu', sans-serif; text-decoration:none;color:#36343a;
}

.media .media-body h5:hover {
    color: var(--secondary-color);
}
.videos .pagination .page-item{
    margin-top: 50px;
}

.pagination a:active {
    border-color: var(--gradient-color);
    color : var(--third-color);
}

.pagination a {
    color : var(--gradient-color);
}

.badge {
    background-color: #E6C2BF;
    color: #36343a;
}

.more a h6{
  background-color:#d35382; 
  padding:10px; width: 150px; 
  border-radius: 25px; 
  text-align:center;
  transition: 0.5s ease;
}

.more a h6:hover{
  background-color: #E6C2BF;
}



  /*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}

a {
  color: #A53860;
  text-decoration: none;
}

a:hover {
  color: #d55e8a;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  background: #A53860;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 28px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #d35382;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Disable AOS delay on mobile
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}
          

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  top: 20px;
  
}

#header .header-container {
  background: #eeeeee;
  border-radius: 25px;
}

#header.header-scrolled {
  background: #eeeeee;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  
  top: 0;
}

#header .logo {
  overflow: hidden;
  padding: 16px 30px 12px 30px;
  background: #A53860;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  border-radius: 25px;
}

#header .logo h1 {
  font-size: 26px;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  font-family: "Poppins", sans-serif;
}

#header .logo h1 a,
#header .logo h1 a:hover {
  color: #eeeeee;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

@media (max-width: 992px) {
  #header {
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    top: 0;
    background: #A53860;
  }

  #header.header-scrolled,
  #header .header-container {
    background: #A53860;
  }

  #header .logo {
    padding-left: 0;
  }

  #header .logo h1 {
    font-size: 24px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  color: #36343a;
  transition: 0.3s;
  font-size: 13px;
  font-weight: 500;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
  white-space: nowrap;
  transition: 0.3s;
}


.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #A53860;
}

.navbar .getstarted,
.navbar .getstarted:focus {
  background: #A53860;
  padding: 10px 25px;
  margin-left: 30px;
  margin-right: 15px;
  border-radius: 50px;
  color: #fff;
}

.navbar .getstarted:hover,
.navbar .getstarted:focus:hover {
  color: #fff;
  background: #da627d;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  text-transform: none;
  font-weight: 500;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #A53860;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(29, 28, 31, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #36343a;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #A53860;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #A53860;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}


/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background: #f6f6f7;
  margin-top: 100px;
}

.breadcrumbs h2 {
  font-size: 24px;
  line-height: 1;
  font-weight: 400;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #4f4c55;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }

  .breadcrumbs ol {
    display: block;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }
}

.more h6:hover{
  background-color: #E6C2BF;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  color: #444444;
  font-size: 14px;
  background: #f1f0f2;
}

#footer .footer-top {
  padding: 60px 0 30px 0;
  background: #f9f8f9;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact h4 {
  font-size: 22px;
  margin: 0 0 30px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
}

#footer .footer-top .footer-contact p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #777777;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: bold;
  color: #444444;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #A53860;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #777777;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  text-decoration: none;
  color: #A53860;
}

#footer .footer-newsletter {
  font-size: 15px;
}

#footer .footer-newsletter h4 {
  font-size: 16px;
  font-weight: bold;
  color: #444444;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
  text-align: left;
  border: 1px solid #e4e3e6;
}

#footer .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: -2px;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #A53860;
  color: #eeeeee;
  transition: 0.3s;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type=submit]:hover {
  background: #A53860;
}

#footer .credits {
  padding-top: 5px;
  font-size: 13px;
  color: #444444;
}

#footer .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #A53860;
  color: #eeeeee;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .social-links a:hover {
  background: #A53860;
  color: #eeeeee;
  text-decoration: none;
}

</style>

<body>

  <!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.php"><span>Healthy Wealthy</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
            <li><a class="nav-link scrollto" href="research.php">Research</a></li>
            <li><a class="nav-link scrollto" href="about.html">About Us</a></li>
            <li><a class="nav-link scrollto" href="work.php">Workout</a></li>
            <li><a class="nav-link scrollto"  href="recipe.php">Recipes</a></li>
            <li><a class="getstarted scrollto" href="#workout">Get Started</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Research</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Research</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <div class="videos" id="workout">
            <div class="container">
              <div class="row">
                <div class="col-sm-8" data-aos="fade-left">
                  <div class="searchbar">
                    <form class="d-flex" role="search" method="POST">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Kategori atau Judul Jurnal" 
                        aria-describedby="button-addon2" name="search" id="search" value="<?php if(isset($_POST['search'])) {echo $_POST['search'];} ?>" >
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="kirim">Search</button>
                      </div>
                    </form>
                  </div>
                  <?php 
                  if(isset($_POST["kirim"])) {
                    $search = $_POST['search'];
                    $workout = mysqli_query($connection, "SELECT *
                     FROM research WHERE Kategori LIKE '%".$search."%' or Judul LIKE '%".$search."%' LIMIT $halaman_awal, $batas");
                    } 
                    else {
                      $workout = mysqli_query($connection,"SELECT * FROM research limit $halaman_awal, $batas");
                    }
                      while ($row = mysqli_fetch_array($workout)) {
                        $kode = $row["Kode"];
                        $_COOKIE[$kode] = $kode;
                          ?>
                        <div class="media" style="margin-top:30px;">
                            <div class="media-body"">
                                <a h5 style="font-family: 'Ubuntu', sans-serif; text-decoration:none;color:#36343a;" href="#?myid=<?php echo $kode; ?>"><?php echo $row["Judul"]?> </h5>
                                <h6 style="color:grey;"> <?php echo $row["Penerbit"] ?></h6>
                                <p style="color:grey; margin-top: 30px;font-size: small;"> <?php echo $row["Tanggal"] ?></p>
                                <div class="more">
                                <a href="<?php echo $row["URL"] ?>"><h6>View More</h6></a>
                                </div>
                            </div>
                            <img class="ml-3" style="width:180px; height:100px;" src="assets/img/<?php echo $row["Foto"]?>" alt="No image file">
                        </div>
                      <?php
                    } 
                     ?>

                  <nav>
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                      </li>
                      <?php 
                      for($x=1;$x<=$jmlhalaman;$x++){
                        ?> 
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                        <?php
                      }
                      ?>				
                      <li class="page-item">
                        <a  class="page-link" <?php if($halaman < $jmlhalaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
                
              </div>
            </div>
          </div>



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Healthy Wealthy</h3>
            <p>
            Jl. Letjen S. Parman No.1, RT.6/RW.16, Tomang, Kec. Grogol petamburan <br>
            Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11440<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 812131415<br>
              <strong>Email:</strong> tifanimeili@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Would you like to receive the best healthy recipes and ideas to workout to your inbox?</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Healthy Wealthy</span></strong>. All Rights Reserved
        </div>
       
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>



</body>

</html>