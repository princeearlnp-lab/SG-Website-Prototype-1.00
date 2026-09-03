<?php

require "db.php";

$message = "";

if (isset($_POST["register"])) {

    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password !== $confirm_password) {

        $message = "Passwords do not match.";
    } else {

        // Check if username already exists
        $sql = "SELECT id FROM users WHERE username = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {

            $message = "Username already exists.";
        } else {

            // Hash password
            $hashed_password = password_hash(
                $password,
                PASSWORD_DEFAULT
            );

            // Insert account
            $sql = "INSERT INTO users (username, password)
                    VALUES (?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param(
                "ss",
                $username,
                $hashed_password
            );

            if ($stmt->execute()) {

                $message = "Account created successfully!";
            } else {

                $message = "Error creating account.";
            }
        }

        $stmt->close();
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(#e00404, #e0044a, #e0047d, #e004d9);
            background-attachment: fixed;
            text-align: center;
            color: white;
        }

        .register-box {
            background: rgba(255, 255, 255, 0.15);
            width: 350px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 15px;
        }

        input {
            padding: 10px;
            margin: 8px;
            width: 80%;
            text-align: center;
            border: none;
            border-radius: 5px;
        }

        button {
            padding: 10px 25px;
            background: #8b085f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        a {
            color: white;
        }
    </style>

</head>

<body>

    <div class="register-box">

        <h1>Create Account</h1>

        <?php if ($message != ""): ?>

            <p><?php echo htmlspecialchars($message); ?></p>

        <?php endif; ?>

        <form action="register.php" method="POST">

            <input
                type="text"
                name="username"
                placeholder="Username"
                required
                maxlength="50">

            <br>

            <input
                type="password"
                name="password"
                placeholder="Password"
                required
                minlength="4">

            <br>

            <input
                type="password"
                name="confirm_password"
                placeholder="Confirm Password"
                required
                minlength="4">

            <br><br>

            <button type="submit" name="register" onclick="window.location.href='index.php'">
                Create Account
            </button>

        </form>

        <br>

        <a href="index.php">Already have an account? Login</a>

    </div>

</body>

</html>
