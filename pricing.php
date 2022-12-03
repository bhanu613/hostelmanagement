<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pricing</title>
    <link rel="stylesheet" href="css\pricing.css">

    <script type="text/javascript">
      function change(){
        window.location.href ="registration.php";
      }
      function rtohome(){
        window.location.href ="index.php";
      }
    </script>
  </head>

  <body>
    <div class="Nav" id="Nav1" style="background: orangered">
      <div class="NavbarContainer">
        <img src="images/logo.png" alt="" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">
          <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="index.php#about">About</a></li>
          <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
          <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="index.php#contact">Contact Us</a></li>
          <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
        </ul>
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
        </div>

      </div>
    </div>



    <div class="pricingcontainer">
      <div class="pricingwrapper">
        <div class="columns">
  <ul class="price">
    <li class="header"> 2 Bed Non-AC</li>
    <div class="imagewrapper">
    <img style="height:150px; width:150px;" src="images/2222.JPEG" alt="">
    </div>

    <li class="grey">65K/ year</li>
    
    <li class="grey"><a href="signin.php" class="button">Select</a></li>
  </ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">4 Bed Non-AC</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/4444.JPEG" alt="">
</div>

<li class="grey">55K/ year</li>

<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header"> 2 Bed AC</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/22.JPEG" alt="">
</div>

<li class="grey"> 1lakh/ year</li>

<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>


<div class="columns">
<ul class="price">
<li class="header"> 4 Bed AC</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/44.JPEG" alt="">
</div>

<li class="grey">90K/ year</li>

<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

      </div>
    </div>

  </body>
</html>
