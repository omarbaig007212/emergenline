<?php
    $server="http://remotemysql.com/";
    $username="dZlqhGsQpi";
    $password="iWJZMyqgQm";
    $dbname="dZlqhGsQpi";

    $conn= mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
      die("connection Failed:".mysqli_connect_error());
    }

?>
