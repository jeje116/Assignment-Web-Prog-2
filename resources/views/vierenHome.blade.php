@extends('layout')

@section('content')

    <div class ="bg-black">
        <div class = "navbar1 font-bold font-serif text-white flex justify-around align-center">
            <button type="button" onclick="window.location='{{ url("vierenHome/1") }}'">Home</button>
            <button type="button" onclick="window.location='{{ url("vierenHome/2") }}'">About Me</button>
            <button type="button" onclick="window.location='{{ url("vierenHome/3") }}'">Personal Info</button>
            <button type="button" onclick="window.location='{{ url("vierenHome/4") }}'">Education</button>
        </div>
    </div>


    @switch ($temp)
        @case(1)
            @include('vierencomponent.Landing_section')
            @break
        @case(2)
            @include('vierencomponent.About_me_section')
            @break
        @case(3)
            @include('vierencomponent.Personal_Info')
            @break
        @case(4)
            @include('vierencomponent.Education')
            @break
    @endswitch

@endsection