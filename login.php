
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


	$query="select * from std_details where std_id='456789' and password='bindu123';";
    $res=mysql_query($query);



$if($mysql_num_rows($res)=="1") {

 echo "Login Successfull";
 echo <a href="C:\xampp\htdocs\arena\dashboard.php">Click here to view details</a>

}

 
else
echo "User details does not exist";

?>

<script src="bootstrap.js" type="text/javascript"></script>
</body>
</html>

