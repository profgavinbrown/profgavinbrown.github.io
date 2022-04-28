
<?php

function date_diff($str_start, $str_end)
{

$str_start = strtotime($str_start); // The start date becomes a timestamp
$str_end = strtotime($str_end); // The end date becomes a timestamp

$nseconds = $str_end - $str_start; // Number of seconds between the two dates

$nseconds=$nseconds-(2*86400);

$nyears = floor($nseconds / 31449600); //One year has 31449600 seconds
$nseconds = $nseconds % 31449600;

$nweeks = floor($nseconds / 604800); //One week has 604800 seconds
$nseconds = $nseconds % 604800;

$ndays = floor($nseconds / 86400); // One day has 86400 seconds
$nseconds = $nseconds % 86400;

$nhours = floor($nseconds / 3600); // One hour has 3600 seconds
$nseconds = $nseconds % 3600;

$nminutes = floor($nseconds / 60); // One minute has 60 seconds, duh!
$nseconds = $nseconds % 60;

//$age = $ndays." days, ".$nhours." hours, ".$nminutes." minutes, ".$nseconds." seconds";
$age = $nyears." years, ".$nweeks." weeks, ".$ndays." days, ".$nhours." hours, ".$nminutes." minutes.";

return $age;

}

// Test the function with several values

$age = date_diff("2004-08-27 22:00:00", date("Y-m-d H:i:s"));
//echo date("Y-m-d H:i:s");
echo "<b>Alex's current age is... $age</b><br>";

?>

