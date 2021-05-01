<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
        $title = $_POST['title'];
        $about = $_POST['about'];

$query="INSERT INTO support(id, title, about) VALUES ('$id','$title','$about')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>