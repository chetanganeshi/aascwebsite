<?php include("navbar.php") ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="websiteimages/h3.png">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">About</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">About</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section About -->
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8">
              <h3 class="text-uppercase font-weight-600 mt-0">About <span class="text-theme-colored2">College</span></h3>
              <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="accordion6" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headin1">
                    <h6 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                        History of the College
                      </a>
                    </h6>
                  </div>
                  <div id="collaps1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headin1">
                    <div class="panel-body">
                        <p>
                        <b>The Adoni Arts and Science College</b> sponsored by <b><i>The Rotary Club of Adoni </i></b>and supported by <b><i> Philanthropic Agriculturists and Industrialists</i> was established in the year 1962</b>
                        </p>
                        <p>
                        The College founded with the noble objective of providing acres to Quality Higher Education to the rural and backward learners in and around Adoni Revenue Division of Kurnool District.
                        </p>
                        <p>
                        This Institution has grown by leaps and bounds over the past five decades and proudly celebrated <b><i>Golden Jubilee milestone in 2012.</i></b>  Thanks to NAAC Accreditation followed by UGC Funding, the Institution is looking forward to establishing Higher Standards in the field of Higher Education by making the best use of technology. 
                        </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Vision
                      </a>
                    </h6>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                      To become the Number One Institute in India for Guiding and Coaching Students for being Successful in Academic as well as in Competitive Examinations.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Mission
                      </a>
                    </h6>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                      To Enable Students to Develop Confidence,Reinforce Ideas and become Intellectually Alive.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Profile of the College
                      </a>
                    </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                      <ul>
						<li>40 acres campus with 7724.60 sq. meters. of built in area. </li>
						<li>45 spacious class rooms. </li>
						<li>16 spacious well ventilated, well furnished and well equipped Laboratories. </li>
						<li>85 strong Teaching staff. </li>
						<li>59 strong Non-teaching staff. </li>
						<li>M.Sc.(Organic Chemistry) and M.Com (Self funding)PG Courses.</li>
						<li>Two years B.P.Ed Course.</li>
						<li>B.A, B.Com. B.Sc and B.B. M Courses.</li>
						<li>11 U.G. Programmes of which 6 are self funding.</li>
						<li>2 Self funding P.G. Programmes.</li>
						<li>6 Sections in the Intermediate course in Arts, Science Commerce.</li>
						<li>Groups of which 1 is self funding.</li>
						<li>More than 3500 students.</li>
						<li>A fully Computerized Library Block of 630 sq. mtrs. With two big
							reading halls.</li>
						<li>Internal Quality Assurance Cell (IQAC).</li>
						<li>60,000 volumes in the College Library.</li>
						<li>Departmental Libraries with about 100 books each for all the
							17 departments.</li>
						<li>Automated College Office.</li>
						<li>Dr. B.R Ambedkar Open University Study Centre.</li>
						</ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="padding:15px">
            <?php include("upcoming-event.php") ?>
            </div>
          </div>
        </div>
      </div>
    </section>

   <!--start Funfacts Section-->
    <?php include("counter.php") ?>

    <!-- Section: Team -->
    <?php include("tutor.php") ?>
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