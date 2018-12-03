<?php

require_once('../connect.php');

if (true)
{
    $sql = "SELECT score_title FROM scores ORDER BY year_written";
    $sqlpath = "SELECT file_path FROM scores";

    $responce = @mysqli_query($dbc, $sql);
    $path_responce = @mysqli_query($dbc, $sql);
    
    if ($responce) 
    {
        while($row = mysqli_fetch_array($responce)) 
        {
            echo '</br><a style="color:rgb(29, 29, 29); font-size:17px; 
            font-family:Verdana; font-decoration:none;" 
            href="../music_files/chopin_9_2" target="sheets">' . $row['score_title'] . '</a></br>';
        }
    }
}
?>