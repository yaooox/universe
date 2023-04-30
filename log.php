<?php include('server.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars</title>
    <link rel="stylesheet" href="log.css">

</head>
<body>
<form action="" method="POST">
  <div class="error"> <?php echo $error2 ?> </div>
    <div class="login-box">
        <h2>Login</h2>
        <form>
          <div class="user-box">
            <input type="email" name="email" placeholder="Email" required=""><br><br>
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="" placeholder="Password" required=""><br><br>
            <label>Password</label>
          </div>
          <input type="submit" name="logIn" value="Log In" ><br><br>
</form>
      </div>

</body>
</html>