<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
     <script type="text/javascript">
       function back(){
         window.location.href ="index.php";
       }
       function register(){
         window.location.href ="form.php";
       }
     </script>
     <?php
        $errmsg="";
         $name="";
         $email="";
         $regno="";
          $phoneno="";

     if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"])){
     $conn= mysqli_connect('localhost','root','','hms') or die("Connection failed:" .mysqli_connect_error());
     if( isset($_POST['regno']) && isset($_POST['block']) && isset($_POST['hostelroom1']) && isset($_POST['hostelroom2']) && isset($_POST['hostelroom3'])  && isset($_POST['hostelroom4']) ){

     $regno=$_POST['regno'];
      $block=$_POST['block'];
      $hostelroom1=$_POST['hostelroom1'];
      $hostelroom2=$_POST['hostelroom2'];
      $hostelroom3=$_POST['hostelroom3'];
      $hostelroom4=$_POST['hostelroom4'];
     

      if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
   $sql="INSERT INTO `registration` (`regno`,`block`,`hostelroom1`,`hostelroom2`,`hostelroom3`,`hostelroom4`)VALUES ('$regno','$block','$hostelroom1','$hostelroom2','$hostelroom3','$hostelroom4')";
   $query=mysqli_query($conn,$sql);
   if($query){
   $errmsg= '*Entry successful';
   $_SESSION['regno'] = $regno;
     
   }
   else{
   $errmsg= "*Error occoured";
   echo "error";
   }

    }
     }
     else{
       $errmsg="*All fields are required";


      }
     



      ?>
   </head>
  <link rel="stylesheet" href="css\resgistration.css">
  
<body  style="background: linear-gradient(120deg,white, orangered);">
  <?php ?>


  <div class="container">
    <div class="title">Hostel Registration</div>
    <div class="content">
      <form action="form.php"   method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input name="name" type="text" placeholder="Enter your name" value="<?php echo "$name"; ?>" required pattern="[a-z A-Z]*">
          </div>
          <div class="input-box">
            <span class="details">Reg No</span>
            <input type="text" placeholder="Enter your regno" name="regno" value="<?php echo "$regno"; ?>" pattern="[0-9]{2}[A-Z]{3}[0-9]{4}" required>
          </div>
          <div class="dropdown">
          Hostel Block :<br>
          
          <select name="block" style="margin:12px">
            <option value="MH-1">Men hostel - 1</option>
            <option value="MH-2">Men hostel - 2</option>
            <option value="MH-3">Men hostel - 3</option>
            <option value="MH-4">Men hostel - 4</option>
            </select>
          </div>
         
          <div class="dropdown" style="margin-top : 5px">
          Hostel Room :<br>
         <u1 style="margin-top: 5px"> Preference 1:</u1>
          <select name="hostelroom1" style="margin:8px" >
            <option value="2 bed AC"> 2 bed AC </option>
            <option value="4 bed AC"> 4 bed AC </option>
            <option value="2 bed Non-AC"> 2 bed Non-AC </option>
            <option value="4 bed Non-AC"> 4 bed Non-AC </option>
            </select>
            
            <u1 style="margin: 0px"> Preference 2:</u1>
            <select name="hostelroom2" style="margin:8px" >
            <option value="2 bed AC"> 2 bed AC </option>
            <option value="4 bed AC"> 4 bed AC </option>
            <option value="2 bed Non-AC"> 2 bed Non-AC </option>
            <option value="4 bed Non-AC"> 4 bed Non-AC </option>
            </select>
            <br>
            <u1 style="margin: 0px"> Preference 3:</u1>
            <select name="hostelroom3" style="margin:8px">
            <option value="2 bed AC"> 2 bed AC </option>
            <option value="4 bed AC"> 4 bed AC </option>
            <option value="2 bed Non-AC"> 2 bed Non-AC </option>
            <option value="4 bed Non-AC"> 4 bed Non-AC </option>
            </select>

            <u1 style="margin: 0px"> Preference 4:</u1>
            <select name="hostelroom4" style="margin:8px">
            <option value="2 bed AC"> 2 bed AC </option>
            <option value="4 bed AC"> 4 bed AC </option>
            <option value="2 bed Non-AC"> 2 bed Non-AC </option>
            <option value="4 bed Non-AC"> 4 bed Non-AC </option>
            </select>

          </div>
        

        </div>
        
        <div class="button">
          <input type="submit" value="Go Back" onclick="back()" style="background: linear-gradient(120deg,green, orangered);">
          <input type="submit" value="Register" name="submit" style="margin-left:85px; background: linear-gradient(120deg,green, orangered);">
        </div>
        
      </form>
    </div>
  </div>

</body>
</html>
