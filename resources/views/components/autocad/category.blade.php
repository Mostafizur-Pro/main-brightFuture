<div class="w-4/5">
    <form>
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
            Search
        </label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-none bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />

        </div>
    </form>
    <hr class="my-10" />

    <div>
        <h1 class="text-2xl font-bold">Categories</h1>
        <div class=" my-2 ">
            <!-- <li class="my-3 text-xl">
                <a href="{{url('/basic-autocad-free')}}">Basic AutoCAD 2D (Free)</a>
            </li> -->
            <li class="my-3 text-xl">
                <a href="{{url('/basic-autocad')}}">Basic AutoCAD 2D </a>
            </li>
            <li class="my-3 text-xl">
                <a href="{{url('/advance-autocad')}}">Advanced AutoCAD 2D </a>
            </li>
            <li class="my-3 text-xl">
                <a href="{{url('/basic-autocad-3d')}}">Basic AutoCAD 3D </a>
            </li>
            <li class="my-3 text-xl">
                <a href="{{url('/basic-sketchup-3d')}}">Basic SketchUp 3D </a>
            </li>
        </div>
    </div>
    <hr class="my-10" />
    @include('components/course')
</div>