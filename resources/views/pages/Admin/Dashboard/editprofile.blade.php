<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Adedokun Julius Portfolio - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

    

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{asset('assets/img/profile.jpg')}}" alt="" class="img-fluid">
        <h1 class="text-light"><a href="">Welcome {{auth()->user()->name}}</a></h1>
       
      </div>

      <nav class="nav-menu">
          <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <li class="text-white"><i class="bx bx-user"></i> <span> My About Profile</li>
                </a>
                       
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      
                      
                       
                            <a class="dropdown-item text-primary" href="">Edit About Profile</a>
                        
                        
                        
                      </div>
                      
          </div>

           <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <li class="text-white"><i class="bx bx-file-blank "></i> <span> My Education Profile</span></li>
                </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item text-primary" href="/education/create">Create Education Profile</a>
                        <a class="dropdown-item text-primary" href="/editprofile">Edit Education Profile</a>
                       </div>
             </div>



          <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <li class="text-white"><i class="bx bx-file-blank"></i> <span>My Experience Profile</span></li>
                </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item text-primary" href="/experience/create">Create Experience Profile</a>
                        <a class="dropdown-item text-primary" href="/editprofile">Edit Experience Profile</a>
                       </div>
             </div>

             
          <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <li class="text-white"><i class="bx bx-file-blank"></i> <span>My Portfolio Gallery</span></li>
                </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item text-primary" href="/portfolio/create">Create Portfolio Gallery</a>
                        <a class="dropdown-item text-primary" href="">Edit Portfolio Gallery</a>
                       </div>
             </div>

             <div>
                <form method = "POST" action = "/signout">
                     {{ csrf_field() }}
                    <button class="btn btn-secondary"> Click Here To Logout From Your Dashboard</button>
                </form>
             </div>


         
            

      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->



{{-- BODY SECTION STARTS HERE --}}
  
    <br/><br/><br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header"> <h3 class="text-info">My Education Profiles Table</h3></div>

              
                    
                        {{-- @if(count($educations) > 0) --}}
                            <table class = "table table-striped" >
                                <tr>
                                    <th> Number </th>
                                    <th>  </th>
                                    <th> </th>
                                </tr>

                                {{-- @foreach ($educations as $enducation) --}}
                                <tr>
                                
                                    <td>1</td>
                                    {{-- <td>{{$education->id}}</td> --}}
                                    {{-- <td>{{$education->qualification}}</td> --}}
                                    <td><button class="btn btn-primary">Edit</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>

                                    
                                </tr>
                                
                            {{-- @endforeach --}}
                        {{-- @endif --}}
                        
                            </table>
                            </div>
                            

                    </div>
         
    </div> 
</div>

{{-- EXPERIENCE TABLE --}}
 <br/><br/><br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header"> <h3 class="text-info">My Experience Profiles Table</h3></div>

              
                    
                        {{-- @if(count($educations) > 0) --}}
                            <table class = "table table-striped" >
                                <tr>
                                    <th> Number </th>
                                    <th>  </th>
                                    <th> </th>
                                </tr>

                                {{-- @foreach ($educations as $enducation) --}}
                                <tr>
                                
                                    {{-- <td>{{$education->id}}</td> --}}
                                    {{-- <td>{{$education->qualification}}</td> --}}
                                    <td><button class="btn btn-primary">Edit</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>

                                    
                                </tr>
                                
                            {{-- @endforeach --}}
                        {{-- @endif --}}
                        
                            </table>
                            </div>
                            

                    </div>
         
    </div> 
</div>


 <br/><br/><br/>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header"> <h3 class="text-info">My Portfolio Gallery Table</h3></div>

              
                    
                        {{-- @if(count($educations) > 0) --}}
                            <table class = "table table-striped" >
                                <tr>
                                    <th> Number </th>
                                    <th>  </th>
                                    <th> </th>
                                </tr>

                                {{-- @foreach ($educations as $enducation) --}}
                                <tr>
                                    <td>1</button></td>
                                    {{-- <td>{{$education->id}}</td> --}}
                                    {{-- <td>{{$education->qualification}}</td> --}}
                                    <td><button class="btn btn-primary">Edit</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>

                                    
                                </tr>
                                
                            {{-- @endforeach --}}
                        {{-- @endif --}}
                        
                            </table>
                            </div>
                            

                    </div>
         
    </div> 
</div>






  

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Adedokun Julius</span></strong>
      </div>
      <div class="credits">
        
        Designed by Mydesoft</a>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>

                         
            
