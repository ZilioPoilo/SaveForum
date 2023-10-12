@extends('master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/card.css') }}">
<h1 class="orangetext text-center">Home</h1>

@php
use App\Models\User;
use App\Models\Save;
$users = User::all();
$saves = Save::all();
echo '<div class="cards">';
foreach($saves as $save)
{
@endphp
    <div class="savecard">      
        <div class="wrapper">
            <div class="text-center">
                @foreach($users as $user)
                @if($user->id == $save->userid)
                    <h4 ><a class="orangetext" href="{{ route('some.profile', ['id' => $user->id]) }}">{{$user->nickname}}</a></h4>
                @endif
                @endforeach
                <h5>{{$save->gametitle}}</h5>
            </div>
            <div class="">
                <textarea readonly class="description whitetext dark">{{$save->descrition}}</textarea>
            </div>
            <div class="download text-center">
                <a class="btn orange" href="{{ route('save.download', ['filepath' => $save->filepath])}}">Download</a>
            </div>
        </div>
    </div>  
@php
}
echo '</div>';
@endphp

@endsection