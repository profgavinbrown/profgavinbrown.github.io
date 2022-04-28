
<body bgcolor='cornsilk'>

<br>
<center>
<font color=darkblue face=Arial>

<?php


	$thisdir = $_GET['thisdir'];
	$galleryFiles = "galleryFiles";

	if (!isset($title))
	{
		$title = "Alex's Gallery";
	}	
	echo "<h1>$title</h1>";

	include "./birth.php";
	echo "<br>";	

	function endswith( $str, $sub )
	{
	   return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
	}


	if (isset($thisdir))
	{
		$shortname = substr( $thisdir, 2 );
		$shortname = str_replace("_", " ", $shortname);
		$shortname = str_replace("/", " > ", $shortname);
		
		echo "<h2><i>$shortname</i></h2>";
	}
	else
	{
		//Welcome message
		//
		$thisdir=".";
		//echo "<h2><i>&nbsp;</i></h2>";
		//echo "<img width=200 src='http://www.cs.man.ac.uk/~gbrown/alex/galleryFiles/medium/2006.Jan06.Alex_&_Inigo_Jan_06_1.JPG' border=0>";
		//echo "<img src='./bathtime.jpg' width=250><br><br>";
	}


	echo "<center><table border=8 width='85%' bgcolor=silver><tr><td width=100>";
	echo "<img src='./family.jpg' width=300></td><td bgcolor=white valign=top>";
	echo "<table bgcolor='white' width='100%' border='0' cellpadding='4' cellspacing='0'>\n<tr>\n";
	$i=0;

	
	$columns=4;
	$count=1;


	//DETECT THE DIRECTORIES
	//
	$myDirectory = opendir($thisdir);
	while ($item = readdir($myDirectory))
	{
		if ($i==$columns)
		{
			echo "</tr>\n<tr>\n";
			$i=0;
		}
		
		
		if ( is_dir("$thisdir/$item") )
		{
		
			if( ($item != "$galleryFiles") && ($item != ".") && ($item != "..") && ($item !=".LMX:") )
			{
				echo "\t<td width=25% align='center'>";
			
				$me = $_SERVER['PHP_SELF'];
			
				echo "<a border=0 href='$me?thisdir=$thisdir/$item'>";

				$shortname = str_replace("_", " ", $item);

				echo "<img src=http://findicons.com/files/icons/2221/folder/128/normal_folder.png width=100 border=0></a><br><big>$shortname</big>";
				echo "</td>\n";
			
				$i++;
			}
		}
		
	}
	closedir($myDirectory);
	
	
	
	$myDirectory = opendir($thisdir);
	while ($item = readdir($myDirectory))
	{
		if ($i==$columns)
		{
			echo "</tr>\n<tr>\n";
			$i=0;
		}
		
		
		if ( !is_dir("$thisdir/$item") )
		{
			//echo "-$thisdir/$item-<br>";
			//if ( ($item != "Thumbs.db") && !(endsWith($item, "php")) && !(endsWith($item, "MOV")) && !(endsWith($item, "WAV")) )
			
			if ( endsWith($item, "jpg") || (endsWith($item, "JPG"))  )
			{
				$thumbname = str_replace("/", ".", $thisdir);
				$thumbname = substr($thumbname, 2);
				
				if($thumbname == "")
				{
					$thumbname = $item;
				}
				else
				{
					$thumbname = "$thumbname.$item";
				}

				echo "\t<td width=25% align='center'>";
				
				if( !file_exists("$galleryFiles/thumbs/$thumbname" ) )
				{
					echo "<a href='$thisdir/$item'>";
					echo "<img src='$thisdir/$item' width=80 border=10></a><br><b><small><small>$count";
				}
				else
				{
					//echo "<a href='$galleryFiles/medium/$thumbname'>";
					echo "<a href='$thisdir/$item'>";
					echo "<img src='$galleryFiles/thumbs/$thumbname' border=0></a><br><b><small>$count";
				}
				
				echo "</b>  <a href='$thisdir/$item'>(original)</a></small></small><br>";
				echo "</td>\n";

				$count++;	
				$i++;
			}
		}
	}
	closedir($myDirectory);



	
	if ($i<($columns))
	{
		for ($b=0; $b<($columns-$i); $b++)
			echo "\t<td>&nbsp</td>\n";
	}


	echo "</tr>\n</table>";

	echo "</td></tr></table>";
	
?>


<span style="visibility: hidden">
