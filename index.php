<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/w3.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/w3.js"></script>
	<script type="text/javascript">
		function GetPage(val){
   			$.get(val, function(data, status){
      			$('#result').html(data);
    		});
  		}	
	</script>
</head>

<body>

	<div class="w3-sidebar w3-bar-block" style="width:20%;border-right:1px solid black;">
	<center>	<h3><a href="\dbdm\" >Homepage</a></h3></center><br>
	<center>	<h4><strong>Front-End Forms:-</strong></h4></center>
	<a href="#" onclick="GetPage('addNewStd.php');" class="w3-bar-item w3-button">Add New Student</a>
		<a href="#" onclick="GetPage('addNewDept.php');" class="w3-bar-item w3-button" >Add New Department</a>
		<a href="#" onclick="GetPage('addNewInst.php');" class="w3-bar-item w3-button" >Add New Instructor</a>
		<a href="#" onclick="GetPage('addIntoAdvisor.php');" class="w3-bar-item w3-button" >Create Advisor</a>
		<!-- <a href="#" onclick="GetPage('StdRegForm.php');" class="w3-bar-item w3-button">Student Registration</a>
		< -->
<br>
		<center>	<h4><strong>SQL Output Pages:-</strong></h4></center>
		<a href="#" onclick="GetPage('1.php');" class="w3-bar-item w3-button">1. Find the names of all students in the B Tech Program.</a>
		<a href="#" onclick="GetPage('2.php');" class="w3-bar-item w3-button">2. Find the students in MTech with a fellowship equal to 2,000.</a>
		<a href="#" onclick="GetPage('3a.php');" class="w3-bar-item w3-button">3a. Instructor NATURAL JOIN Teaches</a>
		<a href="#" onclick="GetPage('3b.php');" class="w3-bar-item w3-button">3b. Instructor LEFT JOIN Teaches</a>
		<a href="#" onclick="GetPage('3c.php');" class="w3-bar-item w3-button">3c. Instructor RIGHT JOIN Teaches</a>
		<a href="#" onclick="GetPage('4.php');" class="w3-bar-item w3-button">4. Find all courses taught in the Summer 2019 semester or in the Spring 2020 semester.</a>
		<br><!-- 
		<center>	<h4><strong>General SQL Output:-</strong></h4></center>
		<a href="#" onclick="GetPage('ShowAllStd.php');" class="w3-bar-item w3-button">Show All Students</a>

		<a href="#" onclick="GetPage('ShowAllInst.php');" class="w3-bar-item w3-button">Show All Instructors</a>
 -->
	  
	
	</div>

<div id="result" style="margin-left:22%;margin-right:2%">

	<center>		<h1><u>Assignment 1</u></h1>
		<h2>Database and Data Mining (CS501) <br></h1>
</center>
	<p>
		<ul>
 		  <li><strong>As per requirement please access all registration forms from left.</strong></li>
		  <dd>- black hot drink</dd>
		  <dt>Milk</dt>
		  <dd>- white cold drink</dd>
		</ul>
	</p>
</div>

<!-- </div> -->



<footer class="footer" style="position: fixed;bottom: 0px;right:5px;">
    <center><strong>DBDM Assignment</strong> &copy;Copyright <?php echo date('Y'); ?> By <b><a href='https://github.com/harsh085'>Harshit Nigam</a> </b></center>
</footer>

</body>

</html>
