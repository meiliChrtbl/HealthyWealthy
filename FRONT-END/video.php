<!DOCTYPE html>

<?php 
session_start();
include "includes/config.php";

$video_id = $_GET["myid"];

$query = mysqli_query($connection,"SELECT * FROM video_workout WHERE video_ID = '$video_id'");

$video = mysqli_query($connection, "SELECT * FROM video_workout ORDER BY tgl_upload DESC LIMIT 5");

while ($row = mysqli_fetch_array($query)) {
  $link = $row["link_vid"];
  $judul = $row["judul_vid"];
  $des = $row["deskripsi_ket"];
  $kreator = $row["kreator_vid"];
  $tgl = $row["tgl_upload"];
  $foto = $row["foto_cover"];
}

function youtube($url){
  $link=str_replace('https://youtu.be/', '', $url);
  $link=str_replace('https://youtu.be/', '', $link);
  $data='<object width="100%" height="400px" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
  <param name="src" value="http://www.youtube.com/v/'.$link.'" />
  </object>';
  return $data;
}

?>
<head>
        <title>Videos - Healthy Wealthy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link rel="stylesheet" href="bootstrap/bootstrap-icons/bootstrap-icons.css">
        <!--boxicon-->
        <link rel="stylesheet" href="boxicons/css/boxicons.min.css">

        <!--animation-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Overpass:wght@300;600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
        <!--Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style>

          button {
          background: #fff;
          border: unset;
          outline: 0;
          font-size: 18px;
          cursor: pointer;
          color: #65676b;
          padding: 5px 10px;
        }

        button.liked {
          color: #A53860;
        }

        button.liked i{
          animation: anim 0.5s ease-in-out;
          -webkit-animation: anim 0.5s ease-in-out;
        }

        @media (max-width:576px){
          
        }

        body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}

a {
  color: #A53860;
  text-decoration: none;
}

a:hover {
  color: #00cc95;
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
  color: #eeeeee;
  line-height: 0;
}

.back-to-top:hover {
  background: #00c28e;
  color: #eeeeee;
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
  color: #36343a;
}

.navbar .getstarted,
.navbar .getstarted:focus {
  background: #A53860;
  padding: 15px 25px;
  margin-left: 30px;
  margin-right: 15px;
  border-radius: 25px;
  color: #eeeeee;
}

.navbar .getstarted:hover,
.navbar .getstarted:focus:hover {
  color: #eeeeee;
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
  background: #eeeeee;
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
  color: #eeeeee;
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
  background-color: #eeeeee;
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
  background: #eeeeee;
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
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 80vh;
  background: url("assets/img/videos-bg.png") center center;
  background-size: cover;
  position: relative;
}

#hero .container {
  padding-top: 80px;
}

#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #eeeeee;
}

#hero h2 {
  color: #eee;
  margin-bottom: 40px;
  font-size: 15px;
  font-weight: 500;
  font-family: "Open Sans", sans-serif;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}

#hero .btn-get-started {
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #eeeeee;
  color: #eeeeee;
}

#hero .btn-get-started:hover {
  background: #A53860;
  border: 2px solid #A53860;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero {
    height: 100vh;
  }

  #hero .container {
    padding-top: 60px;
  }

  #hero h1 {
    font-size: 32px;
    line-height: 36px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f6f6f7;
}

.section-title {
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 3px;
  background: #A53860;
  bottom: 0;
  left: 0;
}

.section-title p {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Clients
--------------------------------------------------------------*/
.clients {
  background: #f6f6f7;
  text-align: center;
  height: 100px;
}

.clients img {
  width: 40%;
}

.clients .client-con{
  filter: grayscale(100);
  transition: all 0.2s ease-in-out;
}

.clients .client-con:hover {
  filter: none;
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# research
--------------------------------------------------------------*/

.research .content h2 {
  font-weight: 700;
  font-size: 48px;
  line-height: 60px;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.research .content h3 {
  font-weight: 500;
  line-height: 32px;
  font-size: 24px;
}

.research .content ul {
  list-style: none;
  padding: 0;
}

.research .content ul li {
  padding: 10px 0 0 28px;
  position: relative;
}

.research .content ul i {
  left: 0;
  top: 7px;
  position: absolute;
  font-size: 20px;
  color: #A53860;
}

.research .content p:last-child {
  margin-bottom: 0;
}

.research .btn-get-started {
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  border: 2px solid #A53860;
  color: #f1f0f2;
  background-color: #A53860;
}

.research .btn-get-started:hover {
  background: #da627d;
  border: 2px solid #da627d;
}


/*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
.counts {
  background: #A53860;
  padding: 40px 0 20px 0;
  color: #eeeeee;
}

.counts .counters span {
  font-size: 36px;
  display: block;
  font-weight: 700;
}

.counts .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Raleway", sans-serif;
  font-size: 15px;
  font-weight: 500;
}

/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us .content {
  padding: 30px;
  background: #A53860;
  border-radius: 4px;
  color: #eeeeee;
}

.why-us .content h3 {
  font-weight: 700;
  font-size: 34px;
  margin-bottom: 30px;
}

.why-us .content p {
  margin-bottom: 30px;
}

.why-us .content .more-btn {
  display: inline-block;
  background: rgba(255, 255, 255, 0.1);
  padding: 6px 30px 8px 30px;
  color: #eeeeee;
  border-radius: 50px;
  transition: all ease-in-out 0.4s;
}

.why-us .content .more-btn i {
  font-size: 14px;
}

.why-us .content .more-btn:hover {
  color: #A53860;
  background: #eeeeee;
}

.why-us .icon-boxes .icon-box {
  text-align: center;
  border-radius: 10px;
  background: #eeeeee;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 40px 30px;
  width: 100%;
  transition: 0.3s;
}

.why-us .icon-boxes .icon-box i {
  font-size: 40px;
  color: #A53860;
  margin-bottom: 30px;
}

.why-us .icon-boxes .icon-box h4 {
  font-size: 20px;
  font-weight: 700;
  margin: 0 0 30px 0;
}

.why-us .icon-boxes .icon-box p {
  font-size: 15px;
  color: #848484;
}

.why-us .icon-boxes .icon-box:hover {
  box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.15);
}

/*--------------------------------------------------------------
# Cta
--------------------------------------------------------------*/
.cta {
  background: linear-gradient(rgba(2, 2, 2, 0.7), rgba(0, 0, 0, 0.7)), url("../img/cta-bg.jpg") fixed center center;
  background-size: cover;
  padding: 60px 0;
}

.cta h3 {
  color: #eeeeee;
  font-size: 28px;
  font-weight: 700;
}

.cta p {
  color: #eeeeee;
}

.cta .cta-btn {
  font-family: "Raleway", sans-serif;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 25px;
  transition: 0.5s;
  margin-top: 10px;
  border: 2px solid #eeeeee;
  color: #eeeeee;
}

.cta .cta-btn:hover {
  background: #A53860;
  border: 2px solid #A53860;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  text-align: center;
  padding: 40px 20px;
  transition: all ease-in-out 0.3s;
  background: #eeeeee;
}

.services .icon-box .icon {
  margin: 0 auto;
  width: 64px;
  height: 64px;
  border-radius: 50px;
  border: 1px solid #A53860;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
  transition: ease-in-out 0.3s;
  color: #A53860;
}

.services .icon-box .icon i {
  font-size: 28px;
}

.services .icon-box h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 24px;
}

.services .icon-box h4 a {
  color: #36343a;
  transition: ease-in-out 0.3s;
}

.services .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.services .icon-box:hover {
  border-color: #eeeeee;
  box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
}

.services .icon-box:hover h4 a {
  color: #A53860;
}

.services .icon-box:hover .icon {
  color: #eeeeee;
  background: #A53860;
}

/*--------------------------------------------------------------
# recipe
--------------------------------------------------------------*/

.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 20px auto;
  list-style: none;
  text-align: center;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 16px 8px 16px;
  font-size: 14px;
  font-weight: 500;
  line-height: 1;
  text-transform: uppercase;
  color: #444444;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
  border-radius: 50px;
  font-family: "Poppins", sans-serif;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
  color: #eeeeee;
  background: #A53860;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  background: rgba(54, 52, 58, 0.6);
}

.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(54, 52, 58, 0.6);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio .portfolio-wrap img {
  transition: all ease-in-out 0.3s;
}

.portfolio .portfolio-wrap .portfolio-info {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: center;
  padding: 20px;
}

.portfolio .portfolio-wrap .portfolio-info h4 {
  font-size: 20px;
  color: #eeeeee;
  font-weight: 600;
}

.portfolio .portfolio-wrap .portfolio-info p {
  color: rgba(255, 255, 255, 0.7);
  font-size: 14px;
  text-transform: uppercase;
  padding: 0;
  margin: 0;
  font-style: italic;
}

.portfolio .portfolio-wrap .portfolio-links {
  text-align: center;
  z-index: 4;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #eeeeee;
  margin: 0 5px 0 0;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  color: #00cc95;
}

.portfolio .portfolio-wrap:hover::before {
  opacity: 1;
}

.portfolio .portfolio-wrap:hover img {
  transform: scale(1.2);
}

.portfolio .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

.view-more a {
  padding: 15px 25px; 
  background-color: #A53860; 
  text-align: center; color: #eeee; 
  position:relative; 
  left: 570px; 
  top: 15px;
  border-radius: 25px;
}

.view-more a:hover {
background-color: #009970;
}


/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team {
  background: #f1f0f2;
}

.team .member {
  position: relative;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 10px;
  text-align: center;
  background-color: white;
}

.team .member .pic {
  overflow: hidden;
  width: 150px;
  border-radius: 5%;
  margin: 0 auto 20px auto;
}

.team .member .pic img {
  transition: ease-in-out 0.3s;
}

.team .member:hover img {
  transform: scale(1.1);
}

.team .member h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
  color: #36343a;
}

.team .member span {
  display: block;
  font-size: 15px;
  padding-bottom: 10px;
  position: relative;
  font-weight: 500;
}

.team .member span::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: #b5b3ba;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}

.team .member p {
  margin: 10px 0 0 0;
  font-size: 14px;
}

.team .member .social {
  margin-top: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.team .member .social a {
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  width: 32px;
  height: 32px;
  background: #a8a5ae;
}

.team .member .social a i {
  color: #fff;
  font-size: 16px;
  margin: 0 2px;
}

.team .member .social a:hover {
  background: #009970;
}

.team .member .social a+a {
  margin-left: 8px;
}

.view a {
  padding: 15px 25px; 
  background-color: #A53860; 
  text-align: center; color: #eeee; 
  position:relative; 
  top: 25px;
  border-radius: 25px;
}

.view a:hover {
background-color: #009970;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
  padding: 30px;
  width: 100%;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.contact .info i {
  font-size: 20px;
  color: #fff;
  float: left;
  width: 44px;
  height: 44px;
  background: #A53860;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #36343a;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #686470;
}

.contact .php-email-form {
  width: 100%;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #A53860;
  border: 0;
  padding: 10px 30px;
  color: #eeeeee;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #00805d;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
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
  color: #00c28e;
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
  background: #00664b;
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
  background: #00805d;
  color: #eeeeee;
  text-decoration: none;
}
        </style>
</head>

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
            <li><a class="nav-link scrollto" href="workout.php">Workout</a></li>
            <li><a class="nav-link scrollto"  href="recipe.php">Recipes</a></li>
            <li><a class="getstarted scrollto" href="#videos">Get Started</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Videos</h1>
      <h2>“If you want something you've never had, you must be willing to do something you've never done.” -Thomas Jefferson.</h2>
      <a href="#videos" class="btn-get-started scrollto">Get Started</a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

      <div class="container con-video" id="videos" style="font-family: 'Overpass', sans-serif; margin-top: 20px">
        <div class="row">
          <div class="col-lg-7 col-sm-12 col-md-12" data-aos="fade-right">
            <h2 style="font-family: 'Overpass', sans-serif; font-weight:600;">
              <?php echo $judul ?>
            </h2>
            <div class="youtube-video">
              <?php echo youtube($link); ?>
            </div>
            <div class="kreator-vid" style="margin: 30px 0 20px 0">
              <?php echo $kreator ?>
            </div>
            <div class="date-upload" style="font-size: small;color:grey;">
              <?php echo $tgl ?>
            </div>
            <div class="like-btn" style="text-align:right">
            <button id="like" onclick="liked()">
              <i class="fa fa-thumbs-up"></i>
              <span class="icon">Like</span>
            </button>
            </div>
            <div class="deskripsi-vid" style ="border: 1px solid grey; padding: 10px; margin-bottom:80px">
              <p><strong>About the video</strong></p>
              <?php echo $des ?>
            </div>
          <div>
      </div>
      </div>

    
          <div class="col-lg-4 col-sm-8" style="margin-top:60px; margin-bottom:70px; margin:auto" data-aos="fade-left">
            <div class="recent-pos">
              <h4 atyle="font-family: 'Overpass', sans-serif;">Recent Post</h4>
              <?php while($row1 = mysqli_fetch_array($video)){
                ?>
                <div class="d-flex position-relative" style="margin-top:10px">
                  <img src="<?php echo $row1["foto_cover"]; ?>" class="flex-shrink-0 me-3" width="120px"  height="100px"alt="...">
                  <div>
                    <p class="mt-0"><strong><?php echo $row1["judul_vid"]?></strong></p>
                    <p><?php $row1["tgl_upload"]?></p>
                    <a href="#" class="stretched-link" style="text-decoration:none; color: #A53860;">See video</a>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>

        </div>
      </div> 
</body>
</main><!-- End #main -->

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
            <p>Would you like to receive the healthy recipes and ideas to workout to your inbox?</p>
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
  


</html>