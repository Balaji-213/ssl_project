<!DOCTYPE html>
<html>
<head>

   <title>Booking Data</title>
   <link rel="stylesheet" href="css/style.css">
</head>

 <body> 

 <section class="header">
   <a class="logo">Online tours and travels</a>

   <nav class="navbar">
      <a href="admin.php">Back</a>    
   </nav>

</section>

<section  >

<h1 class="heading-title">Booking Data!!</h1>
</div>

</section>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="book_db";

$conn =  mysqli_connect($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM book_form";
$result=mysqli_query($conn,$sql);
$conn->close();
?>
<style>
tr:nth-child(even) {
  background-color: #d9d9d9;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
  font-size: 2rem;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  padding-left: 1rem;
  padding-right: 1rem;
  
}
</style>

<div >
	<table class="center" cellpadding="5" celspacing="5" border="1px solid black">
 <tr>
	<th>Bokking No</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th>Location</th>
	<th>No Of Guests</th>
	<th>Arrival</th>
	<th>Leaving</th>
	<th>Package Type</th>
 </tr>
<?php while($row=mysqli_fetch_array($result)):?>
 <tr>
	<td class="normal"><?php echo $row['id'];?></td>
	<td class="normal"><?php echo $row['name'];?></td>
	<td class="normal"><?php echo $row['email'];?></td>
	<td><?php echo $row['phone'];?></td>
	<td><?php echo $row['address'];?></td>
	<td><?php echo $row['location'];?></td>
	<td><?php echo $row['guests'];?></td>
	<td><?php echo $row['arrivals'];?></td>
	<td><?php echo $row['leaving'];?></td>
	<td><?php echo $row['ptype'];?></td>
 </tr>
	<?php endwhile;?> 
	</table>
	<br>
	<br>
</div>


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