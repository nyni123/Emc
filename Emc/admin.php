<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
    function checkTww()
    {
      let pss="gaurav";

  let pass=document.getElementById("password").value;
  let userName=document.getElementById("username").value;
  if(!(pss===pass))
  {
    alert("input correct pss");
    return false;
  }
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
  margin-top: 0;
  padding-top: 10px;
  }
.topnav a {
  float: right;
  color: white;
  text-align: center;
  display: block;
  padding: 14px 16px  ;
  font-size: 17px;
  /*padding-top: 30px;*/
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
 margin-top: 0%;
 margin-left: 25%;
 margin-right: 25%;
 margin-bottom: 8%;
 border: 1px solid gray;
 padding-top: 10px;
 padding-bottom: 50px;
 padding-left: 10%;
 padding-right: 10%;
  }
.fon{
  font-size: 50%;
}

</style>
</head>
<body style="background-color:#f1eeda;">


<div class="topnav">
<div class="img">
<img src="g.png" >
</div>
 <a class="active" href="" > Contact Us </a>
 <a href=""> About Us </a>
 <a href=""> Admin Login </a>
</div><br>
<center> <h1 style="color:#4D4D51"> Admin Login </h1>

 <img src="admin.png" width="100px"></center>
<div class="border">
    <center> <h1 style="font-size:30px;color:#4D4D51;"> Username <br> </center>
<form action="admin_form.php"  target="_blank" method="post" onsubmit="return checkTww()" >
<center><input type="text" name="user" id="username"><br><br></center>
<center> <h1 style="font-size:30px;color:#4D4D51;"> Password <br> </center>
<center><input type="password" autocomplete="new-password" name="word" id="password"></center><br><br><br>
<center><input style="font-size:100%;" type="submit" value="Login" ></center>
</form>
</div>

</body>
</html>
