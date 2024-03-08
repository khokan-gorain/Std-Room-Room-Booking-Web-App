<?php

include('db_connection.php');

    $verify_code = $_POST['verify_code'];
	
	 $_SESSION['code_verify'] = "$verify_code" ;
    

    
    $sql = " select * from $table_name where Verify_Code= '$verify_code' ";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
        if($num==1)
        {   
            $_SESSION['code_verify'] = "$verify_code" ; 
            header("location:login.php"); 
        }
        else
        {
            $_SESSION['verify_code'] = 'Please, Enter a valid code...' ;
            header('location:verify.php');
           
        }


           
    
?>