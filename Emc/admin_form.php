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
* {
  box-sizing: border-box;
}
.column {
    float: left;
    width: 33.33%;
    padding: 15px;
}
/*.row:after {
    content: "";
    display: table;
    clear: both;
  }*/

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
    <!--<a href=""> Adminstrator </a>-->
    <div class="dropdown">
      <button class="dropbtn">Adminstrator
      <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
       <a href="cit.php">Manage Citizen</a>
       <a href="#">Manage Party</a>
       <a href="#">Link 3</a>
     </div>
   </div>

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
</div>
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
<center>
<div class="row">
  <div class="column">
   <img src="c1.jpg" style="width: 48%; margin-left: 1px ; "><br>
   <p> <b>Election Management System</b> </p>
   <p> Election Management System. GEMS™ is a Microsoft
     Windows®-based election management and tabulation software.
     It allows election administrators to easily and completely
     control every step of the election process.

</p>
  </div>

  <div class="column">
<img src="c6.jpg" style="width: 70%;"><br>
<p>  <b> Candidate Management System </b> </p>
<p> Candidate Management refers to overseeing,
  building and maintaining relationships with candidates.
   Candidate management is a crucial component of every recruiter's role,
  with both active and passive candidates. </p>
  </div>

  <div class="column" >
    <img src="c.jpg" style="width: 53% ; margin-left: -1px ; "><br>
    <p> <b> Citizen Management System  </b> </p>
    <p> Citizen relationship management is a growing effort at all levels of government
       to respond quickly, succinctly and accurately to citizen requests
       or inquiries for answers to questions and
      general information about policies.
    </p>
  </div>

</div>
</center>
</body>
</html>
