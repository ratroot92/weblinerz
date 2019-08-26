<div class="jumbotron">

<form id="addContractForm" action="/insertContract" method="post" >
    @csrf
	<div class="row form-group">

		<div class="col-md-6 col-sm-12 ">
			Name:
			<select class="form-control" id="name" name="name">
				<option>Select Employee Name</option>
			@foreach($employees as $a)
				<option value="{{$a->name}}">{{$a->name}}</option>
			@endforeach
			</select>

		</div>

		<div class="col-md-6 col-sm-12 ">
			Refernce ID:
			<input type="number" name="id" id="id" class="form-control" />

		</div>
	</div>




<div class="row form-group">

		<div class="col-md-6 col-sm-12 ">
			Employee Designation:
			<input type="text" name="designation" id="designation" class="form-control" />
		</div>

		<div class="col-md-6 col-sm-12 ">
			Employee Email:
			<input type="email" name="email" id="email" class="form-control" />

		</div>
	</div>


<div class="row form-group">
<label for="description">Description:</label>
<textarea name="description" id="description" cols="100" rows="15"></textarea>



</div>

 <div class="row">
     <div class="col-md-12 text-center">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" id="btnInsertContract" value="Save changes" class="btn btn-primary"/>
         </form>
     </div>
 </div>

</div>

