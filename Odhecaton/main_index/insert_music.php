<?php

require_once('../connect.php');

if (isset($_POST['in_button']))
{
    $name = $_POST['c_name'];
    $nat = $_POST['c_nat'];
    $time = $_POST['c_time'];
    $birth = $_POST['c_birth'];
    $death = $_POST['c_death'];
    $sql = "INSERT INTO composers (composer_name, nationality, period_name, birth_year, death_year) 
            VALUES ('$name', '$nat', '$time', $birth, $death);";
    $reponce = @mysqli_query($dbc, $sql);
    if ($responce)
    {
        echo 'yes';
    }
    header("Location: main_ol.php?signup=success");
}
?>