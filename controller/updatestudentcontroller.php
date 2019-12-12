<?php
  include("../model/dbconfig.php");
  include '../ui/boostrap.php'
?>

<?php
    $studentid = $_POST['studentid'];
    $studentname = $_POST['studentname'];
    $studentlastname = $_POST['studentlastname'];
    $studentaddress = $_POST['studentaddress']; 
    $studentphone = $_POST['studentphone']; 
    $studentemail = $_POST['studentemail']; 
    $coursename = $_POST['coursename'];
    $gname = $_POST['gname']; 
    $glastname = $_POST['glastname']; 
    $gphone = $_POST['gphone']; 
    $gemail = $_POST['gemail']; 
    $gaddress = $_POST['gaddress'];

    $updatedata ="UPDATE student_table set id=CONCAT(studentname='$studentname', 
            studentlastname='$studentlastname',studentaddress='$studentaddress', studentphone='$studentphone'
           ,studentemail='$studentemail',coursename='$coursename',guadianname='$gname',guadianlastname='$glastname',
            guadianphone='$gphone',guadianemail='$gemail',guadianaddress='$gaddress') WHERE id='$studentid'";
  
if(mysqli_query($db,$updatedata) == true){

    $to="$studentaddress";
    $subject = "Account Update Confirmation";
    $message = "Hi   $studentname,\n 
    This is to confirmed that your Student account has been sucessfuly  Updated ";
    $from = "admission@pinevalleyinstitute.co.za";
    $headers = "From:$from";

    mail($to,$subject,$message,$headers);

    echo "Your Account has been successfully Update".header("refresh:2 ../ui/updatestudentregistration.php");

}else {
        echo "Error: " . $insertdata  . "<br>" . mysqli_error($db);
  }
  mysqli_close($db);
?>

