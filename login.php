<?php
	//Start session
	session_start();
	//Include database connection details
	require_once('/connection.php');
	//Array to store validation errors
	$errmsg_arr = array();
	//Validation error flag
	$errflag = false;
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	//Sanitize the POST values
	$username = $_POST[regno];
	$password = $_POST[pass];
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	//If there are input validations, redirecting back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	//Create query
	$qry="SELECT * FROM r_users WHERE R_no='$username' AND token='$password'";
	$result=mysqli_query($con,$qry);
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['RegNo'];
			$_SESSION['SESS_FIRST_NAME'] = $member['Name'];
			$_SESSION['SESS_LAST_NAME'] = $member['Password'];
			session_write_close();
			header("location: main.html");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'Sorry ! We can not find you in our database !';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>