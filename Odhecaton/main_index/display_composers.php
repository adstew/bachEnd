<?php

require_once('../connect.php');
$sql = "SELECT * FROM composers";
$responce = @mysqli_query($dbc, $query);

if ($responce)
{
    echo '<table align="left" cellspacing="5" cellpadding="8">
    
    <tr><td align="left"><b>Name</b></td>
    <td align="left"><b>Nationality</b></td>
    <td align="left"><b>Period</b></td>
    <td align="left"><b>Birth Year</b></td>
    <td align="left"><b>Death Year</b></td></tr>';

    while($row = mysqli_fetch_array($responce))
    {
        echo '<tr><td align="left">' . 
        $row['composer_name'] . '</td><td align="left">' .
        $row['nationality'] . '</td><td align="left">' .
        $row['period_name'] . '</td><td align="left">' .
        $row['birth_year'] . '</td><td align="left">' .
        $row['death_year'] . '</td><td align="left">';
        echo '</tr>';
    }
    echo '</table>';
}
else
{
    echo "Couldn't query.";
}
mysqli_close($dbc);

?>