<?php
	include_once 'db.php';

	$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
   $originalDate = $_POST['birthdate'];
$date = date("Y-m-d", strtotime($originalDate));
    $city = filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);
    $phone_number = filter_var(trim($_POST['phone_number']), FILTER_SANITIZE_STRING);
    $status = filter_var(trim($_POST['status']));
    $university= filter_var(trim($_POST['university']), FILTER_SANITIZE_STRING);
    $password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));
	$confirm_password = md5(filter_var(trim($_POST['confirm_password']), FILTER_SANITIZE_STRING));
	if ($confirm_password!=$password){ 
		echo '<script language="javascript">';
echo 'alert("Something is wrong, please try again")';
echo '</script>';
exit;
}
	
	$registring = "INSERT INTO customer (username,birthday,email,phone,status,university,city,password)
	VALUES ('$username', '$date','$email','$phone_number','$status', '$university', '$city', '$password')";
	
	if($connection->query($registring)){
		$authorizationing = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
		$result = $connection->query($authorizationing);
		if($result->num_rows == 1){
			$row = $result->fetch_assoc();
			$_SESSION['user_id'] = $row["user_id"];
		$_SESSION['username'] = $row["username"];
		$_SESSION['email'] = $row["lastName"];
		} 
	}
	
	$previousPage = './login.php';
	header('Location: '.$previousPage);
	exit;
	
	$connect->close();

?>