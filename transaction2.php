

<?php
session_start();


if(isset($_SESSION['otp'] ) ){
    $otp= $_SESSION['otp'];
    $otp1 = $_POST['otp1'];

    // echo "$otp";
    // echo "$otp1";

    if( $otp1 == $otp){
        $tq="tq";
        $_SESSION["tq"]=$tq;


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "book_db";


   $connection = mysqli_connect('localhost','root','','book_db');

      //echo "$username";
      $username=$_SESSION['username'];
      $name = $_SESSION['name'];
      $email = $_SESSION['email'];
      $phone = $_SESSION['phone'];
      $address = $_SESSION['address'];
      $location = $_SESSION['location'];
      $guests = $_SESSION['guests'];
      $arrivals = $_SESSION['arrivals'];
      $leaving = $_SESSION['leaving'];
      $ptype = $_SESSION['ptype'];

      $request = " insert into book_form(username, name, email, phone, address, location, guests, arrivals, leaving, ptype) values('$username','$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$ptype') ";
      mysqli_query($connection, $request);

      header("location: transaction.php");
}
else{
    $error='eeeee';
    $_SESSION["error"] = $error;
    header("location: transaction.php");
}
}    

?>

