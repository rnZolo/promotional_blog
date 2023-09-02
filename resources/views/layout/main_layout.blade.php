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
<body class="w-full flex flex-col justify-center items-center relative my-bg" id="body">
    <div class='z-50 text-white absolute top-0 navbar text-base w-full flex justify-center gap-5 text-black z-20 font-bold' >
            <a href="{{ route('welcome') }}" class="{{ request()->is('blogs') ? 'grad-text' : ''}}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'grad-text' : ''}}">About</a>
            <a href="{{ route('wheretogo') }}" class="{{ request()->is('where-to-go') ? 'grad-text' : ''}}">Where To Go</a>
            <a href="{{ route('gallery') }}" class="{{ request()->is('gallery') ? 'grad-text' : ''}}">Gallery</a>
            <a href="{{ route('comment.index') }}" class="{{ request()->is('contactus') ? 'grad-text' : ''}}">Contact Us</a>
      </div>
    <div class="w-full h-fit bg-white">   
    <div class="z-10 custom-shape-divider-top-1693637795">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z" class="shape-fill"></path>
                            </svg>
                     </div> 
        @yield('welcome')
        @yield('about')
        @yield('where')
        @yield('gallery')
        @yield('contactus')
        <footer class="z-10 w-full max-h-[50px] grid place-items-center hdr">
            Acacia-Soft {{ now()->year }}
       </footer>
    </div>

</body>
</html>