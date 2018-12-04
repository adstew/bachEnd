<?php

require_once('../connect.php');

if (true)
{
    $sql = "SELECT score_title, file_path FROM scores ORDER BY year_written;";

    $responce = @mysqli_query($dbc, $sql);
    
    if ($responce) 
    {
        while($row = mysqli_fetch_array($responce)) 
        {
            $path = $row['file_path'];
            echo '</br><a href="'.$path.'" style="color:rgb(29, 29, 29); font-size:17px; 
            font-family:Verdana; font-decoration:none;" target="sheet_display">' . 
            $row['score_title'] . '</a></br>';
        }
    }
}
?>