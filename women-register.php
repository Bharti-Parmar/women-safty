<?php

    include('connection.php');


// register women details in database

  if(isset($_POST['register']))
  {
    $email=$_POST['email'];
  	$name=$_POST['name'];
  	$contact=$_POST['contact'];
  	$p_contact=$_POST['p_contact'];
  	$add1=$_POST['add1'];
  	$add2=$_POST['add2'];
  	$designation=$_POST['designation'];
  	$add3=$_POST['add3'];
    $psw=$_POST['psw']; 
    $date=date('Y/m/d H:i:s');
    $permission =0;

    $query = "insert into user(Username,Password,Permission) values('".$email."','".$psw."','".$permission."')";
    if(mysqli_query($conn,$query)){

      $user_id = mysqli_insert_id($conn);

      $query = "INSERT INTO women(Name,Present_address,Contact,Parent_Contact,Permanent_address,Status,Status_address,user_id, date_time)VALUES('".$name."','".$add1."',".$contact.",".$p_contact.",'".$add2."','".$designation."','".$add3."',".$user_id.",'".$date."')";

      if(mysqli_query($conn,$query)){
        echo 'sucess';
      }else{
        echo 'fail';
      }

    }else{
      echo 'master fail';
    }

  	header('location:index.php?save=true');

  }


?>
