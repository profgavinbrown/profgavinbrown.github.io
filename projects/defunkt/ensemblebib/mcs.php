<?php

$url = "http://www.informatik.uni-trier.de/~ley/db/conf/mcs/mcs2009.html";

$fp = fopen($url,"r");

if($fp)
{
	while(!feof($fp))
	{
		$buffer = fgets($fp, 600);
		$file .= $buffer;
	}
	fclose($fp);
}

//EXTRACT ALL THE TITLES//

preg_match_all( "/\<b\>(.*)/" ,   //GET TITLES
	$file,
   	$out, PREG_PATTERN_ORDER);

for ( $n=0; $n<sizeof($out[0]); $n++ )
{
 $q = substr($out[0][$n], 0, -1);
// $q = $out[0][$n];
 echo "$q<br>";
}

//echo "<br>END OF THIS STUFF";


/////////////////////////////////
/////////////////////////////////
/////////////////////////////////
/////////////////////////////////
/////////////////////////////////
/////////////////////////////////
/////////////////////////////////
/////////////////////////////////
/////////////////////////////////



//EXTRACT THE BIBTEX FROM EACH OF THESE URLS
//
foreach ($out[1] as $matchedurl)
{
	$fp = fopen($matchedurl,"r");
	$file="";
	if($fp)
	{
		while(!feof($fp))
		{
			$buffer = fgets($fp, 600);
			$file .= $buffer;
		}
		fclose($fp);
	}
	
	//EXTRACT THE BIBTEX
	//
	preg_match_all("|<pre>[^\b]*(.*?)</pre>|U",
		$file,
	   	$out, PREG_PATTERN_ORDER);
	
	//PRINT THE FIRST ONE ONLY
	//
	echo $out[0][0];
}



?>
