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
<body class="w-full flex flex-col justify-center items-center my-bg relative" id="body">
    <div class="absolute top-0 navbar bg-white/30 backdrop-filter backdrop-blur-lg  text-base w-full flex justify-center gap-5 text-black z-20" >
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('wheretogo') }}">Where To Go</a>
            <a href="{{ route('gallery') }}">Gallery</a>
            <a href="{{ route('comment.index') }}">Contact Us</a>
      </div>
    <div class=" w-full h-fit bg-cover bg-no-repeat">    
        @yield('welcome')
        @yield('about')
        @yield('where')
        @yield('gallery')
        @yield('contactus')
        {{-- <div class="z-10 opacity-75 custom-shape-divider-top-1693493922">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
            </svg>
        </div> --}}
        <div class="z-10 custom-shape-divider-top-1693540326">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <footer class="z-10 w-full h-[50px] grid place-items-center hdr">
            Acacia-Soft {{ now()->year }}
       </footer>
    </div>

</body>
</html>