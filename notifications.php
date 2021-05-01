					

<div class="col-sm-12">
    
		<marquee behaviour= "scroll" direction= "up" scrollamount = "3" onmouseover= "this.setAttribute('scrollamount', 0, 0); this.stop();"
																		onmouseout = "this.setAttribute('scrollamount', 3, 0); this.start();" class = "movingbody">
			<script>
			{	
				document.write('<ol class = "m-par">')
				<?php

	                $get2 = mysqli_query($conn,"SELECT * FROM notifications");
	                while($row2 = mysqli_fetch_array($get2))
	                {
						$id = $row2['id'];
	                	$url = $row2['url'];
	                	$notice = $row2['notice'];
	                	
	                	?>
						document.write('<li> <a href = "<?php echo $url; ?> "> <?php echo $id.".".$notice; ?></a> </li>')
			  <?php } ?>
				document.write('</ol>')
			}
			</script>
		</marquee>
		
</div>