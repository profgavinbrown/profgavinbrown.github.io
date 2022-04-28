<html>
<head>
<title>Tim's LCS Bibliography</title>
</head>

<center>
<blockquote>
<br><br>

<table border=0 width="90%" cellspacing=0 cellpadding=0>
<tr>
	<td align=right colspan=2>
	<img src="http://www.cs.bris.ac.uk/~kovacs/lcs/lcs.bib.gif">
	<!-- <font face="Helvetica" color="660099" size="+3">
	<b>LCS Bibliography</b></font> -->
	</td>
</tr>
<tr><td bgcolor="660099"><font color=white size=1><b>&nbsp;</b></font></td></tr>

<tr>
<td bgcolor=cornsilk>

<?php

$searchparam = $_REQUEST['searchparam'];
$browse = $_REQUEST['browse'];
if (isset($browse)) $searchparam="";

?>
		<table border=0>
		<tr>
		<td width=80%>
		
		<blockquote>
		<br>
		<center>
		<b>
		
<i>I want to compile a complete bibliography of everything ever written on learning classifier
systems -- the genetics based machine learning systems introduced by John Holland. You can help by
contributing references for any missing papers you know of, or any corrections (no matter how small). I'd
prefer to receive entries in bibtex format, but plain text is fine too. Please include the abstract, a list
of keywords, and a URL for an electronic copy, if there is one.
</i>
		</b>
		<br><br>
		<hr>
		<br>
				
		<form name=mainform action=<?php echo $_SERVER['PHP_SELF']; ?> method=post>
		
		<!--
		<select name="bibfile">
			<option selected value="ensemblelearning.bib">Entire bibliography
			<option value="mcs.bib">MCS conferences 2000-2005 only
		</select><br>
		-->
		
		Search:
		<input type=text size=60 name="searchparam" value="<?php echo $searchparam; ?>">
		<input type=submit value="submit"><br><br>
		or 
		<input type=submit name="browse" value="browse"> the entire bibliography.
		</form>
		

		<br>
		If you want your papers included, please mail your Bibtex files to
		<a href="http://www.cs.bris.ac.uk/~kovacs/">Tim Kovacs</a>
		<br>
		This bibliography is also held online at the <a href="http://liinwww.ira.uka.de/bibliography/Ai/learning.classifier.systems.html"><i><u>Collection of Computer Science Bibliographies.</i></u></a>
		
		<hr>
		
		<!--
		<br>
		Over <font size=+1 face=bold>450</font> entries so far - many thanks for Bibtex files from:<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Phillip Kegelmeyer, Christopher Merz, Ke Chen, Xin Yao,<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Nathan Intrator, Bill Langdon and Igor Tetko<br>
		<br>
		<b>NEW Oct 2003:</b> This bibliography is also held online at the <a href="http://liinwww.ira.uka.de/bibliography/Neural/EnsembleLearning.html"><i><u>Collection of Computer Science Bibliographies.</i></u></a>
		<br>
		<b>NEW Sept 2003:</b>Entries for every paper published in the <a href="http://www.diee.unica.it/mcs"><i><u>Multiple Classifier Systems</u></i></a> workshop series.<br>
		-->

</td>
</tr>
</table>

</blockquote>

<blockquote>


<?php


if (isset($browse))
{
	go("ALL");
}
else
{

	if (isset($searchparam))
	{
		if ($searchparam != "")
		{
			go($searchparam);
		}
	}
}





function go( $searchparam )
{
	if ($searchparam=="ALL")
	{
		$searchparam="";
		$browsing="true";
	}
	else
	{
		echo "<b>Results of your search for '$searchparam'</b><br>";
		$browsing="false";
	}
	
	
	
	$pathprefix = "http://www.cs.bris.ac.uk/~kovacs/lcs/";
	$bibfile = $_REQUEST['bibfile'];
	if($bibfile=="") $bibfile="lcs.bib";

	$file = file( $pathprefix.$bibfile );

	$buffer="";
	$count=0;
	for ($i=0; $i<count($file); $i++)
	{
		$trimmed = trim($file[$i]);
		
		if($trimmed=="" && trim($buffer)!="")
		{
			$bibentries[$count++] = $buffer;
			$a = strlen($buffer);
			$buffer="";
		}
		else
		{
			$comment = preg_match("/^#.*/s",$file[$i]);
			if($comment==0)
			{
				$buffer .= $file[$i];
			}
			
		}
	}


	$total=count($bibentries);
	if ($browsing!="true") echo "$total entries searched.<br>";
	if ($browsing=="true") echo "<b>Showing all $total entries.</b><br>";
	
	
	$searchparams = split('[ ,.;\"]', $searchparam);
	for ($i=0; $i<count($searchparams); $i++)
	{
		$value = $searchparams[$i];
		$allmatches = array_values(preg_grep( "/$value/i", $bibentries ));
		$bibentries = $allmatches;
		
	}
	


	$num=count($allmatches);
	if ($browsing!="true") echo "$num entries found with your query '<b>$searchparam</b>'<br>";
	
	echo "<hr>";
	echo "<pre>";
	
	
	echo "<table width=200 cellpadding=5 border=0>";
	
	foreach( $allmatches as $entry )
	{
		if(!strstr($entry, '@')) continue;
		
		$entry  = stripslashes($entry);
		
		preg_match("/.* title.*=.*?[\"\{]([^=]*)[\"\}],*/im", $entry, $titleWords);

		
		$titleWords[1]  = str_replace( '{', '', $titleWords[1] );
		$titleWords[1]  = str_replace( '}', '', $titleWords[1] );
		$titleWords[1]  = preg_replace( '/\s+/', ' ', $titleWords[1] );
		
		echo "\n\n\n<tr><td valign=top width=20%>\n";
		//echo "<b>\"$titleWords[1]\"</b><br>\n";
		echo "<b><a href=\"http://scholar.google.com/scholar?q=$titleWords[1]\"name=\"btnG\">";
		
		echo "<img border=1 width=50 src=http://scholar.google.com/images/scholar_results.gif>";
		
		echo "</a></b><br>";
	
		echo "</td>\n";
		echo "<td width=80%><pre>$entry</pre><hr></td></tr>";
		echo "\n";
	}

	echo "</table>";
}


?>

</td>

<tr><td bgcolor="660099"><font color=white size=1><b>&nbsp;</b></font></td></tr>

</tr>
</table>
</blockquote>
