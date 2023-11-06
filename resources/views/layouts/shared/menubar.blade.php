<div class="navbar bg-base-300 z-40 fixed top-0 w-full">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-50 p-2 shadow-lg bg-white rounded-lg w-52">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>
          <a>Page</a>
          <ul class="p-2">
            <li><a href="{{ url('/faq') }}">FAQ</a></li>
            <li><a href="{{ url('/blog') }}">Blog</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </li>

        <li>
          <a>Course Details</a>
          <ul class="p-2">
            <li><a href="{{ url('/all-courses') }}">All Courses</a></li>
            <li><a href="{{ url('/autocad/basic-autocad') }}">AutoCAD Course</a></li>
            <li><a href="{{ url('/programming/javascript') }}">Programming Courses</a></li>
            <li><a href="{{ url('/graphic/graphic-design-courses') }}">Graphic Design Courses</a></li>
            <li><a href="{{ url('/mep/hvac') }}">MEP Courses</a></li>
            <li>
              <details close>
                <summary>Paid Course</summary>
                <ul>
                  <li><a>Basic-Advanced AutoCAD 2D</a></li>
                  <li><a>Advanced AutoCAD 2D</a></li>
                </ul>
              </details>
            </li>
          </ul>
        </li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
      </ul>
    </div>
    <a href="{{ url('/') }}" class="btn btn-ghost normal-case text-xl lg:mx-20">BRIGHT FUTURE</a>
  </div>

  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li class="dropdown">
        <label tabindex="0">Page
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
          </svg>
        </label>
        <ul tabindex="0" class="dropdown-content z-50 menu p-2 shadow-lg bg-white rounded-lg w-52">
          <li><a href="{{ url('/teachers') }}">Teachers</a></li>
          <li><a href="{{ url('/students') }}">Students</a></li>
          <li><a href="{{ url('/faq') }}">FAQ</a></li>
          <li><a href="{{ url('/blog') }}">Blog</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <label tabindex="0">Course Details
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
          </svg>
        </label>
        <ul tabindex="0" class="dropdown-content z-50 menu p-2 shadow-lg bg-white rounded-lg w-52">
          <li><a href="{{ url('/all-courses') }}">All Courses</a></li>
          <li><a href="{{ url('/autocad/basic-autocad') }}">AutoCAD Course</a></li>
          <li><a href="{{ url('/programming/javascript') }}">Programming Courses</a></li>
          <li><a href="{{ url('/graphic/photoshop') }}">Graphic Design Courses</a></li>
          <li><a href="{{ url('/mep/hvac') }}">MEP Courses</a></li>
          <li>
            <details close>
              <summary>Paid Course</summary>
              <ul>
                <li><a>Basic-Advanced AutoCAD 2D</a></li>
                <li><a>Advanced AutoCAD 2D</a></li>
              </ul>
            </details>
          </li>
        </ul>
      </li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a href="{{ url('/login') }}" class="btn">LOGIN</a>
  </div>
</div>
