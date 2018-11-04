<?php
require_once("config.php");
$rollnor=$_POST['rollno'];

$sql = "SELECT * FROM admintable WHERE rollno='$rollnor'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
        echo "<br> NAME: ". $row["name"]. " <br> ROLL NO.: ". $row["rollno"]. " <br> For.: ". $row["forw"]. " <br> RUPEES: " . $row["rupees"] . "<br> CONTACT:". $row["contact"] ."<br>";
    }
}
 else 
{
    echo "0 results";
}

?>
