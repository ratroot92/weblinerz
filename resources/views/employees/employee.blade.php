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
  .form-control{
    border-radius: 0px;}

    label{
   font-weight: bold;

    }
    .circle{
        border-radius:50%;
        border-style: dotted;
        height: 150px;
        vertical-align: middle;
        line-height: 25px;
        background-color: #06074E;
            }



      .artigo_nome {
       display: inline-block;
        max-width: 250px;
        padding: 10px;
        word-break: break-all; /* optional */
        text-decoration: none !important;
                    }
  }

::-webkit-scrollbar {
    display: none;
}
 .logo{
align-content: center;
text-align: center;
align-items: center;
 }
  </style>
  </head>

<body class="container-fluid  wrapper"class=""  style=" background-image: url('../images/londo-skyline.png' );
        background-repeat: repeat;
         background-size:cover;
       ">






<!-- start  of logins -->
@if (Session::has('message'))
               <div class="alert alert-success alert-dismissable text-center">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                   <p>{{ Session::get('message') }}</p>
               </div>
           @endif

<div class="container-fluid">
<div class="row ">



  <div class="col-md-12">
    <!-- start of tabs -->
    <ul class="nav nav-tabs p-2 bg-dark">
      <li class="  active  p-1"><a href="#employee_login_panel" title="" class="nav-link bg-primary text-white "  data-toggle="tab">Employeee Login</a></li>
      <li class="  p-1"><a href="#hr_login_panel" title="" class="nav-link bg-primary text-white  "  data-toggle="tab">HR Login</a></li>

    </ul>
    <!-- end of tabs -->


    <!-- start of login tabs -->

<div class="tab-content">

  <!-- start of employee login tab-->
  <div class="tab-pane active" id="employee_login_panel" role="tab-pane">


 <div class="container-fluid">
   <div class="row mt-5 mb-5" >

<div class="col-md-2">

</div>
<div class="col-md-8">


   <form class="" action="Add_Employee" method="post" id="e_form" onsubmit="return  validateForm();">
<!-- start of first row -->
<div class="row ">
  <div class="col-md-4">
    <label class="form-control" for="employee_name">EMPLOYEE NAME:</label>
  </div>
  <div class="col-md-8">
    <input type="text" class="form-control" id="employee_name" name="employee_name" required >
    <span id="name_err" class="text-danger font-weight-bold"></span>
    @if($errors->has('employee_name'))
     <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('employee_name') }}</span></div>
      @endif
  </div>
</div>

<!-- start of first row -->

<!-- start of first row -->
<div class="row ">
  <div class="col-md-4">
    <label class="form-control" for="employee_email">EMPLOYEE EMAIL:</label>
  </div>
  <div class="col-md-8">
    <input type="email" class="form-control" id="employee_email" name="employee_email" required >
      <span id="email_err" class="text-danger font-weight-bold"></span>
      @if($errors->has('employee_email'))
     <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('employee_email') }}</span></div>
      @endif
  </div>
</div>

<!-- start of first row -->



<!-- start of first row -->
<div class="row ">
  <div class="col-md-4">
    <label class="form-control" for="employee_phone">EMOPLOYEE MOBILE :</label>
  </div>
  <div class="col-md-8">
    <input type="number" class="form-control" id="employee_phone" name="employee_phone"  required>
      <span id="mobile_err" class="text-danger font-weight-bold "></span>
        @if($errors->has('employee_phone'))
     <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('employee_phone') }}</span></div>
      @endif
  </div>
</div>

<!-- start of first row -->

<!-- start of first row -->
<div class="row ">
  <div class="col-md-4">
    <label class="form-control" for="employee_password">EMOPLOYEE PASSWORD :</label>
  </div>
  <div class="col-md-8">
    <input type="text" class="form-control" id="employee_password" name="employee_password"  required>
      <span id="password_err" class="text-danger font-weight-bold "></span>
        @if($errors->has('employee_password'))
     <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('employee_password') }}</span></div>
      @endif
  </div>
</div>

<!-- start of first row -->

<!-- start of first row -->
<div class="row ">
  <div class="col-md-4">
    <label class="form-control" for="employee_c_password">CONFIRM PASSWORD :</label>
  </div>
  <div class="col-md-8">
    <input type="text" class="form-control" id="employee_c_password" name="employee_c_password" required >
      <span id="cpassword_err" class="text-danger font-weight-bold "></span>
        @if($errors->has('employee_c_password'))
     <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('employee_c_password') }}</span></div>
      @endif
  </div>
</div>

<!-- start of first row -->


<!-- start of first row -->
<div class="row ">
  <div class="col-md-4">
    <label class="form-control" for="employee_designation">EMOPLOYEE DESIGNATION :</label>
  </div>
  <div class="col-md-8">
   <select class="form-control" id="employee_designation" name="employee_designation" required>
     <option >SELECT DESIGNATION</option>
      <option value="JUNIOR WEB DESIGNER">JUNIOR WEB DEVELOPER </option>
       <option value="SELECT DESIGNATION">SENIOR WEB DEVELOPER</option>
        <option value="ANDROID / IOS DEVELOPER">ANDROID / IOS DEVELOPER</option>

   </select>
     <span id="designation_err" class="text-danger font-weight-bold"></span>
        @if($errors->has('employee_designation'))
     <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('employee_designation') }}</span></div>
      @endif
  </div>
</div>

<!-- start of first row -->



<!-- start of first row -->
<div class="row ">
  <div class="col-md-4">
    <label class="form-control" for="employee_status">EMOPLOYEE STATUS :</label>
  </div>
  <div class="col-md-8">
     <select class="form-control" id="employee_status" name="employee_status" required>
     <option >SELECT STATUS</option>
      <option value="PERMENNET">PERMENNET</option>
       <option value="INTERN">INTERN</option>


   </select>
     <span id="status_err" class="text-danger font-weight-bold"></span>
       @if($errors->has('employee_status'))
     <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('employee_status') }}</span></div>
      @endif
  </div>
</div>

<!-- start of first row -->



<!-- start of first row -->
<div class="row ">
  <div class="col-md-4">

  </div>
  <div class="col-md-8">
    <input type="submit" name="REGISTER NOW" class="btn btn-block btn-success" id="submit_e_form">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">

  </div>
</div>

<!-- start of first row -->





  </form>
</div>

<div class="col-md-2">

</div>

   </div>
 </div>
  </div>
  <!-- end of employee login tab -->





   <!-- start of HR login tab-->
  <div class="tab-pane " id="hr_login_panel" role="tab-pane">


       <div class="container-fluid">
           <div class="row mt-5 mb-5">
               <div class="col-md-2">
                    </div>
                <div class="col-md-8"> <form class="" action="Add_Employee" method="post" id="e_form" onsubmit="return  validateForm();">
                        <!-- start of first row -->
                        <div class="row ">
                          <div class="col-md-4">
                            <label class="form-control" for="employee_name">HR NAME:</label>
                          </div>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="hr_name" name="hr_name" required >
                            <span id="name_err" class="text-danger font-weight-bold"></span>
                            @if($errors->has('hr_name'))
                             <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('hr_name') }}</span></div>
                              @endif
                          </div>
                        </div>

                        <!-- start of first row -->

                        <!-- start of first row -->
                        <div class="row ">
                          <div class="col-md-4">
                            <label class="form-control" for="hr_email">HR EMAIL:</label>
                          </div>
                          <div class="col-md-8">
                            <input type="email" class="form-control" id="hr_email" name="hr_email" required >
                              <span id="email_err" class="text-danger font-weight-bold"></span>
                              @if($errors->has('hr_email'))
                             <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('hr_email') }}</span></div>
                              @endif
                          </div>
                        </div>

                        <!-- start of first row -->



                        <!-- start of first row -->
                        <div class="row ">
                          <div class="col-md-4">
                            <label class="form-control" for="hr_phone">HR MOBILE :</label>
                          </div>
                          <div class="col-md-8">
                            <input type="number" class="form-control" id="hr_phone" name="hr_phone"  required>
                              <span id="mobile_err" class="text-danger font-weight-bold "></span>
                                @if($errors->has('hr_phone'))
                             <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('hr_phone') }}</span></div>
                              @endif
                          </div>
                        </div>

                        <!-- start of first row -->

                        <!-- start of first row -->
                        <div class="row ">
                          <div class="col-md-4">
                            <label class="form-control" for="hr_password">HR PASSWORD :</label>
                          </div>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="hr_password" name="hr_password"  required>
                              <span id="password_err" class="text-danger font-weight-bold "></span>
                                @if($errors->has('hr_password'))
                             <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('hr_password') }}</span></div>
                              @endif
                          </div>
                        </div>

                        <!-- start of first row -->

                        <!-- start of first row -->
                        <div class="row ">
                          <div class="col-md-4">
                            <label class="form-control" for="hr_c_password">CONFIRM PASSWORD :</label>
                          </div>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="hr_c_password" name="hr_c_password" required >
                              <span id="cpassword_err" class="text-danger font-weight-bold "></span>
                                @if($errors->has('hr_c_password'))
                             <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('hr_c_password') }}</span></div>
                              @endif
                          </div>
                        </div>

                        <!-- start of first row -->


                        <!-- start of first row -->
                        <div class="row ">
                          <div class="col-md-4">
                            <label class="form-control" for="hr_designation">HR DESIGNATION :</label>
                          </div>
                          <div class="col-md-8">
                           <select class="form-control" id="hr_designation" name="hr_designation" required>
                             <option >SELECT DESIGNATION</option>
                              <option value="JUNIOR WEB DESIGNER">JUNIOR WEB DEVELOPER </option>
                               <option value="SELECT DESIGNATION">SENIOR WEB DEVELOPER</option>
                                <option value="ANDROID / IOS DEVELOPER">ANDROID / IOS DEVELOPER</option>

                           </select>
                             <span id="designation_err" class="text-danger font-weight-bold"></span>
                                @if($errors->has('hr_designation'))
                             <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('hr_designation') }}</span></div>
                              @endif
                          </div>
                        </div>

                        <!-- start of first row -->



                        <!-- start of first row -->
                        <div class="row ">
                          <div class="col-md-4">
                            <label class="form-control" for="hr_status">HR STATUS :</label>
                          </div>
                          <div class="col-md-8">
                             <select class="form-control" id="hr_status" name="hr_status" required>
                             <option >SELECT STATUS</option>
                              <option value="PERMENNET">PERMENNET</option>
                               <option value="INTERN">INTERN</option>


                           </select>
                             <span id="status_err" class="text-danger font-weight-bold"></span>
                               @if($errors->has('hr_status'))
                             <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('hr_status') }}</span></div>
                              @endif
                          </div>
                        </div>

                        <!-- start of first row -->



                        <!-- start of first row -->
                        <div class="row ">
                          <div class="col-md-4">

                          </div>
                          <div class="col-md-8">
                            <input type="submit" name="REGISTER NOW" class="btn btn-block btn-success" id="submit_h_form">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          </div>
                        </div>

                        <!-- start of first row -->





                          </form></div>
                <div class="col-md-2"> </div>
                </div>
       </div>
  </div>
  <!-- end of HR login tab -->
</div><!-- end of login tabs -->


  </div>


</div>

</div>

<!-- end of logins -->



<!-- script for hr login (validation )-->
<script>



</script>



    </body>

</html>
