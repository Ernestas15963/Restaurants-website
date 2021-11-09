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
    <footer class="container flex-container about-mb">
            <div class="restaurant-1mg">
                <img src="images/restaurant.jpg" alt="restaurant">
            </div>
            <div class="about-text">
                <h1>
                    JOIN THE FAMILY AT PANAKEIA FAMILY RESTAURANT.
                </h1>
                <p>
                    It's always more fun to go out and eat at Panakeia's Family Restaurant, because our people go out of their way to make you feel right at home. 
                    They know the more you enjoy yourself, the more you'll feel like coming back. The more you look at our menu, the more you'll see to tempt you. 
                    Like delicious breakfasts, sizzling steaks, tasty sea food, salads, desserts and much, much more. All brought right to your table, with a big smile. 
                    At Panakeia's Family Restaurant you get great tasting food and the kind of prices that make it easy for you to take your whole family out, a lot more often. 
                    Like our kid's menu... a variety of meals at affordable prices. It's time to let us serve you. 
                    So sit back, stretch out, enjoy, and relish the very special feeling that comes from a visit to Panakeia.
                </p>
            </div>
    </footer>
    <script src=" js/burger.js"></script>
</body>
</html>