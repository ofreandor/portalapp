<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>I-Tech | Microsoft Imagine Academy</title>


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/style.css')}}">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
<body class="login-page">
    <style type="text/css">
    .main-container{
        margin-right:170px;
        margin-bottom:120px;
    }

    @media only screen and (max-width: 600px) {
        .main-container{
            margin-right:0px;
            margin-bottom:0px;
        }

        #heading-text{
            font-size:15.5px;
        }
        
        .btn-outline-primary{
            display:none;
        }
    }
</style>
<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="{{ url('/') }}">

            <img src="{{ asset('assets/img/logo.png')}}" alt=""> <h2 class="text-muted" style="font-family: 'Bahnschrift';  margin-left:20px;" id="heading-text">  I-Tech  Microsoft Imagine Academy</h2>
            </a>
        </div>
        <div class="login-menu">
            <ul class="">
                <li><a class="btn btn-outline-primary" href="{{route('registration')}}">Get ID Card</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">


    <div class="container">
       <div class="row">

            <div class="col-lg-7 col-md-12">
                <div class="display-content-center container">

                    <img src="{{ asset('assets/img/2.svg') }}" class="bg-image mx-2" width="470" height="250">
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="main-banner-content container">

                    <h2 class="h3 py-3 wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms" style="font-family: 'Bahnschrift'; ">I-Tech Microsoft Imagine Academy </h2>
                    <p class="wow fadeInLeft py-" data-wow-delay="100ms" data-wow-duration="1000ms" style="font-family:'Bahnschrift';">This portal is for 100 Level students of DELSU, DSPG (ND &HND) & UNIDEL except the Dipolma students, Inudustrial Training, and Professional Course. You are required to print your ID Card from portal after registration and bring it while coming for your classes.</p>
                    <div class="banner-btn py-5">
                     
                    </div>
                </div>
            </div>

        </div> 
        <br/>

              <div class="row">
                    <div class="col-md-3 mb-1">

                            <div class="card">
                              <div class="card-body text-center">
                                    
                                    <img src="{{ asset('assets/img/students.svg') }}" width="230px">

                                   <div class="content">
                                    <h3 class="h4 text-center py-4" style="font-family:'Bahnschrift';">100 Level Registration</h3>
                                    <a href="{{route('registration')}}" class="btn btn-outline-danger">Register</a>
                                </div>

                            </div>
                         </div>
                      

                    </div>
                    <div class="col-md-3 mb-1">

                        <div class="card">
                              <div class="card-body text-center">
                                
                                <img src="{{ asset('assets/img/it_students.svg') }}" width="150px">

                              
                                <h3 class="h4 text-center py-4" style="font-family:'Bahnschrift' ;">SIWES Training</h3>
                                    <a href="" class="btn btn-outline-success">Register</a>
                            

                             </div>
                    </div>
                </div>


             

                <div class="col-md-3 mb-1">

                        <div class="card">
                          <div class="card-body text-center">
                                
                                <img src="{{ asset('assets/img/professional.svg') }}" width="150px">
                                 <h3 class="h4 text-center py-4" style="font-family:'Bahnschrift'; ">Professional Course</h3>
                                <a href="" class="btn btn-outline-warning">Register</a>

                        </div>
                    </div>
                </div>

                   <div class="col-md-3 mb-1">

                        <div class="card">
                              <div class="card-body text-center">
                                
                                <img src="{{ asset('assets/img/staff.svg') }}" width="217px">
                               <h3 class="h4 text-center py-4" style="font-family:'Bahnschrift'; ">Staff Registration</h3>

                                <a href="" class="btn btn-outline-primary">Register</a>
                               
                        </div>
                    </div>
                </div>


       {{--  <div class="row py-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h2>fefe</h2>
                
            </div>

              <div class="col-md-4">
                <h2>fefe</h2>
                
            </div>
        </div> --}}
    </div>
</div>
<!-- js -->
<script src="{{asset('assets/vendors/scripts/core.js')}}"></script>
<script src="{{asset('vendors/scripts/script.min.js')}}"></script>
<script src="{{asset('vendors/scripts/process.js')}}"></script>
<script src="{{asset('vendors/scripts/layout-settings.js')}}"></script>
</body>
</html>

