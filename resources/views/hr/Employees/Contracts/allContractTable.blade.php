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

.inp {
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid #03a8f45e;
    padding: 5px 15px;
    outline: none;
 }

[placeholder]:focus::-webkit-input-placeholder {
    transition: text-indent 0.4s 0.4s ease;
    text-indent: -100%;
    opacity: 1;
 }


.drag_files{
  border:1px dotted black;
  height: 130px;
  border-radius:3px;
}
.customDropdown{
  position: absolute;
}

#employee_dropdown{
  position: relative;
  top: 100%; /* Bottom of button */
  right: 0;
  margin-left: 0px; /* More to the left */
  margin-top: 82px;
  border-radius: 0px;

}

</style>

<div class="col-md-12 p-1 m-0" id="btn" >
<button type="button" class="btn btn-secondary float-left font-weight-bold"> <i class=" text-white font-weight-bold fas fa-arrow-down mr-2"></i>All Contracts</button>








</div>
<div id="div1" class="table-responsive p-1">

 <table class="table  table-striped " id="contract_table"  style="border:1px solid black;font-size: 11px;" >
                                        <thead class="">
                                          <tr style="background-color: #b85197;">
                                            <th style="color:white;" scope="col">Contract ID</th>
                                            <th style="color:white;" scope="col">Employee ID</th>
                                            <th style="color:white;" scope="col">Employee Name</th>
                                            <th style="color:white;" scope="col">Employee Email</th>
                                            <th style="color:white;" scope="col">Employee Designation</th>
                                             <th style="color:white;" scope="col">Start Date </th>
                                            <th style="color:white;" scope="col">End Date  </th>
                                            <th style="color:white;" scope="col">Contract Description</th>
											<th style="color:white;" scope="col"> Operations </th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($contracts  as $a)



<tr class="p-0 m-0">
<th scope="row">{{$a->id}}</th>
<th scope="row">{{$a->reference_id}}</th>
<th scope="row">{{$a->name}}</th>
<th scope="row">{{$a->email}}</th>
<th scope="row">{{$a->designation}}</th>
<th scope="row">{{$a->start_date}}</th>
<th scope="row">{{$a->end_date}}</th>
<th scope="row">{{$a->description}}</th>
<th scope="row">
<button type="button"  id="edit" class="p-0 m-0 Edit" data-task="{{$a->id}}" Title="Edit" >
<img src="{{ asset('images/300-min.png') }}" alt="">
</button>
<button class="Delete p-0 m-0 ml-2" id="delete" type="button" data-task="{{$a->id}}" Title="Delete"></button>
<img src="{{ asset('images/400-min.png') }}" alt=""></a>
</th>







                                          </tr>
                                         @endforeach

                                        </tbody>
                                      </table>
</div>
</div>
<script type="text/javascript">
    var div1 = document.getElementById("div1");
    var btn1 = document.getElementById("btn");

    btn1.addEventListener('click', function() {
        var div_1 = document.getElementById("div1");
        if (div_1.style.display === "none") {
            div_1.style.display = "block";
        } else {
            div_1.style.display = "none";
        }
    });



    </script>



