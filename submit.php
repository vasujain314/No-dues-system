
<?php 
require_once("config.php");
if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['rollno'])&& $_POST['rollno'] !=''))
{
$yourName = $conn->real_escape_string($_POST['name']);
$yourRollno = $conn->real_escape_string($_POST['rollno']);
$forwhat = $conn->real_escape_string($_POST['for']);
$yourMoney = $conn->real_escape_string($_POST['rupees']);
$contact = $conn->real_escape_string($_POST['contact']);
if(fromw !=""){
$sql="INSERT INTO admintable (name, rollno, forw, rupees, contact) VALUES ('".$yourName."','".$yourRollno."','".$forwhat."', '".$yourMoney."', '".$contact."')";
}
 else{
	 echo "please login first";
 }
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else{
	header("location: home2.php");
    exit;
}
}
?>