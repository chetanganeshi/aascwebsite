		<div class="col pt-10">
              <h3 class="text-uppercase font-weight-600 mt-0">Latest <span class="text-theme-colored2">Notifications</span></h3>
			  <div class="double-line-bottom-theme-colored-2"></div>
            
              <div class="ex3">
	              <marquee behaviour= "scroll" direction= "up" scrollamount = "3" onmouseover= "this.setAttribute('scrollamount', 0, 0); this.stop();"
																		onmouseout = "this.setAttribute('scrollamount', 3, 0); this.start();" class = "movingbody2">
			<script>
			{	
				document.write('<ol class = "m-par2">')
				<?php

	                $get2 = mysqli_query($conn,"SELECT * FROM notifications");
	                while($row2 = mysqli_fetch_array($get2))
	                {
						$id = $row2['id'];
						$date = $row2['date'];
	                	$url = $row2['weblink'];
	                	$notice = $row2['notice'];
	                	
	                	?>
						document.write('<li> <a target = "_blank" href = "<?php echo $url; ?> "> <?php echo $id.".".$notice." | ".$date; ?></a> </li>')
			  <?php } ?>
				document.write('</ol>')
			}
			</script>
		</marquee>
              
            </div>
            </div>