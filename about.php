<?php
/**
 * Jon Keane Art - About Page
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Jon Keane - About</title>
    <!-- Include the CSS file for styling -->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/simple_slideshow_styles.css" rel="stylesheet" type="text/css"/>

    <!-- Add open graph meta tags for social media sharing -->
    <meta property="og:title" content="Jon Keane Art - About"/>
    <meta property="og:description" content="Jon Keane is an artist from Montreal, Quebec, Canada"/>
    <meta property="og:image" content="images/jka-twittercard.png"/>
    <meta property="og:url" content="index.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Jon Keane Art"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>

    <!-- Add Twitter card meta tags for social media sharing -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Jon Keane Art - About"/>
    <meta name="twitter:description" content="Jon Keane is an artist from Montreal, Quebec, Canada"/>
    <meta name="twitter:image" content="images/jka-twittercard.png"/>
</head>

<body>

<div class="container">
    <!-- Site Title -->
    <div id="titlereturn">
        <a href="index.php"><img src="images/title.png" width="400" height="91" alt="Jon Keane Art"/></a>
    </div>
    <!-- Sidebar Navigation -->
    <div id="sidebar">
        <a href="drawing.php">
            <div class="sidebut">Drawing</div>
        </a>
        <a href="painting.php">
            <div class="sidebut">Painting</div>
        </a>
        <a href="photography.php">
            <div class="sidebut">Photography</div>
        </a>
        <a href="sculpture.php">
            <div class="sidebut">Sculpture</div>
        </a>
        <a href="about.php" aria-current="page">
            <div class="sidebut active">About</div>
        </a>
    </div>
    <!-- Main Content Area -->
    <div class="content">
        <p>Jon Keane is a 31-year-old artist living and working in Montreal Quebec. Currently working as a substitute teacher, Jon is a qualified art teacher, but is looking to expand his practice.
            </br>
            </br>
            Interested in a variety of media, Jon paints, draws, makes sculptures and installations, takes black and white 35mm photography, and creates digital artworks, including this website.
            </br>
            </br>
            For more information about Jon, or to see some of his other work, take a look below.
        </p>
    </div>
</div>
<div class="copyright"><p>&copy; <?php echo date( "Y" ); ?> Jon Keane Art. All rights reserved.</p></div>

</body>
</html>
