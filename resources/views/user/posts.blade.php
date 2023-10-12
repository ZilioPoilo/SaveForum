@extends('user.profile')

@section('profilecontent')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/card.css') }}">
@php 
use App\Models\User;
use App\Models\Save;
$userlogin = Session::has('login') ? Session::get('login') : 'no login';
@endphp
 @if ($userlogin == 'no login')
    <div class="login-box text-center">
        <h3>You must be login</h3>
        <a class="btn orange" href="{{ route('login')}}">Login</a>
    </div>
    <footer class="container">
        
    </footer>
 @endif
@if ($userlogin != 'no login')
@php

$user = User::where('login', Session::get('login'))->firstOrFail();
$saves = Save::all();
echo '<div class="cards">';
foreach($saves as $save)
{
    if($save->userid == $user->id)
    {
@endphp
    <div class="savecard">      
        <div class="wrapper">
            <div class="text-center">
                <h4 class="orangetext">{{$user->nickname}}</h4>
                <h5>{{$save->gametitle}}</h5>
            </div>
            <div class="">
                <textarea readonly class="description whitetext dark">{{$save->descrition}}</textarea>
            </div>
            <div class="download text-center">
                <a class="btn orange" href="{{ route('save.download', ['filepath' => $save->filepath]) }}">Download</a>
            </div>
        </div>
    </div>  
@php
}
}
echo '</div>';
@endphp
@endif

@endsection