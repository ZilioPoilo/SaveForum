@extends('user.profile')

@section('profilecontent')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/edit.css') }}">

@php 
use App\Models\User;
$user = User::where('login', Session::get('login'))->firstOrFail();
@endphp

<div class="edit-box">
<form method="post" action="{{ route('editlogin')}}" class="orangetext" enctype="multipart/form-data">
    @csrf
    <div class="input-box">
      <label for="login">Login:</label>
      <input type="text" name="login" required="" value="{{$user->login}}">
    </div>
    <div class="user-box">
        <button type="submit" class="btn m-1 orange">Edit login</button>
    </div>
</form>

<form method="post" action="{{ route('editnickname')}}" class="orangetext" enctype="multipart/form-data">
    @csrf
    <div class="input-box">
      <label for="login">Nickname:</label>
      <input type="text" name="nickname" required="" value="{{$user->nickname}}">
    </div>
    <div class="user-box">
        <button type="submit" class="btn m-1 orange">Edit nickname</button>
    </div>
</form>

<form method="post" action="{{ route('editpassword')}}" class="orangetext" enctype="multipart/form-data">
    @csrf
    <div class="input-box">
      <label for="login">Password:</label>
      <input type="password" name="password" required="">
    </div>
    <div class="user-box">
        <button type="submit" class="btn m-1 orange">Edit password</button>
    </div>
</form>
<div class="logout">
<a class="btn orange" href="{{ route('logout')}}">Logout</a>
</div>
</div>

@endsection