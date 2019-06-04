<?php
		include('include\header.php');
		include('connection.php');
		?>

<!-- women edit profile connection page -->
 <?php

          $id=@$_GET['Women_id'];
          $query="Select * from booking_registration where women id='".$id."'";

          $sql=mysqli_query($conn,$query);
          $edit=mysqli_fetch_array($sql);
      ?>

<h1 style="text-align:center">Women's Helpline</h1><br><br>
		<div>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 form">				          
					<form action="update-edit-detail.php" method="POST" enctype="multipart/form-data">
						<center>
						<input type="hidden" name="Women_id" value="<?php echo $edit['1'];?>">

						<label for="name"></label>
						<input type="name" placeholder="Enter User Name" value="<?php echo $edit['name'];?>" name="name"  required><br />

						<label for="email"></label>
						<input type="email" placeholder="Enter Your Email" value="<?php echo $edit['email'];?>" name="email" required><br />

						<label for="address1"></label>
						<input type="address1" placeholder="Enter Your Present Address" value="<?php echo $edit['add1'];?>" name="add1" required><br />

						<label for="address2"></label>
						<input type="address2" placeholder="Enter Your Permanent Address" value="<?php echo $edit['add2'];?>" name="add2" required><br />

						<label for="designation"></label>
						<input type="designation" placeholder="Enter Your Designation" value="<?php echo $edit['designation'];?>" name="designation" required><br />

						<label for="address3"></label>
						<input type="address3" placeholder="Enter Your Designation Address" value="<?php echo $edit['add3'];?>" name="add3" required><br />

						<label for="psw"></label>
						<input type="pwd" placeholder="Enter Password" value="<?php echo $edit['psw'];?>" name="psw" required><br />

						<label for="c_psw"></label>
						<input type="confirm_password" placeholder="Confirm Your Password" value="<?php echo $edit['c_psw'];?>" name="c_psw" required><br />

						<button type="submit" class="btn btn-primary" name="update" style="margin-left:10%">Edit</button>

						</center>
					</form>
				</div>
				<div class="col-sm-3"></div>

		</div>
					

<?php
		include('include\footer.php');
		?>