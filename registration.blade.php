<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>I-Tech Microsoft Imagine Academy Registration </title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/vendors/images/custom/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/vendors/images/custom/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/vendors/images/custom/favicon.png') }}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
           
</head>
<body class="">

<style type="text/css">
    .main-container{
        margin-right:170px;
        margin-bottom:120px;
    }
    .lab{
        color: tomato;
    }

    @media only screen and (max-width: 600px) {
        .main-container{
            margin-right:0px;
            margin-bottom:0px;
        }

        #heading-text{
            font-size:15.5px;
        }
    }
</style>

<div class="login-header box-shadow fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="{{url('/')}}">
{{--                <img src="{{ asset('vendors/images/custom/logo.png') }}" alt="">--}}
<img src="{{ asset('assets/img/logo.png')}}" alt=""> <h2 class="text-muted" id="heading-text" style="font-family: 'Bahnschrift';  margin-left:20px;">  I-Tech Microsoft Imagine Academy</h2>

            </a>
        </div>
        <div class="login-menu">
            <ul class="">
                {{-- <li><a class="btn btn-outline-dark" href="{{route('login')}}">Login</a></li> --}}
            </ul>
        </div>
    </div>
</div>

<div class="main-container">
    {{-- <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px"> --}}


    <div class="pd-20 card-box mb-30">
        <div class="clearfix">

            @if(Session::has('success_message'))
                <div class="alert alert-success solid  fade show" role="alert" style="margin-top:3px; font-family:Bahnschrift; font-size:19px;">

                    {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span>&times;</span>
                    </button>

                </div>


            @endif

            <h5 class="mb-30 text-dark">Student Registration Information</h5>
            <hr>
            <p>Note fill form with correct details, all form field with the red asterisk are necessary.</p>
            <hr>
        </div>
        <div class="wizard-content py-3">
            <form action="" method="POST" enctype="multipart/form-data">

                @csrf
                {{-- @include('sweetalert::alert') --}}


                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Surname <span class="lab">*</span></label>
                                <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" >
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>

                           <div class="col-md-6">
                            <div class="form-group">
                                <label >First name<span class="lab">*</span></label>
                                <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" >
                                @error('firstName')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>
                        
                     
                    </div>
                    
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Matric No. <span class="lab">*</span></label>
                                <input type="text" class="form-control  @error('mat_number') is-invalid @enderror" name="mat_number" >
                                @error('mat_number')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>
                         
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Institution (School) <span class="lab">*</span> </label>
                                <select class="form-select form-control @error('Institution') is-invalid @enderror" name="school_id">
                                    <option selected="" disabled="">Select School</option>
                                    @foreach($schools as $school)
                                       <option value="{{ $school->id }}">{{ $school->name }}</option>

                                    @endforeach
                                </select>

                                @error('Institution')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>

                    
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Faculty <span class="lab">*</span></label>
                               <select name="faculty_id" id="faculty" class="form-control @error('faculty_id') is-invalid @enderror">
                                    <option selected="" disabled="">Select Faculty</option>
                                    @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->faculty_name }}</option>
                                        
                                    @endforeach
                               </select>
                                @error('faculty')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Department <span class="lab">*</span></label>
                                
                                <select class="form-control @error('department') is-invalid @enderror" name="department" id="department">
                                    {{-- <option value=""></option> --}}
                                
                                </select>
                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                @enderror
                            </div>
                        </div>

                   

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Level <span class="lab">*</span></label>
                                <input type="text" class="form-control @error('level') is-invalid @enderror" name="level" readonly value="100 Level">
                                @error('level')
                                <span class="invalid-feedback" role="alert">
                                                    <span>{{ $message }}</span>
                                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Age <span class="lab">*</span> </label>
                                <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" >
                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>
                    
                   

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender<span class="lab">*</span> </label>
                                <select class="form-select form-control @error('gender') is-invalid @enderror" name="gender">
                                    <option selected="" disabled="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone No. <span class="lab">*</span> </label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                     
                   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Email <span class="lab">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@gm.com" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Passport</label>
                                <input type="file" class="form-control @error('passport') is-invalid @enderror" name="passport">
                                @error('passport')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State of Orgin <span class="lab">*</span> </label>
                                    <select name="state_of_origin"  class="form-control @error('state_of_origin') is-invalid @enderror">
                                        <option selected="" disabled="">Select State</option>
                                        <option value="ABUJA">ABUJA FCT</option>
                                        <option value="ABIA">ABIA</option>
                                        <option value="ADAMAWA">ADAMAWA</option>
                                        <option value="AKWA IBOM">AKWA IBOM</option>
                                        <option value="ANAMBRA">ANAMBRA</option>
                                        <option value="BAUCHI">BAUCHI</option>
                                        <option value="BAYELSA">BAYELSA</option>
                                        <option value="BENUE">BENUE</option>
                                        <option value="BORNO">BORNO</option>
                                        <option value="CROSS RIVER">CROSS RIVER</option>
                                        <option value="DELTA">DELTA</option>
                                        <option value="EBONYI">EBONYI</option>
                                        <option value="EDO">EDO</option>
                                        <option value="EKITI">EKITI</option>
                                        <option value="ENUGU">ENUGU</option>
                                        <option value="GOMBE">GOMBE</option>
                                        <option value="IMO">IMO</option>
                                        <option value="JIGAWA">JIGAWA</option>
                                        <option value="KADUNA">KADUNA</option>
                                        <option value="KANO">KANO</option>
                                        <option value="KATSINA">KATSINA</option>
                                        <option value="KEBBI">KEBBI</option>
                                        <option value="KOGI">KOGI</option>
                                        <option value="KWARA">KWARA</option>
                                        <option value="LAGOS">LAGOS</option>
                                        <option value="NASSARAWA">NASSARAWA</option>
                                        <option value="NIGER">NIGER</option>
                                        <option value="OGUN">OGUN</option>
                                        <option value="ONDO">ONDO</option>
                                        <option value="OSUN">OSUN</option>
                                        <option value="OYO">OYO</option>
                                        <option value="PLATEAU">PLATEAU</option>
                                        <option value="RIVERS">RIVERS</option>
                                        <option value="SOKOTO">SOKOTO</option>
                                        <option value="TARABA">TARABA</option>
                                        <option value="YOBE">YOBE</option>
                                        <option value="ZAMFARA">ZAMFARA</option>
                                    </select>
                                @error('state_of_origin')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Marital Status <span class="lab">*</span> </label>

                                <select name="marital_status" id="" class="form-control @error('marital_status') is-invalid @enderror">
                                    <option selected="" disabled="">Select</option>
                                    <option value="SINGLE">Single</option>
                                    <option value="MARRIED">Married</option>
                                </select>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>

                     
                    </div>

                
                    <div class="row">
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ICT Proficency </label>
                                <input type="text" class="form-control @error('ict_proficency') is-invalid @enderror" name="ict_proficency" value="BIGINNER" readonly>
                                @error('ict_proficency')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >School Fees Payment Status</label>
                                <select name="school_fee_status"  class="form-control @error('school_fee_status') is-invalid @enderror">
                                    <option selected="" disabled="">Select</option>
                                    <option value="PAID">PAID</option>
                                    <option value="NOT PAID YET">NOT PAID YET</option>
                                </select>
                                @error('school_fee_status')
                                <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                @enderror
                            </div>
                        </div>

                    
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="*******">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" placeholder="*******">
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
               

                    <div class="input-group mb-0 py-3">

                        <button class="btn btn-lg btn-warning">Submit</button>

                    </div>
                </section>


            </form>
        </div>
    </div>




</div>




<script type="text/javascript">
    
    $(document).ready(function() {
            $('#faculty').on('change', function() {
               var facultyID = $(this).val();
               if(facultyID) {
                   $.ajax({
                       url: '/getDepartment/'+facultyID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#department').empty();
                            $('#department').append('<option value="0" selected disabled>Select Department</option>'); 
                            // <option value="0" selected disabled>chose product</option>
                           $.each(data, function(key, department){
                                $('select[name="department"]').append('<option value="'+ key +'">' + department.department+ '</option>');
                            });
                        }else{
                            $('#department').empty();
                        }
                     }
                   });
               }else{
                 $('#department').empty();
               }
            });
            });
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="{{ asset('vendors/scripts/core.js') }}"></script>
<script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/process.js') }}"></script>
<script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
<script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendors/scripts/dashboard.js') }}"></script>
</body>
</html>

