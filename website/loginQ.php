<?php
	//starting the session
	session_start();
	//including the database connection
	require_once 'conn.php';
 
	if(ISSET($_POST['login'])){
		// Setting variables
		$username = $_POST['userName'];
		$password = $_POST['password'];
 
		// Select Query for counting the row that has the same value of the given username and password. This query is for checking if the access is valid or not.
		$query = "SELECT COUNT(*) as count FROM `Customer` WHERE `Cust_name` = :userName;
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':userName', $username);
		$stmt->execute();
		$row = $stmt->fetch();
 
		$count = $row['count'];
		if($count > 0){
			header('location:index.php');
		}else{
			$_SESSION['error'] = "Invalid username or password";
			header('location:login.php');
		}
	}
?>