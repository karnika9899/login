<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
	<title>Login page</title>
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
			font-family: "Times New Roman",Times,serif;
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
	</style>

</head>
<body>
	<?php
		require_once('connect.php');
		$con=mysqli_connect($servername,$username,$password,"insomaniac") or die("Could not connect");
		?>

		<div class="container-fluid">
			<center>
				<p class="sansserif">
				<font color="white">
				<h1>INSOMNIAC</h1>
			</font>
	<form  class="container" id="rcorners" action="save1.php" method="POST">
		<h1>Login</h1>
				<b>Email:</b><br>
		<input type="email" name="Email" align="right"><br><br>
		<b>password:</b><br>
		<input type="password" name="password" align="right"><br><br>
        <input type="submit" class="button" value="Log In">
         <input type="submit" formaction="register.php" class="button" value="Sign Up">
        </form>
       </center>

	
	</div>



</body>
</html>