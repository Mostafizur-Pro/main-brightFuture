<style>
    .card_latest {
        width: 350px;
        height: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 10px;
        background-color: #fffffe;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
    }

    .card_latest::before {
        content: "";
        width: 350px;
        height: 100px;
        position: absolute;
        top: 0;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom: 3px solid #fefefe;
        background: linear-gradient(40deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
        transition: all 0.5s ease;
    }

    .card_latest * {
        z-index: 1;
    }

    .image {
        width: 90px;
        height: 90px;
        background-color: #1468BF;
        border-radius: 50%;
        border: 4px solid #fefefe;
        margin-top: 30px;
        transition: all 0.5s ease;
    }

    .card_latest-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        transition: all 0.5s ease;
    }

    .card_latest-info span {
        font-weight: 600;
        font-size: 24px;
        color: #161A42;
        margin-top: 15px;
        line-height: 5px;
    }

    .card_latest-info p {
        color: rgba(0, 0, 0, 0.5);
    }

    .button {
        text-decoration: none;
        background-color: #1468BF;
        color: white;
        padding: 5px 20px;
        border-radius: 5px;
        border: 1px solid white;
        transition: all 0.5s ease;
    }

    .card_latest:hover::before {
        width: 350px;
        height: 300px;
        border-bottom: none;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        transform: scale(0.95);
    }

    .card_latest:hover .card_latest-info {
        transform: translate(0%, -25%);
    }

    .card_latest:hover .image {
        transform: scale(2) translate(-60%, -40%);
    }

    .button:hover {
        background-color: #FF6844;
        transform: scale(1.1);
    }
</style>

<div class="mx-10">
    <div>
        <h1 class="text-4xl my-10 font-bold text-center">Latest Courses</h1>
    </div>

    <div class="grid grid-cols-4 gap-5">
        <div class="card_latest border">
            <div class="image"></div>
            <div class="card_latest-info">
                <span>AutoCAD Course</span>
                <p>Support Specialist</p>
            </div>
            <a href="#" class="button">Folow</a>
        </div>
        <div class="card_latest">
            <div class="image"></div>
            <div class="card_latest-info">
                <span>George Johnson</span>
                <p>Support Specialist</p>
            </div>
            <a href="#" class="button">Folow</a>
        </div>
        <div class="card_latest">
            <div class="image"></div>
            <div class="card_latest-info">
                <span>George Johnson</span>
                <p>Support Specialist</p>
            </div>
            <a href="#" class="button">Folow</a>
        </div>
        <div class="card_latest">
            <div class="image"></div>
            <div class="card_latest-info">
                <span>George Johnson</span>
                <p>Support Specialist</p>
            </div>
            <a href="#" class="button">Folow</a>
        </div>
    </div>


</div>