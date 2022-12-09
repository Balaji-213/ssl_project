<?php
session_start();

if($_SESSION["login"]=="true"){
    header("location:home.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>package</title>

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

<div class="heading" style="background:url(images/header-bg-2.jpg) no-repeat">
   <h1>packages</h1>
</div>


<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-101.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-202.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-303.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-404.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-505.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 5</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-606.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 6</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-707.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 7</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-808.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 8</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-909.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 9</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-1010.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 10</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-1111.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 11</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-1212.jpg" alt="">
         </div>
         <div class="content">
            <h3>city 12</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>


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