<!-- fetch emotions -->

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

?>

<!-- add quoation -->

<?php 

    $myfeelings = "";
    $myquotation = "";

    if(isset($_POST['insertquote']))
    {
        $myfeelings = $_POST['myfeelings'];
        $myquotation = $_POST['myquotation'];

        $query = "INSERT INTO quotes (emotion, quote) VALUES ('$myfeelings', '$myquotation')";
        mysqli_query($db, $query);

        header('location: index.html');
    }

?>