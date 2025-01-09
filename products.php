<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Christofer-Style.css"> <!--Denna skall ändras till style.css efter merge -->
    <title>Spork CO</title>
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
            <a href="products.php">Products</a>
            <a href="contact.html">Contact</a>
            <a href="faq.html">FAQ</a>
            <a href="about.html">About</a>
        </nav>
    </header>

    <main>

        <form action="products.php" method="GET" class="searchbar">
            <input type="search" name="query" placeholder="Search here..." required>
            <button type="submit">Search</button>
        </form>

        <?php
            $products = array("spork", "spoon", "knife", "fork");
            $query = $_GET["query"];

            foreach($products as $product){
                if(str_contains($product, $query)){
                    echo "<a style='color: black;' href='product-details.php?product={$product}'>{$product}</a>";
                }
            }
        ?>

    </main>

    <footer>
        <p>Copyright &copy; by Christofer, Saga, Sami</p>
    </footer>

</body>

</html>