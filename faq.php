<?php include("navbar.php") ?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="websiteimages/h3.png">
      <div class="container pt-0 pb-0">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">FAQ</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">FAQ</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section> 
        <?php 
        include("connection.php");
        $query = mysqli_query($conn,"select * from faq");
        while($row = mysqli_fetch_array($query))
        {
          $title1 = $row['Title'];
          $detail = $row['Details'];

          ?>

        
    <section class="position">
      <div class="container">
        <div class="row">
          <div class="col-md-3 container">
            <div class="list-group">
              <a href="#section-one" class="list-group-item smooth-scroll-to-target"><?php echo $title1; ?></a>

              
            </div>
          </div>
          <div class="col-md-9">
            <div id="section-one" class="mb-50">
              <h3><?php echo $title1; ?></h3>
              <hr>
              <p class="mb-20"><?php echo $detail; ?></p>
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