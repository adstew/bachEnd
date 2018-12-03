<?php

require_once('../connect.php');

$name = $_POST['c_name'];
$sql = "DELETE FROM composers WHERE composer_name = '$name';";
$reponce = @mysqli_query($dbc, $sql);
if ($responce)
{
    echo 'yes';
}
header("Location: main_ol.php?signup=success");
?>