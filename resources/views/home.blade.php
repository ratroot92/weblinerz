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
  body,html{
    height: 100%;
  }
  .wrapper{
    position: absolute;
   
   
  background-image: url('../images/londo-skyline.png' );
   background-position: center;
  background-repeat: no-repeat;
  /*background-size: cover;*/
  background-size: 100% 100%;
  margin: 0 !important;
  padding: 0 !important;
  }
  .logo{
    top:-50px;
    position: relative;
     max-width: 100%;
     width:400px;

  }
  .circle{
    max-width: 100%;
    width: 160px;
    height: 160px;
    background-color: steelblue;
    border-radius: 50%;
    display: inline-block;
    border-style: dotted;
    border:3px solid white;
  }
  .circle-wrapper{
    text-align: center;
    padding: 10px;
    max-width: 100%;
   
  }
  .icon{
    font-size: 35px;
    margin-top: 40px;
  }
  .circle-text{
    text-decoration: none !important;
    font-weight: bold;
  }
  .row2{
     position: relative;
    top:-80px;
  }
  a{
  text-decoration:none !important;
  }

  </style>
  </head>

<body>
 
    <div class="container-fluid wrapper" >
   




<!-- start of logo -->

<div class="row ">
<div class="col-md-12 text-center "  >
<img class="logo" src="{{url('../images/wz logo-new.png' )}}" >
</div>
</div>
<!-- end of logo -->



<div class="row  row2 ">


  <div class="col-md-3 circle-wrapper">
    <div class="circle ">

  <div>
    <i class="fas fa-users text-white font-weight-bold icon" ></i>
   <br>
<a class="text-white " href="{{ route('employee_login') }}"> Employee Console </a>
  </div>
      
    </div>
  </div>


   <div class="col-md-3 circle-wrapper">
    <div class="circle ">
      <div>
         <i class="fas fa-person-booth text-white font-weight-bold icon " ></i>
     <br>
<a class="text-white  circle-text" href="#"> CEO Console </a>
      </div>
    </div>
  </div>




   <div class="col-md-3 circle-wrapper">
    <div class="circle ">
      <div>
         <i class="fas fa-address-card text-white font-weight-bold icon" ></i>
    <br>
<a class="text-white  circle-text" href="#"> Management Console </a>
      </div>
    </div>
  </div>




   <div class="col-md-3 circle-wrapper">
    <div class="circle ">
       <div>
         <i class="fab fa-chrome text-white font-weight-bold icon" ></i>
     <br>
<a class="text-white  circle-text" href="{{ route('hr_login') }}"> HR Console </a>
       </div>
    </div>
  </div>
</div>






    </div>
    
  </div>

</body>

</html>


