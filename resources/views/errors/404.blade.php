<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('inc.cdn')
    <title>error</title>
</head>
<body class="w-full h-screen bg-white">
   <div class="w-full h-full grid place-content-center bg-slate">
            <img class="w-[400px] aspect-square" src="{{ asset('assets/img/error/nothingfound1.png') }}" alt="" srcset="">
            <h1 class="w-[350px] text-center text-[2vw] font-bold text-black my uppercase block">There's nothing here</h1>
   </div>
</body>
</html>