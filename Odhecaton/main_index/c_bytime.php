<?php

require_once('../connect.php');
$sql = "SELECT composer_name, time_periods.period_name
        FROM composers, time_periods
        WHERE composers.period_name = time_periods.period_name
        ORDER BY composers.birth_year, composers.death_year ASC";
$responce = @mysqli_query($dbc, $sql);

if ($responce)
{
    while($row = mysqli_fetch_array($responce))
    {
        echo '<p style="float:left; clear:both; padding-left:15px;">' . $row['composer_name'] . 
        '</p><p style="float:right; padding-right:15px;">' . $row['period_name'] .
        '</p>';
    }
}
else
{
    echo "Couldn't query.";
}
?>