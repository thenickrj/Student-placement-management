
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
	a{
		position:absolute;
		display:inline;
	}
</style>
</head>
<body >
<div class="msg"><h1 style="  font-family: Lucida Console, Courier New, monospace;
	font-size:64px;">WELCOME</h1>
<a href="index.php"><strong><span style="font-size:26px;"></span><em>LOGOUT<em><strong> </a><br> <br>
<a href="samplejoboffer.html">NEXT</a></div>
</body>
</html>
<?php
}
else
{
	echo "please fill the details properly";
	header("refresh:2; url=index.php");
}
?>