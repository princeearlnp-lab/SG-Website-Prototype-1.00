<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Study First</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: linear-gradient(#e00404, #e0044a, #e0047d, #e004ad, #e004d9);
            background-attachment: fixed;
            text-align: center;
            color: white;
        }

        .navbar {
            background: linear-gradient(#ed0000, #e0044a, #de6372);
            padding: 20px;
            display: flex;
            gap: 5px;
            justify-content: center;
            border-radius: 8px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .navbar a:hover,
        .navbar a.active {
            background: white;
            color: #8b2e36;
            font-weight: bold;
        }

        .box {
            background: rgba(255, 255, 255, 0.15);
            padding: 30px;
            margin: 40px auto;
            max-width: 600px;
            border-radius: 15px;
        }

        .button {
            display: inline-block;
            padding: 12px 25px;
            margin: 10px;
            background: #8b085f;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .button:hover {
            background: #a93f86;
        }
    </style>
</head>

<body>

    <h1>STUDY FIRST!</h1>

    <marquee>
        <b>WELCOME TO OUR WEBSITE!!</b>
    </marquee>

    <hr>

    <div class="navbar">

        <a href="index.php"
            class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
            Home
        </a>

        <a href="notes.php"
            class="<?php echo ($current_page == 'notes.php') ? 'active' : ''; ?>">
            Notes
        </a>

        <a href="quizzes.php"
            class="<?php echo ($current_page == 'quizzes.php') ? 'active' : ''; ?>">
            Quizzes
        </a>

        <a href="chat.php"
            class="<?php echo ($current_page == 'chat.php') ? 'active' : ''; ?>">
            Group Chat
        </a>

    </div>

    <div class="box">

        <?php if (isset($_SESSION["username"])): ?>

            <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>

            <p>You are logged in.</p>

            <a class="button" href="logout.php">Logout</a>

        <?php else: ?>

            <h2>Welcome to Study First</h2>

            <p>
                Your home for notes, quizzes, and collaborative studying.
            </p>

            <a class="button" href="index.php">Login</a>

            <a class="button" href="1.php">Create Account</a>

        <?php endif; ?>

    </div>

</body>

</html>
