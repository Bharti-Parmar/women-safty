
	<?php
		include('include\header.php');
		?>

		<h1 style="text-align:center">Women's Helpline</h1><br><br>
		
					
						<h3 style="color:#004d4d;text-align:center;">User Registration</h3>

					<form method="POST" action="women-register.php">
					<div class="modal-body">
							          
						<center>

						<input type="email" placeholder="Enter Email" name="email"  required><br />

						<input type="name" placeholder="Enter User Name" name="name"  required><br />
					
						<input type="contact" placeholder="Enter Your contact" name="contact" required><br />

						<input type="p_contact" placeholder="Enter Your parents contact" name="p_contact" required><br />

						<input type="address1" placeholder="Enter Your Present Address" name="add1" required><br />

						<input type="address2" placeholder="Enter Your Permanent Address" name="add2" required><br />

						<input type="designation" placeholder="Enter Your Designation" name="designation" required><br />

						<input type="address3" placeholder="Enter Your Designation Address" name="add3" required><br />

						<input type="pwd" placeholder="Enter Password" name="psw" required><br />
						</center>

					</div>
					
					<div class="modal-footer">
						<center>
						<button type="submit" class="btn btn-primary" name="register" style="margin-left:10%">Register</button>
						</center>
					</div>
					
		</div>

			<?php
		include('include\footer.php');
		?>