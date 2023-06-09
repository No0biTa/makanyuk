<?php include('config/constants.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/41c3d62909.js" crossorigin="anonymous"></script>
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MakanYuk</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>

<body>
<!-- Navbar Section Starts Here -->
<section class="navbar">
    <div class="container">
        <div class="logo">
            <a href="<?php echo HOME;?>" title="Logo">
                <img src="images/MakanYuk-hori2.png" alt="MakanYuk Logo" class="img-responsive">
            </a>
        </div>

        <div class="menu text-right">
            <ul>
                <li>
                    <a href="<?php echo HOME;?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo HOME;?>categories.php">Categories</a>
                </li>
                <li>
                    <a href="<?php echo HOME;?>foods.php">Foods</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="<?php echo HOME;?>review.php" class="error"> Review Here</a>
                </li>
            </ul>
        </div>

        <div class="clearfix"></div>
    </div>
</section>
<!-- Navbar Section Ends Here -->
