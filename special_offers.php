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
    <section>
        <div class="container">
            <div class="special-offers">
                <h1>Special Offers</h1>
            </div>
            <div class="special flex-container">
                <div class="special1 gap1">
                    <img src="images/burger12.jpg" alt="burger">
                    <h2>
                        30% off.
                    </h2>
                    <p>
                        Family Burger £3.5
                    </p>
                </div>
                <div class="special1 gap1">
                    <img src="images/burger2.jpg" alt="burger">
                    <h2>
                        32% off.
                    </h2>
                    <p>
                        vegetarian burger £3
                    </p>
                </div>
            </div>
            <div class="special flex-container">
                <div class="special1 gap1">
                    <img src="images/sandwich.jpg" alt="sandwiches">
                    <h2>
                        25% off.
                    </h2>
                    <p>
                        Family sandwich £2.7
                    </p>
                </div>
                <div class="special1 gap1">
                    <img src="images/sandwiches2.jpg" alt="sandwiches">
                    <h2>
                        27% off.
                    </h2>
                    <p>
                        Party sandwich £2.5
                    </p>
                </div>
            </div>
            <div class="special flex-container">
                <div class="special1 gap1">
                    <img src="images/muffin1.jpg" alt="muffins">
                    <h2>
                        15% off.
                    </h2>
                    <p>
                        Party Muffin 1£ 
                    </p>
                </div>
                <div class="special1 gap1">
                    <img src="images/muffin2.jpg" alt="muffins">
                    <h2>
                        15% off.
                    </h2>
                    <p>
                        Happy Muffin 1£ 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="web1 flex-container">
            <h2>
                This Month Offers
            </h2>
        </div>
    </footer>
    <script src=" js/burger.js"></script>
</body>
</html>