<?php
session_start();

if($_SESSION["login"]=="true"){
    header("location:home.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>book</title>
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <?php
   $_SESSION["tq"]=NULL;
   ?>
   
<!-- header section starts  -->

<section class="header">

   <a href="home2.php" class="logo">online tours and travels</a>

   <nav class="navbar">
      <a href="home2.php">home</a>
    <!--  <a href="about.php">about</a> -->
      <a href="package2.php">package</a>
    <!--   <a href="book.php">book</a> -->
    <a href="pofile.php">profile</a>
      <a href="home.php">logout</a>
   </nav>

</section>
<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>
<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" action="transaction2.php" method="post" class="book-form">
   <div class="flex">         
<div class="inputBox">
  
  <span> Name :</span>
  <?php
     if(isset($_SESSION["name"])){
         $name = $_SESSION["name"];
         echo "<input type='text' value='$name' name='name' required> ";
               
        }
   ?>                   
</div>
<div class="inputBox">
  
  <span> email :</span>
  <?php
     if(isset($_SESSION["email"])){
         $email = $_SESSION["email"];
         echo "<input type='text' value='$email' name='email' required> ";
               
        }
   ?>                   
</div>
<div class="inputBox">
  
  <span> phone :</span>
  <?php
     if(isset($_SESSION["phone"])){
         $phone = $_SESSION["phone"];
         echo "<input type='text' value='$phone' name='phone' required> ";
               
        }
   ?>                   
</div>
<div class="inputBox">
  
  <span> address :</span>
  <?php
     if(isset($_SESSION["address"])){
         $address = $_SESSION["address"];
         echo "<input type='text' value='$address' name='address' required> ";
               
        }
   ?>                   
</div>
         <div class="selectBox">
            <span>where to :</span>
            <?php echo "<br>" ?>
            <select name="location" required>
            <option value="" disabled selected hidden>Select City</option>
            <option value ="city 1">city 1</option>
            <option value ="city 2">city 2</option>
            <option value ="city 3">city 3</option>
            <option value ="city 4">city 4</option>
            <option value ="city 5">city 5</option>
            <option value ="city 6">city 6</option>
            <option value ="city 7">city 7</option>
            <option value ="city 8">city 8</option>
            <option value ="city 9">city 9</option>
            <option value ="city 10">city 10</option>
            <option value ="city 11">city 11</option>
            <option value ="city 12">city 12</option>

         </select>
         </div>
         <div class="inputBox">
            <span>No of guests :</span>
            <input type="number" placeholder="number of guests" name="guests" required>
         </div>

         <div class="inputBox">
            <span>from :</span>
            <input type="date" name="arrivals" min="2022-10-30" required>
         </div>
         <div class="inputBox">
            <span>to :</span>
            <input type="date" name="leaving" min="2022-10-30" required>
         </div>
         <div class="selectBox" >
            <span>package type :</span>
            <?php echo "<br>" ?>
            <select name="ptype" required> 
            <option value="" disabled selected hidden>Select Package Type</option>
               <option value ="economic">Economic</option>
               <option value ="semi-deluxe">Semi deluxe</option>
               <option value ="deluxe">Deluxe</option>
            </select>
         </div>

      </div>


      <input type="submit" value="submit" class="btn" name="send">

   </form>

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