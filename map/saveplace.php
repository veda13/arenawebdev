<?php 
  include 'db_config_maps.php';
  ?>

  <?php

  $query1="INSERT INTO map_details(`lat`,`lng`,`place`)VALUES('".$_POST['lat']."','".$_POST['lng']."','".$_POST['place']."')";
    $res=mysql_query($query1);
    
    if($res=="1") 
    {
    	alert("Data Saved");
    }
	else
	{
		echo "Error";
		
	}
echo json_encode($value);
?>