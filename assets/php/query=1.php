<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zerolink";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  echo "Connect Error:" . mysqli_connect_error();
}
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO `truck-rent`(`name`, `email`, `subject`, `message`) VALUES ('[$name]','[$email]','[$subject]','[$message]')";
if (mysqli_query($conn, $sql)) {
  echo "<div class='success'><i class='bi bi-arrow-left'><a href='index.html'>Back</a></i>Message Sent</div>";
} else {
  echo "Something went wrong, try again momentarily";
}
mysqli_close($conn)
  ?>