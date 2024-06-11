<?php

// Include database connection
require_once 'database.php';

$sql = "SELECT * FROM faculties WHERE department = 'MECH'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Tabbed Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Gabriela|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="princiquote.css">
    <link rel="stylesheet" href="dept_it.css">
    <link rel="stylesheet" href="header.css">
    <style>
        .t-bq-quote-emma .t-bq-quote-emma-userpic {
    flex-basis: 200px;
    width: 200px;
    min-width: 150px;
    max-height: auto;
    background: url("images/anil-hod1.jpeg") center center no-repeat;
    background-size: cover;
    border-radius: 20px 0 0 20px;
}
.profile-card {
            margin: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
        }
        .profile-card img {
            max-width: 100%;
            border-radius: 10%;
            margin-bottom: 15px;
            height: 200px;
        }
@media screen and (min-width: 768px) {
    .container-fixed-width {
        width: 1200px;
    }
}
    </style>
</head>
<body>
    <?php include "header.php" ?>
<div class="custom-main">
    <div class="container">
        <div class="tabs">
            <button class="tab-link active" data-tab="tab1"><span>DEPT HOME</span></button>
            <button class="tab-link" data-tab="tab2"><span>FACULTIES</span></button>
            <button class="tab-link" data-tab="tab3"><span>SYLLABUS</span></button>
            <button class="tab-link" data-tab="tab4"> <span>QUESTION PAPERS</span></button>
        </div>
        <div id="tab1" class="tab-content active">
            <h2>HOD's MESSAGE</h2>
            <section class="t-bq-section" id="emma">
                <div class="t-bq-wrapper t-bq-wrapper-boxed">
                    <div class="t-bq-quote t-bq-quote-emma">
                        <div class="t-bq-quote-emma-qmark"><span>&#10077;</span></div>
                        <div class="t-bq-quote-emma-userpic"></div>
                        <div class="t-bq-quote-emma-base">
                            <blockquote class="t-bq-quote-emma-text" cite="ANIL JACOB">
                            Mechanical engineering is among the most diversified of the traditional engineering disciplines. Mechanical engineers design and build machines and devices that enable humans to live and work in space, in the air, on the ground, and under water. Their machines can extend our physical capabilities, improve our health and standard of living, and impact the environment in which we live. The department provides an enriching learning environment and is committed to mould all round development of its students and prepare the manpower that is globally competent. For this, the students are exposed to problems faced by our society, are engaged in outreach programmes and industry institute interactions and are encouraged to participate in co-curricular activities and professional development activities beyond the regular academic work. Our graduates have over the years made a strong national and global presence in elite industry and eminent academic institutions. In the coming years, the department aims to grow in terms of modernized infrastructure, new collective research initiatives, and most importantly, engaging with the industry and alumni.
Welcome to this world of machines.
                            </blockquote>
                            
                        </div>
                    </div>
                </div>
            </section>
            <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Mission</h2>
                <p>To transform youth into competent and socially responsible Mechanical Engineers by nurturing them with creativeness, innovativeness and entrepreneurship skills to develop out-of-the-box thinking, respond effectively to the needs of the industry and the ever changing world scenario. </p>
            </div>
            <div class="col-md-6">
                <h2>Vision</h2>
                <p>To evolve into a center of excellence in Mechanical Engineering domain and research for a fulfilling profession and social life.</p>
            </div>
        </div>
</div>
        <hr>
        <h2>About Mechanical Engineering</h2>
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="images/ME_1.jpeg" alt="Image" class="img-fluid">
            </div>

            <div class="col-md-6">
                <p> Mechanical engineering is concerned with the design, construction, and operation of power plants, engines, and machines. It deals mostly with things that move. One common way of dividing mechanical engineering is into heat utilization and machine design. The generation, distribution, and use of heat is applied in boilers, heat engines, air conditioning, and refrigeration. Machine design is concerned with hardware, including that making use of heat processes.</p>
            </div>
           
        </div>
        <hr>
        <h2>Courses Offered</h2>
        
        <div class="table-wrapper">
          <div class="container">
            
          </div>
  
          <div class="container scroll">
            <table class="table" cellspacing="0" data-empty="No matching records found">
              <thead>
                <tr class="table-heads ">
                    
                    
                    
                    
                <th class="head-item mbr-fonts-style display-7">Course</th><th class="head-item mbr-fonts-style display-7">Course Code</th>
                <th class="head-item mbr-fonts-style display-7">Duration</th></tr>
              </thead>
  
              <tbody>
                
                
                
                
              <tr> 
                
                <td class="body-item mbr-fonts-style display-7">B.Tech in Mechanical Engineering</td>
                <td class="body-item mbr-fonts-style display-7">ME</td><td class="body-item mbr-fonts-style display-7">4 years</td>
            </tr>

                  
            </table>
          </div>
          <div class="container table-info-container">
            
          </div>
        </div>
    </div>
        </div>
        <div id="tab2" class="tab-content">
        <div class="container">
    <h1 class="text-center mt-5">ME Department</h1>
    <h2 class="text-center mt-4">Faculties</h2>
    <div class="row">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $position = $row["position"] == "Others" ? $row["other_position"] : $row["position"];
                echo "<div class='col-md-4'>";
                echo "<div class='profile-card'>";
                echo "<img src='" . $row["image_path"] . "' alt='Faculty Image'>";
                echo "<h3>" . $row["name"] . "</h3>";
                echo "<p>" . $position . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p class='text-center'>No faculties found</p>";
        }
        ?>
    </div>
</div>
        </div>
        <div id="tab3" class="tab-content">
        <div class="container-fixed-width mt-4">
        <h1 class="text-center">Syllabus and Curriculum</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">2019 scheme</th>
                        <th scope="col">2014 scheme</th>
                        <th scope="col">2009 scheme</th>
                        <th scope="col">2004 scheme</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="body-item mbr-fonts-style display-7"><a style="color:black;" href="downloads/syllabus/2019_PT&ME.pdf">Download</a></td>
                    <td class="body-item mbr-fonts-style display-7"><a style="color:black;" href="downloads/syllabus/ME_2014.pdf">Download</a></td>
                    <td class="body-item mbr-fonts-style display-7"><a style="color:black;" href="downloads/syllabus/ME 2009.pdf">Download</a></td>
                    <td class="body-item mbr-fonts-style display-7"><a style="color:black;" href="downloads/syllabus/ME_2004.pdf">Download</a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
        </div>
        <div id="tab4" class="tab-content">
        <div class="container-fixed-width mt-4">
        <h1 class="text-center">Previous Year Question Papers</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Semester</th>
                        <th scope="col">QP</th>
                        <th scope="col">QP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Semester 1</td>
                        <td><a href="downloads/qp/1st_sem_nov2021.pdf" >Nov 2021(2019 scheme)</a></td>
                        <td><a href="downloads/qp/s1s2main2019.pdf" >Nov 2019 (2019 scheme)</a></td>
                    </tr>
                    <tr>
                        <td>Semester 2</td>
                        <td><a href="downloads/qp/DOC-20210315-WA0006-1.pdf">April 2020(2019 scheme)</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Semester 3</td>
                        <td><a href="downloads/qp/3rd-sem2021.pdf">Nov 2021(2019 scheme)</a></td>
                        <td><a href="downloads/qp/3rd_semDOC-20220214-WA0009.pdf">Nov 2020(2014 scheme)</a></td>
                    </tr>
                    <tr>
                        <td>Semester 4</td>
                        <td><a href="downloads/qp/4th_20_april23.pdf">April 2023(2019 scheme)</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Semester 5</td>
                        <td><a href="downloads/qp/5th_sem_2019scheme.pdf">Nov 2021(2019 scheme)</a></td>
                        <td><a href="downloads/qp/5th_sem_2014scheme.pdf">Nov 2021(2014 scheme)</a></td>
                    </tr>
                    <tr>
                        <td>Semester 6</td>
                        <td><a href="downloads/qp/6th-sem-qp.pdf">April 2022(2019 scheme)</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Semester 7</td>
                        <td><a href="downloads/qp/7th_sem.pdf">Nov 2022(2019 scheme)</a></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Semester 8</td>
                        <td>Course 8</td>
                        <td>Course 8</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
    </div>
    <script>
        document.querySelectorAll('.tab-link').forEach(button => {
            button.addEventListener('click', () => {
                document.querySelectorAll('.tab-link').forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

                button.classList.add('active');
                document.getElementById(button.dataset.tab).classList.add('active');
            });
        });
    </script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="header.js"></script>
</body>
</html>