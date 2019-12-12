
<?php
include 'main_menu.php';
?>
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <div class="container_fluid">
<div class="container_fluid">
    <!-- <h1 class="well">Reservation Form</h1> -->
    <p class="page-header"> 
    <div class='alert alert-success text-center'>
 <strong>Success Message!</strong> Student Account has been updated successfully
</div>
	<div class="col-lg-6 well">
	<div class="row">
				<form action="../controller/updatestudentcontroller.php"  method="POST">

					<div class="col-sm-12">
						<div class="row">
						<div class="col-sm-6 form-group">
								<label>Enter Student Number *** </label>
								<input type="text" placeholder="Enter the correct Student Number" name="studentid" class="form-control" required autocomplete="OFF" >
							</div>	
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." name="studentname" class="form-control" required autocomplete="OFF" required >
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." name="studentlastname" class="form-control" required autocomplete="OFF" required>
							</div>
						</div>					
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Phone</label>
								<input type="text" placeholder="Enter Phone Number Here.." name="studentphone" class="form-control" required autocomplete="OFF" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Email ***</label>
								<input type="email" placeholder="Enter Email Address Here.." name="studentemail" class="form-control" required autocomplete="OFF" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Course Name</label>
								<input type="text" placeholder="Enter Course Name Here.." name="coursename" class="form-control" required autocomplete="OFF" required>
							</div>		
						</div>
					<button type="submit" class="btn btn-lg btn-info">Update now</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
</div> 


            </div>
          </div> 
