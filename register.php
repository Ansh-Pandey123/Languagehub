<?php

include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    if ($username == "" || $password == "") {

        $message = "Please fill all fields.";

    } else {

        $hashedPassword = password_hash(
            $password,
            PASSWORD_DEFAULT
        );

        $sql = "INSERT INTO users (username, password)
                VALUES (?, ?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param(
            "ss",
            $username,
            $hashedPassword
        );

        if ($stmt->execute()) {

            $message = "Registration successful!";

        } else {

            $message = "Username already exists.";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Register</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>Create Account</h2>

    <p><?php echo htmlspecialchars($message); ?></p>

    <form method="POST">

        <input
            type="text"
            name="username"
            placeholder="Enter Username"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Enter Password"
            required
        >

        <button type="submit">
            Register
        </button>

    </form>

    <p>
        Already have an account?
        <a href="login.php">Login</a>
    </p>

</div>

</body>

</html>