<?php
$title = "Home";
$active = "home";
include_once('./template/header.php');?>
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="./img/yyy.jpg" style="width:100%">
      
    </div>
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="./img/yyy.jpg" style="width:100%"> 
      <a href="home.php"></a>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="./img/yyy.jpg" style="width:100%">
    </div>
    <p> Online Student Clearance System
Online student clearance system is a process a student needs to complete before they leave university. They need clearance of all borrowed items from different offices. The system allows the users to check their clearance status as to whether they are in any way obligated to the university, fill and submit their clearance form, and obtain their clearance letter. Students has two status when they sick clearance: when they graduate or when they withdraw from the university. 
    </p>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
   ` <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
  </div>
<?php include_once('./template/footer.php'); ?>