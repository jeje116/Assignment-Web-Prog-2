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
                <a class = "textBut md:mr-10 mr-5" href="/mattHome">Matthew</a>
                <a class = "textBut md:mr-10 mr-5" href="/vierenHome">Vieren</a>
                <a class = "textBut" href="/vikaHome">Vika</a>
            </div>
        </div>

        @yield('content')

    </body>
</html>
