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
      <link rel="stylesheet" href="lodge_registration_form.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
      <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
      
    <title>form1</title>
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
    
               <h3 class="text-center mt-2 std_room_registration_title">Registration Form Only For Lodge Owner </h3>
             <div class="code-face">
                 
                 <?php 
                 if(isset($_SESSION['user_already_exist']))
                 {
                 ?> <p class="user_already_exist text-center"><?php echo $_SESSION['user_already_exist']; ?> </p> <?php  
                 }
                 else
                 {
                     echo $_SESSION['user_already_exist'] = ""; 
                 }
                 ?>
                 
                 <?php 
                 if(isset($_SESSION['veify_first']))
                 {
                 ?> <p class="user_already_exist text-center"><?php echo $_SESSION['veify_first']; ?> </p> <?php  
                 }
                 else
                 {
                     echo $_SESSION['veify_first'] = ""; 
                 }
                 ?>
                
                
                 
                <form class="form" action="save_data_form1.php" method="POST">
                    
                    <p class="email-id-text margen-left">Lodge Name*</p>
                    <input type="text" name="lodge_name" class="margen-left mb-2" placeholder="Enter Your Lodge Name" required>
                    
                     <p class="email-id-text margen-left">Lodge Owner Name*</p>
                    <input type="text" name="lodge_owner_name" class="margen-left mb-2" placeholder="Enter Your Name" required >
                    
                     <p class="email-id-text margen-left">Email Id*</p>
                    <input type="text" name="email_id" class="margen-left mb-2" placeholder="Enter Your Email Id" required >
                    
                     <p class="email-id-text margen-left">Phone Number*</p>
                    <input type="text" name="phone_number" class="margen-left mb-2" placeholder="Enter Your Number" required >
                    
                     <p class="email-id-text margen-left">Lodge Location*</p>
                    <input type="text" name="lodge_location" class="margen-left mb-2" placeholder="Enter Lodge Location" required >
                    
                     <p class="email-id-text margen-left">Lodge Discription*</p>
                    <input type="text" name="lodge_discription" class="margen-left mb-2" placeholder="Enter Lodge Discription" required >
                              
                    <div class="verify-btn-top">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <input type="button" class="send-mail-btn" value="CALL US TO HELP" name="">
                          </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <a href="lodge_registration_form2.php"><input type="submit" class="send-mail-btn" value="NEXT" name=""></a> 
                            </div>

                        </div>
                   
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

     ?>