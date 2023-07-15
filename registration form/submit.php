<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST["phonenumber"];
$appname = $_POST['apppname'];
$link=$_POST['link'];
$plink=$_POST['Plink'];
$AppDesc=$_POST['Appdesc'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HandOutDatabase";

  // Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO AppInfo
VALUES ('$name','$email','$phonenumber','$appname','$link','$plink','$AppDesc')";

if ($conn->query($sql) === TRUE) {
  header("Location: http://localhost/21MIS1025/DA/app landing page/thank you/index3.html");
exit();
} 

$conn->close();

  // Display success message
  echo "Data successfully stored in the database.";

?>