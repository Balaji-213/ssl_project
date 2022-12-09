<?php
 session_start();
if (isset($_SERVER["HTTP_REFERER"]) and strpos($_SERVER["HTTP_REFERER"], "signin.php")) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "book_db";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}


	$sql = 'SELECT *FROM credentials WHERE username = "' . $_POST["username"] . '" AND password="'. $_POST["password"].'"';
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {

	  while($row = $result->fetch_assoc()) {
		  if (($row["password"] === $_POST["password"]) and ($row["username"] === $_POST["username"])){

                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
				$_SESSION['phone'] = $row['phone'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['address'] = $row['address'];


				$_SESSION["login"]="false";
                header("location: home2.php");
                exit();
		  }
	  }
	} else{
		$error='eeeee';
		$_SESSION["error"] = $error;
		header("location: signin.php");
		

	}

	}

	$conn->close();

?>
 


