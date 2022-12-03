<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
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
  margin-top:100px;
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
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
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
  <body onscroll="changecolor()">

    <script type="text/javascript">
    function rtohome(){
      window.location.href ="index.php";
    }
    function change(){
      window.location.href ="registration.php";
    }
    window.onscroll=function(){
      var top=window.scrollY;
      if(top>=50){
        document.getElementById("Nav1").style.backgroundColor = "white";
        document.getElementById("linkcolor").style.color = "black";
        document.getElementById("linkcolor1").style.color = "black";
        document.getElementById("linkcolor2").style.color = "black";
        document.getElementById("linkcolor3").style.color = "black";
      }
      else{
        document.getElementById("Nav1").style.backgroundColor = "transparent";
        document.getElementById("linkcolor").style.color = "white";
        document.getElementById("linkcolor1").style.color = "white";
        document.getElementById("linkcolor2").style.color = "white";
        document.getElementById("linkcolor3").style.color = "white";
      }
    }

    </script>


<div class="Nav" id="Nav1">
  <div class="NavbarContainer">
    <img src="images\logo.png" alt="" class="NavLogo" onclick="rtohome()">
    <div class="MobileIcon">
    <i class="fa fa-bars"></i>
    </div>
    <ul class="NavMenu ">
      <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="#about">About</a></li>
      <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
      <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="#contact">Contact Us</a></li>
      <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
    </ul>
    <div class="NavBtn">
      <button type="button" name="button" class="NavBtnLink"  onclick="change()">Signup</button>
    </div>

  </div>
</div>

<!-- Hero section -->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/image1.jpeg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/image2.webp" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/image5.jpeg" style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 30000); // Change image every 2 seconds
}
</script>

<div class="InfoContainer" id="about">
<div class="InfoWrapper2">

<div class="InfoRow">
    <div class="HeroContent" style="margin-top:588px">
      <h1 class="HeroH1">Hostel Management System</h1>
      <p class="HeroP">VIT-AP UNIVERSITY</p>
      <div class="HeroBtnWrapper">
        <button type="button" name="button" class="NavBtnLink"  onclick="change()">Get Started</button>
      </div>  
    </div>
</div>
</div>
</div>


<!-- infosection1 -->

<div class="InfoContainer" id="about">
<div class="InfoWrapper">

<div class="InfoRow" style ="margin-top:-588px">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine">World class facilities</p>
<h1 class="Heading">Best facilities with less prices</h1>
<p class="Subtitle">Cherish your hostel life with our hostels</p>
<div class="BtnWrap">
<button type="button" name="button" class="NavBtnLink">Get Started</button>
</div>
</div>
</div>

<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="images/infosectionpic1.svg" alt="">
</div>
</div>
</div>
</div>

</div>




<!-- infosection2 -->

<div class="InfoContainer">
<div class="InfoWrapper">

<div class="InfoRow" style="grid-template-areas:'col1 col2' ;">
<div class="Column1">
<div class="TextWrapper">
<p class="TopLine">Best food</p>
<h1 class="Heading">Unlimited variety of dishes</h1>
<p class="Subtitle">Taste dishes across the world </p>
<div class="BtnWrap">
<button type="button" name="button" class="NavBtnLink">Get Started</button>
</div>
</div>
</div>

<div class="Column2">
<div class="ImgWrap">
<img class="Img" src="images/infosectionpic2.svg" alt="">
</div>
</div>


</div>
</div>

</div>

<!-- footer -->
<div class="FooterContainer" id="contact">
<div class="FooterWrap">
  <div class="FooterLinksContainer">
    <div class="FooterLinksWrapper">
        <div class="FooterLinkItems">
            <h1 class="FooterLinkTitle">About Us</h1>
            <a href="aboutme.php" class="FooterLink">Developers</a>
            <a href="#about" class="FooterLink">Services</a>
            <a href="pricing.php" class="FooterLink">Pricing</a>
            <a href="admin\adminlogin.php" class="FooterLink">Admin</a>
        </div>
    </div>
  </div>

  <div class="SocialMedia">
    <div class="SocialMediaWrap">
      <a href="#" class="SocialLogo">HMS</a>
      <p class="WebsiteRights">VIT-AP</p>
      <div class="SocialIcons">
        <a href="https://www.facebook.com/vituniversity/" class="SocialIconLink"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="https://twitter.com/VIT_univ?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="SocialIconLink"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://instagram.com/vitap.university?igshid=YmMyMTA2M2Y=" class="SocialIconLink"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://youtu.be/mJx6l65frqY" class="SocialIconLink"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>

  </div>

</div>
</div>


  </body>
</html>
