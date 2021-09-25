<?php
    
    $host="localhost";
    $pass="";
    $baza="ksiegarnia";
    $user="root";
    $kodowanie="utf8";
    $polacz="mysql:host=$host; dbname=$baza; charset=$kodowanie";
    try {
        $p=new PDO($polacz,$user,$pass);

    }
    catch(PDOException $err){
        $err->getMessage();
    }
?>
