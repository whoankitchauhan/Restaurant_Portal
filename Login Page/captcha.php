<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Simple CAPTCHA</title>
</head>

<body>
  <div id="captchaContainer">
    <input type="text" id="captchaInput" placeholder="Enter CAPTCHA">
    <button onclick="validateCaptcha()">Submit</button>
    <p id="captchaOutput"></p>
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
      return captcha;
    }

    function validateCaptcha() {
      let userCaptcha = document.getElementById('captchaInput').value.trim();
      let generatedCaptcha = document.getElementById('captchaOutput').innerText;

      if (userCaptcha === generatedCaptcha) {
        alert('CAPTCHA matched! Proceed.');
      } else {
        alert('CAPTCHA not matched! Try again.');
      }
    }

    window.onload = function() {
      generateCaptcha();
    };
  </script>
</body>

</html>