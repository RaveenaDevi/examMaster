
<?php
  // Check if the user is logged in
  include("auth.php");

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="classes.css"/>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title> BSc Question Papers</title>
    
</head>
<body>
    
<?php
require("header.php");
?>

<section class="icons">
<h1 class="heading">BSc-Previous year question paper</h1>
<h2 class="heading2">Previous year question paper for all subjects in 2nd sem , 4th sem , 6th sem , 1st sem , 3rd sem , 5th sem of BSc</h2>

<div class="box-container">

  
<div class="dropdown">
  <button class="dropbtn"><h3> 1st-sem</h3></button>
  <div class="dropdown-content">
    <a href="images\bachelors.jpg" target="_blank">statistical methods</a>
    <a href="images\wolfa.svg" target="_blank">calculas</a>
    <a href="subject3.pdf" target="_blank">algebra</a>
    <a href="subject4.pdf" target="_blank">english</a>
  </div>
</div>
    <div class="dropdown">
  <button class="dropbtn"><h3> 2nd-sem</h3></button>
  <div class="dropdown-content">
    <a href="" target="_blank">real analyasis </a>
    <a href="" target="_blank">differential equations</a>
    <a href="" target="_blank">data structures</a>
    <a href="" target="_blank">english</a>
  </div>
</div>
  
        <div class="dropdown">
  <button class="dropbtn"><h3> 3rd-sem</h3></button>
  <div class="dropdown-content">     
<a href="" target="_blank">group theory</a>
<a href="" target="_blank">data and file  structure</a>
<a href="" target="_blank">real functions</a>
    <a href="" target="_blank">english</a>
       
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn"><h3> 4rth-sem</h3></button>
  <div class="dropdown-content">
    <a href="" target="_blank">algebra</a>
    <a href="" target="_blank">python</a>
    <a href="" target="_blank">integration</a>
    <a href="" target="_blank">GE</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn"><h3> 5th-sem</h3></button>
  <div class="dropdown-content">
    <a href="" target="_blank">calculas</a>
    <a href="" target="_blank">probability</a>
    <a href="" target="_blank">statistics</a>
    <a href="" target="_blank">english</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn"><h3> 6th-sem</h3></button>
  <div class="dropdown-content">
    <a href="" target="_blank">algebra</a>
    <a href="" target="_blank">ring theory</a>
    <a href="" target="_blank">data analisis using r</a>
    <a href="" target="_blank">MATC-DS</a>
  </div>
</div>
    
</section>

<!--homeabout start  -->               
                              
<section class="home-about">
    <div class="image">
    <img src="images\laptop.jpg"alt="study" class="imagestudy">
    </div>
    <div class="content">
                <h2>About ExamMaster</h2>
                <p> a user-friendly interface, easy navigation, and a commitment to quality, Exam Master is the go-to destination for students looking to succeed in their college studies. Join us today and take your academic performance to the next level!"...........</p>
                <a href="about.php" class="button">read more</a>
    </div>
</section>
<!--homeabout end -->
    <?php
    require("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>