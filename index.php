<?php
// Include database connection
require_once 'database.php';

// Fetch slider content from the database
$sql = "SELECT * FROM slider_contents WHERE active = 1 ORDER BY sort_order";
$result = $conn->query($sql);
$slider_contents = $result->fetch_all(MYSQLI_ASSOC);

// Query to count the number of rows in slider_contents table
$countQuery = "SELECT COUNT(*) as count FROM slider_contents WHERE active = 1";
$countResult = $conn->query($countQuery);

// Check if the query was successful
if ($countResult->num_rows > 0) {
    // Fetch the result
    $row = $countResult->fetch_assoc();
    
    // Get the count of sliders
    $sliderCount = $row["count"];
} else {
    // If no rows found, set default count to 0
    $sliderCount = 0;
}
// query for marquee notification
$noti = "SELECT * FROM notification WHERE tags = 'home'";
$notiresult = mysqli_query($conn, $noti);

$notification = array(); // Initialize an empty array to store all rows

// Fetch each row and add it to the $notification array
while ($row = mysqli_fetch_assoc($notiresult)) {
    $notification[] = $row;
}
// query for news
$newsresult = $conn->query("SELECT id, title, content, image_url, slug, created_at FROM posts ORDER BY created_at DESC");
// query for gallery
$images_result1 = $conn->query("SELECT * FROM images WHERE featured = 1 LIMIT 8 ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="marquee.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="princiquote.css">
    <link rel="stylesheet" href="testimonial.css">
    <link rel="stylesheet" href="facilities.css">
   <!--  <script>window.danteEmbed = "https://dante-ai.com/embed?kb_id=b9addd52-2d4a-4dbc-8e65-eee8ce2ddc10&token=cc3560dc-1f49-4b4a-9f87-9830fa59af5b&modeltype=gpt-3.5-turbo&mode=false&bubble=true&bubbleopen=false"</script><script src="https://dante-ai.com/bubble-embed.js"></script> -->
</head>
<body>

    <?php include "header.php" ?>
    
    <!-- marquee notification -->
    <div class="main">
    <div class="scrolling-text-container">
    <div class="scrolling-text-inner" style="--marquee-speed: 10s;">
        <div class="scrolling-text">
            <?php foreach ($notification as $index => $value): ?>
                <div class="scrolling-text-item">
                    <a href="<?php echo $value['url'] ?>"><?php echo $value['notification'] ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

    <!-- slider -->
    <div id="demo-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php
    for ($i = 0; $i < $sliderCount; $i++) {
        // Set the active class for the first indicator
        $activeClass = ($i == 0) ? 'active' : '';
    
        // Output the indicator with data attributes
        echo '<li data-target="#demo-carousel" data-slide-to="' . $i . '" class="' . $activeClass . '"></li>';}
    ?>

   <!--  <li data-target="#demo-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#demo-carousel" data-slide-to="1"></li>
    <li data-target="#demo-carousel" data-slide-to="2"></li> -->
  </ol> 
     <div class="carousel-inner" role="listbox">
  
  <?php foreach ($slider_contents as $index => $content): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" data-src="slideruploads/<?php echo $content['image_url']; ?>">

                <div class="carousel-captions"><!-- added s to bootstrap utility class so no longer bootstrap utility class -->
                    <h3><?php echo $content['caption']; ?></h3>
                    <p><?php echo $content['text_content']; ?></p>
                    <?php if (!empty($content['button']) && !empty($content['location'])): ?>
                    <a href="<?php echo $content['location']; ?>" class="btn btn-primary"><?php echo $content['button']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>

  
  <a class="left carousel-control" href="#demo-carousel" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#demo-carousel" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
    </div>
      <!-- About Us -->
    <div class="abcontainer">
    <div class="abcontent">
        <h1>About CUIET</h1>
        <hr>
    </div>
    <div class="about-us">
        <img src="images/college1.jpeg" alt="College Image">
        <div class="about-text">
            <p>Institute of Engineering and Technology is a Self-Financing Engineering College run by University of Calicut. The institute was established in the year 2001 with the aim to promote education and research in the field of engineering and technology and to groom the young men and women into high quality technical personnel useful to the society with sound engineering knowledge, good managerial skills and high moral values.</p>
            <a href="#" class="read-more">Read More</a>
            <div class="social-icons">
                <a href="mailto:info@[college].edu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </a>
                <a href="https://www.facebook.com/[college]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                        <path d="M18 2h-3a4 4 0 0 0-4 4v3H8v4h3v8h4v-8h3.64L18 9h-3V6a1 1 0 0 1 1-1h2V2z"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/[college]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37a4 4 0 1 1-4-4 4 4 0 0 1 4 4z"></path>
                        <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    </div>
    <!--news-->
    <div class="news-container">
        <h1 class="news-header">Latest News</h1>
        <hr>
        <div class="news-content-wrapper">
            <?php
            while ($row = $newsresult->fetch_assoc()):
            ?>
                <div class="news-card" data-id="<?php echo $row['id']; ?>">
                    <img src="./<?php echo htmlspecialchars($row['image_url']); ?>" alt="" class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title"><?php echo htmlspecialchars($row['title']); ?></h2>
                        <div class="news-card__post-date"><?php echo date('M d, Y', strtotime($row['created_at'])); ?></div>
                        <div class="news-card__details-wrapper">
                            <p class="news-card__excerpt"><?php echo substr(strip_tags($row['content']), 0, 100); ?>...</p>
                            <a href="posts/post_<?php echo $row['id']; ?>.php" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <button class="view-more-button"><a href="allnews.php">View All News</a></button>
    </div>
<!--principlal message-->
<h2>PRINCIPALS MESSAGE</h2>
<section class="t-bq-section" id="emma">
    <div class="t-bq-wrapper t-bq-wrapper-boxed">
        <div class="t-bq-quote t-bq-quote-emma">
            <div class="t-bq-quote-emma-qmark"><span>&#10077;</span></div>
            <div class="t-bq-quote-emma-userpic"></div>
            <div class="t-bq-quote-emma-base">
                <blockquote class="t-bq-quote-emma-text" cite="Dr.Ranjith C">
                <b> “Education is not the learning of facts, but the training of minds to think” - Albert Einstein <br></b>
It is my pleasure to welcome you to Institute of Engineering and Technology (IET), the only Engineering institution governed by the University of Calicut. We know that, technical education facilitates the acquisition of practical and applied skills as well as basic scientific knowledge...
                </blockquote>
                <a href="principal_desk.php" class="t-bq-button">read more</a>
            </div>
           
        </div>
        
    </div>
</section>

<!--facilities-->
<h2 class="section-title">Facilities</h2>
<br>
<div class="container">
<div class="facilities" style="text-align: center">
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
                
            </div >
            <div style="text-align: center">
            <button class="view-more-button"><a href="facilties.php">View More</a></button>
            </div>
</div>
<!--testimonial-->
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

    
    </div>
    <!--gallery-->
    <div class="img-container">
        <h2 >Gallery</h2>
        <div class="image-grid">
        <?php while ($image = $images_result1->fetch_assoc()): ?>
                    <div class="image-item">
                        <img src="<?php echo htmlspecialchars($image['file_path']); ?>" class="img-fluid">
                    </div>
                <?php endwhile; ?>
        </div>
        <button class="view-more-button"><a href="gallery.php">View More</a></button>
    </div>

    <div style="height:150vh"></div>
</body>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="header.js"></script>
<script src="slider.js"></script>
<script src="marquee.js"></script>
<script src="news.js"></script>
<script src="testimonial.js"></script>
</html>
