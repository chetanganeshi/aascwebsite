  <footer id="footer" class="footer" data-bg-color="#212331">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-7">
          <?php
          $query = mysqli_query($conn,"select * from address");
          while($row = mysqli_fetch_array($query))
          {
            $adrs = $row['adrs'];
            $cont = $row['cont'];
            $email = $row['email'];
			}
            ?>
          <div class="widget dark">
            <img class="mt-0 mb-0" alt="The Adoni Arts and Science College" src="websiteimages/logo-wide.png" style="width:400px; border-radius: 10px">
            <!-- <p> Recognized by Government of Andhra Pradesh Under G.O.Ms.No.1450 Education Department Dt.13-6-1963. Communicated in Proceeding R.C.No. 77/D-3/62 dt.28-6-1963 of The Director of Public Instruction </p> -->
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-map text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo $adrs;?></a> </li>
              <br>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo $cont;?></a> </li>
              
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo $email;?></a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">www.adonicollege.com</a> </li>
            </ul>            
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-2">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
            <ul class="angle-double-right list-border">
              <li><a href="index.php">Home Page</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="infrastructure.php">Infrastructure</a></li>
              <li><a href="gallery.php">Gallery</a></li>
			  <li><a href="faq.php">FAQ</a></li>              
            </ul>
            
          </div>
        </div>
        
        <!-- <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <?php include("upcoming-event.php"); ?>
          </div>
        </div> -->
        
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Working Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Sat:  </span>
                  <div class="value pull-right"> <!-- <span class="value pull-right bg-theme-colored2 text-white closed"> Opened </span> --> 10.00 A.M. - 5.00 P.M. </div>
                </li>
                <li class="clearfix"> <span> Sun: </span>
                  <div class="value pull-right bg-theme-colored2 text-white closed"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy;2021 <a href="#"></a>. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="faq.php">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="contact.php">Help Desk</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
