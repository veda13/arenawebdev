`
<html>
<head>
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<?php
include('db_config.php');

	$query1="select * from std_details where Email='".$_POST['email']."' and password='".$_POST['password']."';";
    $res=mysql_query($query1);

   if(mysql_num_rows($res)=="1") {

 echo "Login Successfull";

 echo '<a href="dashboard.php">Click here to view details</a>';
 #header('dashboard.php');
 echo '<script>window.location.href="dashboard.php"; </script>';


}

else
echo "User details does not exist";

?>

<script src="js/bootstrap.js" type="text/javascript"></script>
</body>
</html>

