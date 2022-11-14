<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="registration_css.css">


  <title></title>
</head>
<body>
<div class="full-screen-container">
  <form action="registration_php.php" method="post">
    <div class="login-container">
      <h3 class="login-title">Register</h3>
      <div class="input-group">
        <label for="user"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="user" id="user" required>
      </div>
      <div class="input-group">
       <label for="email"><b>Email</b></label>
       <input type="email" placeholder="Enter Email" name="email" id="email" required>
      </div>
      <div class="input-group">
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      </div>
      <div class="input-group">
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Enter Repeat Password" name="psw-repeat" id="psw-repeat" required>
      </div>
      <button type="submit" class="login-button" name="registerbtn">Register</button>
      <p>Already have an account? <a href="login.html">login in</a>.</p>

    </div>
  
  </form>
</div>
</body>
</html>