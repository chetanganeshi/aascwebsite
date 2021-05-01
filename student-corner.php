<?php
include'ck.php';
if($ck!=1 or $ck!="1")
{
	echo '<script> alert("Please login to access this page"); </script>';
	echo '<script type="text/javascript"> window.location.href = "index.php"; </script>';
  ?>
<span>Please login to access this page</span>
<a href="index.php">Click here</a> to go back !!
  <?php
}
else
{
  if($role == "student")
  {

?>
<?php 
include 'navbar.php';
?>
  <!-- Start main-content -->
  <div class="main-content">
  
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="websiteimages/h3.png">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Student Corner</h2>
              <h3><span style="color:white;">Hi, </span><span class="text-theme-colored2"><b><?php echo $fname;?></b><span></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-2">
            <div class="vertical-tab">
              <ul class="nav nav-tabs">

                <li class="active"><a href="#tab16" data-toggle="tab">Test Schedule</a></li>
                
                <li><a href="#tab17" data-toggle="tab">Notice Board</a></li>

      

                <li><a href="#tab19" data-toggle="tab">Time Table</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md-10">
            <div class="tab-content">
              
              <div class="tab-pane fade in active" id="tab16">
                <div class="row">
                  <div class="col-md-12">
                    <?php include("test-schedule.php") ?>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab17">
                <div class="row">
                  <div class="col-md-12">                          
                    <?php include("notifications.php"); ?>
                  </div>
                </div>
              </div>
              
              
              
              <div class="tab-pane fade" id="tab19">
                <div class="row">
                  <div class="col-md-12">
                   <form method ="post" action="timetable.php">
                    <div class="">
                  		<label>Select Course and Semester</label>
                    </div>
                    <div class="col-md-12">
               
                    	<div class="form-group">
                       	 <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="coursename" name="coursename">
                       	   <?php
					            $get = mysqli_query($conn,"SELECT * FROM registration1 WHERE uid = '$uid'");
					            while($row = mysqli_fetch_array($get))
					            {
					              $course = $row['coursename'];
					          ?>
                              <option value = "<?php echo $course; ?>"> <?php echo $course; ?> </option>
                              <?php } ?>
                     	   </select>
                   	 </div>
                    	<div class="form-group">
                       	 <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtsemester" name="txtsemester">
                       	   <option disabled selected value="">Select Semester</option>
                              <option value="semester-1">Sem 1</option>
                              <option value="semester-2">Sem 2</option>
                              <option value="semester-3">Sem 3</option>
                              <option value="semester-4">Sem 4</option>
                              <option value="semester-5">Sem 5</option>
                              <option value="semester-6">Sem 6</option>
                     	   </select>
                   	 </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-dark btn-theme-colored2">Get Details </button>
                    </div>
                    </div>
                  </form>
                  
                  
                    
                  </div>
                </div>
              </div>
              
            </div>
          </div>          
        </div>
      </div>
    </section>

  </div>  
  <!-- end main-content -->

  <!-- Footer -->
<?php include("footer.php") ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>
<?php 
}
}
?>