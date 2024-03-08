<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
     <!-- css-->
      <link rel="stylesheet" href="forgotpass.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
      <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
      
    <title>forgot password</title>
  </head>
  <body>
      
      <!-- nav bar -->
      <nav>
       <div class="logo">
           <p class="logo-name">Std Room</p> 
          </div>
       <input type="checkbox" id="click">
          <label for="click" class="menu-btn">
           <i class="fas fa-bars"></i>
          </label>
          <ul>
              <li> <a href="index.php">Home</a></li>
              <li> <a href="boylodge.php">Boys Lodge</a></li>
              <!--   <li> <a href="girlslodge.php">Girls Lodge</a></li> -->
              <li> <a href="lodge_registration_form.php">Register Your Lodge</a></li>
              <li> <a href="verify.php">Login</a></li>
            <!--  <li> <a href="#">Contact</a></li> -->
              
          </ul>
      </nav>
      
      <?php
      if(isset($_GET['tokan']))
      {
          $token = $_GET['tokan'];
      }
      else
      {
       $token = "";   
      }
       ?>
      
      <div class="send-mail-continer">
        <div class="card-view">
               <h3 class="text-center new-password-title">New Password</h3>
             <div class="code-face">
                 
                  <?php
            if(isset($_SESSION['pass_not_mach']))
            { ?> <p class="mail-not-match"><?php echo $_SESSION['pass_not_mach']; ?></p> <?php }
            else { echo $_SESSION['msg'] = "";} ?>
                 
                 
                <form class="form" action="chenge_pass.php?Tokan=<?php echo $token ; ?>" method="post">
                    
                    <p class="new-password-text margen-left">New Password</p>
                     <input type="text" name="password"  class="margen-left mb-2" placeholder="New Password" autocomplete="off" required>
                    <p class="new-password-text margen-left">Confirm Password</p>
                     <input type="text" name="cpassword" class="margen-left" placeholder="Confirm Password" autocomplete="off" required>
                    <div class="verify-btn-top">
                   <input type="submit" class="send-mail-btn" value="CHANGE PASSWORD" name="">
                 </div> 
                </form>
          </div>
        </div>
      </div>
    
      
    
      
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    </body>
</html>
   <?php  session_destroy(); ?>