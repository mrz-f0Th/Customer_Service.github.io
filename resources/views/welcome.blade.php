<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main id="app">
        {{-- <navbar></navbar> --}}
        {{-- <div class="pl-24 pt-16 h-full bg-gray-50"> --}}
            <router-view></router-view>
        {{-- </div> --}}
    </main>
    <script src="/js/app.js"></script>
</body>
</html>
