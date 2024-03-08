<?php
session_start();


if(isset($_SESSION['code_verify']))
{ 
    
}
else
    if(isset($_SESSION['again_login']))
    {
        
    }
else
    if(isset($_SESSION['update_pass']))
    {
        
    }
else
{
    header('location:verify.php');
}

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
      <link rel="stylesheet" href="login.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
      <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
      
    <title>login</title>
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
              <li> <a href="verify.php">Login</a></li>
            <!--  <li> <a href="#">Contact</a></li> -->
              
          </ul>
      </nav>
      
     
      <div class="login-continer">
        <div class="card-view">
               <h3 class="text-center login-form-title">Login Form</h3>
             <div class="code-face">
                 
                 <?php
            if(isset($_SESSION['msg']))
            { ?> <p class="invilade-email-and-password-php"><?php echo $_SESSION['msg']; ?></p> <?php        
            }
          else { echo $_SESSION['msg'] = "";  } ?>
                 
                   <?php
            if(isset($_SESSION['update_pass']))
            { ?> <p class="send-mail-php"><?php echo $_SESSION['update_pass']; ?></p> <?php        
            }
          else { echo $_SESSION['update_pass'] = "";  } ?>
                 
                 
                 <form  action='connention.php' method="POST">
                     <p class="emailid-and-pass-text margin-left">Email Id</p>
                     <input type="text" id="email" name="email" id="username" class="margin-left mb-2" placeholder="Enter Your Email" required>
                    <p class="emailid-and-pass-text margin-left">Password</p>
                     <input type="password"  id="password" name="password" id="username" class="margin-left" placeholder="Enter Your Password" autocomplete="off" required>
                     <span><i class="far fa-eye" style="color: #7a797e" aria-hidden = "true" id="eye" onclick="toggle()"></i></span>
                     
                  <a href="email_verufy.php"> <p class="forgot-password margin-left text-muted">Forgot Password</p></a> 
                    <div class="login-btn-top">
               <input type="submit" class="login-btn" value="LOGIN NOW" name="">
                 </div> 
                </form>
        </div>
      </div>
    </div>
      
    
      
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script>
      var state = false;
         function toggle()
         {
             if(state)
                 {
                    document.getElementById("password").setAttribute("type","password");
                     document.getElementById("eye").style.color='#7a797e';
                     state = false;
                 }
             else
                 {
                   document.getElementById("password").setAttribute("type","text");
                      document.getElementById("eye").style.color='#7a797e';
                     state = true;  
                 }
         }
      
      </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    
    </body>
</html>
<?php 
session_destroy();
?>