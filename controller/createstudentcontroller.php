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

    $sqlinsert = "INSERT INTO student_table (id,studentname, studentlastname, studentaddress,studentphone,studentemail,coursename
    ,guadianname,guadianlastname,guadianphone,guadianemail,guadianaddress) VALUES ('','$studentname', ' $studentlastname', 
    '$studentaddress',' $studentphone','$studentemail','$coursename',' $gname','$glastname','$gphone','$gemail',' $gaddress')";

    $duplicate=mysqli_query($db,"SELECT * from student_table WHERE studentname='$studentname' or studentemail='$studentemail'");

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