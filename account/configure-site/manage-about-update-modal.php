<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM about WHERE id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $id = $row['id'];
                        $title=$row['title'];
                        $about=$row['about'];
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
                        <label class="col-sm-4 control-label"> Title <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $title; ?>" class="form-control" id="title" name="title">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Contact Description <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $about; ?>" class="form-control" id="about" name="about">                            
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
    var title = $("#title").val();
    var about = $("#about").val();


    if(title=='') 
    {
      infoAlert("Please Enter Title");
      
    }
    if(about=='') 
    {
      infoAlert("Please Enter About");
      
    }
     
    else
    {
        $.ajax({
            type: 'POST',
            url: 'manage-about-update-code.php',
            data: ({ id: id, title: title, about: about}),
            success: function(response_update) {
                alert(response_update);

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='manage-about.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
