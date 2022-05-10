@section('title','SignUp')
@extends('Doctor.Layout.Auth.header')
@section('content')
<div class="card" style="width: 38rem; margin-left: 5%; margin-top: 5%; z-index: 30;">
<h5 class="card-title" style="text-allign:centre;">SignUp</h5>
  <div class="card-body">
 <form class="ui form" method="POST" action="{{route('doctor.registration.save')}}">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" placeholder="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label>Specialisation</label>
    <input type="text" name="special" placeholder="MBBS,Opthalogy" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <!-- <div class="form-group">
    <label>confirm Password</label>
    <input type="password" name="password_confirmation" placeholder="">
  </div> -->
  <div class="form-group form-check">
    <div class="ui checkbox"> 
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions</label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  Already Register?<a href="{{route('doctor.login')}}">login</a>
</form>
</div>
</div>
@endsection