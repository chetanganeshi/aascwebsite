<?php
  $conn = mysqli_connect("localhost", "root", "", "aascproject");
  $semester = mysqli_real_escape_string($conn, $_POST['txtsemester']);
  $course = mysqli_real_escape_string($conn, $_POST['coursename']);
  if ($semester != "") {
	echo '<script> alert("Click Ok to see Timetable") </script>'; 
  }
  else {
	printf ("error occurred: %s \n", mysqli_error($conn));
  }

?>
<br>
<h4> <a href="student-corner.php"> Click here </a> to go back </h4>
<br>

<?php
	$get = mysqli_query($conn,"SELECT * FROM approvedusers WHERE uid = '$uid'");
	while($row = mysqli_fetch_array($get))
	{
		$course = $row['coursename'];
	}
?>
<iframe src = "timetables/<?php echo $course."/".$semester;?>.pdf" align="center" width="100%" height="100%" scrolling="yes"></iframe>




