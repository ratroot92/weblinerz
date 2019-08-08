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


<!-- start of background image span -->
<span >

</span>
<!-- end of background image span -->



<!-- start of logo -->

<div class="row ">
<div class="col-md-12 text-center " style=" background-image: url('../images/pattern.png' );
        background-repeat: repeat;
         background-size:cover;

        width: 100%;
        height: 100%;
       ">
<img class="logo" src="{{url('../images/wz logo-new.png' )}}" width="400px" height="400px;" style="opacity: 1;">
</div>
</div>
<!-- end of logo -->








<div class="row ">
<div class="col-md-3"></div>

<div class="col-md-6 d-flex flex-row text-center ">

<!-- start of first circle -->

<div class="col-md-3 circle  text-center bordeer  border-white m-2 pt-3 "style="font-size: 19px;">
<i class="fas fa-users text-white font-weight-bold" style="font-size: 30px;"></i>
<a class="text-white artigo_nome" href="employees/employee_login"> Employee Console </a>
</div>

<!-- end of first circle -->

<!-- start of first circle -->
<div class="col-md-3 circle  text-center bordeer  border-white m-2 pt-3 "style="font-size: 16px;" >
<i class="fas fa-person-booth text-white font-weight-bold " style="font-size: 30px;"></i>
<a class="text-white artigo_nome" href="#"> CEO Console </a>
</div>
<!-- end of first circle -->

<!-- start of first circle -->
<div class="col-md-3 circle  text-center bordeer  border-white m-2 pt-3" style="font-size: 16px;">
<i class="fas fa-address-card text-white font-weight-bold" style="font-size: 30px;"></i>
<a class="text-white artigo_nome" href="#"> Management Console </a>
</div>
<!-- end of first circle -->

<!-- start of first circle -->
<div class="col-md-3 circle  text-center bordeer  border-white m-2 pt-3" style="font-size: 16px;">
<i class="fab fa-chrome text-white font-weight-bold" style="font-size: 30px;"></i>
<a class="text-white artigo_nome" href="hr/login"> HR Console </a>
</div>
<!-- end of first circle -->
</div>

<div class="col-md-3"></div>

</div>






<!-- script for employee login (validation )-->
<script>



</script>



    </body>

</html>
