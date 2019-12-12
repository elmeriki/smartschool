<?php
   include('../model/dbconfig.php');


   $studentid = $_POST['studentid'];
   $studentemail = $_POST['studentemail']; 

   
$sqldeletestudentdata = "DELETE FROM student_table WHERE id=$studentid";

if (mysqli_query($db, $sqldeletestudentdata)) {


echo header("location: ../ui/deleteaccoutnsuccess.php");


} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);



?>