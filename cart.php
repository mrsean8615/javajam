<?php


if(isset($_POST['price'])) {
    $size = $_POST['size'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $title = $_POST['product-name'];

    $result = '
            <div class="item">
                <div class="item-form">
                    <h2 class="title">' . $title . '</h2>
                    <p class="description">Size: ' . $size . '<br>Price: ' . $price . '</p>
                    <img src="'. $img . '" alt="item">
                    <button class="submit-btn" type="submit">Remove From Cart</button>
                </div>
            </div>';
} else {
    $result = '<h2> Your cart is empty. </h2>';
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sean Payne &mdash; JavaJam Coffee House</title>
        <meta name="description" content="JavaJam Coffee Bar Case Study">
        <meta name="author" content="Sean Payne">
        <meta name="keywords" content="Homework, USU, Data Analytics and Information Systems">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="#">
    </head>
    <!--I am fully aware of the tags that modifiy html elements. However, css is just 1000 times better so I hope that's okay.-->
    <body>
        <div class="wrapper" id="home">
            <nav>
                <img src="img/coffeelogo.jpg" alt="coffee logo">
                <!--Use <b> instead of font-weight for same effect.-->
                <ul>
                    <a href="index.html"><li class="active">Home</li></a>
                    <a href="menu.html"><li>Menu</li></a>
                    <a href="music.html"><li>Music</li></a>
                    <a href="jobs.html"><li>Jobs</li></a>
                    <a href="gear.html"><li>Gear</li></a>
                </ul>
            </nav>
            <div class="head">
                <header>JavaJam Coffee Bar</header>
                <a href="cart.php"><img src="img/cart.png" alt="shopping cart" class="shopping-cart"></a>
            </div>


            <main>
                <div class="container">

                    <?php echo $result ?>
                </div>
            </main>
            <footer><p>Copyright © 2023 JavaJam Coffee Bar <br> <a href="#">Sean@payne.com</a></p></footer>
        </div>

        <script src="js/scripts.js"></script>
    </body>
</html>
