<?php
  //session_start();
  
  //connecton to database
  $db = mysqli_connect("localhost","root","","admin_db");
  
  if (isset($_POST['signup'])){
	  session_start();
	  $username = mysql_real_escape_string($_POST['username']);
	  $email = mysql_real_escape_string($_POST['email']);
	  $password = mysql_real_escape_string($_POST['password']);
	  $password2 = mysql_real_escape_string($_POST['password2']);
	  
	  if($password == $password2) {
		  //create user_error
	  $password = md5($password);
	  $sql = "INSERT INTO signup(username,email,password) VALUES('$username','$email','$password')";
	  mysqli_query($db, $sql);
       $_SESSION['message'] = "you are now logged in";
	   $_SESSION['username'] = $username;
	   header("location: homepage.php");
	  }else{
		  $_SESSION['message'] = "The two passwords do not match";
		 
	  }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
<h1>Signup</h1>
<form method="post" action="signup.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"></td>
		</tr>
		<tr>
			<td>Password again:</td>
			<td><input type="password" name="password2" class="textInput"></td>
		</tr>
		<tr>
			<td></td>
			</div> <br><td>
			<input type="Submit" name="signup" value="submit">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="update.php">update</a>
			
			</td>
</tr>
		</table>
</form>
</body>
</html>