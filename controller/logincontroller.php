<?php
  session_start();
  include ("../model/dbconfig.php");
  include ("../ui/boostrap.php");
?>

<?php 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin_table WHERE username = '$myusername' and passcode ='$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         //$_SESSION['myusername'];
         $_SESSION['login_user'] = $myusername;
  
         echo "<center> 
         <div class='alert alert text-center'>
          <strong>Success Message!</strong> You have sucessfully login!
         </div>
         </center>";     
echo     header("refresh:3 ../ui/dashbaord.php");

      }else{

echo  header("Location:../relogin.php");


      }
   }
?>