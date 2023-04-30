<?php include('server.php'); ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Mars</title>
 
     <style>
		body{
			 background: linear-gradient(to bottom, #A9A9A9,#FF8033);
			 background-size:500px 1000px;
			 
			 
		}
         .container{
             justify-content: center;
             text-align: center;
             align-items: center;
			 position:relative;
			 bottom:-200px;

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
     <font face="Algerian"><h1> Mars</h1></font>
		<h2><a href="loggedInPage.php">Home Page</a></h2>
     <form action="" method="POST">
	<div class="error"> <?php echo $error2 ?> </div>
    <input type="email" name="email" placeholder="Email"> <br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <label for="checkbox">Keep me logged in</label>
    <input type="checkbox" name="stayLoggedIn"  value="1"> <br><br>
    <input type="submit" name="logIn" value="Log In"><br><br>
    <p>Not a register user <a href="index.php"> Create Account</a></p>
     </form>
    </div>

 
 </script>
  
 </body>
 </html>