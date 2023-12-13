<?php
function openCon() {
    $serverName = 'localhost';
    $username = 'root';
    $password = 'root';
    $databaseName = 'db_contact';

    $con = mysqli_connect($serverName, $username, $password, $databaseName);

    return $con;
}
?>