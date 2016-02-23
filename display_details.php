<?php include('header.php') ?>
<div class="col-md-12">
	<table border="2" hight="300" width="500">
		<th>Email Id</th>
	    <th>Password</th>
	  	   
	    <tr>
	    <td>bindu@gamil.com</td>
	    <td>bindu1234</td>
	    </tr>

	    <tr>
	    <td>cindhu@gmail.com</td>
	    <td>cindhu12345</td>
	    </tr>
	    
	    <tr>
	    <td>arena@gmail.com</td>
	    <td>arena12345</td>
	    </tr>
	    
	    <tr>
	    <td>siri@gmail.com</td>
	    <td>siri19865</td>
	    </tr>

	</table>

	<?php 
	$users[0]['Id']="asa"; $users[1]['Id']="DEV";
	$users[0]['name']="asa"; $users[1]['name']="DEV";
	$users[0]['branch']="cse"; $users[1]['branch']="IT";
	$users[0]['DOB']="1/2/2011"; $users[1]['DOB']="3/4/2015";
	$users[0]['registered_on']="1223445566"; $users[1]['mobile']="78008765443";
	$users[0]['year']="2011-2015"; $users[1]['password']="2012-2016";
	$users[0]['email']="asa@g.com";$users[1]['email']="dev@g.com";
	$users[0]['password']="asa"; $users[1]['password']="DEV";
	$users[0]['address']="2/2/3445-a"; $users[1]['address']="2/9/67d/1";


	foreach ($users as $key1 => $value) {				
		echo $value['email']."  ".$value['password'];	
	    echo "<br>";
	}

  echo "<br>";

	foreach ($users as $key1 => $value) {
		foreach ($value as $key1 => $value1) {			
		echo $key1."  ".$value1;
	
	}
	echo "<br>";
	}

  ?>

<div class="col-md-5">
<table class="table table-bordered">
	<thead>	<th class="success">Email Id</th>
	    <th class="success">Password</th>
	    </thead>
	    <tbody>
<?php

foreach ($users as $key1 => $value) {				
		echo "<tr><td>".$value['email']." </td><td> ".$value['password']."</td></tr>";	
	    echo "<br>";
	}


?>
</tbody>
</table>
</div>




</div>
<?php include('footer.php') ?>