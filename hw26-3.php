<?php
$text = "<TITLE>Find the text enclosed in a tag from the HTML file and output it</TITLE>";
preg_match("|<TITLE>(.*)</TITLE>|is", $text, $result);
$result_string = implode($result);
var_dump($result_string);
?>