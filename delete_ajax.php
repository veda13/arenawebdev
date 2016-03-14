<?php 
  include 'db_config.php';
 


	$query1="delete from std_details where std_id='".$_POST['std_id']."';";
    $res=mysql_query($query1);
    

    if($res =="1") {
      
   		$value['status']=1;
    	 
	}
	else
	{
		$value['status']=0;
		
	}
echo json_encode($value);

   // while($value=mysql_fetch_array($res)){
			
			// 			echo $value['std_id']."  ".$value['firstname'];
	  // } 
   

    


?>
