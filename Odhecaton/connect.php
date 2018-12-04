<?php

DEFINE ('DB_USER', 'musicuser');
DEFINE ('DB_PASSWORD', 'Asturiasleyenda1');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'sheet_music');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ');

?>