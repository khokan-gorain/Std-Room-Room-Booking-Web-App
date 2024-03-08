<?php
include('db_connection.php');
  
      $email_id = $_GET['email_id']; 
   
    $query = " select * from $table_name where email_id = $email_id ";
    $query_run = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($query_run))
     {
 $single_total_room = $row['single_total_room'];
 $single_avalable_room = $row['single_avalable_room'];
 $single_rent = $row['single_rent'];

 $dubble_total_room  = $row['dubble_total_room'];
 $dubble_avalable_room = $row['dubble_avalable_room'];
 $dubble_ren = $row['dubble_ren'];

 $triple_total_room = $row['triple_total_room'];
 $triple_avalable_room = $row['triple_avalable_room'];
 $triple_ren = $row['triple_ren'];
     
 $single_total_bed_avalable = $row['single_total_bed_avalable'];
 $double_total_bed_avalable = $row['double_total_bed_avalable'];
 $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];     
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
      <link rel="stylesheet" href="update_room_details.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
      <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
      
    <title>update room details</title>
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
      
      
       <!--room description--> 
      
      <div class="continer card-room-description">
          
            
          
         
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
               <h3 class="text-center update-roon-details-title">Update Room Details</h3>
                
                
               <?php
            if(isset($_SESSION['update_not_successful']))
            { ?> <p class="update-not-successful"><?php echo $_SESSION['update_not_successful']; ?> </p> <?php        
            }
          else { echo $_SESSION['update_not_successful'] = "";  } ?>
                 
                   <?php
            if(isset($_SESSION['update_successful']))
            { ?> <p class="update-successful"><?php echo $_SESSION['update_successful']; ?> </p> <?php        
            }
          else { echo $_SESSION['update_successful'] = "";  } ?>
                
                

              </div>
          </div>
      <div class="row mt-3">
          <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
           <h2 class="column-name">Room Type</h2>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <h2 class="column-name">Total Room</h2>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <h2 class="column-name">Aval- Room</h2>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <h2 class="column-name">Aval- Bed</h2>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <h2 class="column-name">Room Rent</h2>
          </div>
         </div>
         
      
         <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
           <p class="room-detail-sub-title">Single Bed</p>
          </div>
             
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <p class="room-detail-sub-title text-center"><?php echo "$single_total_room"; ?> </p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <p class="room-detail-sub-title text-center"><?php echo "$single_avalable_room"; ?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <p class="room-detail-sub-title text-center"><?php echo "$single_total_bed_avalable"; ?> </p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <p class="room-detail-sub-title text-center"><?php echo "$single_rent"; ?> </p>
          </div>
          </div>
    
          <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
            <p class="room-detail-sub-title">Double Bed</p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-detail-sub-title text-center"><?php echo "$dubble_total_room"; ?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-detail-sub-title text-center"><?php echo "$dubble_avalable_room"; ?> </p>
          </div>
             <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-detail-sub-title text-center"><?php echo "$double_total_bed_avalable"; ?> </p>
          </div>  
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-detail-sub-title text-center"><?php echo "$dubble_ren"; ?> </p>
          </div>
          </div>
      

          <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
            <p class="room-detail-sub-title">Triple Bed</p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-detail-sub-title text-center"><?php echo "$triple_total_room"; ?> </p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-detail-sub-title text-center"> <?php echo "$triple_avalable_room"; ?> </p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-detail-sub-title text-center"> <?php echo "$triple_toal_bed_avalable"; ?> </p>
          </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-detail-sub-title text-center"> <?php echo "$triple_ren"; ?> </p>
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