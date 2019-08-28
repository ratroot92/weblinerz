
 <!-- Modal -->
<div class="modal fade" id="employee_edit_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Employee ({{$employee->name}})</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <div class="p-0 m-0 alert alert-danger font-weight-bold " id="editEmployeeValidation">

</div> 

<form enctype="multipart/form-data" id="edit_employee_form" action="{{route('edit_employee_ajax')}}"  >
 @csrf
      <div class="modal-body">
       <div class="container-fluid">

           <div class="row">
               <div class="col-md-12">


<span class="font-weight-bold ">Employee ID</span>
<input class="inp col-md-12"  type="number" value="{{$employee->id}}"  id="id"   name="id"  readonly/>
@if($errors->has('id'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;" >&spades;{{ $errors->first('id') }}</div>
@endif

</div>
</div>


<div class="row">

<div class="col-md-12">

<span class="font-weight-bold ">Name</span>
<input class="inp col-md-12" type="text" value="{{$employee->name}}" id="name" minlength="3" maxlength="20" pattern="^[A-Za-z -]+$" name="name"  required/>
@if($errors->has('name'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('name') }}</div>
@endif
</div>

<div class="col-md-12">
<span class="font-weight-bold  " >Email</span>
<input class="inp col-md-12" type="email" value="{{$employee->email}}" maxlength="25" id="email" name="email"  required/>
@if($errors->has('email'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('email') }}</div>
@endif
</div>



<div class="col-md-12">
        <span class="font-weight-bold " >Password</span>
        <input class="inp col-md-12" type="password" value="{{$employee->password}}"  id="password" min="8" max="14" name="password" minlength="8" maxlength="14"  required/>
        @if($errors->has('password'))
<div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('password') }}</div>
@endif
</div>





<div class="col-md-12 mt-3 d-flex flex-row justify-content-between ">
  <!-- Material inline 1 -->
<div class="form-check form-check-inline" >
  <input type="radio" class="form-check-input" id="status" name="status" value="Contract" {{ ($employee->contract=="Contract")? "checked" : "" }}  required/>
  <label class="form-check-label font-weight-bold" for="materialInline1">Contact</label>

</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline" >
  <input type="radio" class="form-check-input" id="status" name="status" value="Probabtion"  {{ ($employee->contract=="Probabtion")? "checked" : "" }} >
  <label class="form-check-label font-weight-bold" for="materialInline2">Probabtion</label>
</div>


</div>


<div class="col-md-12 mt-3 ">

 <div class="row">

<div class="col-md-6">
<span class="font-weight-bold " >Duration To: </span>
  <input class="inp col-md-12" type="date" value="{{$employee->start_date}}" id="start_date" name="start_date"  required/>
  @if($errors->has('start_date'))
  <div class=" alert alert-danger  font-weight-bold  m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('start_date') }}</div>
  @endif
</div>


<div class="col-md-6">
  <span class="font-weight-bold  " >Duration From: </span>
  <input class="inp col-md-12" type="date" value="{{$employee->end_date}}" id="end_date" name="end_date"  required/>
  @if($errors->has('end_date'))
  <div class=" alert alert-danger  font-weight-bold m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('end_date') }}</div>
  @endif
</div>
</div>
</div>





  <div class="col-md-12 mt-3">
<span class="font-weight-bold  " >Salary</span>
<input class="inp col-md-12" type="number" value="{{$employee->salary}}" min="1" max="100000" id="e_salary" name="e_salary"  required/>
@if($errors->has('e_salary'))
  <div class=" alert alert-danger  font-weight-bold m-0 p-0" style="font-size:11px;">&spades;{{ $errors->first('e_salary') }}</div>
  @endif
</div>




<div class="col-md-12 mt-3">
<div class="row">
<div class="col-md-6 text-center">
<button type="button" class="btn" id="closeBtn" style="background-color:#ff4f4e;">Close</button>
</div>

<div class="col-md-6 text-center">
<!-- style="background-color:#a31b78 " -->
 <button class="btn btn-success " id="" type="submit">Update</button>

 </div>
 </div>
 </div>
</form>
</div>
</div>
</div>
     

