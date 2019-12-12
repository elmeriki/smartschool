<?php
include 'main_menu.php';

?>
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <div class="container_fluid">
<div class="container_fluid">
    <!-- <h1 class="well">Search Student </h1> -->
    <p class="page-header"> 
    <strong>Student Display</strong><br>

          The easiest solution to take your school to the next level My Smart School is the easiest and 
          complete system to manage the school better, make communication effortless and effective,
           improve student’s performances and increase the efficiency of teachers.
 </p>
 <div class="container_fluid">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
      </div>
   
        <?php
$studentid =$_POST['studentnumber'];
$fetchalldata = mysqli_query($db,"SELECT id,studentname,studentlastname,studentemail,coursename FROM student_table where id=$studentid");

if (mysqli_num_rows($fetchalldata ) > 0) {

?>

  <h2 class="sub-header">Search Result</h2>
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
		<tr>
    <th>Student Number</th>
    <th>Student First Name</th>
    <th>Student Last Name</th>
		<th>Student Email</th>
		<th>Student Course</th>

  </tr>
	
	<?php
$i=0;
while($row = mysqli_fetch_array($fetchalldata)) {
?>

<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["studentname"]; ?></td>
    <td><?php echo $row["studentlastname"]; ?></td>
		<td><?php echo $row["studentemail"]; ?></td>
		<td><?php echo $row["coursename"]; ?></td>
	
</tr>
<?php
$i++;
}
?>      
						</table>
						<?php
}
else{
    echo "<h1> No result found </h1>";
}
?>		
        </div>
      </div>
    </div>
	</div>
	</div>
</div> 


            </div>
          </div> 
