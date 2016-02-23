
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<?php
include('db_config.php');
echo $_POST['std_id'];
echo $_POST['password'];

 include('header.php') ?>

<form action="login.php" method="POST">

<div class="col-md-6 col-xs-6  col-md-offset-3 pull-right" >
<form class="form-horizontal" >

<hr>
<head>Signup Now...!!!</head>

<div class="col-md-6">
Name<input type="text" placeholder="firstname" class="form-control"></input><br>
</div>

<div class="col-md-6">
Branch<input type="text" placeholder="branch" class="form-control"></input><br></div>

<div class="col-md-6"> 
Age<input type="text" placeholder="Age" class="form-control"></input><br></div>

<div class="col-md-6">Gender
<input name="gender" type="radio" value="1"> Male</input><br>
<input name="gender" type="radio" value="1"> Female</input></div>

<div class="col-md-6">
Date of Birth<input type="text" placeholder="dob" class="form-control"></input><br></div>

<div class="col-md-6">
Address<input type="text" placeholder="address" class="form-control"></input><br></div>

<div class="col-md-6">
User Id<input name="std_id" placeholder="email" class="form-control"></input>
Password<input name="password" type="password" placeholder="password" class="form-control"></input><br>
</div>

<div class="col-md-12 col-sm-6">
<button class="btn btn-default" type="submit" value="submit">SUBMIT</button>
</div>

</form> 

<?php

$query1="INSERT INTO `std_details`(`std_id`, `Name`, `Branch`, `Age`, `Gender`, `Date_of_Birth`, `Registered_on`, `Address`, `password`) VALUES ('value-1'),('value-2'),('value-3'),('value-4'),('value-5'),('value-6'),('value-7'),('value-8'),('value9')";
    $res1=mysql_query($query1);

	$query2="select * from std_details where std_id='".$_POST['std_id']."' and password='".$_POST['password']."';";
    $res2=mysql_query($query2);

if(mysql_num_rows($res2)=="1") {

 printf("Registration Successfull") ;
 
 <a href="C:\xampp\htdocs\arena\dashboard.php">Click here to view details</a>

}

else
echo "User details does not exist";

?>

<?php include('footer.php') ?>
<script src="bootstrap.js" type="text/javascript"></script>

</script>
</body>
</html>
