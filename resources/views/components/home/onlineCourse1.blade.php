<style>
    .card__online {
        overflow: visible;
        width: 190px;
        height: 254px;
    }

    .content__online {
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transition: transform 300ms;
        box-shadow: 0px 0px 10px 1px #000000ee;
        border-radius: 5px;
    }

    .front,
    .back {
        background-color: #5375e2;
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        border-radius: 5px;
        overflow: hidden;
    }

    .back {
        width: 100%;
        height: 100%;
        justify-content__online: center;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .back::before {
        position: absolute;
        content: ' ';
        display: block;
        width: 160px;
        height: 160%;
        background: linear-gradient(90deg, transparent, #ff9966, #ff9966, #ff9966, #ff9966, transparent);
        animation: rotation_481 5000ms infinite linear;
    }

    .back-content__online {
        position: absolute;
        width: 99%;
        height: 99%;
        background-color: #151515;
        border-radius: 5px;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    .card__online:hover .content__online {
        transform: rotateY(180deg);
    }

    @keyframes rotation_481 {
        0% {
            transform: rotateZ(0deg);
        }

        0% {
            transform: rotateZ(360deg);
        }
    }

    .front {
        transform: rotateY(180deg);
        color: white;
    }

    .front .front-content__online {
        position: absolute;
        width: 100%;
        height: 100%;
        padding: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .front-content__online .badge {
        background-color: #00000055;
        padding: 2px 10px;
        border-radius: 10px;
        backdrop-filter: blur(2px);
        width: fit-content;
    }

    .description {
        box-shadow: 0px 0px 10px 5px #00000088;
        width: 100%;
        padding: 10px;
        background-color: #00000099;
        backdrop-filter: blur(5px);
        border-radius: 5px;
    }

    .title {
        font-size: 11px;
        max-width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .title p {
        width: 50%;
    }

    .card__online-footer {
        color: #ffffff88;
        margin-top: 5px;
        font-size: 8px;
    }

    .front .img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .circle {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background-color: #ffbb66;
        position: relative;
        filter: blur(15px);
        animation: floating 2600ms infinite linear;
    }

    #bottom {
        background-color: #ff8866;
        left: 50px;
        top: 0px;
        width: 150px;
        height: 150px;
        animation-delay: -800ms;
    }

    #right {
        background-color: #ff2233;
        left: 160px;
        top: -80px;
        width: 30px;
        height: 30px;
        animation-delay: -1800ms;
    }

    @keyframes floating {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0px);
        }
    }
</style>

<div class="my-10">
    <div class="text-center my-10">
        <h2 class="text-3xl font-bold">Our Online Courses</h2>
    </div>

    <div class="container mx-auto grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-10">
        <div class="card__online">
            <div class="content__online">
                <div class="back">
                    <div class="back-content__online">
                        <img src="/assets/home/online/Autocad-logo.png" height="150px" width="150px" alt="">
                        <h1 class="text-2xl">AutoCAD</h1>
                    </div>
                </div>
                <div class="front">

                    <div class="img">
                        <div class="circle">
                        </div>
                        <div class="circle" id="right">
                        </div>
                        <div class="circle" id="bottom">
                        </div>
                    </div>

                    <div class="front-content__online">
                        <small class="badge text-white">AutoCAD</small>
                        <div class="description">
                        <div class="">
                                <p class=""> Basic AutoCAD 2D </p>
                                <p class=""> Advanced AutoCAD 2D </p>
                                <p class=""> Basic AutoCAD 3D</p>
                                <p class=""> Basic SketchUp 3D</p>
                                <p class=""> Basic 3ds Max</p>
                                
                                <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                    <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                                        <g transform="scale(8,8)">
                                            <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p class="card__online-footer">
                                30 Mins &nbsp; | &nbsp; 1 Serving
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card__online">
            <div class="content__online">
                <div class="back">
                    <div class="back-content__online">
                        <div class="back-content__online">
                            <img src="/assets/home/online/programming.png" height="150px" width="150px" alt="">
                            <h1 class="text-2xl">Programming</h1>
                        </div>
                    </div>
                </div>
                <div class="front">

                    <div class="img">
                        <div class="circle">
                        </div>
                        <div class="circle" id="right">
                        </div>
                        <div class="circle" id="bottom">
                        </div>
                    </div>

                    <div class="front-content__online">
                        <small class="badge">Programming</small>
                        <div class="description">
                        <div class="">
                                <p class=""> HTML, CSS Program </p>
                                <p class=""> JavaScript Language </p>
                                <p class=""> React Development</p>
                                <p class=""> Redux Development</p>
                                <p class=""> NextJS Development</p>
                                <p class=""> PHP, Laravel Development</p>
                                
                                <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                    <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                                        <g transform="scale(8,8)">
                                            <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p class="card__online-footer">
                                30 Mins &nbsp; | &nbsp; 1 Serving
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card__online">
            <div class="content__online">
                <div class="back">
                    <div class="back-content__online">
                        <img src="/assets/home/online/graphic.png" height="100px" width="100px" alt="">
                        <h1 class="text-2xl">Graphic</h1>
                    </div>
                </div>
                <div class="front">

                    <div class="img">
                        <div class="circle">
                        </div>
                        <div class="circle" id="right">
                        </div>
                        <div class="circle" id="bottom">
                        </div>
                    </div>

                    <div class="front-content__online">
                        <small class="badge">Graphic</small>
                        <div class="description">
                            <div class="">
                                <p class=""> Adobe PhotoShop </p>
                                <p class=""> Adobe Illustrator </p>
                                <p class=""> Adobe InDesign </p>
                                
                                <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                    <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                                        <g transform="scale(8,8)">
                                            <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p class="card__online-footer">
                                30 Mins &nbsp; | &nbsp; 1 Serving
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card__online">
            <div class="content__online">
                <div class="back">
                    <div class="back-content__online">
                        <img src="/assets/home/online/mep.png" height="100px" width="100px" alt="">
                        <h1 class="text-2xl">MEP</h1>
                    </div>
                </div>
                <div class="front">

                    <div class="img">
                        <div class="circle">
                        </div>
                        <div class="circle" id="right">
                        </div>
                        <div class="circle" id="bottom">
                        </div>
                    </div>

                    <div class="front-content__online">
                        <small class="badge">MEP</small>
                        <div class="description">
                            <div class="">
                                <p class=""> HVAC Design </p>
                                <p class=""> Electrical Design </p>
                                <p class=""> Plumbing Design </p>
                                <p class=""> Fire Design </p>
                                <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                    <g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997">
                                        <g transform="scale(8,8)">
                                            <path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <p class="card__online-footer">
                                30 Mins &nbsp; | &nbsp; 1 Serving
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>