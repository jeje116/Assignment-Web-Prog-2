@extends('layout')

@section('content')

    <div class ="bg-black">
        <div class = "navbar1 font-bold font-serif text-white flex justify-around align-center">
            <button type="button" onclick="window.location='{{ url("mattHome/1") }}'">Home</button>
            <button type="button" onclick="window.location='{{ url("mattHome/2") }}'">About Me</button>
            <button type="button" onclick="window.location='{{ url("mattHome/3") }}'">Personal Info</button>
            <button type="button" onclick="window.location='{{ url("mattHome/4") }}'">Education</button>
        </div>
    </div>


    @switch ($temp)
        @case(1)
            @include('mattcomponent.Landing_section')
            @break
        @case(2)
            @include('mattcomponent.About_me_section')
            @break
        @case(3)
            @include('mattcomponent.Personal_Info')
            @break
        @case(4)
            @include('mattcomponent.Education')
            @break
    @endswitch

@endsection