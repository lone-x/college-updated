<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bababa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>bababa</h1>
    <?php if ('postedimages/Document (1).png'): ?>
        <img src="<?php echo htmlspecialchars('postedimages/Document (1).png'); ?>" alt="<?php echo htmlspecialchars('bababa'); ?>" class="img-fluid">
    <?php endif; ?>
    <p class="mt-4"><?php echo nl2br(htmlspecialchars('hello ')); ?></p>
    <a href=".../index.php" class="btn btn-secondary mt-3">Back to homepage</a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
