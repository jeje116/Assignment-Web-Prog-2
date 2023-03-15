@php
    $list = array("2020, Odd Semester"=>"Algorithm and Programming", "2020, Even Semester"=>"Data Structure", "2021, Odd Semester"=>"Object Oriented Programming", "2021, Even Semester"=>"Database", "2022, Odd Semester"=>"Deep Learning", "2022, Even Semester"=>"Web Programming");
@endphp



<div class="education_section bg-white">
    <h2 class="text2 py-5 font-bold font-serif text-slate-900 text-center">Education</h2>
    <div class="flex justify-center mb-10">
        <div class="education text3 overflow-hidden bg-white shadow rounded-2xl">
            <div class="border-t">
                <dl>
                    <div class="education bg-white px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6 text-slate-900">
                        <dt class=" font-serif"><p>Binus University</p>
                        <p>Computer Science & Statistics</p></dt>
                        <dd class="font-serif flex justify-end items-center">2020 - 2024</dd>
                    </div>
                </dl>
            </div>

            <div class="px-4 sm:py-5 py-3 sm:px-6">
                <h3 class="font-semibold font-serif leading-6 text-slate-900 text-lg text3">Favourite Course</h3>
            </div>
            <div class="border-t">
                <dl>
                    @foreach ($list as $i=>$val)
                    <div class="education bg-gray-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                        <dt class="font-serif font-medium text-slate-500 flex items-center">{{$i}}</dt>
                        <dd class="font-serif text-slate-900 flex item-center">{{$val}}</dd>
                    </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
</div>