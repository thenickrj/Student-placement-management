
<?php
session_start();
if(isset($_SESSION['log']))
{
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>
</title>
<style>
	*{
		margin:0;
	}
	body{		
        background-image: url('welcomeBG.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
	
	.msg{
		position:absolute;
		top:30%;
		left:10%;
	}
	.a1{
		position:absolute;
		display:block;
		color:white;
    margin: auto;
  padding: 10px;
  text-align: center;
    width:50%;
    
    font-size:25px;
    background-color:black;
    
    text-decoration:none
	}
	
ul {
	margin:0;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
position:auto;
}

 li {
    float: right;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

 .dropdown-content {
    display: none;
    position: relative;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

 .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

 .dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body >
<ul>
    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">LOGIN</a>
      <div class="dropdown-content">
        <a href="index.php">STUDENT</a>
        <a href="index1.php">PLACEMENT</a>
       
      </div>
      <li><a href="signup.html">Signup</a></li>
     <li><a href="aboutus.html">About</a></li>
      <li><a href="contactus.html">Contact Us</a></li>
    <li><a href="mainpage.html">Home</a></li>
      </li>
    </ul>
<div class="msg">
<h1 style="  font-family: Lucida Console, Courier New, monospace;
	font-size:64px;">WELCOME</h1>
<a href="index1.php"><strong><span style="font-size:26px;"></span><em>LOGOUT<em><strong> </a><br> <br>
<a href="po.html">NEXT</a></div>
</body>
</html>
<?php
}
else
{
	echo "please fill the details properly";
	header("refresh:2; url=index1.php");
}
?>