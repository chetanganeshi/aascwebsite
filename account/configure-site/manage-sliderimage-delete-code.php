<?php

include '../../connection.php';


  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $id = $_POST['id'];
      $query_update = mysqli_query($conn,"DELETE FROM slider WHERE ID='$id'");
      echo "1";         
  }

?>

