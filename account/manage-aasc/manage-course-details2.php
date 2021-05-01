<?php


include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id = $_POST['id'];
        $course = $_POST['course'];
        $price = $_POST['price'];
        $cdurt = $_POST['cdurt'];
        $cdesc = $_POST['cdesc'];
        

$query="INSERT INTO coursetype(id, price, course, cdurt, cdesc) VALUES ('$id', '$price', '$course', '$cdurt', '$cdesc')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>