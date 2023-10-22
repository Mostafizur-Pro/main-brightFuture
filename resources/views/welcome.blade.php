<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bright Future</title>

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
    @include('components/welcome/slider')
    @include('components/welcome/feature')
    @include('components/welcome/banner')
    @include('components/welcome/popularCourses')
    @include('components/welcome/events')
    
    
    
    
    @include('layouts/shared/footer')

</body>

</html>