<?php
	require 'db.php';
	session_start();

	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));

	$authorizationing = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
	$result = $connection->query($authorizationing);

	if($result->num_rows == 1){
		$row = $result->fetch_assoc();
		$_SESSION['user_id'] = $row["user_id"];
		$_SESSION['username']= $row["username"];
		$_SESSION['email'] = $row["email"];
		//echo "SUCCES";
		//echo $_SESSION['user_id'] . "<br>" . $_SESSION['first_name'] . "<br>" . $_SESSION['last_name'];
	} 
	else{
		printf("Сообщение ошибки: %s\n", $connection->error);
	}
	$previousPage = '../profile.php';
	header('Location: '.$previousPage);
	exit;
?>

