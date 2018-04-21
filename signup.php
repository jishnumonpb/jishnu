<?php
        require "connect.php";
		if(isset($_POST["submit"]))
	{
		$dname=$_POST["dname"];
		$dob=$_POST["dob"];
		$desc=$_POST["desc"];;
		$lno=$_POST["lno"];
		$phone=$_POST["phone"];;
		$email=$_POST["email"];;
		$uname=$_POST["uname"];
		$password=$_POST["password"];
		$cpassword=$_POST["cpassword"];
		$qury="INSERT INTO `cregister`( `dname`, `dob`,`description`, `lno`, `phone`, `email`,  `uname`, `password`, `cpassword`) VALUES ('$dname','$dob','$desc', '$lno',  '$phone', '$email',  '$uname', '$password', '$cpassword')";
		$obj=mysqli_query($conn,$qury);
		if($obj)
		{
			echo"<script>alert('Registration successful...');</script>";
		}
		else
			mysqli_error($conn);
    }
	?>
<html>
<head>
<link href="css\style1.css" rel="stylesheet">
</head>
<body background="(64).jpg">
<div id="main">
<center>
<div id="top"><b><marquee>ONLINE TAXI</marquee></b></div>
<div id="menu"><center><a href="login_ccv.php">HOME &nbsp&nbsp </a> <a href="signup.html">REGISTER &nbsp&nbsp </a> &nbsp&nbsp </a> <a href="@%#^$&%*%*">ABOUT US </a></center></div>
<br>
<br>
<br>
<form action="#" method="post">
<div id="signup">
<h2 class="smp">EMPLOYEE REGISTRATION<h2>
<center>
<font size="4px">
<label>Driver Name:</label>
<input id="dname" name="dname"  placeholder="Driver name" type="text" required><br>
<label>Date of Birth:</label><br>
<input id="dob" name="Rdate "  placeholder="Date of Birth" type="date" required><br>
<label>Address:</label><br>
<textarea placeholder="Address" name="desc" required></textarea><br>
<label>Licence No:</label>
<input id="lno" name="PCname"  placeholder="Licence No" type="text" required><br>
<label>Contct Number:</label>
<input id="phone" name="phone"  placeholder="Phone Number" type="phone" required><br>
<label>E-mail:</label>
<input id="email" name="email"  placeholder="Email id" type="email" required><br>
<label>UserName :</label>
<input id="uname" name="username" placeholder="username" type="text"><br>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br>
<label>Confirm Password :</label>
<input id="cpassword" name="cpassword" placeholder="**********" type="password"><br><br>
<input  name="submit" type="submit" value=" REGISTER ">
<br>
</font>

</center>
</div>
</form>
<body>
</html>