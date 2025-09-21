<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @include('partials.header')
    
    <div class="flex container mx-auto mt-6">
        @include('partials.sidebar')

        <div class="flex-1 ml-6">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
