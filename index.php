<!-- PHP command to link server.php file with registration form  -->
<?php include('server.php'); ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration</title>
 
     <!-- CSS Code -->
     <style>
         .container{
             justify-content: center;
             text-align: center;
             align-items: center;
         }
         input{
             padding: 5px;
         }
         .error{
             background-color: pink;
             color: red;
             width: 300px;
             margin: 0 auto;
         }
     </style>
 </head>
 
 <body>
 <div class="container">
     <h1>User Registration System</h1>
     <h2><a href="loggedInPage.php">Home Page</a></h2>
     
      
     <div class="form" id="signUp">
     <form action="" method="POST">
        <div class="error"> <?php echo $error ?> </div>
       <input type="text" name="name" placeholder="User Name"> <br> <br>
       <input type="email" name="email" placeholder="Email"> <br><br>
       <input type="password" name="password" placeholder="Password"><br><br>
       <input type="password" name="repeatPassword" placeholder="Repeat Password"><br><br>
       <label for="checkbox">Stay logged in</label>
       <input type="checkbox" name="stayLoggedIn" id="chechbox" value="1"> <br><br>
       <input type="submit" name="signUp" value="Sign Up"><br><br>
       <p >Have an account already? <a href="logIn.php">Log In</a></p>
      </form>
     </div>
  
 </body>
 </html>