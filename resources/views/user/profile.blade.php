@extends('master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/profile.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}">
@php 
use App\Models\User;
$userlogin = Session::has('login') ? Session::get('login') : 'no login';
@endphp
 @if ($userlogin == 'no login')
    <div class="login-box text-center">
        <h3>You must be login</h3>
        <a class="btn orange" href="{{ route('login')}}">Login</a>
    </div>
    <footer class="container">
        <a class="m-2" href="{{ route('login')}}">Login</a>
        <a class="m-2" href="{{ route('registration')}}">Registration</a>
        <a class="m-2" href="{{ route('logout')}}">Logout</a>
    </footer>
 @endif
 @if ($userlogin != 'no login') 
 @php
 $user = User::where('login', $userlogin)->firstOrFail();
 
 @endphp
    <h1 class="orangetext text-center">Your profile</h1>


    <div class="container">
        <div>
            <h2 class="orangetext">{{$user->nickname}}</h2>
        </div>
        <div class="border-top my-2"></div>
        <div class="display:flex; justify-content:center;">
            <button class="pages"><a class="orangetext" href="{{ route('profile.posts') }}">Posts</a></button>
            <button class="pages"><a class="orangetext" href="{{ route('edit')}}">Edit profile</a></button>
        </div>
        <div>
            @yield('profilecontent')
        </div>
    </div>

 @endif


@endsection