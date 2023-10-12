@extends('master')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/add.css') }}">

@php 
use App\Models\User;
$userlogin = Session::has('login') ? Session::get('login') : 'no login';
@endphp
 @if ($userlogin == 'no login')
    <div class="login text-center">
        <h3>You must be login</h3>
        <a class="btn orange" href="{{ route('login')}}">Login</a>
    </div>
 @endif
@if ($userlogin != 'no login')
<h1 class="orangetext text-center">Add save</h1>

<div class="login-box">
<form method="post" action="{{route('addpost')}}" class="orangetext" enctype="multipart/form-data">
    @csrf
    <div class="user-box">
      <input type="text" name="game" required="">
      <label>Game</label>
    </div>
    <div class="user-box">
      <textarea  name="description" required=""></textarea>
      <label>Description</label>
    </div>
    <div class="user-box">
        <input type="file" name="savefile" required="">
    </div>
    <div class="user-box">
        <button type="submit" class="btn m-1 orange">Add</button>
    </div>    
</form>
</div>
@endif
@endsection