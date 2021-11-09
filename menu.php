<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is friendly family restaurant, where you you can order delicious meals online.">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/863029ac60.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Panakeie Restaurant</title>
</head>
<body>

    <header class="site-header">
        <div class="container flex-container">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
            </div>
            <nav class="main-nav">
                <ul class="flex-container">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="special_offers.php">Special-offers</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container"> 
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="special_offers.php">Special-offers</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </div>
    </header>
    <section class="container">
        <div class="flex-container menu-page">
            <h1>
                MENU
            </h1>
        </div>
    </section>

    <section class="slides">
        <div class="container">
            <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/1-compressor.png" alt="menu" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/2-compressor.png" alt="menu" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/3-compressor.png" alt="menu" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
        </div>
    </section>
    <footer>
        <div class="web1 flex-container">
            <h2>
                Three Menu Options
            </h2>
        </div>
    </footer>

    <script src=" js/burger.js"></script>
    <script src="js/slaid.js"></script>
</body>
</html>