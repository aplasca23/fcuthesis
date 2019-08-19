<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboad</title>

  <!-- Custom fonts for this template-->
  <link href="assets/templates/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <!-- Custom styles for this template-->
  <link href="assets/templates/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" <a href="<?php echo base_url('dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-0">
        <img src="assets/templates/img/fcuLogo.jfif" style="border-radius: 50%; width:80px;height:80px; " alt="FCU">
        <span>  </span>
        </div>
        <div class="sidebar-brand-text mx-3">FCU<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link"<a href="<?php echo base_url('dashboard') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Class Management
      </div>
      <!-- Dropdown Menu Classes -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-file"></i>
          <span>Class</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List of Classes:</h6>
            <a class="collapse-item" <a href="<?php echo base_url('classes'); ?>">Manage Class</a></a>
			<a class="collapse-item" <a href="<?php echo base_url('subject') ?>">Manage Subject</a>
			<a class="collapse-item" <a href="<?php echo base_url('section') ?>">Manage Section</a>
          </div>
        </div>
      </li>

	  <!-- Divider -->
	  <hr class="sidebar-divider">
	
	  <!-- Dropdown Student -->
	  
	  <div class="sidebar-heading">
        Student Management
	  </div>
	  
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-child"></i>
          <span>Student</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Student Management:</h6>
            <a class="collapse-item" href="classes.php">Add Student</a>
            <a class="collapse-item" href="utilities-border.html">Add Bulk Student</a>
            <a class="collapse-item" href="utilities-animation.html">Manage Student</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

        <div class="sidebar-heading">
        Teacher Management
      </div>
      <!-- Navbar Teacher -->
      <li class="nav-item">
	  	<a class="nav-link collapsed" href="#">
          <i class="fas fa-fw fa-folder"></i>
		  <span>Teacher</span>
		</a>
      </li>


<!-- Divider -->
<hr class="sidebar-divider">

<div class="sidebar-heading">
        Attendance Management
      </div>

      <!-- Navbar Attendance  -->
      <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-clipboard"></i>
		  <span>Attendance</span></a>
		  </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Attendance:</h6>
            <a class="collapse-item" href="login.html">Take Attendance</a>
            <a class="collapse-item" href="register.html">Attendance Report</a>
          </div>
        </div>
	  </li>
	  <!-- Divider -->
<hr class="sidebar-divider">

<div class="sidebar-heading">
        Marksheet Management
      </div>

      <!-- NavBar MarkSheet -->
      <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMark" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-chart-line"></i>
		  <span>Marksheet</span></a>
		  </a>
        <div id="collapseMark" class="collapse" aria-labelledby="headingMark" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Marksheet:</h6>
            <a class="collapse-item" href="login.html">Manange Marksheet</a>
            <a class="collapse-item" href="register.html">Manage Marks</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
	  <hr class="sidebar-divider d-none d-md-block">
	  
    <div class="sidebar-heading">
        Accounting Management
      </div>

	   <!-- NavBar Accounting -->
	   <li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAccounting" aria-expanded="true" aria-controls="collapseAccounting">
          <i class="fas fa-fw fa-chart-area"></i>
		  <span>Accounting</span></a>
		  </a>
        <div id="collapseAccounting" class="collapse" aria-labelledby="headingAccounting" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Accounts:</h6>
            <a class="collapse-item" href="login.html">Create Student Payment</a>
			<a class="collapse-item" href="register.html">Manage Payment</a>
			<a class="collapse-item" href="register.html">Expenses</a>
			<a class="collapse-item" href="register.html">Income</a>
          </div>
        </div>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
  

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">




    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  <i class="fa fa-bars"></i>
</button>


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
  <li class="nav-item dropdown no-arrow d-sm-none">
    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-search fa-fw"></i>
    </a>
   
  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- Nav Item - User Information -->
  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
      <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="#">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
      </a>
      <a class="dropdown-item" href="#">
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        Settings
      </a>
      <a class="dropdown-item" href="#">
        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
        Activity Log
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </li>

</ul>

</nav>

<!-- End of Topbar -->

<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			
			<div class="panel-heading">
				Class
			</div>

			<div class="list-group">			
				<?php 
				if($classData) {
					$x = 1;
					foreach ($classData as $value) { 
					?>
						<a class="list-group-item classSideBar <?php if($x == 1) { echo 'active'; } ?>" onclick="getClassSection(<?php echo $value['class_id'] ?>)" id="classId<?php echo $value['class_id'] ?>">
				    		<?php echo $value['class_name']; ?>(<?php echo $value['numeric_name']; ?>)
					  	</a>	
					<?php 
					$x++;
					}
				} 
				else {
					?>
					<a class="list-group-item">No Data</a>
					<?php
				}		
				?>
			</div>

		</div>		
	</div>

  <div class="col-md-8">
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Manage Section</div>

		  <div class="panel-body">		  
		  	<div class="result"></div>
		  </div>			  
		</div>
	</div>
	<!-- /col-md-8 -->
</div>

<!-- create section modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addSectionModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Section</h4>
      </div>
      <form action="<?php echo base_url('section/create') ?>" method="post" id="addSectionForm">
      <div class="modal-body">
          <div id="add-section-message"></div>

		  <div class="form-group">
		    <label for="sectionName">Section Name</label>
		    <input type="text" class="form-control" id="sectionName" name="sectionName" placeholder="Section Name">
		  </div>
		  <div class="form-group">
		    <label for="teacherName">Teacher : </label>
		    <select class="form-control" name="teacherName" id="teacherName">
		    	<option value="">Select a Teacher</option>
		    	<?php 
		    	if($teacherData) { 
	    			foreach ($teacherData as $key => $value): ?>
			    		<option value="<?php echo $value['teacher_id'] ?>"><?php echo $value['fname'] . ' ' . $value['lname'] ?></option>
			    	<?php 
			    	endforeach 
			    	?>
	    		<?php
		    	} 
		    	else { ?>
		    		<option value="">No Data Available</option>
		    	<?php 
		    	}
		    	?>
		    </select>
		  </div>		  		 
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- update section modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="editSectionModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Section</h4>
      </div>
      <form action="<?php echo base_url('section/update') ?>" method="post" id="editSectionForm">
      <div class="modal-body">
          <div id="edit-section-messages"></div>

		  <div class="form-group">
		    <label for="editSectionName">Section Name</label>
		    <input type="text" class="form-control" id="editSectionName" name="editSectionName" placeholder="Section Name">
		  </div>
		  <div class="form-group">
		    <label for="editTeacherName">Teacher : </label>
		    <select class="form-control" name="editTeacherName" id="editTeacherName">
		    	<option value="">Select a Teacher</option>
		    	<?php 
		    	if($teacherData) { 
	    			foreach ($teacherData as $key => $value): ?>
			    		<option value="<?php echo $value['teacher_id'] ?>"><?php echo $value['fname'] . ' ' . $value['lname'] ?></option>
			    	<?php 
			    	endforeach 
			    	?>
	    		<?php
		    	} 
		    	else { ?>
		    		<option value="">No Data Available</option>
		    	<?php 
		    	}
		    	?>
		    </select>
		  </div>		  		 
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- remove section modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeSectionModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove Section</h4>
      </div>
      <div class="modal-body">
        <div id="remove-messages"></div>

        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="removeSectionBtn">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</div>
</div>

	<!-- /col-md-4 -->

   
	<!-- /col-md-4 -->

    </div>


<script type="text/javascript" src="<?php echo base_url('custom/js/section.js') ?>"></script>