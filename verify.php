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
      <link rel="stylesheet" href="verify.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
      <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
      
    <title>verify</title>
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
      
      <div class="verify-continer">
        <div class="card-view">
               <h3 class="text-center verify-your-code">Verify Your Code</h3>
             <div class="code-face">
                 
                  <?php
            if(isset($_SESSION['verify_code']))
            { ?>
            <div class="wrong_verify_code_div">
            <p class="wrong-verify-code-php"><?php echo $_SESSION['verify_code']; ?></p>
            </div>
            <?php        
            }
          else { echo $_SESSION['verify_code'] = "";  } ?>
                 
                 
                       <?php
            if(isset($_SESSION['plz_verify_first']))
            { ?> <p class="wrong-verify-code-php"><?php echo $_SESSION['plz_verify_first']; ?></p> <?php        
            }
          else { echo $_SESSION['plz_verify_first'] = "";  } ?>
                 

                <form class="form" action="verify_code.php" method="post">
                     <p class="verify-code margin-left">Verify Code</p>
                     <input type="text" name="verify_code" class="margin-left" placeholder="Enter Your code" autocomplete="off" required>
                    <div class="verify-btn">
                   <input type="submit" class="code-verify-btn" value="VERIFY NOW" name="">
                 </div> 
                </form>
          </div>
        </div>
      </div>
    
      
    
      
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    </body>
</html>
<?php
session_destroy();
?>