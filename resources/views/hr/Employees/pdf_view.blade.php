<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body style="border:1 dotted black;">

	
		
			<center><p style="font-size:30px;">Weblinerz Employees</p></center>
			
		
		

<div id="div1" >
	
 <table class="table  table-striped " id="employee_table"  style="font-size: 11px;" >
                                        <thead class=""  style="border:1px solid black;">
                                          <tr style="background-color: #b85197;">
                                            <th style="color:white;" scope="col">Employee ID</th>
                                            <th style="color:white;" scope="col">Employee Name</th>
                                            <th style="color:white;" scope="col">Employee Email</th>
                                            <th style="color:white;" scope="col">Employee Password</th>
                                            <th style="color:white;" scope="col">Employee Contract</th>
                                            <th style="color:white;" scope="col">Employee Salary</th>
                                             <th style="color:white;" scope="col">Joining Date </th>
                                            <th style="color:white;" scope="col">Ending Date  </th>
                                          

                                          </tr>
                                        </thead>
                                        <tbody style="border:1px solid black;">
                                        @foreach ($employees  as $a)

                                          

<tr  style="border:1px solid black;">
<th scope="row">{{$a->id}}</th>
<th scope="row">{{$a->name}}</th>
<th scope="row">{{$a->email}}</th>
<th scope="row">{{$a->password}}</th>
<th scope="row">{{$a->contract}}</th>
<th scope="row">{{$a->salary}}</th>
<th scope="row">{{$a->start_date}}</th>
<th scope="row">{{$a->end_date}}</th>




 </tr>
                                         @endforeach

                                        </tbody>
                                      </table>
</div>	
</body>
</html>