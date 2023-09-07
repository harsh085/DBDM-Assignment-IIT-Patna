
<h3>1. Find the names of all students in the B Tech Program.</h3><br>
<center>
 <h1>Student Table</h1>
<br>

<?php 
	$query = "SELECT name FROM `student` WHERE program='BTech';";
	echo "<p> <strong>Query - ". $query."</strong><br></p>";
 ?>
 </center>
 <br>
<div class="row">
		<div class="col-md-4 col-sm-12">
		</div>
          	<div class="col-md-4 col-sm-12">
	<table class="table table-striped table-bordered" >
				<tr>
					<th><center>
						Student Name 					
					</center></th>
					
				</tr>
<?php
require('db.php');
// If form submitted, insert values into the database.
		
		
        $data = mysqli_query($con,$query);


		if($data){

			
				foreach ($data as $key => $value) {
					?>

					<tr>
						<td >
							<?php echo $value['name']; ?>
							
						</td>
						
					</tr>

		<?php
				}
		}  ?>
	</table>
	</div>	
<div class="col-md-4 col-sm-12">
		</div>
</div>

