<?php
  
    include('../connection.php');


// add police station connection 

    
  if(isset($_POST['add']))
  {
  	$ps_name=$_POST['ps_name'];
  	$area=$_POST['area'];
  	$no_of_police=$_POST['no_of_police'];
  	$contact=$_POST['contact'];
  	$no_of_system=$_POST['no_of_system'];
  	$optradio=$_POST['ps'];
    $date=date('Y/m/d H:i:s');

  	$query = "INSERT INTO police(Contact, Police_area, System_available, Police_station_name, Police_station_type, No_of_police, time_date) VALUES('".$contact."','".$area."','".$no_of_system."','".$ps_name."','".$optradio."','".$no_of_police."','".$date."')";


  	  mysqli_query($conn,$query);

       //var_dump($query);

  	header('location:dashboard.php?save=true');

  }


?>