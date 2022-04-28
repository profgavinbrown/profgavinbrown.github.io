<?php
if ( isset($_POST['pswd']) ) {
	$pswd = $_POST['pswd'];
	if ($pswd=='brown') {
		setcookie("testcookie","true",time()+20,'/');
	}
	else {
		echo "Wrong password.";
	}
	$refer = $_POST['refer'];
	header( 'Location: '.$refer );	

}
else {
	$refer = $_SERVER['HTTP_REFERER'];
	?>
	<body OnLoad="document.myform.pswd.focus();">
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<center>
	<form action="./login.php" name="myform" method="post">
		<input type="password" name="pswd"><br>
		<input type="hidden" name="refer" value="<?php echo $refer; ?>">
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
}

?>
