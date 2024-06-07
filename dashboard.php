<?php
// Include restricted.php to ensure authentication
require_once 'restricted.php';

// Check if the user's name is set in the session
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    // Redirect to login page if the username is not set
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sidebar.css">
    <link rel="stylesheet" href="./header.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  -->
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
            padding-top: 180px;
            height: 220vh;
        }
        
    </style>
</head>

<body>
<!-- Include sidebar.php -->
<?php include 'sidebar4.php'; ?>
    <div id="content">
    <div class="wrapper">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>This is the welcome page. You are logged in as <?php echo htmlspecialchars($username); ?>.</p>
        <!-- <p><a href="logoff.php">Log Out</a></p> -->
    </div>
    </div>
   <!--  <script src="sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>

</html>
