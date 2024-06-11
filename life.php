<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fee structure</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="header.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            color: white;
        }
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
        h2 {
            text-align: center;
        }
        .second-section {
      display: flex;
      align-items: center;
      padding: 50px 0;
    }
    .second-section img {
      max-width: 100%;
      height: auto;
    }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="custom-main">
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/college1.jpeg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/colleg2.jpg" alt="Second slide">
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

  <!-- Second Section -->
  <div class="container second-section">
    <div class="row">
      <div class="col-md-6">
        <img src="images/newdp.jpg" alt="Placeholder Image">
      </div>
      <div class="col-md-6">
        <h2>Life at IET</h2>
        <p>Life in IET is one of the most valuable experiences that one goes through. In fact, it is the turning point in a person’s life. While the first day in is, with no doubt, the most eagerly anticipated, the rest of the days are equally enjoyable. IET life is full of all sorts of activities. You will get an exposure to a range of fields such as drama, theatre, music, choreography and photography.</p>
        <button class="btn btn-primary"><a href="aboutus.php">Learn more</a></button>
      </div>
    </div>
  </div>
    </div>
    </div>
    <script src="header.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
