<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>

<div class="container">
<div class="col-md-12"  style="margin-top: 2%" >

			
	<form>
		<div class="col-md-3 col-sm-3 col-md-offset-4">
			Student_ID<input id="std_id" name="std_id" type="text" placeholder="std_id" class="form-control"/>
		<br>
		</div>
		<div class="col-md-2 col-sm-3 col-md-offset-4">
			<input type="button" class="btn btn-info" value="Get student info" onclick="get_details($('#std_id').val())"/>
		</div>
	</form>


	<form>
		<!-- <div class="col-md-2 col-sm-3 col-md-offset-6">
					Student_ID Del<input id="std_id_del" name="std_id_del" type="text" placeholder="std_id" class="form-control"/>
		<br>
		</div> -->
		<div class="col-md-5 col-sm-3 col-md-offset-4">
		<br>
				<input type="button"  class="btn btn-info" value="Delete student info" onclick="delete_details($('#std_id').val())"/>
		</div>
	</form>

	<form>
		<!-- <div class="col-md-2 col-sm-3 col-md-offset-6">
				Student_ID upd<input id="std_id_upd" name="std_id_upd" type="text" placeholder="std_id" class="form-control"/>
		</div>-->
		<div class="col-md-4 col-sm-3 col-md-offset-4">
	 
		<br>
				<input type="button"  class="btn btn-info" value="update student info" onclick="update_details()"/>
		</div>
	</form>

	<form>
		<!-- <div class="col-md-2 col-sm-3 col-md-offset-6">
				Student_ID info<input id="std_id_upd" name="std_id_upd" type="text" placeholder="std_id" class="form-control"/>
		</div>-->
		<div class="col-md-4 col-sm-3 col-md-offset-4">
		<br>
				<input type="button"  class="btn btn-info" value="Get all details" onclick="getall_details()"/>
		</div>
	</form>

		<div id="displayinfodiv"></div>

	    <!-- <input id="displayinfo"></input> -->

				<script src="js/jquery-1.9.1.min.js"></script>
				<script type="text/javascript" src="js/bootstrap.min.js"></script>
				
				<script type="text/javascript">
				function get_details(std_id){
					///var std_id=$('#std_id').val();
					console.log("testing"+std_id);
					$.ajax({
						url: 'get_details_ajax.php',
						method:'POST',
						data:{'std_id':std_id},
						success:function(data) {
							
							data = JSON.parse(data);
						if(data['status']==1){
							
                            $('#displayinfodiv').html("<table class='table table-bordered'><thead><tr><th>std_id</th><th>First Name</th><th>Last Name</th><th>Branch</th><th>Gender</th><th>Date_of_Birth</th><td>Email</th></tr></thead><tbody>"+
                            	"<tr std_id="+data[0]+ ">"+
                            	"<td>"+data[0]+"</td><td>"+data[1]+"</td><td>"+data[2]+"</td>"+"<td>"+data[3]+"</td>"+
                            	"<td>"+data[4]+"</td><td>"+data[5]+"</td><td>"+data[6]+"</td><td><input type='button' class='btn btn-info pull-right' value='Delete info' onclick='delete_details("+data[0]+")'/><td>"+
                            	"</td><input type='button' class='btn btn-info pull-right' value='update info' onclick='update_details"+
                            	"("+data[0]+")'/><td>"+
                            	"</tr>"+
                            	"</tbody></table>"+
                            	"<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Update Details</button>"+

  									"<div class='modal fade' id='myModal' role='dialog'>"+
    								"<div class='modal-dialog'>"+
    				 				"<div class='modal-content'>"+
        				 			"<div class='modal-header'>"+
         							"<button type='button' class='close' data-dismiss='modal'>&times;</button>"+
          				    		 "<h4 class='modal-title'>Update Student Details</h4>"+
        				  			"</div>"+
        						"<div class='modal-body'>"+
        						"<table class='table table-bordered'>"+
        						"<thead><tr><th>std_id</th><th>First Name</th><th>Last Name</th><th>Branch</th><th>Gender</th>"+
        						"<th>Date_of_Birth</th><td>Email</th>"+
        						"</tr></thead><tbody>"+
                            	"<td>"+data[0]+"</td><td>"+data[1]+"</td><td>"+data[2]+"</td>"+"<td>"+data[3]+"</td>"+
                            	"<td>"+data[4]+"</td><td>"+data[5]+"</td><td>"+data[6]+"</td>"+"</tr>"+
                            	"</tbody></table>;"+
      			  				"</div>"+
        						"<div class='modal-footer'>"+
        			  			"<button type='button' class='btn btn-default' data-dismiss='modal'></button>"+
        						"</div>"+
     			    			 "</div>"+
      	
    		       				"</div>);"+
								"$('#displayinfo').val(data[1]);"+
								   "}"+ 
								"else {"+
								   	"alert('Details doesnot exist');"+
									   "}"+
									  "}"+
									"});"+
								"}");


				         }
				     }
				 });
				}
			
		function delete_details(std_id_del){
			//var std_id_del=$('#std_id_del').val();
			console.log("testing del"+std_id_del);
			$.ajax({
			url: 'delete_ajax.php',
			method:'POST',
			data:{'std_id':std_id_del},
			success:function(data) {
				console.log(data);
			data = JSON.parse(data);
			if(data['status']==1){
			console.log(data);
			$('#'+std_id_del).hide();
			alert("Details deleted successfully");} 
			
			
			else {alert("Details doesnot exist");}

			}
		});

	}

	function update_details(std_id_upd){
			//var std_id_del=$('#std_id_del').val();
			console.log("testing upd"+std_id_upd);
			$.ajax({
			url: 'update_ajax.php',
			method:'POST',
			data:{'std_id':std_id_upd},
			success:function(data) {
				console.log(data);
			data = JSON.parse(data);
			if(data['status']==1){
			console.log(data);
			
			alert("Details updated successfully");} 
			
			else {alert("Details doesnot exist");}

			}
		});

	}

	function getall_details(){
			//var std_id_del=$('#std_id_del').val();
			console.log("testing allinfo");
			$.ajax({
			url: 'all_details_ajax.php',
			method:'POST',
			data:{'std_id':""},
			success:function(data) {
				console.log(data);
			data = JSON.parse(data);
			if(data['status']==1){
			console.log(data);
			// $('#'+std_id_del).hide();
			alert("All student details are displayed");} 
			
			else {alert("Details doesnot exist");}
         }
			
		});

	}

</script>
</div>
</div>
</body>
</html>