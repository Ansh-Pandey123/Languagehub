<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Languages</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            min-height: 100vh;
        }

        nav {
            background: #2563eb;
            color: white;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
        }

        .back {
            color: white;
            text-decoration: none;
            background: rgba(255,255,255,0.2);
            padding: 10px 18px;
            border-radius: 8px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 50px auto;
            text-align: center;
        }

        h1 {
            font-size: 40px;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #64748b;
            font-size: 18px;
            margin-bottom: 40px;
        }

        .languages {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .flag {
            font-size: 55px;
            margin-bottom: 15px;
        }

        .card h2 {
            color: #1e293b;
            margin-bottom: 10px;
        }

        .card p {
            color: #64748b;
            margin-bottom: 20px;
        }

        .learn {
            display: inline-block;
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
        }
         .learn-btn {
    display: inline-block;
    padding: 12px 24px;
    background: linear-gradient(135deg, #2563eb, #4f46e5);
    color: white;
    text-decoration: none;
    border-radius: 30px;
    font-size: 16px;
    font-weight: bold;
    transition: 0.3s;
    box-shadow: 0 6px 15px rgba(37, 99, 235, 0.3);
}

.learn-btn:hover {
    transform: translateY(-3px);
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    box-shadow: 0 10px 25px rgba(79, 70, 229, 0.4);
}

        .learn:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>

<nav>
    <div class="logo">🌍 LanguageHub</div>

    <a href="dashboard.php" class="back">
        ← Back
    </a>
</nav>

<div class="container">

    <h1>🌍 Learn a New Language</h1>

    <p class="subtitle">
        Choose a language and start learning today!
    </p>

    <div class="languages">

     <div class="card">
    <div class="flag">🇬🇧</div>

    <h2>English</h2>

    <p>
        Learn English vocabulary, grammar,
        speaking and daily conversation.
    </p>

    <a href="english.php" class="learn-btn">
        📚 Learn More →
    </a>
</div>

        <div class="card">

    <div class="flag">🇯🇵</div>

    <h2>Japanese</h2>

    <p>
        Learn Hiragana, Katakana,
        vocabulary, grammar and conversation.
    </p>

    <a href="japanese.php" class="learn-btn">
        📚 Learn More →
    </a>

</div>

        <div class="card">

    <div class="flag">🇩🇪</div>

    <h2>German</h2>

    <p>
        Learn German vocabulary,
        grammar, speaking and conversation.
    </p>

    <a href="german.php" class="learn-btn">
        📚 Learn More →
    </a>

</div>

        <div class="card">

    <div class="flag">🇫🇷</div>

    <h2>French</h2>

    <p>
        Learn French vocabulary,
        grammar, speaking and conversation.
    </p>

    <a href="french.php" class="learn-btn">
        📚 Learn More →
    </a>

</div>

        <div class="card">

    <div class="flag">🇪🇸</div>

    <h2>Spanish</h2>

    <p>
        Learn Spanish vocabulary,
        grammar, speaking and conversation.
    </p>

    <a href="spanish.php" class="learn-btn">
        📚 Learn More →
    </a>

</div>

        <div class="card">

    <div class="flag">🇰🇷</div>

    <h2>Korean</h2>

    <p>
        Learn Hangul, vocabulary,
        grammar, speaking and conversation.
    </p>

    <a href="korean.php" class="learn-btn">
        📚 Learn More →
    </a>

</div>

    </div>
</div>

</body>
</html>