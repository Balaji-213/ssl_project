<!DOCTYPE html>

<html>
<head>

   <title>Admin</title> 
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   

<section class="header">
   <a href="home.php" class="logo">Online tours and travels</a>

   <nav class="navbar">
      <a href="home.php">home</a>

      <a href="package.php">package</a>
      <a href="signin.php">login/signup</a>
    
   </nav>

</section>

<?php
session_start();

?>

<section class="sign">

   <h1 class="heading-title">Admin Login!!</h1>

   <form action="adminlogin2.php" method="post" class="sign-form">

      <div class="flex">

         <div class="inputBox" >
            <div>
            <?php
                    if(isset($_SESSION["error"])){
                        //  $error = $_SESSION["error"];
                        //  echo "<div>$error</div>";
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

      <input type="submit" formaction="adminlogin2.php" value="Sign In" class="btn">


      </form>
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

   <div class="credit"> created by <span>Team Alpha</span> </div>
</section>


</body>
</html>