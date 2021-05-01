<?php





?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AASC | Members</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

      <!--NavBar-->
            
            <?php include '../../navbar/dashboard-navbar.php';?>

      <!--NavBar-->

    <!--SideBar-->

        <?php include '../../sidebar/dashboard-left-sidebar.php';?>

    <!--SideBar-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #ffffff; ">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->




    <div class="panel panel-default table-responsive">
    <form method="post" action="manage-members.php" enctype="multipart/form-data" name="myForm" id="myForm" onsubmit="return validateForm()">
      <table class="table table-bordered">
        <tr>
          <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Add Members</th></td>
           </tr>
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
        <?php
         include '../../connection.php';
         $result = mysqli_query($conn, "SELECT MAX(id)+1 FROM members");
         $row = mysqli_fetch_row($result);
         $highest_id = $row[0];
        ?>
          <input type="hidden" name="txtid" value="<?php echo $highest_id; ?>" id="txtid" class="form-control">
          
           <td><span style="color: #3973ac; font-weight: bold; ">Member Name</span></td>
           <td><input type="text" name="txtname" id="txtname" class="form-control"></td>
             
          <td><span style="color: #3973ac; font-weight: bold; ">Qualification</span></td>
           <td><input type="text" name="txtqualification" id="txtqualification" class="form-control"></td>
       </tr>
       <tr>
          
          <td><span style="color: #3973ac; font-weight: bold; ">Designation</span></td>
            <td><input type="text" name="txtdesignation" id="txtdesignation" class="form-control"></td>
          
          <td><span style="color: #3973ac; font-weight: bold; "> Upload Image</span></td>
           <td><input type="file" name="img" id="img" class="form-control"></td>
       </tr>

        <tr>
		  <td></td>
          <td align="left" colspan = "2">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
          
            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>
         
          
        </tr>
         <?php 

function members($id, $name, $qualification, $designation, $img)
{

include '../../connection.php';
if($_FILES['img']['tmp_name']!="")
      { 
  if ((($_FILES["img"]["type"] == "image/gif")
        || ($_FILES["img"]["type"] == "image/png")
        || ($_FILES["img"]["type"] == "image/jpeg")
        || ($_FILES["img"]["type"] == "image/pjpeg"))
        && ($_FILES["img"]["size"] < 199999999) )
        {
          copy($_FILES['img']['tmp_name'],"membersimages/".$img);
          
$query="INSERT INTO members(id, name, qualification, designation, image) VALUES ('$id', '$name', '$qualification', '$designation', '$img')";

$ans=mysqli_query($conn, $query);
return $ans;


       
        }else{
          
        }
                  

}

 
  
}

if(isset($_POST['btnsubmit']))
{
$id = $_POST["txtid"];
$name = $_POST["txtname"];
$qualification = $_POST["txtqualification"];
$designation = $_POST["txtdesignation"];
$img = $_FILES['img']['name'];

$test = members($id, $name, $qualification, $designation, $img);

if($test!='')
{
  echo '<script>alert("Data Inserted");</script>'; 
 
}
}



?>
      </table>
      </form>
    </div>   
    <!-- table start -->

    <br><br>

    <div class = "table-responsive">
      
      <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
             <th>Qualification</th>
             <th>Designation</th>
             <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM members");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $name=$row2['name'];
                $qualification=$row2['qualification'];
                $designation=$row2['designation'];
                $image=$row2['image'];
               
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $qualification; ?></td>
            <td><?php echo $designation; ?></td>
            <td><img src="membersimages/<?php echo $image; ?>" style="width: 100px;height: 100px"></td>
            
			<td>        
              <!-- <input type="button" name="btnEdit" id="btnEdit" value="Edit" class="btn btn-primary" onclick="edit_row('<?php // echo $id; ?>')"> -->
              <input type="button" name="btnDelete" id="btnDelete" value="Delete" class="btn btn-danger" onclick="delete_row('<?php echo $id; ?>')">
            </td>
          </tr>
        </div>
		<?php  
              }
		?>
        </tbody>
      </table>

    </div>

    <!-- table end -->




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!--Footer-->

      <?php include '../../footer/footer.php';?>

  <!--Footer-->



  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>


 <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body" align="center">
                  Some text in the modal.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>
<!-- ./wrapper -->

<?php include '../../assets/dashboard-assets-js.php'; ?>
<script type="text/javascript">

function delete_row(id)
{

      $.confirm({
        title: 'Confirmation!',
        content: 'Are you sure?',
        buttons: {
            confirm: function () {
                
               $.ajax({
               type: 'POST',
               url: 'manage-members-delete-code.php',
               data: ({id: id}),
               success: function(response) {

               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='manage-members.php';
                 }, 1000);
               }
               else
               {
                 errorAlert("Undefined Error!");
               }
               }
              });
            },
            cancel: function () {
                
            }
        }
    });

}





function validateForm() 
  {  
    var name = document.forms["myForm"]["txtname"].value;
    var qualification = document.forms["myForm"]["txtqualification"].value;
    var designation = document.forms["myForm"]["txtdesignation"].value;
    var img = document.forms["myForm"]["img"].value;
   
     if (name== "") {
        alert("Please Enter Member Name");
        return false;
      }  
        else if (qualification == "") {
        alert("Please Enter Qualification");
        return false;
        }
         else if (designation == "") {
        alert("Please Enter Designation");
        return false;
       }
    else  if (img == "") {
        alert("Please Upload Image ");
        return false;
    }
    
    
    
}
</script>

</body>
</html>
<?php

?>