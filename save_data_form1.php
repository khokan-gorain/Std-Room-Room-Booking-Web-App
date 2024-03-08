<?php
session_start();
//include('db_connection.php');

$con = mysqli_connect("localhost","khokan_gorain","goRkho&A!nk@N441.stdroom","room_book_db");


$lodge_name  = $_POST['lodge_name'];
$lodge_owner_name = $_POST['lodge_owner_name'];
$email_id = $_POST["email_id"];
$phone_number = $_POST['phone_number'];
$lodge_location = $_POST['lodge_location'];
$lodge_discription = $_POST['lodge_discription'];



mysqli_select_db($con,'room_book_db');
$table_name = "save_data_form1" ;

  $sql = " select * from $table_name where email_id = '$email_id' ";
    
    $result = mysqli_query($con,$sql);
    
    $num = mysqli_num_rows($result);
        if($num==1)
        {
           $_SESSION['user_already_exist'] = "Sorry! User Already Exist...";
            header('location:lodge_registration_form.php');
        }
        else
        {
            $qy = "insert into $table_name (lodge_name,lodge_owner_name,email_id,phone_number,lodge_location,lodge_discription) values ('$lodge_name','$lodge_owner_name','$email_id','$phone_number','$lodge_location','$lodge_discription')";
            mysqli_query($con,$qy);
            header("location:lodge_registration_form2.php?lodge_owner_name='$lodge_owner_name' ");
           
        }


?>