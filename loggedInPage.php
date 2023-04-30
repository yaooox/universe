<?php 
	session_start();
	if(array_key_exists('id', $_COOKIE)){
		$_SESSION['id'] = $_COOKIE['id']; 
	  echo "<h3>Welcome Dear,".$_SESSION['name']."</h3>";  
	}

	if (array_key_exists('id', $_COOKIE) OR array_key_exists('id', $_SESSION)){
	  echo "<h2> Congratulations You are a registed User: <a href = index.php?logout=1>
	  Log out </a></h2>";
	}else{
		header("Location: index.php");	
	}
?>

<html>
	<h3><a href="index.php">Go Back</a></h3>
</html>