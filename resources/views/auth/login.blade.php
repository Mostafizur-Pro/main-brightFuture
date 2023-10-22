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
      <h1 class="text-3xl font-semibold mb-4 text-center">Login Now</h1>
      <p class="text-gray-600 text-center mb-6">Access your account to get started.</p>
      <form class="card-body">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" placeholder="Enter your email" class="input input-bordered" required />
        </div>
        <div class="form-control mt-4">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" placeholder="Enter your password" class="input input-bordered" required />
        </div>
        <div class="flex items-center justify-between mt-4">
          <label class="label">
            <a href="#" class="label-text-alt text-blue-500 hover:underline">Forgot your password?</a>
          </label>
          <button class="btn btn-primary">Login</button>
        </div>
        <p>Create new Account! <a class="text-blue-400" href="{{url('/register')}}">Please Register</a></p>
      </form>
    </div>
    <div class="text-center lg:text-left p-6">
      <h1 class="text-5xl font-bold">Welcome Back!</h1>
      <p class="py-6">Log in to your account and explore our services. If you don't have an account, you can sign up for one.</p>
    </div>
  </div>
</div>

    
</body>
</html>