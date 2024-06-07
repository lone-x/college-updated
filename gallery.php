<?php
require 'database.php';

$tags_result = $conn->query("SELECT * FROM tags");
$images_result = $conn->query("SELECT * FROM images");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel='stylesheet' href='https://npmcdn.com/basscss@8.0.0/css/basscss.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <style>
       body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        .main {
        margin-top: var(--header-height);
        }
        @media screen and (min-width:1118px) {
        .main {
            margin-top: calc(var(--header-height) + 2rem);
        }
        }
        /* .container {
            margin-top: 50px;
        } */
        h1 {
            text-align: center;
        }
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        #portfolio {
            margin: 1rem 0;
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 1rem;
            -moz-column-gap: 1rem;
            column-gap: 1rem;
            -webkit-column-width: 33.33333333333333%;
            -moz-column-width: 33.33333333333333%;
            column-width: 33.33333333333333%;
        }
        .tile {
            display: none;
            border-radius: 10px;
            overflow: hidden;
        }
        .scale-anm {
            margin: 0 0 1.125rem;
            width: 100%;
            border: 1px solid #ccc;
        }
        .tile img {
            max-width: 100%;
            height: auto;
            display: block;
            width: 100%;
        }
        .btn {
            font-family: Lato;
            font-size: 1rem;
            font-weight: normal;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
            line-height: normal;
            padding: .5rem 1rem;
            margin: 0;
            height: auto;
            border: 1px solid #ccc;
            vertical-align: middle;
            -webkit-appearance: none;
            color: #555;
            background-color: rgba(0, 0, 0, 0);
        }
        .toolbar {
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <?php require 'header.php'; ?>
    <div class="main">
    <div class="container">
<h1 class="text-center mb-4">Elegant Gallery</h1>
<div id="filters" class="toolbar mb2 mt2">
    <button class="btn fil-cat filter active" data-filter="all">All</button>
    <?php while ($tag = $tags_result->fetch_assoc()): ?>
        <button class="btn fil-cat filter" data-filter=".<?php echo htmlspecialchars($tag['name']); ?>"><?php echo htmlspecialchars($tag['name']); ?></button>
    <?php endwhile; ?>
</div>

<div style="clear:both;"></div>
<div id="portfolio">
    <?php while ($image = $images_result->fetch_assoc()): ?>
        <div class="tile scale-anm <?php echo htmlspecialchars($image['tags']); ?>">
            <a href="<?php echo htmlspecialchars($image['file_path']); ?>" data-lightbox="gallery" data-title="<?php echo htmlspecialchars($image['tags']); ?>">
                <img src="<?php echo htmlspecialchars($image['file_path']); ?>" alt="">
            </a>
        </div>
    <?php endwhile; ?>
</div>
</div>
<div style="clear:both;"></div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>
$(document).ready(function(){
    $('#portfolio').mixItUp({
        selectors: {
            target: '.tile',
            filter: '.filter'
        },
        animation: {
            animateResizeContainer: false,
            effects: 'fade scale'
        }
    });

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'alwaysShowNavOnTouchDevices': true
    });
});
</script>
</body>
</html>
