
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<?php
include('db_config.php');
include('header.php') ?>

<?php

$query1="insert into std_details(std_id, firstname, lastname, branch, gender, dob, email, password) values('".$_POST['std_id']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['branch']."','".$_POST['gender']."','".$_POST['dob']."','".$_POST['email']."','".$_POST['password']."');";

$res=mysql_query($query1) or die(mysql_error());

if($res) {

 printf("Registration Successfull") ;

 echo '<script>window.location.href="dashboard.php"; </script>';
 }

else
echo "User details does not exist";

?>

<?php include('footer.php') ?>
<script src="js/bootstrap.js" type="text/javascript"></script>

</script>
</body>
</html>
