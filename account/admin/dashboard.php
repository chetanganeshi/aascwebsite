<?php
  include('../../ck.php');
  if($ck!=1 or $ck!="1")
  {
    header("Location: ../../index.php");
  }
  else
  {
    if($role == "admin")
    {
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AASC - Admin - Dashboard</title>
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
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <center><h4> WELCOME TO THE ADMIN PANEL </h4></center>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <?php
            date_default_timezone_set("Asia/Kolkata");
            $date = date("d-m-Y");
            $date2 = date("d-m");
          ?>
          <div style="background-color: #181818; color: white; padding: 15px">
        <center>
		      <h2> THE ADONI ARTS & SCIENCE COLLEGE </h2>
			    <p style="background-color: ;color: yellow; padding: ">Today's Date: <?php echo $date; ?> </p>
		    </center>
		    <hr>
        <center>
          <table>
            <tr>
              <td style="color: white;">Total Number of Registered Students: &nbsp;
                <?php
                  $result = mysqli_query($conn,"SELECT Count(uid)-1 FROM registration1");
                  $row = mysqli_fetch_row($result);
                  $highest_id = $row[0];
                ?>
              </td>
              <td>
                <input type="text" readonly="true" name="totalif" style="width: 50px; color: #424242;" value="<?php echo $highest_id; ?>" id="totalid">
              </td>
              <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
              <td style="color: white;">Total Number of Approved Students: &nbsp;
              <?php
                $result = mysqli_query($conn,"SELECT Count(uid)-1 FROM approvedusers");
                $row = mysqli_fetch_row($result);
                $highest_id2 = $row[0];
              ?>
              </td>
              <td>
                <input type="text" readonly="true" name="totalif2" style="width: 50px; color: #424242;" value="<?php echo $highest_id2; ?>" id="totalid2">
              </td>
            </tr>
          </table>
          </center>
		    </div>
		    <hr>
		    <!--<img src="nimspro.png" width="450px" height="250px" style="margin-left: 340px">-->
        <div>
          <h3 align="center">Today's Birthday's</h3>
          <br>
            <form action="dobsms.php" method="GET">
              <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $get2 = mysqli_query($conn, "SELECT * FROM approvedusers where DATE_FORMAT(dob, '%d-%m')='$date2'");
                    while($row2 = mysqli_fetch_array($get2))
                    {
                      $uid=$row2['uid'];
                      $smno=$row2['smno'];
                      $get3 = mysqli_query($conn,"SELECT * FROM approvedusers WHERE uid='$uid'");
                      while($row3 = mysqli_fetch_array($get3))
                      {
                          $name=$row3['name']; 
                  ?>      
                  <div id="tbl_row">
                    <tr>
                      <td><?php echo $uid; ?></td>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $smno; ?></td>
                      <td>
                        <a href="dobsms.php?mobile=<?php  echo $smno; ?>&nm=<?php echo $name; ?>" class="btn btn-primary">Send</a>
                      </td>
                    </tr>
                  </div>
                  <?php  
                      }
                    }
                  ?>
                </tbody>
              </table>
            </form>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!--Footer-->
      <?php include '../../footer/footer.php';?>
      <!--Footer-->
      <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <!-- Modal -->
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
            <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end -->
    <?php include '../../assets/dashboard-assets-js.php'; ?>
  </body>
</html>
<?php
    }
  }
?>