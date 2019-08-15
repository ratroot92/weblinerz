<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebLinerz</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <script src="js/app.js" type="text/javascript" charset="utf-8" async defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">


<style type="text/css" media="screen">
   .notice_Board{

    border-radius: 8px;
    border:10px solid white;


   }

   .form-control{
    border-radius: 0px;
   }
   .panel{
    background-color: white;
    height: 170px;
    border-radius: 5px;
    width: 235px;
   }
   .event{
    width: 100%;


   }
   .event-panel{
background-color: red;
     border-radius: 5px;
     width: 100px;
     height: 100px;
   }
   
   .alert{
	   
	   border-radius:0px;
	   padding:0px;
	   margin:0px;
	   font-size:13px;
	   color:red;
   }
</style>


</head>

<body class="wrapper" >

<div class="container-fluid">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10 bg-primary">
   <!-- start of header -->

   <div class="row">
       <div class="col-md-2">
          <img class="logo" src="{{url('../images/wz logo-new.png' )}}" width="130" height="100;" style="opacity: 1;">
       </div>
       <div class="col-md-7    pl-0">
           <div class="mt-3 ml-5 d-flex flex-column"><span class="text-white font-weight-bold" style="font-size: 25px;">WebLinerZ</span>
           <span class="text-white font-weight-bold" style="font-size: 18px;">Leading Dvelopment Technology</span></div>
       </div>
       <div class="col-md-3 ">
       <div class="mt-4">
	   <img class="logo" src="{{url('../images/employee1.png' )}}" width="65" height="65;" style="opacity: 1;">
          <span class="font-weight-bold text-white ml-2 " style="font-size: 13px;">Employee Portal</span></div>
       </div>
   </div>
   <!-- end of header -->


   <!-- start of body content -->
<div class="row p-1">
    <div class="col-md-8  notice_Board">
     <div class="row" style="height:400px;overflow:scroll;">
        <div class="col-md-12" style=" background-image: url('../images/noticeboard_pattern.png' );
        background-repeat: repeat;
         background-size:cover;
       ">
        <div class="text-center">
             <span class="font-weight-bold text-white " style="font-size:30px">NOTICE BOARD </span>
        </div>


      <!-- start of announcemnet -->
         <div class="d-flex flex-column">
             <span class="text-warning font-weight-bold " style="font-size: 25px;">Important Announcements Regarding Exams  </span>
             <span class="text-white font-weight-bold ">Dear Students! Click here to get your Final Exam Coupons. </span>

         </div>
        <!-- end of announcement -->




      <!-- start of announcemnet -->
         <div class="d-flex flex-column">
             <span class="text-warning font-weight-bold " style="font-size: 25px;">Important Announcements Regarding Exams  </span>
             <span class="text-white font-weight-bold ">Dear Students! Click here to get your Final Exam Coupons. </span>

         </div>
        <!-- end of announcement -->




      <!-- start of announcemnet -->
         <div class="d-flex flex-column">
             <span class="text-warning font-weight-bold " style="font-size: 25px;">Important Announcements Regarding Exams  </span>
             <span class="text-white font-weight-bold ">Dear Students! Click here to get your Final Exam Coupons. </span>

         </div>
        <!-- end of announcement -->




      <!-- start of announcemnet -->
         <div class="d-flex flex-column">
             <span class="text-warning font-weight-bold " style="font-size: 25px;">Important Announcements Regarding Exams  </span>
             <span class="text-white font-weight-bold ">Dear Students! Click here to get your Final Exam Coupons. </span>

         </div>
        <!-- end of announcement -->



      <!-- start of announcemnet -->
         <div class="d-flex flex-column">
             <span class="text-warning font-weight-bold " style="font-size: 25px;">Important Announcements Regarding Exams  </span>
             <span class="text-white font-weight-bold ">Dear Students! Click here to get your Final Exam Coupons. </span>

         </div>
        <!-- end of announcement -->




      <!-- start of announcemnet -->
         <div class="d-flex flex-column">
             <span class="text-warning font-weight-bold " style="font-size: 25px;">Important Announcements Regarding Exams  </span>
             <span class="text-white font-weight-bold ">Dear Students! Click here to get your Final Exam Coupons. </span>

         </div>
        <!-- end of announcement -->



      <!-- start of announcemnet -->
         <div class="d-flex flex-column">
             <span class="text-warning font-weight-bold " style="font-size: 25px;">Important Announcements Regarding Exams  </span>
             <span class="text-white font-weight-bold ">Dear Students! Click here to get your Final Exam Coupons. </span>

         </div>
        <!-- end of announcement -->

        </div>

        </div>
    </div>
    <!-- end of  announcement -->
    <div class="col-md-4 border border-dark pt-4 " style="background-color:white !important; border-radius: 5px;">
        <div class="row pl-2 pr-2">
            <div class="col-md-12 p-1">
               <ul class="nav-tabs  d-flex flex-row  list-unstyled">
                   <li class="active  "><a href="#BYID" class="nav-link bg-primary text-white font-weight-bold ml-1" role="tab" data-toggle="tab">By NAME</a></li>
                    <li class=" "><a href="#BYLIST" class="nav-link text-white bg-secondary ml-1 font-weight-bold" role="tab" data-toggle="tab">By EMAIL</a></li>
               </ul>

               <div class="tab-content">
                   <div class="active tab-pane " id="BYID"  >

 <form method="POST" action="{{route('employee_dashboard_by_name')}}" >

        @if (Session::has('message'))
        <div class="alert alert-success alert-dismissable text-center p-0 m-0">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p class="">{{ Session::get('message') }}</p>
        </div>
        @endif

    <!-- start of input field -->
    <div class="d-flex flex-column mt-4">
            <span class="text-dark font-weight-bold"> Employee Name:</span>
          <input type="text" class="form-control" name="e_name" id="e_name" placeholder="@Name" required >
          @if($errors->has('e_name'))
          <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('e_name') }}</span></div>
           @endif
        </div>


<!-- end of input field -->


<!-- start of input field -->
        <div class="d-flex flex-column mt-2">
            <span class="text-dark font-weight-bold"> Employee Password:</span>
          <input type="password" class="form-control" name="e_password1" id="e_password1" placeholder="@Password" required >
          @if($errors->has('e_password1'))
           <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('e_password1') }}</span></div>
            @endif
        </div>


<!-- end of input field -->


<!-- start of input field -->
        <div class="row mt-4 ">
            <div class="col-md-8  ">
                 <span class="text-dark font-weight-bold " style>Forgot Password ?</span>
                <span  class="text-primary font-weight-bold"><a href="#" title="" >Click Here!</a> </span>
            </div>
            <div class="col-md-4  ">
               <input type="submit" class="btn btn-success" name="" >
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>

        </div>


<!-- end of input field -->
</form>
</div>




 <div class="tab-pane " id="BYLIST"  >
                        <form method="POST" action="{{route('employee_dashboard_by_email')}}" >

                                @if (Session::has('message'))
                                <div class="alert alert-success alert-dismissable text-center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <p>{{ Session::get('message') }}</p>
                                </div>
                                @endif

                            <!-- start of input field -->
                            <div class="d-flex flex-column mt-4">
                                    <span class="text-dark font-weight-bold"> Employee Email:</span>
                                  <input type="email" class="form-control" name="e_email" id="e_email" placeholder="@Email" required >
                                  @if($errors->has('e_email'))
                                  <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('e_email') }}</span></div>
                                   @endif
                                </div>


                        <!-- end of input field -->


                        <!-- start of input field -->
                                <div class="d-flex flex-column mt-2">
                                    <span class="text-dark font-weight-bold"> Employee Password:</span>
                                  <input type="password" class="form-control" name="e_password" id="e_password" placeholder="@Password" required >
                                  @if($errors->has('e_password'))
                                   <div  class=" alert alert-danger mt-1 "><span class="text-danger font-weight-bold">&spades;{{ $errors->first('e_password') }}</span></div>
                                    @endif
                                </div>


                        <!-- end of input field -->


                        <!-- start of input field -->
                                <div class="row mt-4 ">
                                    <div class="col-md-8  ">
                                         <span class="text-dark font-weight-bold " style>Forgot Password ?</span>
                                        <span  class="text-primary font-weight-bold"><a href="#" title="" >Click Here!</a> </span>
                                    </div>
                                    <div class="col-md-4  ">
                                       <input type="submit" class="btn btn-success" name="">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </div>

                                </div>


                        <!-- end of input field -->
                        </form>

                   </div>
               </div>

            </div>

        </div>

    </div>
</div>



<!-- start of news panel -->
<div class="row d-flex flex-row">

    <!-- News -->
    <div class="col-md-8 ">
        <!-- row -->
<div class="row ">
    <div class="col-md-12">
        <p class="text-white font-weight-bold " style="font-size: 35px;">Latest News </p>
<hr class="bg-light " style="width: 100%;height: 1px;">
    </div>

</div>
<!-- row -->

<!-- row -->
<div class="row ">
    <div class="col-md-12 d-flex flex-row justify-content-around p-4">

        <!-- new panel -->
<div class="panel ">


    <div class=" p-3 d-flex flex-column ">
        <span class="text-dark font-weight-bold" style="font-size: 20px;font-weight: bolder;">COMSATS</span>
    <span class="text-secondary mt-2">Welcome to COMSATS University Islamabad Student Console.</span>
    <button class="btn btn-primary  btn-sm mt-2" style="width: 100px;"><a href="#" title="" class="text-dark font-weight-bold">Learn More</a></button>
    </div>


</div>

<div class="panel ">
    <div class=" p-3 d-flex flex-column ">
        <span class="text-dark font-weight-bold" style="font-size: 20px;font-weight: bolder;">COMSATS</span>
    <span class="text-secondary mt-2">Welcome to COMSATS University Islamabad Student Console.</span>
    <button class="btn btn-primary  btn-sm mt-2" style="width: 100px;"><a href="#" title="" class="text-dark font-weight-bold">Learn More</a></button>
    </div>
</div>

        <!-- new panel -->



    </div>

</div>
<!-- row -->


    </div>


    <!-- end of NEWS -->
    <!-- start of events -->

    <div class="col-md-4 ">
        <div class="row">
            <p class="text-white font-weight-bold " style="font-size: 25px;"> Events </p>
<hr class="bg-light " style="width: 100%;height: 1px;">


        </div>


        <div class="row" >
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-md-4 text-center bg-light p-1" style="border-radius: 5px;height: 80px;vertical-align: middle;line-height: 80px;font-size: 22px; ">
                        <p class="text-dark font-weight-bold">27 SEP</p>
                    </div>

                    <div class="col-md-8 ">
                        asdasdas
                    </div>

                </div>
            </div>
             <div class="col-md-12 mt-2 ">
                <div class="row">
                    <div class="col-md-4 text-center bg-light p-1" style="border-radius: 5px;height: 80px;vertical-align: middle;line-height: 80px;font-size: 22px; ">
                        <p class="text-dark font-weight-bold">27 SEP</p>
                    </div>

                    <div class="col-md-8 ">
                        asdasdas
                    </div>

                </div>
            </div>
    </div>
     <!-- end of events -->
</div>

<!-- end  of the new pane l-->

<!-- end of body content -->




</div>
<div class="col-md-1">

</div>
</div>





</div><!-- end of container fluid -->


</body>

</html>
