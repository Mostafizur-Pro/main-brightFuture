<div class="navbar bg-base-300 z-40 fixed top-0 w-full">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-50 p-2 shadow-lg bg-white rounded-lg w-52">
        <li><a href="{{url('/')}}">HOME</a></li>
        <li>
          <a>Page</a>
          <ul class="p-2">
            <li><a href="{{url('/faq')}}">FAQ</a></li>
            <li><a href="{{url('/blog')}}">Blog</a></li>
            <li><a href="{{url('/contact')}}">Contact</a></li>
          </ul>
        </li>
        <li>
          <a>Course Details</a>
          <ul class="p-2">
            <li><a href="{{url('/faq')}}">FAQ</a></li>
            <li><a href="{{url('/blog')}}">Blog</a></li>
            <li><a href="{{url('/contact')}}">Contact</a></li>
          </ul>
        </li>
        <!-- <li><a href="{{url('/course')}}">Course Details</a></li> -->
        <li><a href="{{url('/about')}}">ABOUT</a></li>
        <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
      </ul>
    </div>
    <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl">BRIGHT FUTURE</a>
  </div>

  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{url('/')}}">HOME</a></li>
      <li class="dropdown">
        <label tabindex="0">Page</label>
        <ul tabindex="0" class="dropdown-content z-50 menu p-2 shadow-lg bg-white rounded-lg w-52">
          <li><a href="{{url('/faq')}}">FAQ</a></li>
          <li><a href="{{url('/blog')}}">Blog</a></li>
          <li><a href="{{url('/contact')}}">Contact</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <label tabindex="0">Course Details</label>
        <ul tabindex="0" class="dropdown-content z-50 menu p-2 shadow-lg bg-white rounded-lg w-52">
          <li><a href="{{url('/basic-autocad')}}">AutoCAD Course</a></li>
          <li><a href="{{url('/programming-courses')}}">Programming Courses</a></li>
          <li><a href="{{url('/graphic-design-courses')}}">Graphic Design Courses</a></li>
          <li><a href="{{url('/mep-courses')}}">MEP Courses</a></li>
        </ul>
      </li>
      <!-- <li><a href="{{url('/course')}}">Course</a></li> -->
      <li><a href="{{url('/about')}}">ABOUT</a></li>
      <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a href="{{url('/login')}}" class="btn">LOGIN</a>
  </div>
</div>