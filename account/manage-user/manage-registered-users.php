<?php

include '../../connection.php';

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manage Registered Users</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>
  
  <script type="text/javascript">
    
      function edit_row(uid)
      {
        setTimeout(function(){
          $('#light_box').load('manage-registered-users-approve-code.php?uid='+uid); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }

  </script>


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
		<center><h4>Registered Users</h4></center>
      </section>

      <!-- Main content -->
      <section class="content">
        <br><br>
        <div class = "table-responsive">
         
          <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>UID</th>
                <th>Email Id</th>
                <th>Password</th>
                <th>Confirm Password</th>
                <th>Name</th>
                <th>Role</th>
                <th>Date of Birth</th>
                <th>Aadhar Number</th>
                <th>Student Mobile No.</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Category</th>
                <th>Nationality</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Parent Mobile No.</th>
                <th>Address</th>
                <th>City/Village</th>
                <th>State</th>
                <th>County</th>
                <th>Pincode</th>
                <th>Course Applied</th>
                <th>College Name</th>
                <th>Joining Year</th>
                <th>Application Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php

              $get2 = mysqli_query($conn,"SELECT * FROM registration1");
              while($row2 = mysqli_fetch_array($get2))
              {

                $uid=$row2['uid'];
                $emailid=$row2['emailid'];
                $password=$row2['pass'];
                $cpassword=$row2['cpass'];
                $name=$row2['name'];
                $role =$row2['role'];
                $dob =$row2['dob'];
                $aadhar =$row2['aadharnumber'];
                $studentmobile =$row2['smno'];
                $gender =$row2['gender'];
                $bloodgroup =$row2['bloodgroup'];
                $category =$row2['category'];
                $nationality =$row2['nationality'];
                $fathername =$row2['fathername'];
                $mothername =$row2['mothername'];
                $parentmobile =$row2['fmno'];
                $address =$row2['address'];
                $city =$row2['city'];
                $state =$row2['state'];
                $country =$row2['country'];
                $pincode =$row2['pcode'];
                $coursename =$row2['coursename'];
                $collegename =$row2['collegename'];
                $joiningyear =$row2['joiningyear'];
                $applicationstatus=$row2['applicationstatus'];
                
                ?>      
                <div id="tbl_row">
                  <tr>
                    <td><?php echo $uid; ?></td>
                    <td><?php echo $emailid; ?></td>
                    <td><?php echo $password; ?></td>
                    <td><?php echo $cpassword; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $role; ?></td>
                    <td><?php echo $dob; ?></td>
                    <td><?php echo $aadhar; ?></td>
                    <td><?php echo $studentmobile; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $bloodgroup; ?></td>
                    <td><?php echo $category; ?></td>
                    <td><?php echo $nationality; ?></td>
                    <td><?php echo $fathername; ?></td>
                    <td><?php echo $mothername; ?></td>
                    <td><?php echo $parentmobile; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $city; ?></td>
                    <td><?php echo $state; ?></td>
                    <td><?php echo $country; ?></td>
                    <td><?php echo $pincode; ?></td>
                    <td><?php echo $coursename; ?></td>
                    <td><?php echo $collegename; ?></td>
                    <td><?php echo $joiningyear; ?></td>
                    <td>
                    <?php
                    if($applicationstatus == 'pending') {
                    ?>
                    	<b style="color:red;"><?php echo $applicationstatus; ?></b>
                    <?php
                    }
                    if($applicationstatus == 'approved') {
                    ?>
                    	<b style="color:green;"><?php echo $applicationstatus; ?></b>
                    <?php
                    }
                    ?>
                    </td>
                    <td>
                      <form method="post" action='manage-registered-users-approve-code.php'>
                      	<input type="hidden" value="<?php echo $uid; ?>" name="idtxt" id="idtxt">
                      	<?php
                   		 if($applicationstatus == 'pending') {
                  	    ?>
                      		<input type="submit" value="Approve" class="btn btn-success">
                      	<?php
                  		  }
                  	    ?>
                      	<input type="button" name="btnDelete" id="btnDelete" value="Delete" class="btn btn-danger" onclick="delete_row('<?php echo $uid; ?>')">
                      </form>
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


 <div id="lightbox_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
   <div id="light_box">

   </div>
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

<script >

  function delete_row(uid)
  {

    $.confirm({
      title: 'Confirmation!',
      content: 'Are you sure?',
      buttons: {
        confirm: function () {

         $.ajax({
           type: 'POST',
           url: 'manage-registered-users-delete-code.php',
           data: ({ uid: uid }),
           success: function(response) {

             if(response == "1" || response == 1 )
             {
               successAlert("Data Deleted");
               setTimeout(function(){
                 window.location.href='manage-registered-users.php';
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

</script>

</body>
</html>
