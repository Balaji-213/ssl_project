<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $request = " insert into credentials(name, phone, email, address, username, password) values('$name','$phone','$email','$address','$username','$password') ";
      mysqli_query($connection, $request);

      header('location:signin.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>