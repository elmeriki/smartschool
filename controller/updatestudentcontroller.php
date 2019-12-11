<?php
  include("../model/dbconfig.php");
  include '../ui/boostrap.php'
?>

<?php
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


    if(count($_POST)> 0) {
        mysqli_query($db,"UPDATE student_table set userid='" . $_POST['userid'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE userid='" . $_POST['userid'] . "'");
        $message = "Record Modified Successfully";
     }

   
    if (mysqli_query($db, $sqlinsert)) {

    $last_id = mysqli_insert_id($db);

    $to="$studentaddress";
    $subject = "Student Registration Confirmation";
    $message = "Hi   $studentname, \n 
    
    Welcome to No Name School you have been sucessfuly register for the year 2020 and your student number is $last_id ";
    $from = "admission@pinevalleyinstitute.co.za";
    $headers = "From:$from";

    mail($to,$subject,$message,$headers);

    echo header("location: ../ui/studentaccountsuccess.php");

    }elseif(mysqli_num_rows($duplicate)>0){

echo "<div class='alert alert-success text-center'>
<strong>Erro Message!</strong> This Student already exists as a registered Student
</div>".header("refresh:3 ../ui/createnewstudent.php");
    
    }else {
          echo "Error: " . $sqlinsert  . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
    
?>