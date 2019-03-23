<?php 


if(isset($_GET["name"]) && ($_GET["name"]!="")){
$name=$_GET["name"];
if (!preg_match("/^[a-zA-Z ]{2,}$/", $name)){
	$nameErr = "It shouldnt contain any number and there should be at least 2 chars";
}
}
else{
	$nameErr = "This is the required field";
}

if(isset($_GET["email"])&& ($_GET["email"]!="")){
$email = $_GET["email"];
if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $email)){
	$emailErr = "This is not an email format";
}
}
else{
	$emailErr = "This is the required field";
}

if(isset($_GET["username"])&& ($_GET["username"]!="")){
$username = $_GET["username"];
if (!preg_match("/\w{5,}/", $username)){
	$usernameErr = "It should contain at least 5 characters";
}
}
else{
	$usernameErr = "This is the required field";
}

if(isset($_GET["password"])&& ($_GET["password"]!="")){
$password = $_GET["password"];
if (!preg_match("/\w{8,}/", $password)){
	$passwordErr = "It should contain at least 8 characters";
}
}
else{
	$passwordErr = "This is the required field";
}

if(isset($_GET["confirm_password"])&& ($_GET["confirm_password"]!="")){
$confirm_password = $_GET["confirm_password"];
if (!($password==$confirm_password)){
	$confirm_passwordErr = "It should match the given password";
}
}
else{
	$confirm_passwordErr = "This is the required field";
}

if(isset($_GET["birthday"])&& ($_GET["birthday"]!="")){
$birthday = $_GET["birthday"];
if (!preg_match("/^[0-3][0-9]\.[0-1][0-9]\.\d{4}$/", $birthday)){
	$birthdayErr = "It should be written in format dd.MM.yyyy";
}
}
else{
	$birthdayErr = "This is the required field";
}

if(isset($_GET["gender"])&& ($_GET["gender"]!="")){
$gender = $_GET["gender"];
if (!preg_match("/^(?:male|female)$/", $gender)){
	$genderErr = "It should be male or female";
}
}
else{
	$genderErr = "This is the required field";
}

if(isset($_GET["postal"])&& ($_GET["postal"]!="")){
$postal = $_GET["postal"];
if (!preg_match("/^\d{6}$/", $postal)){
	$postalErr = "It should follow a six digit format";
}
}
else{
	$postalErr = "This is the required field";
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form action="" method="GET">
			
			<b> Name </b><br>
			<input type="text" name="name">
			<br>
			<?php 
			if(isset($nameErr)){
			echo ($nameErr);} 
			?>
			<br><br>

			<b> Email </b><br>
			<input type="text" name="email">
			<br>
			<?php 
			if(isset($emailErr)){
			echo ($emailErr);} 
			?>
			<br><br>
			<b> Username </b><br>
			<input type="text" name="username">
			<br>
			<?php 
			if(isset($usernameErr)){
			echo ($usernameErr);} 
			?>
			<br><br>
			<b> Password </b><br>
			<input type="text" name="password">
			<br>
			<?php 
			if(isset($passwordErr)){
			echo ($passwordErr);} 
			?>
			<br><br>
			<b> Confirm password </b><br>
			<input type="text" name="confirm_password">
			<br>
			<?php 
			if(isset($confirm_passwordErr)){
			echo ($confirm_passwordErr);} 
			?>
			<br><br>
			<b> Birthday </b><br>
			<input type="text" name="birthday">
			<br>
			<?php 
			if(isset($birthdayErr)){
			echo ($birthdayErr);} 
			?>
			<br><br>
			<b> Gender </b><br>
			<input type="text" name="gender">
			<br>
			<?php 
			if(isset($genderErr)){
			echo ($genderErr);} 
			?>
			<br><br>
			<b> Postal code </b><br>
			<input type="text" name="postal">
			<br>
			<?php 
			if(isset($postalErr)){
			echo ($postalErr);} 
			?>
			<br><br>
			<b> Monthly Salary </b><br>
			<input type="text" name="salary">
			<br>
			<?php 
			if(isset($emailErr)){
			echo ($emailErr);} 
			?>
			<br><br>
			<b> Websute url </b><br>
			<input type="text" name="url">
			<br>
			<?php 
			if(isset($emailErr)){
			echo ($emailErr);} 
			?>
			<br><br>
			<b> Overall GPA </b><br>
			<input type="text" name="gpa">
			<br>
			<?php 
			if(isset($emailErr)){
			echo ($emailErr);} 
			?>
			<br><br>
			<input type="submit" value="submit">
		</form>
	</body>
</html>