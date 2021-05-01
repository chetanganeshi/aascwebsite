<div class=" table-responsive">
<table class="table table-striped table-schedule">
	                <thead>
	                  <tr class="bg-theme-colored2">
						  <th> Serial No.</th>
					 	 <th> Course</th>
	                  	
	                  	<th>Semester</th>
	                  <!--	<th>Branch</th> -->
	                  <!--	<th>city</th> -->
	                  	<th>Subject</th>
	                  	<th>Test Date</th>
	                  	<th>Test Timing</th>
	                  <!--	<th>Center</th> -->
	                  </tr>
	                </thead>
	                <?php

	                $get2 = mysqli_query($conn,"SELECT * FROM  test");
	                while($row2 = mysqli_fetch_array($get2))
	                {
						$id=$row2['id'];
	                	$course=$row2['course'];
	                	$semester=$row2['semester'];
						$subject=$row2['subject'];
	                	$date=$row2['date'];
	                	$timings=$row2['timings'];
	                	?>            

	                <tbody>
	                  <tr>
						<td style="text-transform: uppercase;"><strong><?php echo $id; ?></strong></td>
	                    <td style="text-transform: uppercase;"><strong><?php echo $course; ?></strong></td>
	                    <td style="text-transform: uppercase;"><strong><?php echo $semester; ?></strong></td>
						<td style="text-transform: uppercase;"><strong><?php echo $subject; ?></strong></td>
	                  <!--  <td><?php echo $branch;?></td> -->
	                   <!--  <td><?php echo $city;?></td> -->
	                    <!--<td><?php echo $subject;?></td>-->
	                    <td style="text-transform: uppercase;"><strong><?php echo $date;?></strong></td>
	                    <td style="text-transform: uppercase;"><strong><?php echo $timings;?></strong></td>
	                  <!--   <td><?php echo $acenter;?></td> -->
	                  </tr>
<!-- 	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Inauguration</strong></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Key Note</strong></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Tea Break</strong></td>
	                    <td>&nbsp;</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Lunch Break</strong></td>
	                    <td>&nbsp;</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><a href="#">Fun with Animation API</a> by <a href="#">Jacob Doe</a></td>
	                    <td>Room1</td>
	                  </tr>
	                  <tr>
	                    <td>08:30am-10:00am</td>
	                    <td><strong>Vote of Thanks</strong></td>
	                    <td>Room1</td>
	                  </tr> -->
	                </tbody>
	            <?php }?>
	              </table>
	          </div>