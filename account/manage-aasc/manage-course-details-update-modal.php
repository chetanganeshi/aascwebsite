<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];

                      $get = mysqli_query($conn,"SELECT * FROM coursetype WHERE id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $id = $row['id'];
                        $course = $row['course'];
                        $price = $row['price'];
                        $cdurt = $row['cdurt'];
                        $cdesc = $row['cdesc'];
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
                        <label class="col-sm-4 control-label">Select Course <span class="required">*</span></label>
                        <div class="col-sm-4">
                        	<select class="form-control" id="course" name="course">
								<option value="<?php echo $course; ?>"> <?php echo $course; ?> </option>
								<option value="0"> Select Course </option>
								
		                        <?php  
		                        	$get3 = mysqli_query($conn,"SELECT * FROM course");
		              				while($row3 = mysqli_fetch_array($get3))
		              				{	
		              					$course_nm = $row3['name'];
		              					$course_id = $row3['id'];
		                        ?>
            					<option value="<?php echo $course_nm; ?>"><?php echo $course_nm; ?></option>
		            			<?php
									}
								?>
            				</select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Course Price <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $price; ?>" class="form-control" id="price" name="price">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Course Duration <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $cdurt; ?>" class="form-control" id="cdurt" name="cdurt">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Course Description <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $cdesc; ?>" class="form-control" id="cdesc" name="cdesc">                            
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
    var price = $("#price").val();
    var cdurt = $("#cdurt").val();
    var cdesc = $("#cdesc").val();

    if(course=='0') 
    {
      infoAlert("Please Select Course");
    }
    
   if(price=='') 
    {
      infoAlert("Please Enter Course Price");
    }
    
    if(cdurt=='') 
    {
      infoAlert("Please Enter Course Duration");
    }
    
   if(cdesc=='') 
    {
      infoAlert("Please Enter Course Description");
    }
    
    else
    {
        $.ajax({
            type: 'POST',
            url: 'manage-course-details-update-code.php',
            data: ({ id:id, course:course, price:price, cdurt:cdurt, cdesc:cdesc}),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='manage-course-details.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
