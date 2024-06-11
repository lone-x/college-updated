<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.Tech Degree Courses</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        .profile-card {
            display: flex;
            align-items: center;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }
        .profile-card img {
            border-radius: 50%;
            margin-right: 20px;
            object-fit: cover;
            width: 100px; /* Set the width of the profile image */
            height: 100px; 
        }
        h1 {
            text-align: center;
        }
        .carousel-container {
            margin: 0 auto;
            width: 60%;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="custom-main">
    <div class="container">
        <h1>PLACEMENTS</h1>
    <section class="container mt-5">
        <img src="images/cgp.jpg" class="img-fluid" alt="Sample Image">
    </section>

    <!-- Second Section: Paragraph Heading with 2 Paragraphs -->
    <section class="container mt-5">
        <h2 class="mb-4">IET Career Guidance and Placement Cell (CGPC)</h2>
        <p>Career Guidance and Placement Cell (CGPC) is the wing of Institute of Engineering and Technology placement activities. Through CGPC we precisely concentrate on the practical exposure of students through e-learning & development along with their placements. We are also committed to provide the best career opportunities to the students by maintaining close link with prospective recruiters. CGPC organize coherent programmes that boost the students' academic curriculum, besides cultivating close relationship with industry and the corporate world.</p>
        <p>Among the various activities of the CGPC, the primary activity is the structuring and delivery of high quality training programs to make our students extremely talented and competitive. We have an experienced panel of members and training generals to assist our students in career guidance & campus placements. Our CGPC is also well equipped with dedicated staffs who closely work with corporate and other national institutions to offer best support for the activities and programs.</p>
    </section>

    <!-- Third Section: Image on the left and Paragraph Heading and Paragraph on the right -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="images/placement.jpg" class="img-fluid" alt="Sample Image">
            </div>
            <div class="col-md-6">
                <h2 class="mb-4">Activities</h2>
                <p>CGPC also provides company oriented career training to mould the students to become competitive professionals. The training is imparted to sharpen up their skills in quantitative ability and logical reasoning. Campex Programs are also conducted in the college for training students to improve their various skills through mock interviews, group discussions and presentations. Importance is also given to the development of soft skills too. Frequent tests are conducted to suit the requirements of the respective industry. These trainings also helps students to acquire their dream jobs and facilitates the development of their overall personality and also help the students to face the competitive examinations likes GATE, CMAT and SSB with confidence.</p>
            </div>
        </div>
    </section>

    <!-- Fourth Section: Square Image Carousel with Buttons -->
    <section id="ps" class="container mt-5">
        <h2 class="mb-4 text-center">Placed students</h2>
        <div id="carouselExampleIndicators" class="carousel slide carousel-container" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/10in1-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/12in1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/Elance.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/IMG-20230607-WA0049.jpg" alt="Fourth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Fifth Section: Heading and Profile Card -->
    <section id="cgpc" class="container mt-5">
        <h2 class="mb-4">Team CGPC</h2>
        <div class="profile-card">
            <img src="images/megha.jpg" alt="Profile Image" class="img-fluid">
            <div>
                <h4>Ms.Meghadas K</h4>
                <p>Placement Officer</p>
            </div>
        </div>
    </section>
    </div>
    </div>
    <script src="header.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
