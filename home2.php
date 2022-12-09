<?php
session_start();

if($_SESSION["login"]=="true"){
    header("location:home.php");

}
$_SESSION["trans"]="true";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>home</title>
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="header">

   <a href="home2.php" class="logo">online tours and travels</a>

   <nav class="navbar">
      <a href="home2.php">home</a>
      <a href="package2.php">package</a>
    <a href="profile.php">profile</a>
      <a href="home.php">logout</a>
   </nav>



</section>

<section class="home">

         <div class="heading" style="background:url(images/home-slide-1.jpg) no-repeat">
         <?php
                    if(isset($_SESSION["name"])){
                        $name = $_SESSION["name"];
                        echo "<h1> Welcome $name <br> Explore the world</h1>";
               
                    }
                ?> 
               
         </div>
</section>

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>hiking</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>hotel</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>camping</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>bookings</h3>
      </div>

   </div>

</section>

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>We are Tours and Travels agency. We've been helping people with planning their trips with hotels bookings, accomodation and Tour guides since 2022. We are proud hub-spot on using best tools to help our customers. Our team is made up of smart and talented people that are passionate about creating inbound trust! We are an employee-owned company with a passion for providing exemplary customer service, leveraging our expertise and technology to deliver innovative travel solutions in a glorifying work environment.</p>

 </div>

</section>

<section class="home-packages">


   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-101.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 1</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-202.jpg" alt="">
         </div>
         <div class="content">
            <h3>City 2</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-303.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 3</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package2.php" class="btn">load more</a> </div>

</section>

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> -> +123-456-7890 </a>
         <a href="#"> -> +111-222-3333 </a>
         <a href="#"> -> example@gmail.com </a>
         <a href="#"> -> Dharwad, India - 580011 </a>
      </div>

   </div>

   <div class="credit"> created by <span>Team Alpha</span>

</section>


</body>
</html>