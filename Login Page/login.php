<?php

include("database.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant Login</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="container">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <h2>Login to Restaurant</h2>
            <div class="input-group">
                <label for="username">Username or Email:</label>
                <input type="text" id="username" name="username" required />
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required />
            </div>
            <button type="submit">Login</button>
            <div class="signup-link">
                <p>Don't have an account? <a href="./registeration.php">Sign Up</a></p>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['username'];
            echo "<p>Submitted username: $name</p>";
        }
        ?>
    </div>

    <script>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    echo "alert('Login successful!');";
                    echo "window.location.href = '../Main/index.php';";
                } else {
                    echo "alert('Incorrect password!');";
                }
            } else {
                echo "alert('User not found!');";
            }
        }
        ?>
    </script>
</body>

</html>
