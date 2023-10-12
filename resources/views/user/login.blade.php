@extends('master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">

<h1 class="text-center orangetext">Login</h1>

@if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
@endif



<div class="login-box">
<form method="post" action="{{url('loginpost')}}" class="orangetext" enctype="multipart/form-data">
    @csrf
    <div class="user-box">
      <input type="text" name="login" required="">
      <label>Login</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
        <button type="submit" class="btn m-1 orange">Login</button>
    </div>
    <div class="toreg">
        <a class="orangetext" href="{{ route('registration')}}">Registration</a>
    </div>
    
</form>
</div>



@endsection