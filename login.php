<?php

session_start();

$b="none";

if(isset($_POST['submit'])){
	
	include 'connection.php';
	
	
    $email= $_POST['email'];
    $pwd= $_POST['pwd'];
	

    
    $sql ="SELECT User_id,Permission FROM user WHERE Username ='$email' and Password ='$pwd' ";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

       $_SESSION['userid']=$row['User_id'];

	   if($row['Permission'] == 0){
			header('location:women.php');
	   }else if($row['Permission'] == 1){
	   		header('location:Police/index.php');
	   }else if($row['Permission'] == 2){
	   		header('location:Admin/dashboard.php');
	   }
	
	}
	else{
	 $b="block";
	}		
}


		include('include\header.php');
		?>


<div class="container-fluid" style="background-image: url('image/patriarchy1.png'); background-attachment: no-repeat;background-size:cover;">

		<div class="row">
		    <div class="col-md-5 col-xs-12 navbar-header">
		      
		      <a class="navbar-brand swad" href="#">Women Safty</a>
		    </div>

		    <div class="col-md-7 col-xs-12 ">
		    	<div class="row">
		    		<form action="login.php" method="POST">

			    		<div class="col-md-4 col-xs-6">
					    	<!-- Email or Phone <br> -->
					    	<p style="color:red;display:<?php echo $b; ?>">Invalid Email Or Password</p>
					    	
					    </div>

					    <div class="col-md-8 col-xs-6">
					    	<h1 style="text-align:center;color:yellow;">Women's Helpline</h1><br><br>
					    	<center><input type="text" name="email" placeholder="Email"><br>
					    	<input type="password" name="pwd" placeholder="Password"><br>
					    	<button type="submit" class="btn btn-sm btn-success" name="submit">Login</button></center>
					    </div>
					</form>
				</div>
		    </div>
		</div>
</div>
		<?php
		include('include\footer.php');
		?>