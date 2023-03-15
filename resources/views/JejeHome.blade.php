@extends('layout')

@section('content')

    <div class ="bg-black">
        <div class = "navbar1 font-bold font-serif text-white flex justify-around align-center">
            <button type="button" onclick="window.location='{{ url("JejeHome/1") }}'">Home</button>
            <button type="button" onclick="window.location='{{ url("JejeHome/2") }}'">About Me</button>
            <button type="button" onclick="window.location='{{ url("JejeHome/3") }}'">Personal Info</button>
            <button type="button" onclick="window.location='{{ url("JejeHome/4") }}'">Education</button>
        </div>
    </div>


    @switch ($temp)
        @case(1)
            @include('Jejecomponent.Landing_section')
            @break
        @case(2)
            @include('Jejecomponent.About_me_section')
            @break
        @case(3)
            @include('Jejecomponent.Personal_Info')
            @break
        @case(4)
            @include('Jejecomponent.Education')
            @break
    @endswitch

@endsection