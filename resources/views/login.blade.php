<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="fileaset/Logo web.png">
    <link rel="stylesheet" type="text/css" href="property/login_styles.css" />
    <title>Piknikin | {{ $title }}</title>
</head>
<body>
    <p id="text-1"><b>Sistem Informasi Piknikin</b></p>
    <p id="text-2">Nguri-uri Kabudayaan Jawi</p>
    <div class="logo">
      <img src="fileaset/Logo.png" style="height: 30px" />
    </div>
    <div class="bg-login">
      <div class="text-login">
        <p id="t-login">Login</p>
        <a id="t-username">Username</a>
        <p id="t-password">Password</p>
        <p id="t-notif"></p>
        <div class="Input">
          <input type="text" id="input_username" class="Input-text" placeholder="&nbsp;Username" require="" />
          <input type="password" id="input_password" class="Input-text" placeholder="&nbsp;Password" require="" />
          <script>
            var input = document.getElementById("input_password");
            input.addEventListener("keyup", function (event) {
              if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("button-login").click();
              }
            });
          </script>
          <button id="button-login"><a id="text-4" onclick="ValidateLogin()">Login</a</button>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="property/login_script.js"></script>
  </body>
</html>
