<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM contactus WHERE id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                          $uname=$row['uname'];
                          $emailid=$row['emailid'];
                          $msg=$row['msg'];
                          $date=$row['date'];
                          $replystatus=$row['replystatus'];
                          $reply=$row['reply'];
                      }


?>

<script type="text/javascript">
    
      function send_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('manage-contact-queries-send-reply.php?id='+id); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }

  </script>



	
<div class="modal-dialog">
  <div class="modal-content" style="border-radius: 0px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="myModalLabel">Reply Message </h4>
    </div>
    <br>
                <form id="modalform" name="modalform" action="manage-contact-queries-send-reply.php" class="form-horizontal calender" method="POST">

                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Send To <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $emailid; ?>" class="form-control" id="emailid2" name="emailid2">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Subject <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "Reply from AASC" class="form-control" id="subject2" name="subject2">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Message <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <textarea rows="10" cols="10" class="form-control" id="reply2" name="reply2"> </textarea>                    
                        </div>
                    </div>

                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button type="submit" class="btn btn-success" name="update" id="update" onclick="send_row('<?php echo $id; ?>')">Send</button>
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
    var uname2 = $("#uname2").val();
    var emailid2 = $("#emailid2").val();
    var subject2 = $("#subject2").val();
    var reply2 = $("#reply2").val();
 

    if (emailid2=='') 
    {
      infoAlert("Please Enter Email Id");
    }
   else if (subject2 =='') 
    {
      infoAlert("Please Enter Subject");
    }
    else if (reply2 =='') 
    {
      infoAlert("Please Enter Reply Message");
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'manage-contact-queries-update-code.php',
            data: ({ id: id, uname2:uname2, emailid2: emailid2, subject2:subject2, reply2:reply2}),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Message Sent!");
                setTimeout(function(){
                  window.location.href='manage-contact-queries.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
