<?php
include("database.php");
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  if (empty($username)) {
    echo "Please Enter a Username";
  } elseif (empty($email)) {
    echo "Please Enter an Email";
  } elseif (empty($_POST['password'])) {
    echo "Please Enter a Password";
  } else {
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    try {
      mysqli_query($conn, $sql);
      echo "<script>alert('Registration successful!'); window.location.href = './login.php';</script>";
    } catch (mysqli_sql_exception $e) {
      echo "Some error occurred: " . $e->getMessage();
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Restaurant Registration</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <div class="container">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
      <h2>Register for Restaurant</h2>
      <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />
      </div>
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
      </div>
      <div class="input-group">
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required />
      </div>
      <button type="submit">Register</button>
      <div class="login-link">
        <p>Already have an account? <a href="./login.php">Login</a></p>
      </div>
    </form>
  </div>
</body>

</html>
<?php
mysqli_close($conn);
?>