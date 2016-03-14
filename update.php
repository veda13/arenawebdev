<!DOCTYPE html>
<html>
<head>
	<title>update data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
<div class="container">

	
<?php
include('db_config.php');

	$std_id=$_POST['std_id'];
	echo $std_id;
	
	$query1="update std_details set 'std_id'='".$_POST["std_id"]."','firstname'='".$_POST['firstname']."','lastname'=".$_POST['lastname']."','Branch'=".$_POST['branch']."','Gender'=".$_POST['gender']."','Date_of_Birth'=".$_POST['dob']."','email'=".$_POST['email']."','password'=".$_POST['password']." where std_id='".$_POST['std_id']."';";
   
	$res=mysql_query($query1) or die(mysql_error());

 
	if($res ){
		
			echo "student deatails updated Successfully";

	}
  
else
echo "User details does not exist";
?>


	<?php include('footer.php') ?>
	<script src="bootstrap.js" type="text/javascript"></script>

	</div>
</div>

</body>
</html>
