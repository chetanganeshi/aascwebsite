<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];

                      $get = mysqli_query($conn,"SELECT * FROM test WHERE id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        
                        $id = $row['id'];
		                $course = $row['course'];
		                $semester = $row['semester'];
		                $subject = $row['subject'];
		                $date = $row['date'];
		                $timings = $row['timings'];
		                $details = $row['details'];
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
                        <label class="col-sm-4 control-label">Select Course<span class="required">*</span></label>
                        <div class="col-sm-4">
                        	<select class="form-control" id="course" name="course">
								<option value = "<?php echo $course; ?>"> <?php echo $course; ?> </option>
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
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Select Semester<span class="required">*</span></label>
                        <div class="col-sm-4">
                        	<select class="form-control" id="semester" name="semester">
								<option value="<?php echo $semester; ?>"><?php echo $semester; ?></option>
								<option value="0"> Select Semester </option>
								<option value="sem-1">Sem 1</option>
								<option value="sem-2">Sem 2</option>
								<option value="sem-3">Sem 3</option>
								<option value="sem-4">Sem 4</option>
								<option value="sem-5">Sem 5</option>
								<option value="sem-6">Sem 6</option>
            				</select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Enter Subject<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value="<?php echo $subject; ?>" class="form-control" id="subject" name="subject">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Enter Date<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="date" value="<?php echo $date; ?>" class="form-control" id="date" name="date">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Enter Timings<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $timings; ?>" class="form-control" id="timings" name="timings">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Enter More Details<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $details; ?>" class="form-control" id="details" name="details">                            
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
    var course = $("#course").val();
    var semester = $("#semester").val();
    var subject = $("#subject").val();
    var date = $("#date").val();
    var timings = $("#timings").val();
    var details = $("#details").val();

    if (course=='0') 
    {
      infoAlert("Please Select Course");
    }
    if (semester=='0') 
    {
      infoAlert("Please Select Semester");
    }
    if (subject=='') 
    {
      infoAlert("Please Enter Subject");
    }
    if (date=='') 
    {
      infoAlert("Please Enter Date");
    }
    if (timings=='') 
    {
      infoAlert("Please Enter Timings");
    }
    if (details=='') 
    {
      infoAlert("Please Enter More Details");
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'manage-testschedule-update-code.php',
            data: ({ id: id, course: course, semester: semester, subject: subject, date: date, timings: timings, details: details }),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='manage-testschedule.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
