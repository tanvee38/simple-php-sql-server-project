<?php
function openCon() {
    $serverName = 'localhost';
    $connectionOptions = [
        'Database' => 'student_db',
        'Uid' => 'sa',
        'PWD' => 'Str0ngPassw0rd!',
    ];

    // Establishes the connection
    $con = sqlsrv_connect($serverName, $connectionOptions);

    // if( $con ) {
    //     echo "Connection established.<br />";
    // } else{
    //         echo "Connection could not be established.<br />";
    //         die( print_r( sqlsrv_errors(), true));
    // }

    return $con;
}
?>