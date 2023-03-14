<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Profile</title>
    </head>
    <body>
    <div class ="navbar flex items-center justify-between sticky top-0 z-40 bg-white">
            <h2 class = "text4 font-bold font-serif text-slate-900">PROFILE</h2>
            
            <input type="checkbox" class="check">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg>

            <div class = "button font-bold font-serif text-slate-900 flex">
                <a class = "textBut md:mr-10 mr-5" href="\">Jasons</a>
                <a class = "textBut md:mr-10 mr-5" href="/matt">Matthew</a>
                <a class = "textBut md:mr-10 mr-5" href="/vieren">Vieren</a>
                <a class = "textBut" href="/vika">Vika</a>
            </div>
        </div>
        <div class="about_section bg-rose-900 flex">
            <div class="about_section_content text-white flex items-center justify-center">
                <div class="text_content">
                    <h1 class="text1 font-bold font-serif">Hello,</h1>
                    <h2 class="text2 font-serif font-light">I'm Vieren Cristian</h2>
                </div>
            </div>
            <div class="foto">
                <img src="{{url('/images/fotovieren.png')}}" alt="">
            </div>
        </div>
        <div class="about_me_section">
            <div class="bg-rose-700 sm:py-24 py-10">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto">
                        <h2 class="text2 font-bold font-serif text-white text-center">About Me</h2>
                        <p class="text3 font-serif font-light py-6 text-lg text-white text-center">You can call me Vieren. I am passionate about data analysis and have additional skills in web development and design as well. My strong soft skills in flexibility, teamwork, and adaptability allow me to collaborate effectively, adapt to changes, and achieve success in dynamic environments.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="profile_section bg-rose-600">
            <div class="profile_section_content">
                <div class="overflow-hidden shadow flex sm:p-10 p-5">
                    <div class="detail text3 items-center">
                        <div class="bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6 rounded-t-2xl">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Full name</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">Vieren Cristian</dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Gender</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">Female</dd>
                        </div>
                        <div class="bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Date of birth</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">16 January 2002</dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Place of birth</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">Jakarta, Indonesia</dd>
                        </div>
                        <div class="bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Email address</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">vierencristian16@gmail.com</dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-2 sm:gap-4 sm:px-6 rounded-b-2xl">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Phone number</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">+62 816 880 516</dd>
                        </div>
                    </div>
                    <div class="text3 skills_hobbies sm:pl-10 h-full pl-5 self-center">
                        <div class="bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-4 sm:gap-4 sm:px-6 rounded-t-2xl">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Soft Skills</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Flexibility</p>
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Teamwork</p>
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Adaptability</p>
                            </dd>
                        </div>
                        <div class="bg-white px-4 sm:py-5 py-3 grid grid-cols-4 sm:gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Hard Skills</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>HTML</p>
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>R</p>
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>SQL</p>
                            </dd>
                        </div>
                        <div class="bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-4 sm:gap-4 sm:px-6 rounded-b-2xl">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">Hobbies</dt>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Basketball</p>                              
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Watching Movies</p> 
                            </dd>
                            <dd class="font-serif text-slate-900 sm:mt-0 flex items-center">
                                <p>Photography</p>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <div class="education bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                                <dt class="font-serif font-medium text-slate-500 flex items-center">2020, Odd Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center">Calculus</dd>
                            </div>
                            <div class="education bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                                <dt class="font-serif font-medium text-slate-500 flex items-center">2020, Even Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center ">Data Structure</dd>
                            </div>
                            <div class="education bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">2021, Odd Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center ">Program Design Methods</dd>
                            </div>
                            <div class="education bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">2021, Even Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center ">Non Parametric Statistics</dd>
                            </div>
                            <div class="education bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">2022, Odd Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center ">Categorical Data Analysis</dd>
                            </div>
                            <div class="education bg-rose-50 px-4 sm:py-5 py-3 grid grid-cols-2 gap-4 sm:px-6">
                            <dt class="font-serif font-medium text-slate-500 flex items-center">2022, Even Semester</dt>
                                <dd class="font-serif text-slate-900 flex item-center">Web Programming</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
