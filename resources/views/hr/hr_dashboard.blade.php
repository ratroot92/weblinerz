<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebLinerz</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <script src="js/app.js" type="text/javascript" charset="utf-8" async defer></script>
               <script src="js/custom.js" type="text/javascript" charset="utf-8" async defer></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">


<style type="text/css" media="screen">
  .circle{
    border-radius: 50%;
width: 50px;
height:40px;
 border: 1px solid black;
    border-radius: 100px;
   background-image: url('../images/profile.png' );
        background-repeat: no-repeat;
         background-size:cover;
  }

  .circle_sidebar{
border-radius: 50%;
width: 50%;
height:80px;
border: 1px solid white !important;
 background-image: url('../images/profile.png' );
        background-repeat: no-repeat;
         background-size:cover;
        
       


  }
  .custom_badge{
border-radius: 3px;
  }



  </style>
  </head>

<body class="container-fluid">
  <!-- start of row -->

  <div class="row  h-100 border-warning border">
   <div class="col-md-2 my-auto">
     <img class="logo" src="{{url('../images/wz logo-new.png' )}}" width="130" height="80" style="opacity: 1;">
   </div>




   <div class="col-md-6 my-auto  " >
     <p class="text-dark font-weight-bold my-auto" style="font-weight: bolder;font-size:20px;">HR PORTAL</p>
   </div>

  




   <div class="col-md-4 text-center  my-auto">
    <div class="row " >
      <div class="col-md-6 text-center  my-auto">
    <i class="fas fa-envelope-open-text " style="font-size: 30px;"></i>
     <i class="fas fa-bell ml-3" style="font-size: 30px;"></i>
     <i class="fas fa-users ml-3" style="font-size: 30px;"></i>
      </div>
      <div class="col-md-6 text-center  d-flex flex-row my-auto">

        <div class="circle border border-dark">
         
        </div>

        <div class="dropdown show ml-2 mt-1">
  <a class="btn btn-sm btn-outline-primary dropdown-toggle"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Fisal Shehzad
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Dashboard</a>
    <a class="dropdown-item" href="#">Security</a>
  </div>
</div>
      </div>
    </div>
     

   </div>



  </div>
  <!-- end of row -->

  <div class="row">
    <!-- start of side bar -->
    <div class="col-md-2 bg-dark ">
      <!-- start of row 1-->
     <div class="row">
       <div class="col-md-12 ">
         <div class="row pt-3">
           <div class="col-md-12 d-flex flex-row justify-content-center text-center">
              <div class="circle_sidebar">
        
      </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end of row1 -->


       <!-- start of row2 -->
      <div class="row">
        <div class="col-md-12 text-center">
           <p class="font-weight-bold text-white text-center">Faisal Shehzad</p>
        </div>
       
      </div>
       <!-- end of row2 -->
<i class="fas fa-file-spreadsheet"></i>

      <div class="row" >
        <div class="col-md-12 m-0 p-1">
          <ul class="nav  d-flex flex-column m-0 p-0">

            <!-- start of tabs -->
            <li class=" m-0 pt-1 pb-2 pl-0 pr-0" style="width:100%;">
              <a class="nav-link text-white font-weight-bold m-0 p-0" href="#" title="" style="font-size: 16px;">
                <i class="fas fa-home font-weight-bold text-white p-2 mr-3 m-0 p-0 "></i>
                Dashboard
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 " ></i></i></a> </li>
            <!-- end of tabs -->


             <!-- start of tabs -->
            <li class=" m-0 mt-1 p-0" style="width:100%;">
              <a class="nav-link text-white font-weight-bold m-0 p-0" href="#" title="" style="font-size: 16px;">
                <i class="fas fa-male font-weight-bold text-white p-2 mr-3 m-0 p-0 "></i>
                Employees 
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 pr-1 " style="float: right;" ></i></i></a> </li>
            <!-- end of tabs -->



             <!-- start of tabs -->
            <li class=" m-0 mt-1 p-0" style="width:100%;">
              <a class="nav-link text-white font-weight-bold m-0 p-0" href="#" title="" style="font-size: 16px;">
                <i class="fab fa-angular font-weight-bold text-white p-2 mr-3 m-0 p-0 "></i>
                Carreers
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 pr-1 " style="float: right;"></i></i></a> </li>
            <!-- end of tabs -->

<i class=""></i>

             <!-- start of tabs -->
            <li class=" m-0 mt-1 p-0" style="width:100%;">
              <a class="nav-link text-white font-weight-bold m-0 p-0" href="#" title="" style="font-size: 16px;">
                <i class="far fa-file-excel font-weight-bold text-white p-2 mr-3 m-0 p-0 "></i>
                Expense
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 pr-1 " style="float: right;"></i></i></a> </li>
            <!-- end of tabs -->


             <!-- start of tabs -->
            <li class="  m-0 mt-1 p-0" style="width:100%;">
              <a class="nav-link text-white font-weight-bold m-0 p-0" href="#" title="" style="font-size: 16px;">
                <i class="fas fa-american-sign-language-interpreting font-weight-bold text-white p-2 mr-3 m-0 p-0 "></i>
                Reports
                <i class="fas fa-sort-down text-white font-weight-bold ml-5 m-0 p-0 pr-1 " style="float: right;""></i></i></a> </li>
            <!-- end of tabs -->
           
          </ul>
        </div>
      </div>
    </div>

    <!-- end of side bar -->

    <!-- start of display page -->
    <div class="col-md-10">
    
      <div class="row">  <!-- start of row 1-->
        <div class="col-md-12 pt-3 pb-3">
         <p class="text-dark font-weight-bold my-auto" style="font-weight: bold;"> HOME / DASHBOARD</p>  
          </div>           
          </div><!-- end of row 1-->

          <div class="row p-2   border border-dark">

            <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-danger custom_badge text-center">
                 <img class="logo " src="{{url('../icons/1.png' )}}" width="100" height="80" style="opacity: 1;">
               <p class="font-weight-bold text-white">Emoployees</p>
             </div>
            </div>
          </div>



              <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-primary custom_badge text-center">
                <img class="logo " src="{{url('../icons/2.png' )}}" width="100" height="80" style="opacity: 1;">
               <p class="font-weight-bold text-white">Carriers</p>
             </div>
            </div>
          </div>



 <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-warning custom_badge text-center">
                <img class="logo " src="{{url('../icons/3.png' )}}" width="100" height="80" style="opacity: 1;">
               <p class="font-weight-bold text-white">Expense</p>
             </div>
            </div>
          </div>



 <div class="col-md-3  ">
             <div class="row p-1 ">
               <div class="col-md-12 bg-secondary custom_badge text-center">
                <img class="logo " src="{{url('../icons/4.png' )}}" width="100" height="80" style="opacity: 1;">
               <p class="font-weight-bold text-white">Reports</p>
             </div>
            </div>
          </div>
             
             
          </div>


          <!-- startr of row -->

            <div class="row mt-4">
              <div class="col-md-12">
              <button type="button" class="btn btn-outline-dark font-weight-bold" id="navigatable_btn_1" style="border:none;"> <i class="fas fa-sort-down text-danger font-weight-bold mr-5 m-0 p-0"></i>Todays Interviews</button>
              </div>
            </div>
          <!-- start of row -->




           <!-- startr of row -->

           <div class="row mt-4" id="navigatable_div_1" name="navigatable_div_1">
             <div class="col-md-12">
              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
             </div>
           </div>
          <!-- start of row -->






          <!-- startr of row -->

            <div class="row mt-4">
              <div class="col-md-12">
              <button type="button" class="btn btn-outline-dark font-weight-bold" id="navigatable_btn_1" style="border:none;"> <i class="fas fa-sort-down text-danger font-weight-bold mr-5 m-0 p-0"></i>Todays Expense</button>
              </div>
            </div>
          <!-- start of row -->




           <!-- startr of row -->

           <div class="row mt-4" id="navigatable_div_1" name="navigatable_div_1">
             <div class="col-md-12">
              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
             </div>
           </div>
          <!-- start of row -->






        </div>
      </div>
    </div>
    <!-- end of display page -->
  </div>
</body>

</html>
