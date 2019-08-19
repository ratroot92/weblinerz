<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR Portal | Salaries</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
                                                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
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
                                                    <img src="{{ asset('dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
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
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                page and may cause design problems
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
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>Salaries</span>
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
                <h1><small>Home / Dashboard / Employee / Salaries</small></h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua-one">
                            <div class="inner">
                                <!-- <h3></h3> -->
                                <img src="{{ asset('images/21.png') }}" class="img_hr" alt="">
                                <p class="carriers">Contracts</p>
                            </div>
                            <div class="icon">
                                <!-- <i class="ion ion-bag"></i> -->
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green-two">
                            <div class="inner">
                                <!-- <h3></h3> -->
                                <img src="{{ asset('images/22.png') }}" class="img_hr" alt="">
                                <p>Salaries</p>
                            </div>
                            <div class="icon">
                                <!-- <i class="ion ion-stats-bars"></i> -->
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow-three">
                            <div class="inner">
                                <!-- <h3></h3> -->
                                <img src="{{ asset('images/23.png') }}" class="img_hr" alt="">
                                <p>Complaints</p>
                            </div>
                            <div class="icon">
                                <!-- <i class="ion ion-person-add"></i> -->
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red-four">
                            <div class="inner">
                                <!-- <h3></h3> -->
                                <img src="{{ asset('images/24.png') }}" class="img_hr" alt="">
                                <p>Attendence</p>
                            </div>
                            <div class="icon">
                                <!-- <i class="ion ion-pie-graph"></i> -->
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="nav-tabs-custom">
                            <!-- Tabs within a box -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                        <button type="submit" class="btn btn-secondary" id="navigatable_btn_1"><i class="fa fa-caret-down"></i>&nbsp; &nbsp; Salaries</button>
                        <div id="navigatable_div_1" style="padding-top: 15px !important;">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    <!-- <button type="submit" class="btn btn-secondary"  data-toggle="dropdown">&nbsp; &nbsp; Months &nbsp; &nbsp;<i class="fa fa-caret-down"></i></button> -->
                                    <div class="form-group">
                                        <!-- <label for="sel1">Select list (select one):</label> -->
                                        <select class="form-control" id="sel1" style="border: none; box-shadow: none;">
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                            <option>November</option>
                                            <option>December</option>
                                        </select>
                                    </div>
                                </label>
                                &emsp;&emsp;&emsp;&emsp;&emsp;
                                <label>
                                    <input type="checkbox"> Salaries Cleaned
                                </label>
                                &emsp;&emsp;&emsp;&emsp;&emsp;
                                <label>
                                    <input type="checkbox"> Salaries Pending
                                </label>
                                &emsp;&emsp;&emsp;&emsp;&emsp;
                                <!--  <label>
                <input type="checkbox"> Old Employee
              </label> -->
                                <button type="button" class="btn btn-primary" onclick="openForm()">Add Draft</button>
                            </div>
                            <div class="form-popup" id="myForm">
                                <form action="#" class="form-container">
                                    <select class="form-control" id="sel1" style="border: none; box-shadow: none; border-bottom: 2px solid #1a1a1a5e !important; margin-bottom: 22px;">
                                        <option>January</option>
                                    </select>
                                    <input type="text" placeholder="Salary" name="salary" required>
                                    <input type="text" placeholder="Fine" name="fine" required>
                                    <input type="text" placeholder="Received" name="received" required>
                                    <input type="text" placeholder="Pending" name="pending" required>
                                    <label for="Comments">Comments</label><br>
                                    <textarea name="comments" rows="3" style="margin: 0px; width: 280px; height: 144px;"></textarea>
                                    <button type="button" class="btn cancel" style="position: relative; top: 20px; left: 30px;" onclick="closeForm()">Close</button>
                                    &emsp;&emsp;
                                    <button type="button" class="btn btn-success" style="position: relative; background-color: #c879af !important; top: 20px; left: 20px;">Add</button>
                                </form>
                            </div>
                            <table class="table table-striped" id="table1" style="padding-top: 16px;">
                                <thead>
                                    <tr style="background-color: #b85197;">
                                        <th style="color: #fff;" scope="col">Sr</th>
                                        <th style="color: #fff;" scope="col">Assign To</th>
                                        <th style="color: #fff;" scope="col">Salary</th>
                                        <th style="color: #fff;" scope="col">Fine</th>
                                        <th style="color: #fff;" scope="col">status</th>
                                        <th style="color: #fff;" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Waqas </td>
                                        <td>Rs 25000 &emsp;</td>
                                        <td>85000</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="#"><img src="{{ asset('images/200-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/300-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/400-min.png') }}" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Rasheed Ahmed</td>
                                        <td>Rs 25000 &emsp;</td>
                                        <td>6500</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="#"><img src="{{ asset('images/200-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/300-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/400-min.png') }}" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>ALi Ahmed</td>
                                        <td>Rs 25000 &emsp;</td>
                                        <td>75000</td>
                                        <td>Inactive</td>
                                        <td>
                                            <a href="#"><img src="{{ asset('images/200-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/300-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/400-min.png') }}" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Usman khan</td>
                                        <td>Rs 25000 &emsp;</td>
                                        <td>65400</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="#"><img src="{{ asset('images/200-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/300-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/400-min.png') }}" alt=""></a>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Rahim Khan</td>
                                        <td>Rs 25600 &emsp;</td>
                                        <td>25000</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="#"><img src="{{ asset('images/200-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/300-min.png') }}" alt=""></a>
                                            <a href="#"><img src="{{ asset('images/400-min.png') }}" alt=""></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Chat box -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
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
    <script>
    var div1 = document.getElementById("navigatable_div_1");
    var div2 = document.getElementById("navigatable_div_2");
    var btn1 = document.getElementById("navigatable_btn_1");
    var btn2 = document.getElementById("navigatable_btn_2");

    btn1.addEventListener('click', function() {
        var div_1 = document.getElementById("navigatable_div_1");
        if (div_1.style.display === "none") {
            div_1.style.display = "block";
        } else {
            div_1.style.display = "none";
        }
    });

    btn2.addEventListener('click', function() {
        var div_2 = document.getElementById("navigatable_div_2");
        if (div_2.style.display === "none") {
            div_2.style.display = "block";
        } else {
            div_2.style.display = "none";
        }
    });

    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {  
$(function () {
  $('#table1').DataTable()
  $('#table2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  })
})
});

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>
