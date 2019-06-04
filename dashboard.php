<?php
		include('include\header.php');
		?>

<!-- show message police succesfully added -->
<?php 
     if(@$_GET["save"]) { ?>

	<div class="alert alert-success alert-dismissible">
   <a href="dashboard.php" class="close">&times;</a>
 	 <strong>Success!</strong> Successfully police station is added.
 	</div>
 <?php  } 
       ?>


<div class="container">
 <!-- navigation bar --> 
	<div class="row">
	  	<div class="col-sm-4">                
		  <ul class="nav nav-pills nav-stacked" role="tablist">
		    <li class="active"><a href="#">Dashboard</a></li>
		    <li><a href="" data-toggle="modal" data-target="#myModal1">Add Police</a></li>
		    <li><a href="activity.php">Activity</a></li>       
		    <li><a href="police_station.php">View Police</a></li>       
		  </ul>
		</div>
		<div class="col-sm-8">
<!-- alert message -->
           <div class="alert alert-danger">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <center><strong>Alert!</strong></center> <br>
<!-- alert shows -->
		    			<label for="name"></label><br>
						Name:<input type="name" name="name"  required><br />

						<label for="location"></label><br>
						Location:<input type="text" name="location" required><br />

						<label for="area"></label><br>
						Area:<input type="text" name="area" required><br />

						<label for="ps_name"></label><br>
						Police Station:<input type="text" name="ps_name" required><br />

						<label for="no_of_system"></label><br>
						No. of system:<input type="number" name="no_of_system" required><br />

						<label for="current_location"></label><br>
						Current location:<input type="text" name="current_location" required><br />

						<label for="police_contact"></label><br>
						Police Contact:<input type="number" name="police_contact" required><br />

						<label for="women_contact"></label><br>
						Women Contact:<input type="number" name="women_contact" required><br />

		   </div>
		</div>
	</div>



<!-- Modal -->
		<div class="modal fade" id="myModal1" role="dialog">
			<div class="modal-dialog">
							    
<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h1 style="color:#004d4d;text-align:center;">Add Police Station</h1>
					</div>
<!-- Modal body -->
				<form method="POST" action="add-police-station.php">
					<div class="modal-body">

						<label for="ps_name"></label>
						<input type="name" placeholder="Enter Police Station Name" name="ps_name"  required><br />

						<label for="area"></label>
						<input type="text" placeholder="Enter Area" name="area" required><br />

						<label for="no_of_police"></label>
						<input type="number" placeholder="Enter Number of police available" name="no_of_police" required><br />

						<label for="contact"></label>
						<input type="text" placeholder="Enter Contact" name="contact" required><br />

						<label for="no_of_system"></label>
						<input type="number" placeholder="Enter Number of system available" name="no_of_system"><br />

						<label class="radio-inline"><br>
      						<input type="radio" name="optradio">Police Station
    					</label>
    					<label class="radio-inline"><br>
      						<input type="radio" name="optradio">Sub Police Station
    					</label>

					</div>
					
					<div class="modal-footer">
						<center>
						<button type="submit" class="btn btn-primary" name="add" style="margin-left:10%">Add Police</button>
						</center>
					</div>
				</form>	
				
				</div>
					      
			</div>
		</div>
</div>


<?php
		include('include\footer.php');
		?>