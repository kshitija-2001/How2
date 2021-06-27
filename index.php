<!DOCTYPE html>
<html>

<head>
  <title>How2</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>

<body>

  <div class="cont">
    <div class="form sign-in">
      <h2>Log In</h2>
      <form method="POST" action="Login_back.php">
        <label>
          <span>Email Address</span>
          <input type="email" name="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password">
        </label>
        <button class="submit" type="submit" name="login">Sign In</button>
      </form>
      <!-- <p class="forgot-pass">Forgot Password ?</p> -->

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <form method="POST" action="Signup_back.php">
          <h2>Sign Up</h2>
          <label>
            <span>Name</span>
            <input type="text" class="form-control" name="name">
          </label>
          <label>
            <span>Email</span>
            <input type="email class=" form-control" name="email">
          </label>
          <label>
            <span>Password</span>
            <input type="password" class="form-control" name="password">
          </label>
          <!-- <label>
          <span>Confirm Password</span>
          <input type="password">
        </label> -->
          <button type="submit" class="submit" name="signup">Sign Up Now</button>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>