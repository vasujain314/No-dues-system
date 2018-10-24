
<?php
require_once("config.php");

$user=$_POST['username'];
$pass=$_POST['password'];

$sql = "SELECT * FROM users WHERE user='$user' AND pass='$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        header("location: home.php");
    }
}
 else 
{
    header("location: error.html");
}

?>
