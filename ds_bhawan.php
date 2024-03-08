<?php 
include('db_connection.php');

 $query = " select * from $table_name where verify_code = '4007' ";
 
$query_run = mysqli_query($con,$query);
while($row = mysqli_fetch_array($query_run))
     {
    //$single_total_room = $row['single_total_room'];
    //$single_avalable_room = $row['single_avalable_room'];
    //$single_rent = $row['single_rent'];

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
      <link rel="stylesheet" href="ds_bhawan.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
      <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
      
    <title>ds lodge</title>
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
      
      <!--lodge description-->
      
      <div class="continer lodge-discription">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">
           <div class="card-view">
                 <h3 class="lodge-name">D.S Bhawan</h3>
                   
                   
                 <div class="resaion">
                
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                    <img src="image/complete.png" class="stop-ico">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                      <p class="room-type-title-head">Double Bed Room </p>
                    </div>
                </div>
                     <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                    <img src="image/complete.png" class="stop-ico">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                      <p class="room-type-title-head">Triple Bed Room</p>
                    </div>
                </div>    
                </div>
                   <div class="row amount">
                       <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <div class="row ">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-7 col-7"><h4 class="text-center room-rent">&#8377; <?php echo "$dubble_ren" ; ?></h4></div>
                           <div class="col-lg-5 col-md-5 col-sm-5 col-5 col-5"><h5 class="discount-room-rent">&#8377; 950</h5></div>  
                           </div>
                           <p class="total-amount">Total amount</p>
                 </div> 
                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <a href="tel:9798986319"><input type="button" class="call-btn" value="CALL US TO BOOK" name=""></a>
                 </div>   
             </div>
               </div>
              </div>
         
      
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="lodge-img-slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="image/ds_bhawan1.jpg" target="_blank"> <img class="d-block w-100 lodge-img" src="image/ds_bhawan1.jpg" alt="First slide"> </a>
    </div>
    <div class="carousel-item">
    <a href="image/ds_bhawan2.jpg" target="_blank">  <img class="d-block w-100 lodge-img" src="image/ds_bhawan2.jpg" alt="Second slide"></a>
    </div>
    <div class="carousel-item">
     <a href="image/ds_bhawan3.jpg" target="_blank"> <img class="d-block w-100 lodge-img" src="image/ds_bhawan3.jpg" alt="Third slide"> </a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                  </div>
                </div>
            </div>        
         </div>
     </div> 
      
       <!--room description--> 
      
      <div class="continer avalable-room-details-continer">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
               <h3 class="text-center room-details-title">Room Details</h3>
              </div>
          </div>
          
          
          
      <div class="row mt-3">
          <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
           <h2 class="room-type-column-name">Room Type</h2>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <h2 class="room-type-column-name">Total Room</h2>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <h2 class="room-type-column-name">Aval- Room</h2>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <h2 class="room-type-column-name">Aval- Bed</h2>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <h2 class="room-type-column-name">Room Rent</h2>
          </div>
          
         </div>
         
  


          
       
    
          <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
            <p class="room-type-title">Double Bed</p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-type-title"><?php echo "$dubble_total_room" ; ?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-type-title"><?php echo "$dubble_avalable_room" ; ?></p>
          </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-type-title"><?php echo "$double_total_bed_avalable" ; ?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-type-title"><?php echo "$dubble_ren" ; ?></p>
          </div>
          </div>
      

          <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
            <p class="room-type-title">Triple Bed</p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-type-title"><?php echo "$triple_total_room" ; ?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-type-title"><?php echo "$triple_avalable_room" ; ?></p>
          </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-type-title"><?php echo "$triple_toal_bed_avalable" ; ?></p>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
           <p class="room-type-title"><?php echo "$triple_ren" ; ?></p>
          </div>
          </div>
         <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
               <a href="tel:9798986319">  <input type="button" class="call-now-btn" value="BOOK NOW" name=""></a>
                 </div> 
          </div>
       </div>
      
      
      <!-- lodge discription -->
      <div class="lodge-full-discription">
        <div class="read-more-container">
           <div class="container">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-12 text">
                
                      <p class="discription-title">Discription</p>
                          <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="far fa-dot-circle fa-lg"></i>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">D.S Bhawan is one of the best lodge for every students. All facilities are available.</p>
                           </div>
                        </div>
                     
                    <p class="discription-title">Location</p>
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                              <i class="fas fa-map-marker-alt fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">Railway station road Rashikpur. Nearby sumit cyber cafe.</p>
                        </div>
                        </div>
                  
                    <span class="read-more-text">
                     
                       <p class="discription-title">Facilities</p>
                        
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="far fa-check-circle fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">5G InterNet Technology</p>
                        </div>
                        </div>
                       
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="far fa-check-circle fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">Fan and Bulb are avalable</p>
                        </div>
                        </div>
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                              <i class="far fa-check-circle fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">Deep Boring</p>
                        </div>
                        </div>
                        
                         <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="far fa-check-circle fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">Parking Spaces</p>
                        </div>
                        </div>
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                            <i class="far fa-check-circle fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">Hand Pump</p>
                        </div>
                        </div>
                        
                        <p class="discription-title">What's Nearby</p>
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="fas fa-arrow-circle-up fa-lg"></i>
                          </div>
                         <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                           <p class="discription-sub-title">SP College</p>
                        </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                           <p class="discription-sub-title">900 M</p>
                        </div>
                        </div>
                        
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="fas fa-arrow-circle-up fa-lg"></i>
                          </div>
                         <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                           <p class="discription-sub-title">Engineering College</p>
                        </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                           <p class="discription-sub-title">500 M</p>
                        </div>
                        </div>
                        
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="fas fa-arrow-circle-up fa-lg"></i>
                          </div>
                         <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                           <p class="discription-sub-title">Polytechnic College</p>
                        </div>
                           <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                           <p class="discription-sub-title">500 M</p>
                        </div>
                        </div>
                        
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="fas fa-arrow-circle-up fa-lg"></i>
                          </div>
                         <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                           <p class="discription-sub-title">Sumit Cyber Cafe</p>
                        </div>
                           <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                           <p class="discription-sub-title">100 M</p>
                        </div>
                        </div>
                        
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="fas fa-arrow-circle-up fa-lg"></i>
                          </div>
                          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                           <p class="discription-sub-title">Mamta Hotel</p>
                        </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                           <p class="discription-sub-title">700 M</p>
                        </div>
                        </div>
                        
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="fas fa-arrow-circle-up fa-lg"></i>
                          </div>
                          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                           <p class="discription-sub-title">RS Hotel</p>
                        </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                           <p class="discription-sub-title">800 M</p>
                        </div>
                        </div>
                        
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="fas fa-arrow-circle-up fa-lg"></i>
                          </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                           <p class="discription-sub-title">Realway Station</p>
                        </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                           <p class="discription-sub-title">500 M</p>
                        </div>
                        </div>
                        
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img">
                             <i class="fas fa-arrow-circle-up fa-lg"></i>
                          </div>
                          <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                           <p class="discription-sub-title">Bus Stand</p>
                        </div>
                           <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                           <p class="discription-sub-title">3 KM</p>
                        </div>
                        </div>
                        
                      </span>
                    
          </div>
           <span class="read-more-btn">Read More...</span>
      </div>
     </div> 
    </div>
</div>
      
      <!--Rule and Regulation-->
      
          <!--Rule and Regulation-->
         <div class="rule-and-regulation-container mb-5">
             <div class="container">
               <p class="rule-and-regulation-title text-center">Rule & Regulation</p>
                        <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img-rule">
                            <i class="fas fa-ban fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">It is forbidden to bring too many friends into the room.</p>
                        </div>
                        </div>
                    <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img-rule">
                            <i class="fas fa-ban fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">Your room will have to be cleaned from time to time.</p>
                        </div>
                        </div>
                   <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img-rule">
                             <i class="fas fa-ban fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">It is mandatory to enter the lodge by 8 pm.</p>
                        </div>
                        </div>
                   <div class="row ml-1">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-1 font-aws-img-rule">
                             <i class="fas fa-ban fa-lg"></i>
                          </div>
                         <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                           <p class="discription-sub-title">An identity card is mandatory to stay in the lodge, such as Aadhar card.</p>
                        </div>
                        </div>
    
      </div>
     </div> 
      
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    
    
   
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    </body>
</html>
<?php ?>