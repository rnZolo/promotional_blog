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
<body class="w-full  flex flex-col justify-center items-center" id="body">
    <div class="navbar backdrop-filter backdrop-blur-lg sticky top-0 text-base p-4">
        <div class="w-full flex justify-center gap-5">
            <a href="{{ route('welcome') }}">Home</a>
            <a href="">About</a>
            <a href="">Destination</a>
            <a href="">Gallery</a>
            <a href="{{ route('comment.index') }}">Contact Us</a>
        </div>
      </div>
    <div class="p-1 w-full h-screen" >    
        @yield('welcome')
        @yield('contactus')
    </div>
    <footer class="w-full h-[50px] grid place-items-center"> Acacia-Soft {{ now()->year }}</footer>
</body>
</html>