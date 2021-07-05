<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Księgarnia Internetowa</title>
</head>
<body>
    
    <?php
        echo "test";
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

        $log=$_GET['login'];
        $haslo=$_GET['haslo'];
        $zapytanie="INSERT INTO hasla (login, haslo) VALUES ('$log','$haslo')";
        $ile_obj=$p->query("SELECT COUNT(login) FROM `hasla`WHERE login='$log'");
        $ile=$ile_obj->fetch();
        
        //var_dump((int)$ile[0]);
        if((int)$ile[0]>0){
            echo "login zajęty";
        }
        else {
            $p -> query($zapytanie);
            echo "login zapisany w bazie";
        }
        
    ?>
</body>
</html>
