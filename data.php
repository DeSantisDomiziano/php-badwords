<?php

$text = $_POST['text'];
$ban = $_POST['banword'];

echo $text . '(' . strlen($text) . ')' .'<br>' ;

$newText = str_replace($ban, "***", $text);

echo $newText . '(' . strlen($newText) . ')';