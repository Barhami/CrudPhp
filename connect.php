<?php
    $con = new mysqli('localhost', 'root', '', 'crud'); //The name of the database

    if (!$con){
        die(mysqli_error($con));
    }
?>