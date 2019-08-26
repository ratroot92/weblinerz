<div class="jumbotron">

<form id="editContractForm" action="/editContract" method="post" >
    @csrf
	<div class="row form-group">

		<div class="col-md-6 col-sm-12 ">
			Name:
			<input type="text" name="name" id="name" value="{{ $contract->name }}" class="form-control" />

		</div>

		<div class="col-md-6 col-sm-12 ">
			Refernce ID:
			<input type="number" name="id" id="id" value="{{ $contract->reference_id }}" class="form-control" readonly/>

		</div>
	</div>




<div class="row form-group">

		<div class="col-md-6 col-sm-12 ">
			Employee Designation:
			<input type="text" name="designation" id="designation" value="{{ $contract->employee_designation }}" class="form-control" />
		</div>

		<div class="col-md-6 col-sm-12 ">
			Employee Email:
			<input type="email" name="email" id="email" value="{{ $contract->email }}" class="form-control" />

		</div>
	</div>


<div class="row form-group">
<label for="description">Description:</label>
<textarea name="description" id="description" value="{{ $contract->description }}" cols="100" rows="15"></textarea>



</div>

 <div class="row">
     <div class="col-md-12 text-center">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" id="btnUpdateContract" value="Update changes" class="btn btn-primary"/>
         </form>
     </div>
 </div>

</div>

