<?php

/////////////////////////////////////////////

class confObj
{
   var $name;
   var $deadline;
   var $web;

   function confObj($items)
   {
       $this->name = $items[0];       
       $this->deadline = $items[1];
     //  $this->web = $items[2];
   }
   
}

/////////////////////////////////////////////

function compare($a, $b)
{
   	$d="/";

   	if ($a->deadline == $b->deadline)
   		{ return 0; }
	else {
 		list($ad,$am,$ay)=split($d,$a->deadline);
        	list($bd,$bm,$by)=split($d,$b->deadline);
		if (mktime(0,0,0,$am,$ad,$ay) > mktime(0,0,0,$bm,$bd,$by))
		{ return -1; }
		else { return 1; }
	}
}

/////////////////////////////////////////////

function loadConferences()
{
	global $confs;
	
	$fp = fopen("conf.csv", "r");
	$contents = fread($fp, filesize("conf.csv"));
	$lines = explode("\n",$contents);
	
	for ($i=0; $i<count($lines); $i++)
	{
		if ($lines[$i]=="") continue;
	
		$items = explode(",",$lines[$i]);
		$confs[$i] = new confObj($items);
	}

	usort($confs, "compare");
}

/////////////////////////////////////////////

?>
