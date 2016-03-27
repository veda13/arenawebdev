<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="col-md-12"  style="margin-top: 3%" >
		<form action="login.php" method="POST">
			<div class="col-md-2 col-sm-3 ">
				<img src="img/logo.gif" align="left" width="50" height="50"></div>
				<div class="col-md-2 col-sm-3 col-md-offset-4">
					<input name="email" type="email" placeholder="email" class="form-control"></input>
				</div>
				<div class="col-md-2 col-sm-3 ">
					<input name="password" type="password" placeholder="password" class="form-control">
					</input><br>
				</div>
				<div class="col-md-2 col-sm-3 ">
					<input type="submit" class="btn btn-info"></input>
				</div>
		</form> 
    </div>

	<p font face="Times new roman" align="center">Sign Up..!!</font></p>
    <a href="gallery.php">	<img src="img/9.jpg" align="left" width="100" height="100"></a>
       	
<div class="col-md-12">
	<form action="register.php" method="POST">
		<div class="col-md-2 col-sm-3 col-md-offset-6">
			Student_ID<input name="std_id" type="text" placeholder="std_id" class="form-control"></input>
		<br></div>
		<div class="col-md-2 col-sm-3 col-md-offset-6">
			First Name<input name="firstname" type="text" placeholder="firstname" class="form-control">
			</input><br></div>
		<div class="col-md-2 col-sm-3 col-md-offset-6">
			Last Name<input name="lastname" type="text" placeholder="lastname" class="form-control"></input><br></div>
		<div class="col-md-2 col-sm-3 col-md-offset-6">
			Branch<input name="branch" type="text" placeholder="branch" class="form-control"></input><br>
		</div>
		<div class="col-md-3 col-sm-4 col-md-offset-6">				
			   Gender<br><input name='gender' type='radio' value='male'> Male</input>
          <input name='gender' type='radio' value='female'> Female</input></div>

		</div>
		<div class="col-md-2 col-sm-3 col-md-offset-6"><br>
			Date of Birth<input name="dob"type="text" placeholder="dob" class="form-control"></input><br>
		</div>
		<div class="col-md-2 col-sm-3 col-md-offset-6">
			Email Id<input name="email" type="email" placeholder="email" class="form-control"></input>
			<br></div>

		<div class="col-md-2 col-sm-3 col-md-offset-6">
			Password<input id="password" name="password" type="password" placeholder="password" class="form-control"></input><br>
		</div>
		
		<div class="col-md-2 col-sm-3 col-md-offset-6"><br>
			<button class="btn btn-info" type="submit" value="submit">SUBMIT</button></input>
		</div>
</form>
</div>

<footer>
<div class="container footerWrap">
		<div class="row">
		 	<div class="col-xs-12">
		 		<div class="pull left">
		 		 Copyright@2016 / <a href="Veda13@github.com" target="_blank">Veda13@github.com</a> /
		 		<a href="lincenses">Linsences</a> /
		 		<a href="terms and privacy">terms and conditions</a> 
		 		</div>
		 	</div>
		</div>
</div>
</div>
<?php include('footer.php') ?>
<script src="js/bootstrap.js" type="text/javascript"></script>
</footer>
</body>
</html>

