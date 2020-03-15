<?php
$servername = "localhost";
$username   = "seriousl_bakeryadmin";
$password   = "V?st!Ca)7[k]";
$dbname     = "seriousl_bakery";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<?php
error_reporting(0);
include_once ("dbconnect.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = sha1($_POST['password']);

$sqlinsert = "INSERT INTO USER(NAME,EMAIL,PHONE,PASSWORD) VALUES ('$name','$email','$password','$phone')";

if ($conn->query($sqlinsert) === true)
{
    sendEmail($email);
    echo "success";
}

else
{
    echo "failed";
}
