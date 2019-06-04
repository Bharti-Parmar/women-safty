<?php
		include('include\header.php');
		?>

<div class="container">
  
	<div class="row">
	  	<div class="col-sm-4">                
		  <ul class="nav nav-pills nav-stacked" role="tablist">
		    <li class="active"><a href="#">Dashboard</a></li>
		    <li><a href="activity.php">Activity</a></li>           
		  </ul>
		</div>
		<div class="col-sm-8">
<!-- alert message -->
           <div class="alert alert-danger">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <center><strong>Alert!</strong></center> <br>
<!-- alert shows -->
		    			<label for="name"></label><br>
						Name:<input type="name" name="name" required><br />

						<label for="location"></label><br>
						Location:<input type="text" name="location" required><br />

						<label for="women_contact"></label><br>
						Women Contact:<input type="text" name="women_contact" required><br />

						<label for="area"></label><br>
						Area:<input type="text" name="area" required><br />

						<label for="current_location"></label><br>
						Current Location:<input type="text" name="current_location" required><br />

		   </div>
		</div>
	</div>
</div>


<?php
		include('include\footer.php');
		?>