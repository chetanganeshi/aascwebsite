    <section id="team">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase font-weight-600 mt-0"><span class="text-theme-colored2">Members</span></h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              
            </div>
          </div>
           </div>
                              
        <div class="row">
          <div class="team-members">
             <?php
			    include 'connection.php';
			    $sel=mysqli_query($conn,"select * from members order by id desc limit 4");
			    while($arr=mysqli_fetch_array($sel))
			   {
			   $tid=$arr['id'];
			   $tname=$arr['name'];
			   $spec=$arr['qualification'];
			   $desc1=$arr['designation'];
			   $pic=$arr['image'];
			?>
            <div class="col-md-4">
              <div class="team-members maxwidth400 mb-30">
                <div class="team-thumb">
                  <img src="account/manage-aasc/membersimages/<?php echo $pic; ?>" alt="" class="img-fullwidth">
                </div>
                <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                  <h4 class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0"><?php echo $tname;?> <span class="text-gray font-13 ml-5"><?php echo $spec;?></span></h4>                  
                  <p class="font-13 mt-10 mb-10"><?php echo $desc1; ?></p>
                  <ul class="styled-icons icon-theme-colored2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>