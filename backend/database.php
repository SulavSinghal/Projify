<?php
    // session_start();
    $db_server = "localhost";
    $db_user = "root";
    $db_passsword = "";
    $db_name = "project";
    $conn = "";

    try{
    $conn = mysqli_connect($db_server, $db_user, $db_passsword, $db_name);
    }

    catch (mysqli_sql_exception){
        echo "Error connecting to database";    
    }
?>