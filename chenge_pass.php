 <?php
   
    include('db_connection.php');
       
       $tokan = $_GET['Tokan'];
       $password = $_POST['password'];
	   $cpassword = $_POST['cpassword'];
         
        $pass = password_hash($password, PASSWORD_BCRYPT);

        if($password===$cpassword)
        {
            
            
            $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
          
     
    $updateq = " update $table_name set password = '$password'  where verify_code ='$tokan' " ;
   
    $query = mysqli_query($con,$updateq);
      if($query){
                 $_SESSION['update_pass'] = 'Your password has been updated';
                 header('location:login.php');
                }
           else
               {
                 $_SESSION['pass_not_update'] = 'Your password is not updated';
                 header('location:email_verufy.php');
               }   
        }
        else
        {
        
            $_SESSION['pass_not_mach']= "Password Not Matching...";
             header('location:forgotpass.php');
           
      }

?>