<?php

require_once('../connect.php');

$sql = "SELECT score_title, file_path, composer_name FROM scores 
        ORDER BY year_written, composer_name;";

$responce = @mysqli_query($dbc, $sql);

if ($responce) 
{
    echo '<ul id="filter_list" style="padding:0; margin-left:20px;">';
    while($row = mysqli_fetch_array($responce)) 
    {
        $path = $row['file_path'];
        echo '<li style="list-style-type:none; padding-bottom:15px;">
        <a href="'.$path.'" style="color:rgb(29, 29, 29); font-size:15px; 
        font-family:Verdana; text-decoration:none;" target="sheet_display">' . 
        $row['score_title'] . '</br> by ' . $row['composer_name'] . '</a></li>';
    }
    echo '</ul>';
}
?>