<h3>3. The Cartesian product of the relations instructor and teaches.<br>&emsp; &ensp;&emsp; &ensp;a. NATURAL JOIN</h3><br>

<center> <h1>Instructor NATURAL JOIN Teaches</h1>
<?php 
	$query = "SELECT * FROM instructor NATURAL JOIN teaches;";
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
						Department Name				
					</th>
					<th>
						Salary						
					</th>
					<th>
						Course ID	 					
					</th>
					<th>
						Section ID					
					</th>
					<th>
						Semester				
					</th>
					<th>
						Year					
					</th>

				</tr>
<?php
require('db.php');
// If form submitted, insert values into the database.
		
		
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
							<?php echo $value['dept_name']; ?>
						</td>
						<td >
							<?php echo $value['salary']; ?>
						</td>
						<td >
							<?php echo $value['course_id']; ?>
						</td>

						<td >
							<?php echo $value['sec_id']; ?>
						</td>
						<td >
							<?php echo $value['semester']; ?>
						</td>
						<td >
							<?php echo $value['year']; ?>
						</td>
					</tr>

		<?php
				}
		}  ?>
	</table>

