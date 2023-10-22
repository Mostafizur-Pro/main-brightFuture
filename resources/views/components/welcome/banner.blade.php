<div class="hero  ">
    <div class="hero-content flex-col lg:flex-row">
        <img src="{{ asset('assets/home/banner/banner.jpg') }}" class="max-w-lg rounded-lg " />
        <div>

            <h1 class="text-3xl font-bold"> Always Push Yourself to The Next Level</h1>
            <div class="collapse collapse-plus ">
                <input type="radio" name="my-accordion-3" checked="checked" />
                <div class="collapse-title text-xl font-medium">
                    Click to open this one and close others
                </div>
                <div class="collapse-content">
                    <p>hello</p>
                </div>
            </div>
            <div class="collapse collapse-plus ">
                <input type="radio" name="my-accordion-3" />
                <div class="collapse-title text-xl font-medium">
                    Click to open this one and close others
                </div>
                <div class="collapse-content">
                    <p>hello</p>
                </div>
            </div>
            <div class="collapse collapse-plus ">
                <input type="radio" name="my-accordion-3" />
                <div class="collapse-title text-xl font-medium">
                    Click to open this one and close others
                </div>
                <div class="collapse-content">
                    <p>hello</p>
                </div>
            </div>
            <button class="btn btn-primary"><a href="{{url('/about')}}">MORE ABOUT</a></button>
        </div>
    </div>
</div>