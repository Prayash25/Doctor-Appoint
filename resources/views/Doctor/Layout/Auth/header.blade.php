<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor/ @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      body{
        background-size: cover!important;

        background:url('https://www.technology-solved.com/wp-content/uploads/2017/08/tips-for-buying-a-college-laptop-image.png')
      }
    </style>
</head>
<body>

  <!-- <h1>Doctor-Patient</h1> -->

  @yield('content')
  @include('Doctor.Layout.Auth.footer')


</body>
</html>