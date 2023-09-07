
<script type="text/javascript">
	// function fellowship(val){
	// 	var id = val.getAttribute("value");
	// 	if(id=="MTech"){
	// 		document.getElementById("famount").value = 12400;
	// 	} 
	// }
	$('#selected').change(function(){
	    if($(this).val() == "MTech"){
	        // alert("s:");
	        document.getElementById("famount").value = 12400;
	    } 
	     else if($(this).val() == "PHD"){
	        // alert("s:");
	        document.getElementById("famount").value = 35000;
	    } 
	    else{
	        // alert("s:");
	        document.getElementById("famount").value = 0;
	    } 
	});
</script>



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
	    $DOB = $_POST["dob"];
	    $Email = $_POST["email"];  
	    $Major = $_POST["program"]; 
	    $dept = $_POST["DeptName"]; 
	    $fellow = $_POST["famount"];
	    $YOS = $_POST["yos"];
	    
	    $sql = "INSERT INTO `student`(`ID`, `name`, `dept_name`, `dob`, `email`, `program`, `yearofstudy`, `fellowship`) VALUES ('$Roll_No','$Full_Name','$dept','$DOB','$Email','$Major','$YOS','$fellow') ;";
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
<center> <h1>Student Registration</h1></center>
<br>
<form  name="registration" action="addNewStd.php" method="post">
	<div class="row">
          	<div class="col-md-6 col-sm-12">
          		<fieldset>
	<!-- <legend>Student Registration</legend> -->
	<label for="sch">Full Name</label>
	     <div class="form-group">
              
              <input class="form-control" type="text" name="name" placeholder="Full Name" required />
       		</div>
	<!-- <input type="text" name="name" placeholder="Full Name" required /> -->
	<div class="form-group">
              <label for="sch">Student ID/ Roll Number</label>
              <input class="form-control"  type="text" name="id" placeholder="Student ID/ Roll Number" required />
       		</div>
	<div class="form-group">
              <label for="sch">Date of Birth</label>
              <input class="form-control" type="date" name="dob" required />
       		</div>
       		<!-- <div class="form-group">
              <label for="sch">Department name</label>
              	<input class="form-control"  type="text" name="DeptName" placeholder="Department name" required />

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
              	<!-- onclick="fellowship(this);"  -->
       	</div>
	
	</fieldset>
</div>
	<div class="col-md-6 col-sm-12">
	<fieldset>
	<div class="form-group">
              <label for="sch">Email Address</label>
              <input class="form-control"  type="email" name="email" placeholder="Email Address" required />
       		</div>
	<div class="form-group">
		
              <label for="sch">Major/Program:</label>
		<select class="form-control" name="program" id="selected" required>
		<option  disabled selected >--select--</option>
		  <option value="BTech">BTech</option>
		  <option value="MTech">MTech</option>
		  <option value="BSc">BSc</option>
		  <option value="MSc">MSc</option>
		  <option value="PHD">PHD</option>
		</select>
              	<!-- onclick="fellowship(this);"  -->
       	</div>

       	<div class="form-group">
              <label for="yos">Year of Study</label>
              	<input class="form-control"  type="number" name="yos" placeholder="Year of Study" required />

       		</div>	
	<div class="form-group">
              <label for="famount">Fellowship amount</label>
              	<input class="form-control"  id="famount" type="number" name="famount" placeholder="Amount"  />

       		</div>
	
	
	</fieldset>
          	</div>

          </div>
          <br>
<center> <input class="btn btn-primary"  type="submit" name="submit" value="Register" /> </center> 
	
</form>

<?php } ?>

