<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello mate</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>hello mate</h1>
    <?php if ('postedimages/34510028_511536198245.jpg'): ?>
        <img src="<?php echo '../postedimages/34510028_511536198245.jpg'; ?>" alt="<?php echo 'hello mate'; ?>" class="img-fluid">

    <?php endif; ?>
    <p class="mt-4"><?php echo nl2br(htmlspecialchars('Prominent examples of paywalls include&nbsp;the New York Times and the Washington Post, who both use paywalls to manage paid subscriptions. And paywalls are growing in popularity — a recent Reuters Study found nearly 70% of digital publishers across Europe and the US now use paywalls as part of their business model.')); ?></p>
    <a href="../index.php" class="btn btn-secondary mt-3">Back to homepage</a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
