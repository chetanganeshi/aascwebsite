<?php 
  include("navbar.php");
  include("connection.php"); 
?>
<html>
<head>
</head>
<body>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="websiteimages/h3.png">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Contact</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-50 pb-70">
        <div class="row pt-10">
          <div class="col-md-5">
            <div ><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=The%20adoni%20arts%20and%20science%20college&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Add map to website</a></iframe></div><br/>
          </div>
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom-theme-colored-2">Contact Us</h4>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="contact-process.php" method="post">
              <?php
              
              $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM contactus");
              $row = mysqli_fetch_row($result);
              $highest_id = $row[0];
              ?>

              <div class="row">
                <div class="col-sm-6">
                  <input type="hidden" value="<?php echo  $highest_id ; ?>" class="wp-form-control wpcf7-text" id="txtcid" name="txtcid" >
                  <div class="form-group mb-30">
                    <input id="txtuname" name="txtuname" class="form-control" type="text" placeholder="Enter Name" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="txtemail" name="txtemail" class="form-control required email" type="email" placeholder="Enter Email" required>
                  </div>
                </div>
              </div>                
              <!--<div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div> -->

              <div class="form-group mb-30">
                <textarea id="txtmsg" name="txtmsg" class="form-control required" rows="7" placeholder="Enter Message" required></textarea>
              </div>
              
              <?php
                date_default_timezone_set("Asia/Kolkata");
                $date = date("d-m-Y");

              ?>  
              <input type="hidden" value="<?php echo $date;  ?>" id="txtdate" name="txtdate">        
              
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-flat btn-theme-colored2 bg-hover-theme-colored mr-5" id="btncontact" name="btncontact">Send your message</button>
                <button type="reset" class="btn btn-flat btn-default bg-hover-theme-colored">Reset</button>
              </div>
            </form>
          </div>
        </div>
        <?php 
        $query = mysqli_query($conn,"select * from address");
        while($row = mysqli_fetch_array($query))
        {
          $adrs = $row['adrs'];
          $cont = $row['cont'];
          $email = $row['email'];

          ?>
          <div class="row mt-60">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray font-15 p-10"><?php echo $cont;?></h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60" >
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2"></i>
                <h4>Address</h4>
                <h6 class="text-gray font-15 p-10"><?php echo $adrs;?></h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
                <a href="mailto: adonicollege@gmail.com"> 
				        <h4>Email</h4>
                <h6 class="text-gray font-15 p-10"><?php echo $email;?></h6>
                </a>
              </div>
            </div>
          <?php }?>
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