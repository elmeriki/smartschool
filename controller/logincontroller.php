<?php
   include("../model/dbconfig.php");

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin_table WHERE username = '$myusername' and passcode ='$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION['myusername'];
         $_SESSION['login_user'] = $myusername;
         
    header("location: ../ui/dashbaord.php");

      }else {

 echo  "<script> alert('Your Login Name or Password is invalid')</script>"
 .header("Location:../index.php");
 ;
  
      }
   }
?>