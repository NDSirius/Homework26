<?php
$hw = 'Edit     something   in this         file';
preg_replace('/\\t{2,}/',"\t",$hw);
var_dump($hw);
