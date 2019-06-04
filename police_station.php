<?php
		include('include\header.php');
		?>

<!-- search for nearer police station  -->
	<div class="container">
		<div class="row">
		  	<div class="col-sm-4">                
			  <ul class="nav nav-pills nav-stacked" role="tablist">
			    <li><a href="dashboard.php">Dashboard</a></li>
			    <li><a href="" data-toggle="modal" data-target="#myModal1">Add Police</a></li>
			    <li><a href="activity.php">Activity</a></li>       
			    <li class="active"><a href="">View Police</a></li>       
			  </ul>
			</div>
			<div class="col-sm-8">
			  <h3 style="text-align:center;color:red;">View All The Nearer Police Station</h3>
		          <input type="text" class="form-control" placeholder="Search Police Station" required>
		    	  <center><button type="button" class="btn btn-danger">Search</button> </center>
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

				        <label><input type="radio" name="ps" value="Police Station" style="margin-left: 35px;">Police Station</label>
				        <label><input type="radio" name="ps" value="Sub Police Station" style="margin-left: 20px;">Sub Police Station</label>

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