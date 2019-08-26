<div class="jumbotron">
<form >
	<div class="row form-group">

		<div class="col-md-6 col-sm-12 ">
			Name:
			<select class="form-control" id="name">
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
			Refernce ID:
			<input type="number" name="" class="form-control" />

		</div>
	</div>


<div class="row form-group">
<label for="">Description:</label>
<textarea name="description" id="description" cols="100" rows="15"></textarea>



</div>
</form>
</div>

