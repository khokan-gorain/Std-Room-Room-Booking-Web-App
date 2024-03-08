<?php

include('db_connection.php');

    
	$emaile = mysqli_real_escape_string($con, $_GET['email']) ;

    
    $sql = " select * from $table_name where email_id ='$emaile' ";
    $query = mysqli_query($con, $sql);
    $emailcount = mysqli_num_rows($query);
       
      if($emailcount){
          
          
                $userdata = mysqli_fetch_array($query);
                $username = $userdata['owner_name'];
                $tokan = $userdata['verify_code'];
                
          
                 $subject = "Reset Your Password";
                $body = "Hi, $username Click hear to reset your password...
                http://stdroom.in/forgotpass.php?tokan=$tokan ";
                    $headers = "From: Std-Room";

                    if (mail($emaile, $subject, $body, $headers)) {
                      $_SESSION['send_msg']= " Check your email $emaile to reset your password ";
                      header('location:email_verufy.php');
                         
                   
                     } else {
                   ?>
                     <script>
                    alert("Email <?php echo $emaile ; ?> Send Failed... ");
                         location.href = 'email_verufy.php';
                   </script>
                      
                   <?php 
                        }
            } else
            {
                $_SESSION['msg'] = "Your  $emaile are not matching. Please try again...";
               header('location:email_verufy.php');
            }
                
        
           
    
?>