<center> <h1>Student Table</h1>
<?php 
		$query = "SELECT ID,name,dob,email,program,fellowship  FROM `student` WHERE program='MTech' and fellowship=2000;";
	echo "<p> <strong>Query - ". $query."</strong><br></p>";
 ?></center>
	<table id="myTable" class="table table-striped table-bordered" >
				<tr>
					<th>
						ID					
					</th>
					<th>
						Student Name 					
					</th>
					<th>
						Date of Birth					
					</th>
					<th>
						Email						
					</th>
					<th>
						Program	 					
					</th>
					<th>
						Fellowship Amount					
					</th>
				</tr>
<?php
require('db.php');
// If form submitted, insert values into the database.
		// $temp = 1;
	
        $data = mysqli_query($con,$query);
		if($data){
				foreach ($data as $key => $value) {
					// $query = "SELECT name FROM student WHERE ID=".$value['s_ID'];
        			// $sname = mysqli_query($con,$query);
		?>


					<tr>
					
						<td >
							<?php echo $value['ID']; ?>
							
						</td>
						<td >
							<?php echo $value['name']; ?>
							
						</td>
						<td >
							<?php echo $value['dob']; ?>
							
						</td>
						<td>
							<?php echo $value['email']; ?>
							
						</td>
						<td >
							<?php echo $value['program']; ?>
							
						</td>
						<td >
							<?php echo $value['fellowship']; ?>
							
						</td>


					</tr>

		<?php
				}
		}  ?>
	</table>

