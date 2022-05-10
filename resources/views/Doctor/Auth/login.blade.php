@section('title','login')
@extends('Doctor.Layout.Auth.header')
@section('content')
<div class="card" style="width: 38rem; margin-left: 5%; margin-top: 5%; z-index: 30;">
<h5 class="card-title" style="text-allign:centre;">Login</h5>
  <div class="card-body">
    
  
<form action="{{route('doctor.login')}}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  New Member<a href="{{route('doctor.sign')}}">SignUp</a>
</form>
</div>
</div>
@endsection