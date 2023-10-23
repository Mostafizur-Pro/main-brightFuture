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
            <li className="my-5">
                <a href="{{url('/photoshop')}}">Adobe PhotoShop</a>
            </li>
            <li className="my-5">
                <a href="{{url('/photoshop')}}">Adobe Illustrator</a>
            </li>
            <li className="my-5">
                <a href="{{url('/photoshop')}}">Adobe InDesign</a>
            </li>
           
        </div>
    </div>
    <hr class="my-10" />
    <div>
        <h1 class="text-2xl font-bold mb-5">Other's Course</h1>

        <div class="grid grid-cols-4 gap-3">
            <figure class="col-span-1">
                <img class="h-5/6" src="{{url('assets/category/autocad.png')}}" alt="blog" />
            </figure>
            <div class="col-span-3">
                <a href="{{url('basic-autocad')}}" class="font-bold">AutoCAD Course</a>
                <!-- <p class="text-gray-400">April 4, 2023</p> -->
            </div>
        </div>
        <div class="grid grid-cols-4 gap-3">
            <figure class="col-span-1">
                <img class="h-5/6" src="{{url('assets/category/program.jpg')}}" alt="blog" />
            </figure>
            <div class="col-span-3">
                <a href="{{url('javascript')}}" class="font-bold">Programming Course</a>
                <!-- <p class="text-gray-400">April 4, 2023</p> -->
            </div>
        </div>
        <div class="grid grid-cols-4 gap-3 mt-5">
            <figure class="col-span-1">
                <img class="h-5/6" src="{{url('assets/category/photoshop.png')}}" alt="blog" />
            </figure>
            <div class="col-span-3">
                <a href="{{url('photoshop')}}"  class="font-bold">Graphic Design Course</a>
                <!-- <p class="text-gray-400">April 4, 2023</p> -->
            </div>
        </div>
        <div class="grid grid-cols-4 gap-3 mt-5">
            <figure class="col-span-1">
                <img class="h-5/6" src="{{url('assets/category/mep.jpeg')}}" alt="blog" />
            </figure>
            <div class="col-span-3">
                <a href="{{url('hvac')}}"  class="font-bold">Mep Course</a>
                <!-- <p class="text-gray-400">April 4, 2023</p> -->
            </div>
        </div>
       
    </div>
</div>