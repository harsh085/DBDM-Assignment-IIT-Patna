
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST["name"])){
        // // removes backslashes
	// $name = stripslashes($_REQUEST['name']);
        // //escapes special characters in a string
	// $name = mysqli_real_escape_string($con,$username); 

	$Full_Name = $_POST["name"];
	    $Roll_No = $_POST["id"];
	    // $DOB = $_POST["dob"];
	    // $Email = $_POST["email"];  
	    // $Major = $_POST["program"]; 
	    $dept = $_POST["DeptName"]; 
	    // $fellow = $_POST["famount"];
	    $salary = $_POST["salary"];
	    
	    $sql = "INSERT INTO `instructor`(`ID`, `name`, `dept_name`, `salary`) VALUES ('$Roll_No','$Full_Name','$dept','$salary') ;";
	    
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

    	$query = "SELECT dept_name FROM department";
        $deptdata = mysqli_query($con,$query);
?>
<!-- <div class="form"> -->
<center> <h1>Instructor Registration</h1></center>
<br>
<form  name="registration" action="addNewInst.php" method="post">
	<div class="row">
		<div class="col-md-3 col-sm-12">
		</div>
          	<div class="col-md-6 col-sm-12">
          		<fieldset>
	<!-- <legend>Student Registration</legend> -->
	<label for="sch">Full Name</label>
	     <div class="form-group">
              
              <input class="form-control" type="text" name="name" placeholder="Full Name" required />
       		</div>
	<!-- <input type="text" name="name" placeholder="Full Name" required /> -->
	<div class="form-group">
              <label for="sch">Instructor ID</label>
              <input class="form-control"  type="text" name="id" placeholder="Instructor ID" required />
       		</div>
	<!-- <div class="form-group">
              <label for="sch">Date of Birth</label>
              <input class="form-control" type="date" name="dob" required />
       		</div> -->
       		
       		<div class="form-group">
		
              <label for="sch">Department name:</label><br><p>(for new department, please insert it first from the left pane.)</p>
		<select class="form-control" name="DeptName" required>
		<option  disabled selected>--select--</option>
		<?php foreach ($deptdata as $key => $value) { ?>
                  <option value="<?php echo $value['dept_name'] ?>"><?php echo $value['dept_name'] ?></option>
                <?php } ?>
		  <!-- <option value="BTech">BTech</option>
		  <option value="MTech">MTech</option>
		  <option value="PHD">PHD</option> -->
		</select>
              	
       	</div>
       	<div class="form-group">
              <label for="sch">Salary</label>
              	<input class="form-control"  type="number" name="salary" placeholder="Salary" required />

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

