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

    if(isset($_POST['register']))
    {
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $rPassword = $_POST['rPassword'];

        $query = "INSERT INTO user (firstName, lastName, email, mobile, password, rPassword) VALUES ('$firstName', '$lastName', '$email', '$mobile', '$password', '$rPassword')";
        mysqli_query($db, $query);

        header('location: index.html');
    }

?>