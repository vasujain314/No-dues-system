
<?php
require_once("config.php");
$user=$_POST['username'];
$pass=$_POST['password'];
if ($_POST['submit'] == 'login')
{


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
}
else if($_POST['submit'] == 'account')
{

$sql = "SELECT * FROM users WHERE user='$user' AND pass='$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
   $sql = "SELECT * FROM admintable WHERE fromw='$user'";
   $result1 = $conn->query($sql);

    if ($result1->num_rows > 0) 
	{
    while($row2 = $result1->fetch_assoc()) 
	    {
        echo "<br> NAME: ". $row2["name"]. " <br> ROLL NO.: ". $row2["rollno"]. " <br> For.: ". $row2["forw"]. " <br> RUPEES: " . $row2["rupees"] . "<br> CONTACT:". $row2["contact"] ."<br>";
        }
    
    }
}
 else 
{
    header("location: error.html");
}	
}

?>
