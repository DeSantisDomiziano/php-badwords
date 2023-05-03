<?php

$text = $_POST['text'];
$ban = $_POST['banword'];

echo str_replace($ban, "***", $text);