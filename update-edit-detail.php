<?php
	include('connection.php');

// update edit profile 
	
	if(isset($_POST['update']))
	{
      
        $id=$_POST['Women_id'];
		$name=$_POST['name'];
		$contact=$_POST['contact'];
	  	$p_contact=$_POST['p_contact'];
	  	$add1=$_POST['add1'];
	  	$add2=$_POST['add2'];
	  	$designation=$_POST['designation'];
	  	$add3=$_POST['add3'];
	  	$psw=$_POST['psw'];
	  	$c_psw=$_POST['c_psw'];
		$date=date('d/m/Y H:i:s');

		$query="UPDATE women SET Name='".$name."',Contact='".$contact."',Parent_Contact='".$p_contact."',Present_address='".$add1."',Permanent_address='".$add2."',Status='".$designation."',Status_address='".$add3."',password='".$psw."',confirm_password='".$c_psw."',date_time='".$date."' WHERE id='".$id."'";

		mysqli_query($conn,$query);
		//var_dump($query);
		header('location:women.php?update=true');
	}
?>