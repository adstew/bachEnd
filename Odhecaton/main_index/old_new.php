<?php

require_once('../connect.php');
$sqlold = "SELECT score_title, composer_name, year_written
        FROM scores
        WHERE year_written = (SELECT MIN(year_written) FROM scores)";
$sqlnew = "SELECT score_title, composer_name, year_written 
        FROM scores 
        WHERE year_written = (SELECT MAX(year_written) FROM scores)";

$resold = @mysqli_query($dbc, $sqlold);
$resnew = @mysqli_query($dbc, $sqlnew);
if ($resold && $resnew)
{
    while($row = mysqli_fetch_array($resold))
    {
        echo '<p style="float:left; font-size:15px;">Oldest score in database: ' . $row['score_title'] . 
            " was written by " . $row['composer_name'] . 
            " in " . $row['year_written'] . '.</p>';
    }
    while($row = mysqli_fetch_array($resnew))
    {
        echo '<p style="float:right; font-size:15px;">Newest score in database: ' . $row['score_title'] . 
            " was written by " . $row['composer_name'] . 
            " in " . $row['year_written'] . '.</p>';
    }
}
else
{
    echo "Couldn't query.";
}
mysqli_close($dbc);
?>