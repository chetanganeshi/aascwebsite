<?php

include '../../connection.php';


if(isset($_POST['btnsubmit']))
{
$cid=$_POST["ID"];
$imginp = $_FILES['img']['name'];
$orderid=$_POST["OrderID"];
// $isactive=$_POST["IsActive"];

if($_FILES['img']['tmp_name']!="")
      { 
  if ((($_FILES["img"]["type"] == "image/gif")
        || ($_FILES["img"]["type"] == "image/png")
        || ($_FILES["img"]["type"] == "image/jpeg")
        || ($_FILES["img"]["type"] == "image/pjpeg"))
        && ($_FILES["img"]["size"] < 199999999) )
        {
           copy($_FILES['img']['tmp_name'],"sliderimages/".$imginp);
          
$query = mysqli_query($conn,"INSERT INTO slider(ID,SliderImage,OrderID) VALUES ('$cid','$imginp','$orderid')");

?>
  <script>
    alert("Data Inserted");
    window.location.href="manage-sliderimage.php"
  </script> 
<?php 
       
        }
        else
        {
          
        }
                  

}


}


?>