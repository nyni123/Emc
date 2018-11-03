<?php
include('cit_connect.php');

if (isset($_GET['Mobile']) && is_numeric($_GET['Mobile']))
{
$Mobile = $_GET['Mobile'];
$conn=  mysqli_query($conn, "DELETE FROM party WHERE Mobile=$Mobile");
//$result = mysql_query("DELETE FROM app WHERE Voter=$Voter")
//or die(mysqli_error());

header("Location: cit.php");
}
else

{
header("Location: cit.php");
}
?>
