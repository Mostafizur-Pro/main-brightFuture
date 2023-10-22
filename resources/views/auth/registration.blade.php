<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS & DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

@include('layouts/shared/menubar')

<div class="hero min-h-screen bg-base-200">
  <div class="hero-content flex-col lg:flex-row-reverse items-center justify-center">
    <div class="card flex-shrink-0 w-full max-w-md p-6 shadow-2xl bg-white">
      <h1 class="text-3xl font-semibold mb-4 text-center">Create an Account</h1>
      <p class="text-gray-600 text-center mb-6">Join us today and start your journey.</p>
      <form class="card-body">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Full Name</span>
          </label>
          <input type="text" placeholder="Enter your full name" class="input input-bordered" required />
        </div>
        <div class="form-control mt-4">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" placeholder="Enter your email" class="input input-bordered" required />
        </div>
        <div class="form-control mt-4">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" placeholder="Create a password" class="input input-bordered" required />
        </div>
        <div class="form-control mt-4">
          <label class="label">
            <span class="label-text">Confirm Password</span>
          </label>
          <input type="password" placeholder="Confirm your password" class="input input-bordered" required />
        </div>
        <div class="flex items-center justify-between mt-4">
          <button class="btn btn-primary">Register</button>
        </div>
        <p>Already have an account ! <a class="text-blue-400" href="{{url('/login')}}">Please Login</a></p>
      </form>
    </div>
    <div class="text-center lg:text-left p-6">
      <h1 class="text-5xl font-bold">Join Us Today!</h1>
      <p class="py-6">Create your account and unlock access to our exclusive features and content.</p>
    </div>
  </div>
</div>

    
</body>
</html>