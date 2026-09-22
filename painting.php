<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Jon Keane - Painting</title>
    <!-- Include the CSS file for styling -->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/simple_slideshow_styles.css" rel="stylesheet" type="text/css"/>

    <!-- Add open graph meta tags for social media sharing -->
    <meta property="og:title" content="Jon Keane Art - Painting"/>
    <meta property="og:description" content="Jon Keane is an artist from Montreal, Quebec, Canada"/>
    <meta property="og:image" content="images/jka-twittercard.png"/>
    <meta property="og:url" content="painting.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Jon Keane Art"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>

    <!-- Add Twitter card meta tags for social media sharing -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Jon Keane Art - Painting"/>
    <meta name="twitter:description" content="Jon Keane is an artist from Montreal, Quebec, Canada"/>
    <meta name="twitter:image" content="images/jka-twittercard.png"/>
</head>

<body>

<div class="container">
    <div id="titlereturn">
        <a href="index.php"><img src="images/title.png" width="400" height="91"/></a>
    </div>

    <!-- Sidebar Navigation -->
    <div id="sidebar">
        <a href="drawing.php">
            <div class="sidebut">Drawing</div>
        </a>
        <a href="painting.php" aria-current="page">
            <div class="sidebut active">Painting</div>
        </a>
        <a href="photography.php">
            <div class="sidebut">Photography</div>
        </a>
        <a href="sculpture.php">
            <div class="sidebut">Sculpture</div>
        </a>
        <a href="about.php">
            <div class="sidebut">About</div>
        </a>
    </div>

    <!--start slideshow -->
    <div class="bss-slides num1" tabindex="1" autofocus="autofocus">

        <figure>
            <img src="images/painting/pheonix.png" width="100%"/>
            <div class="inner">
                <p>This painting is the first in a series in which I explored some iconic imagery, and contrasted it with the unexpected. Drawing from a variety of influential element of my life, I made these portraits as an attempt to subvert them and change their meaning.
                    </br>
                    </br>
                    In this first image, drawn from comic books, the figure is asleep at her keyboard. It both juxtaposes the idea of action with something inactive, but also references videogames and online personas.
                </p>
            </div>
        </figure>

        <figure>
            <img src="images/painting/maeve.png" width="100%"/>
            <div class="inner">
                <p>The second of these portraits, this one represents an Irish queen of legend. Her silly face and demeanor take her out of the idea of power and grace often associated with female heroes of old, and brings her closer to a contemporary experience.</p>
            </div>
        </figure>

        <figure>
            <img src="images/painting/rinoa.png" width="100%"/>
            <div class="inner">
                <p>In the last portrait of this series, the model take on another typical image and changes it around. Normally the domain of demure and shy female heroes, this image attempts to turn that on its head with a bold gesture that is completely at odds with the standard narrative.</p>
            </div>
        </figure>
        <figure>
            <img src="images/painting/tea.png" width="100%"/>
            <div class="inner">
                <p>This painting is actually an exercise from school, but I love the way it captures one of my favorite things, tea.</p>
            </div>
        </figure>

    </div>

    <!-- BSS-Slides -->
    <script src="javascript_bss/bsscopy.js"></script>
    <script>
        var opts = {
            auto: {
                speed: 3500,
                pauseOnHover: true
            },
            fullScreen: false,
            swipe: true
        };
        makeBSS('.num1');
    </script>
    <!-- end slideshow -->
</div>

<div class="copyright"><p>&copy; <?php echo date( "Y" ); ?> Jon Keane Art. All rights reserved.</p></div>

</body>
</html>
