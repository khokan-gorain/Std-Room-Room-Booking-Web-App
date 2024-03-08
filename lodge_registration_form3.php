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
      <link rel="stylesheet" href="lodge_registration_form3.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
      <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
      
    <title>form3</title>
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
    
               <h3 class="text-center std_room_registration_title">Registration Form </h3>
             <div class="code-face">
                 
                 
                <form class="form" action="save_data_form3.php" method="post">
                    
                     <h4 class="text-center room_details_title ">Facilities</h4>
                    
                    <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">1.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="first_feciality" id="first_feciality">
                        </div>
                    </div>
                    
                    <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">2.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="first_feciality" id="first_feciality">
                        </div>
                    </div>
                    
                    <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">3.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="first_feciality" id="first_feciality">
                        </div>
                    </div>
                    
                    <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">4.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="first_feciality" id="first_feciality">
                        </div>
                    </div>
                    
                    <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">5.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="first_feciality" id="first_feciality">
                        </div>
                    </div>
                    
                    <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">6.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="first_feciality" id="first_feciality">
                        </div>
                    </div>
                    
                    <h4 class="text-center room_details_title">What's Nearby</h4>
                    
                    <div class="what's_nearby">
                    <div class="row mt-2">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-9">Name</div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">Distance</div>
                        </div>
                        
                        <div class="row mt-2">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-9"><input type="text" name="place_name1" id="place_name"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3"><input type="email" name="distance1" id="distance"></div>
                        </div>
                        
                         <div class="row mt-2">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-9"><input type="text" name="place_name2" id="place_name"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3"><input type="email" name="distance2" id="distance"></div>
                        </div>
                        
                         <div class="row mt-2">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-9"><input type="text" name="place_name3" id="place_name"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3"><input type="email" name="distance3" id="distance"></div>
                        </div>
                        
                         <div class="row mt-2">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-9"><input type="text" name="place_nam4" id="place_name"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3"><input type="email" name="distance4" id="distance"></div>
                        </div>
                        
                         <div class="row mt-2">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-9"><input type="text" name="place_name5" id="place_name"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3"><input type="email" name="distance5" id="distance"></div>
                        </div>
                    
                         <div class="row mt-2">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-9"><input type="text" name="place_name6" id="place_name"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3"><input type="email" name="distance6" id="distance"></div>
                        </div>
                       
                    
                     <h4 class="text-center room_details_title">Rule & Regulation</h4>
                         
                   <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">1.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="rule1" id="rule_regulation">
                        </div>
                    </div>
                        
                         <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">2.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="rule2" id="rule_regulation">
                        </div>
                    </div>
                        
                         <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">3.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="rule2" id="rule_regulation">
                        </div>
                    </div>
                        
                         <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">4.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="rule2" id="rule_regulation">
                        </div>
                    </div>
                        
                         <div class="row mb-2">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">5.</div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                        <input type="text" name="rule5" id="rule_regulation">
                        </div>
                    </div>
                        
                    
                    </div>
                              
                    <div class="verify-btn-top">
                        <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <input type="button" class="send-mail-btn" value="CALL US TO HELP" name="">
                          </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <a href="lodge_registration_form2.php"><input type="submit" class="send-mail-btn" value="SUBMIT" name=""></a> 
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
session_destroy();
     ?>