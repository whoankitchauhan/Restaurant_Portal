<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Restaurant Login with CAPTCHA</title>
    <link rel="stylesheet" href="styles.css" />
</head>


<body>
    <div class="container">
        <form id="loginForm" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            <h2>Login to Restaurant</h2>
            <div class="input-group">
                <label for="username">Username or Email:</label>
                <input type="text" id="username" name="username" required />
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required />
            </div>
            <div class="input-group">
                <label for="captcha">Enter CAPTCHA:</label>
                <input type="text" id="captchaInput" name="captchaInput" required />
                <span id="captchaOutput"></span>
            </div>
            <button type="submit">Login</button>
            <div class="signup-link">
                <p>Don't have an account? <a href="./registeration.php">Sign Up</a></p>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['username'];
            $password = $_POST['password'];

            echo "<p>Submitted username: $name</p>";
        }
        ?>
    </div>


    <script>
        function generateCaptcha() {
            let chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            let captcha = '';
            for (let i = 0; i < 6; i++) {
                let index = Math.floor(Math.random() * chars.length);
                captcha += chars[index];
            }
            document.getElementById('captchaOutput').innerText = captcha;
        }

        function validateCaptcha() {
            let userCaptcha = document.getElementById('captchaInput').value.trim();
            let generatedCaptcha = document.getElementById('captchaOutput').innerText;



            
            if (userCaptcha === generatedCaptcha) {
                alert('CAPTCHA matched! Proceed with login.');
                window.location.href = '../Main/index.php';
            } else {
                alert('CAPTCHA not matched! Try again.');
            }
        }

        window.onload = function() {
            generateCaptcha();
            document.getElementById('loginForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent form submission for now
                validateCaptcha(); // Call validateCaptcha() when the form is submitted
            });
        };
    </script>
</body>

</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Restaurant Login with CAPTCHA</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="container">
        <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h2>Login to Restaurant</h2>
            <div class="input-group">
                <label for="username">Username or Email:</label>
                <input type="text" id="username" name="username" required />
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required />
            </div>
            <div class="input-group">
                <label for="captcha">Enter CAPTCHA:</label>
                <input type="text" id="captchaInput" name="captchaInput" required />
                <span id="captchaOutput"></span>
            </div>
            <button type="submit">Login</button>
            <div class="signup-link">
                <p>Don't have an account? <a href="./registeration.php">Sign Up</a></p>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['username'];
            $password = $_POST['password'];

            // Perform password verification here
            include("database.php"); // Include your database connection file

            // Query the database to retrieve the user's hashed password
            $sql = "SELECT password FROM users WHERE username = '$name'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $hashed_password = $row['password'];

                // Use password_verify to check if the entered password matches the hashed password
                if (password_verify($password, $hashed_password)) {
                    echo "<p>Submitted username: $name</p>";
                    echo "<p>Password is correct!</p>";
                    // Redirect the user
                    header("Location: ../Main/index.php");
                    exit(); // Make sure to exit after redirection
                } else {
                    echo "<p>Submitted username: $name</p>";
                    echo "<p>Incorrect password. Please try again.</p>";
                }
            } else {
                echo "<p>Username not found. Please check your username or register for an account.</p>";
            }
        }
        ?>
    </div>

    <script>
        function generateCaptcha() {
            let chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            let captcha = '';
            for (let i = 0; i < 6; i++) {
                let index = Math.floor(Math.random() * chars.length);
                captcha += chars[index];
            }
            document.getElementById('captchaOutput').innerText = captcha;
        }

        function validateCaptcha() {
            let userCaptcha = document.getElementById('captchaInput').value.trim();
            let generatedCaptcha = document.getElementById('captchaOutput').innerText;

            if (userCaptcha === generatedCaptcha) {
                alert('CAPTCHA matched! Proceed with login.');
            } else {
                alert('CAPTCHA not matched! Try again.');
                event.preventDefault(); // Prevent form submission if CAPTCHA doesn't match
            }
        }

        window.onload = function() {
            generateCaptcha();
            document.getElementById('loginForm').addEventListener('submit', validateCaptcha);
        };
    </script>
</body>

</html>
