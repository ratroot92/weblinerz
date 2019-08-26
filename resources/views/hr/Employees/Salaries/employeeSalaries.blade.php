@extends('hr.hrMaster')





@section('content')





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
<button class="btn btn-secondary float-left"><i class=" text-white font-weight-bold fas fa-arrow-down mr-2" id="navigatable_btn_1"></i>Salaries </button>


<div class="table-responsive" id="table1">
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
                                    <?php //echo '<pre>'; print_r($resource->name); echo '</pre>'; die(); ?>
                                    @foreach ($resource->employeessalarydrafts as $b)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $resource->name }}</td>
                                            <td>{{ $resource->salary }}</td>
                                            <td>{{ $b->fine }} &emsp;</td>
                                            <td>{{ $b->status }}</td>
                                            <td>
                                                <a data-toggle="edit_sal" href="{{ url('/hr/hr_employee_salaries/edit_employeesalary/'.$b->id) }}"><img src="{{ asset('images/300-min.png') }}" alt=""></a>
                                                <a class="deleteRecord" data-id="{{ $b->id }}" href="{{ url('/hr/hr_employee_salaries/delete_employeesalary/'.$b->id) }}"><img src="{{ asset('images/400-min.png') }}" alt=""></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
</div>
    
</div>
</div>
@endsection

@push('footer')

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

    // btn2.addEventListener('click', function() {
    //     var div_2 = document.getElementById("navigatable_div_2");
    //     if (div_2.style.display === "none") {
    //         div_2.style.display = "block";
    //     } else {
    //         div_2.style.display = "none";
    //     }
    // });
    
</script>
@endpush