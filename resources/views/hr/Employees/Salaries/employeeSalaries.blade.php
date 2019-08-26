@extends('hr.hrMaster')

@section('content')

<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">


<div class="row mt-1">
  
  <div class="col-md-12">
    <nav aria-label="breadcrumb">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('hrDasboard')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeHome')}}">Employee</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeContract')}}">Contracts</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeSalaries')}}">Salries</a></li>
 <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeComplaints')}}">Complaints</a></li> <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeAttendence')}}">Attendence</a></li>      
  </ul>
</nav>
  </div>
</div>




<!-- section of cards -->

<div class="row p-1">
<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-dark outer">
<a href="{{ url('/hrEmployeeHome') }} " class="anchor" >
<div class="inner  " >                                            
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold " >Contracts</p> 
</div>                  

</a>
</div>
</div><!-- end of card -->


<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-warning outer">
<a href="{{ url('/hrEmployeeSalaries') }}" class="anchor">
<div class="inner  " >                                            
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Salaries</p> 
</div>                  

</a>
</div>
</div><!-- end of card -->


<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-primary outer">
<a href="{{ url('/hrEmployeeComplaints') }}" class="anchor">
<div class="inner  " >                                            
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Complaints</p> 
</div>                  

</a>
</div>
</div><!-- end of card -->



<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-danger outer">
<a href="{{ url('/hrEmployeeAttendence') }}" class="anchor">
<div class="inner  " >                                            
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Attendence</p> 
</div>                  

</a>
</div>
</div><!-- end of card -->









</div>

<!-- end section cards -->  


  
<div class="row mt-5">
<div class="col-md-12">
 <div id="flash_message_success"></div>
<button class="btn btn-secondary float-left" id="navigatable_btn_1"><i class=" text-white font-weight-bold fas fa-arrow-down mr-2" ></i>Salaries </button>
<br>
    <div class="row" id="msg"></div>
    <div class="row" id="div_table"></div>

<div class="table-responsive" id="navigatable_div_1">
                    <div class="checkbox">
                    <label>
                        <input type="checkbox" class="chek">
                        <!-- <button type="submit" class="btn btn-secondary"  data-toggle="dropdown">&nbsp; &nbsp; Months &nbsp; &nbsp;<i class="fa fa-caret-down"></i></button> -->
                        <div class="form-group">
                            <!-- <label for="sel1">Select list (select one):</label> -->
                            <select class="form-control drop_select" id="sel1" style="border: none; box-shadow: none;">
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
                        <input type="checkbox" > Salaries Cleaned
                    </label>
                    &emsp;&emsp;&emsp;&emsp;&emsp;
                    <label>
                        <input type="checkbox"> Salaries Pending
                    </label>                            &emsp;&emsp;&emsp;&emsp;&emsp;

                    <button type="button" class="btn btn-primary" onclick="openForm()">Add Draft</button>
                    </div>
                     <div class="form-popup" id="myForm">
                            <form name="addEmployeesSalaries" id="addEmployeesSalaries" class="form-container">
                                @csrf
                                <div class="form-group">

                                    <input type="text" class="form-control pull-right" id="date" name="date" placeholder="Date">
                                </div>
                                <div class="form-group">

                                    <select class="form-control" id="name" name="emp_id" style="border: none; box-shadow: none; border-bottom: 2px solid #1a1a1a5e !important; margin-bottom: 22px;">
                                        <option>Please Select</option>
                                        @foreach($salariesName as $salary)
                                            <option id="salary_id"  value="{{ $salary->id }}">{{ $salary->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">

                                    <input type="text" id="salary" class="salary" placeholder="Salary" name="salary" >
                                </div>
                                <div class="form-group">

                                    <input type="text" id="fine" name="fine" placeholder="Fine" >
                                </div>
                                <div class="form-group">

                                    <input type="text" id="total_sal"  name="total_sal" placeholder="Total Salary" >
                                </div>
                                <div class="form-group">

                                    <input type="text" id="receive" name="receive" placeholder="Received">
                                </div>
                                <div class="form-group">

                                    <input type="text" id="pending" name="pending" value="" placeholder="Pending" name="pending">
                                </div>
                                <div class="form-group">

                                    <label for="Comments">Comments</label><br>
                                    <textarea name="comments" id="comments" rows="3" style="margin: 0px; width: 280px; height: 110px;"></textarea>

                                </div>
                                <button type="button" class="btn cancel" style="position: relative; top: 20px; left: 30px;" onclick="closeForm()">Close</button>
                                &emsp;&emsp;
                                <button type="submit" class="btn btn-success" style="position: relative; background-color: #c879af !important; top: 20px; left: 20px;">Add</button>

                            </form>
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
                            @php $i=1; @endphp
                            @foreach ($salariesdata as $resource)
                                @foreach ($resource->employeessalarydrafts as $b)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $resource->name }}</td>
                                        <td>{{ $resource->salary }}</td>
                                        <td>{{ $b->fine }} &emsp;</td>
                                        <td>{{ $b->status }}</td>
                                        <td>
                                            <button style="border: none; background-color: none !important;" type="button" data-task="{{ $b->id }}" data-toggle="modal" data-target="#edit_modal1" id="editBtn" ><img src="{{ asset('images/300-min.png') }}" alt=""></button>

                                            <!-- <button type="button" data-task="{{ $b->id }}" id="deleteBtn"><img src="{{ asset('images/400-min.png') }}" alt=""></a></button> -->
                                             <a href="{{ url('/hrEmployeeSalaries/'.$b->id) }}"><img src="{{ asset('images/400-min.png') }}" alt=""></a>
                                        
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
</div>
    
</div>
</div>


    <!-- Modal -->
    <div class="modal fade" id="edit_modal1">
        <div class="modal-dialog modal-dialog-centered" id="edit_modal" data="toggle" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Salary </h4>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body" id="render_model">
                </div>
            </div>
        </div>
    </div>
    <!-- bootstrap datepicker -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

    <script type="text/javascript">
    //------------------------------------
  $(document).ready(function(){  
    var btn1 = document.getElementById("navigatable_btn_1");
    btn1.addEventListener('click', function() {  
        var div_1 = document.getElementById("navigatable_div_1");
        if (div_1.style.display === "none") {
            div_1.style.display = "block";
        } else {
            div_1.style.display = "none";
        }
    });

  });

  //-------------------------------------------
  
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
    //----------------------------------------
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
    //------------------------------------------
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
    //-------------------------------------------
    $('#addEmployeesSalaries').submit(function () {
       
        var str = '';
        event.preventDefault();
        $.ajax({
            url         : '/add_employee_salaries',
            type        : 'post',
            data        : $('#addEmployeesSalaries').serialize(),
            dataType    : 'json',
            success     : function ($result) {
                console.log($result);
                str = '<div class="alert alert-success alert-dismissable">Record added Successfully<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
                $('#flash_message_success').html(str);
                $('#flash_message_success').fadeOut(15000);
                $('#mysection').empty();
                $('#mysection').load('/hrEmployeeSalaries');
                //$('#add_modal').modal('toggle');
            },
            error        : function (result) {
            }
        })
    });
    //---------------------------------------------------------
    
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
    //-------------------------------------------------------------
    // $(document).ready(function () {
    //     $(document).on('click','a[data-toggle=edit_sal]',function (event) {
    //         event.preventDefault();
    //         $('#edit_modal').find('.modal-body').load($(this).attr('href'));
    //         $('#edit_modal').modal('show');

    //     });
    // });



    $(document).ready(function(){
        $('#editBtn').on('click',function(){
        var id=$(this).data('task');
    //alert(id);
        $.get('{{ URL::to("/editview") }}/'+id,function(data){
        $('#render_model').empty().append(data);
        ('#edit_modal1').modal('show');
            });
        });
    });

    $(document).ready(function(){
        $('#deleteBtn').on('click',function(){
        var id=$(this).data('task');
        //alert(id);
        $.get('{{ URL::to("/deleteview") }}/'+id,function(data){
        //$('#msg').show();
        $('#msg').html("Record has Been Sucessfully Deleted");
        $('#div_table').empty().append(data);
            });
        });
    });


</script>
@endsection
