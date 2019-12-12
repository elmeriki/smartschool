<?php
  include("../model/dbconfig.php");
  include '../ui/boostrap.php'
?>

<?php
    $studentid = $_POST['studentid'];
    $studentname = $_POST['studentname'];
    $studentlastname = $_POST['studentlastname'];
    $studentphone = $_POST['studentphone']; 
    $studentemail = $_POST['studentemail']; 
    $coursename = $_POST['coursename'];

    $updatedata ="UPDATE student_table set studentname='$studentname', 
            studentlastname='$studentlastname',studentphone='$studentphone'
           ,studentemail='$studentemail',coursename='$coursename' WHERE id='$studentid'";
  
if(mysqli_query($db,$updatedata) == true){

    $to="$studentemail";
    $subject = "Account Update Confirmation";
    $message = "Hi   $studentname,\n 
    This is to confirmed that your Student account has been sucessfuly  Updated ";
    $from = "admission@pinevalleyinstitute.co.za";
    $headers = "From:$from";

    mail($to,$subject,$message,$headers);

    header("location: ../ui/studentupdatesuccess.php");

}else {
        echo "Error: " . $insertdata  . "<br>" . mysqli_error($db);
  }
  mysqli_close($db);
?>

