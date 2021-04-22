<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Księgarnia Internetowa</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <header>
            Księgarnia Internetowa
        </header>
        <nav>
            <?php
                include("menu.txt");
            ?>
        </nav>
        <section>
            <h1>Witaj w księgarni oto nasze tytuły :</h1>
            <table>
                <tr>
                    <th>autor</th>
                    <th>tytul</th>
                    <th>cena</th>
                </tr>
            <?php
                // połącz z bazą  
                require_once('polacz.php');
               
                $zapytanie="SELECT * FROM ksiazki";
                $dane=$p->query($zapytanie);
                while($rekord=$dane->fetch()){
                    echo "<tr><td>$rekord[autor]</td><td> $rekord[tytul]</td><td>$rekord[cena] </td></tr>";
                }
                
            ?>
             </table>
        </section>
    </main>
</body>
</html>
