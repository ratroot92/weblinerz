@extends('hr.hrMaster')





@section('content')
<link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">




<div class="row">

  <div class="col-md-12">
    <nav aria-label="breadcrumb">
  <ul class="breadcrumb">
     <li class="breadcrumb-item"><a href="{{URL::to('hrHome')}}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeHome')}}">Employee</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeContract')}}">Contracts</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('hrEmployeeSalaries')}}">Salaries</a></li>
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
<a href="{{ url('/employeedocuments') }} " class="anchor" >
<div class="inner  " >
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold " >Applications</p>
</div>

</a>
</div>
</div><!-- end of card -->


<!-- start of card -->
<div class="col-md-3 col-xs-6 col-sm-12  text-center p-1">
<div class="bg-warning outer">
<a href="{{ url('/employeereports') }}" class="anchor">
<div class="inner  " >
<img src="{{ asset('images/21.png') }}" class="img_hr mt-4" alt="">
<p class="text-white font-weight-bold anchor">Reports</p>
</div>

</a>
</div>
</div><!-- end of card -->



</div>

<!-- end section cards -->

<div class="row">
<div class="col-md-12">
<div id="flash_message_success"></div>
@if (Session::has('flash_message_success'))  
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>{{ Session::get('flash_message_success') }}</p>
    </div>
@endif

<button class="btn btn-secondary float-left" id="navigatable_btn_1"><i class=" text-white font-weight-bold fas fa-arrow-down mr-2"></i>Application</button>

<a data-toggle="add_new_app" href="{{ url('/add_employee_documents_create') }}" class="btn btn-primary add_document_button">Add New Application</a>

<div class="table-responsive top_padd" id="navigatable_div_1">
  <table class="table table-striped" id="table1" style="padding-top: 16px;">
      <thead>
          <tr style="background-color: #b85197;">
              <th style="color: #fff;" scope="col">Sr</th>
              <th style="color: #fff;" scope="col">Name</th>
              <th style="color: #fff;" scope="col">Description</th>
              <th style="color: #fff;" scope="col">Status</th>
              <th style="color: #fff;" scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
      @php $i=1; @endphp
          @foreach ($employeesDocuments as $documents)             
                  <tr>
                      <th scope="row">{{ $i++ }}</th>
                      <td>{{ $documents->name }}</td>
                      <td>{{ $documents->description }}</td> 
                      <td>{{ $documents->status }}</td>
                      <td> 
                          <a data-toggle="edit_documents" href="{{ url('/editview/'.$documents->id) }}"><img src="{{ asset('images/300-min.png') }}" alt=""></a>
                          <a href="{{ url('/employeedocuments/'.$documents->id) }}"><img src="{{ asset('images/400-min.png') }}" alt=""></a>
                      
                      </td>
                  </tr>              
          @endforeach
      </tbody>
  </table>
</div>

</div>
</div>

<!-- Add Popup -->
<div class="modal fade" id="add_modal">
    <div class="modal-dialog modal-dialog-centered" id="add_modal" data="toggle" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Documents</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
​
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="edit_modal">
    <div class="modal-dialog modal-dialog-centered" id="edit_modal" data="toggle" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Documents </h4>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div id="div_table alert alert-danger"></div>
            <div class="modal-body" id="render_model">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //------------------------------------------------------
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

  //---------------------------------------------------------
  $(document).ready(function () {
        $(function () {
           
            $('#table1').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'scrollX'     : false,
                'scrollY'     : false,
                'autoWidth'   : true
            })
        })
    });
   
   //---------------------Edit form Modal Popup-----------------
    $(document).ready(function () {
        $(document).on('click','a[data-toggle=edit_documents]',function (event) {
            event.preventDefault();
            $('#edit_modal').find('.modal-body').load($(this).attr('href'));
            $('#edit_modal').modal('show');

        });
    });
    //---------------------Add form Modal Popup-----------------
    $(document).ready(function () {
        $(document).on('click','a[data-toggle=add_new_app]',function (e) {
            e.preventDefault();
            $('#add_modal').find('.modal-body').load($(this).attr('href'));
            $('#add_modal').modal('show');
        });
    });
</script>
@endsection
