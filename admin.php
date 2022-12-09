<?php
session_start();

if($_SESSION["login"]=="true"){
    header("location:home.php");

}

?>
<!DOCTYPE html>

<html>
<head>

   <title>Admin</title> 
   <link rel="stylesheet" href="css/style.css">
</head>

 <body> 

 <section class="header">
   <a class="logo">Online tours and travels</a>

   <nav class="navbar">

      <a href="home.php">Logout</a>
    
   </nav>

</section>



 <section  >


         <h1 class="heading-title">WELCOME ADMIN!!</h1>
         </div>

 </section>

 <section class="sign">




 <h2> click here for Booking Data</h2>
      <form action="bookingdata.php" method="POST">
        <input type="submit" value="Check Now" class="btn"/>
      </form>
      <br>
    

      <h2> click here for Credentials Data</h2>
      <form action="credentials.php" method="POST">
        <input type="submit" value="Check Now" class="btn"/>
      </form>
      <br>

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