<?php
require 'database.php';

$result = $conn->query("SELECT id, title, content, image_url, slug, created_at FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All News</title>
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="news.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="custom-main">
    <div class="news-container">
        <h1 class="news-header">All News</h1>
        <div class="news-content-wrapper all-news">
            <?php
            while ($row = $result->fetch_assoc()):
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
    </div>
    </div>
</body>
</html>
