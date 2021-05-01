<?php  

?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="background-color: #000; height: 100px; overflow: auto;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../../assets/dist/img/default.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p></p>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Navigation</li>
      <li>
        <!-- <li class="active treeview menu-open"> -->
        <a href="../../index.php">
          <i class="glyphicon glyphicon-home"></i> <span>AASC Home Page</span>
          <span class="pull-right-container">
            <!-- <i class="fa fa-angle-left pull-right"></i> -->
          </span>
        </a>
      </li>
      <li>
        <!-- <li class="active treeview menu-open"> -->
        <a href="../index.php">
          <i class="glyphicon glyphicon-dashboard"></i> <span>Admin - Dashboard</span>
          <span class="pull-right-container">
            <!-- <i class="fa fa-angle-left pull-right"></i> -->
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-plus"></i>
          <span>Manage College</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
          <!--<li><a href="../manage-nims/add-class.php"><i class="glyphicon glyphicon-pencil"></i> Add Class</a></li>-->
          <li><a href="../manage-aasc/manage-courses.php"><i class="glyphicon glyphicon-pencil"></i> Manage Courses </a></li>
          <li><a href="../manage-aasc/manage-course-details.php"><i class="glyphicon glyphicon-pencil"></i> Manage Course Details</a></li>
          <li><a href="../manage-aasc/manage-faculty.php"><i class="glyphicon glyphicon-pencil"></i> Manage Faculty </a></li>
          <li><a href="../manage-aasc/manage-departments.php"><i class="glyphicon glyphicon-pencil"></i> Manage Departments </a></li>
          <li><a href="../manage-aasc/manage-noticeboard.php"><i class="glyphicon glyphicon-pencil"></i> Manage Notice Board </a></li>
          <li><a href="../manage-aasc/manage-testschedule.php"><i class="glyphicon glyphicon-pencil"></i> Manage Test Schedule </a></li>
          <li><a href="../manage-aasc/manage-timetable.php"><i class="glyphicon glyphicon-pencil"></i> Manage Timetable</a></li>
          <li><a href="../manage-aasc/manage-events.php"><i class="glyphicon glyphicon-pencil"></i> Manage Events / Special Classes </a></li>
          <li><a href="../manage-aasc/manage-members.php"><i class="glyphicon glyphicon-pencil"></i> Manage Members</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-plus"></i>
          <span>Manage Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
        <!-- <li><a href="../manage-user/usermaster.php"><i class="glyphicon glyphicon-pencil"></i> Add User</a></li> -->
          <li><a href="../manage-user/manage-registered-users.php"><i class="glyphicon glyphicon-pencil"></i> Registered Users</a></li>
          <li><a href="../manage-user/manage-approved-users.php"><i class="glyphicon glyphicon-pencil"></i> Approved Users</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="glyphicon glyphicon-plus"></i>
          <span>Configure Site</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            <!-- <span class="label label-primary pull-right">4</span> -->
          </span>
        </a>
        <ul class="treeview-menu">
          
          <li><a href="../configure-site/manage-sliderimage.php"><i class="glyphicon glyphicon-pencil"></i> Manage Main Sliders</a></li>
          <li><a href="../configure-site/manage-featuresimage.php"><i class="glyphicon glyphicon-pencil"></i> Manage Features Sliders</a></li>
          <!--<li><a href="../configure-site/manage-about.php"><i class="glyphicon glyphicon-pencil"></i> Manage About </a></li>-->
          <li><a href="../configure-site/manage-gallery.php"><i class="glyphicon glyphicon-pencil"></i> Manage Gallery</a></li>
          <!--<li><a href="../configure-site/manage-infrastructure.php"><i class="glyphicon glyphicon-pencil"></i> Manage Infrastructure</a></li>
          <li><a href="../configure-site/manage-support.php"><i class="glyphicon glyphicon-pencil"></i> Manage Support </a></li>-->
          <li><a href="../configure-site/manage-faq.php"><i class="glyphicon glyphicon-pencil"></i> Manage FAQ</a></li>
          <li><a href="../configure-site/manage-address.php"><i class="glyphicon glyphicon-pencil"></i> Manage Address</a></li>
          <li><a href="../configure-site/manage-contact-queries.php"><i class="glyphicon glyphicon-pencil"></i> Manage Contact Queries</a></li>
          <li><a href="../configure-site/manage-enquiry-query.php"><i class="glyphicon glyphicon-pencil"></i> Manage Enquiry Queries</a></li>
        </ul>
      </li>
      <li class="treeview">
        <!-- <a href="#">
          <i class="glyphicon glyphicon-plus"></i>
          <span>Manage Test</span>
          <span class="pull-right-container">
            <!-- <span class="label label-primary pull-right">4</span>
          </span>
        </a> -->
        <ul class="treeview-menu">
          <li><a href="../manage-test/managetest.php"><i class="glyphicon glyphicon-pencil"></i> Manage Test</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>