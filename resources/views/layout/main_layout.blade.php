<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include("inc.links_scripts")
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
            <a href="{{ route('comment.index') }}" class="{{ request()->is('ContactUs/comment') ? 'grad-text' : ''}}">Contact Us</a>
      </div>
    <div class="w-full h-fit bg-transaparent bg-white">   
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
        @yield('content')
        <hr class="my-1 h-0.5 border-t-0 bg-slate-700 opacity-100 dark:opacity-50 mt-3" />
    </div>
    
    <footer class="z-10 w-full 16pxt grid place-items-center hdr bg-white text-blue-900 p-3">
        <div class="w-full flex flex-end text-sm p-3">
                <a href="{{ route('welcome') }}" class="{{ request()->is('blogs') ? 'grad-text' : ''}} ml-auto">Home</a>
                <div class="divider lg:divider-horizontal"></div> 
                <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'grad-text' : ''}}">About</a>
                <div class="divider lg:divider-horizontal"></div> 
                <a href="{{ route('wheretogo') }}" class="{{ request()->is('where-to-go') ? 'grad-text' : ''}}">Where To Go</a>
                <div class="divider lg:divider-horizontal"></div> 
                <a href="{{ route('gallery') }}" class="{{ request()->is('gallery') ? 'grad-text' : ''}}">Gallery</a>
                <div class="divider lg:divider-horizontal"></div> 
                <a href="{{ route('comment.index') }}" class="{{ request()->is('ContactUs/comment') ? 'grad-text' : ''}}">Contact Us</a>
        </div>
        <span class="ml-auto text-sm pr-3">
        Renz Sagge {{ now()->year }}
        </span>
        <div class="flex justify-end gap-3 w-[200px] ml-auto pr-3">
            <a href="#"><i class="bi bi-github text-[16px] text-blue-900"></i></a>
            <a href="#"><i class="bi bi-facebook text-[16px] text-blue-900"></i></a>
            <a href="#"><i class="bi bi-envelope-at-fill text-[16px] text-blue-900"></i></a>
            <a href="#"><i class="bi bi-linkedin text-[16px] text-blue-900"></i></a>
        </div>  
       </footer>
       @yield('jsbottom')
</body>
</html>