<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HR Portal | Salaries</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
</head>

<body class="hold-transition skin-blue sidebar-mini" id="mysection">
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
                <h1><small><a href="{{ url('/loginAdmin') }}">Home</a></small></h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <a href="{{ url('/hr/hr_employee_contracts') }}">
                        <div class="small-box bg-aqua-one">
                            <div class="inner">                                
                                <img src="{{ asset('images/21.png') }}" class="img_hr" alt="">
                                <p class="carriers">Employees</p>
                            </div>                            
                        </div>
                        </a>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green-two">
                            <div class="inner">                                
                                <img src="{{ asset('images/22.png') }}" class="img_hr" alt="">
                                <p>Reports</p>
                            </div>
                           
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow-three">
                            <div class="inner">                                
                                <img src="{{ asset('images/23.png') }}" class="img_hr" alt="">
                                <p>Carriers</p>
                            </div>
                           
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red-four">
                            <div class="inner">                               
                                <img src="{{ asset('images/24.png') }}" class="img_hr" alt="">
                                <p>Expense</p>
                            </div>
                            
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-lg-12">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="nav-tabs-custom">
                            <!-- Tabs within a box -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                       
                           <div id="flash_message_success"></div>
                    
       
                       
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

                          
                            <table class="table table-striped" id="table1" style="padding-top: 16px;">
                                <thead>
                                    <tr style="background-color: #b85197;">
                                        <th style="color: #fff;" scope="col">Sr</th>
                                        <th style="color: #fff;" scope="col">Name</th>
                                        <th style="color: #fff;" scope="col">Salary</th>
                                        <th style="color: #fff;" scope="col">Fine</th>
                                        <th style="color: #fff;" scope="col">status</th>
                                        <th style="color: #fff;" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
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

    <script type="text/javascript">
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
    <!-- bootstrap datepicker -->
    <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    
<script type="text/javascript">
//----------------------------------------

// $(document).on('click','a[data-toggle=del_sal',function (e) {
//        e.preventDefault();
//        var str;
//        $.ajax({
//            url         : $(this).attr('href'),
//            type        : 'get',
//            dataType    : 'json',
//            success     : function ($result) {
//                 console.log($result);
//                 $('#termsrow').html(str);
//            },
//            error        : function (result) {
//            }
//        })
//    }); 


//----------------------------------------
    $('#name').click(function(event){  
    event.preventDefault();
    var name = $('#name').val();   

     $.ajax({
              url : '/getsalary',
              type: 'get',
              data : { 'name' : name },
              dataType: 'json',
               success: function(response){ 
               $('#salary').val(response);      
            
                }, error:function(e){
                        console.log(e);
                        }
            });

        });

//---------------------------------------
    $('#fine').change(function(event){  
    event.preventDefault();
   
        var salary = parseInt($('#salary').val());
        var fine = parseInt($('#fine').val()); 
        var total =  salary - fine;
        $('#total_sal').val(total);
        
    });


//-----------------------------------------
    $('#receive').change(function(event){  
    event.preventDefault();   
        var total = parseInt($('#total_sal').val());
        var receive = parseInt($('#receive').val());  
        var pending =  total - receive;
        $('#pending').val(pending);

    });

//--------------------------------------

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

//---------------------------------------------

$('#addEmployeesSalaries').submit(function () {
    //console.log('420');
    //alert('first');
       var str = '';
       event.preventDefault();
       $.ajax({
           url         : '/hr/add_employee_salaries',
           type        : 'post',
           data        : $('#addEmployeesSalaries').serialize(),
           dataType    : 'json',
           success     : function ($result) {
            console.log($result);
            str = '<div class="alert alert-success alert-dismissable">Added successfully<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
            $('#flash_message_success').html(str);
            $('#flash_message_success').fadeOut(15000);
            $('#mysection').empty();
            $('#mysection').load('/hr/hr_employee_salaries');
               //$('#add_modal').modal('toggle');
           },
           error        : function (result) {
           }
       })
   });

//------------------------------------------------------------
$(document).on('click','a[data-toggle=edit_sal]',function (event) {
   event.preventDefault();
   $('#exampleModal').find('.modal-body').load($(this).attr('href'));
   $('#exampleModal').modal('show');
});

//-------------------------------------------------------------
$(".deleteRecord").click(function(){
    var id = $(this).data("id");
    //alert(id);
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "/hr/hr_employee_salaries/delete_employeesalary/"+id,
        type: 'DELETE',
        datatype : 'json',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (result){
            console.log("it Works");
            $('#mysection').empty();
            $('#mysection').load('/hr/hr_employee_salaries');
        },
        error: function (result) {
            console.log('in error');
        }
    });
   
});

//-----------------------------------------------------------
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
//-----------------------------------------------------------
//Date picker
$('#date').datepicker({
    autoclose: true
})
</script>
</body>
</html>
