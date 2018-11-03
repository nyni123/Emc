<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type='text/javascript'>
  function preview_image(event)
  {
   var reader = new FileReader();
   reader.onload = function()
   {
    var output = document.getElementById('output_image');
    output.src = reader.result;
   }
   reader.readAsDataURL(event.target.files[0]);
  }
  </script>
<style>
body {
  margin: 0;
  font-family: Arial , Helvetica , sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #25292C;
  position: relative;
  top: 0;
  width: 100%;
  margin-top: -8%;
  padding-top: 10px;
  }
.topnav a {
  float: right;
  color: white;
  text-align: center;
  display: block;
  padding: 19px ;
  font-size: 17px;
  padding-top: 30px;
}
.topnav a:hover{
  background-color: lightblue;
  color: black;
}

.img{
  float: left;
  width: 50%;
}
.border{
/*background-color: lightgray;*/
border: 1px solid gray;
margin-top:3%;
padding-bottom: 5%;
padding-top: 30px;
margin-left: 8%;
margin-right: 8%;
}
.fon{
  margin-top:-4%;
  border: 1px solid #E0E0E0;
  background-color: #E0E0E0;
  padding-bottom: 15px;
  padding-top: 15px;
  border-radius: 15px 15px 15px 15px;
}
.man{
  margin-top: 4%;
  margin-left: 3%;
  margin-right: 3%;
  border: 1px solid 	#C0C0C0+;
  background-color:	#ADD8E6;
  padding-bottom: 15px;
  padding-top: 15px;
  padding-left: 15px;
}
.error{color: red;
margin-top: 6%;
text-align: left;
}
.im{
  float: right;
  margin-right: 15%;
}
#output_image
{
 max-width:100px;
}
</style>
</head>
<body style="background-color:#f1eeda;">

<div class="error">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Note :Fields marked with asterisk (*) are mandatory </div>
<div class="topnav">
<div class="img">
<img src="g.png" >
</div>
 <a class="active" href="" > Contact Us </a>
 <a href=""> About Us </a>
 <a href="admin.php"> Admin Login </a>
</div>
<div class="border">
<h1 align="center">  <div class="fon"> REGISTRATION FORM  </h1>
<p> <div class="man" > Mandatory Particulars </div></p>
<form action="admin_form_call.php" method="post">
&emsp;&emsp;&emsp; Name: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="Name" value="">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;<input type="file" name="img" accept="image/*" onchange="preview_image(event)"><div class="im"><img id="output_image"/></div><br> <br><br>
&emsp;&emsp;&emsp; Gender:  &emsp;&nbsp;&emsp;&emsp;&emsp;&emsp; Male<input type="radio" name="Gender" value="Male">&emsp;
Female<input type="radio" name="Gender" value="Female"><br> <br> <br>
&emsp;&emsp;&emsp; Father Name: &emsp;&emsp;&emsp;<input type="text" name="fname" value=""><br><br><br>
&emsp;&emsp;&emsp; Date of Birth: &emsp;&emsp;&emsp;&nbsp;<input type="date" name="dob" value=""><br><br><br>
&emsp;&emsp;&emsp; Mobile: &emsp;&emsp;&emsp;&nbsp; &nbsp;&emsp;&emsp;<input type="text" name="phone" value=""><br><br><br>
&emsp;&emsp;&emsp;Address:&emsp;&emsp;&emsp;&nbsp; &nbsp;&emsp;&emsp;<textarea  name="address" rows="3" cols="30"></textarea><br><br><br>
&emsp;&emsp;&emsp;Pincode:&emsp;&emsp;&emsp;&nbsp; &nbsp;&emsp;&emsp;<input type="text" name="pin" value=""><br><br>
<p> <div class="man"> Declaration </div> </p><br>
&emsp;&emsp;&emsp;I hereby declare that to the best of knowledge and belief -<br><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;(i) I am a citizen of India and place of my birth is<br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Town/Village&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="town" value=""><br><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Select State&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<select name="states">
  <option value="">select</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Delhi">Delhi</option>
    <option value="Uttrakhand">Uttrakhand</option>
  </select><br><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;(ii) I have not applied for the inclusion of my name in the electoral roll for any other constituency.<br><br><br><br><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit">
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="reset">
</form>
</div>
<?php
if($_GET!=NULL){

$resp=$_GET["resp"];
if(  $resp!= 0)
{
 echo "<script> alert('data stored');</script>";
}
}
?>
</body>
</html>
