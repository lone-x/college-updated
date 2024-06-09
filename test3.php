<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testimonial Carousel</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: #e3e9f7;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .carousel-wrapper {
            padding: 50px 0;
            position: relative;
            margin: 120px 0;
            width: 100%;
            overflow: hidden;
        }
        .carousel-container {
            position: relative;
            overflow: hidden;
            width: 90%;
            margin: auto;
        }
        .carousel-slide {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .carousel-item-custom {
            min-width: 100%;
            box-sizing: border-box;
            background: aliceblue;
            padding: 35px;
            border-radius: 25px;
            text-align: center;
            opacity: 0;
            transform: scale(0.9);
            animation: fadeIn 0.5s forwards;
            display: none;
        }
        .carousel-item-custom.active {
            opacity: 1;
            transform: scale(1);
            display: block;
        }
        .carousel-img-box {
            width: 100px;
            height: 100px;
            margin: auto;
            border: 5px dashed #262626;
            border-radius: 50%;
            overflow: hidden;
        }
        .carousel-img-box img {
            width: 100%;
        }
        .carousel-caption-custom h3 {
            font-size: 30px;
            margin-bottom: 15px;
            margin-top: 25px;
            font-family: 'Allura', cursive;
            color: #262626;
            text-shadow: none;
        }
        .carousel-caption-custom h4 {
            color: #2b2626;
            text-shadow: none;
        }
        .carousel-caption-custom p {
            font-size: 16px;
            margin: auto;
            width: 70%;
            margin-bottom: 10px;
            font-family: 'Teko', sans-serif;
            font-weight: 300;
            letter-spacing: 2px;
            text-shadow: none;
            color: #2b2626;
        }
        .carousel-indicators-custom {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }
        .carousel-indicators-custom li {
            background-color: #ddd;
            width: 50px;
            height: 10px;
            margin: 5px;
            cursor: pointer;
            border-radius: 20px;
        }
        .carousel-indicators-custom .active-custom {
            background-color: #2b2626;
            width: 20px;
        }
        .carousel-control-custom {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 30px;
            cursor: pointer;
        }
        .carousel-control-left {
            left: 10px;
        }
        .carousel-control-right {
            right: 10px;
        }
        .current
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @media (max-width: 768px) {
            .carousel-caption-custom h3 {
                font-size: 24px;
            }
            .carousel-caption-custom p {
                font-size: 14px;
                width: 90%;
            }
        }
        @media (max-width: 480px) {
            .carousel-caption-custom h3 {
                font-size: 20px;
            }
            .carousel-caption-custom p {
                font-size: 12px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="carousel-wrapper">
        <div class="carousel-container">
            <div class="carousel-slide">
                <div class="carousel-item-custom active">
                    <div class="carousel-img-box"><img alt="" src="images/testimonial/NEERAJ.jpg"></div>
                    <div class="carousel-caption-custom">
                        <h3> NEERAJ R K  (IT 2006-10)</h3>
                        <h4>Co-founder & Director - Yarddiant Weblounge Pvt Ltd </h4>
                        <p> My life at IET earned me an experimental learning opportunity with time-bounded managerial skills.
                            The trust that our college has in its students to run so many events is a standout feature.
                            I am grateful to be a part of one of the best engineering colleges in Kerala. </p>
                    </div>
                </div>
                <div class="carousel-item-custom">
                    <div class="carousel-img-box"><img alt="" src="images/testimonial/ATHILA.jpg"></div>
                    <div class="carousel-caption-custom">
                        <h3>ATHILA S (IT 2015-19)</h3>
                        <h4>ORACLE INDIA </h4>
                        <p> It gives me great pleasure to say that I have completed B.Tech from IET. 
                            The relationship between students and teachers is cordial. 
                            I would like to thank IET and my teachers
                            for all the knowledge they shared that helped getting me a job I dreamed. </p>
                    </div>
                </div>
                <div class="carousel-item-custom">
                    <div class="carousel-img-box"><img alt="" src="images/testimonial/rakesh.jpg"></div>
                    <div class="carousel-caption-custom">
                        <h3>RAKESH R P (IT 2015-19)</h3>
                        <h4>Software Engineer - Wizroots Technologies Pvt Ltd </h4>
                        <p>IET has been the most fascinating experience of my life. It has helped me nurture my skills as an engineer. 
                            I will always owe my success to my teachers who helped me become the person I am today. </p>
                    </div>
                </div>
                <div class="carousel-item-custom">
                    <div class="carousel-img-box"><img alt="" src="images/testimonial/sheela(1).jpg"></div>
                    <div class="carousel-caption-custom">
                        <h3>Sheela Ravindran (IT 2001-05)</h4>
                        <h4>Procurement Lead - City Facilities Management Australia</h4>
                        <p>I had a great time at the Institute of Engineering and Technology. The excellent 
                            facilities at IET inspired me to give my best. 
                            I am very thankful to all the competent and excellent professors
                            at IET who endowed me with lifelong career excellence. </p>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-custom carousel-control-left" onclick="moveSlide(-1)">&#10094;</button>
            <button class="carousel-control-custom carousel-control-right" onclick="moveSlide(1)">&#10095;</button>
        </div>
        <!-- Indicators -->
        <ul class="carousel-indicators-custom">
            <li onclick="currentSlide(0)" class="active-custom"></li>
            <li onclick="currentSlide(1)"></li>
            <li onclick="currentSlide(2)"></li>
            <li onclick="currentSlide(3)"></li>
        </ul>
    </div>
    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.carousel-item-custom');
        const indicators = document.querySelectorAll('.carousel-indicators-custom li');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                indicators[i].classList.toggle('active-custom', i === index);
            });
            slides[index].classList.add('active');
        }

        function moveSlide(n) {
            currentIndex = (currentIndex + n + slides.length) % slides.length;
            showSlide(currentIndex);
        }

        function currentSlide(index) {
            currentIndex = index;
            showSlide(currentIndex);
        }

        document.addEventListener('DOMContentLoaded', () => {
            showSlide(currentIndex);
            setInterval(() => moveSlide(1), 5000); // Change slide every 5 seconds
        });
    </script>
</body>
</html>
