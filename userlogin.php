<!DOCTYPE html>
<html>
<head>
	<title>user login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="loginstyle.css">

</head>
<body>
 
  <div class="cont">
  <form method="POST" action="regis.php">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address or Username</span>
        <input type="username" name="username">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <input type="submit" value="Sign In" class="submit">
      <p class="forgot-pass">Forgot Password ?</p>

      
    </div>
</form>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. </p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <form method="POST" action="registration.php">
        <label>
          <span>Name</span>
          <input type="text" name="username" required>
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="Email" required>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="Password" required>
        </label>
    
        <input type="submit" class="submit" value="Sign Up Now">
      </div>
    </div>
</form>
  </div>
<script type="text/javascript" src="loginscript.js">
  

</script>
</body>
</html>
