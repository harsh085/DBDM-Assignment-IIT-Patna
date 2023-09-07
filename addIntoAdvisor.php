
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST["stdName"])){
       	$s_id = $_POST["stdName"];
	    $i_id = $_POST["instName"];
		    
	    $sql = "INSERT INTO `advisor`(`s_ID`, `i_ID`) VALUES ('$s_id','$i_id') ;";
	   
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

    	$query1 = "SELECT ID,name FROM student where student.id not in (SELECT s_ID from advisor);";
        $stddata = mysqli_query($con,$query1);
        $query2 = "SELECT ID,name FROM instructor";
        $instdata = mysqli_query($con,$query2);
?>
<!-- <div class="form"> -->

<br>
<p> Database has been defined such a way that the relationship between student and instructor is is a <strong>one-to-many relationship</strong>, Since a student can have only one instructor but an instructor can have many students. <br>
So filtering out only those students who are not assigned any instructor.<br> <strong>Query for Student dropdown - <?php echo $query1; ?><br> Query for Instructor dropdown - <?php echo $query2; ?></strong> </p>
<br>
<center> <h1>Create Advisor Relation between Student and Instructor</h1></center>
<br>
<form  name="registration" action="addIntoAdvisor.php" method="post">
		          	
	<div class="row">
		<div class="col-md-3 col-sm-12">
		</div>
          	<div class="col-md-6 col-sm-12">
          		<fieldset>
	<div class="form-group">
		 <label for="sch">Student Roll no and Name:</label><br>
		<select class="form-control" name="stdName" required>
		<option  disabled selected>--select--</option>
		<?php foreach ($stddata as $key => $value) { ?>
                  <option value="<?php echo $value['ID'] ?>"><?php echo $value['ID'] ?> - <?php echo $value['name'] ?></option>
                <?php } ?>
		</select>
                 	</div>

                 	<div class="form-group">
		 <label for="sch">instructor ID and Name:</label><br>
		<select class="form-control" name="instName" required>
		<option  disabled selected>--select--</option>
		<?php foreach ($instdata as $key => $value) { ?>
                  <option value="<?php echo $value['ID'] ?>"><?php echo $value['ID'] ?> - <?php echo $value['name'] ?></option>
                <?php } ?>
		</select>
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

