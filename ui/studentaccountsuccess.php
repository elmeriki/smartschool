
<?php
include 'main_menu.php';
?>
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <div class="container_fluid">
<div class="container_fluid">
    <!-- <h1 class="well">Reservation Form</h1> -->
    <p class="page-header"> 
		<div class='alert alert-success text-center'>
 <strong>Success Message!</strong> New Student Account has been created with email confirmation
</div>

 </p>
	<div class="col-lg-6 well">
	<div class="row">
				<form action="../controller/createstudentcontroller.php"  method="POST">

					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." name="studentname" class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." name="studentlastname" class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" name="studentaddress" class="form-control" required></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Phone</label>
								<input type="text" placeholder="Enter Phone Number Here.." name="studentphone" class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Email</label>
								<input type="email" placeholder="Enter Email Address Here.." name="studentemail" class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Course Name</label>
								<input type="text" placeholder="Enter Course Name Here.." name="coursename" class="form-control" required>
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Guadian Name</label>
								<input type="text" placeholder="Enter Guadian Name Here.." name="gname" class="form-control" required> 
							</div>		
							<div class="col-sm-6 form-group">
								<label>Guadian Last Name</label>
								<input type="text" placeholder="Enter Guadian Address Here.." name="glastname" class="form-control" required>
							</div>	
						</div>						
					<div class="form-group">
						<label>Guadian Phone</label>
						<input type="text" placeholder="Enter Phone Number Here.." name="gphone" class="form-control" required>
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" placeholder="Enter Email Address Here.." name="gemail" class="form-control" required>
					</div>	
					<div class="form-group">
						<label>Guadian Address</label>
						<input type="text" placeholder="Enter Website Name Here.." name="gaddress" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-lg btn-info">Send</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
</div> 


            </div>
          </div> 
