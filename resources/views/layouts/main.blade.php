<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>@yield('title')</title>

</head>
<body>

    <div class="min-h-screen bg-gray-200">
        @yield('container')
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>
</html>
