<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grinders - Burgers & Steaks</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../../css/index.css') }}">

</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <h1>Grinders</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">Sign In</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h2>Your favorite Burgers & Steaks</h2>
            <p>Delicious, juicy, and trendy. Order online now!</p>
        </div>
    </section>

    <!-- Popular Menu Items -->
    <section id="menu" class="menu">
        <h2>Popular Menu Items</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="{{ asset('img/Grilled-chicken-burger.jpg') }}" alt="Grilled Chicken Burger">


                <h3>Grilled Cheeseburger</h3>
                <p>$12</p>
                <button>Order Now</button>
            </div>
            <div class="menu-item">
                <img src="path/to/salisbury_steak.jpg" alt="Salisbury Steak">
                <h3>Salisbury Steak</h3>
                <p>$23</p>
            </div>
            <div class="menu-item">
                <img src="path/to/bison_burger.jpg" alt="Bison Burger">
                <h3>Bison Burger</h3>
                <p>$16</p>
            </div>
            <div class="menu-item">
                <img src="path/to/grilled_chili_burger.jpg" alt="Grilled Chili Burger">
                <h3>Grilled Chili Burger</h3>
                <p>$13</p>
            </div>
            <div class="menu-item">
                <img src="path/to/elk_burger.jpg" alt="Elk Burger">
                <h3>Elk Burger</h3>
                <p>$19</p>
            </div>
            <div class="menu-item">
                <img src="path/to/ribeye.jpg" alt="Ribeye">
                <h3>Ribeye</h3>
                <p>$16</p>
            </div>
            <div class="menu-item">
                <img src="path/to/hanger_steak.jpg" alt="Hanger Steak">
                <h3>Hanger Steak</h3>
                <p>$25</p>
            </div>
            <div class="menu-item">
                <img src="path/to/chimichurri_burger.jpg" alt="Chimichurri Burger">
                <h3>Chimichurri Burger</h3>
                <p>$13</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <p>Email: <a href="mailto:contact@grinders.com">contact@grinders.com</a></p>
        <p>Phone: +123456789</p>
        <p>Address: 224 Park Drive, Oakland, CA 94618</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Grinders. All Rights Reserved.</p>
    </footer>
</body>
</html>

