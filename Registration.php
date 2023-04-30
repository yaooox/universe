<!-- PHP command to link server.php file with registration form  -->
<?php include('server.php'); ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration</title>
     <link rel="stylesheet" href="Registration.css">

 </head>
 
 <body>
 <div class="container">

     <div class="login-box" id="signUp">
     <h2>Registration System</h2>
     <form action="" method="POST">
        <div class="error"> <?php echo $error ?> </div>
        <div class="user-box">
            <input type="text" name="name" placeholder="User Name" required=""> <br> <br>
            <label>User Name</label>
        </div>

        <div class="user-box">
            <input type="email" name="email" placeholder="Email" required=""> <br><br>
            <label>Email</label>
        </div>

        <div class="user-box">
        <input type="password" name="password" placeholder="Password" required=""><br><br>
        <label>Password</label>
        </div> 

        <div class="user-box">
        <input type="password" name="repeatPassword" placeholder="Repeat Password" required=""><br><br>
        <label>Repeat Password</label>
        </div> 

       <input type="submit" name="signUp" value="Sign Up"><br><br>
      </form>
     </div>
  
 </body>
 </html>