<?php

include("database.php");
$registrationMessage = "";


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
        <button type="submit">Register</button>
        <div class="login-link">
          <p>Already have an account? <a href="./login.php">Login</a></p>
        </div>
        <div class="success-message"><?php echo $registrationMessage; ?></div>
      </form>
    </div>
  </body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    if (empty($username)) {
        echo "Please Enter a Username";
    }elseif(empty($password)){
        echo "Please Enter a Email";
    }elseif(empty($password)){
        echo "Please Enter a Password";
    }else{
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
        try {
          mysqli_query($conn, $sql);
          $registrationMessage = "Registration successful!";

      } catch (mysqli_sql_exception $e) {
          $registrationMessage = "Some error occurred: " . $e->getMessage();
      }
    }

}
    mysqli_close($conn);
?>

