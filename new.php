<!DOCTYPE html>
<html>
    <head>
    <title>

    </title>
    </head>
    <body>
    <?php
		require_once('connect.php');
		$con=mysqli_connect($servername,$username,$password,"insomaniac") or die("Could not connect");
		?>
            Welcome<div></div><a href="logout.php">Logout</a>
        <h1>You are successfully Signed In!!!!!</h1>
    </body>
</html>