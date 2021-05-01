<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM registration1 WHERE uid='$uid'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $uid=$row['uid'];
			            $emailid=$row['emailid'];
			            $password=$row['pass'];
			            $cpassword=$row['cpass'];
			            $name=$row['name'];
			            $role =$row['role'];
			            $dob =$row['dob'];
			            $aadhar =$row['aadharnumber'];
			            $studentmobile =$row['smno'];
			            $gender =$row['gender'];
			            $bloodgroup =$row['bloodgroup'];
			            $category =$row['category'];
			            $nationality =$row['nationality'];
			            $fathername =$row['fathername'];
			            $mothername =$row['mothername'];
			            $parentmobile =$row['fmno'];
			            $address =$row['add'];
			            $city =$row['city'];
			            $state =$row['state'];
			            $country =$row['country'];
			            $pincode =$row['pcode'];
			            $coursename =$row['coursename'];
			            $collegename =$row['collegename'];
			            $joiningyear =$row['joiningyear'];
			            $applicationstatus=$row['applicationstatus'];
                      }
?>
<div class="modal-dialog">
  <div class="modal-content" style="border-radius: 0px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="myModalLabel">Approve User</h4>
    </div>
    <br>
                <form id="modalform" name="modalform" action="code/delete.php" class="form-horizontal calender" method="POST">

                    <div class="form-group">
                        <label class="col-sm-4 control-label">UID<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $uid; ?>" class="form-control" id="uid1" name="uid1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email Id<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $emailid; ?>" class="form-control" id="emailid1" name="emailid1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Password<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $password; ?>" class="form-control" id="passord1" name="password1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Confirm Password<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $cpassword; ?>" class="form-control" id="cpassword1" name="cpassword1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Name<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $name; ?>" class="form-control" id="name1" name="name1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Role<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $role; ?>" class="form-control" id="role1" name="role1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Date of Birth<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $role; ?>" class="form-control" id="dob1" name="dob1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Aadhar Number<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $aadhar; ?>" class="form-control" id="aadhar1" name="aadhar1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Student Mobile No.<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $studentmobile; ?>" class="form-control" id="studentmobile1" name="studentmobile1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Gender<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $gender; ?>" class="form-control" id="gender1" name="gender1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Blood Group<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $bloodgroup; ?>" class="form-control" id="bloodgroup1" name="bloodgroup1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Category<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $category; ?>" class="form-control" id="category1" name="category1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nationality<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $nationality; ?>" class="form-control" id="nationality1" name="nationality1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Father Name<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $fathername; ?>" class="form-control" id="fathername1" name="fathername1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mother Name<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $mothername; ?>" class="form-control" id="mothername1" name="mothername1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Parent Mobile No <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $parentmobile; ?>" class="form-control" id="parentmobile1" name="parentmobile1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Address<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $address; ?>" class="form-control" id="address1" name="address1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">City / Village<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $city; ?>" class="form-control" id="city1" name="city1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">State<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $state; ?>" class="form-control" id="state1" name="state1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Country<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $country; ?>" class="form-control" id="country1" name="country1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Pin Code<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $pincode; ?>" class="form-control" id="pincode1" name="pincode1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Course Name<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $coursename; ?>" class="form-control" id="coursename1" name="coursename1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">College Name<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $collegename; ?>" class="form-control" id="collegename1" name="collegename1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Joining Year<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $joiningyear; ?>" class="form-control" id="joiningyear1" name="joiningyear1">                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Application Status<span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $applicationstatus; ?>" class="form-control" id="applicationstatus1" name="applicationstatus1">                            
                        </div>
                    </div>
                    
                    


                    
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button type="submit" class="btn btn-danger" name="update" id="update">Confirm</button>
                    </div>

                    <input type="hidden" name="hid" id="hid" value="<?php echo $uid;?>">

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


    var uid1 = $("#hid").val();
	var emailid1 = $("#emailid1").val();
    var password1 = $("#password1").val();
    var cpassword1 = $("#cpassword1").val();
    var name1 = $("#name1").val();
    var role1 = $("#role1").val();
    var dob1 = $("#dob1").val();
    var aadhar1 = $("#aadhar1").val();
    var studentmobile1 = $("#studentmobile1").val();
    var gender1 = $("#gender1").val();
    var bloodgroup1 = $("#bloodgroup1").val();
    var category1 = $("#category1").val();
    var nationality1 = $("#nationality1").val();
    var fathername1 = $("#fathername1").val();
    var mothername1 = $("#mothername1").val();
    var parentmobile1 = $("#parentmobile1").val();
    var address1 = $("#address1").val();
    var city1 = $("#city1").val();
    var state1 = $("#state1").val();
    var country1 = $("#country1").val();
    var pincode1 = $("#pincode1").val();
    var coursename1 = $("#coursename1").val();
    var collegename1 = $("#collegename1").val();
    var joiningyear1 = $("#joiningyear1").val();
    var applicationstatus1 = $("#applicationstatus1").val();
 

    if (uid1=='') 
    {
      infoAlert("Please Enter UID");
    }
    
    else
    {
        $.ajax({
            type: 'POST',
            url: 'manage-registered-users-approve-code.php',
            data: ({ uid1:uid1, emailid1:emailid1, password1:password1, cpassword1:cpassword1, name1:name1, role1:role1, dob1:dob1, aadhar1:aadhar1, studentmobile1:studentmobile1, gender1:gender1, bloodgroup1:bloodgroup1, category1:category1, nationality1:nationality1, fathername1:fathername1, mothername1:mothername1, parentmobile1:parentmobile1, address1:address1, city1:city1, state1:state1, country1:country1, pincode1:pincode1, coursename1:coursename1, collegename1:collegename1, joiningyear1:joiningyear1, applicationstatus1:applicationstatus1}),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='manage-registered-users.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
