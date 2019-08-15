<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $title;?></title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="./css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="./css/style.css" rel="stylesheet">
<style>
  * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  font-weight:bold ;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


</style>
</head>

<body>
<!--    <header class="page-footer font-small black">-->

<ul class="navbar-nav mr-auto">
     <nav class="navbar navbar-expand-lg navbar-dark  black">
  <a class="navbar-brand" href="home.php">OCS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle `````````````//*3navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto mr-5" style="margin-right:60px !important;">
      <?php
        session_start();
        $role = $_SESSION['role'];
       if($role == "student"){?>
          <li class="nav-item <?php if($active=='home') echo "active";?>">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if($active=='about') echo "active";?>">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item <?php if($active=='sendRequest') echo "active";?>">
            <a class="nav-link" href="sendRequest.php">Send Request</a>
          </li>
          <li class="nav-item <?php if($active=='seeStatus') echo "active";?>">
            <a class="nav-link" href="viewStatus.php"stutus.php>Progress</a>
          </li>
          
       <?php }
       else{?>
        <li class="nav-item <?php if($active=='home') echo "active";?>">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if($active=='about') echo "active";?>">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item <?php if($active=='viewRequest') echo "active";?>">
              <a class="nav-link" href="viewRequest.php">View Request</a>
            </li>
       <?php }?>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
           <div class="dropdown-menu">
                <a class="dropdown-item" href="./setting.php">Change Password</a>
                <a class="dropdown-item" href="./logout.php">Logout</a>
            </div>
        </li>

    </ul>
  </div>
</nav>
<!-- Collapsible content -->

</nav>
</header>
<!--/.Navbar-->