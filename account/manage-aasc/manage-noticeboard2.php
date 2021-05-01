<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
        $date = $_POST['date'];
        $notice = $_POST['notice'];
        $weblink = $_POST['weblink'];

$query="INSERT INTO notifications(id, date, notice, weblink) VALUES ('$id', '$date', '$notice', '$weblink')";
$ans=mysqli_query($conn, $query);
echo "1";
}
?>