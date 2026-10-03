<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LANGUAGE ACADEMIA</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #222;
        }

        /* NAVBAR */

        nav {
            height: 70px;
            background: #2563eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            color: white;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .logout {
            background: white;
            color: #2563eb;
            padding: 10px 18px;
            border-radius: 5px;
        }

        /* HERO */

        .hero {
    text-align: center;
    padding: 100px 20px;

    background-image:
        linear-gradient(
            rgba(0, 0, 0, 0.20),
            rgba(0, 0, 0, 0.20)
        ),
        url("https://i.pinimg.com/736x/eb/de/5d/ebde5d627950cd9587ec93475080321c.jpg");

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    color: white;

    min-height: 500px;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
}
        

        .hero-text {
            max-width: 600px;
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 19px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .hero button {
            padding: 14px 25px;
            border: none;
            border-radius: 6px;
            background: white;
            color: #2563eb;
            font-size: 16px;
            font-weight: bold;
        }

        /* SERVICES */

        .services {
            padding: 60px 8%;
            text-align: center;
        }

        .services h2 {
            font-size: 35px;
            margin-bottom: 40px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            width: 280px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin-bottom: 15px;
            color: #2563eb;
        }

        .card p {
            line-height: 1.5;
        }

        /* ABOUT */

        .about {
            padding: 60px 8%;
            background: white;
            text-align: center;
        }

        .about h2 {
            font-size: 35px;
            margin-bottom: 20px;
        }

        .about p {
            max-width: 800px;
            margin: auto;
            line-height: 1.7;
        }

        /* FOOTER */

        footer {
            background: #111827;
            color: white;
            text-align: center;
            padding: 25px;
        }

    </style>

</head>

<body>

<!-- NAVBAR -->

<nav>

    <div class="logo">
       LANGUAGE ACADEMIA
    </div>

    <ul>

        <li>
            <a href="#home">Home</a>
        </li>

        <li>
            <a href="#services">Services</a>
        </li>

        <li>
            <a href="#about">About</a>
        </li>

        <li>
            <a href="#contact">Contact</a>
        </li>

        <li>
            <a class="logout" href="logout.php">
                Logout
            </a>
        </li>

    </ul>

</nav>


<!-- HERO -->

<section class="hero" id="home">

    <div class="hero-text">

        <h1>
            Welcome, <?php echo htmlspecialchars($username); ?>!
        </h1>

        <p>
            Welcome to our website. You have successfully
            logged in to your account.
        </p>

        <button>
            <a href="language.php" class="explore-btn">
    <span>📚</span>
    <span>Explore Languages</span>
    <span class="arrow">→</span>
</a>
        </button>

    </div>

</section>


<!-- SERVICES -->

<section class="services" id="services">

    <h2>Our Services</h2>

    <div class="cards">

        <div class="card">

            <h3>Web Development</h3>

            <p>
                We create modern and responsive
                websites using latest technologies.
            </p>

        </div>


        <div class="card">

            <h3>Data Analytics</h3>

            <p>
                We analyze data and create useful
                business insights and reports.
            </p>

        </div>


        <div class="card">

            <h3>Database</h3>

            <p>
                We manage secure and efficient
                databases for web applications.
            </p>

        </div>

    </div>

</section>


<!-- ABOUT -->

<section class="about" id="about">

    <h2>About Us</h2>

    <p>
        This is a PHP and MySQL based authentication
        website. Users can register, login securely,
        access this website after authentication and
        logout from their account.
    </p>

</section>


<!-- CONTACT -->

<section class="about" id="contact">

    <h2>Contact</h2>

    <p>
        Email: example@gmail.com
        <br><br>
        Phone: +91 9876543210
    </p>

</section>


<!-- FOOTER -->

<footer>

    <p>
        © 2026 MyWebsite. All Rights Reserved.
    </p>

</footer>

</body>

</html>