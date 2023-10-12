@extends('master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/registration.css') }}">

<h1 class="text-center orangetext">Registration</h1>

<div class="login-box">
 
  <form method="post" action="{{url('registrate')}}" class="orangetext">
  @csrf
    <div class="user-box">
      <input type="text" name="nickname" required="">
      <label>Nickname</label>
    </div>
    <div class="user-box">
      <input type="text" name="login" required="">
      <label>Login</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
        <button type="submit" class="btn m-1 orange">Registrate</button>
    </div>
  </form>
</div>

@endsection