<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS & DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- <link rel="stylesheet" href="/public/css/slider.css"> -->
</head>

<body class="bg-white">
    @include('layouts/shared/menubar')


    <div class="my-20">
        @section('autocad-cover', 'AutoCAD Course')
        @include('components/autocad/cover')


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mx-5 md:mx-20 lg:mx-20 mt-10 gap-4">
            <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-1">
                @include('components/autocad/category')
            </div>

            <div class="col-span-1 sm:col-span-2 md:col-span-3 lg:col-span-3">
                @yield('autocad')
            </div>
        </div>

    </div>




    @include('layouts/shared/footer')

</body>

</html>