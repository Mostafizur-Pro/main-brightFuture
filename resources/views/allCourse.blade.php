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

<body>
    @include('layouts/shared/menubar')


    <div class="my-20">
        <!-- Cover Image -->
        @section('all-courses', 'All Course')
        @include('components/allCourse/cover')


        <!-- @yield('allCourse') -->
        @include('components/allCourse/popularCourses')
        <!-- @include('components/allCourse/autocad')
        @include('components/allCourse/program')
        @include('components/allCourse/graphic')
        @include('components/allCourse/mep') -->
        <!--     
        <div class="grid grid-cols-4 mx-20 mt-10 gap-4">
            <div class="col-span-1">
                hi
            </div>

            <div class="col-span-3">
               

            </div>
        </div> -->
    </div>




    @include('layouts/shared/footer')

</body>

</html>