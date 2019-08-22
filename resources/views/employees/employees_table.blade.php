<style type="text/css" media="screen">
	button{
background-color: white;
border: none;
}
#delete{
font-size: 16px;
color:red;
}
#edit{
font-size:16px;
color:blue;}
</style>

<div class="col-md-12">

 <table class="table border border-dark" id="employee_table" style="font-size:9px;">
                                        <thead class="thead-dark">
                                          <tr >
                                            <th scope="col">Employee ID</th>
                                            <th scope="col">Employee Name</th>
                                            <th scope="col">Employee Email</th>
                                            <th scope="col">Employee Password</th>
                                            <th scope="col">Employee Contract</th>
                                            <th scope="col">Employee Salary</th>
                                             <th scope="col">Joining Date </th>
                                            <th scope="col">Ending Date  </th>
											<th scope="col"> Operations </th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($employees  as $a)


                                            <tr class="p-0 m-0">
                                            <th scope="row">{{$a->id}}</th>
                                            <th scope="row">{{$a->name}}</th>
                                            <th scope="row">{{$a->email}}</th>
											<th scope="row">{{$a->password}}</th>
                                            <th scope="row">{{$a->contract}}</th>
                                            <th scope="row">{{$a->salary}}</th>
                                            <th scope="row">{{$a->start_date}}</th>
                                            <th scope="row">{{$a->end_date}}</th>
											<th scope="row"><button type="button"  id="edit" class="p-0 m-0 Edit" data-task="{{$a->id}}" Title="Edit" ><i class="fa fa-edit">
															</i></button>
															<button class="Delete p-0 m-0 ml-2" id="delete" type="button" data-task="{{$a->id}}" Title="Delete"><i class="fa fa-trash"></a></i>
															</th>







                                          </tr>
                                         @endforeach

                                        </tbody>
                                      </table>
</div>

