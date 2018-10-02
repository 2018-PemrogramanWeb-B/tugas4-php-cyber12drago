<?php

include 'login.php';
if(isset($_SESSION['login'])) {
    header("location: time.php");
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Login Form</title>
	<link rel="stylesheet" href="style.css" >
</head>

<body>

	
  	<div id="login" class="container">
    	<h1>Login</h1>
    	<hr>
      <form action="login.php" style="border:1px solid #ccc" method="POST" class="form">
    	<div>
        	<label><b>Username:</b></label>
        	<input type="text" name="username" placeholder ="Insert Your Name" class="length-200" />
    	</div>
    	<div>
        	<label><b>Password:</b></label>
        	<input type="password" name="pass" placeholder="Enter Password" name="password">
     	</div>
    	<div class="clearfix">
      		<button type="submit">Submit</button>
    	</div>
        
        </form>
  	</div>
	
<body>