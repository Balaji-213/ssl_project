<!DOCTYPE html>
<html>
<head>

   <title>signin</title> 
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   

<section class="header">
   <a href="home.php" class="logo">Online tours and travels</a>

   <nav class="navbar">
      <a href="home.php">home</a>

      <a href="package.php">package</a>
    
   </nav>

</section>


<?php
session_start();

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS book_db";
if ($conn->multi_query($sql) !== TRUE) {
  echo "Error creating database: " . $conn->error;
}

$conn->close();

$dbname = "book_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS credentials (
username VARCHAR(30) PRIMARY KEY COLLATE latin1_bin,
password VARCHAR(30) NOT NULL COLLATE latin1_bin,
name VARCHAR(30),
phone VARCHAR(30),
email VARCHAR(30),
address VARCHAR(30)
);";

if ($conn->multi_query($sql) !== TRUE) {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS book_form (
id int(30) PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(30) COLLATE latin1_bin,
name VARCHAR(30),
email VARCHAR(30),
phone VARCHAR(30),
address VARCHAR(30),
location VARCHAR(30),
guests INT(30),
arrivals DATE,
leaving DATE,
ptype VARCHAR(30)
);";

if ($conn->multi_query($sql) !== TRUE) {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>


<section class="sign">

   <h1 class="heading-title">Signin here!!</h1>

   <form action="signin2.php" method="post" class="sign-form">

      <div class="flex">

         <div class="inputBox" >
            <div>
            <?php
                    if(isset($_SESSION["error"])){

                       echo'<script> alert("Invalid username or password");</script>';
                        session_destroy();
                    }
                ?> 
               </div>
            <span>username :</span>
            <input type="text" placeholder="enter your username" name="username" required>
         </div>
         <div class="inputBox">
  
            <span> password :</span>
            <input type="password" placeholder="enter your password" name="password" required>
         </div>
      </div>

      <input type="submit" formaction="signin2.php" value="Sign In" class="btn">


      </form>
      <?php echo "<br>" ?>

      <h1 class="heading-titlee">Don't have account <a href="signup.php"> sign up.</a></h1>
      <?php echo "<br>" ?>

      <h1 class="heading-titlee">If you are Admin <a href="adminlogin.php">Click Here.</a></h1>
      </section> 


<section class="footer">

   <div class="box-container">


      <div class="box">
         <h3>contact info</h3>
         <a href="#"> -> +123-456-7890 </a>
         <a href="#"> -> +111-222-3333 </a>
         <a href="#"> -> example@gmail.com  </a>
         <a href="#"> -> Dharwad,India 580011 </a>
      </div>

   </div>

   <div class="credit"> created by <span>Team Alpha</span></div>
</section>

</body>
</html>