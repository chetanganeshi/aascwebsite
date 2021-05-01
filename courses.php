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
              <h2 class="text-theme-colored2 font-36">Courses</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Academics</a></li>
                <li class="active">Courses</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-deep">
      <div class="container">
        <div class="row mtli-row-clearfix">

          <div class="col-md-4">
           <?php

            $get2 = mysqli_query($conn,"SELECT * FROM coursetype");
            while($row2 = mysqli_fetch_array($get2))
            {

              $id=$row2['id'];
              $price=$row2['price'];
              $course=$row2['course'];
              $c_durt = $row2['cdurt'];
              $c_desc = $row2['cdesc'];

              ?>                           
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                	<!--src="images/course/sm1.jpg"-->
                  <img class="img-fullwidth" alt="">
                  <!-- <div class="price-tag">₹1,000</div> -->
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href=""><h3 class="mt-0 mb-5"><?php echo $course; ?></h3></a>
                    <!-- <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul> -->
                  </div>
                  <div class="course-top-part pull-right"><a href="#" class="btn btn-theme-colored2 btn-dark btn-circled"><font size="4"><?php echo $price; ?></font></a></div>
                  <!-- <div class="author-thumb">
                   	 <img src="images/course/xs1.jpg" alt="" class="img-circle">
                 	  </div> -->
                  <div class="clearfix"></div>
                  <p class="course-description mt-20"><?php echo $c_desc; ?></p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6><span class="course-time"><?php echo $c_durt;?></span></h6>
                      <span> Course Duration</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <?php } ?>
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