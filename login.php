<?php

require "db.php";

if (isset($_POST["login"])) {

    $username = $_POST["Username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {

            echo "Login successful! Welcome, "
                . htmlspecialchars($user["username"]);
        } else {

            echo "Incorrect password.";
        }
    } else {

        echo "Username not found.";
    }

    $stmt->close();
}

$conn->close();
?>
