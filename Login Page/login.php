<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Restaurant Login with CAPTCHA</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div class="container">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" onsubmit="return validateForm()">
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
                return true; // Proceed with form submission
            } else {
                alert('CAPTCHA not matched! Try again.');
                return false; // Prevent form submission
            }
        }

        window.onload = function() {
            generateCaptcha();
        };

        // Validation on form submission
        document.querySelector('form').addEventListener('submit', function(event) {
            if (!validateCaptcha()) {
                event.preventDefault(); // Prevent form submission if CAPTCHA is not matched
            }
        });
    </script>

</body>

</html>