<?php
    require __DIR__ . '../src/app.php';
?>

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
    
    <section class="Special-offers-menu">
        <div class="container">
            <div class="special-offers">
                <h1>Special Offers</h1>
            </div>
            <div class="special-options flex-container">
                <div class="special-menu">
                    <img src="images/menu1.png" alt="sandwich">
                    <h4>Sandwich</h4>
                    <p>
                        Special monthly offers for sandwiches you can find below.
                    </p>
                    <div class="special-btn">
                        <a href="special_offers.php">Sandwiches</a>
                    </div>
                </div>

                <div class="special-menu">
                    <img src="images/menu2.png" alt="muffins">
                    <h4>Muffins</h4>
                    <p>
                        Special monthly offers for muffins you can find below.
                    </p>
                    <div class="special-btn">
                        <a href="special_offers.php">Muffins</a>
                    </div>
                </div>

                <div class="special-menu">
                    <img src="images/menu3.png" alt="burgers">
                    <h4>Burgers</h4>
                    <p>
                        Special monthly offers for burgers you can find below.
                    </p>
                    <div class="special-btn">
                        <a href="special_offers.php">Burgers</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slides">
        <div class="container">
            <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/burgers.jpg" alt="burgers" style="width:100%">
                <div class="text">Burrgers.</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/muffin.jpg" alt="muffins" style="width:100%">
                <div class="text">Muffins.</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/sandwiches.jpg" alt="sandwiches" style="width:100%">
                <div class="text">Sandwiches.</div>
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

    <section class="news">
        <div class="container">
            <div class="news-title">
                <h2>News Latter</h2>
                <p>
                    Please enter your name, email, message below - to contact us and receive a new best offers in our restaurant.
                </p>
                <form id="contact" action="index.php" method="post">
                    <p><input type="text" name="vardas" placeholder="Full Name" required autofocus></p>
                    <p><input type="email" name="email" placeholder="Email..." required></p>
                    <p><textarea placeholder="Message..." name="message" required></textarea></p>
                    <p><button name="submit" type="submit" id="contact-submit">Submit</button></p>
                </form>
            </div>
        </div>
    </section>

    <section class="social">
        <div class="container">
            <div class="fb-ins flex-container">
                <div class="social-fb-ins">
                    <h3>Find us on Instagram</h3>
                    <p>
                        You will find the new promotions and special menu options on our Instagram account.
                    </p>
                    <p>
                        Please click button below to find us. 
                    </p>
                    <div class="btn-fb-ins">
                        <a href="https://www.instagram.com/?hl=en" target="blank">Instagram</a>
                    </div>
                </div>
                <div class="inst-fb-img">
                    <img src="images/instagram1.png" alt="instagram image">
                </div>
            </div>

            <div class="fb-ins flex-container">
                <div class="inst-fb-img">
                    <img src="images/facebook.png" alt="facebook image">
                </div>
                <div class="social-fb-ins">
                    <h3>Find us on Facebook</h3>
                    <p>
                        You will find the new promotions and special menu options on our Facebook group.
                    </p>
                    <p>
                        Please click button below to find us.
                    </p>
                    <div class="btn-fb-ins">
                        <a href="https://www.facebook.com/" target="blank">Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-main">
        <div class="container">
            <div class="contact-info flex-container">
                <div class="contacts">
                    <p>Phone number:</p>
                    <i class="fas fa-phone-alt"></i><a href="tel:+37033671027">+37033671027</a>
                </div>

                <div class="contacts">
                    <p>Email Address:</p>
                    <i class="fas fa-envelope-open-text"></i><a href="mailto:Panakeie@gmail.com">Panakeie@gmail.com</a>
                </div>

                <div class="contacts">
                    <p>Location in Vilnius: </p>
                    <i class="fas fa-map-signs"></i><a href="https://www.google.com/maps/place/AKROPOLIS+Vilnius/@54.7095096,25.2563724,15.83z/data=!4m5!3m4!1s0x46dd915751bd7cd9:0x7feb25790f366e70!8m2!3d54.7105556!4d25.2616667" target="blank">Restaurant Location</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="last-part flex-container">
                <h4>
                    www.Panakeie-Restaurant.com
                </h4>
            </div>
            <div class="last-part flex-container">    
                <p>
                    &copy; <?php echo date('Y'); ?> All rights protected.
                </p>
            </div>
        </div>
    </footer>
    <script src="js/burger.js"></script>
    <script src="js/slaid.js"></script>
    
</body>
</html>