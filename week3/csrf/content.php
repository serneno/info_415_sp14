<?php
	session_start();
	if (isset($_SESSION['login'])) {
		?>
		<a href="logout.php">Get me out</a><br />
		<?
		echo "You are logged in with sid: <br />".session_id(). "<br />";
		?>
		<form action="content.php" method="GET">
		<input type=text name=write />
		<input type=submit value='Write this'/>
		</form>
		<?
		if(isset($_GET['write'])) {
		$myFile="text";
		$fh = fopen($myFile, 'a') or die("can't open file");

		fwrite($fh, $_GET['write']."\n");
		echo $_GET['write']." has been written down on file";
		}
	} else {
	echo "You are not logged in.<br />";
	echo "<a href=index.php>Login</a><br />";
	}
?>