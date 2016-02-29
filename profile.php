<?php 
	include 'db_config.php';
	include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


</head>
<body>


<div class="col-md-12"  style="margin-top: 5%" >

			<form action="update.php" method="POST">

				<div class="col-md-2 col-sm-3 col-md-offset-6">
					Student_ID<input name="std_id" type="text" placeholder="std_id" class="form-control"></input><br>
				</div>


				<div class="col-md-2 col-sm-3 col-md-offset-6">
				Fist Name<input name="firstname" type="text" placeholder="firstname" class="form-control"></input><br>
				</div>

				<div class="col-md-2 col-sm-3 col-md-offset-6">
					Last Name<input name="lastname" type="text" placeholder="lastname" class="form-control"></input><br>
				</div>

				<div class="col-md-2 col-sm-3 col-md-offset-6">
				Branch<input name="branch" type="text" placeholder="branch" class="form-control"></input><br>
				</div>

				<div class="col-md-3 col-sm-4 col-md-offset-6">				
				Gender<br><input name="gender" type="radio" value="1"> Male</input>
				<input name="gender" type="radio" value="1"> Female</input><br>
				</div>

				<div class="col-md-2 col-sm-3 col-md-offset-6"><br>
				Date of Birth<input name="dob"type="text" placeholder="dob" class="form-control"></input><br>
				</div>

				<div class="col-md-2 col-sm-3 col-md-offset-6">
				Email Id<input name="email" type="email" placeholder="email" class="form-control"></input><br>
				</div>

				<div class="col-md-2 col-sm-3 col-md-offset-6">
				Password<input id="password" name="password" type="password" placeholder="password" class="form-control"></input><br>
				</div>

				<div class="col-md-2 col-sm-3 col-md-offset-6">
				Confirm Password<input id="confirm_pass" name="confirm password" type="password"  placeholder="password" class="form-control"></input><br>
				</div>

				<div class="col-md-2 col-sm-3" col-md-offset-6>
					<input name="upadate" type="submit"  value="update" class="btn btn-info"></input>
				</div>
			

		</form> 
        </div>
        </body>
        </html>

 <?php include 'footer.php'; ?>
