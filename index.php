<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SG-WEBSITE PROTOTYPE 1.00</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 16px;
            background: linear-gradient(#e00404, #e0044a, #e0047d, #e004ad, #e004d9);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            text-align: center;

        }

        .navbar {
            background: linear-gradient(#ed0000, #e0044a, #de6372);
            padding: 20px;
            display: flex;
            gap: 5px;
            border-radius: 8px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .navbar a:hover {
            background: white;
            color: #8b2e36;
        }

        .navbar a.active {
            background: white;
            color: #8b2e39;
            font-weight: bold;
        }

        .navbar {
            align-content: center;
            justify-content: center;
            text-align: center;
        }
    </style>

</head>

<body>

    <h1>STUDY FIRST!</h1>

    <marquee
        behavior="srolling"
        direction="left"
        scrollamount="10"
        onmouseover="this.stop()"
        onmouseout="this.start()"
        style="
    color: #d78d8d;
    font-size: 20px;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    font-family:'courier new' , monospace;
    "><b>WELCOME TO OUR WEBSITE!!</b></marquee>



    <hr>
    <br>



    <div class="navbar">
        <a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
        <a href="notes.php" class="<?php echo ($current_page == 'notes.php') ? 'active' : ''; ?>">Notes</a>
        <a href="quizzes.php" class="<?php echo ($current_page == 'quizzes.php') ? 'active' : ''; ?>">Quizzes</a>
        <a href="chat.php" class="<?php echo ($current_page == 'chat.php') ? 'active' : ''; ?>">Groupchat</a>
    </div>

    <div class="login-box">
        <h2 style="text-align:center;">LOG-IN </h2>

        <form action="login.php" method="POST">
            <label>Username:</label><br>
            <input type="Username" name="Username" placeholder="Username" required style="
            text-align: middle;
            align-content: center;
            justify-content: center;
            "><br>

            <label>Password:</label><br>
            <input type="password" name="password" placeholder="Password" required minlength="4"><br>

            <button type="submit" name="login" onclick="window.location.href='notes.php'" style="
            background: linear-gradient( #8b085f, #a93f86);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            ">Login</button><br>
            <label style="text-align:center;" onclick="window.location.href='1.php'"> <a href="1.php">Register</a></label>

</body>

</html>
