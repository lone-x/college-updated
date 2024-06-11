<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Institute of Engineering and Technology</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1100px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 50px;
        }
        .header h1 {
            font-size: 2.5rem;
            color: #192f58;
            margin-bottom: 10px;
        }
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 50px;
        }
        .image-container img {
            width: 60%;
            height: auto;
            border-radius: 10px;
        }
        .section {
            margin-bottom: 60px;
        }
        .section-title {
            font-size: 2rem;
            color: #192f58;
            margin-bottom: 30px;
            text-align: center;
        }
        .section-content {
            font-size: 1.1rem;
            text-align: justify;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        .mission-vision {
            display: flex;
            justify-content: space-between;
            margin-bottom: 60px;
        }
        .mission-vision div {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            width: 48%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .mission-vision h2 {
            font-size: 1.5rem;
            color: #192f58;
            margin-bottom: 20px;
            text-align: center;
        }
        .mission-vision p {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.8;
        }
        .facilities {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 60px;
        }
        .facilities .card {
            width: 30%;
            margin-bottom: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        .facilities .card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .facilities .card-body {
            background-color: #ffffff;
            padding: 20px;
            border-top: 1px solid #f8f9fa;
        }
        .facilities .card-body h5 {
            font-size: 1.25rem;
            color: #192f58;
            margin-bottom: 10px;
            text-align: center;
        }
        .facilities .card-body p {
            font-size: 1rem;
            color: #333;
            line-height: 1.6;
            text-align: justify;
        }
        @media (max-width: 768px) {
            .mission-vision {
                flex-direction: column;
            }
            .mission-vision div {
                width: 100%;
                margin-bottom: 20px;
            }
            .facilities .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="custom-main">
    <div class="container">
        <div class="header">
            <h1>About Us</h1>
            <hr>
            <div class="image-container">
                <img src="images/colleg2.jpg" alt="Institute Campus">
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">The College</h2>
            <div class="section-content">
                <p>Institute of Engineering and Technology, Tenhipalam, Malappuram District, Kerala was established in 2001-2002. It is managed by and affiliated to the University of Calicut. The main campus at Tenhipalam in Malappuram District is spread over 200 ha. Different Departments, well-equipped Library, Audio Visual and Reprographics Centre, Science and Instrumentation Centre, Health Centre, Guest house, Seminar Complex, Staff Quartets and Hostels for students, Working Women Hostel etc. are functioning here. Extensive playgrounds and a Gymnasium are also located in the campus. The Campus also accommodates two green turfed football fields, synthetic track, gymnasium, indoor stadium, kho-kho, volleyball, and basketball courts, etc. towards promoting sports activities.</p>
            </div>
        </div>

        <div class="section mission-vision">
            <div>
                <h2>Mission</h2>
                <p>To promote education and research in the field of engineering and technology and to groom the young men and women into high quality technical personnel useful to the society with sound engineering knowledge, good managerial skills and high moral values.</p>
            </div>
            <div>
                <h2>Vision</h2>
                <p>To grow into a centre of excellence in engineering education comparable to the best in the field.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">The Institute Campus</h2>
            <div class="section-content">
                <p>The Institute campus has an extensive area of 10 ha. (25.17 acres). The necessary infrastructure facilities like water supply, hostels, canteen and playgrounds are available in the campus. The Honourable Vice-Chancellor, the Governing Body of CUIET and the Syndicate of the University take special care in bringing up and developing the Institute to a centre of excellence in the field of Engineering Education, Research and consultancy.</p>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">Library, Laboratories & Other Facilities</h2>
            <div class="section-content">
                <p>Institute of Engineering and Technology University of Calicut offers a diverse range of resources and facilities for students to enhance their learning experience. The College library provides a vast collection of books, journals, and other resources to support research and academic endeavors. The placement hall is an ideal venue for seminars, guest lectures, and other academic events. The language lab is equipped with modern technology to improve students' communication skills and language proficiency. The laboratories, on the other hand, offer practical training and hands-on experience in various engineering disciplines. With these excellent facilities, students have access to a comprehensive learning environment that fosters their academic and personal growth.</p>
            </div>

            <div class="facilities">
                <div class="card">
                    <img src="images/library.jpg" class="card-img-top" alt="Library">
                    <div class="card-body">
                        <h5 class="card-title">College Library</h5>
                        <p class="card-text">A vast collection of books, journals, and other resources to support research and academic endeavors.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/conference-room.jpg" class="card-img-top" alt="Conference Room">
                    <div class="card-body">
                        <h5 class="card-title">Conference Room</h5>
                        <p class="card-text">An ideal venue for seminars, guest lectures, and other academic events.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/lang-lab.jpg" class="card-img-top" alt="Language Lab">
                    <div class="card-body">
                        <h5 class="card-title">Language Lab</h5>
                        <p class="card-text">Equipped with modern technology to improve students' communication skills and language proficiency.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/placement-hall.jpg" class="card-img-top" alt="Placement Hall">
                    <div class="card-body">
                        <h5 class="card-title">Placement Hall</h5>
                        <p class="card-text">A venue for seminars, guest lectures, and other academic events.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/ElectronicsLab.jpg" class="card-img-top" alt="Electronics Lab">
                    <div class="card-body">
                        <h5 class="card-title">Electronics Lab</h5>
                        <p class="card-text">Offers practical training and hands-on experience in various engineering disciplines.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/MechanicalWorkshop.jpg" class="card-img-top" alt="Mechanical Lab">
                    <div class="card-body">
                        <h5 class="card-title">Mechanical Lab</h5>
                        <p class="card-text">Provides hands-on training in mechanical engineering concepts and practices.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/mechanicalworkshop.jpg" class="card-img-top" alt="Mechanical Workshop">
                    <div class="card-body">
                        <h5 class="card-title">Mechanical Workshop</h5>
                        <p class="card-text">A space for students to apply mechanical engineering knowledge in practical settings.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/ITlab.jpg" class="card-img-top" alt="Computer Lab">
                    <div class="card-body">
                        <h5 class="card-title">Computer Lab</h5>
                        <p class="card-text">Provides access to the latest software and hardware for computer science studies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="header.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
