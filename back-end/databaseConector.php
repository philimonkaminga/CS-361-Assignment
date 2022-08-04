<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "tourism";

    //database connection
    try{

        $conn = mysqli_connect($servername, $username, $password, $database); 
        // echo"connection success!!";
    }catch(PDOException $e){
        echo "Connection failed: " .$e->getMessage();
    }

?>