<?php 
	include 'db_config.php';

	$query="select * from std_details;";
    $res=mysql_query($query);
 ?>
 <?php 
	/*$users[0]['Id']="asa"; $users[1]['Id']="DEV";
	$users[0]['name']="asa"; $users[1]['name']="DEV";
	$users[0]['branch']="cse"; $users[1]['branch']="IT";
	$users[0]['DOB']="1/2/2011"; $users[1]['DOB']="3/4/2015";
	$users[0]['registered_on']="1223445566"; $users[1]['mobile']="78008765443";
	$users[0]['year']="2011-2015"; $users[1]['password']="2012-2016";
	$users[0]['email']="asa@g.com";$users[1]['email']="dev@g.com";
	$users[0]['password']="asa"; $users[1]['password']="DEV";
	$users[0]['address']="2/2/3445-a"; $users[1]['address']="2/9/67d/1";*/


	    <div class="col-md-5">
      <table class="table table-bordered">
	     <thead>	
	          <th class="success">std_id</th>
	           <th class="success">password</th>
	    </thead>
	    <tbody>
     <?php
          while($value=mysql_fetch_array($res)){
			
		echo "<tr><td>".$value['std_id']." </td><td> ".$value['Name']." </td><td> ".$value['Branch']." </td><td> ".$value['Age']." </td><td> ".$value['Gender']." </td><td> ".$value['Date_of_Birth']." </td><td> ".$value['Registered_on']." </td><td> ".$value['Address']." </td><td> ".$value['password']." </td></tr>";	
	    echo "<br>";
	      } 

	      foreach ($std_id as $key1 => $value) {				
		echo $value['email']."  ".$value['Name']."  ".$value['Branch']."  ".$value['Age']."  ".$value['Gender']."  ".$value['Date_of_Birth']."  ".$value['Registered_on']."  ".$value['Address']."  ".$value['password'];	
	    echo "<br>";
	}

      ?>
</tbody>
</table>
</div>