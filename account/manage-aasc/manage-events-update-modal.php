<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM events1 WHERE id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $id = $row['id'];
                        $name=$row['name'];
                        $timings =$row['timings'];
                        $info = $row['info'];
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
                        <label class="col-sm-4 control-label"> Name <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $name; ?>" class="form-control" id="name" name="name">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Timings<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $timings; ?>" class="form-control" id="timings" name="timings">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Info<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $info; ?>" class="form-control" id="info" name="info">                            
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
    var name = $("#name").val();
    var timings = $("#timings").val();
    var info = $("#info").val();


    if(name =='') 
    {
      infoAlert("Please Enter Name");
      
    }
    if(timings=='') 
    {
      infoAlert("Please Enter Timings");
      
    }
    
    if(info=='') 
    {
      infoAlert("Please Enter Info");
      
    }
     
    else
    {
        $.ajax({
            type: 'POST',
            url: 'manage-events-update-code.php',
            data: ({ id: id, name: name, timings: timings, info:info}),
            success: function(response_update) {
                alert(response_update);

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='events.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
