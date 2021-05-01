
<div class="col pt-10">
              <h3 class="text-uppercase font-weight-600 mt-0">Top <span class="text-theme-colored2">News</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              
              <div class="ex3">
              <?php 
                include 'connection.php';
                $get2 = mysqli_query($conn,"SELECT * FROM events1");
                while($row2 = mysqli_fetch_array($get2))
                {

                  $id=$row2['id'];
                  $name=$row2['name'];
                  $up="--";//$row2['up'];
                  $down="--";//$row2['down'];
                  $timing=$row2['timings'];
                  $info=$row2['info'];

                  ?>
              <article>
                <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom"><span></span><?php echo $down;?></li>
                      <li class="font-14 text-center text-uppercase mt-5"><?php echo $up;?></li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#"><?php echo $name;?></a></h5>
                    <p class="mr-10"><i class="fa fa-clock-o text-theme-colored2">&nbsp;</i><?php echo $timing;?> <br> <?php echo "<font color=#D35059>$info</font>";?> </p>
                  </div>
                </div>
              </article>
              <?php  }?>
              
            </div>
            </div>