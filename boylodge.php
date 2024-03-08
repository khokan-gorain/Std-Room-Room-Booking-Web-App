<?php
include('db_connection.php');

  

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
      <link rel="stylesheet" href="boylodge.css" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
      <!--fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet"> 
      
    <title>boy</title>
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
      
      
      <!--dear student-->
      
      <div class="container mt-5 mb-4">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
              <h2 class="text-center dear-students">Dear Students,<br>Read Very Carefully</h2>
            <p class="for-student p-3">" This app is made for your convenience. So use this app for purposeful work. Do not use this app for any kind of harm. If you are looking for a new lodge or want to move from where you are now due to some inconvenience, this app can help you. And use this app for your convenience. "</p>
            </div>
          </div>  
          </div>
    <div class="different-lodge-card mb-5">
      
       <!--Chandan_lodge-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/chandan_lodge_home.jpg"> <img src="image/chandan_lodge_home.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">Chandan Lodge</h3>
                  <p class="lodge-sub-title">Nagdih Sonuwadangal Rashikpur Dumka</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4001' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="chandan_lodge.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
      
      
      
       <!--MG_lodge-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/mg_lodge_home.jpg"> <img src="image/mg_lodge_home.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">MG Lodge</h3>
                  <p class="lodge-sub-title">Rashikpur Sonuwadangal, Lichi Bagan Road Dumka</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4002' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="mg_lodge.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
          
           <!--Engineering_lodge-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/engineer_lodge_home_photo.jpg"> <img src="image/engineer_lodge_home_photo.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">Engineer Lodge</h3>
                  <p class="lodge-sub-title">Ratan cypher near little holy play school sonuwadangal Dumka</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4003' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="engineer_lodge.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
      
         <!--Balaji_lodge-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/balaji_lodge_home.jpg"> <img src="image/balaji_lodge_home.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">Balaji Lodge</h3>
                  <p class="lodge-sub-title">Railway Station Road Rashikpur Bal Bharti School Dumka</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4004' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="balaji_lodge.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
          
             <!--Singh_Niwas-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/singh_niwas1.jpg"> <img src="image/singh_niwas_home_photo.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">Singh Niwas</h3>
                  <p class="lodge-sub-title">Rashikpur Sonuwadangal Dumka, BadaBand Shivmandir</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4005' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="singh_niwas_lodge.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
      
        <!--Dutta Lodge-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/dutta_lodge1.jpg"> <img src="image/dutta_lodge_home_photo.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">Dutta Lodge</h3>
                  <p class="lodge-sub-title">Railway station road Rashikpur. Nearby sumit cyber cafe</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4006' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="dutta_lodge.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
          
          
        <!--D.S Bhawan-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/ds_bhawan1.jpg"> <img src="image/ds_bhawan_home_photo.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">D.S Bhawan</h3>
                  <p class="lodge-sub-title">Railway station road Rashikpur. Nearby sumit cyber cafe</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4007' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="ds_bhawan.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
          
          <!--Sumit Cuber Cafe-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/sumit_cyber_cafe1.jpg"> <img src="image/sumit_cyber_cafe_home_phpto.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">Sumit Cyber Cafe Lodge</h3>
                  <p class="lodge-sub-title">Railway station road Rashikpur. Nearby sumit cyber cafe</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4008' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="sumit_cyber_cafe_lodge.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
          
           <!--Anmol Lodge (red chilli)-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/anmol_lodge(redchilli)1.jpg"> <img src="image/anmol_lodge_home_photo(redchilli).jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">Anmol Lodge (Red Chilli)</h3>
                  <p class="lodge-sub-title">S.P college road Rashikpur. Hotel Anmol Red Chilli</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4011' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="Anmol_lodge(redchilli).php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
          
             <!--Mondal lodge 1-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/mandal_lodge3.jpg"> <img src="image/mandal_lodge_home_photo.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">Mandal Lodge 1</h3>
                  <p class="lodge-sub-title">Railway station road Rashikpur. Nearby sumit cyber cafe</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4009' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="mandal_lodge1.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
          </div>  
          </div>
      
       <!--Mondal lodge 2-->
      
      <div class="container mt-4">
          <div class="row card-view pl-2 pr-2 pt-3 pb-1">
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-center">
          <a href="image/mandal_lodge3.jpg"> <img src="image/mandal_lodge_home_photo.jpg" class="img-fluid w-100 lodge-img"> </a> 
            </div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-7">
              <h3 class="lodge-name">Mandal Lodge 2</h3>
                  <p class="lodge-sub-title">Railway station road Rashikpur. Nearby sumit cyber cafe</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3 text-center">
                  
                  <?php 
                    $sql = " select single_total_bed_avalable, double_total_bed_avalable, triple_toal_bed_avalable from $table_name where verify_code = '4010' ";
                    $result = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($result);
                    if($num==1)
                        {
                              while($row = mysqli_fetch_array($result))
                                {
                                 $single_total_bed_avalable = $row['single_total_bed_avalable'];
                                $double_total_bed_avalable = $row['double_total_bed_avalable'];
                                $triple_toal_bed_avalable = $row['triple_toal_bed_avalable'];
                              }
                        
                        if($single_total_bed_avalable!=0 || $double_total_bed_avalable!=0 ||  $triple_toal_bed_avalable!=0)
                            {
                             ?> <h4 class="avalible-bed text-center">Bed Available</h4> <?php
                            }
                        else
                        {
                          ?> <h4 class="avalible-not-bed text-center">Bed Not Available</h4> <?php  
                        }
                          
                        }
                   
                  ?>
                  <div class="see-more-btn-div">
               <a href="mandal_lodge2.php" id="see-more-ancher-tag"><button type="button" class="mt-3 see-more-btn text-center">See More</button></a></div>
            </div>
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

<?php ?>