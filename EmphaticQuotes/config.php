<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'quotations');

    $db = mysqli_connect('localhost', 'root', '', 'quotations');

    if($db === false)
    {
        die("Error: Could not connect." . $db -> connect_error);
    }
   

    $query = "SELECT * FROM quotes";
    $result = mysqli_query($db, $query);

    // while ( $row <= mysqli_fetch_array($result)) 
    // {
    //     $options = $options . "<option> $row[1] </option>";
    // }

?>