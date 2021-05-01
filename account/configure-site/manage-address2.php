<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
        $adrs = $_POST['adrs'];
        $cont = $_POST['cont'];
        $email = $_POST['email'];

$query="INSERT into address(id,adrs,cont,email) values ('$id','$adrs','$cont','$email')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>