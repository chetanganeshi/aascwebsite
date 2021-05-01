<?php


include('../../ck.php');

if($ck!=1 or $ck!="1")
{
  header("Location: ../../login.php");
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
  <title>Nims | Dashboard</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>


  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('manage-testschedule-update-modal.php?id='+id); /*Modal Content Load from page location*/
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

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->




    <div class="panel panel-default table-responsive">
    <form method="post" action="manage-testschedule.php">
      <table class="table table-bordered">
        <tr>
        
          <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">Add Test Schedule</th>
        </tr>   
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
        
        
        <?php              
         $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM test");
         $row = mysqli_fetch_row($result);
         $highest_id = $row[0];
        ?>
         <input type="hidden" name="txtid" value="<?php echo  $highest_id; ?> "id="txtid" class="form-control">
         	
         <td><span style="color: #3973ac; font-weight: bold; ">Select Course</span></td>
         <td>
            <select class="form-control" id="txtcourse" name="txtcourse">
				<option value="0"> Select Course </option>
					<?php  
		                $get3 = mysqli_query($conn,"SELECT * FROM course");
		                 while($row3 = mysqli_fetch_array($get3))
		                  {
		              		$name = $row3['name'];
		            ?>
				<option value="<?php echo $name; ?>"><?php echo $name; ?></option>
		            <?php
					      }
					?>
            </select>
          </td>
         
          <td><span style="color: #3973ac; font-weight: bold; ">Select Semester</span></td>
          <td>
          	<select id='txtsem' name='txtsem' class='form-control'>
          		<option value='0'>Select Semester</option>
          		<option value='sem-1'>Sem 1</option>
          		<option value='sem-2'>Sem 2</option>
          		<option value='sem-3'>Sem 3</option>
          		<option value='sem-4'>Sem 4</option>
          		<option value='sem-5'>Sem 5</option>
          		<option value='sem-6'>Sem 6</option>
          	</select>
		  </td>
        </tr>
          
        <tr>  
          <td><span style="color: #3973ac; font-weight: bold; ">Enter Subject</span></td>
          <td><input type="text" name="txtsubject" id="txtsubject" class="form-control">(<font color="#DB2929" style="font-size: small">e.g.- Subject Name</font>)</td>
          
          <td><span style="color: #3973ac; font-weight: bold; ">Enter Date of the Test</span></td>
          <td><input type="date" name="txtdate" id="txtdate" class="form-control"></td>
        </tr>
        
        <tr>  
          <td><span style="color: #3973ac; font-weight: bold; ">Enter Timings</span></td>
          <td><input type="text" name="txttime" id="txttime" class="form-control">(<font color="#DB2929" style="font-size: small">e.g.- 10:00 AM to 11:00 AM</font>)</td>
          
          <td><span style="color: #3973ac; font-weight: bold; ">Enter Addidtional Details</span></td>
          <td><input type="text" name="txtdetails" id="txtdetails" class="form-control"></td>
        </tr>
        
        <tr>
        	<td></td>
            <td></td>
          <td align="right" colspan = "2">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>
        </tr>
        
      </table>
      </form>
    </div>   




    <!-- table start -->

    <br><br>

    <div class="table-responsive">
     <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Id</th>
            <th>Course</th>
            <th>Semester</th>
            <th>Subject</th>
            <th>Test Date</th>
            <th>Test Timings</th>
            <th>More Details</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

		<?php

              $get2 = mysqli_query($conn,"SELECT * FROM test");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id = $row2['id'];
                $course = $row2['course'];
                $semester = $row2['semester'];
                $subject = $row2['subject'];
                $date = $row2['date'];
                $timings = $row2['timings'];
                $details = $row2['details'];

		?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $course; ?></td>
            <td><?php echo $semester; ?></td>
            <td><?php echo $subject; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $timings; ?></td>
            <td><?php echo $details; ?></td>
            
            <td>
              <input type="button" name="btnEdit" id="btnEdit" value="Edit" class="btn btn-primary" onclick="edit_row('<?php echo $id; ?>')">
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

<!-- ./wrapper -->

<!-- modal start -->

       <div id="lightbox_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
         <div id="light_box">

         </div>
       </div>




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


  <script >

function delete_row(id)
{

      $.confirm({
        title: 'Confirmation!',
        content: 'Are you sure?',
        buttons: {
            confirm: function () {
                
               $.ajax({
               type: 'POST',
               url: 'manage-testschedule-delete-code.php',
               data: ({ id: id }),
               success: function(response) {
               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='manage-testschedule.php';
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


  $(document).ready(function() {  


        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var id=$('#txtid').val();  
    var course=$('#txtcourse').val();
    var semester=$('#txtsem').val();
    var subject=$('#txtsubject').val();
    var date=$('#txtdate').val();
    var timings=$('#txttime').val();
    var details=$('#txtdetails').val();
    

    if(course=='0') 
    {
      infoAlert("Please Select Course Name");
    }
    
    if(semester=='0')
    {
      infoAlert("Please Select Semester");
    }
    
    if(subject=='')
    {
      infoAlert("Please Enter Subject");
    }
    
    if(date=='')
    {
      infoAlert("Please Enter Date");
    }
    
    if(timings=='')
    {
      infoAlert("Please Enter Timings");
    }
    
    if(details=='')
    {
      infoAlert("Please Enter Details of the Test");
    }
    
  else
  {
    $.ajax({
         type: 'POST',
         url: 'manage-testschedule2.php',
         data: ({id:id, course:course, semester:semester, subject:subject, date:date, timings:timings, details:details}),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              successAlert("Test Added Successfully");
                setTimeout(function(){
                  window.location.href='manage-testschedule.php';
                  }, 1000); 
                 
          }
             else
             {
                 errorAlert("Test Not Added");
             }
         }
      });
  }
    
 
  });
    });
    </script>

</body>
</html>
<?php
  }
}

?>