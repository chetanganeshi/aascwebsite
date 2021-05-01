<?php


include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
        $course=$_POST['course'];
        $semester=$_POST['semester'];
        $subject=$_POST['subject'];
        $date=$_POST['date'];
        $timings=$_POST['timings'];
        $details=$_POST['details'];
        

$query="INSERT INTO test(id, course, semester, subject, date, timings, details) VALUES ('$id', '$course', '$semester', '$subject', '$date', '$timings', '$details')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>