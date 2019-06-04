<?php
		include('include\header.php');
		?>



<div class="container">
  
	<div class="row">
	  	<div class="col-sm-4">                
		  <ul class="nav nav-pills nav-stacked" role="tablist">
		    <li><a href="index.php">Dashboard</a></li>
		    <li class="active"><a href="">Activity</a></li>      
		  </ul>
		</div>
		<div class="col-sm-8">
		  <h3 style="text-align:center;color:red;">Activity Report</h3>
          <input type="text" class="form-control" placeholder="Search" required>
    	  <button type="button" class="btn btn-danger" style="float:right">Search</button> 
		</div>
	</div>
</div>

<?php
		include('include\footer.php');
		?>