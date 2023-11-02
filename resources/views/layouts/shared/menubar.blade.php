<div class="navbar bg-base-300 z-40 fixed top-0 w-full ">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-50 p-2 shadow-lg bg-white rounded-lg w-52">
        <li><a href="{{url('/')}}">Home</a></li>
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
            <li><a href="{{url('/all-courses')}}">All Courses</a></li>
            <li><a href="{{url('/basic-autocad')}}">AutoCAD Course</a></li>
            <li><a href="{{url('/javascript')}}">Programming Courses</a></li>
            <li><a href="{{url('/photoshop')}}">Graphic Design Courses</a></li>
            <li><a href="{{url('/hvac')}}">MEP Courses</a></li>
          </ul>
        </li>
        <!-- <li><a href="{{url('/course')}}">Course Details</a></li> -->
        <li><a href="{{url('/about')}}">About</a></li>
        <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
      </ul>
    </div>
    <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl lg:mx-20 ">BRIGHT FUTURE</a>
  </div>

  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{url('/home')}}">Home</a></li>
      <li class="dropdown">
        <label tabindex="0">Page
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
          </svg>
        </label>
        <ul tabindex="0" class="dropdown-content z-50 menu p-2 shadow-lg bg-white rounded-lg w-52">
          <li><a href="{{url('/teachers')}}">Teachers</a></li>
          <li><a href="{{url('/students')}}">Students</a></li>
          <li><a href="{{url('/faq')}}">FAQ</a></li>
          <li><a href="{{url('/blog')}}">Blog</a></li>
          <li><a href="{{url('/contact')}}">Contact</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <label tabindex="0">Course Details
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
          </svg>

        </label>
        <ul tabindex="0" class="dropdown-content z-50 menu p-2 shadow-lg bg-white rounded-lg w-52">
          <li><a href="{{url('/all-courses')}}">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                <path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm64 0v64h64V96H64zm384 0H192v64H448V96zM64 224v64h64V224H64zm384 0H192v64H448V224zM64 352v64h64V352H64zm384 0H192v64H448V352z" />
              </svg> -->
              All Courses
            </a></li>
          <li><a href="{{url('/basic-autocad')}}">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 640 512">
                <path d="M318.4 16l-161 480h77.5l25.4-81.4h119.5L405 496h77.5L318.4 16zm-40.3 341.9l41.2-130.4h1.5l40.9 130.4h-83.6zM640 405l-10-31.4L462.1 358l19.4 56.5L640 405zm-462.1-47L10 373.7 0 405l158.5 9.4 19.4-56.4z" />-->
              </svg>AutoCAD Course</a></li>
          <li>
            <a href="{{url('/javascript')}}">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 640 512">
                <path d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z" />
              </svg> -->
              Programming Courses
            </a>
          </li>
          <li><a href="{{url('/graphic-design-courses')}}">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                <path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z" />
              </svg> -->
              Graphic Design Courses</a></li>
          <li><a href="{{url('/mep/hvac')}}">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512">
                <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
              </svg> -->
              MEP Courses</a></li>
        </ul>
      </li>
      <!-- <li><a href="{{url('/course')}}">Course</a></li> -->
      <li><a href="{{url('/about')}}">About</a></li>
      <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a href="{{url('/login')}}" class="btn">LOGIN</a>
  </div>
</div>