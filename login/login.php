<?php
	 require('../config.php'); 
	 session_start();
   
	$errors = array();
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){


	if(preg_match("/\S+/", $_POST['name']) === 0){
		$errors['name'] = "* Name is required.";
	}
	if(preg_match("/.+@.+\..+/", $_POST['email']) === 0){
		$errors['email'] = "* Not a valid e-mail address.";
  }
  if(preg_match("/\S+/", $_POST['u_name']) === 0){
    $errors['u_name'] = "* User Name is required.";
  }
	if(preg_match("/.{5,}/", $_POST['p_word']) === 0){
		$errors['p_word'] = "* Password Must Contain at least 5 Characters.";
  }
	if(strcmp($_POST['p_word'], $_POST['rep_word'])){
		$errors['rep_word'] = "* Password do not much.";
	}
	
	if(count($errors) === 0){
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$u_name = mysqli_real_escape_string($db, $_POST['u_name']);
    	$p_word = mysqli_real_escape_string($db, $_POST['p_word']);
    	$mob_no = mysqli_real_escape_string($db, $_POST['mob_no']);

		$search_query = mysqli_query($db, "SELECT * FROM user_details WHERE email = '$email'");
		$num_row = mysqli_num_rows($search_query);
		if($num_row >= 1){
			$errors['email'] = "Email address is unavailable.";
		}else{

			$sql = "INSERT INTO user_details(`name`, `email`, `u_name`,`p_word`, `mob_no`) VALUES ('$name', '$email', '$u_name', '$p_word', '$mob_no')";
			$query = mysqli_query($db, $sql);
			$_POST['name'] = '';
			$_POST['email'] = '';
     		 $_POST['u_name'] = '';
      		$_POST['p_word'] = '';
			$_POST['mob_no'] = '';
			
		}
	}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style1.css" media="all" type="text/css">
	<link rel="stylesheet" href="main.css" media="all" type="text/css">
	<title>register page</title>
</head>
<body>
	


	<div class="logo">
		<img src="../bookstore.jpg" alt="bookstore" width="100%" height="200px">
	</div>
<form method="post" action="login_process.php">
	<html>
	<head>
		<link rel="stylesheet" href="login_style.css">
	</head>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="Enter Email" name="login_email">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="Enter Password" name="login_password">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<a class="btn btn-primary btn-large btn-block" href="login_process.php">Login >></a>
			</div>
		</div>
	</div>
	</html>
</form>


	<div  class="form">
            <form  method="post" action="login.php"> 
                <p class="contact"><label for="name">Name</label></p> 
                <input  name="name" placeholder="First name and Last name" required="" tabindex="1" type="text"> 
                 
                <p class="contact"><label for="email">Email</label></p> 
                <input  name="email" placeholder="example@domain.com" required="" type="email"> 
                
                <p class="contact"><label for="username">Create a username</label></p> 
                <input  name="u_name" placeholder="username" required="" tabindex="2" type="text"> 
                 
                <p class="contact"><label for="password">Create a password</label></p> 
                <input type="password" name="p_word" required=""> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
                <input type="password" name="rep_word" required=""> 
            
                <p class="contact"><label for="phone">Mobile phone</label></p> 
                <input name="mob_no" placeholder="phone number" required="" type="text"> <br>
                <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me Up!" type="submit">      
           </form> 
      </div></br>
	<div class="footer"><p>Book_Store | 2017 </p></div>
</body>
</html>