<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="images/faviclogo.png" rel="shortcut icon" />

  <title>MySchool App | Logout </title>
</head>
<body>



<?php

echo "<center> 
<div class='alert alert text-center'>
 <strong>Success Message!</strong> You have sucessfully logout Thank you!
</div>
</center>";   
echo header("refresh:2 index.php");

?>

</body>
</html>