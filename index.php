<?php
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

        nav {
            background-color: #333;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            color: lightblue;
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



    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="notes.php">Notes</a></li>
            <li><a href="quizzes.php">Quizzes</a></li>
            <li><a href="chat.php"> Group Chat</a></li>
        </ul>
    </nav>



</body>

</html>

/*notes for next time:
1. finish the homepage design
2. follow up on the other pages
3. add more content on other pages */
