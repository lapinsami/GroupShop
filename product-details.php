<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Christofer-Style.css"> <!--Denna skall ändras till style.css efter merge -->
    <title>Document</title>
</head>

<body>
    <header>
        <section>
            <!-- Just to make the space evenly amongst sections -->
            <section class="empty"></section>

            <!-- Box for Company name -->
            <section class="HeaderName">Sporks CO</section>

            <!-- Box for login and cart -->
            <section class="Login-Cart">
                <a href="profile.html">
                    <img src="img/login.png" alt="Click to get to Profile" class="profile-button" width="10%">
                </a>
                <button onclick="location.href='login.html'" class="login-button">
                    Login
                </button>
                <a href="cart.html">
                    <img class="cart-click" src="img/Cart.jpg" alt="Click me!" width="10%">
                </a>
            </section>
        </section>
        <nav>
            <a href="./index.html">Home</a>
            <a href="products.html">Products</a>
            <a href="contact.html">Contact</a>
            <a href="faq.html">FAQ</a>
            <a href="about.html">About</a>
        </nav>
    </header>

    <main>
        <?php
            $product = $_GET["product"];

            switch ($product) {
                case "spork":
                    echo "<h1>Spork</h1>";
                    break;
                case "fork":
                    echo "<h1>Fork</h1>";
                    break;
                case "spoon":
                    echo "<h1>Spoon</h1>";
                    break;
                case "knife":
                    echo "<h1>Knife</h1>";
                    break;
                default:
                    echo "<h1>Unknown product</h1>";
                    break;
            }
        ?>
    </main>

    <footer>
        <p>Copyright &copy; by Christofer, Saga, Sami</p>
    </footer>

</body>

</html>
