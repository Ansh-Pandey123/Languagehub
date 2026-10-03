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

    <title>Learn English</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7ff;
            color: #1e293b;
        }

        nav {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            padding: 18px 7%;
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
            border-radius: 20px;
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #dbeafe, #ede9fe);
        }

        .flag {
            font-size: 70px;
        }

        .hero h1 {
            font-size: 42px;
            margin: 15px 0;
        }

        .hero p {
            font-size: 18px;
            color: #64748b;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 30px;
        }

        .topics {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            padding: 28px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-7px);
        }

        .card-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            color: #64748b;
            line-height: 1.6;
        }

        .vocabulary {
            margin-top: 50px;
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #2563eb;
            color: white;
        }

        .conversation {
            margin-top: 40px;
            background: #eef2ff;
            padding: 30px;
            border-radius: 18px;
        }

        .conversation p {
            margin: 12px 0;
            font-size: 17px;
        }

        footer {
            margin-top: 60px;
            background: #1e293b;
            color: white;
            text-align: center;
            padding: 25px;
        }
    </style>
</head>

<body>

<nav>
    <div class="logo">🌍 LanguageHub</div>

    <a href="languages.php" class="back">
        ← Languages
    </a>
</nav>


<section class="hero">

    <div class="flag">🇬🇧</div>

    <h1>Learn English</h1>

    <p>
        Improve your English vocabulary, grammar and conversation skills.
    </p>

</section>


<div class="container">

    <h2 class="section-title">
        📚 What You Will Learn
    </h2>

    <div class="topics">

        <div class="card">
            <div class="card-icon">🔤</div>
            <h2>Alphabet</h2>
            <p>
                Learn English A to Z and understand basic pronunciation.
            </p>
        </div>

        <div class="card">
            <div class="card-icon">📖</div>
            <h2>Vocabulary</h2>
            <p>
                Learn common English words and their meanings.
            </p>
        </div>

        <div class="card">
            <div class="card-icon">✍️</div>
            <h2>Grammar</h2>
            <p>
                Learn nouns, verbs, tenses, articles and sentence formation.
            </p>
        </div>

        <div class="card">
            <div class="card-icon">🗣️</div>
            <h2>Conversation</h2>
            <p>
                Practice English sentences used in everyday conversations.
            </p>
        </div>

    </div>


    <div class="vocabulary">

        <h2>📚 Basic English Vocabulary</h2>

        <table>

            <tr>
                <th>English</th>
                <th>Meaning</th>
                <th>Example</th>
            </tr>

            <tr>
                <td>Hello</td>
                <td>Greeting</td>
                <td>Hello, how are you?</td>
            </tr>

            <tr>
                <td>Thank you</td>
                <td>Thanks</td>
                <td>Thank you for your help.</td>
            </tr>

            <tr>
                <td>Good</td>
                <td>Nice / Fine</td>
                <td>This is a good book.</td>
            </tr>

            <tr>
                <td>Friend</td>
                <td>A person you like</td>
                <td>He is my best friend.</td>
            </tr>

            <tr>
                <td>Learn</td>
                <td>To gain knowledge</td>
                <td>I want to learn English.</td>
            </tr>

        </table>

    </div>


    <div class="conversation">

        <h2>🗣️ Daily English Conversation</h2>

        <p><strong>A:</strong> Hello! How are you?</p>

        <p><strong>B:</strong> I am fine. How are you?</p>

        <p><strong>A:</strong> I am good. What are you doing?</p>

        <p><strong>B:</strong> I am learning English.</p>

        <p><strong>A:</strong> That's great!</p>

    </div>

</div>


<footer>

    © 2026 LanguageHub | Learn English Easily 🚀

</footer>

</body>
</html>