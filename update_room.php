<?php 

 include('db_connection.php');


 $email_id = $_GET['email_id'];

 $single_total_room = $_GET['si_total_room'];
 $single_avalable_room = $_GET['si_avalable_room'];
 $single_rent = $_GET['si_rent'];

 $dubble_total_room  = $_GET['du_total_room'];
 $dubble_avalable_room = $_GET['du_avalable_room'];
 $dubble_ren = $_GET['du_rent'];

 $triple_total_room = $_GET['tri_total_room'];
 $triple_avalable_room = $_GET['tri_avalable_room'];
 $triple_ren = $_GET['tri_rent'];

 $single_total_bed_avalable = $_GET['single_total_bed_avalable'];
 $dubble_total_bed_avalable = $_GET['double_total_bed_avalable'];
 $triple_toal_bed_avalable = $_GET['triple_toal_bed_avalable'];

 
   $updateq = " update $table_name set single_total_room='$single_total_room', single_avalable_room ='$single_avalable_room', single_rent='$single_rent',  dubble_total_room ='$dubble_total_room', dubble_avalable_room ='$dubble_avalable_room', dubble_ren ='$dubble_ren', triple_total_room ='$triple_total_room', triple_avalable_room ='$triple_avalable_room',  triple_ren='$triple_ren', single_total_bed_avalable = '$single_total_bed_avalable',
    double_total_bed_avalable = '$dubble_total_bed_avalable', triple_toal_bed_avalable = '$triple_toal_bed_avalable'  where email_id='$email_id' " ;

      $query = mysqli_query($con, $updateq);   
     if($query)
      {
            $_SESSION['update_successful'] = " Update Successful... " ;
            header("location:update_room_details.php?email_id='$email_id' ");   
          
      }
        else
        {
          $_SESSION['update_not_successful'] = "Not Updated...";
            header("location:update_room_details.php?email_id='$email_id' ");    
        }

 

?>