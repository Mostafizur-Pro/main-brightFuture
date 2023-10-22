<style>
    .card {
        background-color: #f0f0f0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s, color 0.3s;

    }

    .card:hover {
        background-color: #3498db;
        /* Change to the desired background color on hover */
        color: white;
        /* Change to the desired text color on hover */
    }
</style>
<div class="text-center pt-20 ">
    <!-- <p class="text-gray-400">OUR Pricing</p> -->
    <h1 class="text-3xl font-bold mb-10">Popular Courses</h1>
    <!-- <div class="flex justify-center">
        <img src="{{ asset('assets/home/our-medical/lifeline.png') }}" class="w-20 rounded-lg items-center" />
    </div> -->
</div>

<div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-10">
    <!-- image 1 -->
    <div class="w-full sm:w-96 bg-base-100 shadow-xl card">
        <figure class="px-10 pt-10">
            <img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl w-full" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions">
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
    <!-- image 2 -->
    <div class="w-full sm:w-96 bg-base-100 shadow-xl card">
        <figure class="px-10 pt-10">
            <img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl w-full" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions">
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
    <!-- image 3 -->
    <div class="w-full sm:w-96 bg-base-100 shadow-xl card">
        <figure class="px-10 pt-10">
            <img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl w-full" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions">
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
    
</div>