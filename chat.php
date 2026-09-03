<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Group Chat - Study First</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 16px;
            background: linear-gradient(#4e04e0, #6304e0, #7a04e0, #8f04e0, #a404e0);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: #ffffff;
            text-align: center;
        }

        .navbar {
            background: linear-gradient(#5a12e9, #6519e8, #823fe7);
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
            color: #2E8B57;
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
    <h3> Group Chat</h3>

    <hr>

    <div class="navbar">
        <a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
        <a href="notes.php" class="<?php echo ($current_page == 'notes.php') ? 'active' : ''; ?>">Notes</a>
        <a href="quizzes.php" class="<?php echo ($current_page == 'quizzes.php') ? 'active' : ''; ?>">Quizzes</a>
        <a href="chat.php" class="<?php echo ($current_page == 'chat.php') ? 'active' : ''; ?>">Groupchat</a>
    </div>

    <br>

    <h2>Study First-Group Chat</h2>
    <p>Welcome to the chat page!</p>

</body>

</html>
