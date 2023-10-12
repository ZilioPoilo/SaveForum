@extends('master')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/profile.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/card.css') }}">
@php 
use App\Models\User;
use App\Models\Save;
@endphp
    <h1 class="orangetext text-center">Profile</h1>
    <div class="container">
        <div>
            <h2 class="orangetext">{{$user->nickname}}</h2>
        </div>
        <div class="border-top my-2"></div>
        <div>
        @php    
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
        </div>
    </div>


@endsection