<?php

$db_host ='127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_name = 'contact';

mysql_connect($db_host, $db_username ,$db_password) or die(mysql_error());
mysql_select_db($db_name);


?>