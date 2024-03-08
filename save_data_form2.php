<?php
session_start();
$con = mysqli_connect("localhost","khokan_gorain","goRkho&A!nk@N441.stdroom","room_book_db");
  
 if(isset($_GET['lodge_owner_name']))
 {
     
 
      $lodge_owner_name = $_GET['lodge_owner_name'];
    
      
      $single_available_room  = $_POST['single_available_room'];
      $single_room_rent = $_POST["single_room_rent"];
      $single_total_room = $_POST['single_total_room'];
    
    
     $duble_available_room = $_POST['duble_available_room'];
     $duble_room_rent = $_POST['duble_room_rent	'];
     $duble_total_room= $_POST['duble_total_room'];

    
     $triple_available_room = $_POST['triple_available_room'];
     $triple_room_rent = $_POST['triple_room_rent'];
     $triple_total_room = $_POST['triple_total_room'];


     mysqli_select_db($con,'room_book_db');
     $table_name = "save_data_form2" ;


            $qy = "insert into $table_name (lodge_owner_name,single_available_room,single_room_rent,single_total_room,duble_available_room,duble_room_rent,duble_total_room,triple_available_room,triple_room_rent,triple_total_room) values ('$lodge_owner_name','$single_available_room','$single_room_rent','$single_total_room','$duble_available_room','$duble_room_rent','$duble_total_room','$triple_available_room','$triple_room_rent','$triple_total_room')";
            mysqli_query($con,$qy);
    
            $_SESSION['registration_successful'] = "Registration Successfull...";
            header('location:registration_successfull_page.php');
           
   }
else
{
    $_SESSION['veify_first'] = "sorry! Verify First...";
    header("location:lodge_registration_form.php");
}




?>