<?php
// Include database connection
require_once 'database.php';

// Fetch slider content from the database
$sql = "SELECT * FROM slider_contents";
$result = $conn->query($sql);
$slider_contents = $result->fetch_all(MYSQLI_ASSOC);

// Query to count the number of rows in slider_contents table
$countQuery = "SELECT COUNT(*) as count FROM slider_contents";
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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>

    <?php include "header.php" ?>

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
    <div style="height:150vh"></div>
</body>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="slider.js"></script>
</html>
