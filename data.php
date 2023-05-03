<?php

//var_dump($_POST);

echo    'Username: ' . $_POST['username'] . ' ' . '(' . strlen($_POST['username']) . ')' .'<br>' 
        . 'Password: ' . str_replace($_POST['password'], "***", $_POST['password']);;