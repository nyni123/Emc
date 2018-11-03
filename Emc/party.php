!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  margin: 0;
  font-family: Arial , Helvetica , sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #25292C;
  position: fixed;
  top: 0;
  width: 100%;
}
.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  display: block;
  font-size: 17px;
}
.botnav {
  position:absolute;
  bottom:-500 ;
  width:100%;
  height:60px;   /* Height of the footer */
  background:#25292C;
  padding:0px;
  padding-bottom:20px;
}

.botnav b{
  float: right;

  text-align: center;

  display: block;
  font-size: 17px;
}





.Dropdown{
  overflow: hidden;
  display: inline-block;
  padding: 14px 16px;
  float: right;
  }

  .dropdown-content {
    display: none;
    position: fixed;
    background-color: white;
    min-width: 100px;

}
.dropdown-content a {
    float: none;
    color: black;
    padding: 14px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown .dropbtn {
    font-size: 16px;
    color: white;
    /*padding: 14px 16px;*/
    background-color: #25292C;
    font-family: inherit;
    border: 0;
    margin: 0;
}

/*.dropdown-content a:hover {
    background-color: #ddd;
}*/
.dropdown:hover .dropdown-content {
    display: block;
}
.topnav a:hover{
  background-color: lightblue;
  color: black;
}
.dropdown:hover{
  color: black;
}
.img{
  float: left;
  width: 50%;

}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -122px;
  color: white;
  font-weight: 18px;
}
.next{
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover, .next:hover {
  background-color: black;
}



</style>
</head>
<body style="background-color:#f1eeda;">
   <div class="topnav" >
 <div class="img">
   <img src="g.png" >
 </div>
    <a href="" > Contact Us </a>
    <a href=""> About Us </a>
        <div class="dropdown">
      <button class="dropbtn">Adminstrator
      <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
       <a href="">Manage Citizen</a>
       <a href="#">Link 2</a>
       <a href="#">Link 3</a>
     </div>
   </div>

  </div>
  <div class="botnav" >
 <p style="margin-left:50px;margin-top:30px;color:white;">  Copyright © 2018 National Voter's Service Portal,
   Site is designed and maintained by C-DAC GIST, Pune. <a style="margin-left:200px;color:white;" href=""> Home </a>
   <a style="margin-left:50px;color:white;" href=""> About Us </a>
   <a style="margin-left:50px;color:white;" href=""> Contact Us </a> </p>



  </div>




  <div class="slideshow-container">
  <div class="myslides">
    <img  src="b.jpg" alt="gaurav" style="width:100%;height: 285.729px;" >
</div>
  <div class="myslides">
    <img src="b1.jpg" alt="jyoti" style="width:100%;height: 285.729px;">
  </div>
  <div class="myslides">
    <img src="b1.jpg" alt="yashu" style="width:100%;height: 285.729px;">
</div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div><br><br>
<?php

include('cit_connect.php');

 $conn=  mysqli_query($conn, "select * from party");
//or die(mysql_error());

echo "<center><table border='1' cellpadding='40'   style='margin-bottom: 100px;'>";
echo "<tr style= background-color:gray;>
<th ><font color='white'>Name</font></th>
<th><font color='white'>Mobile</font></th>
<th><font color='white'>Email</font></th>

<th><font color='white'>Secretary</font></th>
<th><font color='white'>Action</font></th>
</tr>";

while($row = mysqli_fetch_array( $conn ))
{

echo "<tr>";
echo '<td ><b><font color="#663300">' . $row['Name'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Mobile'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Email'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Secretary'] . '</font></b></td>';
//echo '<td><b><font color="#663300">' . $row['Dob'] . '</font></b></td>';
//echo '<td><b><font color="#663300"><a href="edit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
echo '<td><b><font color="lightblue"><a href="cit_delete.php?Mobile=' . $row['Mobile'] . '">Delete</a></font></b></td>';
echo "</tr>";

}

echo "</table> </center>";
?>

<script>
var slideindex = 1;
showslides(slideindex);
function plusSlides(n) {
  showslides(slideindex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showslides(n)
{
var i;
var slides = document.getElementsByClassName("myslides");
if(n>slides.length){slideindex=1}
if(n<1){slideindex=slide.length}
for(i=0;i<slides.length;i++){
  slides[i].style.display="none";
}

slides[slideindex-1].style.display = "block";

}
</script>

</body>
</html>
