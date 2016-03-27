<?php 
	include 'db_config.php';

	$query="select * from std_details;";
    $res=mysql_query($query);
 ?>
<!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
 
 <div class="container">
  <div class="col-md-5">
    <table class="table table-striped">
    	<thead>	
	        <th>std_id</th>
	        <th >First Name</th>
	        <th >Last Name</th>
	        <th >Branch</th>
	        <th >Gender</th>
	        <th >Date_of_Birth</th>
	        <th >Email</th>
	        <th >Password</th>
	    </thead>
	    <tbody>
<?php

 while($value=mysql_fetch_array($res)){
	echo "<tr><td>".$value['std_id']." </td><td> ".$value['firstname']." </td><td> ".$value['lastname']." </td><td> ".$value['branch']." </td><td> ".$value['gender']." </td><td> ".$value['dob']." </td><td> ".$value['email']." </td><td> ".$value['password']." </td></tr>";	
	    echo "<br>";
	} 

 // foreach ($std_id as $key1 => $value) {				
	// echo $value['email']."  ".$value['Name']."  ".$value['Branch']."  ".$value['Age']."  ".$value['Gender']."  ".$value['Date_of_Birth']."  ".$value['Registered_on']."  ".$value['Address']."  ".$value['password'];	
	//     echo "<br>";
	// }

?>
</tbody>
</table>
</div>
</div>

</body>
 </html>