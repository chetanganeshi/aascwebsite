<?php include'navbar.php';?>
<?php include'connection.php';?>
<html>
<head>
	<!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AASC Registration Form </title>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="websiteimages/h3.png">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Student Registration</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Registration</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row" >
         <div class="col-md-12" >
           <div class="contact_form wow fadeInLeft" id="login" name="login">
            <div class="col-md-12">
              <!-- process timeline -->
              <!-- end process timeline -->
              <h2 class="text-theme-colored2 font-25">Enter Creditaintial</h2>
              <div class="double-line-bottom-theme-colored-2"></div>
            </div>
            <form class="submitphoto_form"  action="registration-form.php" method="post">
              <?php
                include 'connection.php';
                $result = mysqli_query($conn,"SELECT MAX(uid)+1 FROM registration1");
                $row = mysqli_fetch_row($result);
                $highest_id = $row[0];
              ?>
              <!-- <div class="col-md-6">
                <label>I'd</label>
              </div> -->
              <!-- <div class="col-md-6">
                <div class="form-group"> -->                     
                  <input type="hidden" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtuid" name="txtuid" readonly="true" value="<?php echo $highest_id; ?>" placeholder="Choose User Id">
                <!-- </div> -->
              </div>
              <div class="col-md-6">
                <label>Enter Your Email I'd*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtemail" name="txtemail" placeholder="Enter Your Email Id" maxlength="40" required>
                </div>
              </div>
              <div class="col-md-6">
                <label>Enter Password*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group"> 
                  <input type="password" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtpass" name="txtpass" placeholder="Enter Your Password" maxlength="10" required>   
                </div>
              </div>
              <div class="col-md-6">
                <label>Confirm Password*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group"> 
                  <input type="password" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtcpass" name="txtcpass" placeholder="Enter Your Confirm Password" maxlength="10" required> 
                </div>
              </div>
              <div class="col-md-12">
                <h2 class="text-theme-colored2 font-25">Personal Details</h2>
                <div class="double-line-bottom-theme-colored-2"></div>
              </div>
              <div class="col-md-6">
                <label>Enter Student Name*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtname" name="txtname" placeholder="Enter Student Name" maxlength="40" required>
                </div>
              </div>
              <div class="">
                <div class="form-group">
                  <input type="hidden" name="txtrole" id="txtrole" value="student">
                </div>
              </div>
              <div class="col-md-6">
                <label>Date of Birth*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="date" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtdob" name="txtdob" placeholder="Enter DOB" required> 
                </div>
              </div>
              <div class="col-md-6">
                <label>Aadhar Number*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="number" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtaadhar" name="txtaadhar" placeholder="Enter Aadhar Number" required> 
                </div>
              </div>
              <div class="col-md-6">
                <label>Enter Student Mobile Number*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="tel" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtsmno" name="txtsmno" placeholder="Enter Student Mobile Number" maxlength="10"  required> 
                </div>
              </div>
              <div class="col-md-6">
                <label>Select Gender*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtgender" name="txtgender" required>
                    <option disabled selected value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <label>Select Blood Group</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtbloodgroup" name="txtbloodgroup" >
                    <option disabled selected value="">Select Blood Group</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <label>Select Reservation Category*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtcategory" name="txtcategory" required>
                    <option disabled selected value="">Select Reservation Category</option>
                    <option value="GEN">GEN</option>
                    <option value="OBC">OBC</option>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                    <option value="PH">PH</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <label>Select Nationality*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtnationality" name="txtnationality" required>
                    <option disabled selected value="">Select Nationality</option>
                    <option value="Indian">Indian</option>
                    <option value="Other">Other</option> 
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <h2 class="text-theme-colored2 font-25">Parent Details</h2>
                <div class="double-line-bottom-theme-colored-2"></div>
              </div>
              <div class="col-md-6">
                <label>Enter Students's Father Name*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group"> 
                  <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtfathername" name="txtfathername" placeholder="Enter Father Name" maxlength="40" required>
                </div>
              </div>
              <div class="col-md-6">
                <label>Enter Students's Mother Name*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group"> 
                  <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtmothername" name="txtmothername" placeholder="Enter Mother Name" maxlength="40" required>
                </div>
              </div>
              <div class="col-md-6">
                <label>Enter Parent Mobile Number*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group"> 
                  <input type="tel" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtfmno" name="txtfmno" placeholder="Enter Parent Mobile Number" maxlength="10" required> 
                </div>
              </div>
              <div class="col-md-12">
                <h2 class="text-theme-colored2 font-25">Address For Communication</h2>
                <div class="double-line-bottom-theme-colored-2"></div>
              </div>
              <div class="col-md-6">
                <label>Enter Address*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group"> 
                  <textarea class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" cols="30" rows="10" id="txtaddress" name="txtaddress" placeholder="Enter Address" maxlength="100" required></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <label>Enter City/Village*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" name="txtcity" id="txtcity" placeholder="Enter City" maxlength="20" required>
                </div>
              </div>
              <div class="col-md-6">
                <label>Enter State*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" name="txtstate" id="txtstate" placeholder="Enter State" maxlength="30" required>
                </div>
              </div>
              <div class="col-md-6">
                <label>Select Country*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtcountry" name="txtcountry" maxlength="30" required>
                    <option disabled selected value="">Select Country</option>
                    <option value="India">India</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <label>Enter Pincode*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="number" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtpcode" name="txtpcode" placeholder="Enter Pincode" maxlength="6" pattern="[0-9]{6}" required> 
                </div>
              </div>
              <div class="col-md-12">
                <h2 class="text-theme-colored2 font-25">Course Details</h2>
                <div class="double-line-bottom-theme-colored-2"></div>
              </div>
              <div class="col-md-6">
                <label>Select Course*</label>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtcoursename" name="txtcoursename" required>
                  <option disabled selected value="">Select Course</option>
                  <?php
                    $get2 = mysqli_query($conn,"SELECT * FROM coursetype");
                    while($row2 = mysqli_fetch_array($get2))
                    {
                      $id=$row2['cid'];
                      $price=$row2['price'];
                      $course=$row2['course'];
                      $c_durt = $row2['c_durt'];
                      $c_time = $row2['c_time'];
                      $c_desc = $row2['c_desc'];
                      ?>
                    <option value="<?php echo $course; ?>"><?php echo $course; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <label>Select College*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group"> 
                  <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtcollegename" name="txtcollegename" required>
                    <option disabled selected value="">Select College</option>
                    <option value="The Adoni Arts and Science College">The Adoni Arts and Science College</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <label>Enter Joining Year*</label>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="number" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtjoiningyear" name="txtjoiningyear" placeholder="Enter Joining Year" maxlength="4" pattern="[0-9]{4}" required>
                </div>
              </div>
              <input type="hidden" name="txtstatus" id="txtstatus" value="pending">  
              <div class="col-md-6">
                <div class="form-group">
                    
                </div>
              </div>
              <div class="col-md-6">
                <hr>
                <div class="form-group">
                  <input type="submit" value="Submit" class="btn btn-dark btn-theme-colored2" id="btnsubmit" name="btnsubmit"> &nbsp; &nbsp;
                  <input type="reset" value="Cancel" class="btn btn-default bg-hover-theme-colored" id="btnreset" name="btnreset" >
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================--> 
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include 'footer.php';?>
    <!--=========== END FOOTER SECTION ================--> 
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->
    <!-- Javascript Files
    ================================================== -->
    <!-- initialize jQuery Library -->
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- Custom js-->
    <script src="js/custom.js"></script>
  </body>
</html>
       