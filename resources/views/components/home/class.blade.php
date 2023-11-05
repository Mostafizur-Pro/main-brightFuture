<style>
    /* .parent {
        width: 250px;
        perspective: 800px;
    } */

    .class-card {
        padding-top: 30px;
        border: 3px solid rgb(255, 255, 255);
        transform-style: preserve-3d;
        background: linear-gradient(135deg, #0000 18.75%, #f3f3f3 0 31.25%, #0000 0),
            repeating-linear-gradient(45deg, #f3f3f3 -6.25% 6.25%, #ffffff 0 18.75%);
        background-size: 60px 60px;
        background-position: 0 0, 0 0;
        background-color: #f0f0f0;
        width: 100%;
        box-shadow: rgba(142, 142, 142, 0.3) 0px 30px 30px -10px;
        transition: all 0.5s ease-in-out;
    }

    .class-card:hover {
        background-position: -100px 100px, -100px 100px;
        transform: rotate3d(0.5, 1, 0, 30deg);
    }

    .content-box {
        background: rgb(4, 193, 250);
        /* border-style: ridge; */

        border-radius: 10px 50px 10px 10px;
        transition: all 0.5s ease-in-out;
        padding: 60px 25px 25px 25px;
        transform-style: preserve-3d;
    }

    .content-box .class-card-title {
        display: inline-block;

        /* color: white; */
        font-size: 20px;
        font-weight: 900;
        transition: all 0.5s ease-in-out;
    }

    .content-box .class-card-title:hover {
        transform: translate3d(0px, 0px, 50px);
    }

    .content-box .class-card-content {
        margin-top: 10px;
        font-size: 14px;
        font-weight: 700;
        /* color: #f2f2f2; */
        transition: all 0.5s ease-in-out;
    }

    .content-box .class-card-content:hover {
        transform: translate3d(0px, 0px, 30px);
    }

    .content-box .see-more {
        cursor: pointer;
        margin-top: 1rem;
        display: inline-block;
        /* font-weight: 900; */
        font-size: 14px;
        text-transform: uppercase;
        /* color: rgb(7, 185, 255); */
        color: white;
        background: #5375e2;
        padding: 0.5rem 0.7rem;
        transition: all 0.5s ease-in-out;
    }

    .content-box .see-more:hover {
        transform: translate3d(0px, 0px, 20px);
    }

    .date-box {
        position: absolute;
        top: 30px;
        right: 30px;
        height: 60px;
        width: 60px;
        background: white;
        border: 1px solid rgb(7, 185, 255);
        padding: 10px;
        transform: translate3d(0px, 0px, 40px);
        box-shadow: rgba(100, 100, 111, 0.2) 0px 17px 10px -10px;
    }

    .date-box span {
        display: block;
        text-align: center;
    }

    .date-box .month {
        color: rgb(4, 193, 250);
        font-size: 9px;
        font-weight: 700;
    }

    .date-box .date {
        font-size: 20px;
        font-weight: 900;
        color: rgb(4, 193, 250);
    }
</style>

<!-- <div class="text-center my-10">
    <h2 class="text-3xl font-bold">Class 6th - 12th Offline & Online</h2>
</div> -->
<div class=" mx-auto grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 ">

    <div class="parent">
        <div class="class-card">
            <div class="content-box">
                <span class="class-card-title">Class 1 to 5</span>
                <p class="class-card-content">
                    All Subjects
                </p>
                <span class="see-more">See More</span>
            </div>
            <div class="date-box">
                <span class="month">JANUARY</span>
                <span class="date">01</span>
            </div>
        </div>
    </div>
    <div class="parent">
        <div class="class-card">
            <div class="content-box">
                <span class="class-card-title">Class 6 to 8</span>
                <p class="class-card-content">
                    4 Subjects
                </p>
                <span class="see-more">See More</span>
            </div>
            <div class="date-box">
                <span class="month">JANUARY</span>
                <span class="date">01</span>
            </div>
        </div>
    </div>
    <div class="parent">
        <div class="class-card">
            <div class="content-box">
                <span class="class-card-title">Class 9 to 10</span>
                <p class="class-card-content">
                    8 Subjects
                </p>
                <span class="see-more">See More</span>
            </div>
            <div class="date-box">
                <span class="month">JANUARY</span>
                <span class="date">01</span>
            </div>
        </div>
    </div>
    <div class="parent">
        <div class="class-card">
            <div class="content-box">
                <span class="class-card-title">Class 11 to 12</span>
                <p class="class-card-content">
                    8 Subjects
                </p>
                <span class="see-more">See More</span>
            </div>
            <div class="date-box">
                <span class="month">JANUARY</span>
                <span class="date">01</span>
            </div>
        </div>
    </div>
</div>