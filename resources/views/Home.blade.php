@extends('layout')

@section('content')

    <div class ="bg-black">
        <div class = "navbar1 font-bold font-serif text-white flex justify-around align-center">
            <button type="button" onclick="window.location='{{ url("Home/1") }}'">Home</button>
            <button type="button" onclick="window.location='{{ url("Home/2") }}'">About Me</button>
            <button type="button" onclick="window.location='{{ url("Home/3") }}'">Personal Info</button>
            <button type="button" onclick="window.location='{{ url("Home/4") }}'">Education</button>
        </div>
    </div>


    @switch ($temp)
        @case(1)
            @include('component.Landing_section')
            @break
        @case(2)
            @include('component.About_me_section')
            @break
        @case(3)
            @include('component.Personal_Info')
            @break
        @case(4)
            @include('component.Education')
            @break
    @endswitch

@endsection