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
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <style>
       body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        .main {
        margin-top: var(--header-height);
        display: flex;

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
.wrapper {
  padding: 35px;
  position: relative;
  max-width: 1000px;
  background-color: #fff;
  border-radius: 13px;
  overflow-x: hidden;
}

.wrapper .icon {
  position: absolute;
  top: 0;
  height: 100%;
  width: 120px;
  display: flex;
  align-items: center;
}

.wrapper .icon:first-child {
  left: 0;
  background: linear-gradient(90deg, #fff 70%, transparent);
  display: none;
}

.wrapper .icon:last-child {
  right: 0;
  background: linear-gradient(90deg, #fff 70%, transparent);
  justify-content: flex-end;
}

.wrapper .icon i {
  width: 55px;
  height: 55px;
  cursor: pointer;
  font-size: 1.12rem;
  text-align: center;
  line-height: 55px;
  border-radius: 50%;
  transition: all 0.3s ease;
}

.wrapper .icon:first-child i {
  margin-left: 15px;
}

.wrapper .icon:last-child i {
  margin-right: 15px;
}

.wrapper .icon i:hover {
  background-color: #efedfb;
}

.wrapper .tab-box {
  display: flex;
  gap: 12px;
  overflow-x: hidden;
  scroll-behavior: smooth;
}
.wrapper .tab-box.dragging {
  scroll-behavior: auto;
  cursor: grab;
}

.wrapper .tab-box .tab {
  cursor: pointer;
  font-size: 0.7rem;
  white-space: nowrap;
  background-color: #f5f4fd;
  padding: 13px 20px;
  border-radius: 30px;
  border: 1px solid #d8d4f2;
  transition: all 0.3s ease;
}

.wrapper .tab-box.dragging .tab {
  user-select: none;
  pointer-events: none;
}

.wrapper .tab-box .tab:hover {
  background-color: #efedfb;
}

.wrapper .tab-box .tab.active {
  background-color: #4070f4;
  border-color: transparent;
  color: #fff;
}
.cntr{
    display: flex;
    justify-content: center;
    
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
   
</div>
<div class="cntr">
<div class="wrapper">
  <div class="icon"><i class="fas fa-angle-left"></i></div>
  <ul class="tab-box">
    <?php while ($tag = $tags_result->fetch_assoc()): ?>
      <li class="tab">
        <?php echo htmlspecialchars($tag['name']); ?>
      </li>
    <?php endwhile; ?>
  </ul>
  <div class="icon"><i class="fas fa-angle-right"></i></div>
</div>

<div style="clear:both;"></div>
</div>
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
/* Created by Tivotal */

const tabBox = document.querySelector(".tab-box");
const tabs = document.querySelectorAll(".tab");
const icons = document.querySelectorAll(".icon i");

let isDragging = false;

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    //it will remove the class active
    //form previous item which have
    //class active
    tabBox.querySelector(".active").classList.remove("active");
    tab.classList.add("active");
  });
});

const Dragging = (e) => {
  if (!isDragging) return;
  tabBox.classList.add("dragging");
  tabBox.scrollLeft -= e.movementX;
  handleIcons(tabBox.scrollLeft);
};

const stopDrag = () => {
  tabBox.classList.remove("dragging");
  isDragging = false;
};

icons[1].addEventListener("click", () => {
  let scrollWidth = (tabBox.scrollLeft += 340);
  handleIcons(scrollWidth);
});

icons[0].addEventListener("click", () => {
  let scrollWidth = (tabBox.scrollLeft += -340);
  handleIcons(scrollWidth);
});

const handleIcons = (width) => {
  let maxScrollWidth = tabBox.scrollWidth - tabBox.clientWidth;
  icons[0].parentElement.style.display = width <= 0 ? "none" : "flex";

  icons[1].parentElement.style.display =
    maxScrollWidth - width <= 1 ? "none" : "flex";
};

tabBox.addEventListener("mousedown", () => (isDragging = true));
tabBox.addEventListener("mousemove", Dragging);
tabBox.addEventListener("mouseup", stopDrag);
</script>
</body>
</html>
