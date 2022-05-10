@section('title','Dashboard')
@extends('Doctor.Layout.dash.header')
@section('content')
<div id="appoints">
<div class="row">
  @php 
  $appoint = DB::table('appointment')->get();
  $i=0;
  @endphp
  @foreach ($appoint as $apt)
  <div class="col-sm" style="background:url('https://assets-global.website-files.com/57822c659e1627a433e6a7c6/61436850aac85f9271314d12_60e7b07014fc3b6d33d9283b_Copy%2520of%2520Doctor-consultation-2.jpeg'); background-size: cover!important; margin:3% 5% 5px 5px">
    <h4 style="text-allign: centre;">Patient no.: {{++$i}}</h4>
    <p style="font-weight:bolder; color:#ff3006">Name of patient: {{$apt->Name}}</p>
    <p style="font-weight:bolder; color:#ff3006">Age of patient: {{$apt->Age}}</p>
    <p style="font-weight:bolder; color:#ff3006">Contact Number of patient: {{$apt->Number}}</p>
    <p style="font-weight:bolder; color:#ff3006">Appointment Time: {{$apt->Timing}}</p>
  </div>
  @endforeach
</div>
</div>

@endsection
