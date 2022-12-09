<?php
session_start();

if($_SESSION["login"]=="true"){
    header("location:home.php");

}
if($_SESSION["trans"]=="true"){
    header("location:home2.php");

}

?>
<!DOCTYPE html>
<html>

<head>

    <title>Transaction</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php


$otp = rand(1000,9999);
$_SESSION['otp'] = $otp;
echo "<script>
function myFunction() {
  alert('OTP IS $otp');}
</script>";
?>

    <section class="header">
        <a class="logo">Payment</a>
        <nav class="navbar">

            <a href="book.php">Back to booking!</a>

        </nav>
    </section>

    <?php
if(isset($_SESSION["tq"])){


echo '

<div class="container">

<div class="popup" id="popup">
<P id="demo"></P> 
<img src="images/tick.jpg">
<h2>Thank You!</h2>
<p>Your details has been successfully submitted.<br> You can get booking details in your profile.</p>
<form action="home2.php">
<button type="submit" onclick="closePopup()" class="btn">OK</button>
</form>
</div>
</div> 
<script>
let popup = document.getElementById("popup");

function openPopup() {
popup.classList.add("open-popup");
}

function closePopup() {
popup.classList.remove("open-popup");
}
document.getElementById("demo").innerHTML = openPopup();
</script>';
}

?>





    <section class="booking">

        <form method="post" class="book-form">
            <?php
               if($_SESSION["tq"]==NULL){
                    if(isset($_SESSION["cost"])){
                        $cost = $_SESSION["cost"];
                        echo "<h1 class='heading-title'>Total Cost : Rs.$cost </h1>";
               
                    }
                  }
                ?>

            <div class="flex">

                <div class="inputBox">
                    <?php 
if($_SESSION["tq"]==NULL){
 echo "<span> Customer's Name :</span>";
  
     if(isset($_SESSION["name2"])){
         $name = $_SESSION["name2"];
         echo "<input type='text' value='$name' readonly > ";
             
        }
      }
      
   ?>

                </div>

            </div>
            <?php
               if($_SESSION["tq"]==NULL){
                    if(isset($_SESSION["error"])){
 
                       echo'<script> alert("Invalid OTP");</script>';
                      
                    }
               }
                ?>



            <div class="flex">

                <div class="inputBox">
                    <?php
if($_SESSION["tq"]==NULL){
echo '<br>
  <span> Card Holders Name :</span>
  <input type="text" placeholder="enter Card Holder Name" name="chname" required >';
}
?>
                </div>


                <div class="inputBox">
                    <?php
if($_SESSION["tq"]==NULL){
echo '<br>
  <span> Card Number :</span>
  <input type="number" placeholder="enter Card Number" name="cn" required>';
}
?>
                </div>

                <div class="inputBox">
                    <?php
if($_SESSION["tq"]==NULL){  
echo '  <span> Expiry Date :</span>
  <input type="date" placeholder="enter Expiry Date" name="edate" required>';
}
?>
                </div>

            </div>

            <?php
if($_SESSION["tq"]==NULL){
echo '<button type ="button" onclick="myFunction()" class="btn" required> GET OTP</button >';
}
?>

            <div class="flex">
                <div class="inputBox">
                    <?php
if($_SESSION["tq"]==NULL){   
echo ' <br>
  <span> OTP :</span>
  <input type="number" placeholder="enter OTP" name="otp1" required>';
}
?>
                </div>

            </div>
            <?php
if($_SESSION["tq"]==NULL){
 echo '<button type="submit" formaction="transaction2.php" value="submit" class="btn" name="send">Make Payment</button >';
 
}
$_SESSION["tq"]=NULL;
?>
        </form>
    </section>


    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> -> +123-456-7890 </a>
                <a href="#"> -> +111-222-3333 </a>
                <a href="#"> -> example@gmail.com </a>
                <a href="#"> -> Dharwad,India 580011 </a>
            </div>


        </div>

        <div class="credit"> created by <span>Team Alpha</span></div>
    </section>





</body>

</html>