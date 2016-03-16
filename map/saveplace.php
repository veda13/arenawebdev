<?php 
  include 'db_config_maps.php';
  ?>
  
  <?php

  $query1="INSERT INTO map_details(mid,lat,lng,place)VALUES('".$_POST['mid']."','".$_POST['lat']."','".$_POST['lng']."','".$_POST['place']."')";
    $res=mysql_query($query1);
    $value=mysql_fetch_array($res);
    if(mysql_num_rows($res)=="1") 
    {
    	alert("Data Saved");
    }
	else
	{
		echo "Error";
		
	}
echo json_encode($value);
?>