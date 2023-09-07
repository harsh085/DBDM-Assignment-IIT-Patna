<center> <h1>Instructor Table</h1></center>
	<table id="myTable" class="table table-striped table-bordered" >
				<tr>
					<th>
						Sr.
					</th>
					<th>
						Student ID 					
					</th>
					<th>
						Student ID 					
					</th>
				</tr>
<?php
require('db.php');
// If form submitted, insert values into the database.
		$temp = 1;
		$query = "SELECT * FROM instructor";
        $data = mysqli_query($con,$query);
		if($data){
				foreach ($data as $key => $value) {
					// $query = "SELECT name FROM student WHERE ID=".$value['s_ID'];
        			// $sname = mysqli_query($con,$query);
		?>


					<tr>
					<td> <?php echo $temp;
							$temp++; ?>.</td>
						<td style=" text-transform: uppercase;">
							<?php echo $value['ID']; ?>
							
						</td>
						<!-- <td style=" text-transform: uppercase;">
							<?php //echo $value['fname']; ?>
						</td>
						<td>
							<form action="<?php //echo base_url('marksheet/viewMarksheet') ?>" method="post">
							  <input type="hidden" name="sch" value="<?php// echo $value['schNo'];?>">
							  <button class="btn btn-success" id="edit<?php //echo $value['schNo'];?>" type="submit" ><b>View</b></button>
							</form><br>
							<?php// if($this->session->userdata('level') == '1'){ //for only admin level
								?>
							<button value="<?php //echo $value['schNo'];?>" onclick="deleteStudent(this)" class="btn btn-danger">Delete</button> <?php //} ?>

						</td> -->

					</tr>

		<?php
				}
		}  ?>
	</table>

