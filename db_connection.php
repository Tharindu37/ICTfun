<?php
    //define database details

    $servername="localhost";
    $dbusername="root";
    $dbpassword="";
    $databasename="ictfun";

    //create database connection
    $database_connection=new mysqli($servername,$dbusername,$dbpassword,$databasename);

    //check database connection
    if($database_connection->connect_error){
        die("Database Conection failed ".$database_connection->connect_error);
    }else{
        //echo "Database conected";
    }


?>