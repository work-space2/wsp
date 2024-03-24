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
$companyID = $_POST['companyID'];
$vhtype = $_POST['vhtype'];
$quantity = $_POST['quantity'];
$message = $_POST['message'];

$sql = "INSERT INTO `contract hire`(`name`, `email`, `companyID`, `vhtype`, `quantity`, `message`) VALUES ('[$name]','[$email]','[$companyID]','[$vhtype]','[$quantity]','[$message]')";
if (mysqli_query($conn, $sql)) {
    echo "<div class='success'><i class='bi bi-arrow-left'><a href='index.html'>Back</a></i>Message Sent</div>";
} else {
    echo "Something went wrong, try again momentarily";
}
mysqli_close($conn)
    ?>