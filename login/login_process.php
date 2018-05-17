<?php
	
	session_start();

	$email = $_POST['login_email'];
	$password = $_POST['login_password'];

	require('../config.php');
	
	$email = mysqli_real_escape_string($db, $email);
	$sql = "SELECT p_word, u_name FROM user_details WHERE email = '$email';";
	$query = mysqli_query($db, $sql);
	if(mysqli_num_rows($query) != 1){
		$message = "Login Failed !";
		header("location: index1.php?message=". $message);
	}

	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	
	if($password !== $row['p_word']){
    	$message = "Login Failed !";
		header("location: members.php?message=". $message);
	}elseif($row['u_name']=="Admin" && $row['p_word']=="Admin123"){
		session_regenerate_id ();
		$_SESSION['user']=$row['u_name'];
		header("location: ../addform.php");
		}else{

					$_SESSION=array();
					$_SESSION['user']=$row['u_name'];
					$_SESSION['status']=true;
					header("location: ../loggedin.php");
		}
	
?>