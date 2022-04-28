<head><link rel="stylesheet" href="style.css"></head>
<?php include("./menu.php"); ?>

<div class="bodybox">


This implementation of UCS is currently in beta testing.<br>
Versions are coded by date, for example the first version is marked 
20070516 for 16th May 2007.<br><br>
<hr>
<br>
Release 20070521 : <a href="beta/ucs-v20070521.zip">available here</a>.
	<ul>
	<li>Added capability to deal with arbitrary nominal attributes.
	<li>Added capability to deal with multiple classes.
	</ul>
Release 20070516 : <a href="beta/ucs-v20070516.zip">available here</a>.
	<ul>
	<li>First beta release, May 16th 2007.
	</ul>
<!--
	<ul>
	<li>Fixed bug in random number generator.
	<li>Added capability to print all macroclassifiers.
	</ul>
Release 20070508 : <a href="beta/ucs-v20070508.zip">available here</a>.<br>
-->
<!-- 
<?php
$email = $_REQUEST['email'];
if ( isset($email) )
{
        mail("gbrown@cs.man.ac.uk", "UCS download", $email);
        echo "Thankyou!<br>";
	echo "<a href=''>Click here to download the UCS zip file.</a>";
}
else
{
?>


To be kept up to date with UCS releases and publications, please fill out the form below.<br>
<br>

<form name=main action='<?php echo $_SERVER['PHP_SELF']; ?>' method=post>
 email: <input type=text size=30 name="email">
 institution: <input type=text size=30 name="inst">
 <input type=submit value="download UCS!"><br><br>
</form>

<?php
}
?>

-->

</div>

<span style="visibility:hidden">
