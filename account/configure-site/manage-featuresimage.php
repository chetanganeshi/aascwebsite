<?php





?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AASC | Admin</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>

<?php include '../../assets/dashboard-assets-js.php'; ?>
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
    <form method="post" name="myForm" id="myForm" action="manage-featuresimage2.php" onsubmit="return validateForm()" enctype="multipart/form-data">
      <table class="table table-bordered">
        <tr>
          <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Add Features Images</th></td>
        </tr>
   
        <tr>
			<?php
                 include '../../connection.php';
                 $result = mysqli_query($conn,"SELECT MAX(ID)+1 FROM featuresimages");
                 $row = mysqli_fetch_row($result);
                 $highest_id = $row[0];
            ?>
           <td><input type="hidden" name="ID" value="<?php echo   $highest_id; ?> " id="ID" class="form-control"> </td>
        </tr>
        
		<tr>
       				  <!--<td><span style="color: #3973ac; font-weight: bold; "> Select Image </span></td>
         					 <td><input tabindex="17" type="file" name="img" id="img" class="form-control">-->
                          <td><span style="color: #3973ac; font-weight: bold; ">Image</span></td>
                           <td><!-- <input type="file" name="img1" id="img1" class="form-control">
                             	 <img src="" width="100" height="100" style="margin-top: 10px"> -->
                               <input type="file" id="img" name="img" class="form-control"/>
                               <img id="blah" src="#" alt="your image" style="width: 100px;height: 100px;margin-top: 10px" />
                           </td>
        </tr>

        <tr>
           <td><span style="color: #3973ac; font-weight: bold; ">Order ID </span></td>
           <td><input type="text" name="OrderID" id="OrderID" value="<?php echo   $highest_id; ?> " readonly="true" class="form-control"><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
         </tr>
         
        <tr>
          <td></td>
          <td align="left" colspan = "2">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>
        </tr>
        <?php 




		?>
      </table>
      </form>
    </div>   




    <!-- table start -->

    <br><br>

    <div class="table-responsive">
      
      <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Slider Image</th>
             <th>Order ID</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM featuresimages");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['ID'];
                $featuresimage=$row2['featuresimage'];
                $OrderID=$row2['OrderID'];
               
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><img src="featuresimages/<?php echo $featuresimage; ?>" style="width: 100px;height: 100px"></td>
            <td><?php echo $OrderID; ?></td>
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
               url: 'manage-featuresimage-delete-code.php',
               data: ({ id: id }),
               success: function(response) {

               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='manage-featuresimage.php';
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
    var imginp = document.forms["myForm"]["img"].value;
    var orderid = document.forms["myForm"]["OrderID"].value;
    
   
  if (imginp== "") {
        infoAlert("Please Enter Your Image");
        return false;
    }

     else if (orderid == "") {
        infoAlert("Please Enter Your order id");
        return false;
    }

}
</script>

<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#img").change(function(){
    readURL(this);
});
</script>

</body>
</html>
<?php

?>