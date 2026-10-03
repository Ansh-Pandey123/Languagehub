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

    <title>Learn German</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #1e293b;
        }

        /* NAVBAR */

        nav {
            background: linear-gradient(
                135deg,
                #111827,
                #374151
            );

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

            transition: 0.3s;
        }

        .back:hover {
            background: rgba(255,255,255,0.35);
        }


        /* HERO */

        .hero {

            text-align: center;

            padding: 80px 20px;

            background-image:

                linear-gradient(
                    rgba(255,255,255,0.70),
                    rgba(255,255,255,0.70)
                ),

                url("german-bg.jpg");

            background-size: cover;

            background-position: center;

            background-repeat: no-repeat;

            color: #111827;
        }

        .flag {
            font-size: 75px;
        }

        .hero h1 {
            font-size: 42px;
            margin: 15px 0 5px;
        }

        .hero h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .hero p {
            color: #475569;
            font-size: 18px;
        }


        /* CONTAINER */

        .container {

            width: 90%;

            max-width: 1100px;

            margin: 45px auto;
        }

        .container > h2 {

            text-align: center;

            font-size: 30px;

            margin-bottom: 30px;
        }


        /* TOPICS */

        .topics {

            display: grid;

            grid-template-columns:
                repeat(
                    auto-fit,
                    minmax(230px, 1fr)
                );

            gap: 25px;
        }


        /* CARD */

        .topic {

            background: white;

            padding: 30px;

            border-radius: 18px;

            text-align: center;

            box-shadow:
                0 8px 25px
                rgba(0,0,0,0.08);

            transition: 0.3s;
        }

        .topic:hover {

            transform:
                translateY(-7px);

            box-shadow:
                0 15px 30px
                rgba(0,0,0,0.12);
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


        /* BUTTON */

        .start-btn {

            display: inline-block;

            margin-top: 15px;

            padding: 11px 22px;

            background:

                linear-gradient(
                    135deg,
                    #111827,
                    #374151
                );

            color: white;

            text-decoration: none;

            border-radius: 25px;

            font-weight: bold;

            transition: 0.3s;
        }

        .start-btn:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 8px 18px
                rgba(0,0,0,0.25);
        }

    </style>

</head>


<body>


<!-- NAVBAR -->

<nav>

    <div class="logo">
        🇩🇪 LanguageHub
    </div>

    <a
        href="languages.php"
        class="back"
    >
        ← Languages
    </a>

</nav>


<!-- HERO -->

<section class="hero">

    <div class="flag">
        🇩🇪
    </div>

    <h1>
        Deutsch lernen
    </h1>

    <h2>
        Learn German
    </h2>

    <p>
        Learn German step by step
        from basic to advanced.
    </p>

</section>


<!-- LEARNING TOPICS -->

<div class="container">

    <h2>
        🇩🇪 German Learning Topics
    </h2>


    <div class="topics">


        <!-- ALPHABET -->

        <div class="topic">

            <div class="topic-icon">
                🔤
            </div>

            <h3>
                German Alphabet
            </h3>

            <p>
                Learn the German alphabet,
                letters and pronunciation.
            </p>

            <a
                href="#"
                class="start-btn"
            >
                Start Learning →
            </a>

        </div>


        <!-- VOCABULARY -->

        <div class="topic">

            <div class="topic-icon">
                📖
            </div>

            <h3>
                Vocabulary
            </h3>

            <p>
                Learn useful German words
                with English meanings.
            </p>

            <a
                href="#"
                class="start-btn"
            >
                Start Learning →
            </a>

        </div>


        <!-- GRAMMAR -->

        <div class="topic">

            <div class="topic-icon">
                📝
            </div>

            <h3>
                German Grammar
            </h3>

            <p>
                Learn German grammar,
                articles, verbs and sentences.
            </p>

            <a
                href="#"
                class="start-btn"
            >
                Start Learning →
            </a>

        </div>


        <!-- SPEAKING -->

        <div class="topic">

            <div class="topic-icon">
                🗣️
            </div>

            <h3>
                Speaking
            </h3>

            <p>
                Practice German speaking
                and pronunciation.
            </p>

            <a
                href="#"
                class="start-btn"
            >
                Start Learning →
            </a>

        </div>


        <!-- CONVERSATION -->

        <div class="topic">

            <div class="topic-icon">
                💬
            </div>

            <h3>
                Daily Conversation
            </h3>

            <p>
                Learn common German phrases
                used in everyday life.
            </p>

            <a
                href="#"
                class="start-btn"
            >
                Start Learning →
            </a>

        </div>


        <!-- NUMBERS -->

        <div class="topic">

            <div class="topic-icon">
                🔢
            </div>

            <h3>
                German Numbers
            </h3>

            <p>
                Learn German numbers,
                counting and pronunciation.
            </p>

            <a
                href="#"
                class="start-btn"
            >
                Start Learning →
            </a>

        </div>


        <!-- PRONUNCIATION -->

        <div class="topic">

            <div class="topic-icon">
                🎧
            </div>

            <h3>
                Pronunciation
            </h3>

            <p>
                Improve your German
                pronunciation and listening.
            </p>

            <a
                href="#"
                class="start-btn"
            >
                Start Learning →
            </a>

        </div>


        <!-- QUIZ -->

        <div class="topic">

            <div class="topic-icon">
                🧠
            </div>

            <h3>
                German Quiz
            </h3>

            <p>
                Test your German knowledge
                with interactive questions.
            </p>

            <a
                href="#"
                class="start-btn"
            >
                Start Quiz →
            </a>

        </div>


    </div>

</div>


</body>

</html>