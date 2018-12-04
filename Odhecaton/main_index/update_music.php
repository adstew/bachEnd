<?php

require_once('../connect.php');

$name = $_POST['c_nameU'];
$new = $_POST['c_newU'];
$sql = "UPDATE composers SET composer_name = '$new' WHERE composer_name = '$name';";
$reponce = @mysqli_query($dbc, $sql);
if ($responce)
{
    echo 'yes';
}
header("Location: main_ol.php?signup=success");
?>