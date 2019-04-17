<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style>
		body
	{
		background-image: url('Insomnia-One_1920x1080_25fps_VJLoop_LIMEART_003.jpeg');
		background-repeat: no-repeat;
		background-size: device-height:100% device-width:100%;
	}
		
		.button {
			background-color:#555555; 
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
		@font-face{
			font-family:"Times New Roman",Times,serif;
			src:url(sansation_light.woff);
		}
		@font-face{
			font-family: "Times New Roman",Times,serif;
			src:url(sansation_bold.woff);
			font-weight:bold;
		}
	*{
		font-family: "Times New Roman",Times,serif
		border-radiustfont;
	}
	#rcorners{: 15px 30px 25px;
		background:white;
		padding: 20px;
		width: 200px;
		height: 400px; 
	}
	.bg-img{
		background-image: url("Insomnia-One_1920x1080_25fps_VJLoop_LIMEART_003.jpeg");
		background-position: center;
		background-repeat: repeat;
		background-size: cover;
		position: absolute;
	}
	input[type=text],input[type=password]:focus{
		background-color: #ddd;
		outline: none;
	}
	p.sansserif{
		font-family: Arial, Helvetica, sans-serif;
}
	}
	</style>
</head>
<body>

	<?php
		require_once('connect.php');
		$con=mysqli_connect($servername,$username,$password,$db);
		?>
		<center>
			<font color="white">
		<h2 style="font-style: italic;" style="font-size: 60px">Create a new account.</h2>
<h3 style="font-style: italic;" style="font-size: 40px">Free and will be.</h3>
</font>
</center>
<center>
	<div>
<form action="save.php" method="POST">
	
<p id="rcorners">
	<b>Firstname:</b><br>
	<input type="text" name="Firstname" required><br><br>
	<b>Lastname:</b><br>
	<input type="text" name="Lastname"required><br><br>
	<b>Email:</b><br>
	<input type="text" name="Email" required><br><br>
	<b>Password:</b><br>
	<input type="password" name="Password" required><br><br>
	<b>Gender:</b><br>
	<input type="radio" name="gender" value="female" checked>Female<br>
	<input type="radio" name="gender" value="male">Male<br>
	<input type="radio" name="gender" value="other">Other<br><br>
	<b>Date:</b><br>
	<input type="Date" name="DOB" required><br><br>
	<input type="submit" class="button" value="Sign Up">
</p>

</form>
</div>
</center>
</body>
</html>
