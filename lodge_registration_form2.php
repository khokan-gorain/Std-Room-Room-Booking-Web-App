<?php
session_start();

if(isset($_GET['lodge_owner_name']))
{
    $lodge_owner_name = $_GET['lodge_owner_name'];
    
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
      <link rel="stylesheet" href="lodge_registration_form2.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
      <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
      
    <title>form2</title>
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
    
               <h3 class="text-center std_room_registration_title">Registration Form</h3>
             <div class="code-face">
                 
               
                 
                <form class="form" action="save_data_form2.php?lodge_owner_name='<?php echo $lodge_owner_name; ?>' " method="POST">
                    
                    <h4 class="text-center room_details_title">Room Details</h4>
                    
                    <div class="room-details-contener">
                        
                         <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room-details-rows text-center">Room Type</div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room-details-rows text-center">Available Room</div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room-details-rows text-center">Room Rent</div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room-details-rows text-center">Total Room</div>
                        </div>
                        
                    <div class="row mb-2">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room_type_title text-center">Single</div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 available_room text-center">
                       <input type="number" id="room_rent" name="single_available_room" required>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room_rent text-center"><input type="number" id="room_rent" name="single_room_rent" required></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room_rent text-center"><input type="number" id="total_room" name="single_total_room" required></div>
                        </div>
                        
                        <div class="row mb-2">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room_type_title text-center">Dubble</div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 available_room text-center">
                           <input type="number" id="room_rent" name="duble_available_room" required>
                            
                            </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room_rent text-center"><input type="number" id="room_rent" name="duble_room_rent" required></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room_rent text-center"><input type="number" id="total_room" name="duble_total_room" required></div>
                        </div>
                        
                        <div class="row mb-2">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room_type_title text-center">Triple</div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 available_room text-center">
                            <input type="number" id="room_rent" name="triple_available_room" required>
                            </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room_rent text-center"><input type="number" id="room_rent" name="triple_room_rent" required></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 room_rent text-center"><input type="number" id="total_room" name="triple_total_room" required></div>
                        </div> 
                    </div>
                           
                    <div class="verify-btn-top">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <input type="button" class="send-mail-btn" value="CALL US TO HELP" name="">
                          </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <input type="submit" class="send-mail-btn" value="NEXT" name="">
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
    
}
else
{
    $_SESSION['verify_first'] = "Sorry! Verify First...";
    header("location:lodge_registration_form.php");
}
?>


  














                    