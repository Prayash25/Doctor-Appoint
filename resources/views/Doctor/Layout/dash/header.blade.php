<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor| @yield('title')</title>
  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
    <img src="https://www.1stop.ai/images/1Stop_logo_New_Png.png" width="100" height="30" alt="">
  </a>
  <!-- <a class="navbar-brand" href="#">Doctor Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('doctor.dashboard')}}" style="font-weight: bolder;">Doctor Dashboard<span class="sr-only">(current)</span></a>
      </li>
    </ul>
      <div class="nav-item dropdown my-2 my-lg-0">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('doctor.login')}}">Logout</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('doctor.sign')}}">SignIn</a>
        </div>
      </div>
    
  </div>
</nav>
  
  @yield('content')
  @include('Doctor.Layout.dash.footer')  

</body>
</html>