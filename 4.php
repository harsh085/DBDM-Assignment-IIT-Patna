<center> <h1>Output Table</h1>
<?php 
	$query = "SELECT course.course_id,course.title FROM course NATURAL JOIN section WHERE (section.semester='Summer' and section.year =2019) OR (section.semester='Spring' and section.year =2020);";
	echo "<p> <strong>Query - ". $query."</strong><br></p>";
 ?></center>
 <div class="row">
		<div class="col-md-2 col-sm-12">
		</div>
          	<div class="col-md-8 col-sm-12">
	<table id="myTable" class="table table-striped table-bordered" >
				<tr>
					
					<th>
						Course ID				
					</th>
					<th>
						Course Title			
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
					<td>
							<?php echo $value['course_id']; ?>
							
						</td>
						<td >
							<?php echo $value['title']; ?>
							
						</td>
						
					</tr>

		<?php
				}
		}  ?>
	</table>

</div>	
<div class="col-md-2 col-sm-12">
		</div>
</div>