<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal's Message</title>
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
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header, .accordion-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #192f58;
        }
        .header h1 {
            font-size: 2.5rem;
            color: #192f58;
            margin-bottom: 10px;
        }
        .header h2 {
            font-size: 1.5rem;
            color: #52555a;
        }
        .header p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.1rem;
            text-align: justify;
            color: #333;
            margin-bottom: 20px;
        }
        .accordion .card-header {
            background-color: #ffffff;
            border: none;
            padding: 0.75rem 1rem;
            cursor: pointer;
        }
        .accordion .card-header h5 {
            margin: 0;
            color: #192f58;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .accordion .card-header h5:hover {
            color: #007bff;
        }
        .accordion .card-header .fa {
            transition: transform 0.3s;
        }
        .accordion .card-header.collapsed .fa {
            transform: rotate(90deg);
        }
        .accordion .card-body {
            background-color: #f8f9fa;
        }
        .accordion .card-body ul {
            list-style-type: none;
            padding-left: 0;
        }
        .accordion .card-body ul li {
            margin-bottom: 10px;
            font-size: 1rem;
            color: #333;
        }
        hr {
            border-top: 2px solid #192f58;
            width: 50px;
            margin: 0.5rem auto 1rem auto;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="custom-main">
    <div class="container">
        <div class="header">
            <img src="images/pincipal12.jpeg" alt="Pincipal's Image">
            <h1>Principal's Message</h1>
            <hr>
            <h2>Dr. Ranjith C</h2>
            <p><i>“Education is not the learning of facts, but the training of minds to think” - Albert Einstein</i></p>
        </div>
        <div class="content">
            <p>
                It is my pleasure to welcome you to the Institute of Engineering and Technology (IET), the only Engineering institution governed by the University of Calicut. We know that technical education facilitates the acquisition of practical and applied skills as well as basic scientific knowledge. At IET, we strive to groom our students into high-quality technical personnel, with sound engineering knowledge, good managerial skills, and high moral values. The College offers a perfect platform for learning and exploring personal and intellectual abilities. Students can discover new dimensions in learning and explore their extra-curricular activities with the full support of highly qualified staff and the Governing Body of the College.
            </p>
            <p>
                The College is committed to providing continuous support and encouragement to all students in their academic, co-curricular, and extra-curricular activities. The empowerment of students for their all-round development is our cherished motto. The institution emphasizes academic learning, an open mind for new thoughts, and ideas in industrial and technological advancements. We are confident that our students equipped with such thoughts will emerge as valuable contributors to the development of the organizations they serve and the Nation.
                <br><i>“Learning gives creativity, Creativity leads to thinking, Thinking provides knowledge, Knowledge makes you great” - Dr. A P J Abdul Kalam</i>
            </p>
        </div>

        <section class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>
                        Educational Summary <span class="float-right"><i class="fas fa-angle-down"></i></span>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Ph.D in Information & Communication Engg., MIT Campus, Anna University, Chennai (2013 - 2020)</li>
                            <li>Masters of Technology, National Institute of Technology, Warangal, Telangana (2006 - 2008)</li>
                            <li>Bachelor of Engineering - Specialised in Electronics & Communication, University of Bangalore, Karnataka (1997 - 2001)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>
                        Experience <span class="float-right"><i class="fas fa-angle-down"></i></span>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Principal, IET, University of Calicut (2021 - till date)</li>
                            <li>Associate Professor & Principal (In-Charge), KMCT College of Engineering, Calicut (2017 - 2021)</li>
                            <li>Assistant Professor, KMCT College of Engineering, Calicut (2008 - 2017)</li>
                            <li>Lecturer, KMCT College of Engineering, Calicut (2003 - 2008)</li>
                            <li>Graduate Apprentice, National Institute of Electronics & Information Technology (NIELIT), Calicut (2002 - 2003)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5>
                        Area of Specialization <span class="float-right"><i class="fas fa-angle-down"></i></span>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>VLSI, Reconfigurable Computing, Evolvable Hardware</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h5>
                        Achievements <span class="float-right"><i class="fas fa-angle-down"></i></span>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Recipient of Region 10 (R10) “Global Outstanding IEEE Branch Counsellor” award for the year 2012 from South-East Asia and Asia Pacific Regions.</li>
                            <li>Received the Best paper award for “A VLSI implementation of an Adaptive Genetic Algorithm Processor” at 4th International Conference on Signal Processing, Communications and Networking (ICSCN’ 17) at Anna University, Chennai.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    <script src="header.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
