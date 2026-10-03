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

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Learn Japanese</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
    font-family: Arial, sans-serif;

    background-image:
        linear-gradient(
            rgba(255, 255, 255, 0.78),
            rgba(255, 255, 255, 0.78)
        ),
        url("https://images.unsplash.com/photo-1522383225653-ed111181a951");

    background-size: cover;
    background-position: center;
    background-attachment: fixed;

    color: #1e293b;
}

        nav {
            background: linear-gradient(135deg, #dc2626, #ef4444);
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
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
            border-radius: 25px;
        }

        .hero {
    text-align: center;
    padding: 80px 20px;

    background-image:
        linear-gradient(
            rgba(255, 255, 255, 0.55),
            rgba(255, 255, 255, 0.55)
        ),
        url(https://media.istockphoto.com/id/876560704/photo/fuji-japan-in-spring.jpg?s=612x612&w=0&k=20&c=j1VZlzfNcsjQ4q4yHXJEohSrBZJf6nUhh2_smM4eioQ=);

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    color: #1e293b;
}

        .flag {
            font-size: 75px;
        }

        .hero h1 {
            font-size: 42px;
            margin: 15px 0;
        }

        .hero p {
            color: #64748b;
            font-size: 18px;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 45px auto;
        }

        .container h2 {
            text-align: center;
            font-size: 30px;
            margin-bottom: 30px;
        }

        .topics {
            display: grid;
            grid-template-columns:
                repeat(auto-fit, minmax(230px, 1fr));

            gap: 25px;
        }

        .topic {
            background: white;
            padding: 30px;
            border-radius: 18px;
            text-align: center;

            box-shadow:
                0 8px 25px rgba(0,0,0,0.08);

            transition: 0.3s;
        }

        .topic:hover {
            transform: translateY(-7px);
        }

        .topic-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .topic h3 {
            margin-bottom: 10px;
        }

        .topic p {
            color: #64748b;
            line-height: 1.5;
        }

        .start-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 11px 22px;

            background:
                linear-gradient(135deg, #dc2626, #ef4444);

            color: white;
            text-decoration: none;

            border-radius: 25px;
            font-weight: bold;

            transition: 0.3s;
        }

        .start-btn:hover {
            transform: translateY(-3px);

            box-shadow:
                0 8px 18px rgba(220,38,38,0.3);
        }

    </style>

</head>

<body>


<nav>

    <div class="logo">
        🌸 LanguageHub
    </div>

    <a href="languages.php" class="back">
        ← Languages
    </a>

</nav>


<section class="hero">

    <div class="flag">
        🇯🇵
    </div>

    <h1>
        日本語を学ぼう
    </h1>

    <h2>
        Learn Japanese
    </h2>

    <p>
        Learn Japanese step by step
        from basic to advanced.
    </p>

</section>


<div class="container">

    <h2>
        🇯🇵 Japanese Learning Topics
    </h2>


    <div class="topics">


        <!-- Hiragana -->

        <div class="topic">

            <div class="topic-icon">
                あ
            </div>

            <h3>
                Hiragana
            </h3>

            <p>
                Learn all basic Hiragana
                characters and pronunciation.
            </p>

            <a href="#" class="start-btn">
                Start Learning →
            </a>

        </div>


        <!-- Katakana -->

        <div class="topic">

            <div class="topic-icon">
                カ
            </div>

            <h3>
                Katakana
            </h3>

            <p>
                Learn Katakana characters
                used for foreign words.
            </p>

            <a href="#" class="start-btn">
                Start Learning →
            </a>

        </div>


        <!-- Vocabulary -->

        <div class="topic">

            <div class="topic-icon">
                📖
            </div>

            <h3>
                Vocabulary
            </h3>

            <p>
                Learn useful Japanese words
                with English meanings.
            </p>

            <a href="#" class="start-btn">
                Start Learning →
            </a>

        </div>


        <!-- Grammar -->

        <div class="topic">

            <div class="topic-icon">
                📝
            </div>

            <h3>
                Japanese Grammar
            </h3>

            <p>
                Learn particles, sentence
                structure and grammar.
            </p>

            <a href="#" class="start-btn">
                Start Learning →
            </a>

        </div>


        <!-- Conversation -->

        <div class="topic">

            <div class="topic-icon">
                🗣️
            </div>

            <h3>
                Conversation
            </h3>

            <p>
                Learn useful Japanese
                phrases for daily life.
            </p>

            <a href="#" class="start-btn">
                Start Learning →
            </a>

        </div>


        <!-- Kanji -->

        <div class="topic">

            <div class="topic-icon">
                漢
            </div>

            <h3>
                Kanji
            </h3>

            <p>
                Learn basic Kanji characters
                and their meanings.
            </p>

            <a href="#" class="start-btn">
                Start Learning →
            </a>

        </div>


        <!-- Numbers -->

        <div class="topic">

            <div class="topic-icon">
                🔢
            </div>

            <h3>
                Japanese Numbers
            </h3>

            <p>
                Learn Japanese numbers,
                counting and pronunciation.
            </p>

            <a href="#" class="start-btn">
                Start Learning →
            </a>

        </div>


        <!-- Quiz -->

        <div class="topic">

            <div class="topic-icon">
                🧠
            </div>

            <h3>
                Japanese Quiz
            </h3>

            <p>
                Test your Japanese knowledge
                with interactive questions.
            </p>

            <a href="#" class="start-btn">
                Start Quiz →
            </a>

        </div>

    </div>

</div>

</body>

</html>