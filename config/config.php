<?php


try {
    //host
    define("HOST", "localhost");

    //dbname
    define("DBNAME", "wooxtravel");

    //username
    define("USER", "root");

    //pass
    define("PASS", "");


    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // if($con == true) {
     //   echo "db connection is a success";
    //} else {
     //   echo "error";
    //} 
} catch(PDOException $Exception) {
    echo $Exception->getMessage(); 
}
?>
