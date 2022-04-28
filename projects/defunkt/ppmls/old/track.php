
<?php

/*
if (getenv('HTTP_CLIENT_IP')) {
	$IP = getenv('HTTP_CLIENT_IP');
}
elseif (getenv('HTTP_X_FORWARDED_FOR')) {
	$IP = getenv('HTTP_X_FORWARDED_FOR');
}
elseif (getenv('HTTP_X_FORWARDED')) {
	$IP = getenv('HTTP_X_FORWARDED');
}
elseif (getenv('HTTP_FORWARDED_FOR')) {
	$IP = getenv('HTTP_FORWARDED_FOR');
}
elseif (getenv('HTTP_FORWARDED')) {
	$IP = getenv('HTTP_FORWARDED');
}
else {
	$IP = $_SERVER['REMOTE_ADDR'];
}
*/



$IP = $_SERVER['REMOTE_ADDR'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = getHostByAddr($IP);
$visitor = "$IP - $hostname - $ref";

if ($hostname=="rpc187") 
{
  echo "$IP : $hostname";
}
else
{
  mail("gbrown@cs.man.ac.uk", "Visit - $hostname", $visitor);
}

?>

