@extends('layout')

@section('content')

    <div class ="bg-black">
        <div class = "navbar1 font-bold font-serif text-white flex justify-around align-center">
            <button type="button" onclick="window.location='{{ url("vikaHome/1") }}'">Home</button>
            <button type="button" onclick="window.location='{{ url("vikaHome/2") }}'">About Me</button>
            <button type="button" onclick="window.location='{{ url("vikaHome/3") }}'">Personal Info</button>
            <button type="button" onclick="window.location='{{ url("vikaHome/4") }}'">Education</button>
        </div>
    </div>


    @switch ($temp)
        @case(1)
            @include('vikacomponent.Landing_section')
            @break
        @case(2)
            @include('vikacomponent.About_me_section')
            @break
        @case(3)
            @include('vikacomponent.Personal_Info')
            @break
        @case(4)
            @include('vikacomponent.Education')
            @break
    @endswitch

@endsection