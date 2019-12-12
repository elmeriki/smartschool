<?php
include 'main_menu.php';

?>
     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <div class="container_fluid">
<div class="container_fluid">
    <!-- <h1 class="well">Delete Registration </h1> -->
    <p class="page-header"> 
    <div class='alert alert-success text-center'>
 <strong>Success Message!</strong> Student Account has been deleted with email confirmation
</div>
	<div class="col-lg-6 well">
	<div class="row">
				<form action="../controller/deletecontroller.php" method="POST">

					<div class="col-sm-12">
				
						</div>						
					<div class="form-group">
						<label>Student ID/Number</label>
						<input type="text" placeholder="Enter Phone Number Here.." name="studentid" class="form-control" required>
					</div>		
					<button type="submit" class="btn btn-lg btn-info">Delete</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
</div> 


            </div>
          </div> 
