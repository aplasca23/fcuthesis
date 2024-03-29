<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Manage Class</title>

  <!-- Custom fonts for this template -->
  <link href="assets/templates/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/templates/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="assets/templates/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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

        <!-- Topbar -->
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

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"></h1>

            <div class="panel panel-default">


  <div class="panel-body">  	    


  <ol class="breadcrumb">
  <li><a href="<?php echo base_url('dashboard') ?>">Home</a></li> 
  <li class="active">/Manage Class</li>
</ol>

<div class="panel panel-default">
  <div class="panel-heading">
    Manage Class
  </div>
  <div class="panel-body">  	    
      <div id="messages"></div>

    	<div class="pull pull-right" align="right">
    		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addClass" id="addClassModelBtn"> 
    			<i class="fas fa-plus fa-sm fa-fw mr-2 text-gray-400"></i> Add Class
    		</button>
    	</div>

    	<br /> 
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>#</th>
                    <th>Class Name</th>
                    <th>Numeric Name</th>
                    <th>Action</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->




<!-- add class -->
<div class="modal fade" tabindex="-1" role="dialog" id="addClass">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Class</h4>
      </div>

      <form class="form-horizontal" method="post" id="createClassForm" action="<?php echo base_url() . 'classes/create' ?>">

      <div class="modal-body">
      
      <div id="add-class-messages"></div>

		  <div class="form-group">
		    <label for="className" class="col-sm-4 control-label">Class Name : </label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="className" name="className" placeholder="Class Name">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="numericName" class="col-sm-4 control-label">Numeric Name : </label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="numericName" name="numericName" placeholder="Numeric Name">
		    </div>
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

<!-- edit class -->
<div class="modal fade" tabindex="-1" role="dialog" id="editClassModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Class</h4>
      </div>

      <form class="form-horizontal" method="post" id="editClassForm" action="<?php echo base_url() . 'classes/update'; ?>">

      <div class="modal-body">
      
      <div id="edit-class-messages"></div>

      <div class="form-group">
        <label for="editClassName" class="col-sm-4 control-label">Class Name : </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="editClassName" name="editClassName" placeholder="Class Name">
        </div>
      </div>
      <div class="form-group">
        <label for="editNumericName" class="col-sm-4 control-label">Numeric Name : </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="editNumericName" name="editNumericName" placeholder="Numeric Name">
        </div>
      </div>      
      </div>
      <div class="modal-footer edit-class-modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- remove class -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeClassModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove Class</h4>
      </div>
      
      <div class="modal-body">
        <div id="remove-messages"></div>
        <p> Do you really want to remove</p>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="removeClassBtn">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="user/login">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/templates/vendor/jquery/jquery.min.js"></script>
  <script src="assets/templates/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/templates/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/templates/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/templates/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/templates/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/templates/js/demo/datatables-demo.js"></script>
  <script type="text/javascript" src="<?php echo base_url('custom/js/classes.js'); ?>"></script>


</body>

</html>
