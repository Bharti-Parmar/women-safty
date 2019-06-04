<?php
session_start();

	include('include\header.php');
?>

<div class="container">
 <!-- show message for women profile update successfully -->
  	
  	<!-- <?php if($_GET['update']) {	?>
        <div class="alert alert-success alert-dismissible">
        
        </div>
    <?php } ?> -->

<!-- navigation bar -->
<?php
if(isset($_SESSION['userid'])){
	$user = $_SESSION['userid'];
}else{
	$user = 0;
}
?>


<h1 style="text-align:center">Women's Helpline</h1><br><br>


	<div class="row">
	  	<div class="col-sm-3">
		  <ul class="nav nav-pills nav-stacked" role="tablist">
		    <li class="active"><a href="#">Dashboard</a></li>
		    <li><a href="#"><?php echo $user; ?></a></li>
			<li><a href="edit_page.php?Women_id=<?php echo $row['Women_id'];?>">Edit Detail</a></li>
		  </ul>
		</div>
		<div class="col-sm-7">
			<div class="circle"></div>
		</div>
		<div class="col-sm-2">
          <button type="button" class="btn btn-danger" style="float:right;">Stop</button>
		</div>
	</div>

</div>


<?php
	include('include\footer.php');
?>
