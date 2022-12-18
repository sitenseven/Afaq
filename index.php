<?php
session_start();
$con = mysqli_connect("sql100.epizy.com","epiz_26503835","afaq7098654321","epiz_26503835_port");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql = "SELECT * FROM counter";
$result = mysqli_query($con, $sql);
// Fetch all
//mysqli_fetch_all($result, MYSQLI_ASSOC);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// Free result set
mysqli_free_result($result);
$cont = $row['visits']+1;
$ba = $_SERVER['REMOTE_ADDR'];
$bb = $_SERVER['HTTP_USER_AGENT'];
   

if($_SESSION["visited"] !== 1){
 $sqlz = "UPDATE counter SET visits='$cont' WHERE id=1";
    if ( $con->query($sqlz) === TRUE) {
 $_SESSION["visited"] = 1;
    
    } else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
   
}


$sqlb = "INSERT INTO browser (ip, other)
VALUES ('$ba', '$bb')";


if ($con->query($sqlb) === TRUE) {
//  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
$sql = "SELECT * FROM counter";
$result = mysqli_query($con, $sql);
// Fetch all
//mysqli_fetch_all($result, MYSQLI_ASSOC);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// Free result set
mysqli_free_result($result);
mysqli_close($con);



?>




<?php /*?><?php
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('05826d62fea1636dee7aa9ed912bf86d','86bc6dcf9ec0fac10065582907e8c88b',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "afaq37447@gmail.com",
          'Name' => "afaq"
        ],
        'To' => [
          [
            'Email' => "afaq37447@gmail.com",
            'Name' => "afaq"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
die();
?><?php */?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Home - AFAQ AHMAD</title>
<meta name="description" content="I am Freelancer">
<link rel="icon" type="image/png" sizes="148x148" href="assets/img/astro.png?h=64af9f94e3da95f40f186084c407720c">
<link rel="shortcut icon" href="assets/astro.ico" type="image/x-icon" />
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=5f8fb6af5192d27dca5234e96c213451">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/styles.min.css?h=81aa01663e1c15cda87ccf6cabb3d282">
<link rel="stylesheet" href="assets/css/style.css">
    	<link href="css/player.css" rel="stylesheet" type="text/css">
	<link href="css/demo.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="assets/js/app.js"></script>
    <script src="assets/js/particles.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<style>
::-webkit-scrollbar {
width: 12px;
}
 
::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}
#loading {
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #fff url('c.gif') no-repeat center center;
    z-index: 9999;
}
.bg-secondary, .footer {
    background-color : #9921e8;
    background-image : linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
}
.bg-primary, .copyright, .btn-primary {
    background-color: #2f852a;
    background-image: linear-gradient(329deg, #2f852a 0%, #a5e69f 100%);
    border: none;
}
hr.star-light:after {
    color: #fff;
    background-color: #2c3e50;
}
.active {
    background-color: #2f852a;
    background-image: linear-gradient(329deg, #2f852a 0%, #a5e69f 100%);
}
#mainNav .navbar-nav>li.nav-item>a.nav-link.active, #mainNav .navbar-nav>li.nav-item>a.nav-link.active:active, #mainNav .navbar-nav>li.nav-item>a.nav-link.active:focus, #mainNav .navbar-nav>li.nav-item>a.nav-link.active:hover {
    background-color: #2f852a;
    background-image: linear-gradient(329deg, #2f852a 0%, #a5e69f 100%);
}
#mainNav .navbar-nav li.nav-item a.nav-link:hover {
    color: #f9e60a;
}
.portfolio .portfolio-item .portfolio-item-caption {
    background-color: #2f852a;
    background-image: linear-gradient(329deg, #2f852a 0%, #a5e69f 100%);
}
.row {
    margin: 0px;
}
h1, h2 {
    word-break: break-all;
}
    hr:before, hr:after { content: ''; box-sizing:unset }
hr {
  border: 0;
  margin: 1.35em auto;
  max-width: 100%;
  background-position: 50%;
  box-sizing: border-box;
}
    
 .accessory {
  height: 6px;
  background-image: radial-gradient(
    closest-side,
    hsla(0, 0%, 50%, 1.0),
    hsla(0, 0%, 50%, 0) 100%);
  position: relative;
     margin-top: 2.5rem;
     margin-bottom: 2.5rem;
}
.accessory:after {
  position: absolute;
  top:  50%;
  left: 50%;
  display:block;
  background-color: hsl(0, 0%, 75%);
  height: 12px;
  width:  12px;
  transform: rotate(45deg);
  margin-top:  -10px;
  margin-left: -10px;
  border-radius: 4px 0;
  border: 4px solid hsla(0, 0%, 100%, 0.35);
  background-clip: padding-box;
  box-shadow: -10px 10px 0 hsla(0, 0%, 100%, 0.15), 10px -10px 0 hsla(0, 0%, 100%, 0.15);
}
    
    @-webkit-keyframes rotating {
    from{
        -webkit-transform: rotate(0deg);
    }
    to{
        -webkit-transform: rotate(360deg);
    }
}

.rotating {
    -webkit-animation: rotating 2s linear infinite;
}
/* Shine */
.shine {
        margin-top: -10px;
height: 2.5rem;  width: 60%;
  background-image: radial-gradient(
    farthest-side at 50% -50%,
    hsla(0, 0%, 0%, 0.5),
    hsla(0, 0%, 0%, 0));
  position: relative; 
}

.shine::before {
  height: 4px;
  position: absolute;
  top: 30px;
  left: 0;
  right: 0;
  background-image: linear-gradient(
    90deg,
    hsla(0, 0%, 0%, 0),
    hsla(0, 0%, 0%, 0.75) 50%,
    hsla(0, 0%, 0%, 0));
}



.stars {
/*  height: auto;*/
  color: gold;
  text-align: center;
  
}    
   .stars:after {
    content: "★";
    font-size: 2em;
    text-shadow:
      -2em 0,
      -1em 0,
       1em 0,
       2em 0;
  } 
    @keyframes animated-border {
  0% {
    box-shadow: 0 0 0 0 rgba(255,255,255,0.4);
  }
  100% {
     box-shadow: 0 0 0 20px rgba(255,255,255,0);
  }
}

.borderanim {
  animation: animated-border 1.5s infinite;
 
}
    
    
    @keyframes animated-borderb {
  0% {
    box-shadow: 0 0 0 0 rgba(135, 132, 124,0.6);
  }
  100% {
     box-shadow: 0 0 0 20px rgba(255,255,255,0);
  }
}

.borderanimb {
  animation: animated-borderb 1.5s infinite;
 
}
  
    
</style>
</head>

<body id="page-top">
<div id="loading"></div>
<script>

jQuery(document).ready(function() {
        setTimeout(function(){  jQuery('#loading').fadeOut(3000);}, 3000);
        
   
});
</script>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase borderanim" id="mainNav">
  <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">AFAQ AHMAD</a>
    <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav navbar-nav ml-auto">
<!--        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">certificates</a></li>-->
        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#languages"><strong>expertise</strong></a></li>
        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#projects">projects</a></li>
        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#experience">skills</a></li>
        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">about</a></li>
        <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>

</nav>
    
<header style="box-shadow: 0 48px 68px #368a30, 0 2px 0 #6eb969, 0px 9px 10px rgb(0 6 5 / 40%);" class="masthead bg-primary text-white text-center">
     <div id="particles-js"> </div>
  <div class="container"><img class="img-fluid d-block mx-auto mb-5" src="assets/img/profile.png?h=ca1ddcee1cb057489d44a94e63b7fbc4">
    <h1>Afaq Ahmad</h1>
<!--    <hr class="star-light">-->
      <hr class="accessory">

    <!-- Start: Animated Type Heading -->
    <div class="row">
      <div class="col">
        <div class="caption v-middle text-center">
          <p class="cd-headline clip"> <span class="blc">I'm | </span> <span class="cd-words-wrapper"> <b class="is-visible">Designer.</b> <b>Developer.</b> <b>Programmer.</b> <b>Creative.</b> </span> </p>
        </div>
        <!-- End: Animated Type Heading --> 
      </div>
    </div>
     
  </div>
       
</header>
<section id="portfolio" class="portfolio d-none">
  <div class="container">
    <h2 class="text-uppercase text-center text-secondary">CERTIFICATES</h2>
<!--    <hr class="star-dark mb-5">-->
      <hr class="stars">
<hr class="shine">
      <div class="row">
      <div class="col-md-6 col-lg-4"> <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-1">
        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
          <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="assets/img/portfolio/cabin.png?h=5bde47039f23de84a7748bee08793ac3"></a> </div>
      <div class="col-md-6 col-lg-4"> <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-2">
        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
          <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="assets/img/portfolio/cake.png?h=4b5723e2b00006ef3a25df097c7187dd"></a> </div>
      <div class="col-md-6 col-lg-4"> <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-3">
        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
          <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="assets/img/portfolio/circus.png?h=984b4ff719255fcbf2e01164905ebb90"></a> </div>
      <div class="col-md-6 col-lg-4"> <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-4">
        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
          <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="assets/img/portfolio/game.png?h=b5df08ec517f8b9872be52e015333d8a"></a> </div>
      <div class="col-md-6 col-lg-4"> <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-5">
        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
          <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="assets/img/portfolio/safe.png?h=77cbc82936acf11b03bd687ff795e835"></a> </div>
      <div class="col-md-6 col-lg-4"> <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-6">
        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
          <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="assets/img/portfolio/submarine.png?h=71572e367539ee27f418326f2361bce2"></a> </div>
    </div>
  </div>
</section>
<section id="languages">
  <div style="position:relative" class="container">
  <div style="top: 0;right: 0;left: 0;bottom: 0;position: absolute;background: linear-gradient(90deg, rgba(204, 255, 0, 0.63) 3.9%, rgba(0, 117, 225, 0.897067) 12.17%, rgba(80, 241, 106, 0.727264) 25.81%, rgba(0, 133, 255, 0.567282) 38.66%, rgba(218, 112, 112, 0.433478) 49.41%, rgba(218, 86, 86, 0.297312) 60.35%, rgba(64, 218, 61, 0.160554) 71.34%, rgba(0, 38, 239, 0.291393) 77.38%, rgba(36, 0, 255, 0.44) 84.24%);filter: blur(109px);pointer-events: none;z-index: -100;"></div>
    <h2 class="text-uppercase text-center text-secondary">expertise</h2>
<!--    <hr class="star-dark mb-5">-->
      <hr class="stars">
<hr class="shine">
    <div class="borderanimb" style="max-height: 300px;overflow-y: scroll;overflow-x: hidden;">
      <h3 class="text-uppercase text-center text-secondary">Programming Languages</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr></tr>
          </thead>
          <tbody>
            <tr>
              <td>CSS</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                </div></td>
            </tr>
            <tr>
              <td>HTML</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                </div></td>
            </tr>
            <tr>
              <td>PHP</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                </div></td>
            </tr>
            <tr>
              <td>JAVASCRIPT</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                </div></td>
            </tr>
            <tr>
              <td>JQUERY</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                </div></td>
            </tr>
            <tr>
              <td>ANGULAR</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                </div></td>
            </tr>
            <tr>
              <td>JAVA</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                </div></td>
            </tr>
            <tr>
              <td>C#</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                </div></td>
            </tr>
            <tr>
              <td>PYTHON</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                </div></td>
            </tr>
            <tr>
              <td>KOTLIN</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                </div></td>
            </tr>
            <tr>
              <td>API</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                </div></td>
            </tr>
          </tbody>
        </table>
      </div>
      <h3 class="text-uppercase text-center text-secondary">Databases</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr></tr>
          </thead>
          <tbody>
            <tr>
              <td>MY SQL</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                </div></td>
            </tr>
            <tr>
              <td>FIREBASE</td>
              <td><div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                </div></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">Experience</h3>
          <p>I have been working as a web developer for the last five years. And I've worked with companies. I have created many websites. I am a full-stack web developer and also a good programmer. I have created Android and desktop apps for clients with excellent experience.</p>
        </div>
        <div class="clearfix"></div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">Speaking Languages</h3>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-capitalize">URDU</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div></td>
                </tr>
                <tr>
                  <td class="text-uppercase">English</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <h3 class="text-uppercase text-center text-secondary">web frame works</h3>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-capitalize">CODEIGNITER</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div></td>
                </tr>
                <tr>
                  <td class="text-uppercase">DJANGO</td>
                  <td><div class="progress">
                      <div class="progress-bar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                    </div></td>
                </tr>
                <tr>
                  <td class="text-uppercase">LARAVEL</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">REACT</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                    </div></td>
                </tr>
                <tr>
                  <td class="text-uppercase">BOOTSTRAP</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                    </div></td>
                </tr>
                <tr>
                  <td class="text-uppercase">NODE.JS</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <h3 class="text-uppercase text-center text-secondary">ANDROID DEVELOPMENT&nbsp;</h3>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-capitalize">FLUTTER</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                    </div></td>
                </tr>
                <tr>
                  <td class="text-uppercase">JQUERY MOBILE</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div></td>
                </tr>
                <tr>
                  <td class="text-uppercase">ANDROID STUDIO</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-capitalize">REACT NATIVE</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                    </div></td>
                </tr>
                <tr>
                  <td class="text-uppercase">XAMARIN</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <h3 class="text-uppercase text-center text-secondary">DESKTOP DEVELOPMENT</h3>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">VISUAL STUDIO&nbsp;</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">NETBEANS&nbsp;</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <h3 class="text-uppercase text-center text-secondary">other</h3>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">wordPress</td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">Shopify<br></td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">GIT<br></td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">UNITY<br></td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          
      </div>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">Video editor + animation<br></td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">ghrapic designer<br></td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">3d modeling<br></td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">70%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">3d animation<br></td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">65%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          
      </div>
        <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">AUTOCAD<br></td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
            <div class="col">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-uppercase">Microsoft Office<br></td>
                  <td><div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        </div>
    </div>
  </div>
</section>
<section style="box-shadow: 0px 48px 60px #3a8e35, 0px -48px 60px #7bc476;
}" id="projects" class="bg-primary">
  <div class="container">
    <h2 class="text-uppercase text-center text-light">Projects</h2>
<!--    <hr class="star-light mb-5">-->
            <hr class="accessory">

    <div class="border rounded-0 border-light shadow-sm" style="padding: 39px;">
      <div class="row text-light">
        <div class="col-md-3">
          <h1>20 +</h1>
          <p class="text-uppercase">WEBSITES CREATED</p>
        </div>
        <div class="col-md-3">
          <h1>5 +</h1>
          <p class="text-uppercase">Softwares cracked</p>
        </div>
        <div class="col-md-3">
          <h1>7 +</h1>
          <p class="text-uppercase">android apps developed</p>
        </div>
        <div class="col-md-3">
          <h1>5 +</h1>
          <p class="text-uppercase">desktop applications created</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section style="position:relative;" id="experience">
  <div class="container">
   <div style="top: 0;right: 0;left: 0;bottom: 0;position: absolute;background: linear-gradient(90deg, rgba(204, 255, 0, 0.63) 3.9%, rgba(0, 117, 225, 0.897067) 12.17%, rgba(80, 241, 106, 0.727264) 25.81%, rgba(0, 133, 255, 0.567282) 38.66%, rgba(218, 112, 112, 0.433478) 49.41%, rgba(218, 86, 86, 0.297312) 60.35%, rgba(64, 218, 61, 0.160554) 71.34%, rgba(0, 38, 239, 0.291393) 77.38%, rgba(36, 0, 255, 0.44) 84.24%);filter: blur(109px);pointer-events: none;z-index: -100;"></div>
    <h2 class="text-uppercase text-center text-secondary">skills</h2>
<!--    <hr class="star-dark mb-5">-->
            <hr class="stars">
<hr class="shine">
    <div class="borderanimb" style="max-height: 300px;overflow-y: scroll;overflow-x: hidden; ">
   
      <h2 class="text-uppercase text-center text-secondary">web</h2>
      <div class="row">
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">website front end code&nbsp;</h3>
          <p>I will get any website's front-end code code and function to use them for benefits . Javascript, CSS, HTML, Jquery, Angular and other front-end codes.</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">password encrypt</h3>
          <p>It is most likely impossible to crack.</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">Always lastest</h3>
          <p>Always use up-to-date libraries and frameworks . and advancing functions with new updates.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">coding expert</h3>
          <p>My code will be neat and clean . Make better and more comprehensible CSS class and element id names. using external scripts and always ready to create any type of function.</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">advance script handling&nbsp;</h3>
          <p>Using advanced techniques to manage scripts When to load a script and when should it be loaded to help increase page loading speed? When a window or document loads, add aysnc, defer nbsp; to the script tag.</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">responsive design&nbsp;</h3>
          <p>Using CSS , jQuery,bootstrap , W3CSS , bulma, and media queries to make a webpage fully responsive to all screen sizes. &nbsp;</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">SEO EXPERT</h3>
          <p>I know mostly everything about SEO. Google Business, as well as other heading tags and SEO tools. </p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">advance ajax with encryption</h3>
          <p>Making your own secret key and encrypting data with it before making an advanced ajax XMLHttpRequest with ecryption like crsf token.<br>
            <br>
            <br>
          </p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">no page reload</h3>
          <p>Using ajax to handle every backend command to get a response without reloading the page and show it as needed with jQuery.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">working fast&nbsp;</h3>
          <p>I know mostly every tool to work fast, like software and tools that already have created classes and code to help with working fast.</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary"><strong>Digital marketing</strong><br>
          </h3>
          <p>I know all the advanced digital marketing techniques using tools like Google Trends, Keywords Surfer, Similar Web, SEO Audit Tool, and many others.</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">remote work</h3>
          <p>I have excellent experience with remote work using FTP with advanced FTP manager and editor live working.</p>
        </div>
      </div>
      <h2 class="text-uppercase text-center text-secondary">Android&nbsp;</h2>
      <div class="row">
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">Socket programming</h3>
          <p>I have experience with socket programming using ports and IP addresses to send and receive any type of data using wifi . created many apps with socket programming&nbsp;.</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">Designing&nbsp;</h3>
          <p>Android layout desinging custom designer . create any type of design as needed .</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">android hacking</h3>
          <p>Using tools like Xposed with root access, hack android apps , create android hacking apps, Creating Android moded apps and finding the most advanced Android moded apps by top developers</p>
        </div>
      </div>
      <h2 class="text-uppercase text-center text-secondary">DESktop applications</h2>
      <div class="row">
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">Custom design</h3>
          <p>Creating custom designs with C# and Visual Studio Blend and websites using CSS</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">libraries&nbsp;</h3>
          <p>Using many libraries in Visual Studio using C#&nbsp; and importing custom&nbsp; references , like using all keyboard shortcut keys in C#&nbsp; and it will be helpful&nbsp;</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">creating advance</h3>
          <p>Using API and other tools, create an advanced desktop application with background services and tasks with timers. </p>
        </div>
      </div>
      <h2 class="text-uppercase text-center text-secondary">Other&nbsp;</h2>
      <div class="row">
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">Machine learning with python</h3>
          <p>Using machine learning, I created apps for practice using decision trees and clustering with CSV data files&nbsp;.<br>
          </p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary"><strong>artificial intelligence with python</strong></h3>
          <p>created an artificial intelligence chat bot with tensor flow, numpy,seq2seq_model ,keras , nltk and others.<br>
            <br>
          </p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary">Decoding and reverse engineering&nbsp;</h3>
          <p>Decode android and desktop applications and crack them or customize them as needed using decoding tools</p>
        </div>
        <div class="col">
          <h3 class="text-uppercase text-center text-secondary"><strong>ethical hacking</strong></h3>
          <p>Hacking using kali linux and testing findings for bugs , using tools like nmap ,&nbsp;metasploit , sql injection,Burp Suite and many others.

</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section style="box-shadow: 0px 48px 60px #3a8e35, 0px -48px 60px #7bc476;
}" id="about" class="bg-primary text-white mb-0">
  <div class="container">
    <h2 class="text-uppercase text-center text-white">About</h2>
<!--    <hr class="star-light mb-5">-->
            <hr class="accessory">

    <div class="customscroll borderanimb" style="max-height: 160px;overflow-y: scroll;overflow-x: hidden;">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Hello, I’m AFAQ AHMAD, a 22-year-old guy from Faisalabad, Pakistan. Creative and self-taught programmer with a strong passion for programming and creating new programs.<br>
            <br>
            <br>
          </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr></tr>
              </thead>
              <tbody style="color: WHITE;">
                <tr>
                  <td>AGE</td>
                  <td>22</td>
                </tr>
                <tr>
                  <td>COUNTRY</td>
                  <td>PAKISTAN</td>
                </tr>
                <tr>
                  <td>WHATSAPP</td>
                  <td>+92 311 0733140</td>
                </tr>
                <tr>
                  <td>EMAIL</td>
                  <td>AFAQ37447@GMAIL.COM</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h2 class="text-uppercase text-center text-white"><br>
            EDUCATION &amp; QUALIFICATIONS<br>
            <br>
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="text-center border rounded-0 border-dark d-xl-flex justify-content-center align-items-center align-self-center my-auto justify-content-xl-center align-items-xl-center" style="color: rgb(67,61,61);font-weight: 600;font-size: 16px;width: 92px;">2015&nbsp;</p>
          <h3>Matriculation<br>
          </h3>
          <p class="text-center border-dark d-xl-flex justify-content-center align-items-center align-self-center my-auto justify-content-xl-center align-items-xl-center" style="color: rgb(67,61,61);font-weight: 600;font-size: 16px;width: 92px;">High School<br>
          </p>
          <p class="lead">passed high school matriculation exams in 2017<br>
            <br>
          </p>
        </div>
        <div class="col">
          <p class="text-center border rounded-0 border-dark d-xl-flex justify-content-center align-items-center align-self-center my-auto justify-content-xl-center align-items-xl-center" style="color: rgb(67,61,61);font-weight: 600;font-size: 16px;width: 92px;">2017 - 2019<br>
          </p>
          <h3>Intermediate<br>
          </h3>
          <p class="text-center border-dark d-xl-flex justify-content-center align-items-center align-self-center my-auto justify-content-xl-center align-items-xl-center" style="color: rgb(67,61,61);font-weight: 600;font-size: 16px;width: 92px;">Collage<br>
          </p>
          <p class="lead">Studied Intermediate of&nbsp;CIVIL ENGINEER .<br>
            <br>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="text-center text-body border rounded-0 border-dark d-xl-flex justify-content-center align-items-center align-self-center my-auto justify-content-xl-center align-items-xl-center" style="color: rgb(7,27,204);font-weight: 600;font-size: 16px;width: 92px;border-color: rgb(7,27,204);">2017 - 2019</p>
          <h3>Diplomas &amp; certificates<br>
          </h3>
          <p class="text-center border-dark d-xl-flex justify-content-center align-items-center align-self-center my-auto justify-content-xl-center align-items-xl-center" style="color: rgb(67,61,61);font-weight: 600;font-size: 16px;width: 92px;">Insitutes</p>
          <p class="lead">Web development course , Android&nbsp;development , Autocad ,&nbsp;<br>
            Computer Science.</p>
        </div>
        <div class="col">
          <p class="text-center border rounded-0 border-dark d-xl-flex justify-content-center align-items-center align-self-center my-auto justify-content-xl-center align-items-xl-center" style="color: rgb(67,61,61);font-weight: 600;font-size: 16px;width: 113px;">2020 - Present</p>
          <h3>BSCS<br>
          </h3>
          <p class="text-center border-dark d-xl-flex justify-content-center align-items-center align-self-center my-auto justify-content-xl-center align-items-xl-center" style="color: rgb(67,61,61);font-weight: 600;font-size: 16px;width: 92px;">University<br>
          </p>
          <p class="lead">University of faisalabad.</p>
        </div>
      </div>
      <div class="text-center mt-4"><a class="btn btn-outline-light btn-xl" role="button" href="#"><i class="fa fa-download mr-2"></i><span>Download CV!</span></a></div>
    </div>
  </div>
</section>
<section id="contact">
  <div style="position:relative;" class="container">
  <div style="top: 0;right: 0;left: 0;bottom: 0;position: absolute;background: linear-gradient(90deg, rgba(204, 255, 0, 0.63) 3.9%, rgba(0, 117, 225, 0.897067) 12.17%, rgba(80, 241, 106, 0.727264) 25.81%, rgba(0, 133, 255, 0.567282) 38.66%, rgba(218, 112, 112, 0.433478) 49.41%, rgba(218, 86, 86, 0.297312) 60.35%, rgba(64, 218, 61, 0.160554) 71.34%, rgba(0, 38, 239, 0.291393) 77.38%, rgba(36, 0, 255, 0.44) 84.24%);filter: blur(109px);pointer-events: none;z-index: -100;"></div>
    <h2 class="text-uppercase text-center text-secondary mb-0">Contact Me</h2>
<!--    <hr class="star-dark mb-5">-->
            <hr class="stars">
<hr class="shine">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Name</label>
              <input class="form-control" type="text" id="name" required="" placeholder="Name">
              <small class="form-text text-danger help-block"></small></div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Email Address</label>
              <input class="form-control" type="email" id="email" required="" placeholder="Email Address">
              <small class="form-text text-danger help-block"></small></div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
              <label>Phone Number</label>
              <input class="form-control" type="tel" id="phone" required="" placeholder="Phone Number">
              <small class="form-text text-danger help-block"></small></div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-5 pb-2">
              <textarea class="form-control" id="message" required="" placeholder="Message" rows="5"></textarea>
              <small class="form-text text-danger help-block"></small></div>
          </div>
          <div id="success"></div>
          <div class="form-group">
            <button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
    <section style="box-shadow:  0px -48px 60px #7bc476;
}" class="bg-primary">
    <div class="container">
    <h2 class="text-uppercase text-center text-white">MUSIC</h2>
<!--    <hr class="star-light mb-5">     -->
              <hr class="accessory">

        <div class="demo-colors" id="demo">
            
            <h3 style="cursor: pointer;" onClick="display_streamsetting()" >SETTING <i class="fa fa-gear rotating"></i></h3>
            <style>
                .shows {
                    
                    display: block;
                    opacity: 1;
                    
                }
                
                .settingsstream {
                      display: none; 
/*                    opacity: 0;*/
                }
                .animationa {
                    transition: all 2s ease;
                }
            </style>
<div  class="settingsstream" id="streamsetting">
            			<p>
				<div>Background Color</div><br>
				<div class="btn-color btn-red"></div>
				<div class="btn-color btn-pink"></div>
				<div class="btn-color btn-purple"></div>
				<div class="btn-color btn-deeppurple"></div>
				<div class="btn-color btn-indigo"></div>
				<div class="btn-color btn-blue"></div>
				<div class="btn-color btn-lightblue"></div>
				<div class="btn-color btn-cyan"></div>
				<div class="btn-color btn-teal chek"></div>
				<div class="btn-color btn-green"></div>
				<div class="btn-color btn-lightgreen"></div>
				<div class="btn-color btn-lime"></div>
				<div class="btn-color btn-yellow"></div>
				<div class="btn-color btn-amber"></div>
				<div class="btn-color btn-orange"></div>
				<div class="btn-color btn-deeporange"></div>
				<div class="btn-color btn-brown"></div>
				<div class="btn-color btn-grey"></div>
				<div class="btn-color btn-bluegrey"></div>
				<div class="btn-color btn-darkblue"></div>
				<div class="btn-color btn-black"></div>
				<div class="btn-color btn-white"></div>
			</p>
			<p>
				<div>Accent Color</div><br>
				<div class="abtn-color abtn-red"></div>
				<div class="abtn-color abtn-pink"></div>
				<div class="abtn-color abtn-purple"></div>
				<div class="abtn-color abtn-deeppurple"></div>
				<div class="abtn-color abtn-indigo"></div>
				<div class="abtn-color abtn-blue"></div>
				<div class="abtn-color abtn-lightblue"></div>
				<div class="abtn-color abtn-cyan"></div>
				<div class="abtn-color abtn-teal"></div>
				<div class="abtn-color abtn-green"></div>
				<div class="abtn-color abtn-lightgreen"></div>
				<div class="abtn-color abtn-lime"></div>
				<div class="abtn-color abtn-yellow"></div>
				<div class="abtn-color abtn-amber"></div>
				<div class="abtn-color abtn-orange"></div>
				<div class="abtn-color abtn-deeporange chek"></div>
				<div class="abtn-color abtn-brown"></div>
				<div class="abtn-color abtn-grey"></div>
				<div class="abtn-color abtn-bluegrey"></div>
				<div class="abtn-color abtn-darkblue"></div>
				<div class="abtn-color abtn-black"></div>
			</p>
			<p>
				<div>Layout</div><br>
				<div class="btn-lay btn-hor chek2"></div>
				<div class="btn-lay btn-ver"></div>
			</p>
			<p>
			<div>Blur Effect</div><br>
			<label class="switch">
				<input type="checkbox">
				<span class="slider roundz"></span>
			</label>
			</p>
            
            </div>
			<div class="player" id="stream"></div>					
		</div>

        
        </div>
    </section>
<footer class="footer text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Location</h4>
        <p>1: LAHORE&nbsp; 2: FAISALABAD</p>
      </div>
      <div class="col-md-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase">Around the Web</h4>
        <ul class="list-inline">
          <li class="list-inline-item"></li>
          <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="mailto:afaq37447@gmail.com"><i class="fa fa-google-plus fa-fw"></i></a></li>
          <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://twitter.com/afaq37447" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
          <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="https://www.upwork.com/freelancers/~01821cc6ca1baec23f" target="_blank"><img style="width: 100%;" src="https://cdn2.iconfinder.com/data/icons/picons-social/57/79-upwork-2-512.png"></a></li>
          <li class="list-inline-item"></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4 class="text-uppercase mb-4">About Freelancer</h4>
        <p class="lead mb-0"><span>Freelancing is the best .</span></p>
          <p> TOTAL VISITS = <?=$row['visits']?></p>
      </div>
    </div>
  </div>
</footer>
<div class="copyright py-4 text-center text-white">
  <div class="container"><small>Copyright ©&nbsp;AFAQ AHMAD 2021</small></div>
</div>
<div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="assets/img/portfolio/cabin.png?h=5bde47039f23de84a7748bee08793ac3">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                itaque. Nam.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
    </div>
  </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-2">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="assets/img/portfolio/cake.png?h=4b5723e2b00006ef3a25df097c7187dd">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                itaque. Nam.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
    </div>
  </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-3">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="assets/img/portfolio/circus.png?h=984b4ff719255fcbf2e01164905ebb90">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                itaque. Nam.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
    </div>
  </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-4">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="assets/img/portfolio/game.png?h=b5df08ec517f8b9872be52e015333d8a">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                itaque. Nam.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
    </div>
  </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-5">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="assets/img/portfolio/safe.png?h=77cbc82936acf11b03bd687ff795e835">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                itaque. Nam.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
    </div>
  </div>
</div>
<div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-6">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-uppercase text-secondary mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="assets/img/portfolio/submarine.png?h=71572e367539ee27f418326f2361bce2">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                itaque. Nam.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
    </div>
  </div>
</div>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> 
<script src="assets/js/script.min.js?h=2c73af3717032b599e4dfa70055516d7"></script>
		


<script src="js/playerx.js"></script>
<script src="js/demo.js"></script>
<script>
   var _0x4b4e=['#stream','https://c4.auracast.net/radio/8050/radio.mp3?1601510735','https://simbacast.herokuapp.com','player'];(function(_0xe29a92,_0x4b4e3e){var _0x3d3b9e=function(_0x274548){while(--_0x274548){_0xe29a92['push'](_0xe29a92['shift']());}};_0x3d3b9e(++_0x4b4e3e);}(_0x4b4e,0x9f));var _0x3d3b=function(_0xe29a92,_0x4b4e3e){_0xe29a92=_0xe29a92-0x0;var _0x3d3b9e=_0x4b4e[_0xe29a92];return _0x3d3b9e;};$(_0x3d3b('0x1'))[_0x3d3b('0x0')]({'URL':_0x3d3b('0x2'),'version':0x1,'cors':_0x3d3b('0x3')});
</script>
    
    <script>
function display_streamsetting () {
    $('#streamsetting').fadeToggle();
}

</script>
   
</body>
</html>