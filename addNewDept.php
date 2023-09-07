
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST["name"])){
        // // removes backslashes
	// $name = stripslashes($_REQUEST['name']);
        // //escapes special characters in a string
	// $name = mysqli_real_escape_string($con,$username); 

	$Name = $_POST["name"];
	    $buiding = $_POST["building"];
	    // $DOB = $_POST["dob"];
	    // $Email = $_POST["email"];  
	    // $Major = $_POST["program"]; 
	    // $dept = $_POST["DeptName"]; 
	    // $fellow = $_POST["famount"];
	    $budget = $_POST["budget"];
	    
	    $sql = "INSERT INTO `department`(`dept_name`, `building`, `budget`) VALUES ('$Name','$buiding','$budget') ;";
	    
	   $result = mysqli_query($con,$sql);
	   echo $sql;
	   print_r($result);
	   if($result){
	   	echo '<script>alert( "Success: Row inserted - '.$sql.'");window.location.href="/dbdm";</script>';
	   }
         	else{
         		echo '<script>alert( "Failed: Check query again - '. $sql.'");window.location.href="/dbdm";</script>';
         	}
	    }
        else{

?>
<!-- <div class="form"> -->
<center> <h1>Add New Department</h1></center>
<br>
<form  name="registration" action="addNewDept.php" method="post">
	<div class="row">
		<div class="col-md-3 col-sm-12">
		</div>
          	<div class="col-md-6 col-sm-12">
          		<fieldset>
	<!-- <legend>Student Registration</legend> -->
	<label for="sch">Department Name</label>
	     <div class="form-group">
              
              <input class="form-control" type="text" name="name" placeholder="Department Name" required />
       		</div>
	<!-- <input type="text" name="name" placeholder="Full Name" required /> -->
	<div class="form-group">
              <label for="sch">Bulding</label>
              <input class="form-control"  type="text" name="building" placeholder="Bulding name" required />
       		</div>
	
       	<div class="form-group">
              <label for="sch">Budget</label>
              	<input class="form-control"  type="number" name="budget" placeholder="Budget of Department" required />

       		</div>
       	</fieldset>
          <br>
<center> <input class="btn btn-primary"  type="submit" name="submit" value="Register" /> </center> 
</div>	
<div class="col-md-3 col-sm-12">
		</div>
</div>
</form>

<?php } ?>

