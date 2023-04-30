<?php 
session_start();
//------ PHP code for User registration form---
if(isset($_GET['logout'])){
	unset($_SESSION['id']);
	setcookie('id',"",time() - 60*60);
	$_COOKIE = "";
}

	$error = "";
if (array_key_exists("signUp", $_POST)) {
    include('linkDB.php');  
    //Taking HTML Form Data from User
    $name = mysqli_real_escape_string($linkDB, $_POST['name']);
    $email = mysqli_real_escape_string($linkDB, $_POST['email']);
    $password = mysqli_real_escape_string($linkDB,  $_POST['password']); 
    $repeatPassword = mysqli_real_escape_string($linkDB,  $_POST['repeatPassword']); 
     
    // PHP form validation PHP code
    if (!$name) {
      $error .= "Name is required <br>";
     }
    if (!$email) {
        $error .= "Email is required <br>";
     }
    if (!$password) {
        $error .= "Password is required <br>";
     } 
     if ($password !== $repeatPassword) {
        $error .= "Password does not match <br>";
     }
     if ($error) {
        $error = "<b>There were error(s) in your form!</b> <br>".$error;
     }  else {
        //Check if email is already exist in the Database
        $query = "SELECT id FROM users WHERE email = '$email'";
        $result = mysqli_query($linkDB, $query);
        if (mysqli_num_rows($result) > 0) {
            $error .="Your email was already exists!<br>";
        } else {
            //Password encryption or Password Hashing
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 
            $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
            $result = mysqli_query($linkDB, $query); 
            if (!$result){
                $error ="You are not logged in - Try again Later";
               } else {
                $_SESSION['id'] = mysqli_insert_id($linkDB);  
                $_SESSION['name'] = $name;
                if ($_POST['stayLoggedIn'] == '1') {
					setcookie('id', mysqli_insert_id($linkDB), time() + 60*60*365);
                //echo "<p>The cookie id is :". $_COOKIE['id']."</P>";
                }
                  
                //Redirecting user to home page after successfully logged in 
                header("Location:Home.html");  
             
                }
             
            }
 
        }  
    }
 
      //-------User Login PHP Code ------------
$error2 = ""; 
if (array_key_exists("logIn", $_POST)) {
     
    // Database Link
    include('linkDB.php'); 
 
      //Taking form Data From User
      $email = mysqli_real_escape_string($linkDB, $_POST['email']);
      $password = mysqli_real_escape_string($linkDB,  $_POST['password']); 
       
      //Check if input Field are empty
      if (!$email) {
          $error2 .= "Email is required <br>";
       }
      if (!$password) {
          $error2 .= "Password is required <br>";
       } 
      if ($error2) {
          $error2 = "<b>There were error(s) in your form!</b><br>".$error2;
       }
        
      else {        
          //matching email and password
            $query = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($linkDB, $query);
            $row = mysqli_fetch_array($result);

            if(isset($row)) {
                if(password_verify($password, $row['password'])) {
                    $_SESSION['id'] = mysqli_insert_id($linkDB);  
                    $_SESSION['name'] = $name;
					if ($_POST['stayLoggedIn'] == '1') {
						setcookie('id', mysql_insert_id($linkDB), time() + 60*60*365); //Logged in permanently
                    }
 
                    header("Location: Home.html");
 
                } else {
                    $error2 = "Combination of email/password does not match!";
                     }
   
            }  
			else 
			{
                $error2 = "Combination of email/password does not match!";
            }
        }
}
?>