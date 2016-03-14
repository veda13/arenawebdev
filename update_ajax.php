<?php 
  include 'db_config.php';
 
?>

<?php

	$query1="UPDATE `users` SET `username`='".$_POST['username']."',`email`='".$_POST['email']."',`gender`='".$_POST['gender']."',`password`='".$_POST['password']."' WHERE `user_id`='".$_POST['user_id']."'";
    $res=mysql_query($query1);
    $value=mysql_fetch_array($res);

    if(mysql_num_rows($res)=="1") {
      
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
