<?php
include 'main_menu.php';
?>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <p class="page-header"> 
          The easiest solution to take your school to the next level My Smart School is the easiest and 
          complete system to manage the school better, make communication effortless and effective,
           improve student’s performances and increase the efficiency of teachers.
 </p>
 <nav class="navbar navbar-default navbar-static-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
						William (Online)
						</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" target="_blank">Return back</a></li>
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									Settings
									<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li class="dropdown-header">SETTINGS</li>
										<li class=""><a href="#">Link</a></li>
										<li class=""><a href="#">Other Link</a></li>
										<li class=""><a href="#">Other Link</a></li>
										<li class="divider"></li>
										<li><a href="#">Logout</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<div class="container-fluid">
					<div class="col col-md-3">			
						<div class="panel-group" id="accordion">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								Registration stat</a>
							  </h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse in">
								<ul class="list-group">
									<li class="list-group-item"><span class="badge">253</span> New Student</li>
									<li class="list-group-item"><span class="badge">17</span> Fees pending</li>
									<li class="list-group-item"><span class="badge">3</span> Anouncement</li>
								</ul>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								Blog</a>
							  </h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								<ul class="list-group">
									<li class="list-group-item"><span class="badge">12</span> New</li>
									<li class="list-group-item"><span class="badge">5</span> Deleted</li>
								</ul>
							</div>
						  </div>
							<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								Settings</a>
							  </h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								<ul class="list-group">
									<li class="list-group-item"><span class="badge">1</span> Users Reported</li>
									<li class="list-group-item"><span class="badge">5</span> User Waiting Activation</li>
								</ul>
							</div>
						  </div>
						</div> 
					</div>
					<div class="col col-md-9">
						<div class="row">
							<div class="col col-md-5">
								<h4>Today Stats:</h4>
										Visits<span class="pull-right strong">- 15%</span>
										 <div class="progress">
											<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="15"aria-valuemin="0" aria-valuemax="100" style="width:15%">15%</div>
										</div>
									
										20 New Users<span class="pull-right strong">+ 30%</span>
										 <div class="progress">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30"aria-valuemin="0" aria-valuemax="100" style="width:30%">30%</div>
										</div>
									
										359 Downloads<span class="pull-right strong">+ 8%</span>
										 <div class="progress">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="8"aria-valuemin="0" aria-valuemax="100" style="width:8%">8%</div>
										</div>
							</div>
							<div class="col col-md-5">
								<h4>This Month Stats:</h4>
										Visits<span class="pull-right strong">+ 45%</span>
										 <div class="progress">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45"aria-valuemin="0" aria-valuemax="100" style="width:45%">45%</div>
										</div>
									
										395 New Users<span class="pull-right strong">+ 57%</span>
										 <div class="progress">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="57"aria-valuemin="0" aria-valuemax="100" style="width:57%">57%</div>
										</div>
									
										12.593 Downloads<span class="pull-right strong">+ 25%</span>
										 <div class="progress">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25"aria-valuemin="0" aria-valuemax="100" style="width:25%">25%</div>
										</div>
							</div>
						</div>
					</div>
				</div>
<?php
$limit =2;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;  
$result = mysqli_query($db,"SELECT id,studentname,studentlastname,studentemail,coursename FROM student_table ORDER BY id ASC LIMIT $start_from, $limit");
?>

  <h2 class="sub-header">Register Student</h2>
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
while ($row = mysqli_fetch_array($result)) {  
?>  

<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["studentname"]; ?></td>
    <td><?php echo $row["studentlastname"]; ?></td>
		<td><?php echo $row["studentemail"]; ?></td>
		<td><?php echo $row["coursename"]; ?></td>
	
</tr>
<?php  
};  
?>     
						</table>

                        <?php  

$result_db = mysqli_query($db,"SELECT COUNT(id) FROM student_table"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='paginationpage.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>					
            <hr>
<center>
<p> 
A powerful solution to simplify the complexity of running a school. A friendly app that connects all core areas of the school, manages all records, analyze the data and gives important insights to greatly improve the performance
 of the students, teachers, and school in general.
</p>

</center>
<hr>
          </div>
        </div>
      </div>
      
    </div>
