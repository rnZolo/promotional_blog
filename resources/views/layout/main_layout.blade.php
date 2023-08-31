<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include("inc.cdn")
    <title>{{ $page_title ?? ''}}</title>
    <style>
        *{
            /* outline: 1px dashed rgb(160, 43, 43); */
        }

    </style>
</head>
<body class="w-full flex flex-col justify-center items-center  relative" id="body">
    <div class="absolute top-0 navbar bg-white/30 backdrop-filter backdrop-blur-lg  text-base w-full flex justify-center gap-5 text-black z-10" >
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="">Where To Go</a>
            <a href="">Gallery</a>
            <a href="{{ route('comment.index') }}">Contact Us</a>
      </div>
    <div class=" w-full h-fit bg-[url({{ asset('assets/img/bg1.jpg') }})] bg-cover bg-no-repeat">    
        @yield('welcome')
        @yield('about')
        @yield('where')
        @yield('gallery')
        @yield('contactus')
        <footer class="w-full h-[50px] grid place-items-center text-black"> Acacia-Soft {{ now()->year }}</footer>
    </div>
    
</body>
</html>