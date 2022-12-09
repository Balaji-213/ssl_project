<?php
session_start();

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "book_db";


   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $username=$_SESSION['username'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $ptype = $_POST['ptype'];

      $_SESSION['name']=$_POST['name'];
      $_SESSION['email']=$_POST['email'];
      $_SESSION['phone']=$_POST['phone'];
      $_SESSION['address']=$_POST['address'];
      $_SESSION['location']=$_POST['location'];
      $_SESSION['guests']=$_POST['guests'];
      $_SESSION['arrivals']=$_POST['arrivals'];
      $_SESSION['leaving']=$_POST['leaving'];
      $_SESSION['ptype']=$_POST['ptype'];

      //echo "$username";

      $int =(int) filter_var($location , FILTER_SANITIZE_NUMBER_INT);

      if($ptype=="economic")
      {
         $cost= $int*100*10*$guests;
         // echo "$cost";
      }
      else if($ptype=="semi-deluxe")
      {
         $cost= $int*100*20*$guests;
         // echo "$cost";
      }
      else{
         $cost= $int*100*30*$guests;
         // echo "$cost"; 
      }

      $_SESSION["cost"]=$cost;
      $_SESSION["name2"]=$name;
      $_SESSION["trans"]="false";
      $_SESSION["error"]=NULL;

      header('location:transaction.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>