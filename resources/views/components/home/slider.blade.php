<style>
    .carousel-item {
        position: relative;
        overflow: hidden;
    }

    /* .slider-hero {
        animation: zoomInOut 8s infinite alternate;
        transform-origin: center center;
    } */

    @keyframes zoomInOut {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.1); /* Adjust the scale factor for the desired zoom level */
        }
    }

    @media (max-width: 768px) {
        .slider-hero {
            max-height: 200px; /* Adjust the maximum height for smaller screens */
        }

        .carousel-item {
            height: 200px; /* Adjust the height for smaller screens */
        }
    }
</style>

<div>
    <div class="carousel w-full">
        <!-- slider 1 -->
        <div id="slide1" class="carousel-item relative w-full">
            <div class="slider-hero hero h-96" style="background-image: url('assets/home/child/image4.avif');        animation: zoomInOut 8s infinite alternate;">
                <!-- Apply the zoom animation to the background image -->
                <div class="slider-hero-content text-left text-neutral-content bg-neutral m-2">
                    <div class="max-w-md p-5">
                        <h1 class="text-2xl font-bold">
                            Bright Future is Awesome Tool <br />
                            for School Website
                        </h1>
                        <p class="mb-5">Schools support the whole child, the child's <br /> family, and learning.</p>
                        <button class="btn text-white" style="background-color: #5375e2;">Get Started</button>
                    </div>
                </div>
                <div class="slider-hero-overlay bg-opacity-60"></div>
            </div>
        </div>
        <!-- slider 2 -->
        <div id="slide2" class="carousel-item relative w-full">
            <div class="slider-hero hero h-96" style="background-image: url('assets/home/child/image2.jpg');        animation: zoomInOut 8s infinite alternate;">
                <!-- Apply the zoom animation to the background image -->
                <div class="slider-hero-overlay bg-opacity-60"></div>
                <div class="slider-hero-content text-right text-neutral-content">
                    <div class="max-w-md">
                        <p>One Team, one Mission</p>
                        <h1 class="mb-5 text-5xl font-bold">Knowledge</h1>
                        <button class="btn text-white" style="background-color: #5375e2;">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    let currentSlide = 1;
    const totalSlides = 2;
    const slideInterval = 5000;

    function showSlide(slideNumber) {
        document.querySelectorAll('.carousel-item').forEach((slide) => {
            slide.style.display = 'none';
        });

        document.getElementById(`slide${slideNumber}`).style.display = 'block';

        currentSlide = slideNumber;
    }

    function nextSlide() {
        currentSlide = currentSlide % totalSlides + 1;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = currentSlide - 1 || totalSlides;
        showSlide(currentSlide);
    }

    function autoChange() {
        nextSlide();
        setTimeout(autoChange, slideInterval);
    }

    showSlide(currentSlide);
    setTimeout(autoChange, slideInterval);
</script>