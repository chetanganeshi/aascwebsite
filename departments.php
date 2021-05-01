<?php 
  include("navbar.php");
  include("connection.php"); 
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
              <h2 class="text-theme-colored2 font-36">Departments</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Academics</a></li>
                <li class="active">Departments</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

	<!-- Section Departments -->
    <section>
      <div class="container pt-50 pb-0">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8">
              <h3 class="text-uppercase font-weight-600 mt-0">Our<span class="text-theme-colored2"> Departments</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
                <ul>
			     <li>Our college have departments of History, Physics, English (language and literature), Botany, and so on.</li>
			     <li>Degree programs are generally administered by departments, although there may also be interdisciplinary committees for subjects which touch more than one department.</li>
			     <li>There are 17 Departments in our College.</li>
		       </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <section>
      <div class="container pt-0 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8">
              <h3 class="text-uppercase mb-20 mt-sm-30">  <span class="text-theme-colored2">Department Details</span></h3>
              <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="accordion6" role="tablist" aria-multiselectable="true">
                <?php
		            $get3 = mysqli_query($conn,"SELECT * FROM departments");
		            while($row3 = mysqli_fetch_array($get3))
		            {
		
		              $id = $row3['id'];
		              $departments = $row3['departments'];
							
				?> 
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="<?php echo 'heading'.$id; ?>">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="<?php echo '#accordion'.$id; ?>" href="<?php echo '#collapse'.$id; ?>" aria-expanded="false" aria-controls="<?php echo 'collapse'.$id; ?>">
                        Department of <?php echo $departments; ?>
                      </a>
                    </h6>
                  </div>
                  <div id="<?php echo 'collapse'.$id; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?php echo 'heading'.$id; ?>">
                    <div class="panel-body">
                      <!-- Section Departments -->
					    <section>
					      <div class="container pt-50 pb-0">
					        <div class="section-title">
					          <div class="row">
					            <div class="col-md-8">
									<h3 class="text-uppercase font-weight-500">List of <span class="text-theme-colored2"> Teaching Staff </span></h3>
					               	 <div class="double-line-bottom-theme-colored-2"></div>
										<div class="table-responsive">
					                	  <table class="table">
									    	<thead class="thead" style="color: white; background:#FF5454">
									  		  <tr>
											      <th scope="col" style="text-align:center">Lecturer Name</th>
											      <th scope="col" style="text-align:center">Qualification</th>
											      <th scope="col" style="text-align:center">Designation</th>
												  <th scope="col" style="text-align:center">Department</th>
												  <th scope="col" style="text-align:center">Contact</th>
											    </tr>
											 </thead>
											 <tbody>
											  <?php
									            $get2 = mysqli_query($conn,"SELECT * FROM faculty WHERE department = '$departments'");
									            while($row2 = mysqli_fetch_array($get2))
									            {
									
									              //$id = $row2['id'];
									              $lecturer = $row2['lecturername'];
									              $qualification = $row2['qualification'];
									              $designation = $row2['designation'];
									              $department = $row2['department'];
									              $contact = $row2['cno'];
									
									          ?>
											  <tr>
											    <td style="text-align:center"> <?php echo $lecturer; ?> </td>
											    <td style="text-align:center"> <?php echo $qualification; ?>  </td>
											    <td style="text-align:center"> <?php echo $designation; ?>  </td>
												<td style="text-align:center"> <?php echo $department; ?>  </td>
												<td style="text-align:center"> <?php echo $contact; ?>  </td>
											  </tr>
									 		 <?php } ?>
									  	 </tbody>
										 </table>
									    </div>
					              </div>
					            </div>
					          </div>
					      </div>
					    </section>
                    </div>
                  </div>
                </div>
               <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End main-content -->
</div>
<!-- Footer -->
<?php include("footer.php") ?>
<!-- end wrapper -->

<script src="js/custom.js"></script>

</body>
</html>