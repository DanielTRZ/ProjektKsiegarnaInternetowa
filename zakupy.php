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
            <h1>Witaj w księgarni</h1>
            <form action="koszyk.php" method="get">
            <table>
                <tr>
                    <th>autor</th>
                    <th>tytul</th>
                    <th>cena</th>
                    <th>ile</th>
                </tr>
            <?php
                // połącz z bazą  
                require_once('polacz.php');
               
                $zapytanie="SELECT * FROM ksiazki";
                $dane=$p->query($zapytanie);
                $nr=1;
                while($rekord=$dane->fetch()){
                    $nazwa='p-'.$nr;
                    $nazwaautor='a-'.$nr;
                    $nazwatytul='t-'.$nr;
                    $nazwacena='c-'.$nr;
                    echo "<tr><td>$rekord[autor]</td><td> $rekord[tytul]</td><td>$rekord[cena] </td>
                    <td><input type=\"number\" name=$nazwa> </td>
                    </tr>";
                    echo "<input type=hidden name=$nazwaautor value=\"$rekord[autor]\">";
                    echo "<input type=hidden name=$nazwatytul value=\"$rekord[tytul]\">";
                    echo "<input type=hidden name=$nazwacena value=\"$rekord[cena]\">";
                    echo "";
                    echo "";
                    $nr++;
                }
            ?>
             </table>
             <input type="submit" value="Dodaj do koszyka">
             </form>
        </section>
    </main>
</body>
</html>
