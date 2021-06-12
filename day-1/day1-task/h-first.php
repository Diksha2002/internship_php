<!DOCTYPE html>
<html>
<meta charset="utf-8" >
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<style>
body{
     font-family:   Arial, sans-serif,Helvetica;                                                                                                                              
} 
.navbar{
    overflow: hidden;
    background-color: #333;
}
.navbar a {
  float: left;
  font-size: 10px;
  color: white;
  text-align: center;
  padding: 8px 10px;
  text-decoration: none;
}
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 10px;  
  border: none;
  outline: none;
  color: white;
  padding: 8px 10px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
 background-color: red;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}



/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

/* On smaller screens, decrease text size */

</style>
</head>
<body>
<h2><marquee> Hostel Management System</marquee></h2>

<div class ="navbar">
  <a href="h-first.php">HOME</a> 
    <a href="about.php" class="dropbtn">ABOUT US</a>  
    <a href="#" class="dropbtn">DASHBORD</a> 
   <a href="contact.php" class="dropbtn">CONTACT</a> 
 <a href="#" class="dropbtn">ADMIN</a> 
    <div class="dropdown">
	<button class="dropbtn">more 
	   <i class="fa fa-caret-down"></i>
  	</button>  
             <div class="dropdown-content">
               <a href="#">guest</a>
               <a href="student.php">student</a>
                <a href="#">Rector</a>
           </div>
      </div>
 </div>
 





<p>Each room has capacity of three students. Each student is provided with a separate bed, writing table, chair and cupboard. There are Sports equipment, TV, Mess, CCTV surveillance, water purifiers with coolers, Solar water heater, 24x7 Resident Rector and Superintendent and Security facilities. Moreover, college faculties are appointed for hostel visit every week to interact with the students, check for the problems in their comfortable stay, have dinner and provide feedback to the Principal and Hostel coordinator from the college.</p>
</body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="C:\wamp64\wamp\www\project\image\hostel.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="C:\wamp64\wamp\www\project\image\Hostel-5.jpeg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="C:\wamp64\wamp\www\project\image\hostel-img2.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<hr>
        <div class="contact-me">
          <h2>Get In Touch</h2>
          <h3>contact me.</h3>
          <p>our best hostel and best activity and facility will be provided .</p>
          <a class="btn" href="mailto:diksharai2002@gmail.com">CONTACT ME</a>
        </div>
      </div>
      <div class="bottom-container">
        <a class="footer-link" href="https://www.linkedin.com/">LinkedIn</a>
        <a class="footer-link" href="https://twitter.com/">Twitter</a>
        <a class="footer-link" href="https://www.appbrewery.co/">Website</a>
        <p>© 2020 Diksha Rai.</p>
      </div>
</body>

</style>
</head>
<title> </title>
</html>