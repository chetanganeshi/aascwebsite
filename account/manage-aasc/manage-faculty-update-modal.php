<?php

include '../../connection.php';

                      $id = $_REQUEST['id'];

                      $get = mysqli_query($conn,"SELECT * FROM faculty WHERE id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $id = $row['id'];
                        $lecturername = $row['lecturername'];
		                $qualification = $row['qualification'];
		                $designation = $row['designation'];
		                $department = $row['department'];
		                $cno = $row['cno'];
                      }

?>
<div class="modal-dialog">
  <div class="modal-content" style="border-radius: 0px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="myModalLabel">Update Details</h4>
    </div>
    <br>
                <form id="modalform" name="modalform" action="code/delete.php" class="form-horizontal calender" method="POST">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Faculty Name: <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $lecturername; ?>" class="form-control" id="lecturername" name="lecturername">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Qualification: <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $qualification; ?>" class="form-control" id="qualification" name="qualification">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Designation: <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <select class="form-control" id="designation" name="designation">
                            	<option value="<?php echo $designation; ?>"> <?php echo $designation; ?> </option>
                            	<option value="Head of the Department"> Head of the Department</option>
								<option value="Lecturer"> Lecturer </option>
								<option value="Non-Teaching Staff"> Non-Teaching Staff </option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Department: <span class="required">*</span></label>
                        <div class="col-sm-4">
                          <select class="form-control" id="department" name="department">
                          	<option value="<?php echo $department; ?>"> <?php echo $department; ?> </option>
                        		<?php
					           	 $get2 = mysqli_query($conn,"SELECT * FROM departments");
					            	while($row2 = mysqli_fetch_array($get2))
					           	 {
					              	$id=$row2['cid'];
					             	 $departments=$row2['departments'];
					
					            	  ?>
								<option value="<?php echo $departments; ?>"> <?php echo $departments; ?> </option>
						  	<?php } ?>  
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Cell No: <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $cno; ?>" class="form-control" id="cno" name="cno">                            
                        </div>
                    </div>

                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button type="submit" class="btn btn-danger" name="update" id="update">Confirm</button>
                    </div>

                    <input type="hidden" name="hid" id="hid" value="<?php echo $id;?>">

                  </form>
  </div>
</div>


<div class="modal" id="myModal2" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" id="btnclose2" aria-hidden="true" onclick="btnClose();">X</button>
          <h4 class="modal-title"></h4>
        </div><div class="container"></div>
        <div class="modal-body" id="modal-body2" align="center">
          Content for the dialog / modal goes here.
        </div>
        <div class="modal-footer">
          <a href="javascript:void(0);" class="btn btn-default" id="btnclose" onclick="btnClose();">Close</a>
        </div>
      </div>
    </div>
</div>

<!-- css for second modal -->

<style type="text/css" media="screen">
    .modal:nth-of-type(even) {
    z-index: 1042 !important;
}
.modal-backdrop.in:nth-of-type(even) {
    z-index: 1041 !important;
}
    
</style>



<script type="text/javascript">
 $(document).ready(function(){

    $("#modal-body2").css({"font-size": "15px"});

    function btnClose()
    {
        $('#btnclose').click(function(event) {
            $('#myModal2').hide();
        });
        $('#btnclose2').click(function(event) {
            $('#myModal2').hide();
        });
    }
            

  $('#update').click(function(event) {

    event.preventDefault();


    var id = $("#hid").val();
    var lecturername = $('#lecturername').val();
    var qualification = $('#qualification').val();
    var designation = $('#designation').val();
    var department = $('#department').val();
    var cno = $('#cno').val();
    

	if(lecturername=='') 
    {
      infoAlert("Please Enter Name");
    }
    
    if(qualification=='') 
    {
      infoAlert("Please Enter Qualification");
    }
    
    if(designation=='') 
    {
      infoAlert("Please Enter Designation");
    }
    
    if(department=='') 
    {
      infoAlert("Please Enter Department");
    }
    
    if(cno=='') 
    {
      infoAlert("Please Enter Cell No");
    }


    else
    {
        $.ajax({
            type: 'POST',
            url: 'manage-faculty-update-code.php',
            data: ({ id: id, lecturername:lecturername, qualification:qualification, designation:designation, department:department, cno:cno}),
            success: function(response_update) {
                alert(response_update);

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='manage-faculty.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
