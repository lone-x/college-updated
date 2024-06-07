<?php
require_once 'database.php';

$noti = "SELECT * FROM notification";
$notiresult = mysqli_query($conn, $noti);

$notification = array(); // Initialize an empty array to store all rows

// Fetch each row and add it to the $notification array
while ($row = mysqli_fetch_assoc($notiresult)) {
    $notification[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="marquee.css">
    <style>
        .scrolling-text {
            display: flex;
        }

        .scrolling-text-item {
            white-space: nowrap;
            padding: 0 30px;
        }
    </style>
</head>
<body>

<div class="scrolling-text-container">
    <div class="scrolling-text-inner" style="--marquee-speed: 20s;">
        <div class="scrolling-text">
            <?php foreach ($notification as $index => $value): ?>
                <div class="scrolling-text-item">
                    <a href="<?php echo $value['url'] ?>"><?php echo $value['notification']?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<script src="marquee.js"></script>
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
    setInterval(function() {
        const scrollingText = document.querySelector(".scrolling-text");
        const items = scrollingText.querySelectorAll(".scrolling-text-item");

        let totalWidth = 0;
        items.forEach(function(item) {
            totalWidth += item.offsetWidth;
        });

        scrollingText.style.width = totalWidth + "px";

        const innerText = scrollingText.innerHTML;
        scrollingText.innerHTML += innerText;
    }, 2000); // Repeat every 2 seconds
});

</script> -->
</body>
</html>
