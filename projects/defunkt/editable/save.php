<?php

$modifiedtext = $_POST["value"];
$id = $_POST["id"];

$handle = fopen("./webtxt/$id.txt",'w');
fwrite($handle,"$modifiedtext");
fclose($handle);

echo $modifiedtext;

?>
