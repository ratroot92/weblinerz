<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR Portal | Add Contracts</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="{{ asset('images/wz logo-new.png') }}" width="100" height="80" style="opacity: 1;" alt=""></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="{{ asset('images/wz logo-new.png') }}" width="100" height="80" style="opacity: 1;" alt=""></span>
                <img class="logo" src="{{ asset('images/wz logo-new.png') }}" width="100" height="80" style="opacity: 1;">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <!-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> -->
                <span class="portal">HR Portal</span>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                                <span class="hidden-xs">Faisal</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image" style="padding-left: 78px; padding-top: 20px !important;">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info" style="padding-top: 76px !important;">
                        <p>Fasial Shazad</p>

                    </div>
                </div>
                <!-- search form -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="active treeview">
                        <a href="index.html">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Employess</span>
                            <span class="pull-right-container">
              
            </span>
                        </a>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Carriers</span>
                            <span class="pull-right-container">
              
            </span>
                        </a>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Expenses</span>
                            <span class="pull-right-container">
              
            </span>
                        </a>

                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>Reports</span>
                            <span class="pull-right-container">
              
            </span>
                        </a>

                    </li>

                    <li class="treeview">
                        <a href="contracts.html">
                            <i class="fa fa-file"></i>
                            <span>Contracts</span>
                            <span class="pull-right-container">
              
            </span>
                        </a>

                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1><small>Home / Dashboard / Employee / Contracts / Add Contracts</small></h1>

            </section>

            <!-- Main content -->
            <section class="content">


<div class="jumbotron shadow" style="padding: 30px;">
	<h3 class="headingone">New Contract Details</h3>
                <form class="px-4 py-3">
                    <div class="container-fluid">
<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<!-- <span class="font-weight-bold ">Name</span> -->
				<input class="inp col-md-12" type="text" placeholder="Name" id="e_name" name="e_name" required/>
			</div>
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<!-- <span class="font-weight-bold ">Duration</span> -->
				<!-- <input class="inp col-md-12" type="text" placeholder="Duration" id="e_name" name="e_name" required/> -->

                <div class="form-group">
                <!-- <label for="sel1">Select list (select one):</label> -->
                    <select class="form-control" id="sel1" style="border: none; border-bottom: 1px solid; box-shadow: none;">
                        <option>3 Months</option>
                        <option>6 months</option>
                        <option>9 months</option>
                        <option>12 Months</option>
                    </select>
                </div>
			</div>
		</div>
	</div>
</div>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<!-- <span class="font-weight-bold ">Salary</span> -->
				<input class="inp col-md-12" type="text"  id="e_name" name="e_name" placeholder="Salary" required/>
			</div>
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<!-- <span class="font-weight-bold ">Designation</span> -->
				<!-- <input class="inp col-md-12" type="text"  id="e_name" name="e_name" placeholder="Designation" required/> -->
                <div class="form-group">
                <!-- <label for="sel1">Select list (select one):</label> -->
                     <select class="form-control" id="sel1" style="border: none; border-bottom: 1px solid; box-shadow: none;">
                        <option>PHP Developer</option>
                        <option>Java Developer</option>
                        <option>Node JS Developer</option>
                        <option>Python Developer</option>
                    </select>
                </div>
			</div>
		</div>
	</div>
</div>
        

<div class="row " style="margin-top: 20px;">
	
	<div class="col-md-12  " style="padding-top: 20px;">
		<div class="row my-auto">
                <span class="font-weight-bold ">Description</span>
			<div class="col-md-12 text-center mt-4">
				<textarea name="" class="col-md-12" rows="10"></textarea>
			</div>
		</div>
	</div>
</div>



<div class="row" style="margin-top:20px; ">
	
	<div class="col-md-12 " style="align-items: center">
		<button type="button" class="btn btn-primary-done">DONE</button>
	</div>
</div>



                            











                            </div>
                        </div>
                    </div>

                </form>

</div>
                
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
    <!-- jQuery UI 1.11.4 -->
    <!-- <script src="bower_components/jquery-ui/jquery-ui.min.js"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- Sparklin{{ asset('e -->
    <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>

</body>

</html>