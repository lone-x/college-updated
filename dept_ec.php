<?php

// Include database connection
require_once 'database.php';

$sql = "SELECT * FROM faculties WHERE department = 'EC'";
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
    background: url("images/vidya-hod.jpg") center center no-repeat;
    background-size: contain;
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
                            <blockquote class="t-bq-quote-emma-text" cite="VIDYA K C">
                            Welcome to the Department of Electronics and Communication Engineering at Institute of Engineering & Technology, University of Calicut. The objective of the department is to motivate and prepare students for a successful career in industry, research and academics to meet the needs of emerging technology. Our department offers a science-based engineering curriculum. The primary focus of our curriculum is to impart technical know-how to students, promote their problem solving skills and innovation of new technologies. The department is enriched with qualified and dedicated faculties specialised in various streams of Electronics or Communication Engineering. We thus provide our students opportunities to apply their theoretical knowledge on multidisciplinary projects which involve innovative ideas & social relevance. The department aims not only to make our students technically better and more knowledgeable, but also to nurture their wisdom and make them a better and more responsible human being. We also encourage our students to bag excellence in co-curricular activities including various sports, cultural and technical events. Our graduates are working in Multinational Companies in India and abroad. The Electronics and Communication Engineering department is the right place to choose to reach the goal and shape the career.
                            Wish you Good Luck and All the Best!
                            </blockquote>
                            
                        </div>
                    </div>
                </div>
            </section>
            <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Mission</h2>
                <p>To create excellent academic and teaching learning environment for graduates to develop technical expertise, professional attitude and ethical values among them. To impart technical education with industry and society for developing competent Electronics and Communication Engineers. To create a passion for learning and promote innovation. </p>
            </div>
            <div class="col-md-6">
                <h2>Vision</h2>
                <p>Producing creative,innovative and ethical Electronics and Communication Engineers with research focus to meet socio-economic needs of the society.</p>
            </div>
        </div>
</div>
        <hr>
        <h2>About Electronics & Communication</h2>
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="images/ec123.jpg" alt="Image" class="img-fluid">
            </div>

            <div class="col-md-6">
                <p>The department was established during the inception of the institute in 2001 as the department of Electronics and Communication Engineering (ECE). Since its commencement, the primary objective of the department has been to impart quality education, training and research at the undergraduate level in Electronics and Communication Engineering with broad emphasis on design aspects of electronic systems.</p>
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
                
                <td class="body-item mbr-fonts-style display-7">B.Tech in Electronics & Communication Engineering</td>
                <td class="body-item mbr-fonts-style display-7">ECE</td><td class="body-item mbr-fonts-style display-7">4 years</td>
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
    <h1 class="text-center mt-5">EC Department</h1>
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
                    <td class="body-item mbr-fonts-style display-7"><a style="color:black;" href="downloads/syllabus/2019_EC&EE.pdf">Download</a></td>
                    <td class="body-item mbr-fonts-style display-7"><a style="color:black;" href="downloads/syllabus/EC_2014.pdf">Download</a></td>
                    <td class="body-item mbr-fonts-style display-7"><a style="color:black;" href="downloads/syllabus/EC 2009.pdf">Download</a></td>
                    <td class="body-item mbr-fonts-style display-7"><a style="color:black;" href="downloads/syllabus/EC 2004.pdf">Download</a></td>
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
