
<?php
if( isset($_POST['phone']))
{
	// Authorisation details.
  $username = "gauravnainwal123@gmail.com";
	$hash = "61c30d25b2f9aa17d7cf04a5138ebe955300db54df56610d321901719c27e89b";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_POST['phone']; // A single number or a comma-seperated list of numbers
  $num=rand(10000,99999);
	$message = "Your Voter id is ".$num;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);


$servername = "localhost";
$username = "root";
$password = "";
$db ="sign";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
  die("connection failed: ".$conn->connect_error);
}



$sql = "insert into `app` (`name`,`gender`,`father name`,`dob`,`mobile`,`address`,`pincode`,`img`,`town`,`state`,`voter`) values ('$_POST[Name]','$_POST[Gender]','$_POST[fname]','$_POST[dob]','$_POST[phone]','$_POST[address]',$_POST[pin],'$_POST[img]','$_POST[town]','$_POST[states]',$num)";

if($conn->query($sql)==TRUE){

  echo "new record created";
  header( 'Location: aplication_Form.php?resp=-1' );
}else {
  echo "error" . $sql . "<br>". $conn->error;

}
}
//$conn->close();

?>
